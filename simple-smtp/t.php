<?php
require ('email.class.php');
$smtpserver = "smtp.sina.com";
$smtpserverport =25;
$smtpusermail = "zycoo2014@sina.com";
$smtpuser = "zycoo2014@sina.com";
$smtppass = "123zycoo";
$mailtype = "HTML";

$smtp = new smtp($smtpserver,$smtpserverport,true,$smtpuser,$smtppass);
$smtp->debug = false;

$subject =  "A new Letter from zycoo web site";
$message = "<b>Hi,I want a new IP PBX</b>";

$to = '13963709@qq.com';
$cc = 'ling.fu@zycoo.com';
$smtp->sendmail($to, $smtpusermail, $subject,$message, $mailtype,"utf-8", $cc);
