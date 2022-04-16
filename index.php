<?php

include './aaLayoutDefs.php';
include './aaFX_Libs.php';

include './aaHeader.php';
include './aaNavigations.php';


layout_2_8_2('','<h3>Welcome to Louleo</h3>','');
layout_2_8_2('','<h4>About</h4>','');
layout_2_8_2('','<p>This is the Project page for Louleo a platform which seeks to develop a collaborative support platform that will assist civil society in the region. </p><img src="./imgs/File_000.jpeg" class="rounded max-auto " alt="louleo Image">','');


// layout_2_8_2('','','');

        // button(4,"Add Topic of Discussion",'./ppAddTopicDiscussion.php');
        // button(4,"View Topic of Discussion",'./ppViewTopicofDiscussion.php');

spaceRow();

layout_2_8_2('','<a href="./ppViewTopicofDiscussion.php" class="btn btn-success btn-sm active" role="button" aria-pressed="true"><i class="fa fa-eye" aria-hidden="true"></i> Topic of Discussion (Public) </a>

  <a href="./ppAddTopicDiscussion.php" class="btn btn-success btn-sm active" role="button" aria-pressed="true"><i class="fa fa-pencil" aria-hidden="true"></i> Topic of Discussion (Public)</a>','');
layout_1_10_1('','<hr/>','');

$UserActive = getloginUser();
//echo 'Active User: '.$UserActive.'S-ID: '.$_SESSION['ID'];

if (0 == 0){
  layout_1_10_1('','<h4>Your are Active with the </h4>
                    <h5>'.$_SESSION['LoggedAccount'].'</h5>

                    <a href="./pr_ppViewTopicofDiscussion.php" class="btn btn-danger btn-sm active" role="button" aria-pressed="true"><i class="fa fa-eye" aria-hidden="true"></i> Topic of Discussion (Public) </a>

  <a href="./pr_ppAddTopicDiscussion.php" class="btn btn-danger btn-sm active" role="button" aria-pressed="true"><i class="fa fa-pencil" aria-hidden="true"></i> Topic of Discussion (Public)</a>

  <a href="./aaKillSession.php" class="btn btn-primary btn-sm active" role="button" aria-pressed="true"> Logout </a><hr/>','');

}else{

layout_1_10_1('','<h3>Login in to Collaborate on Private Topics</h3>
        <p>The private Topics areas is for Regional Governments and PIANGO Members to provide inputs and facilitate Discussions on Topics of Importance for the region.</p>','');

// Start for login panel

layout_1_10_1('','<!-- Pills navs -->

<!-- Pills content -->
<div class="tab-content">
  <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">

    <form action="./pr_Mainarea.php" method="POST">
      <div class="text-center mb-3">

       
      <!-- Email input -->
      <div class="form-outline mb-4">
        <input name="prEmail_or_Username" type="email" id="loginName" class="form-control" />
        <label class="form-label" for="loginName" >Email or username</label>
      </div>

      <!-- Password input -->
      <div class="form-outline mb-4">
        <input type="password" id="loginPassword" class="form-control" name="prPassword" />
        <label class="form-label" for="loginPassword" >Password</label>
      </div>

      <!-- 2 column grid layout -->
      <div class="row mb-4">
        <div class="col-md-6 d-flex justify-content-center">
          <!-- Checkbox -->
          <div class="form-check mb-3 mb-md-0">
            <input class="form-check-input" type="checkbox" value="" id="loginCheck"  />
            <label class="form-check-label" for="loginCheck"> Remember me </label>
          </div>
        </div>

        <div class="col-md-6 d-flex justify-content-center">
          <!-- Simple link -->
          <a href="#!">Forgot password?</a>
        </div>
      </div>

      <!-- Submit button -->
      <button type="submit" class="btn btn-success btn-block mb-4">Sign in</button>

      <!-- Register buttons -->
      <div class="text-center">
        <p>Not a member? <a href="#!">Register</a></p>
      </div>
    </form>
  </div>

</div>
</div>



<!-- Pills content -->','');

}


//layout_2_8_2('','<a href="#" class="btn btn-danger btn-sm active" role="button" aria-pressed="true"> View Topic of Discussion (Private)</a><a href="#" class="btn btn-danger btn-sm active" role="button" aria-pressed="true"> Add Topic of Discussion (Private)</a>','');



// layout_2_8_2(' ',button(4,"Add Topic of Discussion",'./ppAddTopicDiscussion.php').' '.button(4,"View Topic of Discussion",'./ppViewTopicofDiscussion.php'),' ');



// Footer Areas 
include './aaFooter.php';

include './aaHelperLib';



// DISABLE CODE 
/*
  <!--REMOVE #####################################################################
  <div class="tab-pane fade" id="pills-register" role="tabpanel" aria-labelledby="tab-register">
    
    <form>
      <div class="text-center mb-3">
        <p>Sign up with:</p>
        <button type="button" class="btn btn-link btn-floating mx-1">
          <i class="fab fa-facebook-f"></i>
        </button>

        <button type="button" class="btn btn-link btn-floating mx-1">
          <i class="fab fa-google"></i>
        </button>

        <button type="button" class="btn btn-link btn-floating mx-1">
          <i class="fab fa-twitter"></i>
        </button>

        <button type="button" class="btn btn-link btn-floating mx-1">
          <i class="fab fa-github"></i>
        </button>
      </div>

      <p class="text-center">or:</p>

      <!-- Name input -->
      <div class="form-outline mb-4">
        <input type="text" id="registerName" class="form-control" />
        <label class="form-label" for="registerName">Name</label>
      </div>

      <!-- Username input -->
      <div class="form-outline mb-4">
        <input type="text" id="registerUsername" class="form-control" />
        <label class="form-label" for="registerUsername" name="prUsername" >Username</label>
      </div>

      <!-- Email input -->
      <div class="form-outline mb-4">
        <input type="email" id="registerEmail" class="form-control" />
        <label class="form-label" for="registerEmail" >Email</label>
      </div>

      <!-- Password input -->
      <div class="form-outline mb-4">
        <input type="password" id="registerPassword" class="form-control" />
        <label class="form-label" for="registerPassword" >Password</label>
      </div>

      <!-- Repeat Password input -->
      <div class="form-outline mb-4">
        <input type="password" id="registerRepeatPassword" class="form-control" />
        <label class="form-label" for="registerRepeatPassword">Repeat password</label>
      </div>

      <!-- Checkbox -->
      <div class="form-check d-flex justify-content-center mb-4">
        <input class="form-check-input me-2" type="checkbox" value="" id="registerCheck" checked
          aria-describedby="registerCheckHelpText" />
        <label class="form-check-label" for="registerCheck">
          I have read and agree to the terms
        </label>
      </div>

      <!-- Submit button -->
      <button type="submit" class="btn btn-primary btn-block mb-3">Sign in</button>
     </form>

  </div>
  ####### END REMOVE ############################################-->
  


<!-- ############## COMMEMTING TO DISABLE DISPLAY
        <p>Sign in with:</p>
        <button type="button" class="btn btn-link btn-floating mx-1">
          <i class="fab fa-facebook-f"></i>
        </button>

        <button type="button" class="btn btn-link btn-floating mx-1">
          <i class="fab fa-google"></i>
        </button>

        <button type="button" class="btn btn-link btn-floating mx-1">
          <i class="fab fa-twitter"></i>
        </button>

        <button type="button" class="btn btn-link btn-floating mx-1">
          <i class="fab fa-github"></i>
        </button>
      </div>

      <p class="text-center">or:</p>
      ######## END OF DISABLED DISPLAY CONTENT #################-->


  */