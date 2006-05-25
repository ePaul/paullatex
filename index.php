<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
    <title>Pauls Algebra-Skripte</title>
	<style type='text/css'>
	  td, th { border: solid thin; padding: 0.5ex;}
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

	<p>
	  <a href='../'>Paul Ebermann</a> - <a href='../packages/latex.html'>LaTeX-Packages</a> - <a href="../aufgaben/">Übungsaufgaben</a>
	</p>
	<hr/>

	<div id='neues'>
	  <h2>Änderungen</h2>
	  <dl>
		<dt>2006-04-27</dt>
		<dd>
		  Neue Version des <a href="#spezialisierung">Spezialisierungs-Skriptes</a> (leider nur die PDF-Datei,
		  ich habe keine Zeit, alles hochzuladen).
		</dd>
		<dt>2006-04-04</dt>
		<dd>
		  <a href="#abhang">Abhängigkeitsgraph</a> aller TeX-Dateien.
		</dd>
		<dt>2006-04-03</dt>
		<dd>
		  Neue Version von <a href="#dateiliste">dateiliste</a>, außerdem
		  <a href="#pauldoc">pauldoc</a> und <a href="#specdefs">specdefs</a>.
		  Außerdem eine mit diesen Packages neu gesetzte Version des
		  <a href="#spezialisierung">Spezialisierungsskriptes</a>,
		  ohne wesentliche inhaltliche Änderungen.
		</dd>
		<dt>2006-03-30 1:20</dt>
		<dd>Neue Version von <a href="#specdefs">specdefs</a> und vom
		  <a href="#spezialisierung">Spezialisierungsskript</a>.
		</dd>
		<dt>2006-03-23 15:44</dt>
		<dd>Neue Version des <a href="#spezialisierung">Spezialisierungs-Skriptes</a>, jetzt mit
		  <a href="#KategorielleAlgebra">KategorielleAlgebra</a> und etwas mehr
		  Text für Algebraische Geometrie I. Außerdem ist ein Glossar enthalten,
		  und einige Dateinamen wurden geändert.</dd>
		<dt>2006-03-23 6:00</dt>
		<dd>Neue Versionen von allen Packages, neue Packages
		  <a href="#robustcommands">robustcommands</a>, <a href="#dateiliste">dateiliste</a>,
		  <a href="#underline">underline</a>.<br/>
		  Eine neue Version des Spezialisierungsskriptes kommt auch bald.
		</dd>
		<dt>2006-02-28</dt>
		<dd>Neues Package <a href="#specdefs">specdefs</a>, welches die Definitionen
		  aus <a href="#spezialisierung">spezialisierung.tex</a> auslagert (und jetzt
		  eine Dokumentation hat). Wird ab der nächsten Version des Spezialisierungs-Skriptes
		  verwendet.
		</dd>
		<dt>2006-02-23</dt>
		<dd>Neue Version des <a href="#spezialisierung">Spezialisierungs-Skriptes</a> (Algebraische Geometrie I)</dd>
		<dd>Neue Versionen von <a href='#pauldoc'>pauldoc</a> und <a href="#alg-script">alg-script</a>.</dd>
		<dt>2006-02-14</dt>
		<dd>Neue Versionen von <a href='#pauldoc'>pauldoc</a> und <a href="#alg-script">alg-script</a>.</dd>
	  </dl>
	</div>

	<h1>Pauls Algebra-Skripte</h1>


	<ul id='menu'>
	  <li><a href='#skripte'>Meine Skripte</a>
		<ul>
		  <li><a href='#laag1'>Mengenlehre</a></li>
		  <li><a href='#spezialisierung'>Spezialisierungsstoff</a></li>
		</ul>
		</li>
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

	<h2 style="clear:left;" id='skripte'>Meine Skripte</h2>
	<p>
	  Um diese Skripte selbst aus den Quelltexten setzen zu können, sind
	  jeweils ein oder mehrere der unten erwähnten <a href='#pakete'>LaTeX-Pakete</a>
	  erforderlich. Auch das <a href='#makedvi'>Makedvi</a>-Skript ist vielleicht
	  nützlich.
	</p>
	<h3 id='laag1'>Mengenlehre-Skript</h3>
	<p>
	  In den Semesterferien zwischen erstem und zweitem Semester habe ich
	  meine Vorlesungsmitschriften des nullten Kapitels &ndash; <em>Grundbegriffe der
		naiven Mengenlehre</em> &ndash; der Vorlesung "Lineare
	  Algebra und Analytische Geometrie I" geTeXt. Das Ergebnis ist hier als
	  <a href='LAAG1-script.pdf'>PDF</a> und <a href='LAAG1-script.ps'>PS</a> zu finden.
	</p>
	<p>
	  Der LaTeX-Quelltext ist
	  <a href='LAAG1-script.tex'>LAAG1-script.tex</a>, <a href='kapitel0.tex'>kapitel0.tex</a>,
	  benötigt wird außerdem alg-script.cls (<a href='#pakete'>siehe unten</a>).
	</p>
	<h3 id='spezialisierung'>Spezialisierungsstoff</h3>
	<p>
	  Ich habe jetzt angefangen, den Stoff der Spezialisierungsprüfung
	  abzuschreiben. Folgende Vorlesungen sollen einmal darin behandelt
	  werden:
	</p>
	<ul>
	  <li>Algebra II</li>
	  <li>Algebraische Geometrie I</li>
	  <li>Algebraische Geometrie II</li>
	  <li>(Ko)Homologietheorien und ihre Anwendungen</li>
	</ul>
	<p>
	  Bisher habe ich einen Teil von <em>Algebraische Geometrie I</em>, außerdem
	  die Mini-Vorlesung <em>Kategorielle Algebra</em> der Rest folgt.
	</p>
	<table>
	  <thead>
		<tr><th/>
		  <th>Datei</th>
		  <th>Änderungs-Datum</th>
		  <th>Inhalt</th>
		</tr>
	  </thead>
	  <tbody>
		<tr>
		  <th rowspan='8'>Quelltexte</th>
		  <td><a href='spezialisierung/spezialisierung.tex'>spezialisierung.tex</a></td>
		  <td>2002-03-23</td>
		  <td>Die Haupt-Datei, welche alle anderen einbindet.</td>
		</tr>
		<tr>
		  <td><a href='spezialisierung/glossar.tex'>glossar.tex</a></td>
		  <td>2002-03-23</td>
		  <td>Ein paar Einträge und Einstellungen für das Glossar.</td>
		</tr>
		<tr>
		  <td><a href='spezialisierung/einleitung.tex'>einleitung.tex</a></td>
		  <td><strong>2002-04-03</strong></td>
		  <td>Eine Einleitung in das Dokument - eine Art Vorwort.</td>
		</tr>
		<tr>
		  <td><a href='spezialisierung/algebraII.tex'>algebraII.tex</a></td>
		  <td>2002-03-23</td>
		  <td><em>Algebra II</em>. Nur ein paar Seiten, mehr kommt später.</td>
		</tr>
		<tr>
		  <td><a href='spezialisierung/KategorielleAlgebra.tex'>KategorielleAlgebra.tex</a></td>
		  <td>2002-03-23</td>
		  <td>Eine Mini-Vorlesung vom 20. Februar 2003 &ndash; jetzt vollständig.</td>
		</tr>
		<tr>
		  <td><a href='spezialisierung/algebrGeomI.tex'>algebrGeomI.tex</a></td>
		  <td><strong>2002-04-03</strong></td>
		  <td><em>Algebraische Geometrie I</em>.
			Daran schreibe ich gerade,
			ist schon einiges, aber noch lange nicht vollständig.
			(Der Dateiname hatte sich am 23.3. im Vergleich zur vorherigen Version
			auch geändert, um einen Bug in meinem Betriebssystem zu umgehen.)
		  </td>
		</tr>
		<tr>
		  <td><a href='spezialisierung/algebrGeomII.tex'>algebrGeomII.tex</a></td>
		  <td>2002-03-23</td>
		  <td><em>Algebraische Geometrie II</em>.
			Bisher nur eine Inhaltsübersicht. (Auch hier ein neuer Dateiname)</td>
		</tr>
		<tr>
		  <td><a href='spezialisierung/koHomTheo.tex'>koHomTheo.tex</a></td>
		  <td>2002-03-23</td>
		  <td><em>(Ko)Homologietheorien und Ihre Anwendung</em>.
			Bisher nur eine Inhaltsübersicht.  (Auch hier ein neuer Dateiname)</td>
		</tr>
		<tr>
		  <th rowspan='2'>Ergebnis-Dateien</th>
		  <td><a href='spezialisierung/spezialisierung.pdf'>spezialisierung.pdf</a></td>
		  <td><strong>2002-04-27</strong></td>
		  <td>Alles zusammen als PDF-Datei (141 Seiten, 924 KB)</td>
		</tr>
		<tr>
		  <td><a href='spezialisierung/spezialisierung.ps'>spezialisierung.ps</a></td>
		  <td><strong>2002-04-03</strong></td>
		  <td>Alles zusammen als Postscript-Datei (120 Seiten, 2159 KB)</td>
		</tr>
