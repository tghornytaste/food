<!DOCTYPE html>
<html>
 
<head>
    <title>Insert Page page</title>
</head>
 
<body>
    <center>
        <?php
 
        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "root", "", "test");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        // Taking all 5 values from the form data(input)
        $first_name =  $_REQUEST['first_name'];
        $last_name = $_REQUEST['last_name'];
        $gender =  $_REQUEST['gender'];
        $address = $_REQUEST['address'];
        $email = $_REQUEST['email'];
         
        // Performing insert query execution
        // here our table name is college

        $first_name_error = $last_name_error = $gender_error =$address_error= $email_error= "";

        $first_name = $last_name = $gender = $address =$ $email = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (empty($_POST["first_name"])) {

            $nameErr = "Please enter your name";

        } else {

            $name = test_input($_POST["first_name"]);

            // check if name only contains letters and whitespace

            if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {

            $nameErr = "Only letters and white space allowed";

            }

        }

        if (empty($_POST["email"])) {

            $emailErr = "valid email";

        } else {

            $email = test_input($_POST["email"]);

            // check if e-mail address is well-formed

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

            $emailErr = "The email address is incorrect";

            }

        }  

       

        if (empty($_POST["address"])) {

            $websiteErr = "Please enter product quqntity";

        } else {

            $website = test_input($_POST["address"]);

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

        }

        function test_input($data) {

        $data = trim($data);

        $data = stripslashes($data);

        $data = htmlspecialchars($data);

        return $data;

        }


        if($_SERVER['REQUEST_METHOD']=="post"){
            if(empty($_POST['fist_name'])){
                $first_name_error="please enter product name";
            }
            if(empty($_POST['last_name'])){
               $last_name_error="please enter quantity";
            }
               if(empty($_POST['gender'])){
                $gender_error="please enter product quality";
            }
            if(empty($_POST['address'])){
                $address_error="please enter product address";
            }
               if(empty($_POST['email'])){
                $email_error="please enter email";
            }
        }  
        $sql = "INSERT INTO college  VALUES ('$first_name',
            '$last_name','$gender','$address','$email')";
             
         
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";
 
            echo nl2br("\n$first_name\n $last_name\n "
                . "$gender\n $address\n $email");
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
          // Close connection
        mysqli_close($conn);
        if($_SERVER['REQUEST_METHOD']=="post"){
        if(empty($_POST['fist_name'])){
            $first_name_error="please enter product name";
        }
        if(empty($_POST['last_name'])){
           $last_name_error="please enter quantity";
        }
           if(empty($_POST['gender'])){
            $gender_error="please enter product quality";
        }
        if(empty($_POST['address'])){
            $address_error="please enter product address";
        }
           if(empty($_POST['email'])){
            $email_error="please enter email";
        }
    }

        ?>
       
    </center>
</body>
 
</html>