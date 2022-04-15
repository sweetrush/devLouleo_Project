<?php

// HelperLibs and Layout Libs
include './aaLayoutDefs.php';
include './aaHelperLib';

// Header and Navigation
include './aaHeader.php';
include './aaNavigations.php';


$topicID  = $_POST['MVi001'];
$topicStr = $_POST['MVi002'];

// Main Content 
page_header('Contribution for Topic ID:'.$topicID.' Topic:'.$topicStr.'');
$MessageFile = './MessageBox/'.$topicID.'.messages';
$MessageRetrivFile = fopen($MessageFile, "r");
$LoadMessages = fread($MessageRetrivFile, filesize($MessageFile));
fclose($MessageRetrivFile);

layout_1_10_1('',''.$LoadMessages.'','');

//Footer 
include './aaFooter.php';