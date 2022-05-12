<?php 
    $users  = $data['users'];

    // Testing data from db
    foreach ( $users as $user ) {
        echo "<pre>";
        print_r($user);
        echo "</pre>";
    }
?>
