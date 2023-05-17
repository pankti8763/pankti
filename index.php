<!DOCTYPE HTML>
<html>

<body>
    <form action="" method="post">
        Name: <input type="text" name="name"><br>
        E-mail: <input type="text" name="email"><br>
        Enter Value: <input type="int" name="inarray"><br>
        <input type="submit" name="submit">
    </form>
</body>

</html>

<?php
if (isset($_POST['submit'])) {
    echo "Welcome " . $_POST['name'] . "<br>";
    echo "Your email address is:" . $_POST['email'] . "<br>";
    $array = [1, 2, 3, 4, 5, 6, 7, 8, 9];
    if (in_array($_POST['inarray'], $array)) {
        echo "You are in the array";
    } else {
        echo "You are not in the array";
    }
}   

?>
