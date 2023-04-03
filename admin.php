<?php
if(isset($_COOKIE['user']))
{
    echo "Anda adalah admin! <br>";
    echo "<br><a href = 'logout.php'>Logout</a>";
    echo "<a href = 'index.php'>Back</a>";
}