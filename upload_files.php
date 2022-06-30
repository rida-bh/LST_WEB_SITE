<?php
$nom_folder= $_SESSION["cne_session"]."_".$_POST['nom'];
$target_dir=$nom_folder.'/';
mkdir($target_dir, 0777, true);
$name=["bac-pdf","attestation-pdf","releve-pdf","carte-pdf","profil"];
for($i=0;$i<sizeof($name);$i++){
$target_file[$name[$i]]= $target_dir . basename($_FILES[$name[$i]]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file[$name[$i]],PATHINFO_EXTENSION));

// Check file size
if ($_FILES[$name[$i]]["size"] > 5000000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "pdf" ) {
  echo "Sorry, only JPG, JPEG, PNG & pdf files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES[$name[$i]]["tmp_name"], $target_file[$name[$i]])) {
    echo "The file ". htmlspecialchars( basename( $_FILES[$name[$i]]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
}
?>