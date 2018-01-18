<?php
/**
 * KobeBeauty PHP Contact Form
 * http://www.kobe-beauty.co.jp/
 *
 * Copyright (c) 2014 Kobe Beauty Co., Ltd.
 * Released under the MIT license
 */
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once(__DIR__ . '/../vendor/PHPMailer/src/Exception.php');
require_once(__DIR__ . '/../vendor/PHPMailer/src/PHPMailer.php');
require_once(__DIR__ . '/../vendor/PHPMailer/src/SMTP.php');

/**
* sendMailtoAdmin
* メール送信（管理者宛）
* @param $data     フォーム送信データ
*/
function sendMailtoAdmin ($data) {
    $result = false;

    // 文字コードをセット
    mb_language("Japanese");
    mb_internal_encoding("UTF-8");

    // 宛先を変更
    $to = ADMIN_MAIL;
    $from = ADMIN_MAIL;

    // 件名
    $subject = "【お問い合わせがありました】-Winactor問い合わせフォーム-". date("Y/m/d");

    // 代替テキストに
    //$data['message'] = isset($data['message']) ? $data['message'] : '未入力';


    // 本文作成
    $body = '';
    $body .= "Winactor問い合わせフォームより\n";
    $body .= "問い合わせがございました。\n";
    $body .= "\n";
    $body .= "＝＝＝お申し込み内容＝＝＝\n";
    $body .= "お名前　：{$data['name']}\n";
    $body .= "電話番号：{$data['tel']}\n";
    $body .= "メール　：{$data['email']}\n";
    $body .= "企業名：{$data['company_name']}\n";
    $body .= "詳しく聞きたいこと：\n";
    $body .= "{$data['note']}\n";
    $body .= "＝＝＝＝＝＝＝＝＝＝＝＝＝\n";
    $body .= "\n";
    $body .= "＿/＿/＿/＿/＿/＿/＿/＿/＿/＿/＿/＿/＿/＿/＿/＿/＿/＿/＿/＿/\n";
    $body .= "\n";
    $body .= "○個人情報保護方針について\n";
    $body .= "詳細は https://www.iimhs.co.jp/privacy/policy.html をご覧ください。\n";
    $body .= "\n";
    $body .= "配信元 : IIMヒューマン・ソリューション株式会社\n";
    $body .= "連絡先 : web@iimhs.co.jp | 03-5684-6840（営業部)\n";
    $body .= "\n";
    $body .= "＿/＿/＿/＿/＿/＿/＿/＿/＿/＿/＿/＿/＿/＿/＿/＿/＿/＿/＿/＿/\n";
    $body .= "\n";

    $mail = new PHPMailer(true);
    try {
        $mail->IsSMTP();
        $mail->SMTPAuth = true;
        $mail->CharSet = 'utf-8';
        $mail->Encoding = '7bit';
        $mail->SMTPSecure = 'tls';
        $mail->Host = SMTP_HOST;
        $mail->Port = SMTP_PORT;
        $mail->IsHTML(false);
        $mail->Username = SMTP_USER;
        $mail->Password = SMTP_PASSWD;
        $mail->SetFrom($from, COMPANY_NAME);
        $mail->From = $from;
        $mail->Subject = $subject;
        $mail->Body = $body;
        $mail->AddAddress($to);
        $mail->Send();

        return true;
    } catch (Exception $e) {
        return false;
    }
}

