<?php
define('MAX_FILE_LIMIT', 1024 * 1024 * 2);//2 Megabytes max html file size

$html = base64_decode($_POST['html']);

var_dump($html);
function sanitizeFileName($fileName)
{
	//sanitize, remove double dot .. and remove get parameters if any
	$fileName = __DIR__ . '/' . preg_replace('@\?.*$@' , '', preg_replace('@\.{2,}@' , '', preg_replace('@[^\/\\a-zA-Z0-9\-\._]@', '', $fileName)));
	return $fileName;
}


if (isset($_POST['startTemplateUrl']) && !empty($_POST['startTemplateUrl']))
{
	$startTemplateUrl = sanitizeFileName($_POST['startTemplateUrl']);
	$html = file_get_contents($startTemplateUrl);
} else if (isset($html))
{
	$html = substr($html, 0, MAX_FILE_LIMIT);
}

$fileName = sanitizeFileName($_POST['pageFileName']);
// echo $fileName; exit;
if (file_put_contents($fileName, $html))
	echo $fileName;
else
	echo 'Error saving file '  . $fileName;
