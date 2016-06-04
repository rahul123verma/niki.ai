<?php
//get the q parameter from URL
$q=$_POST["rss_url"];
$xmlDoc = new DOMDocument();
$xmlDoc->load($q);
$content_length=$xmlDoc->getElementsByTagName('content')->length;
for($i=1;$i<$content_length;++$i)
{
$content_display[$i]=$xmlDoc->getElementsByTagName('entry')->item($i)->childNodes->item(2)->nodeValue;
}
echo json_encode($content_display);

?>