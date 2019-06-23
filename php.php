<?php
/*#циклы*/
			for($i = 1910; $i <= 2010; $i++){
				echo "<option value=\"$i\">$i</option>";
			}

/////////////////////////////////////////////////////////////////

/*#константы*/

const PI = 3.14;
define(PI, 3.14);

/////////////////////////////////////////////////////////////////

/*#операторы*/

var_dump($c) //вывести переменнную, не смотря на результат

mt_rand(0, 100) // вернет рандомное число в указанных пределах

if(){

} elseif(){

} else{
	
}

/////////////////////////////////////////////////////////////////

/*#встроенные функции*/

error_reporting(E_ALL) //показывать все ошибки

print_r($arr)

exit() //завершить работу скрипта

/////////////////////////////////////////////////////////////////

/*#числа*/

/*--приведение в число--*/

(int)$a //отчесение дробной части

intval($a) //приведение дробвного числа к целому

/*--методы чисел--*/

floor($a) //округление вниз

is_numeric(); //проверка на число

trim($text); //отрезает пробелы справа и слева

/////////////////////////////////////////////////////////////////

/*#строки*/

/*--методы строк--*/


nl2br($text) //превращает обычные переносы в br

strlen($text); //возвращает длину строки


/////////////////////////////////////////////////////////////////

/*#bool*/

/*--приведение в булево--*/
bool($a) 

/////////////////////////////////////////////////////////////////

/*#массивы*/

$arr = array(1,2,3,4);

$arr = [1,2,3,4];

$arr = [1,2,3,10=>4]; //задать индекс элементу массива

/*--#ассоциативный массив--*/

$arr = [
	 'Armenia' => 'Armenia', 
    'Georgia' => 'Georgia', 
    'Albania' => 'Albania', 
    'Algeria' => 'Algeria', 
    'Bahrain' => 'Bahrain', 
    'Barbados' => 'Barbados'
]

/*--#методы массива--*/

array_keys($array) //Возвращает все или некоторое подмножество ключей массива

count($arr) //возвращает количество элементов в массиве

foreach($arr as $country =>$capital){
	echo "$country - $capital"
}

 //вывести только значения
foreach($arr as $capital){
				echo "$capital<br>";
			}

isset($_GET['id']) //проверка на существование элементов массива


endforeach;

/////////////////////////////////////////////////////////////////

/*#функции*/

function danger_game($a, $b){

}

function area($r){
	return 3.14*$r*$r;
}

/*--методы функции--*/

is_callable(name) //можно ли вызывать функцию

/*--замыкание--*/

function danger_game(&$a){ //передача по ссылке

}

/////////////////////////////////////////////////////////////////

/*#работа с файлами*/

/*--методы для работы с файлами--*/

include_once("file.txt")

file_get_contents("file.txt")


$files = scandir('data')

is_file($filename)

file_put_contents('apps.txt', "$name $phone", FILE_APPEND)

?>

