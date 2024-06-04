<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
  }
  if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header("location: login.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Grandma's Kitchen</title>
     <!--Font awesome cdn link-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
     <link rel="stylesheet"href="reviews.css">
     <!--custom css file link-->
     <link rel="stylesheet" href="style.css">
     <link rel="stylesheet" href="cake recipes/recipestyle.css"> 
     <link rel="stylesheet" href="home.js"> 
</head>
<body>

    <!--Header section starts-->
    <header>
        <input type="checkbox" name="" id="toggler">
        <label for="toggler" class="fas fa-bars"></label>
        <a href="#" class="logo">Grandma's<span> Kitchen</span></a>
        <nav class="navbar">
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#products">Services</a>
            <a href="#review">Review</a>
            <a href="#contact">Contact</a>
        </nav>
        <div class="icons">
            <!-- <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-shopping-cart"></a> -->
            <a href="login.php" class="fas fa-user"></a>
            
        </div>
    </header>
     <!--Header section ends-->


     <!--Home section starts-->
    <section class="home" id="home">
        <div class="content">
            <h3>Fresh cakes</h3>
                    <span>original & organic recipes </span>
                    <p>"Welcome to our bakery, where dreams come true,
                        A heaven of sweetness, just for you.</p>
                <a href="#contact" class="btn">Contact Us Now!</a>
        </div>
    </section>
    <!--Home section ends-->


  <!--About section starts-->
<section class="about" id="about">
    <h1 class="heading"><span>about</span> us</h1>
    <div class="row">
        <div class="video-container">
            <video src="image/cakevideo.mp4" loop autoplay muted></video>
            <h3>best flowers sellers</h3>
        </div>
        <div class="content">
            <h3>Why Choose us?</h3>
            <p>Welcome to Grandma's Cake Bakery, where every bite brings a taste of nostalgia and homemade goodness. 
                <br>Our bakery is steeped in family tradition, crafting delectable treats with love and care, just like Grandma used to make. 
                <br>From moist cakes to delightful pastries, each creation is made from the finest ingredients and baked to perfection. 
                <br>Come indulge in the warmth of our oven and experience the sweetness of Grandma's touch in every bite.</p>
            <a href="#contact" class="btn">Contact Us</a>
        </div>
        
    </div>
</section>

  <!--About section ends-->

<!--icons section starts-->

<section class="icons-container">
    <div class="icons">
        <img src="image/cake whisking.jpeg" alt="">
        <div class="info">
            <h3>Whisk</h3>
            <span>Whisk all the ingredients well.</span>
        </div>
    </div>

    <div class="icons">
        <img src="image/cake bake.jpeg" alt="">
        <div class="info">
            <h3>Bake</h3>
            <span>Bake the cake as per your convenience</span>
        </div>
    </div>

    <div class="icons">
        <img src="image/cake piping.jpeg" alt="">
        <div class="info">
            <h3>offer & gits</h3>
            <span>on all orders</span>
        </div>
    </div>

    <div class="icons">
        <img src="image/Cupcake.jpeg" alt="">
        <div class="info">
            <h3>Done</h3>
            <span>Enjoy your delicious cake</span>
        </div>
    </div>

</section>

<!--icons section ends-->

<!--Products section stars-->

<section class="products" id="products">
    <h1 class="heading">latest <span>cakes</span></h1>
    <div class="box-container">
        <div class="box">
            <div class="image">
                <img src="image/services1.jpg" alt="">
            </div>
            <div class="content">
                <h3>
                    <a href="cake recipes/redvelvet.php">Fruit Cake</a>
                </h3>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="image/services2.jpg" alt="">
            </div>
            <div class="content">
                <h3>
                    <a href="cake recipes/redvelvet.php">Strawberry Cake</a>
                </h3>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="image/services3.jpg" alt="">
            </div>
            <div class="content">
                <h3>
                    <a href="cake recipes/redvelvet.php">Red Velvet Cake</a>
                </h3>   
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="image/services4.jpg" alt="">
            </div>
            <div class="content">
                <h3>
                    <a href="cake recipes/redvelvet.php">Cherry Cake</a>
                </h3>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="image/services5.jpg" alt="">
            </div>
            <div class="content">
                <h3>
                    <a href="cake recipes/redvelvet.php">Fruit & Nut Cake</a>
                </h3>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="image/services6.jpg" alt="">
            </div>
            <div class="content">
                <h3>
                    <a href="cake recipes/redvelvet.php">Pineapple Cake</a>
                </h3>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="image/services7.jpg" alt="">
            </div>
            <div class="content">
                <h3>
                    <a href="cake recipes/redvelvet.php">Black Forest Cake</a>
                </h3>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="image/services8.jpg" alt="">
            </div>
            <div class="content">
                <h3>
                    <a href="cake recipes/redvelvet.php">Chocolate Truffle Cake</a>
                </h3>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="image/services9.jpg" alt="">
            </div>
            <div class="content">
                <h3>
                    <a href="cake recipes/redvelvet.php">Chocolate Fudge Cake</a>
                </h3>
            </div>
        </div>
        </div>
    </div>
</section>

<!-- <div id="popup">
    <div class="popup-content">
        <img src="" alt="" id="popup-image">
        <span class="close">&times;</span>
    </div>
</div>

<script src="script.js"></script> -->

<!--Products section ends-->

<!--review section starts-->

<section class="review" id="review">
    <h1 class="heading"><span>Review</span> Us</h1>
    <div class="row">
    <div class="reviews"></div>
    <script>
const reviews_page_id = 1;
fetch("reviews.php?page_id=" + reviews_page_id).then(response => response.text()).then(data => {
	document.querySelector(".reviews").innerHTML = data;
	document.querySelector(".reviews .write_review_btn").onclick = event => {
		event.preventDefault();
		document.querySelector(".reviews .write_review").style.display = 'block';
		document.querySelector(".reviews .write_review input[name='name']").focus();
	};
	document.querySelector(".reviews .write_review form").onsubmit = event => {
		event.preventDefault();
		fetch("reviews.php?page_id=" + reviews_page_id, {
			method: 'POST',
			body: new FormData(document.querySelector(".reviews .write_review form"))
		}).then(response => response.text()).then(data => {
			document.querySelector(".reviews .write_review").innerHTML = data;
		});
	};
});
</script>
    </div>

        <!-- <nav class="navtop1">
	    	<div>
	    		<h1>Reviews System</h1>
	    	</div>
	    </nav>
		<div class="content home">

<div class="reviews"></div>
<script>
const reviews_page_id = 1;
fetch("reviews.php?page_id=" + reviews_page_id).then(response => response.text()).then(data => {
	document.querySelector(".reviews").innerHTML = data;
	document.querySelector(".reviews .write_review_btn").onclick = event => {
		event.preventDefault();
		document.querySelector(".reviews .write_review").style.display = 'block';
		document.querySelector(".reviews .write_review input[name='name']").focus();
	};
	document.querySelector(".reviews .write_review form").onsubmit = event => {
		event.preventDefault();
		fetch("reviews.php?page_id=" + reviews_page_id, {
			method: 'POST',
			body: new FormData(document.querySelector(".reviews .write_review form"))
		}).then(response => response.text()).then(data => {
			document.querySelector(".reviews .write_review").innerHTML = data;
		});
	};
});
</script>

</div> -->

<!--review section ends-->


<!--contact section starts-->
<section class="contact" id="contact">
    <h1 class="heading"><span>contact</span> us</h1>
    <div class="row">
        <form action="cake.php" method="post">
            <input type="text" class="box" required name="name" placeholder="Name">
            <input type="email" class="box" required name="email" placeholder="Email">
            <input type="int" class="box" required name="number" placeholder="Number">
            <input type="text" class="box" required name="message" placeholder="Message" id="" cols="30" rows="10">
            <!-- <textarea name="" class="box" required name="message" placeholder="Message" id="" cols="30" rows="10"></textarea> -->
            <input type="submit" value="send message" class="btn" name="contact">
        </form>
        <div class="image">
            <img src="img/doughnu.jpg" alt="">
        </div>
    </div>
    
</section>
<!--contact section ends-->

<!--footer section starts-->
<section class="footer">
    <div class="box-container">
        <div class="box">
            <h3>quick links</h3>
            <a href="#">home</a>
            <a href="#">about</a>
            <a href="#">products</a>
            <a href="#">review</a>
            <a href="#">contact</a>
        </div>
        <!-- <div class="box">
            <h3>Extra links</h3>
            <a href="#">my account</a>
            <a href="#">my order</a>
            <a href="#">my favorites</a>
        </div> -->
        <div class="box">
            <h3>Locations</h3>
            <a href="#">india</a>
            <a href="#">USA</a>
            <a href="#">Japan</a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#">+123-456-7890</a>
            <a href="#">grandmaskitchen@gmail.com</a>
            <a href="#">India, Maharashtra - 123456</a>
        </div>
    </div>
    <div class="credit">
        Grandma's Kitchen |<span> All Right Reserved </span>| @2024.
    </div>
</section>

<!--footer section ends-->

</body>
</html>