<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>lab9-2</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
    <table class="table table-bordered table-dark" id="box">
        <tr class='text-center'>
            <th>No.</th>
            <th>Title</th>
            <th>Year</th>
            <th>Cast</th>
            <th>Genres</th>
        </tr>
        <?php
            $val = 1;
            echo "<tr>";
            $url = "http://10.0.15.12/lab9/restapis/movies90";    
            $response = file_get_contents($url);
            $result = json_decode($response);
            foreach ($result as $data) {
                echo "<td class='text-center'>$val</td>";
                $val++;
                echo "<td>" . $data->title . "</td>";
                echo "<td class='text-center'>" . $data->year . "</td>";
                echo "<td><ul>";
                foreach ($data->cast as $info) {
                    echo "<li>" . $info . "</li>";
                }
                echo "</ul></td>";
                echo "<td>";
                foreach ($data->genres as $last) {
                    echo "- " . $last . "<br>";
                }
                echo "</td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>