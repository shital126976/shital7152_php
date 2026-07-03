<!DOCTYPE html>
<html>
<head>
    <title>Sort Array</title>
</head>
<body>

<form method="post">
    Enter Array Elements (comma separated):<br><br>
    <input type="text" name="numbers" placeholder="10,5,20,15" required>
    <br><br>
    <input type="submit" name="submit" value="Sort Array">
</form>

<?php
if(isset($_POST['submit']))
{
    
    $input = $_POST['numbers'];

    
    $arr = explode(",", $input);

    
    sort($arr);

    echo "<h3>Sorted Array:</h3>";

    foreach($arr as $value)
    {
        echo $value . " ";
    }
}
?>

</body>
</html>