<?php

    $result = false;

    $dbhost = 'localhost';
    $username = 'root';
    $password = '';
    $db = 'db';

    if( $_SERVER['REQUEST_METHOD']=='POST' ){

        $conn = new mysqli ( $dbhost,$username, $password, $db );
        if( $conn ){

            $sql='insert into `persons` ( `first_name`,`last_name`,`email_address` ) values (?,?,?);';
            $stmt=$conn->prepare( $sql );
            $stmt->bind_param('sss', $_POST['firstname'], $_POST['lastname'], $_POST['email'] );
            $result = $stmt->execute();

        }
        $conn->close();
    }

?>
<!doctype html>
<html>
    <head>
        <title>Simple Form submission example</title>
    </head>
    <body>
        <form method='post'>
            <input type='text' name='firstname' />
            <input type='text' name='lastname' />
            <input type='text' name='email' />

            <input type='submit' value='Submit' />

            <?php
                echo $result ? '<div>The database was updated</div>' : '';
            ?>
        </form>
    </body>
</html>
