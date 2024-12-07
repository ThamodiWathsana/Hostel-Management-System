<?php
session_start();

$tdif=time()-$_SESSION["LAT"];

if($tdif<=10)
{
    $_SESSION["LAT"]=time();
}
else
{
    header("Location:logout.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="style123.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


</head>
<body>  

<!-- header session starts -->
<section class="header">
    <a href="home.php" class="logo" id="menu-btn"><img src="logo.jpg" width="50%"></a>

    <nav class="navbar">
        <a href="home.php">Home</a>
        <a href="about1.php">About</a>
        <a href="userdetails.html">User</a>
        <a href="room.php">Room</a>
    </nav>

</section>
<!-- header session ends -->

<section class="home">
    <div class="swiper home-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide slide" style="background: url('img2.jpg') no-repeat center center; background-size: cover;">
                <div class="content">
                    <span class="subtitle">explore, discover, book</span>
                    <h3 class="title">Single Room</h3>
                    <a href="room.php" class="btn">More</a>
                </div>
            </div>

            <div class="swiper-slide slide" style="background: url('img3.jpg') no-repeat center center; background-size: cover;">
                <div class="content">
                    <span class="subtitle">explore, discover, book</span>
                    <h3 class="title">Double Room</h3>
                    <a href="room.php" class="btn">More</a>
                </div>
            </div>

            <div class="swiper-slide slide" style="background: url('img4.jpg') no-repeat center center; background-size: cover;">
                <div class="content">
                    <span class="subtitle">explore, discover, book</span>
                    <h3 class="title">Triple Room</h3>
                    <a href="room.php" class="btn">More</a>
                </div>
            </div>
        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

    </div>
</section>

<!--home about section starts-->
<section class="home-about">
	<div class="image">
		<img src="about1.jpg" alt="">
	</div>

	<div class="content">
		<h3>About Us</h3>
		<p>Welcome to NIBM Hostel, where community meets comfort! Our hostel is more than just a place to stay; it's a vibrant hub for students seeking a supportive environment to thrive in. With modern facilities, cozy accommodations, and a welcoming atmosphere, we strive to create a home away from home for every resident. Join us at NIBM Hostel, where friendships flourish and memories are made!</p>
		<a href="about1.php" class="btn">read more</a>
	</div>
</section>
<!--home about section ends-->

<!--home room section starts-->
<section class="home-room">
	<h1 class="heading-title">our rooms</h1>
	<div class="box-container">
		<div class="box">
			<div class="image">
				<img src="room1.jpg">
			</div>
			<div class="content">
				<h3>Single Room</h3>
				<p>Single bed with Non AC & AC</p>
				<p>Rs. 20000/=</p>
				<a href="room.php" class="btn">Book Now</a>
			</div>
		</div>

		<div class="box">
			<div class="image">
				<img src="room2.jpg">
			</div>
			<div class="content">
				<h3>Double Room</h3>
				<p>Double/two beds with Non AC & AC</p>
				<p>Rs. 40000/=</p>
				<a href="room.php" class="btn">Book Now</a>
			</div>
		</div>

		<div class="box">
			<div class="image">
				<img src="room3.jpg">
			</div>
			<div class="content">
				<h3>Triple Room</h3>
				<p>Triple/three beds with Non AC & AC</p>
				<p>Rs. 80000/=</p>
				<p></p>
				<a href="room.php" class="btn">Book Now</a>
			</div>
		</div>
		<!--more rooms can added-->
	</div>
	<div class="load-more">
		<a href="room.php" class="btn">load more</a>
	</div>
</section>
<!--home room section ends-->



<!-- footer section starts -->
<section class="footer">
    <div class="box-container">
        <div class="box">
            <h3>quick links</h3>
            <a href="home.php"><i class="fas fa-angle-right"></i> Home</a>
            <a href="about.html"><i class="fas fa-angle-right"></i> About</a>
            <a href="contact.html"><i class="fas fa-angle-right"></i> Contact</a>
        </div>

        <div class="box">
            <h3>Contact Info</h3>
            <a href="#"><i class="fas fa-phone"></i>+94- 712895038</a>
            <a href="#"><i class="fas fa-phone"></i> +94- 777969069</a>
            <a href="#"><i class="fas fa-envelope"></i> KalaniMliyanage@gmail.com</a>
            <a href="#"><i class="fas fa-map"></i> Galle , Sri Lanka- 8000</a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#"><i class="fab fa-facebook-f"></i> Facebook </a>
            <a href="#"><i class="fab fa-twitter"></i> Twitter </a>
            <a href="#"><i class="fab fa-instagram"></i> Instagram</a>
            <a href="#"><i class="fab fa-youtube"></i> Youtube </a>
        </div>
    </div>

    <div class="credit">Created by <span>DSE23.1F Batch group members</span> | All rights reserved!</div>
</section>
<!-- footer section ends -->

<!-- swiper js file link -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- custom js file link -->
<script type="text/javascript" src="script.js"></script>

</body>
</html>