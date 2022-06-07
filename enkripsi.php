<html>
<head>
<title>Caesar Cipher</title>
<h1> Program enkripsi dan deskripsi UBSI </h1>
</head>
<body>
<form action="enkripsi.php" method="post">
<table>
<tr>
<td>Plaintext</td>
<td><input type="text" name="plaintext" size="30" /></td>
</tr>
<tr>
<td>Key</td>
<td><select name="key">
<option value="1">A</option>
<option value="2">B</option>
<option value="3">C</option>
<option value="4">D</option>
<option value="5">E</option>
<option value="6">F</option>
<option value="7">G</option>
<option value="8">H</option>
<option value="9">I</option>
<option value="10">J</option>
<option value="11">K</option>
<option value="12">L</option>
<option value="13">M</option>
<option value="14">N</option>
<option value="15">O</option>
<option value="16">P</option>
<option value="17">Q</option>
<option value="18">R</option>
<option value="19">S</option>
<option value="20">T</option>
<option value="21">U</option>
<option value="22">V</option>
<option value="23">W</option>
<option value="24">X</option>
<option value="25">Y</option>
<option value="26">Z</option>
</select></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="submit" value="Submit" /></td>
</tr>
<tr>
<td></td>
<td><input type="button" name="home" value="Home" onclick="window.location.href='/kriptografi-UBSI'" /></td>
</tr>
</table>
</form>
<?php
// generate all input
// operation only alphabet
// dont change space when generate
if(isset($_POST['submit'])){
$plaintext = $_POST['plaintext'];
$key = $_POST['key'];
$plaintext = strtoupper($plaintext);
$key = (int)$key;
$ciphertext = "";
$alphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
$alphabet_length = strlen($alphabet);
for($i=0; $i<strlen($plaintext); $i++){
$char = substr($plaintext,$i,1);
if(strpos($alphabet,$char) !== false){
$index = strpos($alphabet,$char);
$index = ($index + $key) % $alphabet_length;
$ciphertext = $ciphertext . $alphabet[$index];
}else{
$ciphertext = $ciphertext . $char;
}
}
}
//show result when user click submit
if(isset($_POST['submit'])){
echo "<p>Ciphertext: $ciphertext</p>";
}
?>
</body>
</html>
