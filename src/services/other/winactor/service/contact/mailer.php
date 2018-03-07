<?php
require 'vendor/autoload.php';
Dotenv::load(__DIR__);

$sendgrid_password = $_ENV['SENDGRID_PASSWORD'];
$sendgrid_username = $_ENV['SENDGRID_USERNAME'];
$from              = $_ENV['FROM'];
$to                = $_ENV['TO'];



//お客様情報
$company = $_POST['company'];//会社名
$name = $_POST['name'];//ご担当者名
$despartment = $_POST['despartment'];//部署名
$position = $_POST['position'];//役職
$emailadd = $_POST['email'];//メールアドレス
$tel = $_POST['tel'];//	TEL
//$enquete = $_POST['enquete'];// アンケート
//$other = $_POST['other'];// アンケート-その他入力
//$request = $_POST['request'];// 特記事項
$check = $_POST['check'];// 個人情報の取扱



$sendgrid = new SendGrid($sendgrid_username,$sendgrid_password, array("turn_off_ssl_verification" => true));
$email    = new SendGrid\Email();
$email->addTo($to)->
       setFrom($from)->
       setFromName("WinActorセミナーのお申込み")->
       setSubject("【WinActorセミナーのお申込みを承りました。】$seminar" )->
       setText("会社名: $company \r\n ご担当者名: $name \r\n 部署名: $despartment \r\n お役職: $position \r\n Emailアドレス: $emailadd  \r\nTEL: $tel　\r\n個人情報の取扱: $check")->


       setHtml("<strong>会社名:</strong> $company<br /> <strong>ご担当者名:</strong> $name<br /> <strong>部署名:</strong> $despartment<br /> <strong>お役職:</strong> $position<br /> <strong>Emailアドレス:</strong> $emailadd<br /> <strong>TEL:</strong> $tel<br /><br /> <strong>個人情報の取扱:</strong> $check<br />")->
       addCategory('contact');

$response = $sendgrid->send($email);
var_dump($response);

// 正常終了時にthanks.htmlへリダイレクト
header('Location: thanks.html');
exit();