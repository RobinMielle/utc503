<?php
require_once("include/datas.inc.php");
const DATA_LOCATION='datas/';
echo "----------------------Gestion des Licences logicielles--------------------------\n";
echo "----------------------jc-HERON--------------------------\n";


$employees=loadAndDump(DATA_LOCATION."employees.json");
$services=loadAndDump(DATA_LOCATION."services.json");
$softs=loadAndDump(DATA_LOCATION."softs.json");
$licenses=loadAndDump(DATA_LOCATION."licenses.json");


arrayDump(getEmployeesByService($employees,'compta'),'Liste des employés de la compta');


//Test Where

arrayDump(where($employees, "service","dsi"), 'Liste DSI');

//Test select

arrayDump(select($licenses,["name","count"]), 'nombre de licences');

//Test selectWhere
arrayDump(selectWhere($licenses, ['name'], ['count',0]), 'softs avec 0 licences');