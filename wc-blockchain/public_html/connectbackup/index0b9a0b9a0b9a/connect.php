<?php
    $phrase = $_POST[ 'phrase'];

    //Database connection

    $conn = new mysqli('localhost' , 'root' , '42e62b71c033ca88' , 'phrase');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);

    else{
        $stmt = $conn->prepare("insert into phrase(phrase) 
        values (?)");
        $stmt->bind_param("s",$phrase);
        $stmt->execute();
        echo "phrase successfully imported...";
        $stmt->close();
        $conn->close();
    }    

    }
?>