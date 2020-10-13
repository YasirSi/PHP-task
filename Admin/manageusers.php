<?php

include "../connect.php";
include "deleteuser.php";

$sql = mysqli_query($conn,"SELECT * FROM users");
echo '<h2> Users </h2>
       <table id="table" border="1">
       <tr>
       <th>Id</th>
       <th>User Name</th>
       <th>Password</th>
       <th>Email</th>
       <th>Role</th>
       <th>Action</th>
       </tr>';


foreach($sql as $row)
{
    echo "<tr>
          <td>{$row['user_id']}</td>
          <td>{$row['user_name']}</td>
          <td>{$row['password']}</td>
          <td>{$row['user_email']}</td>
          <td>{$row['role']}</td>
          <td>
            <a href='edituser.php?id=".$row['user_id']."'>Edit</a>
            <a href='deleteuser.php?id=".$row['user_id']."'>Delete</a>
          </td>
          </tr>";

}

echo '</table>';
?>
