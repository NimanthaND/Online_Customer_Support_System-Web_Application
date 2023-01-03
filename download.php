<?php
if(!empty($_GET['file']))
 {

 $filename=basename($_GET['file']); 
 //get file basename 
 $filepath='file/'.$filename; 

  if(!empty($filename) && file_exists($filepath))
  {
//difine file header
header("cashe-Control:public");
header("Content-Disposition: attachment; filename= $filename");   
header("Content-Type: application/zip");
header("Content-Description: File Transfer");            
header("Content-Transfer-Encoding:binary");

//reading the file
readfile($filepath);
exit;

  }

 }