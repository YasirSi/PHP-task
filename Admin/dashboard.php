<?php

include "../connect.php";

$sql = mysqli_query($conn, "SELECT * FROM users");
echo '<h2> Users </h2>
       <table border ="1px;">
       <tr>
       <th>Id</th>
       <th>User Name</th>
       <th>Password</th>
       <th>Email</th>
       <th>Role</th>
       <th>Action</th>
       </tr>';


 while($row = mysqli_fetch_array($sql))
{
    echo "<tr>
          <td>{$row['user_id']}</td>
          <td>{$row['user_name']}</td>
          <td>{$row['password']}</td>
          <td>{$row['user_email']}</td>
          <td>{$row['user_role']}</td>
          <td>
          <a href='edituser.php?id=".$row['user_id']."'>Edit</a>
          <a href='deleteuser.php?id=".$row['user_id']."'>Delete</a>
          </td>

          </tr>";

}

echo '</table>';


$sql1 = mysqli_query($conn, "SELECT * FROM product");
echo '<h2>Products List</h2>
       <table border = "1px">
       <tr>
       <th>Product Id</th>
       <th>Product Name</th>
       <th>Product Price</th>
       <th>Product Quantity</th>
       <th>Action</th>
       </tr>';


foreach($sql1 as $row)
{
    echo "<tr>
          <td>{$row['product_id']}</td>
          <td>{$row['product_name']}</td>
          <td>{$row['product_price']}</td>
          <td>{$row['product_quantity']}</td>
          <td>
          <a href='editproduct.php?id=".$row['product_id']."'>Edit</a>
          <a href='deleteproduct.php?id=".$row['product_id']."'>Delete</a>
          </td>
          </tr>";

}

echo '</table>';



?>

<html>
   <head></head>

   <body>
      <a href='../login.php'>Login</a>
   </body>

</html>
