<!DOCTYPE HTML>  
<html>
<head>
<link rel="stylesheet" href="style_tugas2.css">
</head>
<body>  

<ul>
        <li class="active"><a href="index_tgs2.php"></a></li>
    </ul>

<?php
$name = $email = $matkul = $tgl = $nim = $tpb= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $nim = test_input($_POST["nim"]);
  $tpb = test_input($_POST["tpb"]);
  $tgl = test_input($_POST["tgl"]);
  $matkul = test_input($_POST["matkul"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<center>
  <br>
<h2> FORM PENDAFTARAN KELAS TAMBAHAN / TUTORIAL (MAFIKI)</h2>
</center>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <br><br>
  E-mail: <input type="text" name="email">
  <br><br>
  NIM : <input type="text" name="nim">
  <br><br>
  TPB : <input type="text" name="tpb">
  <br><br>
  Tanggal kelas: <textarea name="tgl" rows="5" cols="40"></textarea>
  <br><br>
  Mata Kuliah yang ingin diambil: <br>
  <input type="radio" name="matkul" value="matdas">Matematika Dasar
  <input type="radio" name="matkul" value="fisdas">Fisika Dasar
  <input type="radio" name="matkul" value="kimdas">Kimia Dasar <br>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
  
</form>

<p>Data anda dapat dilihat pada link berikut : </p>
<ul>
        <li class="active"><a href="index_tgs2.php"></a></li>
        <li><a href="page2.php">DATA ANDA</a></li>

    </ul>
    <br> 
<?php
echo "<h1>DATA  ANDA:</h1>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $nim;
echo "<br>";
echo $tpb;
echo "<br>";
echo $tgl;
echo "<br>";
echo $matkul;
echo "<br>";
?>
<img style="width: 350px;" src="https://bilabil.com/wp-content/uploads/2019/11/kelas-sma-7-blog.xuite_.jpg">
<br>
</body>
</html>