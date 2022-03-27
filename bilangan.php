<!DOCTYPE html>
<html>
<head>
  <title></title>
 
</head>
<body>
 
  <h2>Percabangan If/Else/If</h2>
    <table>
    <form method="POST">
      <tr>
        <td>Bintang</td>
        <td><input type="number" name="bintang_1" placeholder="masukkan bintang" class="input"></td>
      </tr>
      
     
      <tr>
        <td style="border: 0;" colspan="2">
          <button type="submit" name="submit">submit</button>
        </td>
      </tr>
      </form>
    </table>
 
<?php 

$bintang = $_POST['bintang_1'];
if (isset($_POST['submit'])){
if ($bintang<=1) {
  echo "Sangat Tidak Puas";
} elseif ($bintang<=2) {
  echo "tidak puas";
}
elseif ($bintang<=3) {
  echo " puas";
}
elseif ($bintang<=4) {
  echo "cukup puas";
}else{
  echo "sangat puas";
}
}
 
?>
 <br><h2>Kode Diatas Sebagai Berikut</h2>
<div class="xmp1">
<xmp>
$bintang = $_POST['bintang_1'];

if ($bintang<=1) {  //Kondisi
  echo "Sangat Tidak Puas";
} elseif ($bintang<=2) {
  echo "tidak puas";
}
elseif ($bintang<=3) {
  echo " puas";
}
elseif ($bintang<=4) {
  echo "cukup puas";
}else{
  echo "sangat puas";
}
</xmp>
</div>