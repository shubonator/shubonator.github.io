<?php

/* https://api.telegram.org/bot610565106:AAGt9QCiBUxVaDfPHl0yVUQX81qMz2717qs/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$email = $_POST['user_email'];
$sity = $_POST['user_sity'];
$company = $_POST['user_company'];
$link = $_POST['user_link'];
$comment = $_POST['user_comment'];
$token = "610565106:AAGt9QCiBUxVaDfPHl0yVUQX81qMz2717qs";
$chat_id = "-295678560";
$arr = array(
  'Имя пользователя: ' => $name,
  'Телефон: ' => $phone,
  'E-mail: ' => $email,
  'Город: ' => $sity,
  'Компания: ' => $company,
  'Ссылка: ' => $link,
  'Коментарий: ' => $comment
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: thank-you.html');
} else {
  echo "Error";
}
?>