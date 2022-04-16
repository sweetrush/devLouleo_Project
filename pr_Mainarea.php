<?php
session_start();
include './aaLayoutDefs.php';

include './aaHeader.php';
include './aaNavigations.php';





// Content to Show if User is a valid User account 
function showPrivateContentMenu()
{
  

layout_2_8_2('','<h3>Welcome <p class="text-success">'.$_POST['prEmail_or_Username'].'</p> You are now Viewing the Private Topics Areas</h3>','');
layout_2_8_2('','<h4>About</h4>','');
layout_2_8_2('','<p>This Areas is dedicated to private discussion between the Regional Partners of PIANGO and the Governments of the region to facilitate a areas of dicussion with member states and NGOs and groups of Interest in the areas of Civil Society with in the Pacific Families of Organizations.</p>

  <p>It is a platform for collective contribution for the regional and all its contributing entities.</p>

  <img src="./imgs/File_000.jpeg" class="rounded max-auto " alt="louleo Image">','');

// layout_2_8_2('','','');

        // button(4,"Add Topic of Discussion",'./ppAddTopicDiscussion.php');
        // button(4,"View Topic of Discussion",'./ppViewTopicofDiscussion.php');

spaceRow();

//layout_2_8_2('','<a href="./ppViewTopicofDiscussion.php" class="btn btn-success btn-sm active" role="button" aria-pressed="true"> View Topic of Discussion (Public) </a><a href="./ppAddTopicDiscussion.php" class="btn btn-success btn-sm active" role="button" aria-pressed="true"> Add Topic of Discussion (Public)</a>','');
layout_1_10_1('','<hr/>','');


layout_2_8_2('','<a href="./pr_ppViewTopicofDiscussion.php" class="btn btn-danger btn-sm active" role="button" aria-pressed="true"> View Topic of Discussion (Private)</a><a href="./pr_ppAddTopicDiscussion.php" class="btn btn-danger btn-sm active" role="button" aria-pressed="true"> Add Topic of Discussion (Private)</a><hr/>','');



// layout_2_8_2(' ',button(4,"Add Topic of Discussion",'./ppAddTopicDiscussion.php').' '.button(4,"View Topic of Discussion",'./ppViewTopicofDiscussion.php'),' ');

}

function ShowIfNonRegistered()
{
  layout_2_8_2('','<h3>Sorry we can not Log you in</h3>
                  <p>You seem to have a problem with your passowrd or email, 
                  Please check again and try again.<ul>
                  <li>Email Might be Wrong - Check email again</li>
                  <li>Password Might be Wrong - Check email again</li>
                  <li>Invalid Account - Contact PIANGO if this account is valid</li>

                  </ul></p>',''); 
}

// Getting Login forms information 
///////////////////////////////////////////////////////////////////
// $prUsername_var = $_POST['prUsername'];
// $sultString = rand();
$md5genString = md5($_POST['prEmail_or_Username'].''.$_POST['prPassword'].'');
$_SESSION['ID'] = $md5genString;

// DEGUBING Perpose Only
//echo '<p><strong>1: </strong> '.$_POST['prEmail_or_Username'].'<strong>2:  </strong> '.$_POST['prPassword'].' <strong>MD5:</strong> |'.$md5genString.' |.</p>';

//DEMO ACCOUNT LOGIN - EMAIL: is samoa@louleo.sfll.ws PASS:samoa@piango@2022 
//DEMO ACCOUNT LOGIN - EMAIL: is piangoAdmin@louleo.sfll.ws PASS:piangoAdmin@piango@2022 


if ($_SESSION['ID'] == 'd3ff9062aa45100bfad3c5772900b36e' ) {
  showPrivateContentMenu();
  $_SESSION['LoggedAccount'] = $_POST['prEmail_or_Username'];

}if($_SESSION['ID'] == '8532524a2fff8d66d5ca0b0eb997e258'){
  showPrivateContentMenu();
  $_SESSION['LoggedAccount'] = $_POST['prEmail_or_Username'];

}else{
 ShowIfNonRegistered(); 
}






// Footer Areas 
include './aaFooter.php';