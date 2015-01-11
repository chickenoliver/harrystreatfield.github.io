<?php // index.php
require_once 'openid.php';
$openid = new LightOpenID("https://harrystreatfield.com");

$openid->identity = 'https://www.google.com/accounts/o8/id';
$openid->required = array(
  'namePerson/first',
  'namePerson/last',
  'contact/email',
);
$openid->returnUrl = 'http://harrystreatfield.comlogin.php'
?>

<a href="<?php echo $openid->authUrl() ?>">Login with Google</a>