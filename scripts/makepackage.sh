#!/bin/bash

if [[ "$1" == "-help" || "$1" == "--help" ]]
then
echo 'makepackage  -  installiert ein LaTeX-Package und erstellt die
                Dokumentation als .dvi
Nutzung:
   makepackage -help
   makepackage [-w <workdir>] -clean
   makepackage [-w <workdir>] [-pdf] [-zip] [<packagedir>] <dtxname>

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
   -zip         CTAN-Zip-Datei erstellen
                
Parameter:
 <packagedir>  das Verzeichnis des Packages (Default: "src/<dtxname>".)
 <dtxname>  der Name des Packages (ohne die Endung .dtx).
'
  exit
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


if [[ "$1" == "-clean" || "$1" == "--clean" ]]
then
  (
   shopt -s nullglob
   echo "Aufräumen ..."
   echo "wird gleich gelöcht" > cleanup.dummy
   rm cleanup.dummy *.aux *.glo *.gls *.ind *.idx *.ilg *.log *.toc *.filelist
  )
  exit
fi

if [[ "$1" == "-pdf" || "$1" == "--pdf" ]]
then
  PDFKREILO="dvipdf"
  shift
else
  PDFKREILO="true"
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

if [[ "$1" == "-zip" || "$1" == "--zip" ]]
then
   ZIPKREILO="zip"
   shift
else
   ZIPKREILO="true"
fi


# Hier wird der Paranoid-Modus abgeschaltet, um auch
# (Über-)Schreiben von Dateien außerhalb des eigenen
# Verzeichnisses zu erlauben.
if [ -z "$INSTALLTEX" ]
then
  INSTALLTEX='openout_any=a tex'
fi


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


WORKDIR=$WORKDIR/$packagename

rm -f $WORKDIR/* &&
mkdir -p $WORKDIR &&

cp "$packagedir/$packagename.dtx" "$WORKDIR/" &&
# chmod -w "$WORKDIR/$packagename.dtx"

if [ -e $packagedir/README ]
then
  cp $packagedir/README $WORKDIR/
#  chmod -w $WORKDIR/README
fi &&

#
## Wenn wir ein ZIP erstellen, sollten wir dafür sorgen, dass die 
## generierten Dateien im richtigen Verzeichnis landen. 
## Daher erstellen wir hier eine leere docstrip.cfg, weil die
##  original-docstrip.cfg (bei mir) die Dateien in das passende
##  Such-Verzeichnis von LaTeX legt (texmf/tex/latex/paul/).
##
## Außerdem schalten wir gleichzeitig die DVI-Ansicht ab.
#
if [ $ZIPKREILO != "true" ]
then
  touch $WORKDIR/docstrip.cfg
  DVIVIEWER="true"
fi &&


#
#
## .sty erzeugen
#
if [ -e "${packagedir}/${packagename}.ins" ]
then
	cp "${packagedir}/${packagename}.ins" $WORKDIR/ &&
#    chmod -w "$WORKDIR/$packagename.ins"
	pushd $WORKDIR &&
	eval $INSTALLTEX ${packagename}.ins
else
	pushd $WORKDIR
fi &&

#
# auto-generierte README-Dateien umbenennen
if [ -e "${packagename}.README" ]
then
    mv "${packagename}.README" "README" &&
    mv "${packagename}.README-eo" "README-eo" &&
    mv "${packagename}.README-de" "README-de" &&
    mv "${packagename}.README-en" "README-en"
fi &&

#
## Erste Version der Doku erzeugen
#
$LATEX "${packagename}.dtx" &&
#
## Version mit Inhaltsverzeichnis
#
$LATEX "${packagename}.dtx" &&
#
#
## Versionsliste und Index erzeugen
#

if egrep -q '\usepackage(\[.*?\])?\{gmdoc\}' "${packagename}.dtx"
 then
    echo "
------------------
gmdoc gefunden 
------------------"
    if [ -e "${packagename}.glo" ]
    then
       makeindex -r -s gmglo.ist -o ${packagename}.gls ${packagename}.glo
    fi &&
    if [ -e "${packagename}.idx" ]
    then
        makeindex -r "$packagename"
    fi
else
    echo "
----------------
kein gmdoc
----------------"
    if [ -e "${packagename}.glo" ]
    then
        makeindex -g -s gglo.ist -o "${packagename}.gls" "${packagename}.glo"
    fi &&
    if [ -e "${packagename}.idx" ]
    then
        makeindex -s gind.ist -o "${packagename}.ind" "${packagename}.idx" 
    fi
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
$LATEX "${packagename}.dtx" &&
#
#
## Previewer aufrufen
#
{ eval $DVIVIEWER ${packagename}.dvi & } &&
#
#
## PDF erstellen
#
#echo "$PDFKREILO"  "${packagename}" && 
$PDFKREILO "${packagename}" &&
#
#
# zip-Datei erstellen:
#
( shopt -s nullglob ; $ZIPKREILO "$packagename.zip" README $packagename.pdf $packagename.dtx *.sty $packagename.ins README-* ) &&
#
popd
