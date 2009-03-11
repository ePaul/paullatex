<?php

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
                 "http://www.ctan.org/cgi-bin/ctanPackageInformation.py?id=" . $packagename,
                 $packagename);
    $rez .=
        linkline("TeX Catalogue",
                 "http://texcatalogue.sarovar.org/entries/"
                 . $packagename . ".html");


    // CVS/SVN-link
    $rez .=
        linkline("CVS",
                 "http://cvs.berlios.de/cgi-bin/viewvc.cgi/paullatex/src/" . $packagename . "/");

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


?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
     "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Pauls LaTeX-Packages</title>
<link rel="stylesheet" type="text/css" href="paullatex.css" />
  </head>

  <body>

	<div class="disclaimer">
	<h3>Disclaimer</h3>
	<p>
Nach fast drei Jahren dachte ich mir, ich könnte die Homepage mal überarbeiten. dauert aber noch etwas. (Es folgt der alte Disclaimer.)
</p>
<p>
	Ich habe gerade eben erst dieses Projekt begonnen und daher noch keine ordentliche
	Homepage ... bisher ist das eine (etwas zusammengestrichende) Kopie meiner
	<a href="http://www.math.hu-berlin.de/~ebermann/alg-script/">Algebra-Skript</a>-Seite.
	Einige Links funktionieren noch nicht.
	</p>
	<p>
<a href="http://developer.berlios.de" title="BerliOS Developer"> <img src="http://developer.berlios.de/bslogo.php?group_id=6747" width="124px" height="32px" border="0" alt="">Berlios Developer</a> stellt uns CVS, Webseite und Entwicklungstools zur Verfügung – danke!
	</p>
	</div>

<div class='inhalt'>
	<div id='neues'>
	  <h2>Änderungen</h2>
	  <dl>
<dt>2009-03-11</dt>
<dd>
Nach fast drei Jahren dachte ich mir, ich könnte die Homepage mal überarbeiten. dauert aber noch etwas.
</dd>
<dt>2006-05-31</dt>
<dd>Kleine Aktualisierungen der Homepage</dd>
	<dt>2006-05-25</dt>
	<dd>Erste Version der Homepage online</dd>
	</dl>
	</div>

	<h1>Pauls L<sup>A</sup>T<sub>E</sub>X-Packages</h1>

	<ul id='menu'>
      <li><a href="#einfuehrung">Einführung</a>
	  <li><a href='#pakete'>Pakete</a>
		<ul>
		  <li><a href='#installation'>Installation</a></li>
		  <li><a href='#download'>Download</a>
			<ul>
			  <li><a href='#alg-script'>alg-script</a></li>
			  <li><a href='#extpfeil'>extpfeil</a></li>
			  <li><a href='#faktor'>faktor</a></li>
			  <li><a href='#pauldoc'>pauldoc</a></li>
			  <li><a href='#randbild'>randbild</a></li>
			</ul>
		  </li>
		  <li><a href='#makedvi'>Makedvi + makepackage</a></li>
		</ul>
	  </li>
	  <li><a href="#abhang">Abhängigkeitsgraph</a></li>
	  <li><a href="#bugs">Entdeckte LaTeX-Bugs</a></li>
	</ul>


    <h2 id="einfuehrung">Einführung</h2>

<p>
Ich habe im Laufe der Zeit eine Reihe LaTeX-Pakete geschrieben,
um einige Sachen umzusetzen, für die ich bisher keine Lösungen
gefunden habe.
</p>

<p>
Einige der hier vorhandenen Pakete sind durch die Arbeit an meinem
aktuellen Projekt, einer
 <a href="http://www.math.hu-berlin.de/~ebermann/alg-script/">
     Digitalisierung einer Vorlesungs-Mitschrift</a>, entstanden.
     Einige frühere LaTeX-Pakete, allerdings schlechter
     dokumentiert und nicht mehr gepflegt, gibt es auf meiner
     <a href="http://www.math.hu-berlin.de/~ebermann/packages/latex.html">
     LaTeX-Seite am Mathe-Institut</a>.
(Wenn ich mal viel Zeit habe und/oder es jemanden interessiert,
 werde ich einiges davon hierher migrieren.)
    </p>


<div id='installation'>
<h2>Installation</h2>

