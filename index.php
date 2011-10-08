<?php

require_once ("./boxes.php.inc");
require_once ("./neu-liste.php.inc");

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
     "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Pauls LaTeX-Packages</title>
    <link rel="stylesheet" type="text/css" href="paullatex.css" />
    <link rel='alternate'
          type='application/rss+xml'
          title="RSS-Feed der Neuigkeiten"
	  href='rss.php'
	  />
  </head>

  <body>

	<div class="disclaimer">
	<h3>Werbung</h3>
	<p>
          <a href="https://github.com/">GitHub</a> hosted unser Git-Repository,
          und stellt uns auch den Webspace für diese Seiten zur Verfügung.
          Danke!
        </p>
	</div>

<div class='inhalt'>
<?php neuigkeiten_box($mesagxoj); ?>


<h1>Pauls L<sup>A</sup>T<sub>E</sub>X-Packages</h1>

	<ul id='menu'>
      <li><a href="#einfuehrung">Einführung</a>
		  <li><a href='#installation'>Installation</a></li>
		  <li><a href='#download'>Pakete für Endnutzer</a>
			<ul>
			  <li><a href='#randbild'>randbild</a></li>
<li><a href='#dateiliste'>dateiliste</a></li>
			  <li><a href='#faktor'>faktor</a></li>
			  <li><a href='#noitcrul'>noitcrul</a></li>
			</ul>
</li>
		  <li><a href='#download'>Pakete für Paketautoren</a>
			<ul>
			  <li><a href='#exp-testopt'>exp-testopt</a></li>
			  <li><a href='#robustcommand'>robustcommand</a></li>
			  <li><a href='#pauldoc'>pauldoc</a></li>
			  <li><a href='#gmdoc-enhance'>gmdoc-enhance</a></li>
</ul></li>
		  <li><a href='#download'>Pakete für beide</a>
			<ul>
			  <li><a href='#minipage-marginpar'>minipage-marginpar</a></li>
			  <li><a href='#extpfeil'>extpfeil</a></li>
</ul>
		  </li>
<li><a href='#makedvi'>Makedvi + makepackage</a></li>
<li><a href="#abhang">Abhängigkeitsgraph</a></li>
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


<div>
<h2  id='installation'>Installation</h2>

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

<div id="Github">
<h2>GitHub</h2>
<p>
  Alle Pakete sind auch in meinem GitHub-Repository <a href="https://github.com/ePaul/paullatex">paullatex</a> zu finden. Wer Verbesserungen beisteuern will,
  sollte am besten dieses Repository clonen, die Änderungen in seinem Klon
  durchführen und mir dann einen Pull-Request schicken.
  (Aber auch Verbesserungsvorschläge in anderer Form nehme ich
   gern entgegen.)
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
<p>
  Dabei können die Änderungsdaten und Revisionsnummern der
  einzelnen Dateien aus einem CVS oder Subversion geholt werden.
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
Mathe-Modus (z.B. für Kategoriennamen).
</p>
<p>
Der Name steht für <em>no italics correction underline</em>.
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
    echo linkLine("Github sources",
                 "https://github.com/ePaul/paullatex/tree/master/scripts",
                  "epaul/paullatex/scripts");

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
	
<div id="wer-ist">
  <h2>Wer ist Paul?</h2>
  <p>
    Der Paul, nach dem PaulLaTeX benannt ist, ist der Autor der Pakete,
    Paul Ebermann.</p>
  <p>
    Für Fehlermeldungen zu den Paketen (oder Lob, Anregungen,
    etc.) bin ich zu erreichen unter
    <a href="mailto:Paul-Ebermann@gmx.de">Paul-Ebermann@gmx.de</a>.
  </p>
  <p>
    Auch so ziemlich jeder andere Paul Ebermann, der 
    <a href="http://www.google.com/search?q=Paul+Ebermann">mit Google zu finden
    ist</a>, bin ich. Unter Esperantisten bin ich auch als
    <a href="http://www.google.com/search?hl=eo&q=Pa%C5%ADlo+Ebermann">Paŭlo
      Ebermann</a> bekannt.
  </p>
  <p>Ich habe eine (nicht mehr sehr aktuelle)
    <a href="http://www.math.hu-berlin.de/">Homepage</a> beim Institut
    für Mathematik der Humboldt-Universität – da sind auch weitere meiner
    Projekte zu finden.
  </p>
  <p>Ich habe auch ein <a href="http://paul-ebermann.tumblr.com/">Blog</a>.</p>
</div>

</div>

<p>$Id$</p>

  </body>
</html>
