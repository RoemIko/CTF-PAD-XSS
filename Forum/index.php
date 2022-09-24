<?php include 'connection.php' ?>
<?php include 'cookies.php' ?>
<!DOCTYPE html>
<html>

<head>
  <meta charset=”UTF-8″>
  <title>PAD9 Forum</title>
  <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
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
        $conn->close();
        ?>
        <a class="disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </ul>
    </div>

    <div id="content">
      
    </div>

    <div id="footer">

    </div>

  </div>
  
  <script>
    //Language translations.
    var language = {
      eng: {
        ?: ""
      },

      nl: {
        ?: ""
      }
    };

      //define langauge via window hash.
    if (window.location.hash) {
      if (window.location.hash === "#nl") {
        id.textContent = language.es.?;
      }
    };

  </script>
  
</body>

</html>
