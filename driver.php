<?php

//ejabberd test to add a user
//
require('ejabberd.php');
//use ejabber\ejabber;
$client = new ejabber\ejabber;

echo $client::createUser('bill', 'password');
echo $client::deleteUser('bill');

print_r($client::getUsers());

