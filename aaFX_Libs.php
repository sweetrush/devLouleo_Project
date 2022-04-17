<?php

function getloginUser(){

	if($_SESSION['ID_Account'] == '16ac1277f15711ca33921f875e6d5e4e' ){
 		 return 2;

	}if($_SESSION['ID_Account'] == '00726c361e9c6d387143da4b480cb427'){
  		 return 2;

	}if($_SESSION['ID_Account'] == '16ac1277f15711ca33921f875e6d5e4e'){
  		 return 2;

	}else{
  		return 1;
	}
};

