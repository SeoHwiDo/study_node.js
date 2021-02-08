<?php
    $oriPass = $_POST[ 'pass' ];
    $encryPass=password_hash ( $oriPass , PASSWORD_DEFAULT );
?>