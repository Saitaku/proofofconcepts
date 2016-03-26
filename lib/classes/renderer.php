<?php

namespace POC;

class Renderer{

  private static $_libdir = '../../';

  private static $_headerJsFiles = array(
    'jquery'    => 'thirdparty/jquery-2.2.2/jquery-2.2.2.min.js',
    'bootstrap' => 'thirdparty/bootstrap-3.3.6-dist/js/bootstrap.min.js'
  );

  private static $_footerJsFiles = array(
    'custom'    => 'js/custom.js'
  );

  private static $_cssFiles = array(
    'custom'          => 'css/custom.css',
    'bootstrap'       => 'thirdparty/bootstrap-3.3.6-dist/css/bootstrap.min.css',
    'bootstrap-theme' => 'thirdparty/bootstrap-3.3.6-dist/css/bootstrap-theme.min.css',
    'fontawesome'     => 'thirdparty/font-awesome-4.5.0/css/font-awesome.min.css'
  );

  public static function render_footer_js(){
    foreach(self::$_footerJsFiles as $file){
      echo '<script type="application/javascript" src="'.self::getLibdir().$file.'"></script>';
    }
  }

  public static function render_header_js(){
    foreach(self::$_headerJsFiles as $file){
      echo '<script type="application/javascript" src="'.self::getLibdir().$file.'"></script>';
    }
  }

  public static function render_css(){
    foreach(self::$_cssFiles as $file){
      echo '<link rel="stylesheet" type="text/css" href="'.self::getLibdir().$file.'">';
    }
  }

  /**
   * @return string
   */
  public static function getLibdir() {
    return self::$_libdir;
  }

  /**
   * @param string $libdir
   */
  public static function setLibdir($libdir) {
    self::$_libdir = $libdir;
  }
}