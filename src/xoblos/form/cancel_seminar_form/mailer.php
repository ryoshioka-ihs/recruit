<?php
require 'vendor/autoload.php';
Dotenv::load(__DIR__);

$sendgrid_password = $_ENV['SENDGRID_PASSWORD'];
$sendgrid_username = $_ENV['SENDGRID_USERNAME'];
$from              = $_ENV['FROM'];
$to                = $_ENV['TO'];



//お客様情報
$company = $_POST['Company'];//会社名
$name1 = $_POST['Lastname'];//姓
$name2 = $_POST['Firstname'];//名
//$despartment = $_POST['despartment'];//部署名
//$position = $_POST['position'];//お役職
$emailAdress = $_POST['EmailAdress'];//メールアドレス
$phone1 = $_POST['Phone'];//電話番号1
$seminar =$_POST['Seminar'];//セミナー
$message = $_POST['Message'];//特記事項
$check = $_POST['check'];// 個人情報の取扱




//ユーザーへ送信するメール
$sendgrid = new SendGrid($sendgrid_username,$sendgrid_password, array("turn_off_ssl_verification" => true));
$email    = new SendGrid\Email();
$email->addTo($emailAdress)->
       setFrom($from)->
       setFromName("IIMヒューマン・ソリューション株式会社")->
       setSubject("【xoBlos製品概要セミナーのキャンセルを承りました】" )->
       setText("$Company \r\n$Lastname $Fisrtname 様\r\n\r\nご連絡いただきまして、ありがとうございます。\r\n下記内容でお申し込みのキャンセルを承りました。\r\n\r\n　会社名: $Company \r\n ご希望の開催日: $Seminar \r\n メールアドレス: $EmailAdress \r\n　電話番号: $Phone \r\n　特記事項: $Message \r\n　個人情報の取扱: $check \r\n\r\n　別日程でのご参加をご希望の方は、\r\n https://www.iimhs.co.jp/xoblos/form/seminar_form/ よりお申し込みください。\r\n\r\n")->


       setHtml("$Company <br> $Lastname $Firstname 様<br><br>ご連絡いただきまして、ありがとうございます。<br>下記内容でお申し込みのキャンセルを承りました。<br><br>会社名: $Company <br />ご希望の開催日： $Seminar <br />メールアドレス: $EmailAdress <br />電話番号: $Phone <br />特記事項: $Message <br />個人情報の取扱: $check <br /><br>別日程でのご参加をご希望の方は<br> https://www.iimhs.co.jp/xoblosform/seminar_form/ よりお申し込みください。<br><br>")->
       addCategory('contact');

$response = $sendgrid->send($email);
var_dump($response);

//管理者へ送信するメール
$sendgrid = new SendGrid($sendgrid_username,$sendgrid_password, array("turn_off_ssl_verification" => true));
$email    = new SendGrid\Email();
$email->addTo($to)->
       setFrom($from)->
       //setFromName("")->
       setSubject("【xoBlos製品概要セミナーのキャンセルを承りました】" )->
       setText("下記内容にてセミナーのキャンセルを承りました。\r\nご担当者はご対応のほどよろしくお願いいたします。\r\n\r\n会社名: $Company \r\n ご希望の開催日: $Seminar\r\n 参加者名: $Lastname $Firstname 様\r\n メールアドレス: $EmailAdress\r\n　電話番号: $Phone \r\n　特記事項: $Message\r\n　個人情報の取扱: $check")->


       setHtml("下記内容にてセミナーのキャンセルを承りました。<br>ご担当者はご対応のほどよろしくお願いいたします。<br><br>会社名: $Company <br /> ご希望の開催日: $Seminar <br /> 参加者名: $Lastname $Fisrstname 様<br /> メールアドレス: $EmailAdress <br /> 電話番号: $Phone <br /> 特記事項: $Message <br /> 個人情報の取扱: $check <br />")->
       addCategory('contact');

$response = $sendgrid->send($email);
var_dump($response);

 //正常終了時にthanks.htmlへリダイレクト
header('Location: /xoblos/form/cancel_seminar_form/thanks.html');
exit();

