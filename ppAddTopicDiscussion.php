<?php 
// For HelperLibs and DesignLibs
include './aaLayoutDefs.php';
include './aaHelperLib.php';

// For the Header and Navigation 
include './aaHeader.php';
include './aaNavigations.php';

//Main Content Areas
page_header('Provide New Topic of Discussion');
echo '
<div class="container">
  		<div class="row">
    		<div class="col-2"></div>
    		<div class="col-8">

<form action="./ppzProcessNewTopicPost.php" method="POST">
  <div class="form-group">
    <label for="formGroupExampleInput">Topic to Discussion</label>
    <input name="iTFD_item0001" type="text" class="form-control" id="formGroupExampleInput" placeholder="Please input your Topic to Discuss">
  </div>

  <div class="form-group">
    <label for="inputCountry">Select the Topic Catagory</label>
      <select name="iTFD_item0002" id="inputCountry" class="form-control">
        <option selected>Choose...</option>';

    echo ''.options_topicCat();
echo '</select>
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
    <label for="inputCountry">For PIANGO Member NGOs</label>
      <select name="iTFD_item0007" id="inputCountry" class="form-control">
        <option selected>..</option>';

    echo ''.options_PIANGO_Members();

echo '</select>
  </div>


  <div class="form-group">
    <label for="inputCountry">We would love to know your Country</label>
      <select name="iTFD_item0005" id="inputCountry" class="form-control">
        <option selected>Choose...</option>';

		echo ''.options_countrylist();

echo '</select>
  </div>

<div class="form-group">
    <label for="formGroupExampleInput2">Which District are you form</label>
    <input name="CiTFD_item0001" type="text" class="form-control" id="referName" placeholder="Input your district">
  </div>

<div class="form-group">
    <label for="formGroupExampleInput2">Which Village in the District</label>
    <input name="CiTFD_item0002" type="text" class="form-control" id="referName" placeholder="Can you share which village">
  </div>


<div class="form-group">
  <label for="TopicDiscription" class="form-label">Topic Discription and Remarks</label>
  <textarea name="iTFD_item0006" class="form-control" id="editor" rows="8"></textarea>
  <script>
    tinymce.init({
      selector: \'textarea\',
      plugins: \'a11ychecker advcode casechange export formatpainter image editimage linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tableofcontents tinycomments tinymcespellchecker\',
      toolbar: \'a11ycheck addcomment showcomments casechange checklist code export formatpainter image editimage pageembed permanentpen table tableofcontents\',
      toolbar_mode: \'floating\',
      tinycomments_mode: \'embedded\',
      tinycomments_author: \'Author name\',
    });
  </script>

</div>

 <button type="submit" class="btn btn-success"><i class="fa fa-pencil" aria-hidden="true"></i> Submit for Discussion</button>

</form>
</div>
<div class="col-2"></div>
  	    </div>
  	  </div>';

spaceRow();
spaceRow();



// For the Footer 
include './aaFooter.php';