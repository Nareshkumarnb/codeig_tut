<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table>
    <tr>
    <th>Id</th>
    <th>UserName</th>
    <th>Company</th>
    </tr>
    <?php
      foreach ($data as $key => $value) {
          echo "<tr>
          <td> ".$value['id']."</td>
          <td> ".$value['username']." </td>
          <td> ".$value['company']." </td>
          </tr>";
      }
    ?>
    </table>
</body>
</html>
