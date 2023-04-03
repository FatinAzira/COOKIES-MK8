<?php
    setcookie("user","", time()-180);
    setcookie("password", "", time()-180);
    echo "Cookies have been deleted from this website <br>";
    echo "<a href='index.php'>Please Login</a>";
?>  