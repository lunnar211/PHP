<?php
    $n1 = $_POST['txt1'];
    $n2 = $_POST['txt2'];
    $op = $_POST['btnop'];
    $ans = '';
    if ($op =='+')
    {
        $ans = $n1+$n2;
    }
    else if($op == '-')
    {
        $ans = $n1-$n2;
    }
    else if($op == '*')
    {
        $ans = $n1-$n2;
    }
    else if($op == '/')
    {
        $ans = $n1-$n2;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calc</title>
</head>
<body>
    <form method="post">
         First input: <input type = "text" name = "txt1" />
         <br><br>
         Second input: <input type = "text" name = "txt2" />
         <br><br>
         Output: <input type = "text" name = "ans" value="<?php echo $ans;?>" />
         <br><br>
         botton type: <input type = "submit" name ="btnop" value="+">
         botton type: <input type = "submit" name ="btnop" value="-">
         botton type: <input type = "submit" name ="btnop" value="*">
         botton type: <input type = "submit" name ="btnop" value="/">
    </form>
</body>
</html>