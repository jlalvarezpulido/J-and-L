<?php
  if(!isset($page_title)) { $page_title = 'Default Title';}
?>
<!DOCTYPE html>
<html lang="en">
  <head> 
    <title>J&L<?php echo $page_title;?></title>
    <meta charset="utf-8">
    <link rel="stylesheet" media="all" href="../public/stylesheets/staff.css" />
  </head>
<body>
  <header>
    <h1>J&L <?php echo $page_title?></h1>
  </header>
  <navigation>
    <ul>
    <li> <a href=<?php echo '/public/index.php'?> > Home</a> </li>
    </ul>
  </navigation>
