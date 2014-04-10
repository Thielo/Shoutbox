<?php
	$query = 'SELECT * FROM shoutbox ORDER BY date DESC LIMIT 0,30';
	$result = $db->query($query);
	$allPosts = $result->fetchAll();
	echo '<p id="count"><strong>'.count($allPosts).'</strong> Shouts gefunden</p>';
	echo '<div id="shouts">';
	foreach($allPosts as $shout){
		echo '<div class="shout">
				<div class="infos">
					<span class="user"><i>'.utf8_encode($shout['name']).'</i></span>
					<span class="time"><i>'.date('l, t. F Y - H:i',strtotime($shout['date'])).' Uhr</i></span>
				</div>
				<p>
					'.utf8_encode($shout['message']).'
				</p>
			</div>';
	}
	echo '</div>';
?>