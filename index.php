<?php
session_start();
?>

<html ng-app="myApp">

<head>

    <?php include 'head.php';?>

</head>

<body onload="myFunction()">

    <!--placeholder on page load-->
    <div id="loading" class="d-flex align-items-center">
    <strong>Loading...</strong>
    <div class="spinner-border ml-auto" role="status" aria-hidden="true"></div>
    </div>

    <!--Header area-->

    <div class="jumbotron text-center" id="jumbotron">
        <i class="fab fa-canadian-maple-leaf fa-4x"></i>
        <br>
        <h1>Non-Universal Beliefs</h1>
        <p class="lead">Follow your imagination!</span> </p>
    </div>


    <?php include 'menu.php';?>

    <!--Actual page content retrives heres!-->
    <div class="thumbnail">
        <div ng-view></div>
    </div>

<?php include 'footer.php';?>

</body>

</html>

<?php

include 'connection.php';
$_SESSION["Result"] = "DEFAULT";
if(isset($_POST['submit'])){

  $name = $_POST['name'];
  $email = $_POST['email'];
  $comments = $_POST['comments'];
  $insertquery = "insert into contact_form (Name, Email, Comments) VALUES ('$name','$email','$comments')";
  $res = mysqli_query($con,$insertquery);
  
 if ($res) {

// Set session variables
$_SESSION["Result"] = "SUCCESS";


  }
  else{


  }

}


?>

