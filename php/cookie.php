<?php
setcookie("user", "Ruhi", time() +3600);
echo "Cookie Set Successfully <br>";
if(isset($_COOKIE["user"])) {
echo "Cookie Value: ".$_COOKIE["user"] . "<br>
}
setcookie("user", "", time() - 3600);
echo "Cookie Deleted";
?>