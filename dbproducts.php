<?php
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
<!DOCTYPE html>
<html lang="en">
   <head>
      <title>GFG- Store Data</title>
   </head>
   <body>
      <center>
         <h1>Storing Form data in Database</h1>
         <form  action="insert.php" method="post" auto_complete="off">
             
<p>
               <label for="firstName">product Name:</label>
               <input type="text" name="first_name" id="firstName">
               <span><?php if(isset($first_name_error)) echo  $first_name; ?></span>
            </p>
 
             
<p>
               <label for="lastName">product quality:</label>
               <select input type="select" name="last_name" id="lastName">
               <option></option>
                  <option>first grade</option>
                  <option>second grade</option>
                  <option>third grade</option>
               </select>
               <span><?php if(isset($last_name_error)) echo  $last_name; ?></span>
            </p>
 
             
<p>
               <label for="Gender">product quantity:</label>
               <input type="text" name="gender" id="Gender">
               <span><?php if(isset($gender_error)) echo $gender; ?></span>
            </p>
 
             
<p>
               <label for="Address">Address:</label>
               <input type="text" name="address" id="Address">
               <span><?php if(isset($address_error)) echo $address; ?></span>
            </p>
 
             
<p>
               <label for="emailAddress">Email Address:</label>
               <input type="text" name="email" id="emailAddress">
               <span><?php if(isset($email_error)) echo $email; ?></span>
            </p>
 
            <input type="submit" value="Submit"><p>report</p>
         </form>
      </center>
   </body>
</html>