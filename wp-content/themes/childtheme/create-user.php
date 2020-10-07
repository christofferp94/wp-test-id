<?php
    // Required for wp functions.
    require_once("../../../wp-load.php");

    if(isset($_POST)) {
        if(isset($_POST['pwd']) != isset($_POST['confirmpwd'])) {
            // TODO: Fix an actual error message directly in form so its not even posted.
            echo 'Passwords must be the same';
        } else {
            $userdata = array(
                'user_pass' => $_POST['pwd'],
                'user_login' => $_POST['fname'],
                'user_email' => $_POST['email'],
                'role' => 'editor',
            );
            wp_insert_user($userdata);
        }
    }
?>