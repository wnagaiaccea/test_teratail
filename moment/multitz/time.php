<?php
if(!isset($_GET)) exit;
$timezone = $_GET["timezone"];

// $lang="ja_JP";
// PHPが持っている言語チェック > locale -a
// $locales = getLocales();
// $langs = [];
// foreach ($locales as $lang => $val) {
//    $langs[] = $lang;
//  }


date_default_timezone_set( $timezone );
//$locale = setlocale(LC_ALL,$langs);

//setlocale(LC_ALL, $lang);

//$timestamp = time();
$date = new DateTime("now",new DateTimeZone($timezone));
echo strftime("%F %T",$date->format("U"));



function getLocales(){
  $prefLocales = array_reduce(
    explode(',', $_SERVER['HTTP_ACCEPT_LANGUAGE']),
      function ($res, $el) {
        list($l, $q) = array_merge(explode(';q=', $el), [1]);
        $res[$l] = (float) $q;
        return $res;
      }, []);
    arsort($prefLocales);

    /*
    This get you from headers like this
      string 'en-US,en;q=0.8,uk;q=0.6,ru;q=0.4' (length=32)
    array like this
    array (size=4)
      'en-US' => float 1
      'en' => float 0.8
      'uk' => float 0.6
      'ru' => float 0.4
    */

  return $prefLocales;
}
 ?>
