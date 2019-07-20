<?php
function validate($email,$password)
{
    if( preg_match('/^[A-Za-z](?=.*[A-Z])[A-Za-z0-9]{5,8}$/', $email)){
        // ^ arus diawali,?harus ada,{}jumlah char
        if(preg_match('/[A-Za-z](?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*[=]).{7}$/', $password)){
            echo "ok";
        }else {
                echo "password salah";
            }
    }else {
        echo 'user salah bro';
    }   
}
validate('aadi6aA','r2Wfrtd=');
