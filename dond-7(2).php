<?php
	require "header.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Deal or No Deal</title>
	<link rel="stylesheet" type="text/css" href="./deal.css">
</head>
<body>

	<?php
	  	
	  	$numbers = array();
	  	$j=0;
	  	if(isset($_POST['submit'])){
			if(!empty($_POST['caselist'])){
				foreach($_POST['caselist'] as $index => $selected){
					$numbers[$index] = $selected;
				}
			}
		}

		shuffle($numbers);

		for ($i=5; $i < 10; $i++) { 
			$_SESSION['masterarray'][$i] = $numbers[$j];
			$j++;
		}

	?>

	<style type="text/css">

		input.inputcase<?php echo $_SESSION['masterarray'][0]; ?>[type="checkbox" ]:before {
    		content: url("./images/case-50k.png");
		}
		input.inputcase<?php echo $_SESSION['masterarray'][1]; ?>[type="checkbox" ]:before {
    		content: url("./images/case-25.png");
		}
		input.inputcase<?php echo $_SESSION['masterarray'][2]; ?>[type="checkbox" ]:before {
    		content: url("./images/case-10.png");
		}
		input.inputcase<?php echo $_SESSION['masterarray'][3]; ?>[type="checkbox" ]:before {
    		content: url("./images/case-1k.png");
		}
		input.inputcase<?php echo $_SESSION['masterarray'][4]; ?>[type="checkbox" ]:before {
    		content: url("./images/case-100.png");
		}
		input.inputcase<?php echo $_SESSION['masterarray'][5]; ?>[type="checkbox" ]:before {
    		content: url("./images/case-5.png");
		}
		input.inputcase<?php echo $_SESSION['masterarray'][6]; ?>[type="checkbox" ]:before {
    		content: url("./images/case-milli.png");
		}
		input.inputcase<?php echo $_SESSION['masterarray'][7]; ?>[type="checkbox" ]:before {
    		content: url("./images/case-300.png");
		}
		input.inputcase<?php echo $_SESSION['masterarray'][8]; ?>[type="checkbox" ]:before {
    		content: url("./images/case-5k.png");
		}
		input.inputcase<?php echo $_SESSION['masterarray'][9]; ?>[type="checkbox" ]:before {
    		content: url("./images/case-10k.png");
		}


	</style>

	
	<p>Your Case: </p>
	<input class="inputcase7" type="checkbox" name="caselist[]">
	<div class="space"></div>
	<div class="header">
		<h1> Here's what you eliminated </h1>
		<h1>Select the remaining cases</h1>
	</div>
	<div class="main">
	<form action="dond-7(3).php" method="post">
		<table class="center">
			<tr>
				<td>
					<input class="inputcase1" type="checkbox" name="caselist[]" value="1"> 
					<div class="space"></div>
				</td>
				<td>
					<input class="inputcase2" type="checkbox" name="caselist[]" value="2">
					<div class="space"></div>
				</td>
				<td>
					<input class="inputcase3" type="checkbox" name="caselist[]" value="3">
					<div class="space"></div>
				</td>
				<td>
					<input class="inputcase4" type="checkbox" name="caselist[]" value="4"> 
					<div class="space"></div>
				</td>
				<td>
					<input class="inputcase5" type="checkbox" name="caselist[]" value="5"> 
					<div class="space"></div>
				</td>
			</tr>
			<tr>
				<td>
					<input class="inputcase6" type="checkbox" name="caselist[]" value="6"> 
					<div class="space"></div>
				</td>
				<td>
					<input class="inputcase8" type="checkbox" name="caselist[]" value="8"> 
					<div class="space"></div>
				</td>
				<td>
					<input class="inputcase9" type="checkbox" name="caselist[]" value="9"> 
					<div class="space"></div>
				</td>
				<td>
					<input class="inputcase10" type="checkbox" name="caselist[]" value="10"> 
					<div class="space"></div>
				</td>
				<td>
					<input class="inputcase11" type="checkbox" name="caselist[]" value="11">
					<div class="space"></div>
				</td>
			</tr>
			<tr>
				<td>
					<input class="inputcase12" type="checkbox" name="caselist[]" value="12">
					<div class="space"></div>
				</td>
				<td>
					<input class="inputcase13" type="checkbox" name="caselist[]" value="13">
					<div class="space"></div>
				</td>
				<td>
					<input class="inputcase14" type="checkbox" name="caselist[]" value="14">
					<div class="space"></div>
				</td>
				<td>
					<input class="inputcase15" type="checkbox" name="caselist[]" value="15">
					<div class="space"></div>
				</td>
				<td>
					<input class="inputcase16" type="checkbox" name="caselist[]" value="16">
					<div class="space"></div>
				</td>
			</tr>
		</table>


		<input type="submit" name="submit" class="button">

	</form>

	</div>




</body>
</html>