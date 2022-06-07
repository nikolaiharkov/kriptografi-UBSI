<html>
<head>
<title>Caesar Cipher</title>
<h1> Program enkripsi dan deskripsi UBSI </h1>
</head>
<body>
<form action="deskripsi.php" method="post">
<table>
<tr>
<td>Ciphertext</td>
<td><input type="text" name="ciphertext" size="30" /></td>
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
<!-- button called home for back to the /index.php -->
<tr>
<td></td>
<td><input type="button" name="home" value="Home" onclick="window.location.href='/kriptografi-UBSI'" /></td>
</tr>
</table>
</form>
<?php
// make caiser cipher decryptor based on enkripsi.php
if (isset($_POST['submit'])) {
$ciphertext = $_POST['ciphertext'];
$key = $_POST['key'];
$plaintext = "";
$ciphertext = strtoupper($ciphertext);
$key = strtoupper($key);
$key = $key % 26;
for ($i = 0; $i < strlen($ciphertext); $i++) {
$char = substr($ciphertext, $i, 1);
if (($char >= 'A') && ($char <= 'Z')) {
$char = chr(ord($char) - $key);
if ($char < 'A') {
$char = chr(ord($char) + 26);
}
}
$plaintext .= $char;
}
echo "Plaintext: $plaintext";
}

?>
</body>

</html>