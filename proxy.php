<?php
// proxy.php
function get_data($url) {
  $ch = curl_init();
  $timeout = 5;
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
  $data = curl_exec($ch);
  curl_close($ch);
  return $data;
}

$url = $_GET['url'];
if ($url) {
  $result = get_data($url);
  echo $result;
} else {
  echo "Error: No se ha especificado una URL.";
}
?>