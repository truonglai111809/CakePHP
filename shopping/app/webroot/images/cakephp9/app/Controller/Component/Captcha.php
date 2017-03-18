<?php App::import('Vendor', 'phpcaptcha/php-captcha'); 
class CaptchaComponent extends Object { var $controller; 
  function initialize(&$controller, $settings = array()) { 
    $this->controller =& $controller; 
  }

  function beforeRender(&$controller) { 

  }

  function shutdown(&$controller) {
   }

   function beforeRedirect(&$controller, $url, $status=null, $exit=true) {
    } 
    function redirectSomewhere($value) { 
    }
  function startup( &$controller ) {
   $this->controller = &$controller; 
 } 

 function image(){ 
  $imagesPath = realpath(VENDORS . 'phpcaptcha').'/fonts/'; 
  $aFonts = array(
   $imagesPath.'VeraBd.ttf',
    $imagesPath.'VeraIt.ttf',
     $imagesPath.'Vera.ttf' );
  $oVisualCaptcha = new PhpCaptcha($aFonts, 500, 60); $oVisualCaptcha->UseColour(true); 
  $oVisualCaptcha->SetNumChars(6);
   $oVisualCaptcha->Create(); 
 } 
 function audio(){
  $oAudioCaptcha = new AudioPhpCaptcha('/usr/bin/flite', '/tmp/');
   $oAudioCaptcha->Create();
    }
  function check($userCode, $caseInsensitive = true){ 
  if ($caseInsensitive) {
   $userCode = strtoupper($userCode); 
 } 
 if (!empty($_SESSION[CAPTCHA_SESSION_ID]) && $userCode == $_SESSION[CAPTCHA_SESSION_ID]) {
  unset($_SESSION[CAPTCHA_SESSION_ID]);
  return true;
   } 
   else return false;
    }
     } 
     