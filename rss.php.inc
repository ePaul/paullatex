<?php

  /*
   * Hier habe ich eine Datei kopiert, die ich vor einigen Jahren mal für die
   * Webseite der Deutschen Esperanto-Jugend erstellt habe.
   *
   * Sie erstellt aus einem Array-basiertem Format einen RSS-Stream.
   */


/**
 * Libraro por kreado de dulingva RSS-2.0-fluo.
 *
 * Ioma dokumentado:
 *    http://www.esperanto.de/dej/aktivikio.pl?Retejo-Funkciado/RSS
 * kaj pri la formato de $mesagxoj:
 *    http://www.esperanto.de/dej/aktivikio.pl?Retejo-Funkciado/Aktualajxoj
 */


/**
 * $lingvo - aux "de" aux "eo".
 * $mesagxoj - array() de array()-oj kun
 *             la mesagxoj en certa formato.
 * $bazaj_datoj - array() kun la bazaj informoj
 *                de la RSS-fluo (-> donu_channel_datojn()).
 * redonas la RSS-dokumenton kiel string.
 */
function rss_kreu_dokumenton($lingvo, $mesagxoj, $bazaj_datoj)
{
  $kodigo = $bazaj_datoj['kodigo'];
  $rezulto = <<<DATOFINO
<?xml version="1.0" encoding="{$kodigo}" ?>
<rss version="2.0">
  <channel>

DATOFINO;
  //  $rezulto .= "<!-- bazaj_datoj: " .  var_export($bazaj_datoj, true) . "-->";
  //  $rezulto .= "<!-- mesagxoj: " .  var_export($mesagxoj, true) . "-->";
  $rezulto .= rss_donu_channel_datojn($lingvo, $bazaj_datoj);
  $rezulto .= rss_kreu_cxiujn_itemojn($lingvo,
                                      $mesagxoj,
                                      $bazaj_datoj['ligobazo_'.$lingvo]);
  $rezulto .= <<<DATOFINO
  </channel>
</rss>
DATOFINO;
  return $rezulto;
}

/**
 * $bazaj datoj:
 *  - titolo_de (teksto)
 *  - titolo_eo
 *  - ligo_de (ligo al la cxefpagxo de la blogo)
 *  - ligo_eo
 *  - priskribo_de (priskribo de la RSS-strio)
 *  - priskribo_eo
 *  - novajxfonto (= dosiernomo, estas uzata por
 *                  kalkuli la sxangxdaton)
 *  uzataj de aliaj funkcioj:
 *  - kodigo ("UTF-8", "ISO-8859-1", ...)
 *  - ligobazo_de  (url-komenco, bazo por krei <guid>)
 *  - ligobazo_eo  (same, en esperanto)
 *  nenecesaj:
 *  - ttl  (defauxlto: 360 = 6 horoj)
 *  - kopirajto (teksto)
 *  - bildo: array()  (-> rss_formatu_bildon)
 */
function rss_donu_channel_datojn($lingvo, $bazaj_datoj)
{
  $rezulto = <<<DATOFINO
    <title>{$bazaj_datoj['titolo_'.$lingvo]}</title>
    <link>{$bazaj_datoj['ligo_'.$lingvo]}</link>
    <description>{$bazaj_datoj['priskribo_'.$lingvo]}</description>
    <language>{$lingvo}</language>

DATOFINO;
  if ($bazaj_datoj['novajxfonto'])
      {
          $fontodato = filemtime($bazaj_datoj['novajxfonto']);
      }
  else
      {
          $fontodato = $GLOBALS['plej_lasta_datumo'];
      }
  $programdato = filemtime(__FILE__);
  $sxangxDato = date("r", max($fontodato, $programdato));
  $ttl = $bazaj_datoj['ttl']
    or $ttl = '360';
  $rezulto .= <<<DATOFINO
    <generator>RSS-Generilo de Pa&#365;lo 2.0<!-- http://www.esperanto.de/dej/aktivikio.pl?Retejo-Funkciado/RSS --></generator>
    <ttl>{$ttl}</ttl>
    <docs>http://blogs.law.harvard.edu/tech/rss</docs>
    <lastBuildDate>{$sxangxDato}</lastBuildDate>

DATOFINO;
  if ($bazaj_datoj['kopirajto_'.$lingvo])
    {
      $rezulto .= '    <copyright>'.$bazaj_datoj['kopirajto_'.$lingvo].'</copyright>
';
    }

  if (isset($bazaj_datoj['bildo']))
    {
      $rezulto .= rss_formatu_bildon($bazaj_datoj['bildo']);
    }
  return $rezulto;
}


