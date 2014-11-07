<?
//V81 filehandler.php
/****
Input Param: 
    $_FILE["file-0"]
    $_POST['modtype']

Usage: 
1.  AboutUs Images --- modtype = 'ABT'

***/

//Setting parameter: tmp upload path
$target_dir = "../../userfiles/tmp/";


/**************************************************************/

$target_file = $target_dir . $_POST['modtype'] . date('YmdHis').'-'.basename($_FILES["file-0"]["name"]); 
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_FILES["file-0"])) {
    $check = getimagesize($_FILES["file-0"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        $uploadOk = 0;
    }
}

if($uploadOk==1){
    echo "Msg:".$_POST['modtype'] . date('YmdHis').'-'.basename($_FILES["file-0"]["name"]);
    move_uploaded_file( $_FILES['file-0']['tmp_name'], $target_file);
} else {
    echo "Error:Upload failed";
}
?>