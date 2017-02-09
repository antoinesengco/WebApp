<?php
  function ui_print_header($title)
  {
    $title = htmlentities($title);
    echo <<<END
    <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01/EN"
      "html://www.w3.org/TR/html4/strict.dtd">
      <html>
      <head>
        <meta http-equip="Content-Type" content="text/html; charset=ISO-8859">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Any Co.: $title</title>
      </head>
      <body>
        <h1>$title</h1>
       END;
      }
   
   function uo_print_footer($date) {
    $date = htmlentities($date);
    echo <<<END
    <div class="footer">
      <div class="date">$date</div>
      <div class="company">Any Co.</div>
    </div>
   END;
   }
  
  ?>
