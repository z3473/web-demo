 <?php
      $link = mysql_connect('192.168.141.12','root','123456');
      if ($link)
        echo "Success...";
      else
        echo "Failure...";

      mysql_close();
    ?>

