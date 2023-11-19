<?php
$url = $_POST['ppUrl'];
$img = 'uploads/picture.png';
file_put_contents($img, file_get_contents($url));

echo "Your profile picture is changed. Redirecting...";
header("Location: /case2.html");
?>
