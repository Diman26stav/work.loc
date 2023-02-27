<?php session_start()
var_dump($_FILES);
function uploading($fileName, $tmp)
{
    // 1. название
    $imgName = $fileName;
    $imgNameInfo = pathinfo($imgName);
    $imgNameType = $imgNameInfo["extension"];
    $imgNameImg = uniqid() . "." . $imgNameType;

    // 2. cохранить
    $result = move_uploaded_file($tmp, 'uploads/' . $newName);
    if ($result) {
        $result = $newNameImg;
    }
    return $result;
}
$arrListFiles = [];
$countArray = count ($_FILES["file"]["name"]);
var_dump($countArrayFiles);

for ($i=0; $i < $countArrayFiles; $i++ ){
    $fileName = $_FILES['file']['name'][$i];
    $tmpName = $FILES['file']['tmp_name'][$i];
    $arrListFiles[] = [uploading($fileName, $tmpName,) $fileName];
}
var_dump($arrListFiles);

$gallery = json_encode($arrListFiles);


function connectBD(){
    $potions = [PDO:: ATTR_ERRMODE => PDO ::ERRMODE_EXCEPTION];
    $pdo = new PDO(  "mysql:host=location;dbname=my_project;", "root",  "",$options);
    return $pdo;
}
$pdo = connectBD();
$sql = "INSERT INTO gallery (img) VALUES (:img)";
$statement->execute([
    'img'=>$gallery,
]);
$id = $pdo->lastInsertId();
$_SESSION["galleryID"] = $id;

header(  "location: uploads/");

