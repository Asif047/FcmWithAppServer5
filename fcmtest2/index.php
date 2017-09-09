
        <?php
        // put your code here
        
        $host="localhost";
        $db_user="root";
        $db_password="";
        $db_name="fcmdb2";
        
        $con=  mysqli_connect($host, $db_user, $db_password, $db_name);
        if($con)
            echo "connection successful";
        else
            echo "connection failed";
        
        
        ?>
 