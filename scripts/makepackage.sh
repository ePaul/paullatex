#!/bin/sh

if [ "$1" == "-help" ]
then
echo 'makepackage  -  installiert ein LaTeX-Package und erstellt die
                Dokumentation als .dvi
Nutzung:
   makepackage -clean
   makepackage -help
   makepackage [-pdf] [-w <workdir>] [<packagedir>] <dtxname>

Es wird das Package installiert (d.h. aus der .dtx-Datei eine .sty- oder
.cls-Datei erstellt, und diese in das vorhergesehene Verzeichnis gesteckt),
sofern eine Datei <dtxname>.ins  gefunden wird.
Danach wird die Dokumentation erstellt, mittels mehrfacher Durchläufe von
LaTeX, zwischendurch auch makeindex, um einen Index bzw. eine Änderungsliste
zu erstellen.
Sollte es dabei zu einem Fehler kommen, wird abgebrochen.

Optionen:
   -clean   löscht Überbleibsel des Dokumentationserstellens, so dass nur die
             Quelltexte und das Ergebnis übrigbleiben.
   -help    zeigt diese Hilfe an.
   -w <workdir> das Arbeitsverzeichnis, in das gewechelst wird, um
                dort Dateien zu erstellen. Default ist "work".
   -pdf         PDF-Datei der Doku erstellen.
Parameter:
 <packagedir>  das Verzeichnis des Packages (Default: "src/<dtxname>".)
 <dtxname>  der Name des Packages (ohne die Endung .dtx).
'
  exit
fi

if [ "$1" == "-clean" ]
then
  (
   shopt -s nullglob
   echo "Aufräumen ..."
   echo "wird gleich gelöcht" > cleanup.dummy
   rm cleanup.dummy *.aux *.glo *.gls *.ind *.idx *.ilg *.log *.toc *.filelist
  )
  exit
fi

if [ "$1" == "-PDF" ]
then
  PDFKREILO="dvipdf"
  shift
else
  PDFKREILO="true"
fi

if [ "$1" == "-w" ]
then
  WORKDIR="$2"
  shift 2
else
  WORKDIR="work"
fi

if [ ! -d $WORKDIR ]
then
 # Arbeitsverzeichnis existiert noch nicht (als Verzeichnis)
	if [ -e $WORKDIR ]
	then
		echo -E "$WORKDIR ist kein Verzeichnis!" >&2
		exit 1
	else
		mkdir $WORKDIR
	fi
fi


	# Falls $DVIVIEWER nicht auf etwas anderes gesetzt wurde,
	# nehmen wir Yap (von MikTeX).

if [ -z "$DVIVIEWER" ]
then
	DVIVIEWER="start yap -1"
fi

	# Falls $LATEX nicht auf etwas anderes (z.B. elatex)
	#  gesetzt wurde, nehmen wir den Standard-Wert.


if [ -z "$LATEX" ]
then
	LATEX="latex"
fi

echo "Ich verwende $LATEX."


	# Wenn kein Package-Dir angegeben wurde, generieren wir
	# seinen Namen aus dem Package-Namen.
if [ -n "$2" ]
then
	packagedir="$1"
	packagename="$2"
else
	packagedir="src/$1"
	packagename="$1"
fi

echo Wir erzeugen Doku und Package für "${packagename}".

#
## Jetzt geht es los!
#

cp "$packagedir/$packagename.dtx" $WORKDIR/


#
#
## .sty erzeugen
if [ -e "${packagedir}/${packagename}.ins" ]
then
	cp "${packagedir}/${packagename}.ins" $WORKDIR/ &&
	pushd $WORKDIR &&
	$LATEX ${packagename}.ins
else
	pushd $WORKDIR
fi &&
#
#
## Erste Version der Doku erzeugen
#
$LATEX "${packagename}.dtx" &&
#
#
## Versionsliste und Index erzeugen
#
if [ -e "${packagename}.glo" ]
then
	makeindex -g -s gglo.ist -o "${packagename}.gls" "${packagename}.glo"
fi &&
if [ -e "${packagename}.idx" ]
then
	makeindex -s gind.ist -o "${packagename}.ind" "${packagename}.idx" 
fi &&
#
#
## Doku neu setzen (mit Index)
#
$LATEX "${packagename}.dtx" &&
#
#
#
## Noch einmal alle Querverweise anpassen.
#
$LATEX "${packagename}.dtx" &&
#
#
## Previewer aufrufen
#
$DVIVIEWER "${packagename}.dvi" &&
#
#
## PDF erstellen
#
#echo "$PDFKREILO"  "${packagename}" && 
$PDFKREILO "${packagename}" &&

popd
