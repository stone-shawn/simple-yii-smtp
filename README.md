simple-yii-smtp
===============

This is a very simple Yii smtp component.

Config:
-------
<pre>
  <code>
  'import' => array(
      'application.extensions.simple-smtp.*',
  ),

  'components' => array(

    'mailer' => array(
      'class' => 'Smtp',
      'debug' => true,
      'relay_host' => 'smtp.test.loc',
      'smtp_port' => 25,
      'time_out' => 30,
      'auth' => true,
      'host_name' => 'localhost',
      'log_file' => '',
      'sock' => false,
      'user' => 'test@test.loc',
      'pass' => '*****',
    ),
  ),
  </code>
</pre>

Usage:
------
<pre>
  <code>
    $subject =  "A test mail from leiswork";
    $message = "<b>Hello world!!</b>";
    $to = 'recivier@test.loc';
    $mailtype = "HTML";
    Yii::app()->mailer->sendmail($to, $subject,$message, $mailtype, "utf-8");

  </code>
</pre>




