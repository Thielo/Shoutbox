<?php include('includes/database.php'); ?>
<?php include('includes/put.php'); ?>
<!doctype html>
<html lang="de">
	<head>
	    <meta charset="utf-8">
	    <title>Shoutbox</title>
	    <link rel="stylesheet" href="assets/css/style.css?v=1">
	</head>
	<body class="no-js">
		<div id="shoutbox">
			<h1>Shoutbox <a href="changelog.php">Version 0.2</a></h1>
			<?php include('includes/fetch.php'); ?>
			<form action="index.php" method="POST">
				<input type="hidden" name="submit" value="1" />
				<input name="name" type="text" placeholder="Dein Name" value="<?php echo $fields['name']['value']; ?>" class="<?php echo $fields['name']['class']; ?>" />
				<?php if($fields['name']['errorText'] != ''){ echo '<p>'.$fields['name']['errorText'].'</p>'; } ?>
				<textarea name="message" placeholder="Deine Nachricht" class="<?php echo $fields['message']['class']; ?>"><?php echo $fields['message']['value']; ?></textarea>
				<?php if($fields['message']['errorText'] != ''){ echo '<p>'.$fields['message']['errorText'].'</p>'; } ?>
				<button type="submit"><span>Shout</span></button>
			</form>
		</div>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    	<!-- Include all compiled plugins (below), or include individual files as needed -->
    	<script src="assets/js/bootstrap.min.js"></script>
    	<script src="assets/js/page.js"></script>
	</body>
</html>