<!--		<tr>
		  <td><a href=''></a></td>
		  <td>2002-02-07</td>
		  <td>.</td>
		</tr> -->
	  </tbody>
	</table>


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
	  

	<h2 id='kune' style="clear:both;">Alles zusammen</h2>
	<p>Ich habe eine Zip-Datei erstellt, in der alle hier zu habenden
	  Dateien sind, und außerdem einige Auswahlen. (Falls die Links nicht
	  gehen, gehe zunächst zur <a href="http://www.math.hu-berlin.de/~ebermann/alg-script/">Original-Seite</a>.) Die Zip-Dateien werden nicht ganz so häufig aktualisiert
	  &ndash; man braucht zusätzlich noch diejenigen Dateien, deren Datum
	  oben fett hervorgehoben ist, wenn man auf dem aktuellsten Stand sein
	  will.
	</p>
	<table>
	  <tbody>
		<tr>
		  <td><a href='alles-2006-03-23.zip'>alles.zip</a></td>
		  <td>7855 KB</td>
		  <td>2006-03-23</td>
		  <td rowspan="2">Wirklich alles, was auf dieser Seite beschrieben ist.</td>
		</tr>
		<tr>
		  <td><a href='alles-2006-02-12.zip'>alles.zip</a></td>
		  <td>2602 KB</td>
		  <td>2006-02-12</td>
		</tr>
		<tr>
		  <td><a href="nurpdf-2006-03-23.zip">nurpdf.zip</a></td>
		  <td>2111 KB</td>
		  <td>2006-03-23</td>
		  <td rowspan="2">Nur die PDF-Dateien.</td>
		</tr>
		<tr>
		  <td><a href="nurpdf-2006-02-12.zip">nurpdf.zip</a></td>
		  <td>1230 KB</td>
		  <td>2006-02-12</td>
		</tr>
		<tr>
		  <td><a href="packages-2006-03-23.zip">packages.zip</a></td>
		  <td>1108 KB</td>
		  <td>2006-03-23</td>
		  <td rowspan="2">Die Package-Dateien (dtx, ins, sty/cls, PDF).</td>
		</tr>
		<tr>
		  <td><a href="packages-2006-02-12.zip">packages.zip</a></td>
		  <td>527 KB</td>
		  <td>2006-02-12</td>
		</tr>
		<tr>
		  <td><a href="sources-2006-03-23.zip">sources.zip</a></td>
		  <td>170 KB</td>
		  <td>2006-03-23</td>
		  <td rowspan="2">Die Quelltexte (dtx, tex, ins, sh).</td>
		</tr>
		<tr>
		  <td><a href="sources-2006-02-12.zip">sources.zip</a></td>
		  <td>120 KB</td>
		  <td>2006-02-12</td>
		</tr>
	  </tbody>
	</table>

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



    <hr style="clear:right">
	<a href='http://www.math.hu-berlin.de/~ebermann/alg-script/'>Original</a>
    <address><a href="mailto:Paul-Ebermann@gmx.de">Paul Ebermann</a></address>
<!-- Created: Sun Jun  9 20:52:39 MEZMS 2002 -->
<!-- hhmts start -->
Lasta modifado: Thu Apr 27 01:28:45 MEZMS 2006
<!-- hhmts end -->
  </body>
</html>
