<?php 


function greeting($name, $dayNumber) {
	
	switch ($dayNumber) {
		case '1':
			echo "Привет $name! Хорошего и продуктивного рабочего дня!";
			break;
		case '2':
			echo "Привет $name! Хорошего и продуктивного рабочего дня!";
			break;
		case '3':
			echo "Привет $name! Хорошего и продуктивного рабочего дня!";
			break;
		case '4':
			echo "Привет $name! Хорошего и продуктивного рабочего дня!";
			break;
		case '5':
			echo "Привет $name! Хорошего и продуктивного рабочего дня!";
			break;
		case '6':
			echo "Привет $name! Желаю вам хорошо отдохнуть в этот день!";
			break;
		case '7':
			echo "Привет $name! Желаю вам хорошо отдохнуть в этот день!";
			break;
		default:
			echo "Привет $name! Вы ввели неверный день недели!";
			break;
	} 
} 

greeting("Ростислав", 4);

?>