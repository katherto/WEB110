<?php

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$emailAddress = $_POST['emailAddress'];
$phoneNumber = $_POST['phoneNumber'];
$comments = $_POST['comments'];

?>
<!DOCTYPE html>
<html lang="en" >
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="icon" href="images/favicon.ico" type="image/x-icon">
		<link rel="stylesheet" href="final.css" type="text/css">
		<title>Society Against Misinformation</title>
	</head>
	<body>
		<div id="wrapper">
			<h1>Society Against Misinformation</h1>
			<div id="content">
				<h2>We will be contacting you soon!</h2>
				<div class="pageContent">
					<h2>Here is the information you entered:</h2>
					<table id="userInput">
						<tr>
							<td>
								First name :
							</td>
							<td>
								<?php echo $firstName; ?>
							</td>
						</tr>
						<tr>
							<td>
								Last Name :
							</td>
							<td>
								<?php echo $lastName; ?>
							</td>
						</tr>
						<tr>
							<td>
								E-mail :
							</td>
							<td>
								<?php echo $emailAddress; ?>
							</td>
						</tr>
						<tr>
							<td>
								Phone Number :
							</td>
							<td>
								<?php echo $phoneNumber; ?>
							</td>
						</tr>
						<tr>
							<td>
								Comments :
							</td>
							<td>
								<?php echo $comments; ?>
							</td>
						</tr>
					</table>
					<p>
					<input type="button" value = "Back" style="margin-left: auto; margin-right: auto;" onclick="javascript:history.go(-1)" />
					</p>
				</div> <!-- end of pageContent -->
			</div> <!-- end of content -->
		</div> <!-- end of wrapper -->
	</body>
</html>