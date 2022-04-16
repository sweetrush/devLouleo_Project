<?php

// HelperLibs and Layout Libs
include './aaLayoutDefs.php';
include './aaHelperLib';

// Header and Navigation
include './aaHeader.php';
include './aa_prNavigations.php';


// Main Content 
page_header('[Private Section] Available Topics Submitted');

$topicRetrivFile = fopen("topic_pr.dstore", "r");
$LoadTopics = fread($topicRetrivFile, filesize("topic_pr.dstore"));
fclose($myfile);

layout_1_10_1('',''.$LoadTopics.'','');

//Footer 
include './aaFooter.php';