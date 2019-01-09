
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>random</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">
  </head>
  <body>
    <div class="all">
      <div class="prediction">
        <p>Magic 8 Ball</p>
        <?php
            $array = array("Yes", "No", "Maybe", "Да", "Absolutely", "Nem", "Ja", "Няма", "Nein", "Si", "Nie", "Nee");


            if(isset($_POST['bt'])){
              $number = mt_rand(0, count($array) - 1);
              echo $array[$number];
          }
         ?>
      </div>
      <form class="form" action="" method="post">
        <input class="btn" type="submit" name="bt" value="ASK">

      </form>
   </div>
  </body>
</html>
