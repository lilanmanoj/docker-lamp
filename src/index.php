<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>It Works</title>
</head>
<body>
<?php
    $txt = "<h1>It works!</h1>";
    $arr = array('A', 'B', 'C');
    $ass_arr = array('first' => "A", 'second' => "B", 'third' => "C");
    
    echo $txt;
    print_r ($arr);
    echo "<br>";
    print_r ($ass_arr);

    echo (nl2br("\nFirst element of arr = ".$arr[0]));
?>
</body>
</html>