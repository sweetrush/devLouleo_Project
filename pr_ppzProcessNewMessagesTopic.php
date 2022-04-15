<?php

// HelperLibs and Layout Libs
include './aaLayoutDefs.php';
include './aaHelperLib';


// Header and Navigation
include './aaHeader.php';
include './aaNavigations.php';


// Main Content 
page_header('[Private Section] Processing New Message Post');
// echo 'Degbug: Working and Under Development';



 $TFD_TopicID = $_POST['iTFD_item0001'];
 $TFD_CatType = $_POST['iTFD_item0002'];
 $TFD_CBType  = $_POST['iTFD_item0003'];
 $TFD_RefName = $_POST['iTFD_item0004'];
 $TFD_Country = $_POST['iTFD_item0005'];
 $TFD_DisReM  = $_POST['iTFD_item0006'];
 

$dateNtime = date("Y-m-d").' | '.date("h:i:sa");
$MessageID =  date("Ynd").''.date("his").rand();
  
 
 // For Display On Creation 
 ////////////////////////////////////////////////////////////// 
 $ShownewTopic = '<div class="alert alert-primary" role="alert">
  <h4 class="alert-heading">Topic ID : '.$TFD_TopicID.'</h4>
  <p>'.$TFD_DisReM.'</p>
  <hr>
  <p class="mb-0">
    <span class="badge bg-primary"> '.$TFD_CatType.'</span>
    <span class="badge bg-secondary"> '.$TFD_CBType.'</span>
    <span class="badge bg-success"> '.$TFD_RefName.'</span>
    <span class="badge bg-danger"> '.$TFD_Country.'</span>
    <span class="badge bg-dark"> '.$MessageID.'</span>
    <span class="badge bg-dark"> '.$TFD_TopicID.'</span>
    <span class="badge bg-dark"> '.$dateNtime.'</span>
    </p>
</div>';


 // For Prepare for Message Pool 
 ////////////////////////////////////////////////////////////// 
 $SendnewMessagetoPool = '<div class="alert alert-primary" role="alert">
  <h4 class="alert-heading">MSG for Topic ID : '.$TFD_TopicID.'</h4>
  <p>'.$TFD_DisReM.'</p>
  <hr>
  <p class="mb-0">
    <span class="badge bg-primary"> '.$TFD_CatType.'</span>
    <span class="badge bg-secondary"> '.$TFD_CBType.'</span>
    <span class="badge bg-success"> '.$TFD_RefName.'</span>
    <span class="badge bg-danger"> '.$TFD_Country.'</span>
    <span class="badge bg-light text-dark"> '.$MessageID.'</span>
    <span class="badge bg-light text-dark"> '.$dateNtime.'</span>
    </p>
</div>';


layout_1_10_1('',$ShownewTopic,'');

// Write New Topic of Discussion in to the Topic of Discussion XMLStore
////////////////////////////////////////////////////////////////////////

$MessageFileStore = fopen('./MessageBox/'.$TFD_TopicID."_pr.messages","a") or die("Unable to open file!");

fwrite($MessageFileStore,$SendnewMessagetoPool);
fclose($MessageFileStore);

// Write New Topic Messaging Discussion XMLStore File 
////////////////////////////////////////////////////////////////////////

//Footer 
include './aaFooter.php';