<?php /* 
//open dir 
if ($opendir = opendir($dir)) 
{ 
//read dir 
while (($file = readdir($opendir)) !==FALSE) 
{ 
if ($file!="."&&$file!="..") 
 
} 
} */
$dir = "images";
$handle=opendir($dir); 
$files = array();
while (false!==($file = readdir($handle))) $files[] = $file;  
closedir($handle);

sort($files);
$id=-2;
foreach($files as $file)
{

$id ++;
if ($file!="."&&$file!=".."){

echo "http://mc.radthorne.info/images/$dir/$file=";
}
}
?> 