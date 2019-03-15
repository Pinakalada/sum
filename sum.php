<?php
/*
*	@author tabuncov
*/

$x = $_GET["x"];
$y = $_GET["y"];

function sum($x, $y, $i = 0, $str = '', $z = 0 ){
	while($i < strlen($x) or $i < strlen($y) or $z != 0){
		//проверяем не закончилось ли первое число
		if(empty($x[$i])){
			$numb1 = 0;
		}else{
			$numb1 = $x[$i];
		}
		//проверяем не закончилось ли второе число число
		if(empty($y[$i])){
			$numb2 = 0;
		}else{
			$numb2 = $y[$i];
		}
		//складываем слогаемые и остаток от предыдущего действия
		$sum = $numb1 + $numb2 + $z;
		//в текущую строку результата добавляем единицы, отбрасывая десятки, перенося их в остаток на следующую итерацию
		if(strlen($sum) == 2){
			$sum = (string)$sum;
			$sum = $sum[1];
			$z = 1;
		}else{
			$z = 0;
		}
		$str = $sum.$str;
		$i++;
	}
	return $str;
}

//перед вызовом ф-ции перевернем строки
echo sum(strrev($x), strrev($y));

?>
