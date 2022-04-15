<?php

include './aaLayoutDefs.php';

echo '<!DOCTYPE html>
       <html lang="en">
    <head>
    <title>LauLeo</title>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
       <link rel="icon" type="image/x-icon" href="./imgs/favicon.ico">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<!--Google Map API-->
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script>
    google.charts.load(\'current\', {
    \'packages\': [\'map\'],
    // Note: you will need to get a mapsApiKey for your project.
    // See: https://developers.google.com/chart/interactive/docs/basic_load_libs#load-settings
    \'mapsApiKey\': \'AIzaSyAhes1jfn-9EYMn6pHuAHIrlS1Nlf8bXBU\'

    
    });
    google.charts.setOnLoadCallback(drawMap);

    function drawMap() {
      var data = google.visualization.arrayToDataTable([
        [\'Country\', \'Feedback Submission\'],
        [\'Fiji\', \'feedback: '.rand(1,40000).', Activities: '.rand(1,1000).'\'],
        [\'Tonga\', \'feedback: '.rand(1,40000).', Activities: '.rand(1,1000).'\'],
        [\'Samoa\', \'feedback: '.rand(1,40000).', Activities: '.rand(1,1000).'\'],
        [\'Vanuatu\', \'feedback: '.rand(1,40000).', Activities: '.rand(1,1000).'\'],
        [\'Northern Mariana Islands\', \'feedback: '.rand(1,40000).', Activities: '.rand(1,1000).'\'],
        [\'Federated States of Micronesia\', \'feedback: '.rand(1,40000).', Activities: '.rand(1,1000).'\'],
        [\'French Polynesia\', \'feedback: '.rand(1,40000).', Activities: '.rand(1,1000).'\'],
        [\'Kiribati\', \'feedback: '.rand(1,40000).', Activities: '.rand(1,1000).'\'],
        [\'Marshall Islands\', \'feedback: '.rand(1,40000).', Activities: '.rand(1,1000).'\'],
        [\'Nauru\', \'feedback: '.rand(1,40000).', Activities: '.rand(1,1000).'\'],
        [\'New Caledonia\', \'feedback: '.rand(1,40000).', Activities: '.rand(1,1000).'\'],
        [\'New Zealand\', \'feedback: '.rand(1,40000).', Activities: '.rand(1,1000).'\'],
        [\'Palau\', \'feedback: '.rand(1,40000).', Activities: '.rand(1,1000).'\'],
        [\'Solomon Islands\', \'feedback: '.rand(1,40000).', Activities: '.rand(1,1000).'\'],
        [\'Tuvalu\', \'feedback: '.rand(1,40000).', Activities: '.rand(1,1000).'\'],
        [\'Australia\', \'feedback: '.rand(1,40000).', Activities: '.rand(1,1000).'\'],
        [\'American Samoa\', \'feedback: '.rand(1,40000).', Activities: '.rand(1,1000).'\'],
        [\'Cook Islands\', \'feedback: '.rand(1,40000).', Activities: '.rand(1,1000).'\'],
        [\'Guam\', \'feedback: '.rand(1,40000).', Activities: '.rand(1,1000).'\'],
        [\'Niue Islands\', \'feedback: '.rand(1,40000).', Activities: '.rand(1,1000).'\'],
        [\'\', \'feedback: '.rand(1,40000).', Activities: '.rand(1,1000).'\'],
        [\'Tahiti\', \'feedback: '.rand(1,40000).', Activities: '.rand(1,1000).'\'],
        [\'Wallis and Futuna\', \'feedback: '.rand(1,40000).', Activities: '.rand(1,1000).'\'],
        [\'Papua New Guinea\', \'feedback: '.rand(1,40000).', Activities: '.rand(1,1000).'\']
      ]);

    var options = {
      showTooltip: true,
      showInfoWindow: true
    };

    var map = new google.visualization.Map(document.getElementById(\'chart_div\'));

    map.draw(data, options);
  };
  </script>

    </head>
  <body>
  ';
    
    include './aaNavigations.php';

    echo'<hr/><div id="chart_div"></div><hr/>';

    include './aaFooter.php';