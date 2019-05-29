<?php
$name = "user";
$value = "John Doe";
setcookie($name, $value, time() + (86400 * 30), "/"); // 86400 = 1 dia
?>

<html>
<body>

<?php
if(!isset($_COOKIE[$name])) {
    echo "Cookie named '" . $name . "' is not set!";
} else {
    echo "Cookie '" . $name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$name];
}
?>

<p>
Syntax
setcookie(name, value, expire, path, domain, secure, httponly);
</p>
</body>
</html>
