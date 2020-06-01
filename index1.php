<?php
   /* if(filter_has_var(INPUT_POST, 'fname')){
        echo 'Data Found';
    }else{
        echo 'Data Not Found';
    }
    if(filter_has_var(INPUT_POST, 'fname')){
    	$email = $_POST['fname'];
    	$email = filter_var($email, FILTER_SANITIZE_EMAIL);
    	echo $email. '<br>';
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        	echo 'You have Entered a Real Email';
        }
        else{
        	echo 'You have not input an Email';
        }
    }

    $var = $_POST['fname'];
    if(filter_var($var, FILTER_VALIDATE_INT)){
    	echo $var. ' is a number';
    }else {
    	echo $var. ' is NOT a number';
    }
    $var = "<script>alert('Welcome to MY Page')</script>";
    echo filter_var($var, FILTER_SANITIZE_SPECIAL_CHARS);
    //echo $var;
   // var_dump(filter_var($var, FILTER_SANITIZE_NUMBER_INT));
    $values = array(
    	'fname' => FILTER_VALIDATE_INT,
    	'fname2' => FILTER_VALIDATE_EMAIL,
    	'number' => array(
    		'filter' => FILTER_VALIDATE_INT,
    		'options' => array(
    		    		'min_range' => 1,
    		    		'max_range' => 100,)
    	)
    );
    print_r(filter_input_array(INPUT_POST, $values));

*/
    $arr = array(
    	"name" => "Ibitoye Basit",
    	"email"  => "basitibitoye@gmail.com",
    	"age" => "20"
    );
    $filters = array(
    	"name" => array(
    	    	"filter" => FILTER_CALLBACK,
    			"options" => "ucwords"
    		),
    	"age" => array(
    		"filter" => FILTER_VALIDATE_INT,
    		"options" => array(
    			"min_range" => 1,
    			"max_range" => 30
    		)
    	),
    	"email" => FILTER_VALIDATE_EMAIL,
    );
    print_r(filter_input_array($arr, $filters));
?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">   
<label for="Full Name">Full Name:</label><br>
<input type="text" name="fname" id=""><br>
<label for="email">Email Address:</label><br>
<input type="email" name="fname2" id=""><br>
<label for="Phone Number">Phone Number:</label><br>
<input type="number" name="number" id=""><br>


<button type="submit">SUBMIT</button>
</form>