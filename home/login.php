<?php
 if ( password_verify( $typPass, $encrypted_password ) ) {
        echo "<h1>Success</h1>";
      } else {
        echo "<h1>Fail</h1>";
      }
?>