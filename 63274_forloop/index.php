<html>
<body>
  <?php
  $rows = array(array(name=>"hoge"),array(name=>"fuge")) ;
   ?>
  <?php for($i = 0 ; $i <count( $rows); $i++){ ?>

        <td>名   前</td>
        <td><input type="text" <?php print ('name="name_' . $i . '"'); ?> value="<?php echo $rows[$i]['name']; ?>" class="d-na"></td>
        <br />

    <?php }?>

</body>
</html>
