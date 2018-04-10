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
$name = $_POST['name'];//参加者名
$despartment = $_POST['despartment'];//部署
$position = $_POST['position'];//役職
$email = $_POST['email'];//メールアドレス
$phone = $_POST['phone'];//電話番号
$people = $_POST['people'];//従業員数
$seminar = $_POST['seminar'];//セミナー
$enquete = $_POST['enquete'];//セミナーをしったきっかけ
$other = $_POST['other'];//その他を選択した人
$message = $_POST['message'];//特記事項
$check = $_POST['check'];// 個人情報の取扱



$sendgrid = new SendGrid($sendgrid_username,$sendgrid_password, array("turn_off_ssl_verification" => true));
$email    = new SendGrid\Email();
$email->addTo($to)->
       setFrom($from)->
       setFromName("WinActorセミナーのお申込み")->
       setSubject("【WinActorセミナーのお申込みを承りました。】$seminar" )->
       setText("会社名: $company \r\n ご希望の開催日: $seminar \r\n 参加者名: $name \r\n部署名: $despartment \r\n お役職: $position \r\nメールアドレス①: $email  \r\n電話番号: $phone　\r\n 従業員数: $people  \r\nセミナーをしったきっかけ: $enquete　\r\nその他を選択した人: $other　\r\n 特記事項: $message　\r\n個人情報の取扱: $check")->


       setHtml("<strong>会社名:</strong> $company<br /> <strong>ご希望の開催日:</strong> $seminar<br /><br /> <strong>参加者名:</strong> $name<br /> <strong>部署名:</strong> $despartment<br /> <strong>お役職:</strong> $position<br /> <strong>メールアドレス:</strong> $email<br /> <strong>電話番号:</strong> $phone<br /><strong>従業員数:</strong> $people<br />   <strong>セミナーをしったきっかけ:</strong> $enquete<br /> <strong>その他を選択した人:</strong> $other<br /> <strong>特記事項:</strong> $message<br /> <strong>個人情報の取扱:</strong> $check<br />")->
       addCategory('contact');

$response = $sendgrid->send($email);
var_dump($response);

// 正常終了時にthanks.htmlへリダイレクト
header('Location: thanks.html');
exit();