/**
* sendMailtoCustomer
* メール送信（ユーザー宛）
* @param $data     フォーム送信データ
*/
function sendMailtoCustomer ($data) {
    $result = false;

    // 文字コードをセット
    mb_language("Japanese");
    mb_internal_encoding("UTF-8");

    // 送信先
    $to = $data["email"];

    // 件名
    $subject = "【お問い合わせありがとうございます。】-IIMヒューマンソリューション";

    // 送信元
    $from = ADMIN_MAIL;

    // 本文作成
    $body  = "";
    $body .= "＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝\n";
    $body .= "<<Winactor無償ハンズオンセミナー開催決定！>>\n";
    $body .= "・純国産RPAツール「WinActor」の実物を触ってみたい！\n";
    $body .= "・検証前に使い方をレクチャーして欲しい！\n";
    $body .= "そんなご要望にお応えする無償セミナーを緊急開催！\n";
    $body .= "セミナー詳細、開催日程については、下記リンクをご確認下さい！\n";
    $body .= "https://www.iimhs.co.jp/services/other/winactor-seminar/\n";
    $body .= "＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝\n";
    $body .= "\n";
    $body .= "{$data["name"]}様\n";
    $body .= "\n";
    $body .= "お世話になります。\n";
    $body .= "この度はWinactorのお問い合わせを頂きまして、\n";
    $body .= "誠にありがとうございます。\n";
    $body .= "\n";
    $body .= "【Winactorの特徴】\n";
    $body .= "\n";
    $body .= "Winactorは金融、小売、物流、ITなど、\n";
    $body .= "様々な業界での業務自動化を実現している\n";
    $body .= "RPA(ロボティクス・プロセス・オートメーション)ツールです。\n";
    $body .= "\n";
    $body .= "Winactorでは、\n";
    $body .= "エクセルとデータベース、\n";
    $body .= "CRMとブラウザなど、\n";
    $body .= "別々のツール間の作業の自動化が可能です。\n";
    $body .= "\n";
    $body .= "また複雑なプログラミングも必要なく、\n";
    $body .= "マウスポイントによる直感操作でプログラムも完了します。\n";
    $body .= "\n";
    $body .= "まるで格安のロボット事務が一人オフィスに増えるな感覚で\n";
    $body .= "ご使用頂くことが可能です。\n";
    $body .= "\n";
    $body .= "お問い合わせいただいた方から順番に\n";
    $body .= "弊社からご対応させて頂きますが、\n";
    $body .= "気になる方はぜひセミナーもご活用くださいませ。\n";
    $body .= "https://www.iimhs.co.jp/services/other/winactor-seminar/\n";
    $body .= "\n";
    $body .= "それではこの度のご連絡は以上となります。\n";
    $body .= "\n";
    $body .= "担当者からご連絡させて頂きますので、\n";
    $body .= "しばらくお待ちくださいませ。\n";
    $body .= "\n";
    $body .= "IIMヒューマンソリューション\n";
    $body .= "\n";
    $body .= "\n";
    $body .= "＝＝＝お申し込み内容確認＝＝＝\n";
    $body .= "お名前　：{$data['name']}\n";
    $body .= "電話番号：{$data['tel']}\n";
    $body .= "メール　：{$data['email']}\n";
    $body .= "企業名：{$data['company_name']}\n";
    $body .= "詳しく聞きたいこと：\n";
    $body .= "{$data['note']}\n";
    $body .= "＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝\n";
    $body .= "\n";
    $body .= "＿/＿/＿/＿/＿/＿/＿/＿/＿/＿/＿/＿/＿/＿/＿/＿/＿/＿/＿/＿/\n";
    $body .= "\n";
    $body .= "○個人情報保護方針について\n";
    $body .= "詳細は https://www.iimhs.co.jp/privacy/policy.html をご覧ください。\n";
    $body .= "\n";
    $body .= "配信元 : IIMヒューマン・ソリューション株式会社\n";
    $body .= "連絡先 : web@iimhs.co.jp | 03-5684-6840（営業部)\n";
    $body .= "\n";
    $body .= "＿/＿/＿/＿/＿/＿/＿/＿/＿/＿/＿/＿/＿/＿/＿/＿/＿/＿/＿/＿/\n";
    $body .= "\n";

    $mail = new PHPMailer(true);
    try {
        $mail->IsSMTP();
        $mail->SMTPAuth = true;
        $mail->CharSet = 'utf-8';
        $mail->Encoding = '7bit';
        $mail->SMTPSecure = 'tls';
        $mail->Host = SMTP_HOST;
        $mail->Port = SMTP_PORT;
        $mail->IsHTML(false);
        $mail->Username = SMTP_USER;
        $mail->Password = SMTP_PASSWD;
        $mail->SetFrom($from, COMPANY_NAME);
        $mail->From = $from;
        $mail->Subject = $subject;
        $mail->Body = $body;
        $mail->AddAddress($to, $data['name']);
        $mail->Send();
        return true;
    } catch (Exception $e) {
        return false;
    }
}
