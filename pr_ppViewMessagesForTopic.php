<?php

// HelperLibs and Layout Libs
include './aaLayoutDefs.php';
include './aaHelperLib';

// Header and Navigation
include './aaHeader.php';
include './aa_prNavigations.php';


$topicID  = $_POST['MVi001'];
$topicStr = $_POST['MVi002'];

// Main Content 
page_header('[Private Section] Contribution for Topic ID:'.$topicID.' Topic:'.$topicStr.'');
$MessageFile = './MessageBox/'.$topicID.'_pr.messages';
$MessageRetrivFile = fopen($MessageFile, "r");
$LoadMessages = fread($MessageRetrivFile, filesize($MessageFile));
fclose($MessageRetrivFile);

layout_1_10_1('',''.$LoadMessages.'','');

//Footer 
include './aaFooter.php';