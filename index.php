<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Asymptoter's pages</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
	<?php echo '<p>Hello World</p>'; ?>
    <div class="leftpane">
        <ul>
            <li><a href="index.html">Home</a></li><br></br>
            <li><a href="about_me.html">About me</a></li><br></br>
            <li><a href="trivial.html">Trivia</a></li><br></br>
            <li><a href="game.html">Geo-Challenge</a></li><br></br>
        </ul>
    </div>
    <div class="toppane">
        <div id="authBottons" class="buttonContainer"> 
            <button id="signupButton" class="authButtonClass" onclick="location.href='signup.html'">Sign up</button>
            <button id="loginButton" class="authButtonClass" onclick="login()">Login</button>
        </div>
        <script src="index.js"></script>
    </div>
    <div class="rightpane">
        This is Chiyuang Tseng's website. <br>
    </div> 
</body>
</html>
