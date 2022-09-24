<?php include 'connection.php' ?>
<!DOCTYPE html>
<html>

<head>
  <meta charset=”UTF-8″>
  <title>PAD9 Forum</title>
  <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
  <link rel="stylesheet" href="uploadform.css" type="test/css">
</head>
<body>

  <div id="container">

    <div id="header">

      <div id="headernav">
        <a class="home" href="index.php">PAD 9 Forum</a>
      </div>

      <img src="image/Vlogo.png" style="width: 30px; height: 40px; padding-left: 10px; padding-top: 5px;">
      <div id="search">
        <form class="search">
          <input class="searchbar" type="search" placeholder="Search" aria-label="Search">
          <button class="searchbutton" type="submit">Search</button>
        </form>
      </div>
    </div>

    <div id="navbar">
      <ul>
        <?php
        $sql = "SELECT cat_id, cat_name FROM categories";
        $result = $conn->query($sql);
        $i = 0;
        if ($result->num_rows > 0) {
          // output data of each row
          while ($row = $result->fetch_assoc()) {
            echo '<li><a class="nav-item nav-link cat" href="board.php?id=' . $row["cat_id"] . '">' . $row["cat_name"] . '</a></li>';
            $i++;
          }
        } else {
          echo '<li class="result">0 results</li>';
        }
        ?>
        <a class="disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </ul>
    </div>
    <div id="content">

            <?php
            $i = 0;
            $id = $_GET["id"];
            $sqli = "SELECT * FROM posts JOIN topics ON (posts.post_topic = topics.topic_id) WHERE topic_id = " . $id;
            $post = $conn->query($sqli);
            if ($post->num_rows > 0) {
              //output data into html
              while ($reply = $post->fetch_assoc()) {
                if ($i == 0) {
                  echo '<div id="post">';
                  echo '<h1>Topic:</h1> ' . $reply["topic_subject"] . '</td></tr>';
                  echo '</div>';
                  echo '<div id="replies">';
                  echo '<h2>Replies:</h2>';
                  echo '<table>';
                  $i = 1;
                  $conn->close();
                }
                echo '<tr><td>' . $reply["post_content"] . '</td></tr>';
              }
            }   else {
                  echo '<div id="post">';
                  echo '<h1>Topic:</h1> ' . $reply["topic_subject"] . '</td></tr>';
                  echo '</div>';
                  echo '<div id="replies">';
                  echo '<h2>Replies:</h2>';
                  echo '<table>';
                  echo '<tr><td>No comments yet...</td></tr>';
                }
           /* $conn->close();*/
            ?>
      </table><br>
      <div id="user_reply">
        <?php
        echo '<form method="post" action="reply.php?id=' . $id . '" class="form-dark" enctype="multipart/form-data">';
        echo '<input type text name="reply-content" id="reply_input" required></input>';
        echo '<input type="submit" id="reply_button" value="Submit" />';
        echo 'Select image to upload: *';
        echo '<input type="file" name="fileToUpload" id="fileToUpload">';
        echo '<small><p>*To use images in your posts use the img tag with src="uploads/[name of your image]" without the brackets.</p></small>'
        ?>
      </div>
</div>
</div>
</body>

</html>
