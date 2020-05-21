<?php
    include_once 'includes/autoloader.inc.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body {
        background-color: fff;
    }
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        margin: 0 auto;
        width: 50%;
    }
    td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }
    tr:nth-child(even) {
        background-color: #dddddd;
    }
    </style>
</head>
<body>
<?php
    $taskOneObj = new ViewTaskOne();
    $items = ($taskOneObj->showTaskOne());
?>
<h2 style="text-align:center;">Task One</h2>
<table>
  <tr>
    <th>Category Name</th>
    <th>Total Items</th>
  </tr>

  <?php foreach($items as $key => $value): ?>
    <tr>
        <td><?php echo $value['Category Name']; ?></td>
        <td><?php echo $value['Total Items']; ?></td>
    </tr>
  <?php endforeach; ?>
</table>


</body>
</html>
