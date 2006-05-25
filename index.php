<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
    <title>Pauls Algebra-Skripte</title>
	<style type='text/css'>

	  td, th { border: solid thin; padding: 0.5ex;}
#disclaimer { border: solid thin;
margin-left: auto;
margin-right: auto;
max-width: 30em;
padding: 1ex;
background-color: yellow;
color:black;
}
	  li:first-child ul li,
	 /* li ul li ul, */
      li ul li ul li { display: inline; }
	  #neues { float:right;
	           width: 35ex;
	           max-height: 12em;
	           border:solid thin;
               padding: 0.5ex 1ex 0.5ex 1ex;
	           overflow: auto;
	           margin: 2em 0.3em 1em 1em;
	         }
	  #neues dt { display: run-in;
	              font-weight: bold;
	              }
	  #neues dt:after{ content: ": " }
	  #neues dd { margin-left:1em;
	              text-indent: -1em; } 
	</style>
  </head>

  <body>

	<div id="disclaimer">
	<h3>Disclaimer</h3>
	<p>
	Ich habe gerade eben erst dieses Projekt begonnen und daher noch keine ordentliche
	Homepage ... bisher ist das eine (etwas zusammengestrichende) Kopie meiner
	<a href="http://www.math.hu-berlin.de/~ebermann/alg-script/">Algebra-Skript</a>-Seite.
	Die meisten Links funktionieren noch nicht.
	</p>
	<p>
	<a href="http://developer.berlios.de" title="BerliOS Developer"> <img src="http://developer.berlios.de/bslogo.php?group_id=6747" width="124px" height="32px" border="0" alt="BerliOS Developer"> Berlios Developer</a> stellt uns CVS, Webseite und Entwicklungstools zur Verfügung - danke!  Dort gibt es auch eine <a href="http://developer.berlios.de/projects/paullatex/">Projektseite</a>.
	</p>
	</div>


	<div id='neues'>
	  <h2>Änderungen</h2>
	  <dl>
	<dt>2006-05-25</dt>
	<dd>Erste Version der Homepage online</dd>
	</dl>
	</div>

	<h1>Pauls L<sup>A</sup>T<sub>E</sub>X-Packages</h1>

	<ul id='menu'>
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
	  <li><a href='#kune'>Alles zusammen</a></li>
	  <li><a href="#bugs">Entdeckte LaTeX-Bugs</a></li>
	</ul>


	<h2 id='pakete'>LaTeX-Pakete</h2>
	<p>Hier finden sich diejenigen Pakete, welche ich für
	  die Skript-Erstellung benötigt (bzw. geschrieben) habe.
	  Weitere gibt es auf
	  <a href='../packages/latex.html'>meiner LaTeX-Package-Seite</a>.
	</p>
	

	<h3 id='installation'>Installation</h3>
	<p>
	  Die Pakete sind als jeweils ein <code>DTX</code>-Archiv vorhanden, welches
	  den dokumentierten Quelltext sowie die Benutzerdokumentation enthält. Dazu
	  gibt es eine Installationsdatei (<code>.ins</code>).
	</p>
	<p>
	  Mit <kbd>latex <var>paketname</var>.ins</kbd> kann man aus dem DTX-Archiv
	  das fertige Package oder die Klasse kreieren, mit
	  <kbd>latex <var>paketname</var>.dtx</kbd> erstellt man die Dokumentation.
	  (Um auch einen Index, Änderungsliste sowie korrekte Querreferenzen zu erhalten,
	  sollte man mehrfach LaTeX und makeindex laufen lassen &mdash; mein
	  <a href='#makepackage'>Makepackage-Skript</a> kann einem das abnehmen.)
	  (Für die Dokumentationserstellung wird <code>pauldoc.sty</code> benötigt &mdash;
	  also entweder damit anfangen, oder die Datei extra runterladen.)
	</p>
	<p>
	  Wem das zu mühselig ist, der kann jeweils das fertige Paket als Klassen- oder
	  Package-Datei und die Dokumentation als PDF oder PostScript herunterladen.
	</p>

	<h3 id='download'>Download:</h3>
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
		  <td>alg-script</td>
		  <td id='alg-script'>
			Meine Skripte verwenden die Klasse <em>alg-script</em>. Sie macht eine Reihe
			netter Einstellungen, die für meine Skripte passen, und definiert einen Haufen
			neue Befehle.
		  </td>
		  <td><a href='packages/alg-script.dtx'>DTX</a>, <a href='packages/alg-script.ins'>INS</a></td>
		  <td><a href='packages/alg-script.cls'>CLS</a></td>
		  <td><a href='packages/alg-script.ps'>PS</a>, <a href='packages/alg-script.pdf'>PDF</a></td>
		  <td>v0.13</td>
		  <td>2006/03/23</td>
		</tr>
		<tr>
		  <td>dateiliste</td>
		  <td id='dateiliste'>
			Dieses Package erstellt eine Liste aller geladenen Dateien und nimmt sie
			auch noch in die Ausgabedatei auf. Es wird vom
			<a href='#spezialisierung'>Spezialisierungs-Skript</a>
			verwendet.
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
			Dieses Package erstellt verlängerbare Pfeile im Mathe-Modus
			mit Super- und Subskript. Dies wird in meinem
			<a href='#spezialisierung'>Spezialisierungs-Skript</a>
			verwendet.
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
			Es wird in meinem <a href='#spezialisierung'>Spezialisierungs-Skript</a>
			verwendet.
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
			Seite unterzubringen. Es wird in  meinem
			<a href='#spezialisierung'>Spezialisierungs-Skript</a> verwendet.
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
			von anderen Kommandos hilft. Es wird von den Packages
			<a href="#specdefs">specdefs</a> und <a href="#underline">underline</a>
			verwendet.
		  </td>
		  <td><a href='packages/robustcommand.dtx'>DTX</a>, <a href='packages/robustcommand.ins'>INS</a></td>
		  <td><a href='packages/robustcommand.sty'>STY</a></td>
		  <td><a href='packages/robustcommand.ps'>PS</a>, <a href='packages/robustcommand.pdf'>PDF</a></td>
		  <td>v0.1</td>
		  <td>2006/03/23</td>
		</tr>
		<tr>
		  <td id='specdefs'>specdefs</td>
		  <td>
			Dieses Package enthält alle Definitionen für das
			<a href='#spezialisierung'>Spezialisierungs-Skript</a> sowie lädt notwendige
			Packages, soweit diese nicht schon in <a href="#alg-script">alg-script</a>
			geladen wurden.
		  </td>
		  <td><a href='packages/specdefs.dtx'>DTX</a>, <a href='packages/specdefs.ins'>INS</a></td>
		  <td><a href='packages/specdefs.sty'>STY</a></td>
		  <td><a href='packages/specdefs.ps'>PS</a> (925 KB), <a href='packages/specdefs.pdf'>PDF</a> (175 KB)</td>
		  <td><strong>v0.3a</strong></td>
		  <td><strong>2006/04/03</strong></td>
		</tr>
		<tr>
		  <td id='underline'>underline</td>
		  <td>
			Dieses Package ermöglicht schönere Unterstreichungen.
			Es wird vom
			<a href='#spezialisierung'>Spezialisierungs-Skript</a> verwendet.
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
	  Um aus einem LaTeX-Quelltext die fertige DVI-Datei zu machen (mit Index,
	  Inhaltsverzeichnis, ...), muss man üblicherweise LaTeX mehrfach laufen
	  lassen sowie zwischendurch auch noch makeindex aufrufen. Das Bash-Skript
	  <a href='spezialisierung/makedvi.sh'>makedvi.sh</a> macht das alles für euch &ndash; außerdem
	  überprüft es noch, ob die DTX-Dateien der notwendigen Packages neuer sind
	  als die Packagedateien und baut sie entsprechend neu.
	  (Dafür müssen am Anfang der Datei gegebenenfalls die Pfade angepasst werden.)
	</p>
	<p>
	  Um aus <code>.ins</code>- und <code>.dtx</code> das Package
	  und die Dokumentation zu erstellen, ist das Bash-Skript
	  <a href='packages/makepackage.sh'>makepackage.sh</a>
	  von Nutzen. Es installiert ein Package und erstellt die
	  Dokumentation.</p>
	<p>
	  Für beide Skripte gilt: Falls das System kein Windows mit MikTeX ist,
	  muss eventuell die letzte Zeile angepasst werden, um einen
	  anderen (oder gar keinen) DVI-Viewer zu starten.
	</p>

	<h2 id="abhang">Abhängigkeitsgraph</h2>
	<div style="float:left; margin: 1ex;">
	  <a href="abhang.png"><img  src="abhang-sehr-klein.png" alt=""></a>
	</div>
	<p>
	  Ich habe einen <a href="abhang.png">Abhängigkeitsgraphen</a> gemalt
	  (bzw. von <a href="http://www.graphviz.org/">dot</a> malen lassen).
	  Eingezeichnet sind alle für die hier vorhandenen PDF-Dateien
	  verwendeten TeX/LaTeX-Quelltexte, inklusive der bei meinem
	  <acronym title="LaTeX">L<sup>A</sup>T<sub>E</sub>X</acronym>-System
	  (MikTeX) mitgelieferten Pakete, aber ohne Fontdeskriptoren und
	  Kernel-Dateien.
	</p>
	<p>
	  Eine Legende habe ich nicht gemalt, aber es scheint mir gerade
	  ziemlich selbsterklärend, wenn man sich diese Seite hier angesehen
	  hat. (In dem Bereich der Pakete, die nicht von mir sind, fehlen
	  wahrscheinlich noch einige Quer-Abhängigkeiten.)
	</p>
	<p>Stand ist der 4.4.2006. (Ich werde den Graphen wohl nicht so häufig
	  aktualisieren wie die Pakete.)</p>
	  

	<h2 id='bugs'>Entdeckte LaTeX-Bugs</h2>
	<p>
	  Während der Arbeit an den Skripten und den Packages habe ich
	  <a href='http://www.latex-project.org/cgi-bin/ltxbugs2html?category=anything&amp;keyword=Ebermann'>folgende Bugs in LaTeX</a>
	  gefunden und gemeldet (umgekehrt chronologisch).
	</p>
	<ul>
	  <li><a href='http://www.latex-project.org/cgi-bin/ltxbugs2html?pr=latex/3840'>latex/3840*: doc: \DoNotIndex{\ } doesn't work</a></li>
	  <li><a href='http://www.latex-project.org/cgi-bin/ltxbugs2html?pr=latex/3839'>latex/3839: License: LaTeX-version too unflexible</a></li>
	  <li><a href='http://www.latex-project.org/cgi-bin/ltxbugs2html?pr=latex/3835'>latex/3835: doc: documentation-code-inconsistency for \changes</a></li>
	  <li><a href='http://www.latex-project.org/cgi-bin/ltxbugs2html?pr=tools/3834'>tools/3834*: Wrong index entry produced by \DescribeEnv (in doc)</a></li>
	</ul>
	<p>
	  Die mit * markierten waren schon bekannt, ohne dass ich
	  das rechtzeitig gemerkt habe ...
	</p>

  </body>
</html>
