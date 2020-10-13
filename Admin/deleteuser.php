<?php
    include "../connect.php";

    $query = "SELECT * FROM users";
    $result = mysqli_query($conn,$query);

    if(isset($_GET['id']))
    {
    $uid = $_GET['id'];
    }

    if($result->num_rows>0)
    {
        while($row=mysqli_fetch_array($result))
        {
            if(isset($uid))
            {
               if($row['user_id'] == $uid)
               {
                  $sql = "DELETE FROM users WHERE user_id = $uid";
                  $result = mysqli_query($conn,$sql);
                  header("Location: manageusers.php");
               }
            }
        }
    }
?>
