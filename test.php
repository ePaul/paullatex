<?php

function linkto($adreso, $teksto) {
    return "<a href='"
        . htmlspecialchars($adreso,
                           ENT_QUOTES)
        . "' >"
        . htmlspecialchars($teksto) . "</a>";
}

function linkline($kategorio, $ligo, $teksto="") {
    $rez = "<tr><th>";
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

    $rez .= "<table class='linkbox'>\n";
    $rez .= "<caption>Links f&uuml;r " .$packagename . "</caption>";
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

    if ($depend) {
        // TODO
    }


    $rez .= "</table>\n";
    return $rez;

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
Nach fast drei Jahren dachte ich mir, ich k殮te die Homepage mal 좥rarbeiten. dauert aber noch etwas. (Es folgt der alte Disclaimer.)
</p>
<p>
	Ich habe gerade eben erst dieses Projekt begonnen und daher noch keine ordentliche
	Homepage ... bisher ist das eine (etwas zusammengestrichende) Kopie meiner
	<a href="http://www.math.hu-berlin.de/~ebermann/alg-script/">Algebra-Skript</a>-Seite.
	Einige Links funktionieren noch nicht.
	</p>
	<p>
	<a href="http://developer.berlios.de" title="BerliOS Developer"> <img src="http://developer.berlios.de/bslogo.php?group_id=6747" width="124px" height="32px" border="0" alt="BerliOS Developer"> Berlios Developer</a> stellt uns CVS, Webseite und Entwicklungstools zur Verf짵ng - danke!  Dort gibt es auch eine <a href="http://developer.berlios.de/projects/paullatex/">Projektseite</a>.
	</p>
	</div>

<div class='inhalt'>
	<div id='neues'>
	  <h2>Įderungen</h2>
	  <dl>
<dt>2006-05-31</dt>
<dd>Kleine Aktualisierungen der Homepage</dd>
	<dt>2006-05-25</dt>
	<dd>Erste Version der Homepage online</dd>
	</dl>
	</div>

	<h1>Pauls L<sup>A</sup>T<sub>E</sub>X-Packages</h1>

	<ul id='menu'>
      <li><a href="#einf쨲ung">Einf쨲ung</a>
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
	  <li><a href="#abhang">Abh䮧igkeitsgraph</a></li>
	  <li><a href="#bugs">Entdeckte LaTeX-Bugs</a></li>
	</ul>


    <h2 id="einf쨲ung">Einf쨲ung</h2>

<p>
Ich habe im Laufe der Zeit eine Reihe LaTeX-Pakete geschrieben,
um einige Sachen umzusetzen, fuer die ich bisher keine Loesungen
gefunden habe.
</p>

<p>
Einige der hier vorhandenen Pakete sind durch die Arbeit an meinem
aktuellen Projekt, einer
 <a href="http://www.math.hu-berlin.de/~ebermann/alg-script/">
     Digitalisierung einer Vorlesungs-Mitschrift</a>, entstanden.
     Einige fr쨥re LaTeX-Pakete, allerdings schlechter
     dokumentiert und nicht mehr gepflegt, gibt es auf meiner
     <a href="http://www.math.hu-berlin.de/~ebermann/packages/latex.html">
     LaTeX-Seite am Mathe-Institut</a>.
(Wenn ich mal viel Zeit habe und/oder es jemanden interessiert,
 werde ich einiges davon hierher migrieren.)
    </p>


	<h2 id='pakete'>LaTeX-Pakete</h2>
	

	<h3 id='installation'>Installation</h3>
	<p>
	  Die Pakete sind als jeweils ein <abbr>DTX</abbr>-Archiv
      vorhanden, welches den dokumentierten Quelltext sowie
     die Benutzerdokumentation enth䬴.
     Dazu gibt es eine Installationsdatei (<code>.ins</code>).
	</p>
	<p>
	  Mit <kbd>latex <var>paketname</var>.ins</kbd> kann man aus
      dem DTX-Archiv das fertige Package oder die Klasse kreieren,
     mit
	  <kbd>latex <var>paketname</var>.dtx</kbd> erstellt man die
Dokumentation. (Um auch einen Index, Įderungsliste sowie
                korrekte Querreferenzen zu erhalten,
                sollte man mehrfach LaTeX und makeindex laufen
                lassen &mdash; mein
                <a href='#makepackage'>Makepackage-Skript</a>
                kann einem das abnehmen.)
    (F철die Dokumentationserstellung wird <code>pauldoc.sty</code>
     ben洩gt &mdash; also entweder damit anfangen, oder die
     Datei extra runterladen.)
	</p>
	<p>
	  Wem das zu m쨳elig ist, der kann jeweils das fertige Paket
     als Klassen- oder
	  Package-Datei und die Dokumentation als PDF oder PostScript herunterladen.
	</p>


<h3 id='endnutzer'>Pakete f철End-Nutzer</h3>

<h4 id='randbild'>randbild</h4>

<?php
echo linkbox("randbild", "Deutsch");
?>

<p>
Dieses Package hilft dabei, kleine pstricks-Diagramme auf dem
Rand der Seite unterzubringen.
Dieses Package hilft dabei, kleine pstricks-Diagramme auf dem
Rand der Seite unterzubringen.
Dieses Package hilft dabei, kleine pstricks-Diagramme auf dem
Rand der Seite unterzubringen.
Dieses Package hilft dabei, kleine pstricks-Diagramme auf dem
Rand der Seite unterzubringen.
Dieses Package hilft dabei, kleine pstricks-Diagramme auf dem
Rand der Seite unterzubringen.
Dieses Package hilft dabei, kleine pstricks-Diagramme auf dem
Rand der Seite unterzubringen.
</p>



<h3>Pakete f철Package-Autoren</h3>

<p>
  Die hier genannten Pakete sind vor allem f철Autoren anderer
Pakete interessant. Endnutzer brauchen sie nur, wennn das sie ein
     Paket verwenden, welches diese als Abh䮧igkeit hat.
</p>

<h4 id='exp-testopt'>exp-testopt</h4>

<p>Das Paket <abbr>exp-testopt</abbr> hilft dabei, Kommandos mit
     optionalen Argumenten so zu definieren, dass das Kommando
     expandibel bleibt.
</p>








    
	<h3 id='download'>Download:</h3>

<p class="disclaimer">
Die Download-Links funktionieren hier noch nicht.
Bei <a href="http://www.dante.de/cgi-bin/ctan-index">CTAN</a> gibt
es die aktuellste ver榦entlichte Version (jeweils nach dem Package-Namen
										   suchen),
 auf meiner
 <a href="http://www.math.hu-berlin.de/~ebermann/alg-script/">Algebra-Skript</a>-Seite
eine 䬴ere Version. Im <a href="http://developer.berlios.de/cvs/?group_id=6747">CVS</a> gibt es die aktuelle Arbeits-Version (oft mit falscher Versions-Nummer).

Ich muss hier noch einen Automatismus f철den Verweis auf
die jeweils aktuellste Version bei Berlios einbauen ...
</p>

	<table>
	  <thead>
		<tr>
		  <th>Paketname</th>
		  <th>Kurzbeschreibung</th>
		  <th>Quelltext</th>
		  <th>Paket</th>
		  <th>Doku</th>
		  <th>Version</th>
		  <th>Datum</th>
		</tr>
	  </thead>
	  <tbody>
		<tr>
		  <td>dateiliste</td>
		  <td id='dateiliste'>
			Dieses Package erstellt eine Liste aller geladenen Dateien und nimmt sie
			auch noch in die Ausgabedatei auf.
		  </td>
		  <td><a href='packages/dateiliste.dtx'>DTX</a>, <a href='packages/dateiliste.ins'>INS</a></td>
		  <td><a href='packages/dateiliste.sty'>STY</a></td>
		  <td><a href='packages/dateiliste.ps'>PS</a>, <a href='packages/dateiliste.pdf'>PDF</a></td>
		  <td><strong>v0.1</strong></td>
		  <td><strong>2006/04/03</strong></td>
		</tr>
		<tr>
		  <td>extpfeil</td>
		  <td id='extpfeil'>
			Dieses Package erstellt verl䮧erbare Pfeile im Mathe-Modus
			mit Super- und Subskript.
		  </td>
		  <td><a href='packages/extpfeil.dtx'>DTX</a>, <a href='packages/extpfeil.ins'>INS</a></td>
		  <td><a href='packages/extpfeil.sty'>STY</a></td>
		  <td><a href='packages/extpfeil.ps'>PS</a>, <a href='packages/extpfeil.pdf'>PDF</a></td>
		  <td>v0.2</td>
		  <td>2006/03/23</td>
		</tr>
		<tr>
		  <td>faktor</td>
		  <td id='faktor'>
			Dieses Package hilft beim Setzen von Faktorstrukturen (Faktormengen,
			Faktorringe, ...).
		  </td>
		  <td><a href='packages/faktor.dtx'>DTX</a>, <a href='packages/faktor.ins'>INS</a></td>
		  <td><a href='packages/faktor.sty'>STY</a></td>
		  <td><a href='packages/faktor.ps'>PS</a>, <a href='packages/faktor.pdf'>PDF</a></td>
		  <td>v0.1a</td>
		  <td>2006/03/23</td>
		</tr>
		<tr>
		  <td id='pauldoc'>pauldoc</td>
		  <td>
			Dieses Package hilft bei der Dokumentation meiner Packages.
			Es wird nur von den Dokumentationen meiner Pakete verwendet.
		  </td>
		  <td><a href='packages/pauldoc.dtx'>DTX</a>, <a href='packages/pauldoc.ins'>INS</a></td>
		  <td><a href='packages/pauldoc.sty'>STY</a></td>
		  <td><a href='packages/pauldoc.ps'>PS</a>, <a href='packages/pauldoc.pdf'>PDF</a></td>
		  <td><strong>v0.4</strong></td>
		  <td><strong>2006/04/03</strong></td>
		</tr>
		<tr>
		  <td id='randbild'>randbild</td>
		  <td>
			Dieses Package hilft dabei, kleine Diagramme auf dem Rand der
			Seite unterzubringen.
		  </td>
		  <td><a href='packages/randbild.dtx'>DTX</a>, <a href='packages/randbild.ins'>INS</a></td>
		  <td><a href='packages/randbild.sty'>STY</a></td>
		  <td><a href='packages/randbild.ps'>PS</a>, <a href='packages/randbild.pdf'>PDF</a></td>
		  <td>v0.1a</td>
		  <td>2006/03/23</td>
		</tr>
		<tr>
		  <td id='robustcommand'>robustcommand</td>
		  <td>
			Dieses Package definiert ein Kommando, welches beim Definieren
			von anderen Kommandos hilft. 
		  </td>
		  <td><a href='packages/robustcommand.dtx'>DTX</a>, <a href='packages/robustcommand.ins'>INS</a></td>
		  <td><a href='packages/robustcommand.sty'>STY</a></td>
		  <td><a href='packages/robustcommand.ps'>PS</a>, <a href='packages/robustcommand.pdf'>PDF</a></td>
		  <td>v0.1</td>
		  <td>2006/03/23</td>
		</tr>
		<tr>
		  <td id='noitcrul'>noitcrul</td>
		  <td>
			Dieses Package erm槬icht sch殥re Unterstreichungen.
		  </td>
		  <td><a href='packages/underline.dtx'>DTX</a>, <a href='packages/underline.ins'>INS</a></td>
		  <td><a href='packages/underline.sty'>STY</a></td>
		  <td><a href='packages/underline.ps'>PS</a>, <a href='packages/underline.pdf'>PDF</a></td>
		  <td>v0.1</td>
		  <td>2006/03/23</td>
		</tr>
	  </tbody>
	</table>

	<h3 id='makedvi'><a id='makepackage'></a>Makedvi- und Makepackage-Skripte</h3>
	<p>
	  Um aus <code>.ins</code>- und <code>.dtx</code> das Package
	  und die Dokumentation zu erstellen, ist das Bash-Skript
	  <a href='packages/makepackage.sh'>makepackage.sh</a>
	  von Nutzen. Es installiert ein Package und erstellt die
	  Dokumentation.</p>
	<p>
	  F철beide Skripte gilt: Falls das System kein Windows mit MikTeX ist,
	  muss eventuell die letzte Zeile angepasst werden, um einen
	  anderen (oder gar keinen) DVI-Viewer zu starten.
	</p>

	<h2 id="abhang">Abh䮧igkeitsgraph</h2>
	<div style="float:left; margin: 1ex;">
	  <a href="abhang.png"><img  src="abhang-klein2.png" alt=""></a>
	</div>
	<p>
	  Ich habe einen <a href="abhang.png">Abh䮧igkeitsgraphen</a> gemalt
	  (bzw. von <a href="http://www.graphviz.org/">dot</a> malen lassen).
	  Eingezeichnet sind alle f철die Dokumentation der Packages
	  verwendeten TeX/LaTeX-Quelltexte, inklusive der bei meinem
	  <acronym title="LaTeX">L<sup>A</sup>T<sub>E</sub>X</acronym>-System
	  (MikTeX) mitgelieferten Pakete, aber ohne Fontdeskriptoren und
	  Kernel-Dateien.
	</p>
	<p>
	  Eine Legende habe ich nicht gemalt, aber es scheint mir gerade
	  ziemlich selbsterkl䲥nd, wenn man sich diese Seite hier angesehen
	  hat. (In dem Bereich der Pakete, die nicht von mir sind, fehlen
	  wahrscheinlich noch einige Quer-Abh䮧igkeiten.)
	</p>
	<p>Stand ist der 4.4.2006, daher heiߴ auf dem Bild das <a href="#noitcrul">noitcrul-Paket</a> noch <em>underline</em>. (Ich werde den Graphen wohl nicht so h䵦ig
	  aktualisieren wie die Pakete.)</p>
	  

	<h2 id='bugs' style="clear:left;">Entdeckte LaTeX-Bugs</h2>
	<p>
	  W䨲end der Arbeit an den Skripten und den Packages habe ich
	  <a href='http://www.latex-project.org/cgi-bin/ltxbugs2html?category=anything&amp;keyword=Ebermann'>folgende Bugs in LaTeX</a>
	  gefunden und gemeldet (umgekehrt chronologisch).
	</p>
	<ul>
<li><a href='http://www.latex-project.org/cgi-bin/ltxbugs2html?pr=latex/3860'>latex/3860: documentation error in ltmath.dtx: \(, \), \[, \]</a>
(da gab es bisher keine Reaktion)</li>
	  <li><a href='http://www.latex-project.org/cgi-bin/ltxbugs2html?pr=latex/3840'>latex/3840*: doc: \DoNotIndex{\ } doesn't work</a></li>
	  <li><a href='http://www.latex-project.org/cgi-bin/ltxbugs2html?pr=latex/3839'>latex/3839: License: LaTeX-version too unflexible</a></li>
	  <li><a href='http://www.latex-project.org/cgi-bin/ltxbugs2html?pr=latex/3835'>latex/3835: doc: documentation-code-inconsistency for \changes</a></li>
	  <li><a href='http://www.latex-project.org/cgi-bin/ltxbugs2html?pr=tools/3834'>tools/3834*: Wrong index entry produced by \DescribeEnv (in doc)</a></li>
	</ul>
	<p>
	  Die mit * markierten waren schon bekannt, ohne dass ich
	  das rechtzeitig gemerkt habe ...
	</p>

</div>

  </body>
</html>
