<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      name="description"
      content="Omnifood is a premium food delivery service with the mission to bring affordable and healthy meals to as many people as possible"
    />
    <title>Omnifood</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;1,300&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="vendors/css/grid.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" type="text/css" href="resources/css/style.css" />
    <link rel="stylesheet" type="text/css" href="resources/css/queries.css" />
    <link rel="apple-touch-icon" sizes="180x180" href="/resources/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="/resources/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="/resources/favicons/favicon-16x16.png" />
    <link rel="manifest" href="/resources/favicons/site.webmanifest" />
    <link rel="mask-icon" href="/resources/favicons/safari-pinned-tab.svg" color="#5bbad5" />
    <link rel="shortcut icon" href="/resources/favicons/favicon.ico" />
    <meta name="msapplication-TileColor" content="#da532c" />
    <meta name="msapplication-config" content="/resources/favicons/browserconfig.xml" />
    <meta name="theme-color" content="#ffffff" />
  </head>
  <body>
    <!-- 
      ======= HEADER =======
     -->
    <header>
      <nav id="top-nav">
        <div class="row">
          <img class="logo" src="resources/img/logo-white.png" alt="Omnifood logo" />
          <img class="logo-black" src="resources/img/logo.png" alt="Omnifood logo" />
          <ul class="nav main-nav">
            <li><a href="#features">Food delivery</a></li>
            <li><a href="#how-it-works">How it works</a></li>
            <li><a href="#cities">Our cities</a></li>
            <li><a href="#subscriptions">Sign up</a></li>
          </ul>
          <a class="mobile-nav-icon">
            <ion-icon class="hamburger-btn" name="menu-outline"></ion-icon>
          </a>
        </div>
      </nav>
      <div class="hero-text-box">
        <h1>Goodbye junk food.<br />Hello super healthy meals.</h1>
        <a id="scroll-to-plan" class="btn btn-full" href="#">I’m hungry</a>
        <a id="scroll-to-start" class="btn btn-ghost" href="#">Show me more</a>
      </div>
    </header>
    <!-- 
      ======= FEATURES SECTION =======
     -->
    <section id="features" class="section-features">
      <div class="row">
        <h2>Get food fast &mdash; not fast food.</h2>
        <p class="long-copy">
          Hello, we’re Omnifood, your new premium food delivery service. We know you’re always busy. No time for
          cooking. So let us take care of that, we’re really good at it, we promise!
        </p>
      </div>
      <div class="row js--wp-1">
        <div class="col span-1-of-4 box">
          <ion-icon class="icon-big" name="infinite-outline"></ion-icon>
          <h3>Up to 365 days/year</h3>
          <p>
            Never cook again! We really mean that. Our subscription plans include up to 365 days/year coverage. You can
            also choose to order more flexibly if that's your style.
          </p>
        </div>
        <div class="col span-1-of-4 box">
          <ion-icon class="icon-big" name="stopwatch-outline"></ion-icon>
          <h3>Ready in 20 minutes</h3>
          <p>
            You're only twenty minutes away from your delicious and super healthy meals delivered right to your home. We
            work with the best chefs in each town to ensure that you're 100% happy.
          </p>
        </div>
        <div class="col span-1-of-4 box">
          <ion-icon class="icon-big" name="nutrition-outline"></ion-icon>
          <h3>100% organic</h3>
          <p>
            All our vegetables are fresh, organic and local. Animals are raised without added hormones or antibiotics.
            Good for your health, the environment, and it also tastes better!
          </p>
        </div>
        <div class="col span-1-of-4 box">
          <ion-icon class="icon-big" name="cart-outline"></ion-icon>
          <h3>Order anything</h3>
          <p>
            We don't limit your creativity, which means you can order whatever you feel like. You can also choose from
            our menu containing over 100 delicious meals. It's up to you!
          </p>
        </div>
      </div>
    </section>
    <!-- 
      ======= MEALS SECTION =======
     -->
    <section class="section-meals">
      <ul class="meals-showcase clearfix">
        <li>
          <figure class="meal-photo">
            <img src="resources/img/1.jpg" alt="Korean bibimbap with egg and vegetables" />
          </figure>
        </li>
        <li>
          <figure class="meal-photo">
            <img src="resources/img/2.jpg" alt="Simple italian pizza with cherry tomatoes" />
          </figure>
        </li>
        <li>
          <figure class="meal-photo">
            <img src="resources/img/3.jpg" alt="Chicken breast steak with vegetables" />
          </figure>
        </li>
        <li>
          <figure class="meal-photo">
            <img src="resources/img/4.jpg" alt="Autumn pumpkin soup" />
          </figure>
        </li>
      </ul>
      <ul class="meals-showcase clearfix">
        <li>
          <figure class="meal-photo">
            <img src="resources/img/5.jpg" alt="Paleo beef steak with vegetables" />
          </figure>
        </li>
        <li>
          <figure class="meal-photo">
            <img src="resources/img/6.jpg" alt="Healthy baguette with egg and vegetables" />
          </figure>
        </li>
        <li>
          <figure class="meal-photo">
            <img src="resources/img/7.jpg" alt="Burger with cheddar and bacon" />
          </figure>
        </li>
        <li>
          <figure class="meal-photo">
            <img src="resources/img/8.jpg" alt="Granola with cherries and strawberries" />
          </figure>
        </li>
      </ul>
    </section>
    <!-- 
      ======= STEPS SECTION =======
     -->
    <section id="how-it-works" class="section-steps">
      <div class="row">
        <h2>How is works &mdash; Simple as 1, 2, 3</h2>
      </div>
      <div class="row">
        <div class="col span-1-of-2 steps-box">
          <img class="app-screen js--wp-2" src="resources/img/app-iPhone.png" alt="Omnifood app on iPhone" />
        </div>
        <div class="col span-1-of-2 steps-box">
          <div class="works-step">
            <div>1</div>
            <p>Choose the subscription plan that best fits your needs and sign up today.</p>
          </div>
          <div class="works-step">
            <div>2</div>
            <p>Order your delicious meal using our mobile app or website. Or you can even call us!</p>
          </div>
          <div class="works-step">
            <div>3</div>
            <p>Enjoy your meal after less than 20 minutes. See you the next time!</p>
          </div>
          <a class="btn-app" href="#">
            <img src="resources/img/download-app.svg" alt="App Store Button" />
          </a>
          <a class="btn-app" href="#">
            <img src="resources/img/download-app-android.png" alt="Play Store Button" />
          </a>
        </div>
      </div>
    </section>
    <!-- 
      ======= CITIES SECTION =======
     -->
    <section id="cities" class="cities">
      <div class="row">
        <h2>We're currently in these cities</h2>
      </div>
      <div class="row js--wp-3">
        <!-- CITY OF LISBON -->
        <div class="col span-1-of-4 box">
          <img src="resources/img/lisbon-3.jpg" alt="Photo of Lisbon" />
          <h3>Lisbon</h3>
          <div class="city-detail">
            <ion-icon class="icon-small" name="person"></ion-icon>
            <span>1600+ happy eaters</span>
          </div>
          <div class="city-detail">
            <ion-icon class="icon-small" name="star"></ion-icon>
            60+ top chefs
          </div>
          <div class="city-detail">
            <ion-icon class="icon-small" name="logo-twitter"></ion-icon>
            <a href="#">@omnifood_lx</a>
          </div>
        </div>
        <!-- CITY OF SAN FRANCISCO -->
        <div class="col span-1-of-4 box">
          <img src="resources/img/san-francisco.jpg" alt="Photo of San Francisco" />
          <h3>San Francisco</h3>
          <div class="city-detail">
            <ion-icon class="icon-small" name="person"></ion-icon>
            3700+ happy eaters
          </div>
          <div class="city-detail">
            <ion-icon class="icon-small" name="star"></ion-icon>
            160+ top chefs
          </div>
          <div class="city-detail">
            <ion-icon class="icon-small" name="logo-twitter"></ion-icon>
            <a href="#">@omnifood_sf</a>
          </div>
        </div>
        <!-- CITY OF BERLIN -->
        <div class="col span-1-of-4 box">
          <img src="resources/img/berlin.jpg" alt="Photo of Berlin" />
          <h3>Berlin</h3>
          <div class="city-detail">
            <ion-icon class="icon-small" name="person"></ion-icon>
            2300+ happy eaters
          </div>
          <div class="city-detail">
            <ion-icon class="icon-small" name="star"></ion-icon>
            110+ top chefs
          </div>
          <div class="city-detail">
            <ion-icon class="icon-small" name="logo-twitter"></ion-icon>
            <a href="#">@omnifood_berlin</a>
          </div>
        </div>
        <!-- CITY OF LONDON -->
        <div class="col span-1-of-4 box">
          <img src="resources/img/london.jpg" alt="Photo of London" />
          <h3>London</h3>
          <div class="city-detail">
            <ion-icon class="icon-small" name="person"></ion-icon>
            1200+ happy eaters
          </div>
          <div class="city-detail">
            <ion-icon class="icon-small" name="star"></ion-icon>
            50+ top chefs
          </div>
          <div class="city-detail">
            <ion-icon class="icon-small" name="logo-twitter"></ion-icon>
            <a href="#">@omnifood_london</a>
          </div>
        </div>
      </div>
    </section>
    <!-- 
      ======= TESTIMONIALS SECTION =======
     -->
    <section class="section-testimonials">
      <div class="row">
        <h2>Our customers can't live without us</h2>
      </div>
      <div class="row">
        <div class="col span-1-of-3">
          <blockquote class="testimonial-box">
            Omnifood is just awesome! I just launched a startup which leaves me with no time for cooking, so Omnifood is
            a life-saver. Now that I got used to it, I couldn't live without my daily meals!
            <cite>
              <img src="resources/img/customer-1.jpg" alt="Alberto Duncan" />
              Alberto Duncan
            </cite>
          </blockquote>
        </div>
        <div class="col span-1-of-3">
          <blockquote class="testimonial-box">
            Inexpensive, healthy and great-tasting meals, delivered right to my home. We have lots of food delivery here
            in Lisbon, but no one comes even close to Omifood. Me and my family are so in love!
            <cite>
              <img src="resources/img/customer-2.jpg" alt="Joana Silva" />
              Joana Silva
            </cite>
          </blockquote>
        </div>
        <div class="col span-1-of-3">
          <blockquote class="testimonial-box">
            I was looking for a quick and easy food delivery service in San Franciso. I tried a lot of them and ended up
            with Omnifood. Best food delivery service in the Bay Area. Keep up the great work!
            <cite>
              <img src="resources/img/customer-3.jpg" alt="Milton Chapman" />
              Milton Chapman
            </cite>
          </blockquote>
        </div>
      </div>
    </section>
    <!-- 
      ======= SUBSCRIPTIONS SECTION =======
     -->
    <section id="subscriptions" class="section-plans">
      <div class="row">
        <h2>Start eating healthy today</h2>
      </div>
      <div class="row">
        <!-- 
            PREMIUM PLAN 
          -->
        <div class="col span-1-of-3">
          <div class="card js--wp-4">
            <div>
              <h3>Premium</h3>
              <span class="plan-price">$399 <span>per month</span></span>
              <span class="plan-price-meal">That’s only $13.30 per meal</span>
            </div>
            <div>
              <ul>
                <li><ion-icon class="icon-small" name="checkmark-outline"></ion-icon>1 meal every day</li>
                <li><ion-icon class="icon-small" name="checkmark-outline"></ion-icon>Order 24/7</li>
                <li><ion-icon class="icon-small" name="checkmark-outline"></ion-icon>Access to newest creations</li>
                <li><ion-icon class="icon-small" name="checkmark-outline"></ion-icon>Free delivery</li>
              </ul>
            </div>
            <div>
              <a class="btn btn-full" href="#">Sign Up</a>
            </div>
          </div>
        </div>
        <!-- 
            PRO PLAN 
          -->
        <div class="col span-1-of-3">
          <div class="card">
            <div>
              <h3>Pro</h3>
              <span class="plan-price">$149 <span>per month</span></span>
              <span class="plan-price-meal">That’s only $14.90 per meal</span>
            </div>
            <div>
              <ul>
                <li><ion-icon class="icon-small" name="checkmark-outline"></ion-icon>1 meal 10 days/month</li>
                <li><ion-icon class="icon-small" name="checkmark-outline"></ion-icon>Order 24/7</li>
                <li><ion-icon class="icon-small" name="checkmark-outline"></ion-icon>Access to newest creations</li>
                <li><ion-icon class="icon-small" name="checkmark-outline"></ion-icon>Free delivery</li>
              </ul>
            </div>
            <div>
              <a class="btn btn-ghost" href="#">Sign Up</a>
            </div>
          </div>
        </div>
        <!-- 
            STARTER PLAN 
          -->
        <div class="col span-1-of-3">
          <div class="card">
            <div>
              <h3>Starter</h3>
              <span class="plan-price">$19 <span>per meal</span></span>
              <span class="plan-price-meal">&nbsp;</span>
            </div>
            <div>
              <ul>
                <li><ion-icon class="icon-small" name="checkmark-outline"></ion-icon>1 meal</li>
                <li><ion-icon class="icon-small" name="checkmark-outline"></ion-icon>Order from 8 am to 12 pm</li>
                <li>
                  <ion-icon class="icon-small" name="close-outline"></ion-icon>
                </li>
                <li><ion-icon class="icon-small" name="checkmark-outline"></ion-icon>Free delivery</li>
              </ul>
            </div>
            <div>
              <a class="btn btn-ghost" href="#">Sign Up</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- 
      ======= FORM SECTION =======
     -->
    <section class="section-form">
      <div class="row">
        <h2>We're happy to hear from you</h2>
      </div>
      <div id="form" class="row">

        <?php
          if ($_GET["success"] == 1) {
            echo "<div class='form-messages success'>Thank you! Your message has been sent.</div>";
          }
          
          if ($_GET["success"] == -1) {
            echo "<div class='form-messages error'>Oops! Something went wrong please try again.</div>";
          }
        ?>
        
        <!-- CONTACT FORM -->
        <form method="POST" action="mailer-new.php">
          <!-- Name -->
          <div class="row">
            <div class="col span-1-of-3">
              <label for="name">Name</label>
            </div>
            <div class="col span-2-of-3">
              <input id="name" type="text" name="name" required />
            </div>
          </div>
          <!-- Email -->
          <div class="row">
            <div class="col span-1-of-3">
              <label for="email">Email</label>
            </div>
            <div class="col span-2-of-3">
              <input id="email" type="email" name="email" required />
            </div>
          </div>
          <!-- Question -->
          <div class="row">
            <div class="col span-1-of-3">
              <label for="find-us">How did you find us??</label>
            </div>
            <div class="col span-2-of-3">
              <select name="find-us" id="find-us">
                <option value="" selected>Choose an option</option>
                <option value="friends">Friends</option>
                <option value="search">Search engine</option>
                <option value="ad">Advertisement</option>
                <option value="other">Other</option>
              </select>
            </div>
          </div>
          <!-- Checkbox -->
          <div class="row">
            <div class="col span-1-of-3">
              <label for="news">Newsletter</label>
            </div>
            <div class="col span-2-of-3">
              <input id="news" type="checkbox" name="news" checked />
              Yes, please
            </div>
          </div>
          <!-- Textarea -->
          <div class="row">
            <div class="col span-1-of-3">
              <label for="message">Drop us a line</label>
            </div>
            <div class="col span-2-of-3">
              <textarea name="message" id="message" cols="30" rows="5" placeholder="Your message"></textarea>
            </div>
          </div>
          <!-- Submit -->
          <div class="row">
            <div class="col span-1-of-3">
              <label>&nbsp;</label>
            </div>
            <div class="col span-2-of-3">
              <button>Send it!</button>
            </div>
          </div>
          <!--  -->
        </form>
      </div>
    </section>
    <!-- 
      ======= FOOTER =======
     -->
    <footer>
      <div class="row">
        <nav>
          <div class="col span-1-of-2">
            <ul class="nav nav-footer-additional">
              <li><a href="#">About us</a></li>
              <li><a href="#">Blog</a></li>
              <li><a href="#">Press</a></li>
              <li><a href="#">IOS App</a></li>
              <li><a href="#">Android App</a></li>
            </ul>
          </div>
          <div class="col span-1-of-2">
            <ul class="nav nav-footer-social">
              <li>
                <a class="facebook-icon" href="#">
                  <ion-icon name="logo-facebook"></ion-icon>
                </a>
              </li>
              <li>
                <a class="twitter-icon" href="#">
                  <ion-icon name="logo-twitter"></ion-icon>
                </a>
              </li>
              <li>
                <a class="google-icon" href="#">
                  <ion-icon name="logo-google"></ion-icon>
                </a>
              </li>
              <li>
                <a class="instagram-icon" href="#">
                  <ion-icon name="logo-instagram"></ion-icon>
                </a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
      <div class="row">
        <p>Copyright &copy; 2020 by Omnifood. All rights reserved.</p>
      </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.2.3/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule="" src="https://unpkg.com/ionicons@5.2.3/dist/ionicons/ionicons.js"></script>
    <script src="vendors/js/jquery.waypoints.min.js"></script>
    <script src="resources/js/script.js"></script>
  </body>
</html>
