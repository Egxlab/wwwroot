<?php
ini_set('sendmail_from','info@flankera.com');
ini_set('SMTP','localhost');
ini_set('smtp_port',25);
if(mail('ididitmyway6@gmail.com','test subject','test message')){
      echo('ok');
    }
else{
      echo('not ok');
    }
?>