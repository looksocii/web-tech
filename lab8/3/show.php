<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>output</title>
    <link href="https://fonts.googleapis.com/css?family=Mitr&display=swap" rel="stylesheet">
    <style>
        #red{
            color : red;
        }
        table tr,th,td{
            width : 190px;
            border : 1px solid black;
        }
        table{
            margin-top: 10px;
            text-align : center;
            border-collapse : collapse;
            font-family: 'Mitr', sans-serif;
            font-size: 18px;
        }
    </style>
</head>
<body>
<table align="center">
        <tr>
            <th>ลำดับ</th>
            <th>รายการ</th>
            <th>ค่าที่กรอกไว้ใน Form</th>
        </tr>
        <?php
            $id = $_POST['id'];
            $fristName = $_POST['fname'];
            $lastName = $_POST['lname'];
            $address = $_POST['add'];
            $area = $_POST['area'];
            $cou = $_POST['cou'];
            $post = $_POST['post'];
            $tel = $_POST['tel'];
            echo "<tr>";
            echo "<td>1</td><td>หมายเลขบัตรประชาชน</td>";
            if (utf8_strlen($id) < 5  && utf8_strlen($id) != 0)
                echo "<td id='red'>" . $id . "</td>";
            else if (utf8_strlen($id) == 0)
                echo "<td id='red'>คุณไม่ได้กรอกข้อมูล</td>";
            else
                echo "<td>" . $id . "</td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td>2</td><td>ชื่อ</td>";
            if (utf8_strlen($fristName) < 5  && utf8_strlen($fristName) != 0)
                echo "<td id='red'>" . $fristName . "</td>";
            else if (utf8_strlen($fristName) == 0)
                echo "<td id='red'>คุณไม่ได้กรอกข้อมูล</td>";
            else
                echo "<td>" . $fristName . "</td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td>3</td><td>นามสกุล</td>";
            if (utf8_strlen($lastName) < 5 && utf8_strlen($lastName) != 0)
                echo "<td id='red'>" . $lastName . "</td>";
            else if (utf8_strlen($lastName) == 0)
                echo "<td id='red'>คุณไม่ได้กรอกข้อมูล</td>";
            else
                echo "<td>" . $lastName . "</td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td>4</td><td>ที่อยู่</td>";
            if (utf8_strlen($address) < 5 && utf8_strlen($address) != 0)
                echo "<td id='red'>" . $address . "</td>";
            else if (utf8_strlen($address) == 0)
                echo "<td id='red'>คุณไม่ได้กรอกข้อมูล</td>";
            else
                echo "<td>" . $address . "</td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td>5</td><td>อำเภอ/เขต</td>";
            if (utf8_strlen($area) < 5  && utf8_strlen($area) != 0)
                echo "<td id='red'>" . $area . "</td>";
            else if (utf8_strlen($area) == 0)
                echo "<td id='red'>คุณไม่ได้กรอกข้อมูล</td>";
            else
                echo "<td>" . $area . "</td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td>6</td><td>จังหวัด</td>";
            if (utf8_strlen($cou) < 5 && utf8_strlen($cou) != 0)
                echo "<td id='red'>" . $cou . "</td>";
            else if (utf8_strlen($cou) == 0)
                echo "<td id='red'>คุณไม่ได้กรอกข้อมูล</td>";
            else
                echo "<td>" . $cou . "</td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td>7</td><td>รหัสไปรษณีย์</td>";
            if (utf8_strlen($post) < 5  && utf8_strlen($post) != 0)
                echo "<td id='red'>" . $post . "</td>";
            else if (utf8_strlen($post) == 0)
                echo "<td id='red'>คุณไม่ได้กรอกข้อมูล</td>";
            else
                echo "<td>" . $post . "</td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td>8</td><td>เบอร์โทรศัพท์</td>";
            if (utf8_strlen($tel) < 5 && utf8_strlen($tel) != 0)
                echo "<td id='red'>" . $tel . "</td>";
            else if (utf8_strlen($tel) == 0)
                echo "<td id='red'>คุณไม่ได้กรอกข้อมูล</td>";
            else
                echo "<td>" . $tel . "</td>";
            echo "</tr>";

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
</body>
</html>