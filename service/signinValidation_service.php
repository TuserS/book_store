

<?php require_once "../data/useraccount_data_access.php"; ?>
<?php
    session_start();

    function getAllPersons(){
        return getAllPersonsFromDb();
    }

    function valid($uname, $pass){
        $users  = getAllUseraccountFromDb();
        $isValid = false;
        foreach($users as $user){
            if($user['username']==$uname && $user['password']==$pass){

                $_SESSION['current']= $user;

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
