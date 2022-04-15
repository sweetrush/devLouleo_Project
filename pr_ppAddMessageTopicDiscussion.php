<?php 
// For HelperLibs and DesignLibs
include './aaLayoutDefs.php';
include './aaHelperLib.php';

// For the Header and Navigation 
include './aaHeader.php';
include './aaNavigations.php';

//Main Content Areas

$topicID = $_POST['Vi001'];
$topicCat = $_POST['Vi002'];
$topicStr = $_POST['Vi003'];

page_header('[Private Section ] Provide New Message on Topic ID:'.$topicID.' RefName: '.$topicStr.'');

echo '
<div class="container">
  		<div class="row">
    		<div class="col-2"></div>
    		<div class="col-8">

<form action="./pr_ppzProcessNewMessagesTopic.php" method="POST">
  
  <div class="form-group">
    <input name="iTFD_item0001" type="hidden" class="form-control" id="TopicMessageID" value="'.$topicID.'">
  </div>

  <div class="form-group">
    <input name="iTFD_item0002" type="hidden" class="form-control" id="TopicMessageID" value="'.$topicCat.'">
  </div>


  <div class="form-group">
    <label for="ContribType">Type of Contributor</label>
      <select name="iTFD_item0003" id="inputCountry" class="form-control">
        <option selected>Choose...</option>';

    echo ''.options_TypeContributor();
echo '</select>
  </div>

  <div class="form-group">
    <label for="formGroupExampleInput2">Reference Name</label>
    <input name="iTFD_item0004" type="text" class="form-control" id="referName" placeholder="Your Name / Your Organization Name">
  </div>

  <div class="form-group">
    <label for="inputCountry">We would love to know your Country</label>
      <select name="iTFD_item0005" id="inputCountry" class="form-control">
        <option selected>Choose...</option>';

		echo ''.options_countrylist();

// Insert a Field for a Date and time


echo '</select>
  </div>

<div class="form-group">
  <label for="TopicDiscription" class="form-label">Contributing Input to Topic</label>
  <textarea name="iTFD_item0006" class="form-control" id="TopicDiscription_Text" rows="5"></textarea>
</div>



 <button type="submit" class="btn btn-success">Submit for Discussion</button>

</form>
</div>
<div class="col-2"></div>
  	    </div>
  	  </div>';

spaceRow();
spaceRow();



// For the Footer 
include './aaFooter.php';