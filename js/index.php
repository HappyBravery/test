<?php
$post = $_POST;
file_put_contents('test.php', var_export($post, true));
$post = json_encode($post, true);
echo $post;