<?php

/* https://api.telegram.org/bot2135439604:AAGQUl8wXFUWbF_K-zRHIDSHKoaPreyU9iY/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$email = $_POST['user_email'];
$text = $_POST['user_text'];
$token = "2135439604:AAGQUl8wXFUWbF_K-zRHIDSHKoaPreyU9iY";
$chat_id = "-666895030";
$arr = array(
  'Имя пользователя: ' => $name,
  'Телефон: ' => $phone,
  'Email' => $email,
  'Текст' => $text,
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};
if(isset($_POST['go'])){


$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: index.php');
} else {
  echo "Error";
}
}
?>
