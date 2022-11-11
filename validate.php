<!DOCTYPE HTML>  

<html>

<head>

    <style>

        .error {color: #FF0000;}

    </style>

</head>

<body>  

    <?php
     $conn = mysqli_connect("localhost", "root", "", "test");
     if($conn === false){
        die("ERROR: Could not connect. "
            . mysqli_connect_error());
     }

     $name =  $_REQUEST['name'];
     $email = $_REQUEST['email'];
     $website = $_REQUEST['website'];
    $comment = $_REQUEST['comment']; 
     $gender =  $_REQUEST['gender'];


        $nameErr = $emailErr = $genderErr = $websiteErr = "";

        $name = $email = $gender = $comment = $website = "";

        function test_input($data) {

            $data = trim($data);
    
            $data = stripslashes($data);
    
            $data = htmlspecialchars($data);
    
            return $data;
    
            }
        
     $sql = "INSERT INTO product  VALUES ('$name',
     '$email','$gender','$comment','$website')";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (empty($_POST["name"])) {

            $nameErr = "Please enter your name";

        } else {

            $name = test_input($_POST["name"]);

            // check if name only contains letters and whitespace

            if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {

            $nameErr = "Only letters and white space allowed";

            }

        }

        if (empty($_POST["email"])) {

            $emailErr = " enter valid email";

        } else {

            $email = test_input($_POST["email"]);

            // check if e-mail address is well-formed

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

            $emailErr = "The email address is incorrect";

            }

        }  

       

        if (empty($_POST["website"])) {

            $websiteErr = "Please enter product quqntity";

        } else {

            $website = test_input($_POST["website"]);

            // check if name only contains letters and whitespace

            if (!preg_match("/^[a-zA-Z-' ]*$/",$website)) {

            $websiteErr = "Only letters and white space allowed";

            }



        }

        if (empty($_POST["comment"])) {

            $comment = "";

        } else {

            $comment = test_input($_POST["comment"]);

        }        

        if (empty($_POST["gender"])) {

            $genderErr = "Please select product grade";

        } else {

            $gender = test_input($_POST["gender"]);

        }

       
        
       

    ?>

    <h2>Supplier Product Data</h2>
    

    <p><span class="error">* required field</span></p>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  

        product Name: <input type="text" name="name">

        <span class="error">* <?php echo $nameErr;?></span>

        <br><br>

       email: <input type="text" name="email">

        <span class="error">* <?php echo $emailErr;?></span>

        <br><br>

        Product Quantity: <input type="text" name="website">

        <span class="error"><?php echo $websiteErr;?></span>

        <br><br>

        Address: <textarea name="comment" rows="2" cols="10"></textarea>

        <br><br>

        Grade:

        <input type="radio" name="gender" value="first grade">first grade
        <input type="radio" name="gender" value="second grade">second grade

        <input type="radio" name="gender" value="third grade">third grade

            <span class="error">* <?php echo $genderErr;?></span>

        <br><br>

        <input type="submit" name="submit" value="Submit">  

    </form>

    <?php

        echo "<h2> Final Output:</h2>";

        echo $name;

        echo "<br>";

        echo $email;

        echo "<br>";

        echo $website;

        echo "<br>";

        echo $comment;

        echo "<br>";

        echo $gender;

    ?>

</body>

</html>