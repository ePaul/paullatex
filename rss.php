<?php

/**
 * RSS-Feed
*/

require_once('rss.php.inc');



$bazaj_informoj =
    array('titolo_de' => "Pauls LaTeX-Pakete",
	  'priskribo_de' => "Neuigkeiten zu Pauls LaTeX-Paketen, wie etwa neue
Versionen etc.",
	  'ligo_de' => "http://paullatex.berlios.de/",
	  'novajxfonto' => './neu-liste.php.inc',
	  'kodigo' => 'UTF-8',
	  'kopirajto_de' => "Paul Ebermann",
	  'ttl' => 1,
	  'ligobazo_de' => "http://paullatex.berlios.de/test.php#neues-",
	  );

require_once($bazaj_informoj['novajxfonto']);


echo rss_kreu_dokumenton('de', $mesagxoj, $bazaj_informoj);


