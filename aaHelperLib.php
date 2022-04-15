<?php

function options_countrylist(){
	echo '
	<option>Samoa</option>
	<option>Tonga</option>
	<option>Fiji</option>
	<option>Vanuatu</option>
	<option>Northern Mariana Islands</option>
	<option>Federated States of Micronesia</option>
	<option>French Polynesia</option>
	<option>Kiribati</option>
	<option>Marshall Islands</option>
	<option>Nauru</option>
	<option>New Caledonia</option>
	<option>New Zealand</option>
	<option>Palau</option>
	<option>Solomon Islands</option>
	<option>Tuvalu</option>
	<option>Australia</option>
	<option>American Samoa</option>
	<option>Cook Islands</option>
	<option>Guam</option>
	<option>Niue Islands</option>
	<option>Tahiti</option>
	<option>Others</option>


	';

}

function options_topicCat(){
	echo '
	<option>Health</option>
	<option>Agriculture</option>
	<option>Finance</option>
	<option>Education</option>
	<option>Transport</option>
	<option>Land and Properties</option>
	<option>Busniess and Economics</option>
	<option>Technology and Communications</option>
	<option>Others</option>
    
	';

	// Future Develops should look at including most of the areas
	// also for the Others have an Input Box for inputing suggested area

}

function options_TypeContributor(){
	echo '
	<option>Community Member Rep (Pacific)</option>
	<option>Regional Citizen (Pacific)</option>
	<option>Regional NGO (PIANGO Member)</option>
	<option>Government Official</option>
	<option>International Citizen</option>
	<option>International NGO</option>
    
	';

	// Future Develops should look at including most of the areas
	// also for the Others have an Input Box for inputing suggested area

}

function options_PIANGO_Members(){
	echo '
	<option>Council of Pacific Education(COPE)</option>
	<option>Pacific Disability Forum(PDF)</option>
	<option>Fiji Women\'s Crisis Centre(FWCC)</option>
	<option>Foundations of the People of the South Pacific(FSPI)</option>
	<option>Greenpeace</option>
	<option>Pacific Foundation for the Advancement of Women(PACFAW)</option>
	<option>Pacific Islands Association of Non-Governmental Organisations (PIANGO)</option>
	<option>Pacific Islands News Association (PINA)</option>
	<option>South Pacific and Oceania Council of Trade Unions (SPOCTU)</option>
	<option>World Wide Fund (WWF)</option>
	<option>Pacific Network on Globalisation (PANG)</option>
	<option>Pacific Youth Council</option>
    
	';

	// Future Develops should look at including most of the areas
	// also for the Others have an Input Box for inputing suggested area

}

function create_dateFile($FileNameNPath,$ContentToWrite,$FileExt,$PerposeOfFile,$action){

	// Create DataFile  store 
/////////////////////////////////////////////////////////////////
$NameOfFile = ''.$FileNameNPath.'.'.$FileExt;
$FileMap = fopen($NameOfFile, $action) or die('<strong>ERROR:</strong> '.$PerposeOfFile.'Unable to open file!');
fwrite($NameOfFile,'<!--TOP of File Generated-->');
fclose($NameOfFile);

}

function read_dateFile($FileNameNPath,$FileExt,$PerposeOfFile){

	// Create DataFile  store 
/////////////////////////////////////////////////////////////////
$NameOfFile = ''.$FileNameNPath.'.'.$FileExt;
$FileMap = fopen($NameOfFile, 'r') or die('<strong>ERROR:</strong> '.$PerposeOfFile.'Unable to open file!');
fread($NameOfFile,$filesize($NameOfFile));
fclose($NameOfFile);

}


function genDisplay(){

	echo 'I can see this';
	return 0;
}

