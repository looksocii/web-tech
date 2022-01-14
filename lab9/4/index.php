<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nobel Prize</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</head>
<style>
    #box {
        margin-top: 50px;
        margin-left: 125px;
        margin-right: 125px;
    }

    #topic {
        border: 1px solid #6c757d;
    }

    #frist {
        border-left: 1px solid #6c757d;
        border-bottom: 1px solid #6c757d;
    }

    #last {
        border-bottom: 1px solid #6c757d;
    }

    #zero {
        border-right: 1px solid #6c757d;
        border-bottom: 1px solid #6c757d;
    }

    #one {
        border-right: 1px solid #6c757d;
    }

    #by {
        text-align: right;
    }
</style>

<body>
    <div class="p-5 bg-secondary text-white">
        <h3>Nobel Prize Winner 2010-2018</h3>
        <p>&emsp;&emsp;&emsp;Nobel Prize (Sweden : Nobelpriset ; England : Nobel Prize) is an annual
            international award. Organized by the Scandinavian Committee to consider outstanding research
            or intelligence and expertise or to benefit humanity. Both in science and culture According
            to the intention of Alfred Nobel, the Swedish chemist who invented dynamite, first founded in
            1895, but the award in physics, chemistry, physiology or medicine in literature and in the field
            Peace began with the first award in 1901.</p>
        <form class="form-inline" action="" method="POST">
            <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="year">
                <option selected value="0000">Year</option>
                <option value="2018">2018</option>
                <option value="2017">2017</option>
                <option value="2016">2016</option>
                <option value="2015">2015</option>
                <option value="2014">2014</option>
                <option value="2013">2013</option>
                <option value="2012">2012</option>
                <option value="2011">2011</option>
                <option value="2010">2010</option>
            </select>
            <button type="submit" name="submit" class="btn btn-primary">View</button>
        </form>
    </div>
    <div id="box">
        <?php
            $url = "http://10.0.15.12/lab9/restapis/nobleprize100";  
            $response = file_get_contents($url);
            $result = json_decode($response);
            $year = "";
            $vul = 1;
            $vul2 = 0;
            $vul3 = 0;
            if(isset($_POST['submit'])){
                if (($_POST["year"]) != 0000){
                    echo "<h2>Nobel Prize Winner in Year " . $_POST["year"] . "</h2>";
                    echo "<table class='table table-bordered'>";
                    echo "<tr class='thead-dark text-center' id='topic'><th>Category</th><th>No.</th>";
                    echo "<th>ID</th><th>Name</th><th>Surname</th><th>Motivation</th></tr>";
                    foreach ($result as $data) {
                        if ($data->year == $_POST["year"]){
                            echo "<tr>";
                            foreach ($data->laureates as $test) {
                                $vul2++;
                            }
                            echo "<td rowspan='" . $vul2 . "' class='text-center' ";
                            echo "style='vertical-align: middle;' id='frist'>" . $data->category . "</td>";
                            foreach ($data->laureates as $info) {
                                $vul3++;
                                if ($vul2 == $vul3)
                                    echo "<td class='text-center' id='last'>";
                                else
                                    echo "<td class='text-center'>";
                                echo $vul . "</td>";
                                $vul++;
                                if ($vul2 == $vul3)
                                    echo "<td class='text-center' id='last'>";
                                else
                                    echo "<td class='text-center'>";
                                echo $info->id . "</td>";
                                if ($vul2 == $vul3)
                                    echo "<td id='last' width='125'>";
                                else
                                    echo "<td width='125'>";
                                echo $info->firstname . "</td>";
                                if ($vul2 == $vul3)
                                    echo "<td id='last' width='125'>";
                                else
                                    echo "<td width='125'>";
                                echo $info->surname . "</td>";
                                if ($vul2 == $vul3)
                                    echo "<td id='zero'>";
                                else
                                    echo "<td id='one'>";
                                echo $info->motivation . "</td>";
                                echo "</tr>";
                            }
                            $vul2 = 0;
                            $vul3 = 0;
                        }
                    }
                    echo "</table>";
                    echo "<p id='by'>Designed By : Puntakarn Kaewsanghan (61070139)</p>";
                }
            }
        ?>
    </div>
</body>

</html>