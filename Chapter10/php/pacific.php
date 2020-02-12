<?php

$fname = $_POST['myFName'];
$lname = $_POST['myLName'];
$email = $_POST['myEmail'];
$phone = $_POST['myPhone'];
$arrival = $_POST['arrivalDate'];
$nights = $_POST['nights'];
$comments = $_POST['myComments'];

?>
<!DOCTYPE html>
<html lang="en" >
	<head>
		<title>Pacific Trails Resort</title>
		<link rel="stylesheet" href="pacificPHP.css" type="text/css" />
	</head>
	<body>
		<div id="wrapper">
			<h1> Pacific Trails Resort</h1>
			<div id="content">
				<h2>We will be contacting you soon!</h2>
				<h3>Here is the information you entered:</h3>
				<table>
					<tr>
						<td>
							myFName :
						</td>
						<td>
							<?php echo $fname; ?>
						</td>
					</tr>
					<tr>
						<td>
							myLName :
						</td>
						<td>
							<?php echo $lname; ?>
						</td>
					</tr>
					<tr>
						<td>
							myEmail :
						</td>
						<td>
							<?php echo $email; ?>
						</td>
					</tr>
					<tr>
						<td>
							myPhone :
						</td>
						<td>
							<?php echo $phone; ?>
						</td>
					</tr>
					<!--Added these extra instructions to display the arrival date and number of nights the user inputs-->
					<tr>
						<td>
							arrivalDate :
						</td>
						<td>
							<?php echo $arrival; ?>
						</td>
					</tr>
					<tr>
						<td>
							nights :
						</td>
						<td>
							<?php echo $nights; ?>
						</td>
					</tr>
					<tr>
						<td>
							myComments :
						</td>
						<td>
							<?php echo $comments; ?>
						</td>
					</tr>
				</table>
				<p>
				<input type="button" value = "Back" onclick="javascript:history.go(-1)" />
				</p>
			</div> <!-- end of content -->
		</div> <!-- end of wrapper -->
	</body>
</html>