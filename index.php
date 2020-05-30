<html>
    <head>
        <style>
		.bg{
			background-image: url("1.jpg");
			height:100%;
			background-repeat: no-repeat;
			background-size: cover;
		}
		.title{
			font-size: 50px;
			font-weight: bold;;
		}
		.box{
			width: 40%;
			background-color: #1d3557;
			border-radius: 3px;
			color: #f1faee;
		}
		.btn{
			background-color: #e63946;
			width: 80%;
			border-radius: 3px;
			border: none;
			color: white;
			padding: 15px 32px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
			transition: 0.2s;
			cursor: pointer;
		}
		.btn:hover{
			background-color: #D7333F;
		}
	</style>
    </head>
    <body class="bg">
        <center>
        <div class="title"><br>Project Title Allocation</div>
		<br><br>
	    <div class="box">
	      	<div><br><h3>Login</h3></div>
	       	<div>	
		        <form action="student/login.php" method="post">
		        <button type="submit" class="btn">Student Login</button>
		      	</form>
	        </div>
	        <div>	
		      	<form action="faculty/login.php" method="post">
		        <button type="submit" class="btn">Faculty Login</button>
		      	</form>
	      	</div>
	      	<div>
		      	<form action="coordinator/login.php" method="post">
				<button type="submit" class="btn">Admin Login</button>
		        </form>
	        </div>
	        <br><br>
	    </div>
	    </center>
    </body>
</html>
