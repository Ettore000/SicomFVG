 <?php
// the message
$msg = "Ciao\ncome stai?";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
mail("ettore.panasia@gmail.com","Prova",$msg);
?> 