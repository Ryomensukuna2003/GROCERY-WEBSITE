<!-- ! If CSS dosen't shows, up use commands below in terminal -->
<!-- ! npm install -D tailwindcss -->
<!-- ! npx tailwindcss init -->

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Small Basket</title>
    <!-- ! icon image -->
    <link rel="icon" type="image/x-icon" href="images\icons8-natural-food-64.png">
    <!-- ! other icon file -->
    
    <style>
        .number {
            padding-left:25rem;
            padding-top: 10rem;
            padding-right: 3rem;
            text-align:right;
        }
        
        .button {
          background-color:rgb(22, 163, 74);
          border: none;
          color: white;
          font-weight: 600;
          padding: 10px 20px;
          text-align: center;
          display: inline-block;
          margin: 10px 80px;
          cursor: pointer;
          border-radius: 16px;
        }
    
        .aside {
          width: 30%;
          height: 10%;
          padding-left: 15px;
          margin-left: 15px;
          float: right;
          font-style: italic;
        }
    </style>
</head>
<body  class="bg-white">
    <!-- main div -->
    <div>
        <!-- div 1 -->
        <div>
            
            <nav class="h-full bg-transparent flex justify-between" >
                <nav class="h-full bg-transparent flex " >
                    <img src="images\Screenshot 2022-09-30 140302.png" alt="" class="h-24 px-5 pt-4 py-6 pl-12">
                    <ul class="px-6 py-8 pt-8 flex space-x-7 justify-center font-semibold ">
                        <li class="cursor-pointer text-lg ">Revolution</li>
                        <li class="cursor-pointer text-lg ">Products</li>
                        <li class="cursor-pointer text-lg ">Advantages</li>
                        <li class="cursor-pointer text-lg ">Contact us</li>
                    </ul>
                </nav>
                    <ul class="px-6 py-6 flex space-x-7 justify-center font-semibold ">
                        <li class="login_button cursor-pointer text-lg pt-4  border-black"><a href="login_page.php" target="_top">Log in</a></li>
                        <button class="button ">
                            <a href="sign_up.php" target="_top">Sign Up</a>
                        </button>
                    </ul>
            </nav>
        </div>

                                                <!-- ! right side of page -->
        <!-- div 2 -->
        <div style="float:right; width:50%; padding-top: 100px;" >
                <p class="h-full w-full pr-20 pt-100" >
                    <img src="images\main_image.jpg" alt="">
                </p>
        <!-- div 3 -->
                <div class="number font-medium">
                    9569032860
                        <i class="fa-solid fa-phone"></i>
                        <br>
                    <a href="mshivanshu1264@gmail.com">
                        <p class="italic font-medium">
                            mshivanshu1264@gmail.com
                            <i class="fa-solid fa-link"></i>
                        </p>
                    </a>
                </div>
            </aside>
        </div>
    
                                                <!-- ! left side of page -->
        <!-- div 4-->
        <div style="float:left; width:50%;">
            <main>
                <div class=" pl-20 pt-40 text-5xl font-sans font-bold text-green-600">
                    Bring the store to your door
                </div>
            <p class="text-4xl pl-20 py-3 font-medium text-slate-400 ">
                Enjoy Healthy Life
            </p>
            <p class=" italic text-1xl pl-20 py-3 font-medium leading- text-slate-400">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Similique voluptatibus illo ea alias fugiat nulla eligendi consectetur officia repellendus, nam sed accusantium quibusdam doloremque iste sequi quam non laudantium, error culpa dolorum. 
            </p>
                <br>
        <!-- ! BUTTONS -->
        <!-- div 5 -->
            <div>
            <button onclick="alert('You have to Sign in First')" class="button ">ORDER NOW</button>
                <br>
                <br>
            
            </div>
        </main>
        <footer>
        
        </footer>
    </div>
    
    
</div>
</body>
</html>