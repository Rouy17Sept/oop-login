<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<header>
    <nav>
        <div>
            <h3>Youri Jilderda</h3>
            <ul class="menu-main">
                <li><a href="index.php">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
        <ul class="menu-member">
            <?php
                    if(isset($_SESSION['useruid']))
                    {
                        ?>
                        <li><a href="#"><?php echo $_SESSION['useruid']; ?></a></li>
                        <li><a href="includes/logout.inc.php">Logout</a></li>
                        <?php
                    } else {
                        ?>
                        <li><a href="#login-form">Login</a></li>
                        <li><a href="#signup-form">Signup</a></li>
                        <?php
                    }
            ?>
        </ul>
    </nav>
</header>

<section class="index-intro">
    <div class="index-intro-bg">
        <div class="wrapper">
            <div class="index-intro-c1">
                <img src="img/wiweyour.jpg" alt="">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.</p>
            </div>
            <div class="index-intro-c2">
                <h1>Welkom bij Youri Jilderda</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.</p>
                <a href="#" class="btn">Lees meer</a>
            </div>
        </div>
    </div>
</section>

<section class="index-login">
    <div class="wrapper">
        <div class="index-login-signup">
            <h4>Sign up</h4>
            <p>Don't have an account? Sign up now!</p>
            <form action="includes/signup.inc.php" method="post" id="signup-form">
                <input type="text" name="uid" placeholder="Username">
                <input type="password" name="pwd" placeholder="Password">
                <input type="password" name="pwdrepeat" placeholder="Repeat password">
                <input type="text" name="email" placeholder="E-mail">
                <br>
                <button type="submit" name="submit">Sign up</button>
            </form>
        </div>
        <div class="index-login-login">
            <h4>Login</h4>
            <p>Already have an account? Login now!</p>
            <form action="includes/login.inc.php" method="post" id="login-form">
                <input type="text" name="uid" placeholder="Username">
                <input type="password" name="pwd" placeholder="Password">
                <br>
                <button type="submit" name="submit">Login</button>
            </form>
        </div>
    </div>
</section>

</body>
</html>