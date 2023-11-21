<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="loginstyle.css">
	<title>Log In Page</title>
	<style>
		*{
    margin: 0;
    padding: 0;
}
body{
    /* background-image: url('n.jpg');
    background-repeat: no-repeat;
    background-size: 1550px; */
    background-color:#e9dcbf;
}
.login-container{
    background-color: antiquewhite;
    box-shadow: 5px 15px 23px 5px rgba(0,0,0,0.2);
    width: 350px;
    height: 330px;
    margin-top: 11em;
    border-radius: 15px;
    margin-left: 37rem;
}
.login-box-container{
    border-radius: 10px;
    background-color: #fbf3ed;
    border: 2px solid gray;
    width: 300px;
    height: 250px;
    margin-left: 1.5rem;
}
.text h1{
   background-color: #d4bca9;
    font-size: 30px;
    text-align: center;
    margin-bottom: .5em;
    margin-top: 3rem;
    border-radius: 6px;
    width: 100%;
    height: 35px;
}

.inputs{
    border: 2px solid gray;
    height: 25px;
    border-radius: 8px;
    width: 13em;
    height: 2rem;
    font-size: 16px;
    font-family: 'Times New Roman', Times, serif;
    margin-left: 2.8rem;
    text-indent: .5rem; 
    color: #1b1917;
}
.texts{
    margin-left: 2.8rem;
    color: #393530;
    font-size: 16.5px;
}
.ptexts{
    text-align: center;
}
.btn{
    border: 2px solid gray;
    width: 4rem;
    height: 1.8rem;
    margin-left: 7rem;
    border-radius: 7px;
    background-color: #9e8f8e;
    font-family: 'Times New Roman', Times, serif;
    font-size: 1rem;
	color: black;
}
	</style>
</head>

<body>			
	<div class="login-container">
		<div class="text">
			<h1> Growsery Admin Side </h1>
		</div>
				<div class="login-box-container">
					<form action="admin_log.php" method="post">
                        <br>
						<label class="texts"> Username <input class="inputs" name="usrname" placeholder=" Username"></label>
                        <br><br>
						<label class="texts"> Password <input class="inputs" type=" Password" name="pass" placeholder="Password" ></label>
						<br><br>
                        <p class="ptexts"> Forgot Password? </p>
                        <br>
						<button class="btn">Log In</button>
					</form>
                    <p id="error"></p>
				</div>
	</div>
</body>

</html>




























<!-- <!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="loginstyle.css">
	<title>Log In Page</title>
</head>

<body>			
	<div class="login-container">
		<div class="text">
			<h1> Growsery Admin Side </h1>
		</div>
				<div class="login-box-container">
					<form action="admin_log.php" method="post">
						<label > Username <input class="inputs" name="usrname" placeholder=" Username"></label>
						<label > Password <input class="inputs" type=" Password" name="pass" placeholder="Password" ></label>
						<p> Forgot Password? </p>
						<button class="">Log In</button>
					</form>
				</div>
	</div>
</body>

</html> -->