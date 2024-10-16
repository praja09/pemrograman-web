<?php
// if (isset($_FILES['file'])) {
//     $errors = array();
//     $file_name = $_FILES['file']['name'];
//     $file_size = $_FILES['file']['size'];
//     $file_tmp = $_FILES['file']['tmp_name'];
//     $file_type = $_FILES['file']['type'];
//     @$file_ext = strtolower("" . end(explode('.', $_FILES['file']['name'])) . "");
//     $extensions = array("pdf", "doc", "docx", "txt");

//     if (in_array($file_ext, $extensions) === false) {
//         $errors[] = "Ekstensi file yang diizinkan adalah PDF, DOC, DOCX, atau TXT.";
//     }

//     if ($file_size > 2097152) {
//         $errors[] = 'Ukuran file tidak boleh lebih dari 2 MB';
//     }

//     if (empty($errors) == true) {
//         move_uploaded_file($file_tmp, "documents/" . $file_name);
//         echo "File berhasil diunggah.";
//     } else {
//         echo implode("", $errors);
//     }
// }


if (isset($_FILES['files'])) {
    $errors = array();
    $allowedExtensions = array("jpg", "jpeg", "png", "gif");

    $uploadDir = "images/";

    if (!is_dir($uploadDir)) {
      mkdir($uploadDir, 0777, true);
    }
  
    $totalFiles = count($_FILES['files']['name']);
  
    for ($i = 0; $i < $totalFiles; $i++) {
      $fileName = $_FILES['files']['name'][$i];
      $fileTmpName = $_FILES['files']['tmp_name'][$i];
      $fileSize = $_FILES['files']['size'][$i];
      $fileError = $_FILES['files']['error'][$i];
      $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
  
      if ($fileError !== 0) {
        $errors[] = "Error uploading file: $fileName (Error code: $fileError)";
        continue;
      }
  
      if ($fileSize > 2097152) { 
        $errors[] = "File $fileName melebihi batas ukuran";
        continue;
      }
  
      if (!in_array($fileExt, $allowedExtensions)) {
        $errors[] = "Hanya file gambar (jpg, jpeg, png, gif) yang diizinkan untuk upload file: $fileName";
        continue;
      }
  
      $targetFile = $uploadDir . $fileName;
      if (move_uploaded_file($fileTmpName, $targetFile)) {
        echo "File $fileName berhasil diunggah.<br>";
      } else {
        $errors[] = "Gagal mengunggah file: $fileName";
      }
    }
  
    if (!empty($errors)) {
      echo "<b>Terdapat kesalahan saat mengunggah file:</b><br>";
      echo implode("<br>", $errors);
    }
  }  
?>