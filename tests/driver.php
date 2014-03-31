<?php

//ejabberd tests
//
require('../ejabberd.php');

$client = new ejabber\ejabber;
echo 'First we create a user called Bill';

echo $client::createUser('bill', 'password');
echo 'Then we check to see that it has been created';
print_r($client::getUsers());
echo 'Then we delete the user';
echo $client::deleteUser('bill');
echo 'Then we check again to see that it was removed';
print_r($client::getUsers());
echo 'We check to see if any users are currently connected';
print_r($client::connectedUsers());
