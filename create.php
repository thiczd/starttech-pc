<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$name = $description = $image = "";
$name_err = $description_err = $image_err = "";
 if($_SERVER["REQUEST_METHOD"] == "POST"){
 
$input_name = trim(string: $_POST["name"]);

if($input_name == ""){
    $name_err = "Please Enter a valid item name";
} elseif(!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $name_err = "Please enter a valid name.";
    } else{
        $name = $input_name;
    }



$input_description = trim(string: $_POST["description"]);
if($input_description == ""){
    $description_err = "Please Enter a valid item description";
}elseif(!filter_var($input_description, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $description_err = "Please enter a valid name.";
    } else{
        $description= $input_description;
    }
if(empty($name_err) && empty($address_err) && empty($salary_err)){
        // Prepare an insert statement
        $sql = "INSERT INTO items (name, description) VALUES (?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sss", $param_name, $param_description);
            
            // Set parameters
            $param_name = $name;
            $param_address = $description;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records created successfully. Redirect to landing page
                header("location: index.php");
                exit();
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
// $image = trim(string: $_POST["image"]);

mysqli_close($link);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h2>New Item</h2>
        <form method="post">
    <div class="row">
        <label>Name</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="item name" value="">
        </div>
           <label>Description</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="item desription" value="">
        </div>
           <div class="col-sm-6"></div>
        <label for="fileUpload">Image:</label>
  <input type="file" id="fileUpload" name="fileUpload">


  </div>
    <input type="submit" value="Submit">
    </div>

        </form>
    </div>
</body>
</html>