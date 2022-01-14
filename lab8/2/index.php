<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>lab8-2</title>
    <link href="https://fonts.googleapis.com/css?family=Mitr&display=swap" rel="stylesheet">
    <style>
        body{
            font-family: 'Mitr', sans-serif;
            font-size: 25px;
        }
        table tr, th, td{
            width : 60px;
            height : 60px;
            text-align: center;
            font-size: 25px;
        }
        table{
            border-collapse : collapse;
        }
        #font{
            color : white;
        }
    </style>
</head>
<body>
    <h3>(61070139) September 2019</h3>
    <table border="1">
        <tr bgcolor="black" id="font">
            <th>Su</th>
            <th>Mo</th>
            <th>Tu</th>
            <th>We</th>
            <th>Th</th>
            <th>Fr</th>
            <th>Sa</th>
        </tr>
        <?php
            $arr = array("red", "yellow", "pink", "green", "orange", "blue", "violet");
            $num = -5;
            for ($i=0; $i<6; $i++){
                echo "<tr>";
                for ($j=0; $j<7; $j++){
                    if ($num > 30)
                        echo "<td bgcolor='" . $arr[$j] . "'></td>";
                    else
                        if ($num > 0)
                            echo "<td bgcolor='" . $arr[$j] . "'>".$num."</td>";
                        else
                            echo "<td bgcolor='" . $arr[$j] . "'></td>";
                    $num++;
                }
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>