<?php require_once "../data/useraccount_data_access.php"; ?>
<?php require_once "../data/userdetails_data_access.php"; ?>
<?php
    session_start();

    function getAllUseraccount(){
        return getAllUseraccountFromDb();
    }

    function getUserdetailsById($userId){
        return getUserdetailsByIdFromDb($userId);
    }


    function valid($uname, $pass){
        $users  = getAllUseraccount();
        $isValid = false;
        foreach($users as $user){
            if($user['username']==$uname && $user['password']==$pass){

                $_SESSION['useraccount']= $user;
                $userdtails = getUserdetailsById($_SESSION['useraccount']['useraccountid']);
                $_SESSION['userdetails'] = $userdtails;

                // echo $_SESSION['useraccount']['useraccountid'].'<br>';
                // echo $_SESSION['useraccount']['username'].'<br>';
                // echo $_SESSION['useraccount']['email'].'<br>';
                // echo $_SESSION['useraccount']['password'].'<br>';
                // echo $_SESSION['useraccount']['role'].'<br>';
                // echo $_SESSION['useraccount']['isdelete'].'<br>';
                // echo $_SESSION['useraccount']['userdetailsid'].'<br>';
                //
                // echo $_SESSION['userdetails']['userdetailsid'].'<br>';
                // echo $_SESSION['userdetails']['name'].'<br>';
                // echo $_SESSION['userdetails']['gender'].'<br>';
                // echo $_SESSION['userdetails']['birthday'].'<br>';
                // echo $_SESSION['userdetails']['image'].'<br>';

                /////////// Since Login /////
                $datetime1 = new DateTime($_SESSION['userdetails']['birthday']);
                $datetime2 = new DateTime('now');
                $interval = $datetime1->diff($datetime2);
                $usersince = $interval->format('%y Year %m Month %d Day');
                $_SESSION['usersince'] = $usersince;
                ////////////////////////////

                $isValid = true;
                break;
            }
        }
        return $isValid;
    }

    $username = $_POST['username'];
    $password = $_POST['password'];

    if ( valid($username,$password) ) {
        header('Location: ../app/view/mainView/dashboard.php');
    } else {
        header('Location: ../app/view/mainView/signin.php');
    }

?>
