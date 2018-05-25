<?php
require 'vendor/autoload.php';
Dotenv::load(__DIR__);

$sendgrid_password = $_ENV['SENDGRID_PASSWORD'];
$sendgrid_username = $_ENV['SENDGRID_USERNAME'];
$from              = $_ENV['FROM'];
$to                = $_ENV['TO'];



//お客様情報
$company = $_POST['company'];//会社名
$name1 = $_POST['name1'];//姓
$name2 = $_POST['name2'];//名
$despartment = $_POST['despartment'];//部署名
$position = $_POST['position'];//お役職
$emailAdress = $_POST['emailAdress'];//メールアドレス
$phone = $_POST['phone'];//電話番号
$people = $_POST['people'];//従業員数
$seminar =$_POST['seminar'];//セミナー
$enquete =$_POST['enquete'];//アンケート
$other =$_POST['other'];//その他
$pc = $_POST['pc'];//PCの貸出
$message = $_POST['message'];//特記事項
$check = $_POST['check'];// 個人情報の取扱





//ユーザーへ送信するメール
$sendgrid = new SendGrid($sendgrid_username,$sendgrid_password, array("turn_off_ssl_verification" => true));
$email    = new SendGrid\Email();
$email->addTo($emailAdress)->
       setFrom($from)->
       setFromName("IIMヒューマン・ソリューション株式会社")->
       setSubject("【WinActorセミナーへお申込みいただきましてありがとうございます】" )->
       setText("$company \r\n$name1 $name2 様\r\n\r\nこの度は弊社『WinActorセミナー』へお申込みいただきまして、誠にありがとうございます。\r\n受付が完了し次第、担当より折り返しご連絡させていただきます。\r\n\r\n　会社名: $company \r\n ご希望の開催日: $seminar \r\n 部署名: $despartment \r\n　お役職: $position \r\n　メールアドレス: $emailAdress \r\n　電話番号: $phone \r\n　PCの貸出: $pc \r\n　特記事項: $message \r\n　個人情報の取扱: $check ")->


       setHtml("$company <br> $name1 $name2 様<br><br>この度は弊社『WinActorセミナー』へお申込みいただきまして、誠にありがとうございます。<br>受付が完了し次第、担当より折り返しご連絡させていただきます。<br><br>会社名: $company <br />ご希望の開催日： $seminar <br />部署名: $despartment <br />お役職: $position <br />メールアドレス: $emailAdress <br />電話番号: $phone <br />PCの貸出: $pc <br />特記事項: $message <br />個人情報の取扱: $check <br />")->
       addCategory('contact');

$response = $sendgrid->send($email);
var_dump($response);

//管理者へ送信するメール
$sendgrid = new SendGrid($sendgrid_username,$sendgrid_password, array("turn_off_ssl_verification" => true));
$email    = new SendGrid\Email();
$email->addTo($to)->
       setFrom($from)->
       //setFromName("")->
       setSubject("【WinActorセミナーへのお申込みを受信しました。】" )->
       setText("下記内容にてセミナーのお申込みを受け付けました。\r\nご担当者はご対応のほどよろしくお願いいたします。\r\n\r\n会社名: $company \r\n ご希望の開催日: $seminar\r\n 参加者名: $name1 $name2 様\r\n　部署名: $despartment\r\n　お役職: $position\r\n　メールアドレス: $emailAdress\r\n　電話番号: $phone\r\n　PCの貸出: $pc \r\n　特記事項: $message\r\n　従業員数: $people\r\n アンケート: $enquete \r\n その他を選んだ方: $other \r\n個人情報の取扱: $check")->


       setHtml("下記内容にてセミナーのお申込みを受け付けました。<br>ご担当者はご対応のほどよろしくお願いいたします。<br><br>会社名: $company <br /> ご希望の開催日: $seminar <br /> 参加者名: $name1 $name2 様<br /> 部署名: $despartment <br /> お役職: $position <br /> メールアドレス: $emailAdress <br /> 電話番号: $phone <br /> PCの貸出: $pc <br />特記事項: $message <br /> 従業員数: $people <br /> アンケート: $enquete <br /> その他を選んだ方: $other <br /> 個人情報の取扱: $check <br />")->
       addCategory('contact');

$response = $sendgrid->send($email);
var_dump($response);

// 正常終了時にthanks.htmlへリダイレクト
header('Location: https://www.iimhs.co.jp/winactor/form/seminar_form/thanks.html');
exit();