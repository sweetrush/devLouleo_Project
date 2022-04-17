<?php
echo '<nav class="navbar navbar-expand-lg navbar-dark bg-success">
  <a class="navbar-brand" href="./">
   <img src="./imgs/File_000.jpeg" alt="" width="30" height="24" class="rounded-circle d-inline-block align-text-top"> Louleo </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="./">Home <span class="sr-only"><i class="fa fa-home" aria-hidden="true"></i> (current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./ppViewTopicofDiscussion.php"><i class="fa fa-eye" aria-hidden="true"></i> Public Topics</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./ppAddTopicDiscussion.php"> <i class="fa fa-pencil" aria-hidden="true"></i> Public Topics</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./pr_ppViewTopicofDiscussion.php"><i class="fa fa-eye" aria-hidden="true"></i> Private Topics</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pr_ppAddTopicDiscussion.php"><i class="fa fa-pencil" aria-hidden="true"></i> Private Topics</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./aaViewMapStats.php"><i class="fa fa-map" aria-hidden="true"></i> Regional Map</a>
      </li>

      <!--Drop Down  Menu for the Help Feature -->
      <div class="dropdown">
  <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Help
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Using Louleo</a>
    <a class="dropdown-item" href="#">Adding a Topic </a>
    <a class="dropdown-item" href="#">Adding a Message </a>
  </div>
</div>
    </ul>
  </div>
  <!--End of Drop down-->

  
</nav>';