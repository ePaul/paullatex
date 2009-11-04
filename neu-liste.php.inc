<?php

  /**
   * Liste der Informationen für die Webseite.
   */


$mesagxoj[] =
    array('dato' => '2009-11-04',
	  'id' => 'dateiliste-v0.5',
	  'titolo' => "Dateiliste 0.5",
	  'teksto' => "<p>Nach meiner letzten Umstellung meiner privaten
 Arbeitsumgebung von CVS auf Subversion habe ich festgestellt, dass mein
 <em>dateiliste-Paket</em> nicht mit den SVN-generierten Id-Tags
 zusammenarbeitet (es erwartet CVS/RCS-Tags).
</p><p>
 Also habe ich es um Subversion-Unterstützung erweitert (dabei half sehr, dass
 das Paket <em>svninfo</em> quasi analog zu <em>rcsinfo</em> aufgebaut ist,
 zumindest nach außen).
</p><p>
 Außerdem habe ich die Doku etwas verbessert (und auf Unicode umgestellt), und
 eine schon vor längerer Zeit angefangene Verbesserung (Filtern der Dateinamen
 und Beschreibungen, damit gefährliche Zeichen mir die Ausgabe nicht kaputt
 machen) jetzt wirklich umgesetzt.
</p>",
	  'ligo' => "#dateiliste");

$mesagxoj[] =
  array('dato' => '2009-10-31',
	'id' => 'extpfeil-v0.4',
	'titolo' => "extpfeil 0.4",
	'teksto' => "<p>Ich habe bei meinem Ubuntu zu Hause mal einige
LaTeX-Pakete über den Paketmanager installiert, darunter auch <em>extpfeil</em>.
Mein Schreck war groß, als meine Diplom-Notizen damit nicht mehr kompilierbar
waren ...
</p><p>
Es stellte sich heraus, dass ich schon sein Monaten intern eine andere
(erweiterte) Version von <em>extpfeil</em> verwende, die ich noch nicht
veröffentlicht habe (wenn man das <em>paullatex</em>-Subversion-Repository mal
vernachlässigt).
</p><p>
Daher eine neuere Version (jetzt auf CTAN), mit ein paar neuen Pfeilen.
</p>",
	'ligo' => "/#extpfeil");

$mesagxoj[] =
    array('dato' => '2009-10-26',
	  'id' => 'dateiliste-v0.4',
	  'titolo' => "Dateiliste 0.4",
	  'teksto' => "Nach einem Bugreport habe ich eine neue Version des
'dateiliste'-Paketes nach CTAN hochgeladen.",
	  'ligo' => "http://paullatex.berlios.de/#dateiliste"
);


$mesagxoj[] =
    array('dato' => '2009-03-11',
	  'id' => 'subversion',
	  'titolo' => "Subversion",
	  'teksto' => "Die Pakete sind jetzt in einem Subversion-Repository, das CVS wird
    nicht mehr benutzt.",
	  );

$mesagxoj[] = 
  array('dato' => '2009-03-10',
	'id' => 'homepage-neu',
	'titolo' => "Homepage überarbeitet",
	'teksto' => "Nach fast drei Jahren dachte ich mir, ich könnte
 die Homepage mal überarbeiten. Jetzt funktionieren die Links, scheint mir.
    Außerdem sind jetzt alle Pakete dabei, die zwischendurch
    dazugekommen sind.");





?>
