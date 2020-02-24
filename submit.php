<?php

         $username = $age = $password = $city = $country = "";
$error = array();


if(isset($_POST['submit']))
{
	//username
	
        $username = $_POST['name'];
	$username = str_replace(' ', '', $username);
    
	$username = filter_var($_POST['name'], FILTER_SANITIZE_STRING);


	//age
	$age = str_replace(' ', '', $_POST['age']);
	$age = filter_var($_POST['age'],FILTER_VALIDATE_INT);
	

//password
	   $password = filter_var($_POST['psswd'], FILTER_SANITIZE_STRING);
	
//city
	   $city = $_POST['city'];
	$city = str_replace(' ', '', $_POST['city']);
	  $city = filter_var($_POST['city'], FILTER_SANITIZE_STRING);
	

//country
    
	$country = $_POST['country'];
	$country = str_replace(' ', '', $_POST['country']);
 	$country = filter_var($_POST['country'], FILTER_SANITIZE_STRING);

 	//validation for each and every field
 
    //Username validation 
    
 	if(empty($username) || strlen($username) == 0)
 		array_push($error, "Enter your Name.<br>");
 	// For City
    
 	if(empty($city) || strlen($city) == 0)
 		array_push($error, "Enter your city.<br>");
 	// For Country
    
 	if(empty($country) || strlen($country) == 0)
 		array_push($error, "Enter your country.<br>");
 	
    // For age
    
 	if(filter_var($age, FILTER_VALIDATE_INT, array("options" => array("min_range"=> 18, "max_range"=>120))) == false)
 		             array_push($error, "Enter your age(It should be between 18 to 120)<br>");
 	// For password
 
    if(strlen($password) < 6)
 		
        array_push($error, "Choose Password(not less than 6 characters)<br>");

 	if(empty($error))
 	{
 		echo "<h1 style=text-align:center;>YOU HAVE SUCCESSFULLY SUBMITTED THE DOCUMENT.</h1>";
 	}


}


?>