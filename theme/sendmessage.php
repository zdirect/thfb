<?php
$sendto   = 'info@bibio.online';
// $sendto   = 'zsdirect7@gmail.com';
$name = $_POST['name'];
$phone = $_POST['phone'];
$mail = $_POST['mail'];
$mess = $_POST['msg'];
$type = $_POST['type'];
$views = $_POST['views'];
$area = $_POST['area'];
$where = $_POST['where'];
$from_mail = "info@bibio.online";

// Формирование заголовка письма
$subject  = "Заявка с сайта bibio";
$headers ="From: ".$from_name." <".$from_mail.">\r\n";
$headers .= "Reply-To: ". strip_tags($usermail) . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html;charset=utf-8 \r\n";
// Формирование тела письма
$msg  = "<html><body style='font-family:Arial,sans-serif;'>";
$msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>Заявка с сайта bibio</h2>\r\n";
if ($name){
	$msg .= "<p><strong>Имя:</strong> ".$name."</p>\r\n";
}
if ($phone){
	$msg .= "<p><strong>Телефон:</strong> ".$phone."</p>\r\n";
}
if ($mail){
	$msg .= "<p><strong>Почта:</strong> ".$mail."</p>\r\n";
}
if ($mess){
	$msg .= "<p><strong>Сообщение:</strong> ".$mess."</p>\r\n";
}
if ($type){
	$msg .= "<p><strong>Тип помещения:</strong> ".$type."</p>\r\n";
}
if ($views){
	$msg .= "<p><strong>Вид обработки:</strong> ".$views."</p>\r\n";
}
if ($area){
	$msg .= "<p><strong>Площадь обработки:</strong> ".$area."</p>\r\n";
}
if ($where){
	$msg .= "<p><strong>Откуда:</strong> ".$where."</p>\r\n";
}
$msg .= "</body></html>";

// отправка сообщения
if(@mail($sendto, $subject, $msg, $headers)) {
	echo "true";
} else {
	echo "false";
}

?>
