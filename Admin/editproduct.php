<?php
    session_start();
    include "../connect.php";
    $errors = array();

    $query = "SELECT * FROM product";

    $result = mysqli_query($conn,$query);
    $data = array();

    if($result->num_rows>0)
    {
        while($row=mysqli_fetch_array($result))
        {
            if(isset($_GET['id'])){
                if($row['product_id'] == $_GET['id'])
                {
                $data['id'] = $row['product_id'] ;
                $data['productname'] = $row['product_name'];
                $data['productprice'] = $row['product_price'];
                $data['productquantity'] = $row['product_quantity'];

                }
            }
        }
    }

    if(isset($_POST['edit']))
    {
        $id =$_POST['product_id'];
         $ProductName = $_POST['product_name'];
        $ProductPrice = $_POST['product_price'];
        $ProductQuantity = $_POST['product_quantity'];

        $sql = "UPDATE product set `product_name` = '$ProductName', `product_price` = '$ProductPrice', `product_quantity` = '$ProductQuantity' WHERE product_id = $id ";
        $conn ->query($sql);
    }

?>

<html>
<head>
    <title>
        Update
    </title>
</head>
<body>
   <div id="wrapper">
        <div id="update">
        <div><?php if(isset($message)) { echo $message; } ?></div>

        <div id='update'>
        <h1>UPDATE</h1>
        <form method='POST' action='editproduct.php'>

        <label for='productid'>
         ProductId
         <input type='number' name='productid' value="<?php if(isset($data['id'])){ echo $data['id'] ;} ?>" readonly>
         </label>
         <br>

         <label for='productname'>
         ProductName
         <input type='text/number' name='productname' value="<?php if(isset($data['productname'])){echo $data['productname'];} ?>"  >
         </label>
         <br>

         <label for='productprice'>
         ProductPrice
         <input type='productprice' name='productprice' value=" <?php if(isset($data['productprice'])){echo $data['productprice']; }?>" >
         </label>
         <br>

         <label for='productquantity'>
         ProductQuantity
         <input type='productquantity' name='productquantity' value="<?php if(isset($data['productquantity'])){echo $data['productquantity'];} ?>" >
         </label>
         <br>

         <p>
         <input type='submit' name='edit' value='EDIT PRODUCT'>
         </p>

         </form>
         </div>


        </div>
    </div>
</body>
</html>
