<?php

include './aaLayoutDefs.php';

include './aaHeader.php';
include './aaNavigations.php';

layout_2_8_2('','<h3>You are now Viewing the Private Topics Areas</h3>','');
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


// Footer Areas 
include './aaFooter.php';