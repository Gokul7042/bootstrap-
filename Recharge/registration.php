<?php 

include("connection.php");

  if (isset($_POST['submit'])) {

    $name = $_POST["name"];

    $email = $_POST["email"];

    $number = $_POST["number"];

    $employee_id = $_POST["employee_id"];

    $sql = "INSERT INTO `tbl_recharge`(name,email,number,employee_id)  VALUES ('".$name."','".$email."',
    '".$number."','".$employee_id."')";
     $result = mysqli_query($con,$sql);

    if ($result) {
        
        header('location:index.php');
      /* echo "New record created successfully."; */

    }else{

        die("Connection Failed ".$cont->connect_error);

  }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.phptutorial.net/app/css/style.css">
    <title>Register</title>
    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
   
    <link rel="stylesheet" href="css/registration.css">
    
</head>
<body>
<main>
    <form action="#" method="post">
        <h1>Registration</h1>
        <div>
            <label for="username">Name:</label>
            <input type="text" name="name" id="name">
            <span class="formerror" id="error-username" ></span><br>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email">
            <span class="formerror" id="error-email" ></span><br>
        </div>
        <div>
            <label for="mobile_number">mobile number:</label>
            <input type="text" name="number" id="number">
            <span class="formerror" id="error-mobile_number" ></span><br>
        </div>
        <div>
            <label for="employee_id">Employee ID:</label>
            <input type="text" name="employee_id" id="employee_id">
            <span class="formerror" id="error-employee_id" ></span><br>
        </div>
        <div>
            <label for="agree">
                <input type="checkbox" name="agree" id="agree" value="yes"/> I agree
                with the
                <a href="#" title="term of services">term of services</a>
            </label>
        </div>
        <button type="submit"  class="registerbtn" name="submit" >Register</button>
        <footer>Already a member? <a href="index.php">Login here</a></footer>
    </form>
</main>
</body>
<script src="js/registration.js" ></script>
</html>