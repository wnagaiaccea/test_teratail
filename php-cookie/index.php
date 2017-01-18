<html>
<body>
  https://teratail.com/questions/62362
<script type="text/javascript">
function setCookie( $cookieName, $cookieValue, $days ){
    var $dateObject = new Date();
    $dateObject.setTime( $dateObject.getTime() + ( $days*24*60*60*1000 ) );
    var $expires = "expires=" + $dateObject.toGMTString();
    document.cookie = $cookieName + "=" + $cookieValue + "; " + $expires;
}
function displayCookie( $cookieName, $output ){
    var $cookieValue = getCookie( $cookieName );
    document.getElementById( $output ).innerHTML = $cookieValue;
}

function getCookie( value ){
  return document.cookie;
}
</script>
<a href="/favorite/" onclick="setCookie( 'favoriteset', '<?php echo $room_cd; ?>', 1 );">お気に入りに追加</a>
<p>
    クッキーＡにセットする値：
    <button onclick="setCookie( 'favoriteset', 'りんご', 1 );">お気に入りに追加</button>
    <button onclick="setCookie( 'favoriteset', 'バナナ', 1 );">バナナ</button>
</p>
<p>
    <button onclick="displayCookie( 'favoriteset', 'cookieA-output' );">クッキーの値を表示</button>
</p>
<p>
    クッキーＡの値：<span id="cookieA-output"></span>
</p>
<form action="post.php">
<input type="submit" value="Go" />
</form>
</body>
</html>
