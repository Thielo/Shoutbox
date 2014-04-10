<?php
	$fields = array(
		'name' => array(
			'value' => '',
			'class' => 'required',
			'errorText' => ''
		),
		'message' => array(
			'value' => '',
			'class' => 'required',
			'errorText' => ''
		)
	);

	if(isset($_POST['submit'])){
		$errors = 0;	
		if(isset($_POST['name']) && $_POST['name'] != ''){
			$fields['name']['value'] = $_POST['name'];
		}else{
			$fields['name']['class'] = 'required error';
			$fields['name']['errorText'] = 'Sie müssen einen Namen angeben';
			$errors++;
		}
		if(isset($_POST['message']) && $_POST['message'] != ''){
			$fields['message']['value'] = $_POST['message'];
		}else{
			$fields['message']['class'] = 'required error';
			$fields['message']['errorText'] = 'Sie müssen eine Nachricht eingeben!';
			$errors++;
		}
		if($errors == 0){
			$insertSQL = "INSERT INTO shoutbox (name,message) VALUES (:name,:message)";
			$insertQuery = $db->prepare($insertSQL);
			$insertQuery->execute(
				array(
					':name'=>$fields['name']['value'],
					':message'=>$fields['message']['value']
				)
			);
			$fields['name']['value'] = '';
			$fields['message']['value'] = '';
		}
	}
?>