<?php
require 'vendor/autoload.php';
Dotenv::load(__DIR__);

$sendgrid_password = $_ENV['SENDGRID_PASSWORD'];
$sendgrid_username = $_ENV['SENDGRID_USERNAME'];
$from              = $_ENV['FROM'];
$to                = $_ENV['TO'];



//お客様情報
$company1 = $_POST['company1'];//会社名
$name1 = $_POST['name1'];//ご担当者名
$despartment1 = $_POST['despartment1'];//部署名
$position1 = $_POST['position1'];//役職
$email1 = $_POST['email1'];//メールアドレス
$tel1 = $_POST['tel1'];//	TEL
$check = $_POST['check'];// 個人情報の取扱



$sendgrid = new SendGrid($sendgrid_username,$sendgrid_password, array("turn_off_ssl_verification" => true));
$email    = new SendGrid\Email();
$email->addTo($to)->
       setFrom($from)->
       setFromName("WinActorの導入・運用サービスの資料請求")->
       setSubject("【WinActorの導入・運用サービスの資料請求を承りました。】" )->
       setText("会社名: $company1 \r\n ご担当者名: $name1 \r\n 部署名: $despartment1 \r\n お役職: $position1 \r\n Emailアドレス: $email1  \r\nTEL: $tel1　\r\n個人情報の取扱: $check")->


       setHtml("<strong>会社名:</strong> $company1<br /> <strong>ご担当者名:</strong> $name1<br /> <strong>部署名:</strong> $despartment1<br /> <strong>お役職:</strong> $position1<br /> <strong>Emailアドレス:</strong> $email1<br /> <strong>TEL:</strong> $tel1<br /><br /> <strong>個人情報の取扱:</strong> $check<br />")->
       addCategory('contact');

$response = $sendgrid->send($email);
var_dump($response);

// 正常終了時にthanks.htmlへリダイレクト
header('Location: thanks.html');
exit();