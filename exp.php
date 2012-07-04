<html>
<head>
<title>Minecraft experience calculator</title>
<style type="text/css">
body
{
background-image:url('/images/space.jpg');
background-repeat:no-repeat;
background-attachment:fixed;
background-size:100% 100%;
}
div.main
{
position:absolute;
left: 50%;
top: 50%;  
margin-left: -150px;
margin-top: -125px;
background-color: rgba(230,172,0,0.5);
width: 300px;
height: 250px;
padding: 10px;
border-radius: 50px;
-moz-border-radius: 15px;
}
</style>
<script type="text/javascript">

function meep (level) {
if (level < 17) {
var meep = (17*level)
}
if (level > 16) {
var meep = (272+(((1.5*((level-16)*(level-16))))+((18.5*(level-16)))));
}
var moop = Math.round(((1.75*(level*level))+(5.00*level)));
form.outputboxold.value=moop;
form.outputboxnew.value=meep;
}
function moop (level) {
var moop = Math.round(((1.75*(level*level))+(5.00*level)));
form.outputbox.value=moop;
}
</script>
</head>
<body>
<center>
<div class="main">
<form name="form">
<p><strong>Amount of levels:</strong></p>
<input type="text" name="inputbox" size="2" value=""><p>
<input type="button" value="calculate" onclick="meep(form.inputbox.value)" name="button1"><br />
<p><strong>Amount of exp needed for that level:</strong></p>
<center><p>pre1.3&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.3&nbsp;&nbsp;</p></center><input type="text" id="txt" size="6" name="outputboxold" value="old">
<input type="text" id="txt" size="6" name="outputboxnew" value="new">
</form>
<div>
</center>
</body>

</html>