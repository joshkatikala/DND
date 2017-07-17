<!DOCTYPE html>
<html>
<head>
	<title>Let's PlayDeal or No Deal</title>
	<link rel="stylesheet" type="text/css" href="./landing.css">
</head>
<body>
	<?php
		$value_to_page = array(
		    "1" => 'first-1.html',
		    "2"  => 'dond-2.php',
		    "3" => 'dond-3.php',
		    "4" => 'dond-4.php',
		    "5" => 'dond-5.php',
		    "6" => 'dond-6.php',
		    "7" => 'first-7.html',
		    "8" => 'dond-8.php',
		    "9" => 'dond-9.php',
		    "10" => 'dond-10.php',
		    "11" => 'dond-11.php',
		    "12" => 'dond-12.php',
		    "13" => 'dond-13.php',
		    "14" => 'dond-14.php',
		    "15" => 'dond-15.php',
		    "16" => 'dond-16.php',
		);
		if(isset($_POST['submit'])){

		    
		    if(isset($_POST['caselist']) && isset($value_to_page[$_POST['caselist']])){
		        header('Location: '.$value_to_page[$_POST['caselist']]);
		        return;
			}
		} 
	?>
	<div class="header">
		<h1>GMONEY</br> Pick Your Winning Case</h1>
	</div>
	<form method="post">
		<table class="center">
			<tr>
				<td>
					<input class="inputcase1" type="radio" name="caselist" value="1"> 
					<div class="space"></div>
				</td>
				<td>
					<input class="inputcase2" type="radio" name="caselist" value="2">
					<div class="space"></div>
				</td>
				<td>
					<input class="inputcase3" type="radio" name="caselist" value="3">
					<div class="space"></div>
				</td>
				<td>
					<input class="inputcase4" type="radio" name="caselist" value="4"> 
					<div class="space"></div>
				</td>
			</tr>
			<tr>
				<td>
					<input class="inputcase5" type="radio" name="caselist" value="5"> 
					<div class="space"></div>
				</td>
				<td>
					<input class="inputcase6" type="radio" name="caselist" value="6">
					<div class="space"></div>
				</td>
				<td>
					<input class="inputcase7" type="radio" name="caselist" value="7">
					<div class="space"></div>
				</td>
				<td>
					<input class="inputcase8" type="radio" name="caselist" value="8"> 
					<div class="space"></div>
				</td>
			</tr>
			<tr>
				<td>
					<input class="inputcase9" type="radio" name="caselist" value="9"> 
					<div class="space"></div>
				</td>
				<td>
					<input class="inputcase10" type="radio" name="caselist" value="10"> 
					<div class="space"></div>
				</td>
				<td>
					<input class="inputcase11" type="radio" name="caselist" value="11"> 
					<div class="space"></div>
				</td>
				<td>
					<input class="inputcase12" type="radio" name="caselist" value="12"> 
					<div class="space"></div>
				</td>
			</tr>
			<tr>
				<td>
					<input class="inputcase13" type="radio" name="caselist" value="13">
					<div class="space"></div>
				</td>
				<td>
					<input class="inputcase14" type="radio" name="caselist" value="14">
					<div class="space"></div>
				</td>
				<td>
					<input class="inputcase15" type="radio" name="caselist" value="15">
					<div class="space"></div>
				</td>
				<td>
					<input class="inputcase16" type="radio" name="caselist" value="16">
					<div class="space"></div>
				</td>
			</tr>
		</table>
		<div class="bottom">
			<input type="submit" name="submit" class="button">
		</div>

	</form>
</body>
</html>