<?php
/**
 * KobeBeauty PHP Contact Form
 * http://www.kobe-beauty.co.jp/
 *
 * Copyright (c) 2014 Kobe Beauty Co., Ltd.
 * Released under the MIT license
 */

function checkInputData($data) {
    // エラーメッセージを格納する配列
    $err_msg = array();

    // 御社名
    if (strlen($data['company_name']) == 0) {
        $err_msg['company_name'] = "御社名をご入力してください";
    }

    // 御名前
    if (strlen($data['name']) == 0) {
        $err_msg['name'] = "ご担当者をご入力してください";
    }

    // メールアドレス
    if (strlen($data['email']) == 0) {
        $err_msg['email'] = "メールアドレスを入力してください。";
    } else {
        if (!preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", $data['email'])) {
            $err_msg['email'] = "正しいメールアドレスを入力してください。";
        }
    }

    // 電話番号
    if (strlen($data['tel']) == 0) {
        $err_msg['tel'] = "電話番号をご入力してください";
    }

    // プライバシーポリシー
    if ($data['privacy'] != '1') {
        $err_msg['privacy'] = "プライバシーポリシーにご同意下さい。";
    }

    return $err_msg;
}
