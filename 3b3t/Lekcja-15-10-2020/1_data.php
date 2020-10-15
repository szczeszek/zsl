<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dane</title>
</head>
<body>
    <h4> Dane uzytkownika </h4>
    <form action="./1_data_show.php" method="GET">
        <input type="text" name="login" placeholder="Login"><br><br>
        <input type="password" name="pass" placeholder="Haslo"><br<br>

        <h4> Ulubiony kolor</h4>
        <input type="radio" name="color" value="r">Czerwony
        <input type="radio" name="color" value="g">Zielony
        <input type="radio" name="color" value="b" checked>Niebieski<br><br>
        <input type="checkbox" name="regulamin">Zatwierdzenie regulaminu <br><br>

        <input type="submit" value="Wyslij dane">
       
    </form>
    
</body>
</html>