<?php
    //Parameterübergabe
    header('Content-type: text/javascript');
    $string = $_POST["string"];
    $obj = json_encode($string);
    echo $obj;

    echo $obj['member']['10']['charname'];

?>