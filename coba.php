<?php 

require('Plugins/sendgrid-php/sendgrid-php.php');
    $sendgrid = new SendGrid('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');
    $mail    = new SendGrid\Email();
    $mail->addTo("deepinterminal@gmail.com")
      ->setFrom("admin@indocreator.co.id")
      ->setSubject("Sending with SendGrid is Fun")
      ->setHtml("and easy to do anywhere, even with PHP");

    $sendgrid->send($mail);