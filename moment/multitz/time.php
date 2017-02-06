<?php
if(!isset($_GET)) exit;
$lang="ja_JP";
// PHPが持っている言語チェック > locale -a
//$lang = getLanguage($_SERVER['HTTP_ACCEPT_LANGUAGE']);
$timezone = $_GET["timezone"];

date_default_timezone_set( $timezone );

echo $lang;
setlocale(LC_ALL, $lang);

$timestamp = time();
$date = new DateTime("now",new DateTimeZone($timezone));
$date->setTimestamp($timestamp);
echo gmstrftime("%c",$date->format("U"));



function getLanguage($acceptLanguage){
  // ja,en;q=0.8,en-US;q=0.6
  if(!isset($acceptLanguage))return "";

  $langs = split(";",$acceptLanguage);
  $lang = split(",",$langs[1])[1];
  return $lang;
}
 ?>
