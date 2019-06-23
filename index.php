<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<style>
		.loading:after{
			content:"";
			display: inline-block;
			background-color: #000;
			width: 10px;
			height: 10px;
			animation: 1s linear 0s normal none infinite running rot;
		}
		@keyframes rot {
		  0% {
		    transform: rotate(0deg);
		  }
		  100% {
		    transform: rotate(360deg);
		  }
		}
	</style>
</head>
<body>
	<select name="" id="">
		<?php
			for($i = 1910; $i <= 2010; $i++){
				echo "<option value=\"$i\">$i</option>";
			}

		?>

	</select>
	<?php
			$h = 23;
			$a = 50;
			$str1 = '$a приветов!';
			$str2 = "$a приветов!";
			echo $str1;
			echo "<br>";
			echo $str2;
			echo "<br>";
			echo $h/6-($h%6)/6;
			echo "<br>";

			function area($r){
				return 3.14*$r*$r;
			}
			echo area(5) - area(3);
			echo "<br>";

			$minuts = 11;
			$ost = $minuts%10;

			function check_time($minuts){
				$ost = $minuts%10;
				if($minuts>10 && $minuts<15){
				echo "$minuts минут";
				echo "<br>";
				}
				elseif ($ost==1){
					echo "$minuts минута";
					echo "<br>";
				}
				elseif($ost>=2 && $ost<5){
					echo "$minuts минуты";
					echo "<br>";
				}
				else{
					echo "$minuts минут";
					echo "<br>";
				}
			}
			
			/*for($i=1;$i<60;$i++){
				check_time($i);
			}*/

			$arr = [
				 'Armenia1' => 'Armenia', 
			    'Georgia' => 'Georgia', 
			    'Albania' => 'Albania', 
			    'Algeria' => 'Algeria', 
			    'Bahrain' => 'Bahrain', 
			    'Barbados' => 'Barbados'
			];

			/*foreach($arr as $country =>$capital){
				echo "$country<br>";
			}*/

			$capitals = [
				'Россия1' => ['Москва1','Москва2','Москва3','Москва4','Москва5'],
				'Россия2' => ['Москва1','Москва2','Москва3','Москва4'],
				'Россия3' => ['Москва1','Москва2','Москва3'],
				'Россия4' => ['Москва1','Москва2'],
				'Россия5' => ['Москва1']
			];

			/*echo '<ul>';
			foreach($capitals as $capital =>$towns){
				echo "<li>$capital<ul>";
					foreach($towns as $town){
						echo "<li>$town</li>";
					}
				echo "</ul></li>";
			}
			echo '</ul>';*/
			$id = $_GET['id'];
			$text = file_get_contents("data/$id");
			echo nl2br($text);
			echo "<br>";

			$files = scandir('data');
			foreach($files as $file){
				if(is_file('data/'.$file)){
					echo "<a href=\"index.php/?id=$file\">$file</a>";
				}
			}
			echo "<br>";
			if(count($_POST>0)){
				$name = $_POST['name'];
				$phone = $_POST['phone'];
				file_put_contents('apps.txt', "$name $phone\n", FILE_APPEND);
				echo 'ваша заявка принята';
			}

		?>
		<ul>
			<?php foreach($capitals as $capital => $towns): ?>
				<li><?=$capital?>
					<ol>
						<?php foreach($towns as $town): ?>
							<li><?=$town?></li>
						<?php endforeach; ?>
					</ol>
				</li>
			<?php endforeach; ?>
		</ul>
	<form id="backcall" action="" method="post">
		Имя<br>
		<input type="text" name="name"><br>
		Телефон<br>
		<input type="text" name="phone"><br>
		<input type="submit" value="Отправить">
	</form>
	<hr>
	<form id="reg" action="">
		Имя<br><input type="text" name="name"><span class="error"></span><br>
		Телефон<br><input type="text" name="phone"><span class="error"></span><br>
		Почта<br><input type="text" name="email"><span class="error"></span><br>
		<input type="button" value="Отправить">
	</form>
	<div class="result"></div>
	<script>
		$(function(){
			let $form = $("#reg");
			let $res = $(".result");
			let $but = $("#reg>input[type=button]");
			let $inputs = $("#reg>input[type=text]");

			$("#reg>input[type=button]").on("click", function(){
				$but.attr("disabled", true);
				$res.addClass("loading");
				$.post("test/ajaxtest1.php",$form.serialize(), function(data){
					console.log(data);
					$but.attr("disabled", false);
					$res.removeClass("loading");
					if(data.res){
						$res.html("Заявка отправлена");
						$form[0].reset();
					} else {
						for(let key in data.errors){
							$("#reg>input[name="+key+"]" ).next().html(data.errors[key]);
						}
					}
				},"json");
			});
		});
	</script>
</body>
</html>
