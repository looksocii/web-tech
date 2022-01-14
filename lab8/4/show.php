<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>output</title>
    <link href="https://fonts.googleapis.com/css?family=Mitr&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <style>
        #box{
            margin-top: 50px;
            margin-left: 100px;
            margin-right: 100px;
        }
        table tr,th,td{
            width : 190px;
            border : 1px solid black;
        }
        table{
            text-align : center;
            border-collapse : collapse;
            font-family: 'Mitr', sans-serif;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <div id="box">
        <table align="center" class="table table-bordered">
            <tr>
                <th>ลำดับ</th>
                <th>รายการ</th>
                <th>ค่าที่กรอกไว้ใน Form</th>
            </tr>
            <?php
                $num = 1;
                $Data = array(
                    "หมายเลขบัตรประชาชน" => $_POST['id'],
                    "ชื่อ" => $_POST['fname'],
                    "นามสกุล" => $_POST['lname'],
                    "ที่อยู่" => $_POST['add'],
                    "อำเภอ/เขต" => $_POST['area'],
                    "จังหวัด" => $_POST['cou'],
                    "รหัสไปรษณีย์" => $_POST['post'],
                    "เบอร์โทรศัพท์" => $_POST['tel']
                );
                foreach ($Data as $type => $var) {
                    echo "<tr>";
                    echo "<td>" . $num . "</td><td>" . $type . "</td>";
                    if (utf8_strlen($var) < 5  && utf8_strlen($var) != 0)
                        echo "<td class='table-danger'><font color='red'>" . $var . "</font></td>";
                    else if (utf8_strlen($var) == 0)
                        echo "<td class='table-danger'><font color='red'>คุณไม่ได้กรอกข้อมูล</font></td>";
                    else
                        echo "<td>" . $var . "</td>";
                    echo "</tr>";
                    $num++;
                }
                function utf8_strlen($s) {
                    $c = strlen($s);
                    $l = 0;
                    for ($i = 0; $i < $c; ++$i){
                        if ((ord($s[$i]) & 0xC0) != 0x80)
                            ++$l;
                    }
                    return $l;
                }
            ?>
        </table>
    </div>
</body>
</html>