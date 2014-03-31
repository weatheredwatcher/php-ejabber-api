<?php

//ejabberd test to add a user
//
require('ejabberd.php');
//use ejabber\ejabber;
$client = new ejabber\ejabber;

echo $client::createUser('bill', 'password');
print_r($client::getUsers());
echo $client::deleteUser('bill');

print_r($client::getUsers());
print_r($client::connectedUsers());
