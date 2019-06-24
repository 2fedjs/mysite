<?php

	$db = new PDO('mysql:host=localhost;dbname=mysite','root','');
	$db->exec('SET NAME UTF8');
	$query = $db->prepare("SELECT * FROM apps");
	$query->execute();
	$apps = $query->fetchAll(PDO::FETCH_ASSOC);
	//print_r($apps);
		echo "<table>";
		
		
		foreach($apps as $app){

			echo "<tr>";
				
			echo '<td>' . $app['dt'] .	'<td>';
			echo '<td>' . $app['name'] .	'<td>';
			echo '<td>' . $app['phone'] .	'<td>';
			echo "</tr>";
		}
		
		echo "</table>";
