<?php 
$number1 = $_POST['number1'];
$number2 = $_POST['number2'];
$operator = $_POST['operator'];
$result = 0;

switch($operator){
    case '*': 
        $result = $number1 * $number2;
        break;
    case '-': 
        $result = $number1 - $number2;
        break;
    case '+': 
        $result = $number1 + $number2;
        break;
    case '/': 
        $result = $number1 / $number2;
        break;

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div style="margin: 0 auto" class=" col-md-6">
            <div class="card mt-3">
                <div class="card-header card-secondery">
                    Basic Calculator
                </div>
                <div class="card-body">
                    <div class="alert alert-success">Result : <?php echo $result; ?></div>
                    <form action="" method="POST">
                        <div class="form-group">
                            <label>Number 1</label>
                            <input type="number" value="<?= $number1 ?>" name="number1">
                        </div>
                        <div class="form-group">
                            <label>Number 2</label>
                            <input type="number" value="<?= $number2 ?>" name="number2">
                        </div>
                        <div class="form-group">
                            <label>Operation</label>
                            <select name="operator">
                                <option <?php echo $operator == '+'?'selected':'' ?> value="+">+</option>
                                <option <?= $operator == '-'?'selected':'' ?> value="-">-</option>
                                <option <?= $operator == '*'?'selected':'' ?> value="*">*</option>
                                <option <?= $operator == '/'?'selected':'' ?> value="/">/</option>
                            </select>
                        </div>
                        <input type="submit" value="Result">
                    </form>
                </div>
            </div>
            </div>
        </div>
    </div>
</body>
</html>