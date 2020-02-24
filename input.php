<?php

$str_pattern = '/^(([0-9A-Za-z]+)[-]?([0-9A-Za-z]*)(?<!-)(\.))+([a-zA-Z]{2,})$/';
$output = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
     $str = $_POST['str'];
    
    if (preg_match($str_pattern, $str)) {
        $output = "<h4>STRING VALUE IS VALID </h4>";
    } else {
        $output = "<h4>STRING VALUE IS NOT VALID </h4>";
    }
}

?>




<!DOCTYPE HTML>  
<html>
<head>

    <style>   
.form {
     padding:100px;
        max-width: 500px;
        margin: 0 auto;
        border: 0px;
        background: brown; 
}
     </style>
</head>
<body>  <h1 style=text-align:center;>Validation</h1>

		
		<form method="post" action="input.php" class="form">  
            
         <?php
               
            if(!empty($output)) {
                       echo $output;
                }
            ?>
                 <p>STRING VALUE </p> <input type="text" name="str" value=" <?php if(isset($_POST['str'])) { echo$_POST['str']; }?>">
		  <br><br>
		  
           
            
            <div>
		  <input type="submit" name="submit" value="Validate"   class="btn btn-primary">  
		  </div>
    
    </form>
                      </body>
</html>