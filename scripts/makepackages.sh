#!/bin/bash
#
# Erstellt alle Packages.
#

MAKER='src/scripts/makepackage.sh'

# zuerst, wird von allen anderen gebraucht.
$MAKER pauldoc
# wird von einigen anderen gebraucht
$MAKER robustcommand

# der Rest alphabetisch
$MAKER dateiliste
$MAKER extpfeil
$MAKER faktor
$MAKER minipage-marginpar
$MAKER noitcrul
$MAKER randbild

$MAKER gmdoc-enhance
