<?php 
include('libs/smartypants.php');
include('libs/markdown.php');
?>

<!doctype html>
	<head>
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
		<title>home sweet home</title>
		
		<!-- Please don't add "maximum-scale=1" here. It's bad for accessibility. -->
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		
		<!-- Feel free to split the CSS into separate files, if you like. -->
		<link rel="stylesheet" href="style.css"/> 
		<!-- Here's Golden Gridlet, the grid overlay script. -->
		
	</head>
	
	<body lang="en">
		
		<div id="wrapper">
		<header>
				<h2>Home.</h2>
		</header>
		
		
		<section>
			<?php echo(markdown(smartypants(file_get_contents('home.md'))));?>
		</section>
		<section>
			<h3>Bored?</h3>
			<ul>
				<li><a href="http://ruby.learncodethehardway.org/book">Learn fucking Ruby</a></li>
			</ul>
		</section>
		
		
		<!-- Demo code ends -->
			
	</body>
	
</html>