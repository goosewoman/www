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

$online = exec('php /var/www/players.php');
$isup = exec('php /var/www/isup.php');

$my_img = imagecreate( 220, 60 );
$background = imagecolorallocate( $my_img, 0, 0, 0 );
$text_colour = imagecolorallocate( $my_img, 255, 255, 0 );
$text_colour = imagecolorallocate( $my_img, 0, 255, 0 );
imagestring( $my_img, 45, 2, 1, "mc.ecocitycraft.com", imagecolorallocate( $my_img, 255, 0, 0 ));
imagestring( $my_img, 45, 2, 16, "Players: $online", $text_colour );
imagestring( $my_img, 45, 2, 36, "$isup", $text_colour );
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