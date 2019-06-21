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
	<form action="">
		Имя<br><input type="text" name="name"><span class="error"></span><br>
		Телефон<br><input type="text" name="phone"><span class="error"></span><br>
		Почта<br><input type="text" name="email"><span class="error"></span><br>
		<input type="button" value="Отправить">
	</form>
	<div class="result"></div>
	<script>
		$(function(){
			let $form = $("form");
			let $res = $(".result");
			let $but = $("form>input[type=button]");
			let $inputs = $("input[type=text]");

			$("form>input[type=button]").on("click", function(){
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
							$("input[name="+key+"]" ).next().html(data.errors[key]);
						}
					}
				});
			});
		});
	</script>
</body>
</html>