<p>Die LaTeX-Pakete sind alle auf <a href='www.ctan.org/'>CTAN</a>
zu finden (den Link gibt es jeweils im blauen Kasten).
</p>
<p>
Einige davon sind in MikTeX und/oder TeXLive schon enthalten,
    dann ist keine Installation notwendig
    (oder sie geht – zumindest bei MikTeX –  automatisch).
</p>
<p>
Ansonsten braucht müsst ihr die jeweilige .sty-Datei
in ein Verzeichnis packen, in dem TeX es findet — es
    geht das Verzeichnis, in dem das Dokument liegt,
    oder etwa "texmf/tex/latex/paul/".
</p>

	<p>
	  Die Pakete sind als jeweils ein <abbr>DTX</abbr>-Archiv
      vorhanden, welches den dokumentierten Quelltext sowie
     die Benutzerdokumentation enthält.
     Dazu gibt es eine Installationsdatei (<code>.ins</code>).
	</p>
	<p>
	  Mit <kbd>latex <var>paketname</var>.ins</kbd> kann man aus
      dem DTX-Archiv das fertige Package oder die Klasse kreieren,
     mit
	  <kbd>latex <var>paketname</var>.dtx</kbd> erstellt man die
Dokumentation. (Um auch Inhaltsverzeichnis, Index, Änderungsliste
                sowie korrekte Querreferenzen zu erhalten,
                sollte man mehrfach LaTeX und makeindex laufen
                lassen &mdash; mein
                <a href='#makepackage'>Makepackage-Skript</a>
                kann einem das abnehmen.)
    (Für die Dokumentationserstellung wird je nach Paket
     <code>pauldoc.sty</code> oder <code>gmdoc-enhance</code>
     benötigt &mdash; also entweder damit anfangen, oder die
     Datei extra herunterladen.)
	</p>

</div>

<div id='endnutzer'>
<h2>Pakete für End-Nutzer</h2>

<?php
pack_intro("randbild", "Deutsch");
?>

<p>
Dieses Package hilft dabei, kleine pstricks-Diagramme auf dem
Rand der Seite unterzubringen.
</p>
</div>

<?php pack_intro("dateiliste", "Deutsch"); ?>
<p>
Dieses Package erstellt eine Liste aller geladenen Dateien
und nimmt sie auch noch in die Ausgabedatei auf.
</p>

</div>


<?php pack_intro("faktor", "Deutsch"); ?>

<p>
Dieses Package hilft beim Setzen von Faktorstrukturen
(Faktormengen, Faktorringe, Faktormoduln etc.).
</p>
<p>
  Das sind so Sachen wie <sup>Z</sup>/<sub>2Z</sub>.
</p>

</div>

<?php pack_intro("noitcrul", "Deutsch"); ?>

<p>
Dieses Package ermöglicht schönere Unterstreichungen im
Mathe-Modus (z.B. für Kategoriennamen)
</p>

</div>



</div>

<div id='autoren'>
<h2>Pakete für Package-Autoren</h2>

<p>
  Die hier genannten Pakete sind vor allem für Autoren anderer
Pakete interessant – insbesondere werden sie teilweise von meinen
eigenen Paketen verwendet.
Endnutzer brauchen sie nur, wennn das sie ein
    Paket verwenden, welches diese als Abhängigkeit hat.
</p>

<?php pack_intro('exp-testopt', "Esperanto"); ?>

<p>Das Paket <abbr>exp-testopt</abbr> hilft dabei, Kommandos mit
     optionalen Argumenten so zu definieren, dass das Kommando
     expandibel bleibt.
</p>
</div>

</div>

<?php pack_intro("robustcommand", "Deutsch"); ?>

<p>
Dieses Package definiert ein Kommando, welches beim Definieren
    von anderen Kommandos hilft.
</p>

</div>

<?php pack_intro("pauldoc", "Deutsch"); ?>

<p>
Ein Paket, um LaTeX-Pakete nach meinem Geschmack zu dokumentieren.
    Basiert auf doc und einigen anderen Standard-Paketen.
</p>

</div>


<?php pack_intro("gmdoc-enhance", "Deutsch"); ?>

<p>
  Eine Alternative zu doc ist gmdoc. Dieses Paket fügt zu
den Features von gmdoc noch drei weitere hinzu.
(Nicht kompatibel zu pauldoc).
</p>

