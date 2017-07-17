<!DOCTYPE html>
<html>
<head>
	<title>Deal or No Deal</title>
	<link rel="stylesheet" type="text/css" href="./deal.css">
</head>
<body>

	<?php
	  	$numbers = range(1, 16);
	    shuffle($numbers);
	?>

	<style type="text/css">
		input.inputcase<?php echo $numbers[0]; ?>[type="checkbox" ]:checked:before {
    		content: url("./images/case-1.png");
		}
		input.inputcase<?php echo $numbers[1]; ?>[type="checkbox" ]:checked:before {
    		content: url("./images/case-5.png");
		}
		input.inputcase<?php echo $numbers[2]; ?>[type="checkbox" ]:checked:before {
    		content: url("./images/case-10.png");
		}
		input.inputcase<?php echo $numbers[3]; ?>[type="checkbox" ]:checked:before {
    		content: url("./images/case-50.png");
		}
		input.inputcase<?php echo $numbers[4]; ?>[type="checkbox" ]:checked:before {
    		content: url("./images/case-100.png");
		}
		input.inputcase<?php echo $numbers[5]; ?>[type="checkbox" ]:checked:before {
    		content: url("./images/case-200.png");
		}
		input.inputcase<?php echo $numbers[6]; ?>[type="checkbox" ]:checked:before {
    		content: url("./images/case-300.png");
		}
		input.inputcase<?php echo $numbers[7]; ?>[type="checkbox" ]:checked:before {
    		content: url("./images/case-400.png");
		}
		input.inputcase<?php echo $numbers[8]; ?>[type="checkbox" ]:checked:before {
    		content: url("./images/case-500.png");
		}
		input.inputcase<?php echo $numbers[9]; ?>[type="checkbox" ]:checked:before {
    		content: url("./images/case-1k.png");
		}
		input.inputcase<?php echo $numbers[10]; ?>[type="checkbox" ]:checked:before {
    		content: url("./images/case-5k.png");
		}
		input.inputcase<?php echo $numbers[11]; ?>[type="checkbox" ]:checked:before {
    		content: url("./images/case-10k.png");
		}
		input.inputcase<?php echo $numbers[12]; ?>[type="checkbox" ]:checked:before {
    		content: url("./images/case-50k.png");
		}
		input.inputcase<?php echo $numbers[13]; ?>[type="checkbox" ]:checked:before {
    		content: url("./images/case-100k.png");
		}
		input.inputcase<?php echo $numbers[14]; ?>[type="checkbox" ]:checked:before {
    		content: url("./images/case-500k.png");
		}
		input.inputcase<?php echo $numbers[15]; ?>[type="checkbox" ]:checked:before {
    		content: url("./images/case-milli.png");
		}
	</style>

	<h1> Deal </h1>

	<div class="main">
	<form action="" method="post">
		<table class="center">
			<tr>
				<td>
					<input class="inputcase1" type="checkbox" name="caselist[]"> 
					<div class="space"></div>
				</td>
				<td>
					<input class="inputcase2" type="checkbox" name="caselist[]">
					<div class="space"></div>
				</td>
				<td>
					<input class="inputcase3" type="checkbox" name="caselist[]">
					<div class="space"></div>
				</td>
				<td>
					<input class="inputcase4" type="checkbox" name="caselist[]"> 
					<div class="space"></div>
				</td>
				<td>
					<input class="inputcase5" type="checkbox" name="caselist[]"> 
					<div class="space"></div>
				</td>
			</tr>
			<tr>
				<td>
					<input class="inputcase6" type="checkbox" name="caselist[]"> 
					<div class="space"></div>
				</td>
				<td>
					<input class="inputcase7" type="checkbox" name="caselist[]"> 
					<div class="space"></div>
				</td>
				<td>
					<input class="inputcase8" type="checkbox" name="caselist[]"> 
					<div class="space"></div>
				</td>
				<td>
					<input class="inputcase9" type="checkbox" name="caselist[]"> 
					<div class="space"></div>
				</td>
				<td>
					<input class="inputcase10" type="checkbox" name="caselist[]">
					<div class="space"></div>
				</td>
			</tr>
			<tr>
				<td>
					<input class="inputcase12" type="checkbox" name="caselist[]">
					<div class="space"></div>
				</td>
				<td>
					<input class="inputcase13" type="checkbox" name="caselist[]">
					<div class="space"></div>
				</td>
				<td>
					<input class="inputcase14" type="checkbox" name="caselist[]">
					<div class="space"></div>
				</td>
				<td>
					<input class="inputcase15" type="checkbox" name="caselist[]">
					<div class="space"></div>
				</td>
				<td>
					<input class="inputcase16" type="checkbox" name="caselist[]">
					<div class="space"></div>
				</td>
			</tr>
		</table>

		<div class="yourcase">
			<p>Your Case: </p>
			<input class="inputcase11" type="checkbox" name="caselist[]">
		</div>
	</form>

	</div>




</body>
</html>