<?php
$conn = mysqli_connect("localhost", "root", "", "test");

// Choose a function depends on value of $_POST["action"]
if($_POST["action"] == "insert"){
  insert();
}

// Function
function insert(){
  global $conn;

  $name = $_POST["name"];
  $email = $_POST["email"];
  $age = $_POST["age"];
  $country = $_POST["country"];
  $gender = $_POST["gender"];
  $languages = $_POST["languages"];

  // Check if variable value is empty
  if(empty($name) || empty($email) || empty($age) || empty($country) || empty($gender)){
    // Output
    echo "";
    exit;
  }

  // Check if email still available
  $sameEmail = mysqli_query($conn, "SELECT * FROM tb_data WHERE email = '$email'");
  if(mysqli_num_rows($sameEmail) > 0){
    // Output
    echo 2;
    exit;
  }

  // Validate languages
  $languagesArray = explode(',', $languages);
  $countLanguages = count($languagesArray);
  if($countLanguages <= 1){
    // Output
    echo 3;
    exit;
  }

  // Insert value to database
  $query = "INSERT INTO tb_data VALUES('', '$name', '$email', '$age', '$country', '$gender', '$languages')";
  mysqli_query($conn, $query);
  // Output
  echo 1;
}
