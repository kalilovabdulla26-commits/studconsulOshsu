<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $phone = $_POST['phone'];
  $message = $_POST['message'];

  $to = "kalilovabdulla26@gmail.com";  // СЕН АЛГЫҢ КЕЛГЕН ПОЧТА
  $title = "Сайттан жаңы билдирүү: $subject";

  $body = "Аты-жөнү: $name\n";
  $body .= "Email: $email\n";
  $body .= "Телефон: $phone\n\n";
  $body .= "Билдирүү:\n$message\n";

  $headers = "From: $email";

  if (mail($to, $title, $body, $headers)) {
    echo "Билдирүү ийгиликтүү жөнөтүлдү!";
  } else {
    echo "Ката кетти. Кайра аракет кылыңыз.";
  }
}
?>
