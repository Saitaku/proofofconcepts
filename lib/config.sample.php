<?php
/**
 * The config file is used to define information that should never be stored in a repository system.
 */

$user = new \POC\User();
$user->setUsername('username');
$user->setPassword('password');

$privatekey = 'someprivatekey';
$publickey  = 'somepublickey';