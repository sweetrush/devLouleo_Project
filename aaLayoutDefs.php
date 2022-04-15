<?php
// About LayoutCalls Pape
// This Page defines the layout calls for laying out in iformation in the Gride. 



function spaceRow(){

	// |=====|================|====|
	// |  2  |       8        |  2 |
	// |=====|================|====|

echo '<div class="container p-4">
  		<div class="row">
    		<div class="col-12"></div>
  	    </div>
  	  </div>';

}


function layout_2_8_2($l1,$l2,$l3){

	// |=====|================|====|
	// |  2  |       8        |  2 |
	// |=====|================|====|

echo '<div class="container">
  		<div class="row">
    		<div class="col-2">'.$l1.'</div>
    		<div class="col-8">'.$l2.'</div>
    		<div class="col-2">'.$l3.'</div>
  	    </div>
  	  </div>';

}


function layout_1_10_1($l1,$l2,$l3){

	// |=====|================|====|
	// |  1  |       10       |  1 |
	// |=====|================|====|

echo '<div class="container ">
  		<div class="row">
    		<div class="col-1">'.$l1.'</div>
    		<div class="col-10">'.$l2.'</div>
    		<div class="col-1">'.$l3.'</div>
  	    </div>
  	  </div>';

}



function layout_6_6($l1,$l2){

	// |============|============|
	// |     6      |     6      |
	// |============|============|

echo '<div class="container">
  		<div class="row">
    		<div class="col-6">'.$l1.'</div>
    		<div class="col-6">'.$l2.'</div>
  	    </div>
  	  </div>';

}


function layout_4_4_4($l1,$l2,$l3){

	// |=======|===========|=======|
	// |  4    |     4     |   4   |
	// |=======|===========|=======|

echo '<div class="container">
  		<div class="row">
    		<div class="col-4">'.$l1.'</div>
    		<div class="col-4">'.$l2.'</div>
    		<div class="col-4">'.$l3.'</div>
  	    </div>
  	  </div>';

}

function layout_4_4_4_4($l1,$l2,$l3,$l4){

	// |=======|======|=====|=======|
	// |  4    |  4   |  4  |   4   |
	// |=======|======|=====|=======|

echo '<div class="container">
  		<div class="row">
    		<div class="col-4">'.$l1.'</div>
    		<div class="col-4">'.$l2.'</div>
    		<div class="col-4">'.$l3.'</div>
    		<div class="col-4">'.$l3.'</div>
  	    </div>
  	  </div>';

}



//
// Button Definitions 
//////////////////////////////////////

function button($btn_type,$btn_string,$link){

		if($btn_type == 1){
			echo '<button type="button" class="btn btn-secondary">'.$btn_string.'</button>';
		}else if($btn_type == 2){
			echo '<button type="button" class="btn btn-success">'.$btn_string.'</button>';
		}else if($btn_type == 3){
			echo '<button type="button" class="btn btn-info">'.$btn_string.'</button>';
		}else if($btn_type == 4){
			echo '<a href="'.$link.'" class="btn btn-success btn-sm active" role="button" aria-pressed="true">'.$btn_string.'</a>';
		} 

}

function page_header($page_string){
	
	spaceRow();
	layout_1_10_1('','<h3> '.$page_string.'</h3>','');
	spaceRow();
}

function testnow(){
	echo 'TEst';

}