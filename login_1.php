<?php 
    include("connection.php");
    include("login.php")
    ?>
<html>
<head>
    <title>Hubble login</title>
    <style>
        html, body {
    height: 100%; /* Ensures the body takes full viewport height */
    margin: 0; /* Resets default margin */
    overflow: hidden; /* Hides scrollbars */
}

/* Specific rule for webkit browsers to hide scrollbars */
body::-webkit-scrollbar {
    display: none;
}
.animated-text {
            position: absolute;
            bottom: 25%;
            right: 41%;
            background: rgba(0, 0, 0, 0.5);
            padding: 10px;
            border-radius: 5px;
            opacity: 0;
            animation: fadeInUp 2s ease forwards, blinkText 9s infinite;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .form{
            padding: 50px;
            background: rgba(0, 0, 0, 0.5);
            position: absolute;
            top: 40%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            z-index: 1; /* Ensure content is above the video */
        }

        @keyframes blinkText {
            0%, 50%, 100% {
                opacity: 1;
            }
            25%, 75% {
                opacity: 0;
            }
        }
        body {
            background-image: url(other-background.jpg);
            overflow: auto;
            color: white;
            background-color: black;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
            margin: 0;
            position: relative;
            font-family: Arial, sans-serif;
        }
        .stars {
            position: absolute;
            width: 3px;
            height: 3px;
            background: white;
            border-radius: 50%;
            box-shadow: 0 0 2px white; /* Gives a little glow effect */
            animation: move 50s linear infinite;
        }
        @keyframes move {
            from {
                transform: translateY(0px);
            }
            to {
                transform: translateY(-1000px); /* Adjusts the movement distance */
            }
        }
    </style>
</head>
<body>
    <div class="form">
    <center>
        <u><h1>HUBBLE</h1></u>
    </center>
        <hr>
        <h1>Login Form</h1>
        <form name="form" action="login.php" onsubmit="return isvalid()" method="POST">
            <label>Username: </label>
            <input type="text" id="user" name="user"></br></br>
            <label>Password: </label>
            <input type="password" id="pass" name="pass"></br></br>
            <input type="submit" id="btn" value="Login" name = "submit"/>
            <a href="registration.php"><input type="button" value="Register"/></a>

        </form>
        <hr>
    </div>
     <!-- Animated text -->
     <div class="animated-text">Discover the universe with Hubble.</div>
</body>
<script>
    function isvalid(){
                var user = document.form.user.value;
                var pass = document.form.pass.value;
                if(user.length=="" && pass.length==""){
                    alert(" Username and password field is empty!!!");
                    return false;
                }
                else if(user.length==""){
                    alert(" Username field is empty!!!");
                    return false;
                }
                else if(pass.length==""){
                    alert(" Password field is empty!!!");
                    return false;
                }
                
            }
    // Generate 100 stars
    for (let i = 0; i < 400; i++) {
        let star = document.createElement("div");
        star.className = "stars";
        star.style.left = Math.random() * window.innerWidth + "px";
        star.style.top = Math.random() * window.innerHeight + "px";
        star.style.animationDuration = (Math.random() * 100 + 50) + "s"; // Randomize animation speed
        star.style.animationDelay = -(Math.random() * 100) + "s"; // Randomize initial animation phase
        document.body.appendChild(star);
    }
</script>
</html>
