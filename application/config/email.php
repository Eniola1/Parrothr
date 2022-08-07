<?php defined('BASEPATH') OR exit('No direct script access allowed');

$config = array(
    'protocol' => 'smtp', // 'mail', 'sendmail', or 'smtp'
    'smtp_host' => 'parrothr.com.ng', 
    'smtp_port' => 465,
    'smtp_user' => 'noreply@parrothr.com.ng',
    'smtp_pass' => 'Zercom@123',
    'smtp_crypto' => 'ssl', //can be 'ssl' or 'tls' for example
    'mailtype' => 'html', //plaintext 'text' mails or 'html'
    'charset' => 'iso-8859-1',
    'wordwrap' => TRUE,
    'newline' => "\r\n"
);
