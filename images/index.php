<html>
<head>
<title>images</title>

<style type="text/css">
body
{
background-image:url('space.jpg');
background-repeat:no-repeat;
background-attachment:fixed;
background-size:100% 100%;
}
div.scroll_container
{
background-color:rgba(230,172,0,0.3);
opacity:1.0;
width:600px;
padding:30px;
border-radius: 30px;
-moz-border-radius: 15px;
}
div.images
{
background-color:rgba(10,10,255,0.3);
opacity:1.0;
width:400px;
padding:30px;
border-radius: 30px;
-moz-border-radius: 15px;
}
div.list_item
{
opacity:1.0;
}
div.scroll_items
{
opacity:1.0;
}


</style>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="js/jquery.scrollExtend.js"></script>
<script type="text/javascript">
/*	jQuery(document).ready(
		function() {
			jQuery('.scroll_container').scrollExtend(
				{	
					'target': 'div#scroll_items',			
					'url': 'more_content.php', 
					'newElementClass': 'list_item more_content'

				}
			);
		}
	);*/
   </script>

</head>
<body>
<center>
  <div class="scroll_container">
     <div id="scroll_items">
        <div class="list_item">
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
     	</div>
     </div>
  </div>
    <div style="clear:both;"></div>
</center>
</body>
</html>