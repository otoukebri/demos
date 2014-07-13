<?php
echo 'hello';
if (isset($_POST['comment'])){
	echo "votre commentaire est: ".$_POST['comment'].'<BR>';
}
if (isset($_POST['name'])){
	echo "votre nom est: ".$_POST['name'].'<BR>';
}
?>