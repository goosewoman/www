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
$id=-3;
foreach($files as $file)
{

$id ++;
if ($file!="."&&$file!=".."){

echo "<div class='images' id='$id'><h3>#$id</h3><img style='opacity:1.0;' src='$dir/$file' width='80%' height='35%' ></div>
<br />
";
}
}
?> 