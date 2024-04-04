<?php
date_default_timezone_set("Asia/Jakarta");

// Create connection
$conn = mysqli_connect("localhost", "root", "", "shorturl");
  if (!$conn) {
    die ("Tidak dapat terhubung: ". mysql_error ());
    exit();
  }

// Fungsi Untuk Menampilkan Data di Panel
function query($query) {
  global $conn;
  $result = mysqli_query($conn, $query);
  $rows = [];
  while($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}
// akhir Fungsi


// Fungsi untuk menambah Data Dalam Database
function tambah($post) {
  global $conn;

  $arrayOfData = explode("#", $post);

  $alias = htmlspecialchars($arrayOfData[0]);
  $fullurl = htmlspecialchars($arrayOfData[1]);

  // Cek Username sudah ada atau belum
  $hasil = mysqli_query($conn, "SELECT folder_alias FROM shorturl.url WHERE `folder_alias` = '$alias'");

  if ( mysqli_fetch_assoc($hasil)) {
    echo 'Tidak Bisa Menggunakan Alias Ini';;

  return false;
  }

  $query = "INSERT INTO `url`(`no`, `full_url`, `folder_alias`) VALUES (0, '".$fullurl."', '".$alias."')";
  mysqli_query($conn , $query);

  if (mysqli_affected_rows($conn) > 0 ) {
    $folder = "../../".$alias;
    mkdir($folder, 0755);
    file_put_contents($folder.'/index.php', '<?php Exit( header("Location: '.$fullurl.'", true, 301) ); ?>');
  }

  return mysqli_affected_rows($conn);
}
// akhir Fungsi




// Fungsi untuk Mengubah Data Dalam Database
function ubah($post) {
  global $conn;

  // $full = htmlspecialchars($post["edit"]);
  $arrayOfData = explode("#", $post);

  // var_dump($arrayOfData);
  $id = $arrayOfData[0];
  $alias = $arrayOfData[1];
  $fullurl = $arrayOfData[2];

  $sql = "SELECT * FROM shorturl.url WHERE `no` = '$id'";
  $checkFolder = query($sql);

  if ($checkFolder[0]['folder_alias'] != $alias || $checkFolder[0]['full_url'] != $fullurl) {

    if($checkFolder[0]['folder_alias'] == $alias && $checkFolder[0]['no'] == $id) {
      $myfile = fopen("../../".$alias."/index.php", "w") or die("Unable to open file!");
      $txt = '<?php Exit( header("Location: '.$fullurl.'", true, 301) ); ?>';
      fwrite($myfile, $txt);
      fclose($myfile);
  
      $query1 = "UPDATE shorturl.url SET `full_url` = '$fullurl', `folder_alias` = '$alias' WHERE `no` = $id;";
      mysqli_query($conn, $query1);

      return mysqli_affected_rows($conn);
      
    } else if($checkFolder[0]['folder_alias'] != $alias && $checkFolder[0]['no'] == $id) {
      $myfile = fopen("../../".$checkFolder[0]['folder_alias']."/index.php", "w") or die("Unable to open file!");
      $txt = '<?php Exit( header("Location: '.$fullurl.'", true, 301) ); ?>';
      fwrite($myfile, $txt);
      fclose($myfile);
      rename("../../".$checkFolder[0]['folder_alias'] , "../../".$alias);
  
      $query1 = "UPDATE shorturl.url SET `full_url` = '$fullurl', `folder_alias` = '$alias' WHERE `no` = $id;";
      mysqli_query($conn , $query1);

      return mysqli_affected_rows($conn);
      
    } else {
  
      echo 'Folder Alias Sudah Terdaftar';
      return false;
  
    }

  } else {
    echo 'Data yang kamu masukkan sama!';
    return false;

  }
}
// akhir Fungsi




  // Fungsi untuk menghapus Data Dalam Database
  function hapus($post) {
    global $conn;

    $arrayOfData = explode("#", $post);
    $query = "DELETE FROM shorturl.url WHERE `no` = '$arrayOfData[0]' AND `folder_alias` = '$arrayOfData[1]'";
    mysqli_query($conn , $query);

    array_map('unlink', glob("../../".$arrayOfData[1]."/*.*"));
    rmdir("../../".$arrayOfData[1]);
    
    return mysqli_affected_rows($conn);
  }
  // akhir Fungsi
    
  
  // Fungsi daftar Admin
  // function daftar($post) {
  //   global $conn;
  
  //   $username = strtolower(stripslashes($post["username"]));
  //   $password = mysqli_real_escape_string($conn, $post["password"]);
  //   $password2 = mysqli_real_escape_string($conn, $post["password2"]);
  
  //   // Cek Username sudah ada atau belum
  //   $hasil = mysqli_query($conn, "SELECT Username FROM token.admins WHERE Username = '$username'");
  
  //     if ( mysqli_fetch_assoc($hasil)) {
  //       echo "<script>
  //         alert('Username Sudah Terdaftar')
  //             </script>";
  //     return false;
  //     }
  
  //     if($password !== $password2 ) {
  //       echo "<script>
  //         alert('Kedua Password Tidak Sesuai')
  //             </script>";
  //     return false;
  //     } 
  
  //     // Enkripsi Password untuk mengamankan data
  //     $password = password_hash($password, PASSWORD_DEFAULT);
  
  //     // Tambahkan Userbaru ke Database
  //     mysqli_query($conn, "INSERT INTO token.admins VALUES(NULL, '$username', '$password')");
  
  //     return mysqli_affected_rows($conn);
  
  // }
  // akhir Fungsi daftar Admin

?>