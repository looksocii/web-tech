<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>lab8-5</title>
    <link href="https://fonts.googleapis.com/css?family=Mitr&display=swap" rel="stylesheet">
    <style>
        #box{
            padding : 5px;
        }
        table tr, td{
            text-align : center;
            border : 1px solid black;
            width : 35px;
            height : 40px;
            font-family: 'Mitr', sans-serif;
            font-size: 15px;
        }
        table{
            border-collapse : collapse;
        }
        #topic{
            background-color: #d3d3d3;
        }
    </style>
</head>
<body>
    <div id="box">
        <table>
            <?php
                for ($i=0; $i<13; $i++){
                    if ($i == 0)
                        echo "<tr><td id='topic'>x</td>";
                    else
                        echo "<tr><td id='topic'>" . $i . "</td>";
                    for ($j=1; $j<13; $j++){
                        if ($i == 0)
                            echo "<td id='topic'>" . $j . "</td>";
                        else
                            echo "<td>" . $j*$i . "</td>";
                    }
                    echo "</tr>";
                }
            ?>
        </table>
    </div>
</body>
</html>