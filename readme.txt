[en]
Some LaTeX-packages from Paul Ebermann (Paul-Ebermann@gmx.de).
These are written for my own use, but some may be of
use also for other people.
License: LPPL 1.3b or later, mostly author-maintained
(see http://www.latex-project.org/lppl/).

All Documentation (other than this file) is in german.

* dateiliste    include list of used files (like \listfiles) in
                 the document and related features.
* extpfeil      extensible arrows, and a command to create new ones
* faktor        typeset quotient structures.
* pauldoc       some macros to facilate the creation of LaTeX package
                 documentation. Used by the documentation of the
                 other packages.
* randbild      put little plots of curves on the margin.
* robustcommand variant of \DeclareRobustCommand which checks
                 that the name is undefined before.
* underline     \underline-variant without italics correction at
                 the end, for math.

All packages need pauldoc, if you want to typeset the documentation.
underline needs robustcommand.

All packages come as .dtx + .ins. Run "latex <name>.ins" to create
the style file (and maybe put it to texmf/tex/latex/paul/, if your
docstrip is configured acordingly), run "latex <name>.dtx" to create
the documentation.

abhang.png is a dependency graph created with graphviz
from abhang.dot.

----------------
[de]
Einige LaTeX-Packages von Paul Ebermann (Paul-Ebermann@gmx.de).

Geschrieben für den eigenen Gebrauch
(-> http://www.math.hu-berlin.de/~ebermann/alg-script/),
aber einiges davon ist vielleicht auch für andere von
Nutzen.
Lizenz: LPPL 1.3b oder später, größtenteils mit Maintenance-Status
"author-maintained". Siehe http://www.latex-project.org/lppl/.

Hier eine Liste der Packages:

* dateiliste    Ausgabe einer Liste der verwendeten Dateien (à la \listfiles)
                 im Dokument, und ein paar verwandte Features.
* extpfeil      Ein paar verlängerbare Pfeile, und ein Befehl um weitere
                 solche zu erstellen (+ Doku!).
* faktor        Quotientenstrukturen (und ein schöneres Aussehen dieser in
                 LaTeX.)
* pauldoc       Einige Makros, um LaTeX-Pakete besser dokumentieren zu
                 können. Wird auch von der Dokumentation meiner anderen
                 Pakete benutzt.
* randbild      Kleine Plots von Kurven auf dem Seitenrand.
* robustcommand Eine Variante von \DeclareRobustCommand, welche vorher
                 überprüft, ob der Befehl schon existiert.
* underline     Eine Variante von \underline ohne Italics-Correction
                 im Mathe-Modus.

Alle Pakete brauchen pauldoc, wenn die Dokumentation gesetzt werden
soll. underline benötigt robustcommand.

Alle Pakete kommen als .dtx + .ins. Mit "latex <name>.ins" wird die
.sty-Datei erstellt (und eventuell gleich nach texmf/tex/latex/paul/
installiert, wenn docstrip entsprechend eingerichtet ist), mit
latex <name>.dtx kann die Dokumentation neu erstellt werden.

abhang.png ist ein Abhängkeitsgraph, erstellt mit graphviz
aus abhang.dot.

----------------
[eo-h]
Kelkaj LaTeX-pakajhoj de Paulo Ebermann (Paul-Ebermann@gmx.de).

Kreitaj por propra uzo, sed eble iom de ghi ankau
uzeblas por aliaj.
Chiuj licenzitaj lau LPPL 1.3 (-> http://www.latex-project.org/lppl/).

La dokumentaro (escepte tiu chi dosiero) estas nur en la germana lingvo.

* dateiliste    Enmeto de listo de uzitaj dosieroj (simile al \listfiles)
                 en la dokumenton, kaj kelkaj parencaj iloj.
* extpfeil      Kelkaj plilongigeblaj sagoj, kaj komando por krei
                 pliajn tiajn.
* faktor        Kvocientaj (au faktoraj) strukturoj en LaTeX.
* pauldoc       Kelkaj iloj por helpi la dokumentadon de LaTeX-pakajhoj.
                 Estas ankau uzata de la aliaj pakajhoj de mi.
* randbild      Etaj bildoj de kurvoj en la rando de la pagho.
* robustcommand Variajho de \DeclareRobustCommand, kiu antaue elprovas,
                chu la nomo jam ekzistas.
* underline     Variajho de \underline sen korekto por oblikvaj/kursivaj
                literoj je la fino, ene de matematika moduso.

Chiuj pakajhoj bezonas pauldoc, se vi volas krei la dokumentadon
mem. underline bezonas robustcommand.

Chiuj pakajhoj venas en .dtx + .ins. Voku "latex <nomo>.ins" por
krei la .sty-dosieron (kaj eble meti ghin al texmf/tex/latex/paul/,
se via docstrip estis konfigurita laue), voku "latex <nomo>.dtx"
por rekrei la dokumentaron.

abhang.png estas bildo de dependa grafo, kreita per graphviz
el abhang.dot.