/**
 * TODO: priskribo
 */
function rss_formatu_bildon($bildo)
{
  // TODO
  return "";
}


/**
 */
function rss_kreu_cxiujn_itemojn($lingvo, $mesagxoj, $ligobazo)
{
	$rezulto = "";
  //  $rezulto .= "<!-- mesagxoj: " .  var_export($mesagxoj, true) . "-->";
  $pubDato = strtotime("2006-01-01");
  foreach($mesagxoj AS $elemento)
    {
      //      $rezulto .= "<!-- elemento: " . var_export($elemento, true) . "-->";
      $rezulto .= rss_kreu_item($elemento, $lingvo, $ligobazo);
      $pubDato = max($pubDato, strtotime($elemento['dato']));
    }
  return "    <pubDate>" . date("r", $pubDato) . "</pubDate>\n" . $rezulto;
}

function rss_retadrestransformo($teksto)
{
    $rezulto = "";
    $indekso = 0;
    while(true)
      {
        $pos = strpos($teksto, "{{", $indekso);
        if ($pos === FALSE)
          {
            // ne plu aperas "{{";
            $rezulto .= substr($teksto, $indekso);
            break;
          }
        $rezulto .= substr($teksto, $indekso, $pos-$indekso);
        $fino = strpos($teksto, "}}", $indekso);
        if ($fino === false)
          {
            // ne okazu!
            $rezulto .= "<strong>ERARO</strong>"
              . substr($teksto, $pos+2);
            break;
          }
        $adreso = substr($teksto, $pos+2, $fino - ($pos+2));
        $rezulto .= rss_konvertu_adreson($adreso);
        $indekso = $fino + 2;
      }
    return $rezulto;

}

function rss_konvertu_adreson($adreso)
{
    list($konto, $servilo) = split("@", $adreso);
    if ($servilo == "")
      { 
        $servilo = "esperanto.de";
      }
    return "[".$konto . " (at) " . $servilo."]";
}


function rss_kreu_item($elemento, $lingvo, $ligobazo)
{
  $guid = $ligobazo . $elemento['id'];
  if (isset($elemento['titolo_' . $lingvo ])) {
    $titolo = htmlspecialchars($elemento['titolo_' . $lingvo ]);
  } else if (isset($elemento['titolo'])) {
    $titolo = htmlspecialchars($elemento['titolo']);
  }
  else {
    $titolo = "";
  }
  if (isset($elemento['teksto_' . $lingvo])) {
    $description = $elemento['teksto_'.$lingvo];
  } else if (isset($elemento['teksto'])) {
    $description = $elemento['teksto'];
  } else {
    $description = "";
  }

  if (isset($elemento['ligo_' . $lingvo])) {
    $ligilo = $elemento['ligo_' . $lingvo];
  } else if (isset($elemento['ligo'])) {
    $ligilo = $elemento['ligo'];
  } else {
    $ligilo = $guid;
  }
  // relative URLs auflösen
  $description = str_replace('<a href="/',
			     '<a href="http://paullatex.berlios.de/',
                             $description);
  $description = rss_retadrestransformo($description);
  $description = htmlspecialchars($description, ENT_QUOTES);
  $dato = date("r", strtotime($elemento['dato']));
  $rezulto = <<<DATOFINO
    <item>
      <title>{$titolo}</title>
      <link>{$ligilo}</link>
      <description>{$description}</description>
      <pubDate>{$dato}</pubDate>
      <guid>{$guid}</guid>
    </item>

DATOFINO;
  return $rezulto;
}

