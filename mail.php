<h1>Sending e-mail</h1>

<?php

require 'vendor/autoload.php';

// Create a new Postal client using the server key you generate in the web interface
$client = new Postal\Client('https://postal.hmartin.fr', 'iYps0SdDxL8fY8yXdexAD44B');

// Create a new message
$message = new Postal\SendMessage($client);

// Add some recipients
$message->to('hugo.martin@epitech.eu');

// Specify who the message should be from. This must be from a verified domain
// on your mail server.
$message->from('no-reply@hmartin.fr');

// Set the subject
$message->subject('Hello world');

// Set the content for the e-mail
$message->plainBody('Hello world!');
$message->htmlBody('<p>Hello world!</p>');

// Add any custom headers
//$message->header('X-PHP-Test', 'value');

// Attach any files
//$message->attach('textmessage.txt', 'text/plain', 'Hello world!');

// Send the message and get the result
$result = $message->send();

// Loop through each of the recipients to get the message ID
foreach ($result->recipients() as $email => $message) {
    $email;            // The e-mail address of the recipient
    $message->id();    // Returns the message ID
    $message->token(); // Returns the message's token
}
?>
