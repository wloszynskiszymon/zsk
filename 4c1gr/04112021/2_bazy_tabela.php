<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>uzytkownicy</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <h4>uzytkownicy</h4>
      <?php
        $connect = new mysqli("localhost","root","","users");

        $sql = "SELECT * FROM `users`";
        $result = $connect->query($sql);

        if(isset($_GET['error'])) {
          echo $_GET['info'].'<hr>';
        }
        // print_r($result);
        echo<<<TABLE
        <table>
         <tr>
             <th>id</th>
             <th>imie</th>
             <th>Data urodzenia</th>
             <th>Nazwisko</th>
         </tr>
TABLE;
        while ($rows = $result->fetch_assoc()) {
          echo<<<ROW
            <tr>

          <td>$rows[id]</td>
          <td>$rows[name]</td>
          <td>$rows[surname]</td>
          <td>$rows[birthday]</td>
          <td><a href="delete.php?id=$rows[id]">Usuń</a></td>

          </tr>
ROW;
        }
echo "</table>";
       ?>
  </body>
</html>
