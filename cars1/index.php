<html>
	<head>
		<title>Register</title>
		<style type = "text/css">
			*{
			margin = 0;
			padding = 0;
				}
			body{
				background-image:url(Images/background.png);
				background-position:centre;
				background-size:200%;
                background-repeat:no-repeat;
				font-family:sans-serif;
				margin-top:40px;
				}
			.regform{
				width:800px;
				background-color:rgb(0,0,0,0.6);
				margin:auto;
				color:#FFFFFF;
				padding:10px 0px 10px 0px;
				text-align:center;
				border-radius:15px 15px 0px 0px;
				}
			.main{
				background-color:rgb(0,0,0,0.5);
				width:800px;
				margin:auto;
				}
			form{
				padding:10px;
				}
			#name{
				width:100%;
				height:100px;
				}
			.name{
				margin-left:25px;
				margin-top:30px;
				width:125px;
				color:white;
				font-size:18px;
				font-weight:700;
				}
			.firstname{
				position:relative;
				left:200px;
				top:-37px;
				line-height:40px;
				width:480px;
				border-radius:6px;
				padding:0 22px;
				font-size:16px;
				color:#555;
                }
            .ic{
                position:relative;
				left:200px;
				top:-37px;
				line-height:40px;
				width:480px;
				border-radius:6px;
				padding:0 22px;
				font-size:16px;
				color:#555;
            }
			.car-plate{
				position:relative;
				left:200px;
				top:-37px;
				line-height:40px;
				width:480px;
				border-radius:6px;
				padding:0 22px;
				font-size:16px;
				color:#555;
				}
			.email{
				position:relative;
				left:200px;
				top:-37px;
				line-height:40px;
				width:480px;
				border-radius:6px;
				padding:0 22px;
				font-size:16px;
				color:#555;
				}
			.code{
				position:relative;
				left:200px;
				top:-37px;
				line-height:40px;
				width:px;
				border-radius:6px;
				padding:0 22px;
				font-size:16px;
				color:#555;
				}
			.dnum{
				position:relative;
				left:200px;
				top:-37px;
				line-height:40px;
				width:100px;
				border-radius:6px;
				padding:0 22px;
				font-size:16px;
				color:#555;
			}
			.number{
				position:relative;
				left:200px;
				top:-37px;
				line-height:40px;
				width:380px;
				border-radius:6px;
				padding:0 22px;
				font-size:16px;
				color:#555;
				}
            .purpose{
				position:relative;
				left:100px;
				top:-37px;
				line-height:40px;
				width:500px;
				border-radius:6px;
				padding:0 22px;
				font-size:16px;
				color:#555;
				}
            .eh{
				position:relative;
				left:320px;
				top:-37px;
				line-height:40px;
				width:360px;
				border-radius:6px;
				padding:0 22px;
				font-size:16px;
				color:#555;
				}
			.label{
				left:100px;
				font-size:15px;
				color:yellow;
				font-family:TimesNewRoman;
			}
			.area-code{
				position:relative;
				color:#E5E5E5;
				text-transform:capitalize;
				font-size:16px;
				left:54px;
				right:-4px;
				}
			.phone-number{
				position:relative;
				color:#E5E5E5;
				text-transform:capitalize;
				font-size:16px;
				left:-100px;
				right:-4px;
				}
            .extra{
                margin-left:25px;
				margin-top:30px;
				wdith:125px;
				color:white;
				font-size:18px;
				font-weight:700;
				}   
			.option{
				position:relative;
				left:100px;
				top:-37px;
				line-height:40px;
				width:580px;
				height:40px;
				border-radius:6px;
				padding:0 22px;
				font-size:16px;
				color:#555;
				outline:none;
				overflow:hidden;
				}
			.option option{
				font-size:20px;
				}
			#customer{
				margin-left:25px;
				color:white;
				font-size:18px;
				}
            .tc:link{
                color:yellow;
                text-decoration:none;
            }
            .tc:hover{
                color:orange;
            }
			button{
				position:relative;
				background-color:#0000FF;
				display:block;
				margin:20px 0px 20px 0px;
				text-align:center;
                font-size:25px;
				border-radius:12px;
				border:2px solid #366473;
				padding:14px 110px;
				outline:none;
				color:white;
				cursor:pointer;
				transition:0.25px;
				}
			button:hover{
				background-cover:#5390F5;
				}
		</style>
	</head>
	<body>
		<div class = "regform"><h1> Registration Form </h1></div>
		<div class = "main">
		<form action="save.php" method="post">
			<div id = "name">
				<h2 class = "name"> Name </h2>
				<input class = "firstname" type = "text" name = "name" maxlength = "255" required><br>
                </div>
				
                <h2 class = "name"> IC.no/Passport </h2>
				<input class = "ic" type = "text" name = "icno/passport" pattern="[^-,a-zA-Z]+" maxlength = "12" minlength = "12" required>
				<label for ="ic" class="label">Please enter without "-" or ","</label><br>

				<h2 class = "name"> Car-Plate </h2>
				<input class = "car-plate" type = "text" name = "car-plate" pattern="[^-,a-z]+" maxlength = "15" required>
				<label for ="car-Plate" class="label">Please enter without using capital letters. </label><br>
				
				<h2 class = "name"> Email </h2>
				<input class = "email" type = "email" name = "email" required>
				
				<h2 class = "name"> Phone Number </h2>
				<input class="dnum" type="text" id="fname" name="fname" value="+6" readonly>
				<input class = "number" type = "tel" name = "phone" maxlength = "11 minlength = "10 "  pattern="[0-9]{3}[0-9]{7/8}" required>
				<label for ="number" class="label">Please enter without "-" or ","</label><br>
				
                <h2 class = "name">Vehicle usage type(Enter Private or Business)</h2><br><br>
				<input class = "purpose" type = "text" name = "purpose" maxlength = "8" minlength = "7" required>
                
				<h2 class = "name">E-hailing?(Enter Yes or No)</h2><br><br>
				<input class = "eh" type = "text" name = "ehailing" maxlength = "3" minlength = "2" required>
                
                <br>  

				<h2 class = "name"> Create password </h2>
				<input class = "number" type = "password" name = "password" required>
				<h2 class = "name"> Confirm password </h2>
				<input class = "number" type = "password" name = "password-r" required>

				<p class= "extra">By creating an account you agree to our <a href="termcondition.php" class="tc">Terms & Conditions</a>.</p>
				<button type = "submit" value="Submit"> Register </button>
				
				<div class="extra">
    				<p>Already have an account? <a href="login.php" class="tc">Sign in</a>.</p>
  				</div>
				
			</div>
		</form>
	</body>
</html>
