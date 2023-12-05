<!DOCTYPE html>
<html lang="en">

<head>
   <title>menu</title>
   <link rel="stylesheet" href="css/new.css">
   <link rel="stylesheet" href="menu.css">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="new.css">
   <link rel="stylesheet" href="css/bootstrap.css">
   <link rel="stylesheet" href="css/bootstrap-grid.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

   <link rel="icon" type="image/x-icon" href="./images/food2.ico">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@1,700&display=swap" rel="stylesheet">

</head>

<body class="good">

   <?php include 'header.php'; ?>
   <main>

      <div class="container">
         <div class="row">
            <div class="col-md-3">
               <div id="cart">
                  <h2>Shopping Cart</h2>
                  <ul id="cart-items"></ul>
                  <p>Total: $<span id="cart-total">0.00</span></p>
                  <div id="checkOutBtnHolda">
                     <a href=""><button type="button" class="menu-btn1" id="">Checkout</button></a>
                  </div>
               </div>
            </div><!--------end of col-md-3------->
            <div class="col-md-9">
               <section class="menu1">
                  <div class="menu-container">
                     <div class="menu-head">
                        <h2 class="color">Special Food Menu</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod accusantium porro tempora
                           aliquid
                           officiis voluptate necessitatibus minus obcaecati. Quod perferendis numquam dignissimos odio
                           nobis
                           asperiores!</p>
                     </div>

                     <div class="menu-btns">
                        <button type="button" class="menu-btn active-btn" id="featured">Featured</button>
                        <button type="button" class="menu-btn" id="today-special">Today's special</button>
                        <button type="button" class="menu-btn" id="new-arrival">Coming soon</button>
                     </div>

                     <div class="food-items">
                        <!-- item -->
                        <div class="food-item featured">
                           <div class="food-img">
                              <img src="images/food23.jpg" alt="food image">
                           </div>
                           <div class="food-content">
                              <h2 class="food-name">Banana Bread With Butter & Milk</h2>
                              <div class="line"></div>
                              <h3 class="food-price">$25.00</h3>
                              <!-- <ul class="rating">
                                 <li><i class="fas fa-star"></i></li>
                                 <li><i class="fas fa-star"></i></li>
                                 <li><i class="fas fa-star"></i></li>
                                 <li><i class="fas fa-star"></i></li>
                                 <li><i class="far fa-star"></i></li>
                              </ul> -->
                              <p class="category">Categories: <span>Featured</span></p>
                           </div>
                           <div> <button type="button" class="menu-btn1" id="">Add to cart</button></div>
                        </div>
                        <!-- end of item -->

                        <!-- item -->
                        <div class="food-item today-special">
                           <div class="food-img">
                              <img src="foods/barbecue.jpg" alt="food image">
                           </div>
                           <div class="food-content">
                              <h2 class="food-name">Barbecue</h2>
                              <div class="line"></div>
                              <h3 class="food-price">$20.00</h3>
                              <!-- <ul class="rating">
                                 <li><i class="fas fa-star"></i></li>
                                 <li><i class="fas fa-star"></i></li>
                                 <li><i class="fas fa-star"></i></li>
                                 <li><i class="fas fa-star"></i></li>
                                 <li><i class="far fa-star"></i></li>
                              </ul> -->
                              <p class="category">Categories: <span>Today's Special</span></p>
                           </div>
                           <div> <button type="button" class="menu-btn1" id="">Add to cart</button></div>
                        </div>
                        <!-- end of item -->

                        <!-- item -->
                        <div class="food-item new-arrival">
                           <div class="food-img">
                              <img src="foods/barbecued-roasted-duck-ramen.jpg" alt="food image">
                           </div>
                           <div class="food-content">
                              <h2 class="food-name">Barbecued Roasted Duck Ramen</h2>
                              <div class="line"></div>
                              <h3 class="food-price">$35.00</h3>
                              <!-- <ul class="rating">
                                 <li><i class="fas fa-star"></i></li>
                                 <li><i class="fas fa-star"></i></li>
                                 <li><i class="fas fa-star"></i></li>
                                 <li><i class="fas fa-star"></i></li>
                                 <li><i class="far fa-star"></i></li>
                              </ul> -->
                              <p class="category">Categories: <span>Coming soon</span></p>
                           </div>
                           <div> <button type="button" class="menu-btn1" id="">Add to cart</button></div>
                        </div>
                        <!-- end of item -->

                        <!-- item -->
                        <div class="food-item featured">
                           <div class="food-img">
                              <img src="foods/bread-with-seeds-and-butter.jpg" alt="food image">
                           </div>
                           <div class="food-content">
                              <h2 class="food-name">Bread With Seeds & Butter</h2>
                              <div class="line"></div>
                              <h3 class="food-price">$27.00</h3>
                              <!-- <ul class="rating">
                                 <li><i class="fas fa-star"></i></li>
                                 <li><i class="fas fa-star"></i></li>
                                 <li><i class="fas fa-star"></i></li>
                                 <li><i class="fas fa-star"></i></li>
                                 <li><i class="far fa-star"></i></li>
                              </ul> -->
                              <p class="category">Categories: <span>Featured</span></p>
                           </div>
                           <div> <button type="button" class="menu-btn1" id="">Add to cart</button></div>
                        </div>
                        <!-- end of item -->

                        <!-- item -->
                        <div class="food-item today-special">
                           <div class="food-img">
                              <img src="foods/breakfast-sandwich-with-hummus-spread-and-fresh-vegetables.jpg"
                                 alt="food image">
                           </div>
                           <div class="food-content">
                              <h2 class="food-name">Breadfast Sandwich</h2>
                              <div class="line"></div>
                              <h3 class="food-price">$15.00</h3>
                              <!-- <ul class="rating">
                                 <li><i class="fas fa-star"></i></li>
                                 <li><i class="fas fa-star"></i></li>
                                 <li><i class="fas fa-star"></i></li>
                                 <li><i class="fas fa-star"></i></li>
                                 <li><i class="far fa-star"></i></li>
                              </ul> -->
                              <p class="category">Categories: <span>Today's Special</span></p>
                           </div>
                           <div> <button type="button" class="menu-btn1" id="">Add to cart</button></div>
                        </div>
                        <!-- end of item -->

                        <!-- item -->
                        <div class="food-item new-arrival">
                           <div class="food-img">
                              <img src="foods/brunch-skillet-with-eggs-and-tomatoes.jpg" alt="food image">
                           </div>
                           <div class="food-content">
                              <h2 class="food-name">Brunch Skillet</h2>
                              <div class="line"></div>
                              <h3 class="food-price">$10.00</h3>
                              <!-- <ul class="rating">
                                 <li><i class="fas fa-star"></i></li>
                                 <li><i class="fas fa-star"></i></li>
                                 <li><i class="fas fa-star"></i></li>
                                 <li><i class="fas fa-star"></i></li>
                                 <li><i class="far fa-star"></i></li>
                              </ul> -->
                              <p class="category">Categories: <span>New Arrivals</span></p>
                           </div>
                           <div> <button type="button" class="menu-btn1" id="">Add to cart</button></div>
                        </div>
                        <!-- end of item -->

                        <!-- item -->
                        <div class="food-item featured">
                           <div class="food-img">
                              <img src="foods/chicken-breast-steaks-with-beetroot.jpg" alt="food image">
                           </div>
                           <div class="food-content">
                              <h2 class="food-name">Chicken Breast Steaks</h2>
                              <div class="line"></div>
                              <h3 class="food-price">$15.00</h3>
                              <!-- <ul class="rating">
                                 <li><i class="fas fa-star"></i></li>
                                 <li><i class="fas fa-star"></i></li>
                                 <li><i class="fas fa-star"></i></li>
                                 <li><i class="fas fa-star"></i></li>
                                 <li><i class="far fa-star"></i></li>
                              </ul> -->
                              <p class="category">Categories: <span>Featured</span></p>
                           </div>
                           <div> <button type="button" class="menu-btn1" id="">Add to cart</button></div>
                        </div>
                        <!-- end of item -->

                        <!-- item -->
                        <div class="food-item today-special">
                           <div class="food-img">
                              <img src="foods/chicken-legs-with-tomatoes-peppers-and-oranges.jpg" alt="food image">
                           </div>
                           <div class="food-content">
                              <h2 class="food-name">Chicken Legs</h2>
                              <div class="line"></div>
                              <h3 class="food-price">$29.00</h3>
                              <!-- <ul class="rating">
                                 <li><i class="fas fa-star"></i></li>
                                 <li><i class="fas fa-star"></i></li>
                                 <li><i class="fas fa-star"></i></li>
                                 <li><i class="fas fa-star"></i></li>
                                 <li><i class="far fa-star"></i></li>
                              </ul> -->
                              <p class="category">Categories: <span>Today's Special</span></p>
                           </div>
                           <div> <button type="button" class="menu-btn1" id="">Add to cart</button></div>
                        </div>
                        <!-- end of item -->

                        <!-- item -->
                        <div class="food-item new-arrival">
                           <div class="food-img">
                              <img src="foods/eggplant-cannelloni.jpg" alt="food image">
                           </div>
                           <div class="food-content">
                              <h2 class="food-name">Eggplant Cannelloni</h2>
                              <div class="line"></div>
                              <h3 class="food-price">$35.00</h3>
                              <!-- <ul class="rating">
                                 <li><i class="fas fa-star"></i></li>
                                 <li><i class="fas fa-star"></i></li>
                                 <li><i class="fas fa-star"></i></li>
                                 <li><i class="fas fa-star"></i></li>
                                 <li><i class="far fa-star"></i></li>
                              </ul> -->
                              <p class="category">Categories: <span>Coming soon</span></p>
                           </div>
                           <div> <button type="button" class="menu-btn1" id="">Add to cart</button></div>
                        </div>
                        <!-- end of item -->

                        <!-- item -->
                        <div class="food-item featured">
                           <div class="food-img">
                              <img src="foods/french-fries-with-steak-and-beer.jpg" alt="food image">
                           </div>
                           <div class="food-content">
                              <h2 class="food-name">French Fries</h2>
                              <div class="line"></div>
                              <h3 class="food-price">$9.00</h3>
                              <!-- <ul class="rating">
                                 <li><i class="fas fa-star"></i></li>
                                 <li><i class="fas fa-star"></i></li>
                                 <li><i class="fas fa-star"></i></li>
                                 <li><i class="fas fa-star"></i></li>
                                 <li><i class="far fa-star"></i></li>
                              </ul> -->
                              <p class="category">Categories: <span>Featured</span></p>
                           </div>
                           <div> <button type="button" class="menu-btn1" id="">Add to cart</button></div>
                        </div>
                        <!-- end of item -->

                        <!-- item -->
                        <div class="food-item today-special">
                           <div class="food-img">
                              <img src="foods/fried-rice-with-shrimps.jpg" alt="food image">
                           </div>
                           <div class="food-content">
                              <h2 class="food-name">Fried Rice</h2>
                              <div class="line"></div>
                              <h3 class="food-price">$5.00</h3>
                              <!-- <ul class="rating">
                                 <li><i class="fas fa-star"></i></li>
                                 <li><i class="fas fa-star"></i></li>
                                 <li><i class="fas fa-star"></i></li>
                                 <li><i class="fas fa-star"></i></li>
                                 <li><i class="far fa-star"></i></li>
                              </ul> -->
                              <p class="category">Categories: <span>Today's Special</span></p>
                           </div>
                           <div> <button type="button" class="menu-btn1" id="">Add to cart</button></div>
                        </div>
                        <!-- end of item -->

                        <!-- item -->
                        <div class="food-item new-arrival">
                           <div class="food-img">
                              <img src="foods/king-prawns-with-green-lettuce.jpg" alt="food image">
                           </div>
                           <div class="food-content">
                              <h2 class="food-name">King Prawns</h2>
                              <div class="line"></div>
                              <h3 class="food-price">$11.00</h3>
                              <!-- <ul class="rating">
                                 <li><i class="fas fa-star"></i></li>
                                 <li><i class="fas fa-star"></i></li>
                                 <li><i class="fas fa-star"></i></li>
                                 <li><i class="fas fa-star"></i></li>
                                 <li><i class="far fa-star"></i></li>
                              </ul> -->
                              <p class="category">Categories: <span>Coming soon</span></p>
                           </div>
                           <div> <button type="button" class="menu-btn1" id="">Add to cart</button></div>
                        </div>
                        <!-- end of item -->

                        <!-- item -->
                        <div class="food-item featured">
                           <div class="food-img">
                              <img src="foods/noodles-with-egg-and-vegetables.jpg" alt="food image">
                           </div>
                           <div class="food-content">
                              <h2 class="food-name">Noodles</h2>
                              <div class="line"></div>
                              <h3 class="food-price">$5.00</h3>
                              <!-- <ul class="rating">
                                 <li><i class="fas fa-star"></i></li>
                                 <li><i class="fas fa-star"></i></li>
                                 <li><i class="fas fa-star"></i></li>
                                 <li><i class="fas fa-star"></i></li>
                                 <li><i class="far fa-star"></i></li>
                              </ul> -->
                              <p class="category">Categories: <span>Featured</span></p>
                           </div>
                           <div> <button type="button" class="menu-btn1" id="">Add to cart</button></div>
                        </div>
                        <!-- end of item -->

                        <!-- item -->
                        <div class="food-item today-special">
                           <div class="food-img">
                              <img src="foods/pizza-with-a-lot-of-cheese.jpg" alt="food image">
                           </div>
                           <div class="food-content">
                              <h2 class="food-name">Cheese Pizza</h2>
                              <div class="line"></div>
                              <h3 class="food-price">$12.00</h3>
                              <!-- <ul class="rating">
                                 <li><i class="fas fa-star"></i></li>
                                 <li><i class="fas fa-star"></i></li>
                                 <li><i class="fas fa-star"></i></li>
                                 <li><i class="fas fa-star"></i></li>
                                 <li><i class="far fa-star"></i></li>
                              </ul> -->
                              <p class="category">Categories: <span>Today's Special</span></p>
                           </div>
                           <div> <button type="button" class="menu-btn1" id="">Add to cart</button></div>
                        </div>
                        <!-- end of item -->

                        <!-- item -->
                        <div class="food-item new-arrival">
                           <div class="food-img">
                              <img src="foods/summer-juicy-beef-burger.jpg" alt="food image">
                           </div>
                           <div class="food-content">
                              <h2 class="food-name">Juicy beef burger</h2>
                              <div class="line"></div>
                              <h3 class="food-price">$14.00</h3>
                              <!-- <ul class="rating">
                                 <li><i class="fas fa-star"></i></li>
                                 <li><i class="fas fa-star"></i></li>
                                 <li><i class="fas fa-star"></i></li>
                                 <li><i class="fas fa-star"></i></li>
                                 <li><i class="far fa-star"></i></li>
                              </ul> -->
                              <p class="category">Categories: <span>Coming soon</span></p>
                           </div>
                           <div> <button type="button" class="menu-btn1" id="">Add to cart</button></div>
                        </div>
                        <!-- end of item -->

                        <!-- item -->
                        <div class="food-item featured">
                           <div class="food-img">
                              <img src="foods/tacos-with-pulled-pork-fresh-vegetables-and-cream.jpg" alt="food image">
                           </div>
                           <div class="food-content">
                              <h2 class="food-name">Tacos with pulled pork</h2>
                              <div class="line"></div>
                              <h3 class="food-price">$22.00</h3>
                              <!-- <ul class="rating">
                                 <li><i class="fas fa-star"></i></li>
                                 <li><i class="fas fa-star"></i></li>
                                 <li><i class="fas fa-star"></i></li>
                                 <li><i class="fas fa-star"></i></li>
                                 <li><i class="far fa-star"></i></li>
                              </ul> -->
                              <p class="category">Categories: <span>Featured</span></p>
                           </div>
                           <div> <button type="button" class="menu-btn1" id="">Add to cart</button></div>
                        </div>
                        <!-- end of item -->

                        <!-- item -->
                        <div class="food-item today-special">
                           <div class="food-img">
                              <img src="foods/tiny-pickles-on-top-of-burger.jpg" alt="food image">
                           </div>
                           <div class="food-content">
                              <h2 class="food-name">tiny pickles</h2>
                              <div class="line"></div>
                              <h3 class="food-price">$7.00</h3>
                              <!-- <ul class="rating">
                                 <li><i class="fas fa-star"></i></li>
                                 <li><i class="fas fa-star"></i></li>
                                 <li><i class="fas fa-star"></i></li>
                                 <li><i class="fas fa-star"></i></li>
                                 <li><i class="far fa-star"></i></li>
                              </ul> -->
                              <p class="category">Categories: <span>Today's Special</span></p>
                           </div>
                           <div> <button type="button" class="menu-btn1" id="">Add to cart</button></div>
                        </div>
                        <!-- end of item -->

                        <!-- item -->
                        <div class="food-item new-arrival">
                           <div class="food-img">
                              <img src="foods/tortilla-chips-with-salsa.jpg" alt="food image">
                           </div>
                           <div class="food-content">
                              <h2 class="food-name">tortilla chips</h2>
                              <div class="line"></div>
                              <h3 class="food-price">$26.00</h3>
                              <!-- <ul class="rating">
                                 <li><i class="fas fa-star"></i></li>
                                 <li><i class="fas fa-star"></i></li>
                                 <li><i class="fas fa-star"></i></li>
                                 <li><i class="fas fa-star"></i></li>
                                 <li><i class="far fa-star"></i></li>
                              </ul> -->
                              <p class="category">Categories: <span>Coming soon</span></p>
                           </div>
                           <div> <button type="button" class="menu-btn1" id="">Add to cart</button></div>
                        </div>
                        <!-- end of item -->
               </section>
            </div><!------end of col-md-9------>
         </div><!-------end of row-------->












         <script src="script.js"></script>

   </main>


     <?php include 'footer.php'; ?>
   <script src="menu.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   <script src="js/jquery-3.6.4.js"></script>
   <script src="js/bootstrap.bundle.js"></script>
   <script src="js/bootstrap.min.js"></script>
</body>

</html>