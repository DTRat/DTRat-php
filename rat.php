<?php 
$message="ip detected";
print '<iframe width="0" height="0" src="https://api.telegram.org/bot<token>/sendMessage?chat_id=<chatid>&text='.$_SERVER['REMOTE_ADDR'].' - '.$message.'" frameborder="0" allowfullscreen></iframe>';
?>
