<?php session_start();
require('includes/config.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link href="Cs/autobio.css" rel="stylesheet" />
    <script src="Js/jquery-3.2.1.min.js"></script>

    <style>
        @import url('https://fonts.googleapis.com/css?family=Josefin+Sans|Lobster+Two|Pacifico');
    </style>
</head>
<body>
    <section>
        <!-- This is Section 1 of the page -->
        <div class="section1">
          
            <div class="navigation">
                <img src="Images/if_List_Text_Menu_Numbers_String_Burger_1329080.png" class="toggle" />
                <a class="cgr" >Categories</a>
            </div>
            <div>
              <a href="autobio.html" class="submenu">Autobiography</a>
               <a href="romance.html" class="submenu">Romance</a>
               <a href="fiction.html" class="submenu">Fiction</a>
               <a href="politics.html" class="submenu">Politics</a>
               <a href="txtbooks.html" class="submenu">Textbooks & Study Guides</a>
                
            </div>
        </div>
            
            
            
             <!-- This is section 2 of the page -->
        <div class="section2">
            <input type="text" placeholder="search" class="txtsrch" /><button type="button" class="btnsrch">Search</button>
            <img src="Images/if_call_322424.png" class="call-icon" />
            <span class="ph-no">+919833179374</span>


            <nav>
                <a href="Home.html" class="menuitem" >Home</a>
                <a class="menuitem">Wish list(0)</a>
                <a class="menuitem">My Account</a>
                <a href="C:\xampp\htdocs\sellanybookstore\sellanybookstore\php\Shopping_Cart\Cart.php" class="menuitem">Shopping Cart</a>
                <a class="menuitem">Checkout</a>
            
            </nav>
            
            <div class="auto">
                <h3>CATEGORY : AUTOBIOGRAPHY</h3>
            </div>    
        
             <p class="featuredpara">Latest</p>

            <div class="products">
                <fieldset class="col1">
                    <legend>New</legend>
                    <img src="Images/gandhi-my-experiments-with-truth-an-autobiography-original-imaddpw3f2exaukv.jpeg" class="img1" />
                    <h3>Rs 120<strike>Rs 125</strike></h3>
                    <h4>gandhi-my-experiments-with-truth-an-autobiography</h4>
                    <p>The Father of the Indian Nation tells the story of his life in My Experiments With Truth, the autobiography of Mahatma Gandhi.</p>
                </fieldset>

                <fieldset class="col2">
                    <legend>New</legend>
                    <img src="Images/wings-of-fire-an-autobiography-original-imaer2yzjmz5tzuj.jpeg" class="img1" />
                    <h3>Rs 238<strike>Rs 295</strike></h3>
                    <h4>wings-of-fire-an-autobiography</h4>
                    <p> An Autobiography is a book that documents the life of A. P. J. Abdul Kalam, and inspires the readers to ignite the fire within themselves.</p>
                </fieldset>

                <fieldset class="col3" >
                    <legend>New</legend>
                    <img src="Images/msd-the-man-the-leader-original-imae3j9ztckze98g.jpeg"    class="img1" />
                    <h3>Rs 224<strike>Rs 299</strike></h3>
                    <h4>msd-the-man-the-leader</h4>
                    <p>It talks about Dhoni’s struggles during his early years, examines his cricketing career and his role as a captain par excellence</p>
                </fieldset>
            </div>
            
              <p class="featuredpara">Featured</p>

            <div class="products">
                <fieldset class="col1">
                    <legend>Hot Deal</legend>
                    <img src="Images/the-diary-of-a-young-girl-original-imadx2frcqhmdzuk.jpeg" class="img1" />
                    <h3>Rs 160<strike>Rs 350</strike></h3>
                    <h4>the-diary-of-a-young-girl </h4>
                    <p>The single most poignant true-life story to emerge from the Second World War.</p>
                </fieldset>

                <fieldset class="col2">
                    <legend>Hot Deal</legend>
                    <img src="Images/i-am-a-teacher-original-imadp8xnbhbkfqah.jpeg" class="img1" />
                    <h3>Rs 100<strike>Rs 280</strike></h3>
                    <h4>i-am-a-teacher </h4>
                    <p> Am a Teacher: My Trysts with Life, Truth, System and Happiness 1st Edition is about the importance and the role of a teacher in everyone’s life.</p>
                </fieldset>

                <fieldset class="col3">
                    <legend>Hot Deal</legend>
                    <img src="Images/playing-it-my-way-my-autobiography-original-imaectzf9pbuerq6.jpeg" class="img1" />
                    <h3>Rs 120<strike>Rs 250</strike></h3>
                    <h4>playing-it-my-way</h4>
                    <p>The greatest run-scorer in the history of cricket,Sachin Tendulkar retired in 2013 after an astonishing 24 years at the top.</p>
                </fieldset>
            </div>
            
            </div>
    </section>
    
     <div class="background"></div>

    <div class="footer">

        <div class="outer">
            <div class="inner">
                <h4>Information</h4>
                <a>About</a>
                <a>Delivery Information</a>
                <a>Privacy Policy</a>
                <a>Tearm & Condition</a>
            </div>
            <div class="inner2">
                <h4>Costomer Information</h4>
                <a>Contact Us</a>
                <a>Return</a>
                <a>Site Map</a>
            </div>
           <div class="inner">
                <h4>My Account</h4>
                <a>Order History</a>
                <a>Wish list</a>
                <a>News</a>
            </div>
            <div class="inner2">
                <h4>Follow Us</h4>
                <a>Facebook</a>
                <a>Twitter</a>
                <a>Google +</a>
                <a>Youtube</a>
            </div>
        </div>

        <hr />
        <div class="copyright">
            <span>Powered by TE IT © 2018</span>
        </div>

    </div>
