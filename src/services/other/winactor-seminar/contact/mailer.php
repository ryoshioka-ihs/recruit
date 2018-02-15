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
$name1 = $_POST['name1'];//参加者①
$despartment1 = $_POST['despartment1'];//部署名①
$position1 = $_POST['position1'];//役職①
$emailadd1 = $_POST['email1'];//メールアドレス①
$tel1 = $_POST['tel1'];//	TEL①
$name2 = $_POST['name2'];//参加者②
$despartment2 = $_POST['despartment2'];//部署名②
$position2 = $_POST['position2'];//役職②
$emailadd2 = $_POST['email2'];//メールアドレス②
$tel2 = $_POST['tel2'];//  TEL②
$company_size = $_POST['company_size'];//会社規模
$seminar = $_POST['seminar'];//	セミナー日程
$enquete = $_POST['enquete'];// アンケート
$other = $_POST['other'];// アンケート-その他入力
$check = $_POST['check'];// 個人情報の取扱



$sendgrid = new SendGrid($sendgrid_username,$sendgrid_password, array("turn_off_ssl_verification" => true));
$email    = new SendGrid\Email();
$email->addTo($to)->
       setFrom($from)->
       setFromName("WinActorセミナーのお申込み")->
       setSubject("WinActorセミナーのお申込みを承りました。")->
       setText("会社名: $company \r\n ご希望の開催日: $seminar \r\n 参加者①: $name1 \r\n部署名①: $despartment1 \r\n お役職①: $position1 \r\nEmailアドレス①: $emailadd1  \r\nTEL①: $tel1　\r\n 参加者②: $name2 \r\n 部署名②: $despartment2 \r\nお役職②: $position2 \r\nEmailアドレス②: $emailadd2  \r\n TEL②: $tel2　\r\n 会社規模: $company_size  　\r\nアンケート: $enquete　\r\nアンケート-その他入力: $other　\r\n個人情報の取扱: $check")->


       setHtml("<strong>会社名:</strong> $company<br /> <strong>ご希望の開催日:</strong> $seminar<br /><br /> <strong>参加者①:</strong> $name1<br /> <strong>部署名①:</strong> $despartment1<br /> <strong>お役職①:</strong> $position1<br /> <strong>Emailアドレス①:</strong> $emailadd1<br /> <strong>TEL①:</strong> $tel1<br /><br /> <strong>参加者②:</strong> $name2<br /> <strong>部署名②:</strong> $despartment2<br /> <strong>お役職②:</strong> $position2<br /> <strong>Emailアドレス②:</strong> $emailadd2<br /> <strong>TEL②:</strong> $tel2<br /><br /> <strong>会社規模:</strong> $company_size<br />   <strong>アンケート:</strong> $enquete<br /> <strong>アンケート-その他入力:</strong> $other<br /><strong>個人情報の取扱:</strong> $check<br />")->
       addCategory('contact');

$response = $sendgrid->send($email);
var_dump($response);

// 正常終了時にthanks.htmlへリダイレクト
header('Location: thanks.html');
exit();