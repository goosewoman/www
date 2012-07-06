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
td.int
{
text-align: right;
}
div.main
{
position:absolute;
left: 50%;
top: 50%;  
margin-left: -300px;
margin-top: -250px;
background-color: rgba(230,172,0,0.7);
width: 600px;
height: 500px;
padding: 10px;
border-radius: 50px;
-moz-border-radius: 15px;
}
</style>
<script type="text/javascript">

function meep (level) {
if (level < 17) {
var exp = (17*level)
}
if (level > 16) {
var exp = (272+(((1.5*((level-16)*(level-16))))+((18.5*(level-16)))));
}
form.outputbox.value=exp;
mobcalc(exp);
}

function moop(level) {
var exp = Math.round(((1.75*(level*level))+(5.00*level)));
form.outputbox.value=exp ;
mobcalc(exp);
}

function mobcalc(exp) {
form.tinyslime.value=Math.ceil(exp / 1);
form.smallslime.value=Math.ceil(exp / 2);
form.bigslime.value=Math.ceil(exp / 4);
form.passive.value=Math.ceil(exp / 3)+"-"+Math.ceil(exp / 1);
form.wolf.value=Math.ceil(exp / 3)+"-"+Math.ceil(exp / 1);
form.blaze.value=Math.ceil(exp / 10);
form.hostile.value=Math.ceil(exp / 5);
}



</script>
</head>
<body>
<center>
<div class="main">
<form name="form">
<p><strong>Amount of levels:</strong></p>
<input type="text" maxlength="4" name="inputbox" size="1" value=""><p>
<input type="button" value="pre-1.3" onclick="moop(form.inputbox.value)" name="button1">
<input type="button" value="post-1.3" onclick="meep(form.inputbox.value)" name="button2"><br />
<p><strong>Amount of exp needed for that level:</strong></p>
<table border="1">
<tr>
<td><input type="text" id="txt" readonly="readonly" size="6" name="outputbox" value="XP needed"></td>
</tr>

</table>
<br>
<table border="1">
<tr>
<td>Mob</td>
<td>Exp from kill</td>
<td>Kills needed</td>
</tr>
<tr>
<td>Tiny slimes</td>
<td class="int">1</td>
<td class="int"><input type="text" id="txt" readonly="readonly" size="" name="tinyslime" value=""></td>
</tr>
<tr>
<td>Small slimes</td>
<td class="int">2</td>
<td class="int"><input type="text" id="txt" readonly="readonly" size="" name="smallslime" value=""></td>
</tr>
<tr>
<td>Big slimes</td>
<td class="int">4</td>
<td class="int"><input type="text" id="txt" readonly="readonly" size="" name="bigslime" value=""></td>
</tr>
<tr>
<td>Passive mobs</td>
<td class="int">1-3</td>
<td class="int"><input type="text" id="txt" readonly="readonly" size="" name="passive" value=""></td>
</tr>
<tr>
<td>Wolves</td>
<td class="int">1-3</td>
<td class="int"><input type="text" id="txt" readonly="readonly" size="" name="wolf" value=""></td>
</tr>
<tr>
<td>Blazes</td>
<td class="int">10</td>
<td class="int"><input type="text" id="txt" readonly="readonly" size="" name="blaze" value=""></td>
</tr>
<tr>
<td>Hostiles</td>
<td class="int">5</td>
<td class="int"><input type="text" id="txt" readonly="readonly" size="" name="hostile" value=""></td>
</tr>
</table>
</form>
<div>
</center>
</body>

</html>