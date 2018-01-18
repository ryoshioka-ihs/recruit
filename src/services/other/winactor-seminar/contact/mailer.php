<?php
require 'vendor/autoload.php';
Dotenv::load(__DIR__);

$sendgrid_password = $_ENV['SENDGRID_PASSWORD'];
$sendgrid_username = $_ENV['SENDGRID_USERNAME'];
$from              = $_ENV['FROM'];
$to                = $_ENV['TO'];

/*アンケート内容
$q1 = $_POST['q1'];
$q2 = $_POST['q2'];
$q3 = $_POST['q3'];
if (isset($_POST['q4_1']) && is_array($_POST['q4_1'])) {
    $q4_1 = implode("、", $_POST["q4_1"]);
}
if (isset($_POST['q4_2']) && is_array($_POST['q4_2'])) {
    $q4_2 = implode("、", $_POST["q4_2"]);
}
if (isset($_POST['q4_3']) && is_array($_POST['q4_3'])) {
    $q4_3 = implode("、", $_POST["q4_3"]);
}
if (isset($_POST['q4_4']) && is_array($_POST['q4_4'])) {
    $q4_4 = implode("、", $_POST["q4_4"]);
}
if (isset($_POST['q4_5']) && is_array($_POST['q4_5'])) {
    $q4_5 = implode("、", $_POST["q4_5"]);
}
$q5 = $_POST['q5'];
$q6 = $_POST['q6'];
*/

//お客様情報
$company = $_POST['company'];//会社名
$name = $_POST['name'];//担当者名
$despartment = $_POST['despartment'];//部署名
$position = $_POST['position'];//役職
$company_size = $_POST['company_size'];//会社規模
$emailadd = $_POST['email'];//メールアドレス
$tel = $_POST['tel'];//	TEL
$seminar = $_POST['seminar'];//	セミナー日程
$enquete = $_POST['enquete'];// アンケート
$other = $_POST['other'];// アンケート-その他入力




$sendgrid = new SendGrid($sendgrid_username,$sendgrid_password, array("turn_off_ssl_verification" => true));
$email    = new SendGrid\Email();
$email->addTo($to)->
       setFrom($from)->
       setFromName("WinActorセミナーのお申込み")->
       setSubject("WinActorセミナーのお申込みを承りました。")->
       setText("会社名: $company \r\nお名前: $name \r\n部署名: $despartment \r\nお役職: $position \r\n会社規模: $company_size \r\nご希望の開催日: $seminar \r\nEmailアドレス: $emailadd  \r\nTEL: $tel　\r\nアンケート: $enquete　\r\nアンケート-その他入力: $other")->
       setHtml("<strong>会社名:</strong> $company<br />　<strong>お名前:</strong> $name<br /> <strong>部署名:</strong> $despartment<br />　<strong>お役職:</strong> $position<br />　<strong>会社規模:</strong> $company_size<br /> <strong>ご希望の開催日:</strong> $seminar<br /> <strong>Emailアドレス:</strong> $emailadd<br /> <strong>TEL:</strong> $tel<br /> <strong>アンケート:</strong> $enquete<br /> <strong>アンケート-その他入力:</strong> $other<br />")->
       addCategory('contact');

$response = $sendgrid->send($email);
var_dump($response);

// 正常終了時にthanks.htmlへリダイレクト
header('Location: thanks.html');
exit();