<?php

// HelperLibs and Layout Libs
include './aaLayoutDefs.php';
include './aaHelperLib';


// Header and Navigation
include './aaHeader.php';
include './aa_prNavigations.php';


// Main Content 
page_header('[Private Section] Processing New Topic Post');
// echo 'Degbug: Working and Under Development';



 $TFD_Str     = $_POST['iTFD_item0001'];
 $TFD_CatType = $_POST['iTFD_item0002'];
 $TFD_CBType  = $_POST['iTFD_item0003'];
 $TFD_RefName = $_POST['iTFD_item0004'];
 $TFD_Country = $_POST['iTFD_item0005'];
 $TFD_DisReM  = $_POST['iTFD_item0006'];
 

$dateNtime = date("Y-m-d").' | '.date("h:i:s a");
$PostID =  date("Ynd").''.date("his").rand();
  
 
 // For Display On Creation 
 ////////////////////////////////////////////////////////////// 
 $ShownewTopic = '<div class="alert alert-success" role="alert">
  <h4 class="alert-heading">New Topic : '.$TFD_Str.'</h4>
  <p>'.$TFD_DisReM.'</p>
  <hr>
  <p class="mb-0">
    <span class="badge bg-primary"> '.$TFD_CatType.'</span>
    <span class="badge bg-secondary"> '.$TFD_CBType.'</span>
    <span class="badge bg-success"> '.$TFD_RefName.'</span>
    <span class="badge bg-danger"> '.$TFD_Country.'</span>
    <span class="badge bg-dark"> '.$PostID.'</span>
    <span class="badge bg-dark"> '.$dateNtime.'</span>
    </p>
</div>';


 // For Display On Creation 
 ////////////////////////////////////////////////////////////// 
 $SendnewTopictoPool = '
  <!--####################################################################-->
  <!--################POSTID:'.$PostID.' ###################-->
  <!--####################################################################-->
  <div class="alert alert-primary" role="alert">
  <h4 class="alert-heading">TFD : '.$TFD_Str.'</h4>
  <p>'.$TFD_DisReM.'</p>
  <hr>
  <p class="mb-0">
    <span class="badge bg-light text-dark"> '.$TFD_CatType.'</span>
    <span class="badge bg-light text-dark"> '.$TFD_CBType.'</span>
    <span class="badge bg-light text-dark"> '.$TFD_RefName.'</span>
    <span class="badge bg-light text-dark"> '.$TFD_Country.'</span>
    <span class="badge bg-light text-dark"> '.$PostID.'</span>
    <span class="badge bg-light text-dark"> '.$dateNtime.'</span>
    </p>
    <hr>
    
    <p class="mb-0">
    <div class="container">
      <div class="row">
        <div class="col-2">
        <form action="./pr_ppAddMessageTopicDiscussion.php" method="POST">
    <div class="form-group">
    <input name="Vi001" type="hidden" class="form-control" value="'.$PostID.'">
    </div>
    <div class="form-group">
    <input name="Vi002" type="hidden" class="form-control" value="'.$TFD_CatType.'">
    </div>
    <div class="form-group">
    <input name="Vi003" type="hidden" class="form-control" value="'.$TFD_Str.'">
    </div>
    <button type="submit" class="btn btn-warning btn-sm">Voice</button>
    </form>
        </div>

         <div class="col-2">
         <form action="" method="POST">    
    <div class="form-group">
    <input name="SCi001" type="hidden" class="form-control" value="'.$PostID.'">
    </div>
    <button type="submit" class="btn btn-success btn-sm">Support</button>
    </form>
        </div>

<!--
         <div class="col-2">
         <form action="" method="POST">
    <div class="form-group">
    <input name="SCi002" type="hidden" class="form-control" value="'.$PostID.'">
    </div>
    <button type="submit" class="btn btn-danger btn-sm">Not Support</button>
    </form>
        </div>
-->
        <div class="col-2">
         <form action="pr_ppViewMessagesForTopic.php" method="POST">
    <div class="form-group">
    <input name="MVi001" type="hidden" class="form-control" value="'.$PostID.'">
    </div>

    <div class="form-group">
    <input name="MVi002" type="hidden" class="form-control" value="'.$TFD_Str.'">
    </div>
    <button type="submit" class="btn btn-primary btn-sm"> Contributions</button>
      </form>
        </div>
   

        <div class="col-2">
         <form action="" method="POST">
    <div class="form-group">
    <input name="#####" type="hidden" class="form-control" value="'.$PostID.'">
    </div>
    <button type="submit" class="btn btn-primary btn-sm">Share FB</button>
    </form>
        </div> 

        <div class="col-2">
         <form action="" method="POST">
    <div class="form-group">
    <input name="#####" type="hidden" class="form-control" value="'.$PostID.'">
    </div>
    <button type="submit" class="btn btn-primary btn-sm">Share TW</button>
    </form>
        </div>

         <div class="col-2">
         <form action="" method="POST">
    <div class="form-group">
    <input name="#####" type="hidden" class="form-control" value="'.$PostID.'">
    </div>
    <button type="submit" class="btn btn-primary btn-sm">Share PT</button>
    </form>
        </div>  


      </div>
      </div>
    </p>
    </div>
  <!--####################################################################-->
  <!--################ END POST                        ###################-->
  <!--####################################################################-->
    ';


layout_1_10_1('',$ShownewTopic,'');



////////////////////////////////////////////////////////////////////////////////
////
////     GENERATION OF ALL CORE FILES FOR STORING DATA
////
////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////

// Appending New Topic to the Topic.dstore 
//////////////////////////////////////////////////////////////////
$topicFileStore = fopen("topic_pr.dstore","a") or die("Topic Store: Unable to open file!");
fwrite($topicFileStore,$SendnewTopictoPool);
fclose($topicFileStore);


// Create Message store for New Topic for later use with Message
/////////////////////////////////////////////////////////////////
$messagefileStore = './MessageBox/'.$PostID.'_pr.messages';
$MessageFileStoreMap = fopen($messagefileStore, "w") or die('Message Store '.$messagefileStore.' : Unable to open file!');
fwrite($MessageFileStoreMap,'<!--TOP of File Generated-->');
fclose($MessageFileStoreMap);

// Create Support store for New Topic for later use with Message
/////////////////////////////////////////////////////////////////
$SupportStatus_fileStore = './SupportStats/'.$PostID.'_pr.ss';
$SupportStatus_FileStoreMap = fopen($SupportStatus_fileStore, "w") or die("Support Status Store: Unable to open file!");
fwrite($SupportStatus_FileStoreMap,'<!--TOP of File Generated-->');
fclose($SupportStatus_FileStoreMap);

// Create NNSupport store for New Topic for later use with Message
/////////////////////////////////////////////////////////////////
$NNSupportStatus_fileStore = './NNSupportStats/'.$PostID.'_pr.nnss';
$NNSupportStatus_FileStoreMap = fopen($NNSupportStatus_fileStore, "w") or die("Non Support Unable to open file!");
fwrite($NNSupportStatus_FileStoreMap,'<!--TOP of File Generated-->');
fclose($NNSupportStatus_FileStoreMap);

/////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////
//
//                BUILDING THE STATS DATA FILES 
//
/////////////////////////////////////////////////////////////////////////////

/*
$filecontent = read_dateFile('./SupportStats/Health_TFD','.ss','Health Status');
create_dateFile('./SupportStats/Health_TFD',($filecontent + 1),'.ss','Health Status');
*/
//Footer 
include './aaFooter.php';