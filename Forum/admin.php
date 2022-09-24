<html>
<head>
    <title>Admin Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css'>
    <ul>

</ul>
</head>
<body>
    <html>
<head>
<title>Contact Form</title>
    <link rel="stylesheet" type="text/css" href="css/stylePAD.css">
<body>

    <div class="loginbox">
    <h1>Sign In</h1>
        <div class="innerLogin">
            <form method="post" action="verify.php">
                Username
                <br>
                <input class ="formCSS"type="text" name="username" placeholder="Username...">
                <br><br>
                Password
                <br>
                <input class= "formCSS" type="password" name="password" placeholder="Password..." id="myInput">
                <br><input type="checkbox" onclick="myFunction()">Show Password
                <br>
                <input class="button1" type="submit" name="" value="Submit">
            </form>
        </div>
    </div>


</body>
</head>
</html>
<p style="display: none;"> RmxhZ051bWJlck9uZQ== </p>
<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
