<?php

session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
  header("location: login_page.php");
}


?>

<!DOCTYPE html>

<head>
  <title>Small Basket</title>
  <!-- ! icon image -->
  <link rel="icon" type="image/x-icon" href="images\icons8-natural-food-64.png" />
  <!-- ! font awesome cdn link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <link rel="stylesheet" href="css\style.css" />
  <script src="add_to_Cart.js"></script>
</head>

<body>
  <!-- !  header section starts  -->
<div class="container">
  <header>
    <div class="header-1">
      <a href="#" class="logo">
        <i class="fas fa-shopping-basket"></i>
        Foodies
      </a>

      <form action="" class="search-box-container">
        <input type="search" id="search-box" placeholder="Search here...." />
        <label for="search-box" class="fas fa-search"></label>
      </form>
    </div>

    <div class="header-2">
      <div id="menu-bar" class="fas fa-bars"></div>

      <nav class="navbar">
        <a href="#home">Home</a>
        <a href="#category">Category</a>
        <a href="#product">Product</a>
        <a href="#deal">Deal</a>

        <a class="nav-link" href="logout.php">Logout</a>

      </nav>

      <div class="icons">
        <a href="#" class="fas fa-shopping-cart shopping">


         <!-- <div class="shopping"> -->   
            <span class="quantity">0</span>
          <!-- </div>  -->    
        </a>


        <a href="#" class="fas fa-heart"></a>
        <a href="#" class="fas fa-user-circle"></a>
      </div>
    </div>
   
  </header>
  <div class="list">
          
          </div>
      </div>

     
      <div class="card">
          <h1>Card</h1>
          <ul class="listCard">
          </ul>
          <div class="checkOut">
              <div class="total">0</div>
              <div class="closeShopping">Close</div>
          </div>
      </div>


      

  <!-- ! header section ends -->

  <!-- ! home section starts  -->

  <section class="home" id="home">
    <div class="image">
      <img src="images\photo_2022-11-09_01-56-31.jpg" />
    </div>

    <div class="content">
      <span>Fresh and Organic</span>
      <h3>Online Grocery Store & Delivery</h3>
      <a href="#" class="btn">Get started</a>
    </div>
  </section>

  <!-- ! home section ends -->

  <!-- ! banner section starts  -->

  <section class="banner-container">
    <div class="banner">
      <img src="images/banner-1.jpg" />
      <div class="content">
        <h3>Special offer</h3>
        <p>Upto 45% off</p>
        <a href="#" class="btn">Check out</a>
      </div>
    </div>

    <div class="banner">
      <img src="images/banner-2.jpg" />
      <div class="content">
        <h3>Limited offer</h3>
        <p>Upto 50% off</p>
        <a href="#" class="btn">Check out</a>
      </div>
    </div>
  </section>

  <!-- ! banner section ends -->

  <!-- ! category section starts  -->

  <section class="category" id="category">
    <h1 class="heading">Shop by category</h1>
    <!-- ! Main Div -->
    <div class="box-container">
      <!-- ! Div 1 -->
      <div class="box">
        <h3>Vegetables</h3>
        <p>Upto 50% off</p>
        <img src="images/category-1.png" />
        <a href="#" class="btn">Shop now</a>
      </div>
      <!-- ! Div 2 -->
      <div class="box">
        <h3>Juice</h3>
        <p>Upto 44% off</p>
        <img src="images/category-2.png" />
        <a href="#" class="btn">Shop now</a>
      </div>
      <!-- ! Div 3 -->
      <div class="box">
        <h3>Meat</h3>
        <p>Upto 35% off</p>
        <img src="images/category-3.png" />
        <a href="#" class="btn">Shop now</a>
      </div>
      <!-- ! Div 4 -->
      <div class="box">
        <h3>Fruit</h3>
        <p>Upto 12% off</p>
        <img src="images/category-4.png" />
        <a href="#" class="btn">Shop now</a>
      </div>
    </div>
  </section>

  <!-- ! category section ends -->

  <!-- ! product section starts  -->

  <section class="product" id="product">
    <h1 class="heading">Latest <span>Products</span></h1>
    <!-- ! Main Div -->
    <div class="box-container">
      <!-- ! Div 1 -->
      <div class="box">

        <img src="images/product-1.png" />
        <h3>Banana</h3>

        <div class="price">₹10.50 <span> ₹13.20 </span></div>

        <a href="#" class="btn">Add to cart</a>
      </div>
      <!-- ! Div 2 -->
      <div class="box">

        <img src="images/product-2.png" />
        <h3>Tomato</h3>

        <div class="price">₹10.50 <span> ₹13.20 </span></div>

        <a href="#" class="btn">Add to cart</a>
      </div>
      <!-- ! Div 3 -->
      <div class="box">

        <img src="images/product-3.png" />
        <h3>Orange</h3>

        <div class="price">₹10.50 <span> ₹13.20 </span></div>

        <a href="#" class="btn">Add to cart</a>
      </div>
      <!-- ! Div 4 -->
      <div class="box">

        <img src="images/product-4.png" />
        <h3>Milk</h3>

        <div class="price">₹10.50 <span> ₹13.20 </span></div>

        <a href="#" class="btn">Add to cart</a>
      </div>
      <!-- ! Div 5 -->
      <div class="box">

        <img src="images/product-5.png" />
        <h3>Grapes</h3>

        <div class="price">₹10.50 <span> ₹13.20 </span></div>

        <a href="#" class="btn">Add to cart</a>
      </div>
      <!-- ! Div 6 -->
      <div class="box">

        <img src="images/product-6.png" />
        <h3>Almonds</h3>

        <div class="price">₹10.50 <span> ₹13.20 </span></div>

        <a href="#" class="btn">Add to cart</a>
      </div>
      <!-- ! Div 7 -->
      <div class="box">

        <img src="images/product-7.png" />
        <h3>Apple</h3>

        <div class="price">₹10.50 <span> ₹13.20 </span></div>

        <a href="#" class="btn">Add to cart</a>
      </div>
      <!-- ! Div 8 -->
      <div class="box">

        <img src="images/product-8.png" />
        <h3>Butter</h3>

        <div class="price">₹10.50 <span> ₹13.20 </span></div>

        <a href="#" class="btn">Add to cart</a>
      </div>
    </div>
  </section>

  <!-- ! product section ends -->

  <!-- ! deal section starts  -->

  <section class="deal" id="deal">
    <div class="content">
      <h3 class="title">Deal of the day</h3>
      <p>
        You Say Grocery, We Say Yes! <br />
        Widest Range I Big Savings
      </p>

      <div class="count-down">
        <div class="box">
          <h3 id="day">00</h3>
          <span>Day</span>
        </div>
        <div class="box">
          <h3 id="hour">00</h3>
          <span>Hour</span>
        </div>
        <div class="box">
          <h3 id="minute">00</h3>
          <span>Minute</span>
        </div>
        <div class="box">
          <h3 id="second">00</h3>
          <span>Second</span>
        </div>
      </div>

      <a href="#" class="btn">Check the deal</a>
    </div>
  </section>

  <!-- ! deal section ends -->
</body>

</html>