<?php
require 'vendor/autoload.php';
Dotenv::load(__DIR__);

$sendgrid_password = $_ENV['SENDGRID_PASSWORD'];
$sendgrid_username = $_ENV['SENDGRID_USERNAME'];
$from              = $_ENV['FROM'];
$to                = $_ENV['TO'];



//お客様情報
$company = $_POST['company'];//会社名
$name = $_POST['name'];//参加者名
$despartment = $_POST['despartment'];//部署
$position = $_POST['position'];//役職
$emailAdress = $_POST['emailAdress'];//メールアドレス
$phone = $_POST['phone'];//電話番号
$people = $_POST['people'];//従業員数
$seminar = $_POST['seminar'];//セミナー
$enquete = $_POST['enquete'];//セミナーをしったきっかけ
$other = $_POST['other'];//その他を選択した人
$message = $_POST['message'];//特記事項
$check = $_POST['check'];// 個人情報の取扱



//ユーザーへ送信メール
$sendgrid = new SendGrid($sendgrid_username,$sendgrid_password, array("turn_off_ssl_verification" => true));
$email    = new SendGrid\Email();
$email->addTo($emailAdress)->
       setFrom($from)->
       setFromName("IIMヒューマン・ソリューション株式会社")->
       setSubject("【WinActorセミナーへお申込みいただきましてありがとうございます】" )->
       setText("$company\r\n$name 様\r\n\r\nこの度は弊社『WinActorセミナー』へお申込みいただきまして、誠にありがとうございます。\r\n下記内容にてお申込みを受け付けました。\r\n受付が完了し次第、担当より折り返しご連絡させていただきます。\r\n\r\n会社名: $company \r\n ご希望の開催日: $seminar \r\n 参加者名: $name \r\n部署名: $despartment \r\n お役職: $position \r\nメールアドレス: $emailAdress  \r\n電話番号: $phone　\r\n 従業員数: $people  \r\nセミナーをしったきっかけ: $enquete　\r\nその他を選択した人: $other　\r\n 特記事項: $message \r\n個人情報の取扱: $check")->


       setHtml("$company <br />$name 様<br /><br />この度は弊社『WinActorセミナー』へお申込みいただきまして、誠にありがとうございます。<br />下記内容にてお申込みを受け付けました。<br />受付が完了し次第、担当より折り返しご連絡させていただきます。<br /><br />会社名: $company <br />ご希望の開催日: $seminar <br />参加者名: $name <br />部署名: $despartment <br />お役職: $position <br />メールアドレス: $emailAdress  <br /> 電話番号: $phone<br /> 従業員数: $people  <br />セミナーをしったきっかけ: $enquete　<br />その他を選択した人: $other　<br /> 特記事項: $message <br />個人情報の取扱: $check")->
       addCategory('contact');

$response = $sendgrid->send($email);
var_dump($response);

//管理者へ送信するメール
$sendgrid = new SendGrid($sendgrid_username,$sendgrid_password, array("turn_off_ssl_verification" => true));
$email    = new SendGrid\Email();
$email->addTo($to)->
       setFrom($from)->
       //setFromName("IIMヒューマン・ソリューション株式会社")->
       setSubject("【WinActorセミナーへのお申込みを受信しました。】" )->
       setText("下記内容にてセミナーのお申込みを受け付けました。\r\nご対応のほどよろしくお願いいたします。\r\n\r\n会社名: $company \r\n ご希望の開催日: $seminar \r\n 参加者名: $name \r\n部署名: $despartment \r\n お役職: $position \r\nメールアドレス: $emailAdress  \r\n電話番号: $phone　\r\n 従業員数: $people  \r\nセミナーをしったきっかけ: $enquete　\r\nその他を選択した人: $other　\r\n 特記事項: $message \r\n個人情報の取扱: $check")->


       setHtml("下記内容にてセミナーのお申込みを受け付けました。<br />ご対応のほどよろしくお願いいたします。<br /><br />会社名: $company <br />ご希望の開催日: $seminar <br />参加者名: $name <br />部署名: $despartment <br />お役職: $position <br />メールアドレス: $emailAdress  <br />電話番号: $phone<br /> 従業員数: $people  <br />セミナーをしったきっかけ: $enquete　<br />その他を選択した人: $other　<br /> 特記事項: $message <br />個人情報の取扱: $check")->
       addCategory('contact');

$response = $sendgrid->send($email);
var_dump($response);*/

// 正常終了時にthanks.htmlへリダイレクト
header('Location: https://www.iimhs.co.jp/winactor/form/seminar_form/thanks.html');
exit();