</div>

<div id='gemischt'>
<h2>Gemischte Pakete</h2>
<p>
Diese Pakete stellen sowohl Benutzerbefehle als auch
zusätzliche Funktionalität für Package-Autoren zur Verfügung.
</p>

<?php pack_intro("minipage-marginpar", "Deutsch"); ?>

<p>
Ermöglicht es, <code>\marginpar</code>-Befehle innerhalb von Boxen
    (wie minipages) anzuwenden – die Befehle werden
    gesammelt und dann nach der Box abgesetzt.
</p>
<p>
    Für Nutzer gibt es die Umgebung
<code>minipagewithmarginpars</code>, und
    die internen Befehle können von Package-Autoren genutzt
    werden, die ähnliche Funktionalität für ihre Makros/Umgebungen
    bereitstellen wollen.
    </p>

</div>

<?php pack_intro("extpfeil", "Deutsch"); ?>

<p>
Dieses Package erstellt verlängerbare Pfeile im Mathe-Modus
mit Super- und Subskript.
</p>

<p>
Für Paket-Autoren (oder fortgeschrittene Benutzer) gibt es auch
Kommandos, um selbst solche Pfeile zu erstellen.
</p>

</div>

</div> <!-- gemischte -->


<div id='skripte'>
  <table class='linkbox'>
    <caption>Links f&uuml;r die Skripte</caption>
<?php
    echo linkline("CVS", 'http://cvs.berlios.de/cgi-bin/viewvc.cgi/paullatex/src/scripts/');
?>
    <tr><th>Doku-Sprache</th><td>Deutsch</td></tr>
  </table>
<h2>Hilfs-Skripte</h2>

<p>Ich habe mir zwei Bash-Skripte geschrieben, um beim Erstellen
    der Pakete zu helfen.
</p>

<div id='makepackage'>
    <h3>makepackage.sh</h3>
<p>makepackage erstellt (in einem neuen Arbeitsverzeichnis) aus
der DTX-Datei die Paketdatei und danach die Dokumentation, mit
    mehreren LaTeX-Durchläufen.
    Bei Bedarf kann auch eine PDF-Datei sowie eine ZIP-Datei
    für den CTAN-Upload erstellt werden.
</p>
<p>
    makepackage.sh sollte aus dem Verzeichnis oberhalb des
Quelltextverzeichnisses aufgerufen werden. Mit <code>--help</code>
gibt es eine Kommandozeilenhilfe.
</p>
</div>

<div id='makepackages'>
<h3>makepackages.sh</h3>
<p>
  makepackages ruft einfach nur makepackage für alle Pakete
nacheinander auf (in einer Reihenfolge, die Abhängigkeiten
                  berücksichtigt).
</p>
</div>
</div>

<div id='abhang'>

	<h2>Abhängigkeitsgraph</h2>
	<div style="float:right; margin: 1ex;">
	  <a href="abhang.png"><img  src="abhang-klein2.png" alt=""></a>
	</div>
	<p>
	  Ich habe einen <a href="abhang.png">Abhängigkeitsgraphen</a>
    gemalt (bzw. von <a href="http://www.graphviz.org/">dot</a>
            malen lassen).
	  Eingezeichnet sind alle für die Dokumentation
    der (im April 2006 vorhandenen) Packages
	  verwendeten TeX/LaTeX-Quelltexte, inklusive der bei meinem
	  <acronym title="LaTeX">L<sup>A</sup>T<sub>E</sub>X</acronym>-System
	  (MikTeX) mitgelieferten Pakete, aber ohne Fontdeskriptoren und
	  Kernel-Dateien.
	</p>
	<p>
	  Eine Legende habe ich nicht gemalt, aber es scheint mir gerade
	  ziemlich selbsterklären, wenn man sich diese Seite hier
                              angesehen
	  hat. (In dem Bereich der Pakete, die nicht von mir sind,
            fehlen wahrscheinlich noch einige Quer-Abhängigkeiten.)
	</p>
	<p>Stand ist der 4.4.2006, daher heißt auf dem Bild das
     <a href="#noitcrul">noitcrul-Paket</a> noch
    <em>underline</em>. (Ich werde den Graphen wohl nicht so häufig
	  aktualisieren wie die Pakete.)</p>
	  
</div>

</div>

  </body>
</html>
