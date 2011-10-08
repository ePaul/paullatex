<?php

/*
 * Funktionen für die Hauptseite.
 */



function linkto($adreso, $teksto) {
    return "<a href='"
        . htmlspecialchars($adreso,
                           ENT_QUOTES)
        . "' >"
        . htmlspecialchars($teksto) . "</a>";
}

function linkline($kategorio, $ligo, $teksto="") {
    $rez = "    <tr><th>";
    $rez .= htmlspecialchars($kategorio);
    $rez .= "</th><td>";
    if ("" == $teksto) {
        $teksto = rtrim($ligo, '/');
        $teksto = strrchr($teksto, '/');
        $teksto = substr($teksto, 1);
    }
    $rez .= linkto($ligo, $teksto);
    $rez .= "</td></tr>\n";
    return $rez;
}

function linkbox($packagename, $dokusprache, $depend=null) {
    $rez = "";

    $rez .= "  <table class='linkbox'>\n";
    $rez .= "    <caption>Links f&uuml;r " .$packagename . "</caption>\n";
    $rez .=
        linkline("CTAN-Verzeichnis",
                 "http://www.ctan.org/tex-archive/macros/latex/contrib/" .
                 $packagename . '/', 
                 "macros/latex/contrib/" . $packagename);
    $rez .=
        linkline("CTAN-Package",
                 "http://www.ctan.org/pkg/" .
                 $packagename,
                 $packagename);
    $rez .=
        linkline("TeX Catalogue",
                 "http://texcatalogue.sarovar.org/entries/"
                 . $packagename . ".html");

    // Github-Link
    $rez .=
        linkLine("Github sources",
                 "https://github.com/ePaul/paullatex/tree/master/" .
                  $packagename,
                  "epaul/paullatex/" . $packagename);
    

    $rez .= "    <tr><th>Doku-Sprache</th><td>" . $dokusprache .
        "</td></tr>\n";

    if ($depend) {
        // TODO
    }


    $rez .= "  </table>\n";
    return $rez;

}


function pack_intro($packagename, $dokusprache, $depend=null)
{
    echo "<div id='" . $packagename . "'>\n";
    echo linkbox($packagename, $dokusprache, $depend);
    echo "  <h3>" . $packagename . "</h3>\n";
}

function neuigkeiten_box($listo)
{
/*   echo "<pre>"; */
/*   var_export($listo); */
/*   echo "</pre>"; */
  echo "<div id='neues'>\n" .
    "<p style='float:right;'>" . linkto("feed.rss", "RSS") . "</p>\n";
  echo "<h2>Neuigkeiten</h2>\n<dl>\n";
  foreach($listo AS $element) {
    
    echo "<dt id='neues-".$element['id']."'>".$element['dato'] . ": ".
      (isset($element['titolo'])?$element['titolo']:'') . "</dt>\n";

    echo "<dd>" . $element['teksto'];    
    if (isset($element['ligo'])) {
      echo "<a href='".$element['ligo']."'>⇨</a>";
    }
    echo "</dd>\n";
  }
  echo "</dl>\n</div>";
}
