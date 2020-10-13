<?php

include "../connect.php";
include "deleteproduct.php";


$sql = mysqli_query($conn,"SELECT * FROM product");
echo '<h2> Products </h2>
       <table id="table" border="1">
       <tr>
       <th>Product Id</th>
       <th>Product Name</th>
       <th>Product Price</th>
       <th>Product Quantity</th>
       <th>Action</th>
       </tr>';

foreach($sql as $row)
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
