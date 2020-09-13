<?php
// Все значения полей берем из конструктора форм amoCRM
if (isset($_POST['phone'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $note = $_POST['note'];
    $custom_1 = $_POST['custom_1'];
    $custom_2 = 'Кастомное поле сделки';
	$paramsArray = array(
		'fields' => array (
			'name_1' => $name, 
			'note_2' => $note, //Поле которое прикрепляется как заметка к сделки
			'132191_1' => $custom_1, // Кастомное поле клиета
			'132501_2' => $custom_2, // Кастомное поле сделки
			'131497_1' => array (
			    '191423' => $phone,
			),
		),
		'form_id' => 'XXXXXX',  // ID формы берем из конструктора форм
		'hash' => 'XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX',	 // Hash берем из конструкотра форм
	); 
   	// преобразуем массив в URL-кодированную строку
	$vars = http_build_query($paramsArray);
	// создаем параметры контекста
	$options = array(
		'http' => array(  
			'method'  => 'POST',  // метод передачи данных
			'header'  => 'Content-type: application/x-www-form-urlencoded',  // заголовок 
			'content' => $vars  // переменные
		)  
	);  
	$context  = stream_context_create($options);  // создаём контекст потока
	
	$result = file_get_contents('https://forms.amocrm.ru/queue/add', false, $context); //отправляем запрос
	
	header("Location: spasibo.php");
	
}else {
    header("Location: index.php");
    echo "Страница не доступна";
}

?>