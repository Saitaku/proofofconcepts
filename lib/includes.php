<?php

require_once('classes/renderer.php');
require_once('classes/user.php');
require_once('classes/endpoint.php');

// Load global lib config.php if it exists
if(file_exists('config.php')){
  require_once('config.php');
}

// Load config.php file if it exists in current working directory
if(file_exists(getcwd().'/config.php')){
  require_once(getcwd().'/config.php');
}