<html>
<head>
<title>Minecraft experience calculator</title>
<style type="text/css">
body
{
background-image:url('http://meep.radthorne.info//images/space.jpg');
background-repeat:no-repeat;
background-attachment:fixed;
background-size:100% 100%;
}
td.int
{
text-align: right;
}
td
{
border-radius: 1px;
padding:2px;
border:1px solid;
margin:0px;
}
div.main
{
position:absolute;
left: 50%;
top: 50%;  
margin-left: -250;
margin-top: -305;
background-color: rgba(230,172,0,0.7);
width: 500px;
height: 570px;
padding: 20px;
border-radius: 50px;
-moz-border-radius: 15px;
}
</style>
<script type="text/javascript">

function meep (current, needed) {
if (current < 17) {
var currentexp = (17*current)
}
if (current > 16) {
var currentexp = (272+(((1.5*((current-16)*(current-16))))+((18.5*(current-16)))));
}
if (needed < 17) {
var neededexp = (17*needed)
}
if (needed > 16) {
var neededexp = (272+(((1.5*((needed-16)*(needed-16))))+((18.5*(needed-16)))));
}
var exp = neededexp - currentexp;
form.outputbox.value=exp;
mobcalc(exp);
}

function moop(current, needed) {
var neededexp = Math.round(((1.75*(needed*needed))+(5.00*needed)));
var currentexp = Math.round(((1.75*(current*current))+(5.00*current)));
var exp = neededexp - currentexp;
form.outputbox.value=exp;
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
form.bottle.value=Math.ceil(exp / 11)+"-"+Math.ceil(exp / 3);
form.mining.value=Math.ceil(exp / 9)+"-"+Math.ceil(exp / 3);
form.smelting.value=Math.ceil(exp / 1);
}

</script> 
</head>
<body>
<center>
<div class="main">
<form name="form">
<table>
<tr>
<td><p>Current level:</p></td>
<td><input type="text" maxlength="4" name="inputboxcurrent" size="1" value="0"></td>
</tr>
<tr>
<td>Needed level:&nbsp;</td>
<td><input type="text" maxlength="4" name="inputboxneeded" size="1" value="50"></td>
</tr>
</table>
<br />
<table>
<tr>
<td><input type="button" value="pre-1.3" onclick="moop(form.inputboxcurrent.value, form.inputboxneeded.value)" name="button1"></td>
<td><input type="button" value="post-1.3" onclick="meep(form.inputboxcurrent.value, form.inputboxneeded.value)" name="button2"></td>
</tr>
</table>
<br />
<table>
<tr>
<td><p>Exp needed:</td>
<td></p><input type="text" id="txt" readonly="readonly" size="6" name="outputbox" value=""></td>
</tr>
</table>
<br />
<table>
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
<tr>
<td>Enchant bottle</td>
<td class="int">3-11</td>
<td class="int"><input type="text" id="txt" readonly="readonly" size="" name="bottle" value=""></td>
</tr>
<tr>
<td>Mining</td>
<td class="int">3-9</td>
<td class="int"><input type="text" id="txt" readonly="readonly" size="" name="mining" value=""></td></tr>
<tr>
<td>Smelting</td>
<td class="int">1</td>
<td class="int"><input type="text" id="txt" readonly="readonly" size="" name="smelting" value=""></td>
</tr>
</table>
</form>
<div>
</center>
</body>

</html>