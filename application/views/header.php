<!DOCTYPE html>
<html>
<head>
		<link href='https://fonts.googleapis.com/css?family=PT+Serif:400,700' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Amatic+SC:400,700' rel='stylesheet' type='text/css'>
        <title>CodeIgniter Tutorial</title>
        <style type="text/css">
	        body{
	        	background-color: #f1eed9;
	        	margin: 0;
    			padding: 0;
    			font-family: 'PT Serif', serif;
	    		font-weight: 400;
	        }
	    	header{
	    		background-color: #2e221f;
	    		width: 100%;
	    		color: white;
	    		height: 30px;
	    		position: fixed;
	    		top: 0;
	    		left: 0;
	    		padding: 10px;
	    		font-family: 'PT Serif', serif;
	    		font-weight: 700;
	    		font-size: 25px;
	    	}
	    	footer{
	    		background-color: #2e221f;
	    		width: 100%;
	    		color: white;
	    		height: 50px;
	    		padding: 10px;
	    	
	    	}
	    	#brown{
	    		background-color: #f7edbf;
	    		width: 80%;
	    		margin: auto;
	    		margin-top: 60px;
	    		min-height: 500px;
	    	}
	    	p{
	    		padding-left: 10px;
	    	}
	    	h1{
	    		background-color: #58351a;
	    		color: white;
	    		padding: 5px;
	    		font-family: 'Amatic SC', cursive;
	    		font-weight: 400;
	    		text-align: center;
	    		font-size: 30px;
	    		margin-top: 0;
	    	}
	    	h2{
	    		background-color: #58351a;
	    		color: white;
	    		padding: 5px;
	    		font-family: 'Amatic SC', cursive;
	    		font-weight: 400;
	    		text-align: center;
	    		font-size: 20px;
	    		margin-top: 10px;
	    	}
	    	#imgcont{
	    		width: 40%;
	    		background: black;
	    		padding: 5px;
	    		float: left;
	    		min-height: 100px;
	    		margin-right: 10px;
	    		margin-left: 10px;
	    		display: flex;
	    		align-items: center;
	    	}
	    	section:nth-of-type(2)>#imgcont{
	    		width: 60%;
	    	}
	    	section{
	    		width: 100%;
	    	}
	    	#clearfix{
	    		clear: both;
	    	}
	    	img{
	    		width: 100%;
	    	}
	    	.home{
	    		width: 45%;
	    		float: left;
	    		margin-left: 4%;
	    		min-height: 300px;
	    		text-align: center;
	    	}
	    	.home:first-of-type{
	    		border-right: 1px solid #2e221f;
	    	}
	    	form{
	    		margin-top: 20px;
	    	}
	    	.button{
	    		border: none;
	    		background-color: #58351a;
	    		color: white;
	    		width: 80px;
	    		padding: 5px;
	    		margin-top: 20px;
	    		margin-left: 10px;
	    	}
	    	label{
	    		margin-left: 10px;
	    	}
	    	input{
	    		margin-left: 5px;
	    	}
	    	span{
	    		float: right;
	    		font-size: 10px;
	    		position: relative;
	    		right: 20px;
	    		top: -3px;
	    		text-align: right;
	    	}
	    	a{
	    		text-decoration: none;
	    		color: inherit;
	    	}
        </style>
</head>
<body>
	<header>
		<?php 
		if (isset($_SESSION['session_data'])) {
			echo anchor('Control', 'Logged in ');
		}else{
			echo anchor('Welcome', 'Home screen ');
		}
		
		?>

		<span><?php 
		if (isset($_SESSION['session_data'])) {
			echo "Hello, ".$_SESSION['session_data']['Username']."<br>"; 
			echo anchor('Control', 'My Account '); echo "<br>";
			echo anchor('', 'Logout');
		}else{
			echo " ";
		}
		
		?></span>
	</header>	







