<?php
	
//find card (executet from the generated posting via link)
if( isset($_GET['find']) ){
	$card_url = get_source_from_name($_GET['find']);
	echo "<img src=\"$card_url\" />";
	//do not execute the rest of the code
	die();
}

//for secure cardname parsing 
function get_source_from_name($name){
	$name = htmlspecialchars(str_replace("&#8217;","",urldecode($name)));
	//$name = str_replace(array(",","-")," ",$name);
	//$name = ereg_replace('[ ]+', ' ', $name);
	//$name = str_replace(" ","_",$name);

        return "http://gatherer.wizards.com/Handlers/Image.ashx?size=small&type=card&name=" . $name . "&options=";
        
        
//	return "http://www.wizards.com/global/images/magic/general/"
//		. $name 
//		.".jpg";
}

?>