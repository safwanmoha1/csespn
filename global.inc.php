<?php

define('ROOT_DIR', dirname(__FILE__));

require_once ROOT_DIR . '/classes/User.class.php';
require_once ROOT_DIR . '/classes/Organization.class.php';
require_once ROOT_DIR . '/classes/Role.class.php';
require_once ROOT_DIR . '/classes/Student.class.php';
require_once ROOT_DIR . '/classes/StudentTools.class.php';
require_once ROOT_DIR . '/classes/Technology.class.php';
require_once ROOT_DIR . '/classes/Session.class.php';
require_once ROOT_DIR . '/classes/SessionTools.class.php';


function oauth_session_exists() {
  if((is_array($_SESSION)) && (array_key_exists('oauth', $_SESSION))) {
    return TRUE;
  } else {
    return FALSE;
  }
}