<!doctype html>
<html lang="de">
	<head>
	    <meta charset="utf-8">
	    <title>Shoutbox</title>
	    <link rel="stylesheet" href="assets/css/style.css?v=1">
	</head>
	<body class="no-js">
		<div id="shoutbox">
			<h1>Shoutbox <a href="changelog.php">Version 0.1</a></h1>
			<p id="count"><strong>47</strong> Shouts gefunden</p>
			<div id="shouts">
				<div class="shout">
					<div class="infos">
						<span class="user"><i>Richard Thiel</i></span>
						<span class="time"><i>07:45 Uhr</i></span>
					</div>
					<p>
						Überall dieselbe alte Leier. Das Layout ist fertig, der Text lässt auf sich warten. Damit das Layout nun nicht nackt im Raume steht und sich klein und leer vorkommt, springe ich ein: der Blindtext. Genau zu diesem Zwecke erschaffen, immer im Schatten meines großen Bruders &raquo;Lorem Ipsum&laquo;
					</p>
				</div>
				<div class="shout">
					<div class="infos">
						<span class="user"><i>Richard Thiel</i></span>
						<span class="time"><i>07:45 Uhr</i></span>
					</div>
					<p>
						Überall dieselbe alte Leier. Das Layout ist fertig, der Text lässt auf sich warten. Damit das Layout nun nicht nackt im Raume steht und sich klein und leer vorkommt, springe ich ein: der Blindtext. Genau zu diesem Zwecke erschaffen, immer im Schatten meines großen Bruders &raquo;Lorem Ipsum&laquo;
					</p>
				</div>
			</div>
			<form action="index.php" method="POST">
				<input name="name" type="text" placeholder="Dein Name" value="" />
				<textarea name="message" placeholder="Deine Nachricht"></textarea>
				<button><span>Shout</span></button>
			</form>
		</div>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    	<!-- Include all compiled plugins (below), or include individual files as needed -->
    	<script src="assets/js/bootstrap.min.js"></script>
    	<script src="assets/js/page.js"></script>
	</body>
</html>