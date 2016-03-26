<?php
/**
 * The Library file for POC templates
 */

namespace POC;

class User {
  private $_username = '';

  private $_password = '';

  /**
   * @return string
   */
  public function getUsername() {
    return $this->_username;
  }

  /**
   * @param string $username
   */
  public function setUsername($username) {
    $this->_username = $username;
  }

  /**
   * @return string
   */
  public function getPassword() {
    return $this->_password;
  }

  /**
   * @param string $password
   */
  public function setPassword($password) {
    $this->_password = $password;
  }
}
