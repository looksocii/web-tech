<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>lab9-1</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<style>
    #box{
        margin: 15px;
    }
    input{
        height: 26px;
        width: 160px;
    }
</style>
<body>
    <div id='box'>
        <h2>Currency Converter</h2>
        <form action="" method="POST">
            <label for="from">From : </label>
            <select name="one">
                <option value="THB">THB</option>
                <option value="JPY">JPY</option>
                <option value="CNY">CNY</option>
                <option value="SGD">SGD</option>
                <option value="USD">USD</option>
            </select>
            <input type="text" name="val1" placeholder="Enter Your Money" value=
                <?php
                    if(isset($_POST['submit'])) {
                        $num = $_POST['val1'];
                        echo $num;
                    }
                ?>
            ><br>
            <label for="name">To : </label>
            <select name="two">
                <option value="THB">THB</option>
                <option value="JPY">JPY</option>
                <option value="CNY">CNY</option>
                <option value="SGD">SGD</option>
                <option value="USD">USD</option>
            </select>
            <input type="text" name="val2" placeholder="Output Here" readonly value=
                <?php
                    if(isset($_POST['submit'])) {
                        $num = $_POST['val1'];
                        $num1 = $_POST['one'];
                        $num2 = $_POST['two'];
                        $url = "https://api.exchangeratesapi.io/latest";
                        $response = file_get_contents($url);
                        $result = json_decode($response);
                        $ans = ($num/($result->rates->$num1))*($result->rates->$num2);
                        $form = sprintf("%.2f", $ans);
                        echo $form;
                    }
                ?>
            ><br>
            <button type="submit" name="submit">Convert</button>
        </form>
    </div>
</body>
</html>