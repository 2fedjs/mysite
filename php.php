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




if(){

} elseif(){

} else{
	
}

/////////////////////////////////////////////////////////////////

/*#встроенные функции*/

error_reporting(E_ALL) //показывать все ошибки

print_r($arr)

exit() //завершить работу скрипта

var_dump($c) //отладочная функция

die(); //убить выполнение скрипта

sleep(2);

/////////////////////////////////////////////////////////////////

/*#числа*/

/*--приведение в число--*/

(int)$a //отчесение дробной части

intval($a) //приведение дробвного числа к целому

/*--методы чисел--*/

floor($a) //округление вниз

is_numeric(); //проверка на число


mt_rand(0, 100) // вернет рандомное число в указанных пределах

/////////////////////////////////////////////////////////////////

/*#строки*/

/*--методы строк--*/


nl2br($text) //превращает обычные переносы в br

strlen($text); //возвращает длину строки

trim($text); //отрезает пробелы справа и слева

explode('-|-', $line);

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

file("apps.txt"); //возвращает файл в виде массива строк

/////////////////////////////////////////////////////////////////

/*#работа с формами*/

strip_tags(str)//убрать теги
htmlspecialchars(string)	//заэкранировать теги\

/////////////////////////////////////////////////////////////////

/*#работа с базами*/

/*--запись в бд--*/
$db = new PDO('mysql:host=localhost;dbname=mysite','root',''); //соединение с базой данных
$db->exec('SET NAME UTF8');
$query = $db->prepare("INSERT INTO apps (name, phone) VALUE(:name, :phone)");
$values = ['name'=>$name, 'phone'=>$phone];
$query->execute($values);

/*--чтение из бд--*/
$db = new PDO('mysql:host=localhost;dbname=mysite','root','');
	$db->exec('SET NAME UTF8');
	$query = $db->prepare("SELECT * FROM apps");
	$query->execute();
	$apps = $query->fetchAll(PDO::FETCH_ASSOC);//перегнать все полученные строки в массив

?>

