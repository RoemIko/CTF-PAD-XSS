<?php
include 'connection.php';
//Values for creating posts
$_SESSION['signed_in'] = true;  //User is "logged in"
$_SESSION['user_id'] = 1; //User is set to 2, because there is no requirement to login. User 2 = anonymous

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
                    topics(topic_subject,
                          topic_date,
                          topic_cat,
                          topic_by)
                VALUES ('" . $_POST['topic-name'] . "',
                        NOW(),
                        " . $_GET['id'] . ",
                        " . $_SESSION['user_id'] . ")";

        $result = mysqli_query($conn, $sql);

        if(!$result)
        {
            echo 'Your post has not been saved, please try again later.';
        }
        else
        {
            echo 'Your post has been saved, check out <a href="board.php?id=' . htmlentities($_GET['id']) . '">the post</a>.';
        }
    }
}

?>
