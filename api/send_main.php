$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";

$message = "Тема: " . $_POST['subject'] . "\n\n";
$message .= $_POST['message'];

mail($_POST['email'], $_POST['subject'], $message, $headers);