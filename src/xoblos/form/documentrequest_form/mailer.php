<?php
require 'vendor/autoload.php';
Dotenv::load(__DIR__);

$sendgrid_password = $_ENV['SENDGRID_PASSWORD'];
$sendgrid_username = $_ENV['SENDGRID_USERNAME'];
$from              = $_ENV['FROM'];
$to                = $_ENV['TO'];



//お客様情報
$company = $_POST['company'];//会社名
$Department = $_POST['Department'];//部署名
$Title = $_POST['Title'];//お役職
$LastName = $_POST['LastName'];//姓
$FirstName = $_POST['FirstName'];//名
$Email = $_POST['Email'];//メールアドレス
$phone = $_POST['Phone'];//電話番号
$check = $_POST['check'];// 個人情報の取扱


//管理者へ送信メール
$sendgrid = new SendGrid($sendgrid_username,$sendgrid_password, array("turn_off_ssl_verification" => true));
$email    = new SendGrid\Email();
$email->addTo($to)->
       setFrom($from)->
       //setFromName("IHSWinActor")->
       setSubject("【WinActor資料がダウンロードされました】" )->
       setText("営業各位\r\n\r\nWinActorオファーページの資料がダウンロードされました。\r\n必要に応じてアクションをお願いいたします。\r\n\r\n会社名: $company \r\n 部署名: $Department \r\n お役職: $Title \r\nご担当者名: $LastName $FirstName 様 \r\n　メールアドレス: $Email \r\n電話番号: $Phone　\r\n 個人情報の取扱: $check")->


       setHtml("営業各位<br><br>WinActorオファーページの資料がダウンロードされました。<br />必要に応じてアクションをお願いいたします。<br /><br /><strong>会社名:</strong> $company<br /> <strong>部署名:</strong> $Department<br /> <strong>お役職:</strong> $Title<br /><strong>ご担当者名:</strong> $LastName $FirstName 様<br /> <strong>メールアドレス:</strong> $Email<br /> <strong>電話番号:</strong> $Phone<br /> <strong>個人情報の取扱:</strong> $check<br />")->
       addCategory('contact');

$response = $sendgrid->send($email);
var_dump($response);


// 正常終了時にthanks.htmlへリダイレクト
header('Location: /xoblos/form/documentrequest_form/thanks.html');
exit();