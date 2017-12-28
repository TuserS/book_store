<?php

    function nameValid($name){
        $len = strlen($name);
        $valid= true;
        if($len<2){
            $valid= false;
        }else{
            if( !(($name[0]>='a' && $name[0]<='z') || ($name[0]>='A' && $name[0]<='Z') ) ){
                $valid = false;
            }
            for($i=0; $i<$len; $i++){
                if( !(($name[$i]>='a' && $name[$i]<='z') || ($name[$i]>='A' && $name[$i]<='Z') || $name[$i]=="." || $name[$i]=="-"|| $name[$i]==" " ) ){
                    $valid = false;
                    break;
                }
            }
        }
        return $valid;
    }

    function emailValid($email){
        $parts = explode("@", $email);
        $valid = true;

        if(count($parts)==2){
            $parts2 = explode(".",$parts[1]);
            if(count($parts2)!=2){
                $valid = false;
            }
        }else{
            $valid = false;
        }
        return $valid;
    }

    function phoneValid($p){
        $p_len = strlen($p);
        $valid = false;
        if( $p_len!=11 )
            $valid = false;
        else{
            for( $i=0; $i<$p_len; $i++ ){
                if( $name[0]>='9' || $name[0]<='1' ){
                    $valid = false;
                }
            }
        }
        return $valid;
    }

    function passwordValid($p){
        $p_len = strlen($p);
        $valid = false;
        if( $p_len<8 )
            $valid = false;
        else{
            for( $i=0; $i<$p_len; $i++ ){
                if( $p[$i]=='@' || $p[$i]=='#' || $p[$i]=='$'|| $p[$i]=='%' ){
                    $valid = true;
                    break;
                }
            }
        }
        return $valid;
    }

    $name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$password = $_POST['password'];
	$gender = empty($_POST['gender']) ? false : $_POST['gender'];

    $ok = true;

    if( !nameValid($name) ){
        echo "Invalid Name<br>";
        $ok = false;
    }
    if( !emailValid($email) ){
        echo "Invalid Email<br>";
        $ok = false;
    }
    if( !usernameValid($phone) ){
        echo "Invalid username<br>";
        $ok = false;
    }
    if( !passwordValid($password) ){
        echo "Invalid password<br>";
        $ok = false;
    }
    if( !$gender ){
        echo "Invalid gender<br>";
        $ok = false;
    }

    if($ok){
        header("location: ../app/view/mainView/dashboard.php");
    } else {
        header("location: ../app/view/mainView/signin.php");
    }
?>
