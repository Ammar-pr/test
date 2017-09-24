<html>

<head>
<title>
this is my first test at uqu - ammar mohmmad
</title>
</head>

      <body>

      <?php

       require 'rb.php';

      // R::setup('mysql:host=127.0.0.1BADBADBAD;dbname=test', 'root', 'dwddwddwd');

        //R::dispense('report');

              //rb-mysql.php
      $what=$_POST['what'];
      $colour=$_POST['colour'];
      $lesson==$_POST['lesson'];
      $explain=$_POST['explain'];

      $new_report->what=$what;
      $new_report->colour=$colour;
      $new_report->lesson=$lesson;
      $new_report->explain=$explain;

      function print_posts () {
      echo 'What :: '   .$what.     '<br>' ;
       echo 'Colour :: '    .$colour.    '<br>' ;
             echo 'Lesson :: ' .$lesson.    '<br>' ;
             echo 'Explain :: '     .$explain.'<br>' ;
             }
      ?>


      </body>

</html>