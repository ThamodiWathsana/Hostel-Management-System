<?php
if(isset($_POST["txtPrice"])) 
{
    // Accept HTML Form Data
    $price = $_POST["txtPrice"]; 
    $type = $_POST["type"];
    $availability = $_POST["availability"];

    // Create a connection with MySQL Server
    $con = mysqli_connect("localhost:3306","dseuser","123","hosteldb");

    // Check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }

    // Perform SQL Operations
    $sql = "INSERT INTO room(room_Price, room_Type, Availability) VALUES ('$price', '$type', '$availability')";

    $ret=mysqli_query($con,$sql);    
    if($ret){
         //echo "<script>alert('Record inserted successfully');</script>";
        header('Location:paymentdetails.html');
        // Redirect to some page after successful insertion
        // header("Location: somepage.php");
        // exit();
    } else {
        echo "Error: " . mysqli_error($con);
    }

    // Disconnect from server
    mysqli_close($con);
}
?>


<html>
<head>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<div class="wrapper">
<body>
    <section class="room">
        <h2>Rooms</h2>
    </section>
    <section class='book-room'>

        <form id="check-in" method="post" action="#" onsubmit="return Validation()">

            <p class="book-fill-info2" for="price">Room Price</p>
            <input type="text" class="form-box" id="price" name="txtPrice" placeholder="Enter price"><br>

            <p class="book-fill-info" for="room-type">Room type</p>
            <select class="book-fill-info" name="type" id="type">
                <option value="">--Select--</option>
                <option value="AC" class="book-fill-info" >AC Room</option>
                <option value="nonAC" class="book-fill-info">Non AC Room</option>
            </select><br>

            <p class="book-fill-info" for="room-type">Availability</p>
            <select class="book-fill-info" name="availability" id="availability">
                <option value="">--Select--</option>
                <option value="occupied" class="book-fill-info">Occupied</option>
                <option value="availability" class="book-fill-info">Availability</option>
            </select><br>

            <button type="submit" class="btn text-white shadow-none custom-bg" onclick="Validation()">Save</button><br>
           <label>Total: $</label> <span id="totalPrice">0.00</span>
        </form>
    </section>
   <!-- <script type="text/javascript"></script>
<script>
    function calculateTotal() {
        var price = parseFloat(document.getElementById('txtPrice').value);
        var type = document.getElementsByName('type')[0].value;
        var availability = document.getElementsByName('availability')[0].value;

        // Perform some simple calculations
        var total = price * (type === 'AC' ? 1.2 : 1) * (availability === 'occupied' ? 0.8 : 1);

        document.getElementById('totalPrice').textContent = total.toFixed(2);
    }
</script>-->
<script type="text/javascript">
    function Validation()
    {
        var msg="# Fix these errors #\n";
        var flag=0;

        if(document.getElementById("price").value=="")
        {
            msg=msg+"Price can't be blank\n";
            flag=1;
        }
        if(document.getElementById("type").selectedIndex==0)
        {
            msg=msg+"Please select a room type\n";
            flag=1;
        }
        if(document.getElementById("availability").selectedIndex==0)
        {
            msg=msg+"Please select a type\n";
            flag=1;
        }
        if(flag==1)
        {
            alert(msg);
            return false;
        }
        return true;
    }
    
</script>
</body>
</div>


</html>