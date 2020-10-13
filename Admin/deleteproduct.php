<?php
    include "../connect.php";

    $query = "SELECT * FROM product";
    $result = mysqli_query($conn,$query);
    
    if(isset($_GET['id']))
    {
    $pid = $_GET['id'];
    }
    if($result->num_rows>0)
    {
        while($row=mysqli_fetch_array($result))
        {
            if(isset($pid))
            {
                if($row['product_id'] == $pid)
                {
                    $sql = "DELETE FROM product WHERE product_id = $pid";
                    $result = mysqli_query($conn,$sql);
                    header("Location: manageproducts.php");
                }
            }
        }
    }
?>
