<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>API Stream</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
		  integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>
<body>
<div class="container">
	<?php include('partials/nav.php'); ?>
	<div class="row">
		<div class="col-md-12">
			<h1>Lead API</h1>


<table class="table table-bordered">
<thead>
<tr>
	<td>ID</td>
	<td>Full Name</td>
	<td>Email</td>
	<td>Phone</td>
	<td>Further Information</td>
	<td>Security Address</td>
</tr>
</thead>
	<tbody>
	<?php foreach ($leads as $lead) : ?>
		<tr>
	<td><?= $lead->id ?></td>
	<td><?= $lead->fullname ?></td>
	<td><?= $lead->email ?></td>
	<td><?= $lead->phone ?></td>
	<td><?= $lead->furtherInformation ?></td>
	<td><?= $lead->securityAddress ?></td>
	<?php endforeach; ?>
		</tr>
	</tbody>
</table>
		</div>
	</div>
</div>
<!--<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>-->
<!--<!-- Include all compiled plugins (below), or include individual files as needed -->
<!--<script src="js/bootstrap.min.js"></script>-->
</body>
</html>

