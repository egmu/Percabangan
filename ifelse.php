<!DOCTYPE html>
<html>
<head>
  <title></title>
 
</head>
<body>
 
  <h2>Percabangan If/Else</h2>
    <table>
    <form method="POST">
      <tr>
        <td>Usia</td>
        <td><input type="number" name="usia" placeholder="masukkan usia" class="input"></td>
      </tr>
      
     
      <tr>
        <td style="border: 0;" colspan="2">
          <button type="submit" name="submit">submit</button>
        </td>
      </tr>
      </form>
    </table>
 
<?php 

$usia = $_POST['usia'];
if (isset($_POST['submit'])){
if ($usia < 18 ){
    echo "Kamu tidak boleh membuka situs ini!";
} else {
    echo "Selamat datang di website kami!";
}
}

 
?>
 <br><h2>Kode Diatas Sebagai Berikut</h2>
<div class="xmp1">
<xmp>
$usia = $_POST['usia'];
if ($usia < 18 ){
    echo "Kamu tidak boleh membuka situs ini!";
} else {
    echo "Selamat datang di website kami!";
}
</xmp>
</div>