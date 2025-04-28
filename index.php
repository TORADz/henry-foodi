<?php
session_start();

// Debug: Check session data
if (isset($_SESSION['user_id'])) {
    echo "<!-- Session active: User ID = " . $_SESSION['user_id'] . ", Name = " . $_SESSION['first_name'] . " " . $_SESSION['last_name'] . " -->";
} else {
    echo "<!-- No session active -->";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foodieland - Home</title>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Inter:wght@400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <!-- Add to <head> -->
    <link rel="stylesheet" href="popup_style.css">
</head>

<body>
    <header>

        <div class="logo">
            <h1>Foodieland<span class="full-stop">.</span></h1>
        </div>
        <nav class="nav-menu">
            <ul>
                <li><a href="Index.php">Home</a></li>
                <li><a href="recipes.html">Recipes</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="about.html">About Us</a></li>
            </ul>
        </nav>



        <header class="popup-header">
            <div class="logo"></div>
            <div class="auth-buttons">
                <?php if (isset($_SESSION['user_id'])): ?>
                    <span class="user-greeting">
                        Welcome, <?php echo htmlspecialchars($_SESSION['first_name'] . ' ' . $_SESSION['last_name']); ?>
                    </span>
                    <a href="logout.php" class="btn">Logout</a>
                <?php else: ?>
                    <button class="btn" onclick="openPopup('login')">Login</button>
                    <button class="btn" onclick="openPopup('register')">Register</button>
                <?php endif; ?>
            </div>
        </header>

        <!-- Login Popup -->
        <div id="login-popup" class="popup">
            <div class="popup-content">
                <span class="close" onclick="closePopup('login')">×</span>
                <h2>Login</h2>
                <form action="login.php" method="POST">
                    <input type="email" name="email" placeholder="Your Email" required>
                    <input type="password" name="password" placeholder="Your Password" required>
                    <a href="#" class="forgot-password">Forgot Password?</a>
                    <button type="submit" class="submit-btn">Login</button>
                </form>
            </div>
        </div>

        <!-- Register Popup -->
        <div id="register-popup" class="popup">
            <div class="popup-content">
                <span class="close" onclick="closePopup('register')">×</span>
                <h2>Register</h2>
                <form action="register.php" method="POST">
                    <input type="text" name="first_name" placeholder="First Name" required>
                    <input type="text" name="last_name" placeholder="Last Name" required>
                    <input type="email" name="email" placeholder="Email" required>
                    <input type="password" name="password" placeholder="Password" required>
                    <button type="submit" class="submit-btn">Sign Up</button>
                    <p>Already have an account? <a href="#" onclick="switchPopup('login')">Log in</a></p>
                </form>
            </div>
        </div>

        <div class="social-icons">
            <a href="https://www.facebook.com/login/" target="_blank"><i class="fab fa-facebook-f"></i></a>
            <a href="https://twitter.com/login/" target="_blank"><i class="fab fa-twitter"></i></a>
            <a href="https://www.instagram.com/accounts/login/" target="_blank"><i class="fab fa-instagram"></i></a>
        </div>

    </header>

    <br><br>
    <br><br>

    <section id="home" class="hero-section">
        <div class="hero-container">
            <!-- New div for the centered image -->
            <div class="centered-image">
                <img src="Images/Badge.png" alt="Centered Image">
            </div>
            <div class="hero-content">
                <div class="hot-recipes-label">
                    <i class="fas fa-fire"></i> Hot Recipes
                </div>
                <h2>Delicious Chicken Wings</h2>
                <!-- <div class="most-loved-badge">
                    <i class="fas fa-thumbs-up"></i> Most Loved Recipes
                </div> -->
                <p>Crispy, juicy chicken wings served with a tangy tomato dip, perfect for any occasion!</p>
                <div class="recipe-info">
                    <span><i class="fas fa-clock"></i> 30 Mins</span>
                    <span><i class="fas fa-drumstick-bite"></i> Chicken</span>
                </div>
                <br><br>
                <br><br>
                <div class="author-and-button">
                    <div class="author-info">
                        <img src="Images/image 21.jpg" alt="Author Avatar">
                        <div>
                            <p>Egbule Henry</p>
                            <p>April 10, 2025</p>
                        </div>
                    </div>
                    <a href="recipes.html" class="view-recipes-btn">View Recipes <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="hero-image">
                <img src="Images/Mask Group.jpg" alt="Chicken Wings">
            </div>
        </div>
    </section>
    <br><br>
    <br><br>
    <br><br>
    <br><br>
    <section class="categories-section">
        <div class="categories-header">
            <h2>Categories</h2>
            <a href="contact.html" class="view-all-btn">View All Categories</a>
        </div>
        <br><br>
        <br><br>
        <div class="categories-images">
            <a href="contact.html" class="category-item">
                <div class="image-wrapper breakfast-bg">
                    <img src="Images/Breakfast.jpg" alt="Breakfast">
                    <p>Breakfast</p>
                </div>
            </a>
            <a href="contact.html" class="category-item">
                <div class="image-wrapper vegan-bg">
                    <img src="Images/Vegan.jpg" alt="Vegan">
                    <p>Vegan</p>
                </div>
            </a>
            <a href="contact.html" class="category-item">
                <div class="image-wrapper meat-bg">
                    <img src="Images/Meat.jpg" alt="Meat">
                    <p>Meat</p>
                </div>
            </a>
            <a href="contact.html" class="category-item">
                <div class="image-wrapper dessert-bg">
                    <img src="Images/Dessert.jpg" alt="Dessert">
                    <p>Dessert</p>
                </div>
            </a>
            <a href="contact.html" class="category-item">
                <div class="image-wrapper lunch-bg">
                    <img src="Images/Lunch.jpg" alt="Lunch">
                    <p>Lunch</p>
                </div>
            </a>
            <a href="contact.html" class="category-item">
                <div class="image-wrapper chocolate-bg">
                    <img src="Images/Chocolate.jpg" alt="Chocolate">
                    <p>Chocolate</p>
                </div>
            </a>
        </div>
    </section>
    <section class="recipes-section">
        <h2>Simple and tasty recipes</h2>
        <p>Explore hundreds of top-rated quick and easy recipes for breakfast, lunch, and dinner.
            Browse hundreds of delicious easy home-cooked family dinners with side, freezer, and leftover suggestions. With detailed step-by-step instructions and expert tips, every recipe comes together perfectly, every time.
        </p>
    </section>

    <section class="recipe-cards-section">
        <div class="recipe-cards">
            <!-- 1st Row -->
            <a href="contact.html" class="recipe-card">
                <div class="recipe-image">
                    <img src="Images/Chesseburger.png" alt="Big and Juicy Wagyu Beef Cheeseburger">
                </div>
                <h3>Big and Juicy Wagyu Beef Cheeseburger</h3>
                <div class="recipe-info">
                    <div class="time">
                        <svg class="icon clock" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"></circle>
                            <polyline points="12 6 12 12 16 14"></polyline>
                        </svg>
                        <span>30 Minutes</span>
                    </div>
                    <div class="category">
                        <svg class="icon fork" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M7 2v16m0-8h10m0 0v8m0-8V2"></path>
                        </svg>
                        <svg class="icon knife" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 2v20m0-20l-3 3m3-3l3 3"></path>
                        </svg>
                        <span>Snack</span>
                    </div>
                </div>
            </a>
            <a href="contact.html" class="recipe-card">
                <div class="recipe-image">
                    <img src="Images/Salmon.png" alt="Fresh Lime Roasted Salmon with Ginger Sauce">
                </div>
                <h3>Fresh Lime Roasted Salmon with Ginger Sauce</h3>
                <div class="recipe-info">
                    <div class="time">
                        <svg class="icon clock" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"></circle>
                            <polyline points="12 6 12 12 16 14"></polyline>
                        </svg>
                        <span>30 Minutes</span>
                    </div>
                    <div class="category">
                        <svg class="icon fork" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M7 2v16m0-8h10m0 0v8m0-8V2"></path>
                        </svg>
                        <svg class="icon knife" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 2v20m0-20l-3 3m3-3l3 3"></path>
                        </svg>
                        <span>Fish</span>
                    </div>
                </div>
            </a>
            <a href="contact.html" class="recipe-card">
                <div class="recipe-image">
                    <img src="Images/Honey-Pancakes.png" alt="Strawberry Oatmeal Pancake with Honey Syrup">
                </div>
                <h3>Strawberry Oatmeal Pancake with Honey Syrup</h3>
                <div class="recipe-info">
                    <div class="time">
                        <svg class="icon clock" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"></circle>
                            <polyline points="12 6 12 12 16 14"></polyline>
                        </svg>
                        <span>30 Minutes</span>
                    </div>
                    <div class="category">
                        <svg class="icon fork" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M7 2v16m0-8h10m0 0v8m0-8V2"></path>
                        </svg>
                        <svg class="icon knife" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 2v20m0-20l-3 3m3-3l3 3"></path>
                        </svg>
                        <span>Breakfast</span>
                    </div>
                </div>
            </a>

            <!-- 2nd Row -->
            <a href="contact.html" class="recipe-card">
                <div class="recipe-image">
                    <img src="Images/Fresh-salad.png" alt="Fresh and Healthy Mixed Mayonnaise Salad">
                </div>
                <h3>Fresh and Healthy Mixed Mayonnaise Salad</h3>
                <div class="recipe-info">
                    <div class="time">
                        <svg class="icon clock" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"></circle>
                            <polyline points="12 6 12 12 16 14"></polyline>
                        </svg>
                        <span>30 Minutes</span>
                    </div>
                    <div class="category">
                        <svg class="icon fork" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M7 2v16m0-8h10m0 0v8m0-8V2"></path>
                        </svg>
                        <svg class="icon knife" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 2v20m0-20l-3 3m3-3l3 3"></path>
                        </svg>
                        <span>Healthy</span>
                    </div>
                </div>
            </a>
            <a href="contact.html" class="recipe-card">
                <div class="recipe-image">
                    <img src="Images/Chicken-meatball.png" alt="Chicken Meatballs with Cream Cheese">
                </div>
                <h3>Chicken Meatballs with Cream Cheese</h3>
                <div class="recipe-info">
                    <div class="time">
                        <svg class="icon clock" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"></circle>
                            <polyline points="12 6 12 12 16 14"></polyline>
                        </svg>
                        <span>30 Minutes</span>
                    </div>
                    <div class="category">
                        <svg class="icon fork" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M7 2v16m0-8h10m0 0v8m0-8V2"></path>
                        </svg>
                        <svg class="icon knife" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 2v20m0-20l-3 3m3-3l3 3"></path>
                        </svg>
                        <span>Meat</span>
                    </div>
                </div>
            </a>
            <a href="contact.html" class="recipe-card">
                <div class="recipe-image">
                    <img src="Images/Ads.png" alt="Placeholder Image">
                </div>
            </a>

            <!-- 3rd Row -->
            <a href="contact.html" class="recipe-card">
                <div class="recipe-image">
                    <img src="Images/Fruity-pancakes.png" alt="Fruity Pancake with Orange & Blueberry">
                </div>
                <h3>Fruity Pancake with Orange & Blueberry</h3>
                <div class="recipe-info">
                    <div class="time">
                        <svg class="icon clock" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"></circle>
                            <polyline points="12 6 12 12 16 14"></polyline>
                        </svg>
                        <span>30 Minutes</span>
                    </div>
                    <div class="category">
                        <svg class="icon fork" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M7 2v16m0-8h10m0 0v8m0-8V2"></path>
                        </svg>
                        <svg class="icon knife" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 2v20m0-20l-3 3m3-3l3 3"></path>
                        </svg>
                        <span>Sweet</span>
                    </div>
                </div>
            </a>
            <a href="contact.html" class="recipe-card">
                <div class="recipe-image">
                    <img src="Images/Chicken-Rice.png" alt="The Best Easy One Pot Chicken and Rice">
                </div>
                <h3>The Best Easy One Pot Chicken and Rice</h3>
                <div class="recipe-info">
                    <div class="time">
                        <svg class="icon clock" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"></circle>
                            <polyline points="12 6 12 12 16 14"></polyline>
                        </svg>
                        <span>30 Minutes</span>
                    </div>
                    <div class="category">
                        <svg class="icon fork" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M7 2v16m0-8h10m0 0v8m0-8V2"></path>
                        </svg>
                        <svg class="icon knife" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 2v20m0-20l-3 3m3-3l3 3"></path>
                        </svg>
                        <span>Snack</span>
                    </div>
                </div>
            </a>
            <a href="contact.html" class="recipe-card">
                <div class="recipe-image">
                    <img src="Images/Chicken-Pasta.png" alt="The Creamiest Creamy Chicken and Bacon Pasta">
                </div>
                <h3>The Creamiest Creamy Chicken and Bacon Pasta</h3>
                <div class="recipe-info">
                    <div class="time">
                        <svg class="icon clock" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"></circle>
                            <polyline points="12 6 12 12 16 14"></polyline>
                        </svg>
                        <span>30 Minutes</span>
                    </div>
                    <div class="category">
                        <svg class="icon fork" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M7 2v16m0-8h10m0 0v8m0-8V2"></path>
                        </svg>
                        <svg class="icon knife" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 2v20m0-20l-3 3m3-3l3 3"></path>
                        </svg>
                        <span>Noodles</span>
                    </div>
                </div>
            </a>
        </div>
    </section>

    <br><br>
    <br><br>
    <br><br>
    <br><br>

    <section class="chef-section">
        <div class="chef-content">
            <div class="chef-text">
                <h2>Everyone can be a chef in their own kitchen</h2>
                <p>Lorem ipsum dolor sit amet, consectetuipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqut enim ad minim</p>
                <a href="#" class="learn-more-btn">Learn More</a>
            </div>
            <div class="chef-image">
                <img src="Images/Chef-1.png" alt="Chef holding a plate with floating food items">
            </div>
        </div>
    </section>

    <section class="instagram-section">
        <div class="instagram-content">
            <h2>Check out @foodieland on Instagram</h2>
            <p>Lorem ipsum dolor sit amet, consectetuipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqut enim ad minim</p>
        </div>
    </section>


    <section class="instagram-posts-section">
        <div class="posts-container">
            <a href="https://www.instagram.com/accounts/login/" class="instagram-post">
                <img src="Images/Post-1.png" alt="Salad Instagram Post">
            </a>
            <a href="https://www.instagram.com/accounts/login/" class="instagram-post">
                <img src="Images/Post-2.png" alt="Pancakes Instagram Post">
            </a>
            <a href="https://www.instagram.com/accounts/login/" class="instagram-post">
                <img src="Images/Post-3.png" alt="Ingredients Instagram Post">
            </a>
            <a href="https://www.instagram.com/accounts/login/" class="instagram-post">
                <img src="Images/Post-4.png" alt="Steak Instagram Post">
            </a>
        </div>
        <div class="instagram-button">
            <a href="https://www.instagram.com/accounts/login/" class="visit-instagram-btn">
                Visit our Instagram
                <svg class="instagram-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                    <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                    <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                </svg>
            </a>
        </div>
    </section>
    </section>


    <section class="recipe-section">
        <div class="recipe-container">
            <div class="recipe-content left">
                <h2>Try this delicious recipe to make your day</h2>
                <!-- <p>Lorem ipsum dolor sit amet, consectetuipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqut enim ad minim</p> -->
            </div>
            <div class="recipe-content right">
                <!-- <h2>Discover new flavors every week</h2> -->
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
        </div>
    </section>



    <section class="recipes-grid-section">
        <div class="recipes-grid-container">
            <!-- Recipe 1 -->
            <a href="/contact-us" class="recipe-card">
                <div class="recipe-card-image">
                    <img src="Images/Tropical-salad.png" alt="Mixed Tropical Fruit Salad with Superfood Boosts">
                    <div class="heart-icon">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                        </svg>
                    </div>
                </div>
                <h3>Mixed Tropical Fruit Salad with Superfood Boosts</h3>
                <div class="recipe-info">
                    <div class="info-item">
                        <svg class="clock-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"></circle>
                            <polyline points="12 6 12 12 16 14"></polyline>
                        </svg>
                        <span>30 Minutes</span>
                    </div>
                    <div class="info-item">
                        <svg class="utensils-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M6 8V2m0 6h6m-6 0v14m12-6h-3a3 3 0 0 1-3-3V2m6 12v7"></path>
                        </svg>
                        <span>Healthy</span>
                    </div>
                </div>
            </a>

            <!-- Recipe 2 -->
            <a href="/contact-us" class="recipe-card">
                <div class="recipe-card-image">
                    <img src="Images/Juicy-beef.png" alt="Big and Juicy Wagyu Beef Cheeseburger">
                    <div class="heart-icon">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                        </svg>
                    </div>
                </div>
                <h3>Big and Juicy Wagyu Beef Cheeseburger</h3>
                <div class="recipe-info">
                    <div class="info-item">
                        <svg class="clock-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"></circle>
                            <polyline points="12 6 12 12 16 14"></polyline>
                        </svg>
                        <span>30 Minutes</span>
                    </div>
                    <div class="info-item">
                        <svg class="utensils-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M6 8V2m0 6h6m-6 0v14m12-6h-3a3 3 0 0 1-3-3V2m6 12v7"></path>
                        </svg>
                        <span>Western</span>
                    </div>
                </div>
            </a>

            <!-- Recipe 3 -->
            <a href="/contact-us" class="recipe-card">
                <div class="recipe-card-image">
                    <img src="Images/Japanese-rice.png" alt="Healthy Japanese Fried Rice with Asparagus">
                    <div class="heart-icon">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                        </svg>
                    </div>
                </div>
                <h3>Healthy Japanese Fried Rice with Asparagus</h3>
                <div class="recipe-info">
                    <div class="info-item">
                        <svg class="clock-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"></circle>
                            <polyline points="12 6 12 12 16 14"></polyline>
                        </svg>
                        <span>30 Minutes</span>
                    </div>
                    <div class="info-item">
                        <svg class="utensils-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M6 8V2m0 6h6m-6 0v14m12-6h-3a3 3 0 0 1-3-3V2m6 12v7"></path>
                        </svg>
                        <span>Healthy</span>
                    </div>
                </div>
            </a>

            <!-- Recipe 4 -->
            <a href="/contact-us" class="recipe-card">
                <div class="recipe-card-image">
                    <img src="Images/Taco-meat.png" alt="Cauliflower Walnut Vegetarian Taco Meat">
                    <div class="heart-icon">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                        </svg>
                    </div>
                </div>
                <h3>Cauliflower Walnut Vegetarian Taco Meat</h3>
                <div class="recipe-info">
                    <div class="info-item">
                        <svg class="clock-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"></circle>
                            <polyline points="12 6 12 12 16 14"></polyline>
                        </svg>
                        <span>30 Minutes</span>
                    </div>
                    <div class="info-item">
                        <svg class="utensils-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M6 8V2m0 6h6m-6 0v14m12-6h-3a3 3 0 0 1-3-3V2m6 12v7"></path>
                        </svg>
                        <span>Eastern</span>
                    </div>
                </div>
            </a>

            <!-- Recipe 5 -->
            <a href="/contact-us" class="recipe-card">
                <div class="recipe-card-image">
                    <img src="Images/Chicken-salad.png" alt="Rainbow Chicken Salad with Almond Honey Mustard Dressing">
                    <div class="heart-icon">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                        </svg>
                    </div>
                </div>
                <h3>Rainbow Chicken Salad with Almond Honey Mustard Dressing</h3>
                <div class="recipe-info">
                    <div class="info-item">
                        <svg class="clock-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"></circle>
                            <polyline points="12 6 12 12 16 14"></polyline>
                        </svg>
                        <span>30 Minutes</span>
                    </div>
                    <div class="info-item">
                        <svg class="utensils-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M6 8V2m0 6h6m-6 0v14m12-6h-3a3 3 0 0 1-3-3V2m6 12v7"></path>
                        </svg>
                        <span>Healthy</span>
                    </div>
                </div>
            </a>

            <!-- Recipe 6 -->
            <a href="/contact-us" class="recipe-card">
                <div class="recipe-card-image">
                    <img src="Images/Sandwish.png" alt="Barbeque Spicy Sandwiches with Chips">
                    <div class="heart-icon">
                        <svg width="20" height="20" viewBox="0 0 24  reinstatement: round" stroke-linejoin="round">
                            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                        </svg>
                    </div>
                </div>
                <h3>Barbeque Spicy Sandwiches with Chips</h3>
                <div class="recipe-info">
                    <div class="info-item">
                        <svg class="clock-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"></circle>
                            <polyline points="12 6 12 12 16 14"></polyline>
                        </svg>
                        <span>30 Minutes</span>
                    </div>
                    <div class="info-item">
                        <svg class="utensils-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M6 8V2m0 6h6m-6 0v14m12-6h-3a3 3 0 0 1-3-3V2m6 12v7"></path>
                        </svg>
                        <span>Snack</span>
                    </div>
                </div>
            </a>

            <!-- Recipe 7 -->
            <a href="/contact-us" class="recipe-card">
                <div class="recipe-card-image">
                    <img src="Images/Vegan-lettuce.png" alt="Firecracker Vegan Lettuce Wraps - Spicy!">
                    <div class="heart-icon">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                        </svg>
                    </div>
                </div>
                <h3>Firecracker Vegan Lettuce Wraps - Spicy!</h3>
                <div class="recipe-info">
                    <div class="info-item">
                        <svg class="clock-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"></circle>
                            <polyline points="12 6 12 12 16 14"></polyline>
                        </svg>
                        <span>30 Minutes</span>
                    </div>
                    <div class="info-item">
                        <svg class="utensils-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M6 8V2m0 6h6m-6 0v14m12-6h-3a3 3 0 0 1-3-3V2m6 12v7"></path>
                        </svg>
                        <span>Seafood</span>
                    </div>
                </div>
            </a>

            <!-- Recipe 8 -->
            <a href="/contact-us" class="recipe-card">
                <div class="recipe-card-image">
                    <img src="Images/Noodles.png" alt="Chicken Ramen Soup with Mushroom">
                    <div class="heart-icon">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                        </svg>
                    </div>
                </div>
                <h3>Chicken Ramen Soup with Mushroom</h3>
                <div class="recipe-info">
                    <div class="info-item">
                        <svg class="clock-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"></circle>
                            <polyline points="12 6 12 12 16 14"></polyline>
                        </svg>
                        <span>30 Minutes</span>
                    </div>
                    <div class="info-item">
                        <svg class="utensils-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M6 8V2m0 6h6m-6 0v14m12-6h-3a3 3 0 0 1-3-3V2m6 12v7"></path>
                        </svg>
                        <span>Japanese</span>
                    </div>
                </div>
            </a>
        </div>
    </section>

    <br><br>

    <section class="subscribe-section">
        <div class="subscribe-container">
            <div class="subscribe-content">
                <h2>Deliciousness to your inbox</h2>
                <p>Lorem ipsum dolor sit amet, consectetuipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqut enim ad minim</p>
                <br><br>
                <div class="subscribe-form-container">
                    <form class="subscribe-form">
                        <input type="email" placeholder="Your email address..." required>
                        <button type="submit">Subscribe</button>
                    </form>
                </div>
            </div>
            <img src="Images/kisspng-salad.png" alt="Decorative Vegetables" class="vegetables-image">
            <img src="Images/Photo.png" alt="Salad Bowl" class="salad-image">
        </div>
    </section>



    <footer class="footer-section">
        <div class="footer-container">
            <div class="footer-upper">
                <div class="footer-left">
                    <h2>Foodieland.</h2>
                    <p>Lorem ipsum dolor sit amet, consectetuipiscing elit,</p>
                </div>
                <div class="footer-right">
                    <a href="/recipes">Recipes</a>
                    <a href="/blog">Blog</a>
                    <a href="/contact">Contact</a>
                    <a href="/about-us">About us</a>
                </div>
            </div>
            <hr class="footer-divider">
            <div class="footer-lower">
                <p class="footer-copyright">© 2020 Flowbase. Powered by Webflow</p>
                <div class="footer-social">
                    <a href="https://www.facebook.com/login" target="_blank" rel="noopener noreferrer">
                        <svg class="social-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                        </svg>
                    </a>
                    <a href="https://twitter.com/login" target="_blank" rel="noopener noreferrer">
                        <svg class="social-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path>
                        </svg>
                    </a>
                    <a href="https://www.instagram.com/accounts/login/" target="_blank" rel="noopener noreferrer">
                        <svg class="social-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                            <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                            <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </footer>
    <script src="script.js"></script>
    <script src="popup_script.js"></script>
</body>

</html>