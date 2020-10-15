<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

        <style>
            table,th, td{
                border: 1px solid black;
            }

            </style>
    </head>
<body>
    <form action="zadanie2.php" method="GET"> 
    
    <table>
        <tr> 
            <th>Name</th>
            <th> Value </th>
        </tr>
        <tr>
            <td>Name</td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td>Sex</td>
            <td><input type="radio" name="sex" value="male">Male<br>
            <input type="radio" name="sex" value="female">Female<br></td>
        </tr>

        <tr>
            <td>Eye color</td>
            <td> <select name="color">
                <option value="g">green</option>
                <option value="br">brown</option>
                <option value="b">blue</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Check all that apply</td>
            <td>
                <input type="checkbox" value="feet" name="feet">Over 6 feet tall<br>
                <input type="checkbox" value="pounds" name="pounds">Over 200 pounds
            </td>
        </tr>
        <tr>
            <td colspan="2">Describe your athletic ability:<br>
            <textarea rows="5" cols="40" name="textarea"></textarea></td>
        </tr>
        <tr colspan="2">
            <td colspan=2 align="center"><input type="submit" value="Enter my information"></td>
        </tr>


    </table>
        </form>

</body>
</html>