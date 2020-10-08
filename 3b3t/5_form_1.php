<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Formularze</title>
  </head>
  <body>
<!-- 
    <form method="get">
      <input type="text" name="surname" autofocus placeholder="Wpisz nazwisko"><br><br>
      <input type="submit" value="Wyślij"><hr>
    </form> -->

    <?php
        //isset() lub empty/!empty gdzie ! to negacja


        if(!empty($_GET['name'])&&(!empty($_GET['surname']))){
          $name = $_GET['name'];
          $surname = $_GET['surname'];

          $name = trim($name);
          $surname = trim($surname);
          
          $name = strtolower($name);
          $surname = strtolower($surname);
          
          $name = strtoupper($name[0]).substr($name, 1);
          $surname = strtoupper($surname[0]).substr($surname, 1);

          echo "Nazywasz sie: $name $surname";
          echo "<br><a href='./5_form_1.php'>Powrót do formularza</a>";

        }else{
          echo <<< FORM
          <form method="get">
            <input type="text" name="name" autofocus><br><br>
            <input type="text" name="surname" autofocus><br><br>
            <input type="submit" value="Wyślij"><hr>
          </form>
FORM;
          print "Wypelnij formularz.";
      }

     ?>
  </body>
</html>
