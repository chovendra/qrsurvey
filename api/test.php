<?php
header('Content-Type: application/json');
echo json_encode([
  'ok' => true,
  'php_version' => phpversion(),
  'time' => date('c')
]);
?>