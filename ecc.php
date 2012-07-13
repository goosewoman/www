<?php 
$cachefile = 'cachedpage.png';
$cachetime = 7;
// Serve from the cache if it is younger than $cachetime
if (file_exists($cachefile) && time() - $cachetime < filemtime($cachefile)) {
    header("Content-type: image/png");
    readfile($cachefile);
    exit;
}
ob_start(); // Start the output buffer

$online = exec('python /home/bot/mcpy/ping_server.py mc.ecocitycraft.com 25565');
$isup = exec('python /home/bot/isup.py mc.ecocitycraft.com 25565');

$my_img = imagecreatefrompng("Untitled.png");
$background = imagecolorallocate( $my_img, 255, 255, 255 );
$text_colour = imagecolorallocate( $my_img, 0, 0, 255 );
$title_colour = imagecolorallocate( $my_img, 255, 165, 0 );
imagestring( $my_img, 45, 8, 5, "mc.ecocitycraft.com", $title_colour);
imagestring( $my_img, 45, 8, 20, "Players: $online", $text_colour );
imagestring( $my_img, 45, 8, 35, "The server is $isup", $text_colour );
imagesetthickness ( $my_img, 20 );

header( "Content-type: image/png" );
imagepng( $my_img );
imagecolordeallocate( $line_color );
imagecolordeallocate( $text_color );
imagecolordeallocate( $background );
imagedestroy( $my_img );

$fp = fopen($cachefile, 'wb');
fwrite($fp, ob_get_contents());
fclose($fp);
ob_end_flush(); // Send the output to the browser
?>