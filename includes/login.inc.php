<?php

if(isset($_POST['submit']))
{
    // Grabbing the data 
    $uid = $_POST['uid'];
    $pwd = $_POST['pwd'];

    // Instantiatte SignupContr class
    include '../classes/dbh.classes.php';
    include '../classes/login.classes.php';
    include '../classes/login-contr.classes.php';
    $login = new Logincontr($uid, $pwd);

    // Running error handles and user signup
    $login->loginUser();

    // Going back to front page
    header("location: ../index.php?error=none");
}