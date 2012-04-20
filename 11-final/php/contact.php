<?php
if($_REQUEST['contact']) {

  $content = "Contact Details:\n";
  foreach($_REQUEST['contact'] as $key => $value) {
     $content .= "$key: $value\n";
  }
  mail ("knivoro@gmail.com","Form Submission!",$content);
  
  header('Location: index.html');
  exit(0);
}
?>