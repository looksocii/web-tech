<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>output</title>
    <link href="https://fonts.googleapis.com/css?family=Mitr&display=swap" rel="stylesheet">
</head>
<style>
    body{
        font-family: 'Mitr', sans-serif;
        font-size: 20px;
    }
    table tr, td{
        width : 40px;
        height : 30px;
        border-bottom : 1px solid black;
        text-align : center;
    }
    table{
        border-collapse: collapse;
    }
</style>
<body>
    <?php
        $myarr = array(1,2,3,4,5,6,7,8,9,10,11,12);
        $number = $_POST['num'];
        $v = intval($number);
        echo "<h2>ตารางสูตรคูณแม่ $v </h2>";
        echo "<table>";
        for ($i = 0; $i < sizeof($myarr); $i++) {
            echo "<tr>";
            echo "<td>$myarr[$i]</td><td>x</td><td>$v</td><td>=</td><td>" . $myarr[$i] * $v . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    ?>
</body>
</html>