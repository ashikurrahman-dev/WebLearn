<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>$_SERVER Example</title>
</head>
<body>
  <h1>$_SERVER Information</h1>
  <table border="1">
    <tr>
      <th>Key</th>
      <th>Value</th>
    </tr>
    <tr>
      <td>PHP_SELF</td>
      <td><?php echo $_SERVER['PHP_SELF']; ?></td>
    </tr>
    <tr>
      <td>SERVER_NAME</td>
      <td><?php echo $_SERVER['SERVER_NAME']; ?></td>
    </tr>
    <tr>
      <td>REQUEST_METHOD</td>
      <td><?php echo $_SERVER['REQUEST_METHOD']; ?></td>
    </tr>
    <tr>
      <td>QUERY_STRING</td>
      <td><?php echo $_SERVER['QUERY_STRING']; ?></td>
    </tr>
    <tr>
      <td>HTTP_REFERER</td>
      <td><?php echo isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'N/A'; ?></td>
    </tr>
    <tr>
      <td>REMOTE_ADDR</td>
      <td><?php echo $_SERVER['REMOTE_ADDR']; ?></td>
    </tr>
    <tr>
      <td>HTTP_USER_AGENT</td>
      <td><?php echo $_SERVER['HTTP_USER_AGENT']; ?></td>
    </tr>
    <tr>
      <td>SCRIPT_NAME</td>
      <td><?php echo $_SERVER['SCRIPT_NAME']; ?></td>
    </tr>
    <tr>
      <td>REQUEST_URI</td>
      <td><?php echo $_SERVER['REQUEST_URI']; ?></td>
    </tr>
  </table>
</body>
</html>