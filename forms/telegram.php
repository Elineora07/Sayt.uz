<?
// https://api.telegram.org/bot5553469397:AAGgvciH_wy8tgY68DKi-Gynn6tT45SBKgQ/getUpdates,

$name = $_POST['user_name'];
$email = $_POST['user_email'];
$subject = $_POST['user_subject'];
$message = $_POST['user_message'];
$token = "5553469397:AAGgvciH_wy8tgY68DKi-Gynn6tT45SBKgQ";
$chat_id = "-448192056";
$arr = array(
  'Имя пользователя: ' => $name,
  'Эл. адрес: ' => $email,
  'предмет: ' => $subject,
  'сообщение: ' => $message,
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b>".$value."X04";
};

$sendTOTelegram = fopen("https://api.telegram.org/bot{$token}/sendMassage?chat_id={chat_id}={$chat_id}&parse_node-html&text={$txt}","r");

if ($sendTOTelegram) {
  header('Location: index.html');

}else{
  echo "Error";
}