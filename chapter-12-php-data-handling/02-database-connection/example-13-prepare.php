<?php
	$sql = "INSERT INTO users (name, email) VALUES (:name, :email)";
	$stmt = $pdo->prepare($sql);
	$stmt->execute([
		':name' => 'Nok',
		':email' => 'nok@example.com'
	]);
?>
