<?php
$username = trim($_POST['username']);
$password = trim($_POST['password']);

if ($username == 'Aiden' && $password == 'YouAreCloseToTheFlag:)') {
echo 'You got it right!';
echo '<head><meta http-equiv="refresh" content="2; url=isthistheflagyouwerelookingfor.html">';
}else {
echo 'You put in a wrong cookie ;)';
}
?>
