<?php
/*
*	@author tabuncov
*/

$x = $_GET["x"];
$y = $_GET["y"];

function sum($x, $y, $i = 0, $str = '', $z = 0 ){
	while($i < strlen($x) or $i < strlen($y) or $z != 0){
		//��������� �� ����������� �� ������ �����
		if(empty($x[$i])){
			$numb1 = 0;
		}else{
			$numb1 = $x[$i];
		}
		//��������� �� ����������� �� ������ ����� �����
		if(empty($y[$i])){
			$numb2 = 0;
		}else{
			$numb2 = $y[$i];
		}
		//���������� ��������� � ������� �� ����������� ��������
		$sum = $numb1 + $numb2 + $z;
		//� ������� ������ ���������� ��������� �������, ���������� �������, �������� �� � ������� �� ��������� ��������
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

//����� ������� �-��� ���������� ������
echo sum(strrev($x), strrev($y));

?>
