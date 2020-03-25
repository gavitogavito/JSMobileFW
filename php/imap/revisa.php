<?php
require '__autoload.php';
require 'Mailbox.php';
require 'IncomingMail.php';

// 4. argument is the directory into which attachments are to be saved:
$mailbox = new Mailbox('{mail.{tu_email}.com.ar:993/imap/ssl}INBOX', 'joaquinalaguive@gmail.com', '{password}', __DIR__);

// Read all messaged into an array:
$mailsIds = $mailbox->searchMailbox('ALL');
if(!$mailsIds) {
    die('Mailbox is empty');
}

// Get the first message and save its attachment(s) to disk:
$mail = $mailbox->getMail($mailsIds[0]);

var_dump($mail);
echo "\n\n\n\n\n";
// var_dump($mail->getAttachments());

?>