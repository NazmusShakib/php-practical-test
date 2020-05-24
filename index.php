<?php
    include_once 'vendor/autoload.php';
    use App\Controllers\TaskOneController;
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
    // psr-4 autoload example
    $taskOneObj = new TaskOneController();
    $items = ($taskOneObj->showTaskOne());

    // files autoload example
    $concatString = concatString('Nazmus', 'Shakib');
    echo $concatString;

    echo nl2br("\r\n");

    // classmap autoload example
    $class1 = new Class1();
    echo nl2br("\r\n");

    $class2 = new Whatever\Class2();
    echo nl2br("\r\n");

    $class3 = new Class3();
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
