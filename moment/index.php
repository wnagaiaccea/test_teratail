<html>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<body>
  <?php
    $date = date("U");

    $unixtime = date("U",strtotime("2017/02/02 22:22:22 +09:00"));
    $unixtime2 = date("U",strtotime("2017/02/02 2:2:2 +09:00"));

  ?>
<script>
  /**
  * Date型をUNIXTIMEに変換する
  * @date 変換前の日付データ
  * @return UNIXTIME
  */
  function castDateToUnixtime(date){
    return Math.floor( date.getTime() / 1000 ) ;
  }
  /**
   * UNIXTIMEをDate型に変換します
   * @param uxtime UNIXTIME
   * @return DATE型
   */
  function castUnixtimeToDate(uxtime){
    var date =  new Date(uxtime * 1000 );
    return date;
  }
  /**
   * Date型を地域に合わせたタイムスタンプに変換します
   * @param Date型
   * @return タイムスタンプ
   */
  function castLocalDateToDatetime(date){
    var lang = "en-US";
    return date.toLocaleDateString(lang,{ year:"numeric" , month: "2-digit", day: "2-digit"}) + " " + date.toLocaleTimeString(lang,{ hour12:false , hour: "2-digit", minute: "2-digit"});
  }
</script>
<table border="1">
  <tr>
    <td>
      JS
    </td>
    <td>
      現在時刻(デフォルト)
    </td>
    <td>
      <script>document.write(new Date().toLocaleString())</script>
    </td>
  </tr>
  <tr>
    <td>
      PHP
    </td>
    <td>
      現在時刻(デフォルト)
    </td>
    <td>
      <?php print( date("Y-m-d H:i:s",$date) ); ?>
    </td>
  </tr>
  <tr>
    <td colspan="2">
      unixtime
    </td>
    <td>
      <?php print( $unixtime ); ?>
    </td>
  </tr>
  <tr>
    <td>
      JS
    </td>
    <td>
      変換
    </td>
    <td>
      <script>
        var datevalue = castUnixtimeToDate(<?php print( $unixtime ); ?>);

        document.write(castLocalDateToDatetime(datevalue));
      </script>
    </td>
  </tr>
  <tr>
    <td>
      PHP
    </td>
    <td>
      変換
    </td>
    <td>
      <?php print( date("Y-m-d H:i:s + T",$unixtime) ); ?>
    </td>
  </tr>
  <tr>
    <td>
      JS
    </td>
    <td>
      変換
    </td>
    <td>
      <script>
        var datevalue = castUnixtimeToDate(<?php print( $unixtime2 ); ?>);

        document.write(castLocalDateToDatetime(datevalue));
      </script>
    </td>
  </tr>
  <tr>
    <td>
      PHP
    </td>
    <td>
      変換
    </td>
    <td>
      <?php print( date("Y-m-d H:i:s + T",$unixtime2) ); ?>
    </td>
  </tr>
</table>
</body>
</html>
