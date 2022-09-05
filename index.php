<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UrbanFeat | Home</title>

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">

    <style>
    .book-section {
    padding: 5%;
}

.book-container {
    padding: 10%;
    text-align: center;
    width: -moz-fit-content;
    width: fit-content;
    margin: auto;
    margin-top: 5%;
    border-radius: 5px;
    background-color: #FFFFFF;
    background: rgba( 255, 255, 255, 0.25 );
    box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.369);
    backdrop-filter: blur( 4px );
    -webkit-backdrop-filter: blur( 4px );
    border-radius: 5px;
}

.book-heading, .book-title{
    text-align: center;
}

.book-heading {
    margin-top: 2%;
    font-size: 2rem;
}

input[type="text"], [type="email"] {
    width: 100%; 

}

input[type="email"] {
    border: 1px solid #ddd;
    padding: 10px;
}

input[name="date"] {
    padding: 10px;
    outline: none;
    border: 1px solid #ddd;
    border-radius: 3px;
    width: 100%;

}

input[name="date"]:focus {
    border: 3px solid rgba(15, 92, 147,0.5);
  }
    </style>
</head>
<body>

<?php include_once('process/tours.php'); ?> 

        <section class="header">
            <nav class="navbar">
                <a href="index.html"><img src="images/logo.png" alt="urban-feat-logo" class="C-logo"></a>
                    <ul class="nav-menu">
                        <li class="nav-item">
                            <a href="index.php" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">About</a>
                        </li>
                        <li class="nav-item">
                            <a href="#contact" class="nav-link">Contact</a>
                        </li>
                        <a href="admin/admin-login.php" class="admin-login"><button class="log-btn">Log in as Admin</button></a>
                    </ul>
                    <div class="hamburger">
                        <span class="bar"></span>
                        <span class="bar"></span>
                        <span class="bar"></span>
                    </div>
                </nav>
        
                <div class="slideshow-container">
        
                    <div class="mySlides fade">
                      <img src="images/hero-img.png" alt="house" class="hero-img">
                    </div>
                    
                    <div class="mySlides fade">
                      <img src="images/hero-img2.png" alt="house" class="hero-img">
                    </div>
                    
                    <div class="mySlides fade">
                      <img src="images/hero-img3.png" alt="house" class="hero-img">
                    </div>
                    
                    </div>
        
                    <div style="text-align:center">
                        <span class="dot"></span> 
                        <span class="dot"></span> 
                        <span class="dot"></span> 
                      </div>
        
                <div class="text-box">
                    <h1>LET US GUIDE YOU HOME</h1>
                    <p>Find a variety of properties that suit you very easily. <br>Forget all difficulties in finding a residence!</p>
                    <a href="#properties"><button class="view-btn">View properties</button></a>
                </div>
            </section>

            <div class="stats">
                <div><p class="number">10k+</p><p class="para stat-text">SOLD HOUSES</p></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <div><p class="number">314</p><p class="para stat-text">STAFF</p></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <div><p class="number">12K+</p><p class="para stat-text">HOUSES</p></div>
          </div> <br>


          <section class="partners">
            <div class="partners-row">
                <div class="partners-col">
                    <img src="images/partner1.png" alt="moran-real-estate">
                    <img src="images/partner2.png" alt="moran-real-estate">
                    <img src="images/partner3.png" alt="kp-capital">
                    <img src="images/partner4.png" alt="pepsi" style="height:70px; width:70px;">
                </div>
            </div>
        </section> <br><br><br><br>
    
        <!-- Available Properties -->

        <section class="available-properties" id="properties">
            <h2>Available Properties</h2><br><br>
        
            <?php include_once('process/viewImages.php'); ?> <br><br><br>

            <a href="more-properties.php"><button class="see-more-btn">See More</button></a> <br><br><br>
        
            </section>

    <div class="book-section" id="contact">
        <h2 class="book-heading">Book a tour</h2> <br>
        
        <p class="book-title">If you'd like to see the house in person, book a tour below!</p> <br> <br>
        
        <form action="index.php" method="POST" class="book-container">
        <input type="text" name="title" placeholder="Please enter the title of the house" style="float: none;"> <br><br>
        <input type="text" name="name" placeholder="What is your full name?" style="float: none;"> <br><br>
        <input type="email" name="email" placeholder="What is your email address?"> <br><br>
        <p>Select a time for your visit</p> <br> 
        <input list="available-times" name="date" placeholder="Select a convenient time" size="30"> <br>
        <datalist id="available-times">
        <option value="Monday, August 23rd. 2:00pm"></option>
            <option value="Thursday, August 25th. 12:45pm"></option>
            <option value="Friday August 26th. 9:30am"></option>
            <option value="Wednesday, August 31st. 1:30pm"></option>
            <option value="Friday September 2nd. 4:30pm"></option>
            <option value="Saturday September 3rd. 3:00pm"></option>
            <option value="Tuesday, September 6th. 3:00pm"></option>
        </datalist> <br><br><br>

        <button type="submit" name="book" class="log-btn">Book Tour</button>
    </form>
</div>


    <script src="js/script.js"></script>
</body>
</html>