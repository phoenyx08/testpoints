<?php
/**
 * Created by PhpStorm.
 * User: phoenyx
 * Date: 2019-11-18
 * Time: 21:49
 */

$host = $_SERVER['HTTP_HOST'];
$uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
header("Location: http://$host$uri/redirect-301-target.php", true, 301);
exit;
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Redirect 301 Source - Phoenyx Studio Test Endpoints</title>
  </head>
  <body>
    <div>
      <h1>Source of 301 redirect</h1>
      <p>If you see this page it means that your application has not executed automatic redirect</p>
    </div>
  </body>
</html>
