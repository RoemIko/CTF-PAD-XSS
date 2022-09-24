<?php
include 'connection.php';
//Values for creating posts
$_SESSION['signed_in'] = true;  //User is "logged in"
$_SESSION['user_id'] = 1; //User is set to 2, because there is no requirement to login. User 2 = anonymous
//values for uploading images
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
//Script to save posts
if($_SERVER['REQUEST_METHOD'] != 'POST')
{
    //someone is calling the file directly, which we don't want
    echo 'This file cannot be called directly.';
}
else
{
    //check for sign in status
    if(!$_SESSION['signed_in'])
    {
        echo 'You must be signed in to post a reply.';
    }
    else
    {
        //a real user posted a real reply
        $sql = "INSERT INTO
                    posts(post_content,
                          post_date,
                          post_topic,
                          post_by)
                VALUES ('" . $_POST['reply-content'] . "',
                        NOW(),
                        " . $_GET['id'] . ",
                        " . $_SESSION['user_id'] . ")";

        $result = mysqli_query($conn, $sql);

        if(!$result)
        {
            echo 'Your reply has not been saved, please try again later.';
        }
        else
        {
            echo 'Your reply has been saved, check out <a href="topic.php?id=' . htmlentities($_GET['id']) . '">the topic</a>.';
        }
    }
}

//Upload image script
if(isset($_POST["submit"])) {
    $checkAfb = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($checkAfb !== false) {
        echo "File is an image - " . $checkAfb["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "The file your tried to upload is not an image.";
        $uploadOk = 0;
    }
}
// If file already exists, give an echo with "File already exists.".
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// If file size is bigger then 5000000 echo result.
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "The size of your file is too big.";
    $uploadOk = 0;
}
// Checks value of image.
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// If upload ok is set to 0 in previous lines, it echo's file not uploaded.
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// If the IF statement is not correct the file will be uploaded to upalods.
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry there is an issue with uploading your file.";
    }
}
?>
