<?php
$configs = include('config.php');

$urlFile = $configs['urlFile'];
$listFile = $configs['listFile'];

$current = file_get_contents($urlFile);
$url = htmlspecialchars($_GET["url"]);

function appendToList($url) {
    global $listFile;
    file_put_contents($listFile, '[['.$url.']]\\\\'. PHP_EOL, FILE_APPEND);
}

if ($url != "")
{
    file_put_contents($urlFile, $url);
    appendToList($url);
    header( 'Location: '.$url );
}
else
{
    header( 'Location: '.$current ) ;
}
?>
