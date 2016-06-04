<?php
//get the q parameter from URL
//$q=$_GET["q"];

//find out which feed was selected
//if($q=="Google") {
 // $xml=("http://news.google.com/news?ned=us&topic=h&output=rss");
//} elseif($q=="NBC") {
 // $xml=("http://rss.msnbc.msn.com/id/3032091/device/rss/rss.xml");
//}
$xml="https://www.reddit.com/.rss";
$xmlDoc = new DOMDocument();
$xmlDoc->load($xml);
$content_length=$xmlDoc->getElementsByTagName('content')->length;
for($i=1;$i<$content_length;++$i)
{
$content_display[$i]=$xmlDoc->getElementsByTagName('entry')->item($i)->childNodes->item(2)->nodeValue;
}
echo json_encode($content_display);

?>