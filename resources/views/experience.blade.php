<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

        @extends('layouts\mainlayout')
@section('content')
   <div class="album text-muted">
     <div class="container">
       <div class="row">
         <h1>This is a demo text</h1>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed egestas dolor vulputate quam convallis consequat. Quisque eu lorem eget magna lacinia suscipit. Maecenas condimentum vehicula eros. Fusce massa lacus, blandit et leo sed, accumsan commodo sem. Sed eget pulvinar tellus. Praesent ex diam, sodales at consequat id, viverra ut dolor. In eget orci sit amet magna sagittis mattis sit amet sed augue. Vivamus facilisis libero ligula, vel sodales ipsum sollicitudin id. Duis vitae urna rutrum, dignissim arcu ac, elementum augue. Quisque id interdum ligula. Donec tincidunt feugiat massa sed aliquam. Duis eu vehicula turpis.</p>
</div>
     </div>
   </div>
@endsection
<b></b>

<link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.css') }}">
<script type="text/javascript" src="{{ asset('/js/bootstrap.js') }}"></script>
<!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


    
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bukan Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
           
        </style>
    </head>
    <body>
    <style type="text/css">
		body{
			background-color:black;
			color: silver;
			text-align: center;
		}
		.fotonama{
			color: #ff4242;
			margin: 50px;

		}
		.isi{
			font-size: 30px;
			color: lightblue
		}
		a{
			color: lightblue;
			text-decoration: none;
		}
		#mail{
			color: lightblue;
		}
		.contact{
			float:left;
			margin-left: 38%;
			margin-top: 50px;
			background-color : red;
			width: 300px;
			height: 150px;
			text-align: center;
			color:lightblue;
			font-size: 18px;
			border-radius: 5%;
		}
		a:link {
		  color: grey;
		  background-color: transparent;
		  text-decoration: none;
		}
		a:visited {
		  color: grey;
		  background-color: transparent;
		  text-decoration: none;
		}
		a:hover {
		  color: white;
		  background-color: transparent;
		  text-decoration: none;
		}
		a:active {
		  color: white;
		  background-color: transparent;
		  text-decoration: none;
		}
		body{
			background-color: black;
			font-family: helvetica;
		}
		/* Make sure that padding behaves as expected */
		* {box-sizing:border-box}

		/* Container for skill bars */
		.container {
		  width: 100%; /* Full width */
		  background-color: #141414; /* Grey background */
		}

		.skills {
		  margin-right: 1000px;
		  text-align: right; /* Right-align text */
		  padding-top: 10px; /* Add top padding */
		  padding-bottom: 10px; /* Add bottom padding */
		  color: black;
		}

		.html {width: 60%; background-color: #4CAF50;} /* Green */
		.css {width: 52%; background-color: #2196F3;} /* Blue */
		.js {width: 45%; background-color: #f44336;} /* Red */
		.php {width: 15%; background-color: #808080;} /* Dark Grey */

	</style>

	<title></title>
</head>
<body>
	<div style="color: white;text-align: center;" >
                    <h2> Muhammad Syahrevi:  The Experience</h2>
                </div>
<div style="color: white;text-align: center;margin-top: 5%;">
<h4>
Skill Yang Muhammad Syahrevi miliki selama 2-3 tahun bersekolah di SMK Taruna Bhakti Depok
<br>
<br>
<br>
</h4>

</div>

<p>HTML</p>
<div class="container">
  <div class="skills html">60%</div>
</div>

<p>CSS</p>
<div class="container">
  <div class="skills css">52%</div>
</div>

<p>JavaScript</p>
<div class="container">
  <div class="skills js">45%</div>
</div>

<p>PHP</p>
<div class="container">
  <div class="skills php">15%</div>
</div>

<a style="opacity: 0.2">simplified for better eye viewing</a>
<div style="text-align: center;margin-top: 5%;">
                    <h4>
                    <a href="/profile">Profile</a>
                    <a href="/experience">Experience</a>
                    <a href="/portofolio">Portofolio</a>
                    </h4>
                </div>
	
<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
 </body> 
</html>
