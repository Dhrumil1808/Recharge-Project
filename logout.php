<?php

setcookie("email","",time()-1);

header("location:index.php?msg=You have logged out");
?>
