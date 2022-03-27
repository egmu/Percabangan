<!DOCTYPE html>
<html>
<head>
  <title></title>
 
</head>
<body>
 
  <h2>Percabangan If</h2>
    <table>
    <form method="POST">
      <tr>
        <td>Total Beli</td>
        <td><input type="number" name="total_beli1" placeholder="masukkan harga" class="input"></td>
      </tr>
      
     
      <tr>
        <td style="border: 0;" colspan="2">
          <button type="submit" name="submit">submit</button>
        </td>
      </tr>
      </form>
    </table>
 
<?php 

$total_beli = $_POST['total_beli1'];
if (isset($_POST['submit'])){
if($total_beli > 100000){
    echo "Anda dapat hadiah!";
}
}
 
?>
 <br><h2>Kode Diatas Sebagai Berikut</h2>
<div class="xmp1">
<xmp>
$total_beli = $_POST['total_beli1'];
if (isset($_POST['submit'])){
if($total_beli > 100000){
    echo "Anda dapat hadiah!";
}
</xmp>
</div>