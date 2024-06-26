<html>
<head>
    <title>Hubble about</title>
    <style>
        .content {
            padding:50px;
            background: rgba(0, 0, 0, 0.5);
            position: absolute;
            top: 40%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            z-index: 1; /* Ensure content is above the video */
        }
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
            bottom: 20%;
            right: 41%;
            background: rgba(0, 0, 0, 0.5);
            padding: 10px;
            border-radius: 5px;
            opacity: 0;
            animation: fadeInUp 2s ease forwards, blinkText 9s infinite;
            z-index: 2;

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
    <div class="content">
        <center>
            <hr>
            <h1>HUBBLE</h1>
            <hr>
            <h2>User Registration</h2><br>
            <table>
            <form action="process.php" method="post">

                <tr>
                    <td><center><p>Username-</p><td>
                    <td><input type="text" name="username"></td>
                </tr>
                <tr>
                    <td><center><p>Email-</p><td>
                    <td><input type="email" name="email"></td>
                </tr>
                <tr>
                    <td><center><p>Age-</p><td>
                    <td><input type="number" name="age"></td>
                </tr>
                <tr>
                    <td><center><p >country-</p><td>
                    <td><label for="country"></label><select name = "country" id="country">
                        <option value = "Select Country">Select Country</option>
                        <option value = "India">India</option>
                        <option value = "USA">USA</option>
                        <option value = "China">China</option>
                        <option value = "Japan">Japan</option>
                        <option value = "Russia">Russia</option>
                    </select></td>
                </tr>
                <tr>
                    <td><center><p>Set Password-</p><td>
                    <td><input type="Password" name="password"></td>
                </tr>
                <tr>
                    <td><center><p>Confirm Password-</p><td>
                    <td><input type="Password" name="confirm_password"></td>
                </tr>
            </table><br>
            <a href="login_1.php" target="_top"><input type = "submit" name = "save" value="register"></a>
    </from><br><br><hr>
            
        </center>
    </div>
     <!-- Animated text -->
     <div class="animated-text">Discover the universe with Hubble.</div>
</body>
<script>
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
