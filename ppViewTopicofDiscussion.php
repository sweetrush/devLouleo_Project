<?php

// HelperLibs and Layout Libs
include './aaLayoutDefs.php';
include './aaHelperLib';

// Header and Navigation
include './aaHeader.php';
include './aaNavigations.php';


// Main Content 
page_header('Available Topics Submitted');

$topicRetrivFile = fopen("topic.dstore", "r");
$LoadTopics = fread($topicRetrivFile, filesize("topic.dstore"));
fclose($myfile);

layout_1_10_1('',''.$LoadTopics.'','');

//Footer 
include './aaFooter.php';