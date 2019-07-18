<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UFT-8">
	<title>template</title>
	<style >
		
        body{
        	background:#000 ;
        }

		header{
			position:relative;
			margin: auto;
			text-align: center;
			padding: 5px;
			color: #fff;
		}

		nav{
			position: relative;
			margin: auto;
			width: 100%;
			height: auto;
			background: black;
		}

		nav ul{
			position: relative;
			margin: auto;
			width: 50%;
			text-align: center;
		}

		nav ul li{
			display: inline-block;
			width: 24%;
			line-height: 50%;
			list-style: none;
		}

		nav ul li a{
			color: white;
			text-decoration: none;
        } 

        nav ul li a:hover{
        	background: red;
        }

        section{
        	color: #fff;
        	position: relative;
        	padding: 20px;
        }

    </style>

</head>
<body>

<header>
	<h1>LOGOTIPO</h1>
</header>

<?php
        include "modulos/navegacion.php";

?>

<section>
	<?php
$mvc = new MvController();
$mvc -> enlacesPaginasController();

	?>
</section>

</body>
</html>