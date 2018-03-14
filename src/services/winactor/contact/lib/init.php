<?php
/**
 * KobeBeauty PHP Contact Form
 * https://giginc.co.jp/
 *
 * Copyright (c) 2016 GIG inc.
 * Released under the MIT license
 */

// セッションスタート
session_start();

define('DEBUG', false);
//define('DEBUG', true);
define('ADMIN_MAIL', 'web@iimhs.co.jp');
//define('ADMIN_MAIL', 'kagawa+ihs@giginc.co.jp');
define('COMPANY_NAME', 'IIMヒューマンソリューション');
define('SMTP_HOST', 'smtp.sendgrid.net');
define('SMTP_PORT', 587);
define('SMTP_USER', 'giginc+contract');
define('SMTP_PASSWD', 'trKaCR&3EXBvpmUG');

require_once( __DIR__ . '/utility.php');
