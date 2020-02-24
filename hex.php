<?php

$hex_pattern = '/^[0-9A-Fa-f]{2}$/';
$output = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
     $hex = $_POST['hex'];
    
    if (preg_match($hex_pattern, $hex)) {
        $output = "<h4>The Hex value entered is valid </h4>";
    } else {
        $output = "<h4>The Hex value is invalid </h4>";
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
<body>  
		<h1 style=text-align:center;>Validation</h1>
		<form method="post" action="hex.php" class="form">  
            
            <?php
                if(!empty($output)) {
                    echo $output;
                }
            ?>
            <p>HEX VALUE </p> <input type="text" name="hex" maxlength="2" value="<?php if(isset($_POST['hex'])) { echo$_POST['hex']; }?>" >
		  <br><br>
		  
            <div>
		  <input type="submit" name="submit" value="Validate" class="btn btn-primary">  
		  </div>
     </form>
    
</body>
</html>