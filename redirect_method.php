<?php

$dd = Trim(stripslashes($_POST['dropdown']));

if ($dd){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=".$dd.".php\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.php\">";
}
?>