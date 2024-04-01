<?php  

session_start(); 

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image" href="images/lago.png">
    <title>Apnastudy.Com</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/solid.min.css" integrity="sha512-q31I2VNnkq2PPXEAZy9HXTl2yREt4dpick5JZmUe/sXxaC2Q6sX12rUYHpAXG613HTNOHAQdGKNcrwDLw8H7TQ==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
<!-- Fontawesome Link for Icons -->
    

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
   
<link rel="stylesheet"  href="css/preloader.css">
<link rel="stylesheet"  href="css/style.css">

<link rel="stylesheet"  href="css/slick.min.css">
<link rel="stylesheet"  href="css/slick-theme.min.css">


</head>

<div class="preloader">
        <div class="preloader-dot-loading">
            <div class="cssload-loading">
                <i></i>
                <i></i>
                <i></i>
                <i></i>
            </div>
        </div>
    </div>
<body>
<div class="container-fluid">
    <div class="row top_header">
        <div class="col-md-7 col-sm-12">
            <div class="title">
                <a href="index.php">Apna_Study.Com</a>
            </div>
        </div>
        
        <div class="col-md-4 col-sm-12">
           <div class="social_media">
                    <a href="https://www.facebook.com/profile.php?id=100009573664206&mibextid=ZbWKwL">Facebook</a>
                    <a href="https://instagram.com/subhendumajhi8673?utm_source=qr&igshid=OGIxMTE0OTdkZA==">Instagram</a>
                    <a href="https://www.linkedin.com/in/subhendu-majhi-436792247">Linkedin</a>
                </div>
          </div>
 
        <div class="row">
        <div class="col-md-1 col-sm-12">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                        Login
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="logout.php">Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
</div>

<div class="row">
    <div class="col-12">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/img/a1.jpg" class="d-block w-100" alt="Image 1">
                </div>
                <div class="carousel-item">
                    <img src="images/img/a2.jpg" class="d-block w-100" alt="Image 2">
                </div>
                <div class="carousel-item">
                    <img src="images/img/a3.jpg" class="d-block w-100" alt="Image 3">
                </div>
                <div class="carousel-item">
                    <img src="images/img/a4.jpg" class="d-block w-100" alt="Image 4">
                </div>
                <div class="carousel-item">
                    <img src="images/img/a5.jpg" class="d-block w-100" alt="Image 5">
                </div>
                
                <div class="carousel-item">
                    <img src="images/img/a7.jpg" class="d-block w-100" alt="Image 7">
                </div>
                
                <div class="carousel-item">
                    <img src="images/img/a9.jpg" class="d-block w-100" alt="Image 9">
                </div>
                <div class="carousel-item">
                    <img src="images/img/a10.jpg" class="d-block w-100" alt="Image 10">
                </div>
                <div class="carousel-item">
                    <img src="images/img/a11.jpg" class="d-block w-100" alt="Image 11">
                </div>
                <div class="carousel-item">
                    <img src="images/img/a12.webp" class="d-block w-100" alt="Image 12">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-target="#carouselExampleFade" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-target="#carouselExampleFade" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </button>
        </div>
    </div>
</div>

<div class="container-fluid-xl">
    <div class="row">
        <div class="col-12">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="home.php">Home</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="blogDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Blog
                            </a>
                            <div class="dropdown-menu" aria-labelledby="blogDropdown">
                                <a class="dropdown-item" href="blog-item-1.php">Blog Item 1</a>
                                <a class="dropdown-item" href="blog-item-1.php">Blog Item 2</a>
                                <a class="dropdown-item" href="blog-item-1.php">Blog Item 3</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="galleryDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Gallery
                            </a>
                            <div class="dropdown-menu" aria-labelledby="galleryDropdown">
                                <a class="dropdown-item" href="blog-item-1.php">Gallery Item 1</a>
                                <a class="dropdown-item" href="blog-item-1.php">Gallery Item 2</a>
                                <a class="dropdown-item" href="blog-item-1.php">Gallery Item 3</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Services
                            </a>
                            <div class="dropdown-menu" aria-labelledby="servicesDropdown">
                                <a class="dropdown-item" href="blog-item-1.php">Service 1</a>
                                <a class="dropdown-item" href="blog-item-1.php">Service 2</a>
                                <a class="dropdown-item" href="blog-item-1.php">Service 3</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="productsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Products
                            </a>
                            <div class="dropdown-menu" aria-labelledby="productsDropdown">
                                <a class="dropdown-item" href="blog-item-1.php">Product 1</a>
                                <a class="dropdown-item" href="blog-item-1.php">Product 2</a>
                                <a class="dropdown-item" href="blog-item-1.php">Product 3</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="blog-item-1.php">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="blog-item-1.php">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>

<nav>
    <div class="container-fluid-xl">
        <div class="row">
            <div class="col-12">
                <div class="title-a">
                    <div>
                         <p>*** Educational institutions are one of the only ways of life and brighten the face of futures. ***</p>
                         <p>*** Educational institutions are one of the only ways of life and brighten the face of futures. ***</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
 
 <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="title-b">
                    <h1>Apna Careers Futures Skill</h1>
                </div>
            </div>
            <div class="col-md-6">
                <div class="title-c">
                    <h1>Get 50 % courses free!</h1>
                <p>Sign up now</p>
                </div>
          </div>
     

         <section id="category">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-6">
                <div class="category-2-items pt-10">
                  <div class="row">
                    <!-- Course 1 -->
                   <div class="col-md-6">
                  <div class="singel-items text-center mt-30">
                    <div class="items-image">
                  <img src="images/category/b1.png" alt="Category" style="height: 130px; width: 130%;">
                </div>
                <div class="items-cont">
                  <a href="#">
                    <h5 style="color: black;">App Development</h5>
                    <span>07 courses</span>
                  </a>
                </div>
                <div class="rating">
                  <input type="radio" id="star5-1" name="rating-1" value="5" />
                  <label for="star5-1">&#9733;</label>
                  <input type="radio" id="star4-1" name="rating-1" value="4" />
                  <label for="star4-1">&#9733;</label>
                  <input type="radio" id="star3-1" name="rating-1" value="3" />
                  <label for="star3-1">&#9733;</label>
                  <input type="radio" id="star2-1" name="rating-1" value="2" />
                  <label for="star2-1">&#9733;</label>
                  <input type="radio" id="star1-1" name="rating-1" value="1" />
                  <label for="star1-1">&#9733;</label>
                </div>
                <div class="rating-value-1">Rating: <span id="selectedRating">0</span></div>
              </div>
            </div>

            <!-- Course 2 -->
            <div class="col-md-6">
              <div class="singel-items text-center mt-30">
                <div class="items-image">
                  <img src="images/category/b2.jpg" alt="Category" style="height: 130px; width: 130%;">
                </div>
                <div class="items-cont">
                  <a href="#">
                    <h5 style="color: black;">Web Development</h5>
                    <span>05 courses</span>
                  </a>
                </div>
                <div class="rating">
                  <input type="radio" id="star5-2" name="rating-2" value="5" />
                  <label for="star5-2">&#9733;</label>
                  <input type="radio" id="star4-2" name="rating-2" value="4" />
                  <label for="star4-2">&#9733;</label>
                  <input type="radio" id="star3-2" name="rating-2" value="3" />
                  <label for="star3-2">&#9733;</label>
                  <input type="radio" id="star2-2" name="rating-2" value="2" />
                  <label for="star2-2">&#9733;</label>
                  <input type="radio" id="star1-2" name="rating-2" value="1" />
                  <label for="star1-2">&#9733;</label>
                </div>
                <div class="rating-value-1">Rating: <span id="selectedRating">0</span></div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="singel-items text-center mt-30">
                <div class="items-image">
                  <img src="images/category/b3.jpg" alt="Category"style="height: 130px; width: 130%;">
                </div>
                <div class="items-cont">
                  <a href="#">
                    <h5 style="color: black;">UI/ UX /Photoshop</h5>
                    <span>09 courses</span>
                  </a>
                </div>
                <div class="rating">
                  <input type="radio" id="star5-3" name="rating-3" value="5" />
                  <label for="star5-3">&#9733;</label>
                  <input type="radio" id="star4-3" name="rating-3" value="4" />
                  <label for="star4-3">&#9733;</label>
                  <input type="radio" id="star3-3" name="rating-3" value="3" />
                  <label for="star3-3">&#9733;</label>
                  <input type="radio" id="star3-3" name="rating-3" value="2" />
                  <label for="star2-3">&#9733;</label>
                  <input type="radio" id="star1-3" name="rating-3" value="1" />
                  <label for="star1-3">&#9733;</label>
                </div>
                <div class="rating-value-1">Rating: <span id="selectedRating">0</span></div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="singel-items text-center mt-30">
                <div class="items-image">
                  <img src="images/category/b4.png" alt="Category"style="height: 130px; width: 130%;">
                </div>
                <div class="items-cont">
                  <a href="#">
                    <h5 style="color: black;">AWS Cloud Computing</h5>
                    <span>35 courses</span>
                  </a>
                </div>
                <div class="rating">
                  <input type="radio" id="star5-4" name="rating-4" value="5" />
                  <label for="star5-4">&#9733;</label>
                  <input type="radio" id="star4-4" name="rating-4" value="4" />
                  <label for="star4-4">&#9733;</label>
                  <input type="radio" id="star3-4" name="rating-4" value="3" />
                  <label for="star3-4">&#9733;</label>
                  <input type="radio" id="star2-4" name="rating-4" value="2" />
                  <label for="star2-4">&#9733;</label>
                  <input type="radio" id="star1-4" name="rating-4" value="1" />
                  <label for="star1-4">&#9733;</label>
                </div>
                <div class="rating-value-1">Rating: <span id="selectedRating">0</span></div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="singel-items text-center mt-30">
                <div class="items-image">
                  <img src="images/category/b5.jpg" alt="Category"style="height: 130px; width: 130%;">
                </div>
                <div class="items-cont">
                  <a href="#">
                    <h5 style="color: black;">Cyber Security</h5>
                    <span>04 courses</span>
                  </a>
                </div>
                <div class="rating">
                  <input type="radio" id="star5-5" name="rating-5" value="5" />
                  <label for="star5-5">&#9733;</label>
                  <input type="radio" id="star4-5" name="rating-5" value="4" />
                  <label for="star4-5">&#9733;</label>
                  <input type="radio" id="star3-5" name="rating-5" value="3" />
                  <label for="star3-5">&#9733;</label>
                  <input type="radio" id="star2-5" name="rating-5" value="2" />
                  <label for="star2-5">&#9733;</label>
                  <input type="radio" id="star1-5" name="rating-5" value="1" />
                  <label for="star1-5">&#9733;</label>
                </div>
                <div class="rating-value-1">Rating: <span id="selectedRating">0</span></div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="singel-items text-center mt-30">
                <div class="items-image">
                  <img src="images/category/b6.jpeg" alt="Category"style="height: 130px; width: 130%;">
                </div>
                <div class="items-cont">
                  <a href="#">
                    <h5 style="color: black;">Hardware & Network</h5>
                    <span>55 courses</span>
                  </a>
                </div>
                <div class="rating">
                  <input type="radio" id="star5-6" name="rating-6" value="5" />
                  <label for="star5-6">&#9733;</label>
                  <input type="radio" id="star4-6" name="rating-6" value="4" />
                  <label for="star4-6">&#9733;</label>
                  <input type="radio" id="star3-6" name="rating-6" value="3" />
                  <label for="star3-6">&#9733;</label>
                  <input type="radio" id="star2-6" name="rating-6" value="2" />
                  <label for="star2-6">&#9733;</label>
                  <input type="radio" id="star1-6" name="rating-6" value="1" />
                  <label for="star1-6">&#9733;</label>
                </div>
                <div class="rating-value-1">Rating: <span id="selectedRating">0</span></div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="singel-items text-center mt-30">
                <div class="items-image">
                  <img src="images/category/b7.jpeg" alt="Category"style="height: 130px; width: 130%;">
                </div>
                <div class="items-cont">
                  <a href="#">
                    <h5 style="color: black;">Electrical</h5>
                    <span>04 courses</span>
                  </a>
                </div>
                <div class="rating">
                  <input type="radio" id="star5-7" name="rating-7" value="5" />
                  <label for="star5-7">&#9733;</label>
                  <input type="radio" id="star4-7" name="rating-7" value="4" />
                  <label for="star4-7">&#9733;</label>
                  <input type="radio" id="star3-7" name="rating-7" value="3" />
                  <label for="star3-7">&#9733;</label>
                  <input type="radio" id="star2-7" name="rating-7" value="2" />
                  <label for="star2-7">&#9733;</label>
                  <input type="radio" id="star1-7" name="rating-7" value="1" />
                  <label for="star1-7">&#9733;</label>
                </div>
                <div class="rating-value-1">Rating: <span id="selectedRating">0</span></div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="singel-items text-center mt-30">
                <div class="items-image">
                  <img src="images/category/b8.jpg" alt="Category"style="height: 130px; width: 130%;">
                </div>
                <div class="items-cont">
                  <a href="#">
                    <h5 style="color: black;">Electronic</h5>
                    <span>55 courses</span>
                  </a>
                </div>
                <div class="rating">
                  <input type="radio" id="star5-8" name="rating-8" value="5" />
                  <label for="star5-8">&#9733;</label>
                  <input type="radio" id="star4-8" name="rating-8" value="4" />
                  <label for="star4-8">&#9733;</label>
                  <input type="radio" id="star3-8" name="rating-8" value="3" />
                  <label for="star3-8">&#9733;</label>
                  <input type="radio" id="star2-8" name="rating-8" value="2" />
                  <label for="star2-8">&#9733;</label>
                  <input type="radio" id="star1-8" name="rating-8" value="1" />
                  <label for="star1-8">&#9733;</label>
                </div>
                <div class="rating-value-1">Rating: <span id="selectedRating">0</span></div>
              </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="title-d">
                        <p>Career skills are the sum of your professional knowledge, skills and experience. They determine how successful you are in  making decisions, influencing outcomes, effecting change doing a good job</p>
                    </div>
                </div>
            </div>


                        <!-- Continue adding more courses with similar structure -->

          </div>
        </div>
      </div>

      <!-- Contact Form -->
      <div class="col-lg-6">
                <div class="container-fluid">
                    <div class="main-form">
                        <form action="form_process.php" method="POST">
                            <div class="singel-form">
                                <input type="text" name="name" placeholder="Your name" required>
                            </div>
                            <div class="singel-form">
                                <select name="course">
                                    <option value="" disabled selected>Select Course</option>
                                    <option value="App Devlopment">App Devlopment</option>
                                    <option value="Web Devlopment">Web Devlopment</option>
                                    <option value="UI/ UX /Photoshop Design">UI/ UX /Photoshop Design</option>
                                    <option value="AWS Cloud Computing">AWS Cloud Computing</option>
                                    <option value="Cyber Security">Cyber Security</option>
                                    <option value="Hardware & Network">Hardware & Network</option>
                                    <option value="Electrical Skill">Electrical Skill</option>
                                    <option value="Electronic Skill">Electronic Skill</option>
                                    <option value="Html Developer">Html Developer</option>
                                    <option value="Php Developer">Php Developer</option>
                                    <option value="Laravel Developer">Laravel Developer</option>
                                    <option value="Paython Developer">Paython Developer</option>
                                </select>
                            </div>

                            <div class="singel-form">
                                <input type="email" name="email" placeholder="Your email" required>
                            </div>
                            <div class="singel-form">
                                <input type="tel" name="phone" placeholder="Your phone" required>
                            </div>
                            <div class="singel-form">
                                <textarea name="address" placeholder="Your address" rows="4" required></textarea>
                            </div>
                            <div class="singel-form">
                                <button class="main-btn" type="submit">Get it Now Submit</button>
                            </div>
                        </form>
                        <div class="form-message"></div>
                        <a style="text-decoration: none; font-family: initial; font-weight: bold;" href="view_data.php">View</a>
                    </div>

                </div>
               

              <div class="col-lg-6">
                <div class="student-slied">
                    <div class="singel-student">
                        <h3>Happy Students</h3>
                       <img src="images/teachers-2/t3.png" width="600">
                        <h6>Anjli Mondal</h6>
                        <span>C.S, Engineering</span>
                    </div> 
               

                <div class="student-image">
                    <img src="images/teachers/teacher-2/happy.png" alt="Image" style="height: 500px;">
                </div>
            </div>
        </div>

                 <div class="container-fluid-xl">
                <div class="col-12">
                    <div  class="title-d p-2" >
                        <p style="height: 10px; font-size: 18px;">Even though your time on the job is temporary, if you do a good enough job, your work there will last forever. Your comfort zone is a place where you keep yourself in a self-illusion and nothing can grow there but your potentiality can grow only when you can think and grow out of that zone.</p>
                    </div>
                </div>
            </div>
          
     </section>

<div class="container-fluid">
    <div class="custom-video-embed embed-responsive embed-responsive-16by9" style="border: 10px solid whitesmoke; padding: 100px; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);">
    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/BNbPsiCGQzw" allowfullscreen></iframe>
</div>


<!-- COURSE PART START -->
    
<section id="course-part" class="pt-50 pb-100">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-title pb-45">
                    <h2>Featured courses</h2>
                </div>
            </div>

        <div class="row course-slied mt-20">
            <div class="col-lg-4">
                <div class="singel-course-2">
                    <div class="thum">
                        <div class="image">
                            <img src="images/course/cu-1.jpg" alt="Course" style="height: 150px;">
                        </div>
                        <div class="price">
                            <span>Free</span>
                        </div>
                        <div class="course-teacher">
                            <div class="thum">
                                <a href="#"><img src="images/course/teacher/t-2.png" alt="teacher"></a>
                            </div>
                            <div class="name">
                                <a href="https://www.coursera.org/?irclickid=V6H3MuT6rxyNTNNWd9xWC0CcUkAQEQRusX5AQU0&irgwc=1&utm_medium=partners&utm_source=impact&utm_campaign=3030402&utm_content=b2c">
                                    <h6>Mohuljit Mondal</h6>
                                </a>
                         </div>
                        <div class="rating-star-rating">
                            <input type="radio" id="star5-2" name="rating-2" value="5" />
                            <label for="star5-2">&#9733;</label>
                            <input type="radio" id="star4-2" name="rating-2" value="4" />
                            <label for="star4-2">&#9733;</label>
                            <input type="radio" id="star3-2" name="rating-2" value="3" />
                            <label for="star3-2">&#9733;</label>
                            <input type="radio" id="star2-2" name="rating-2" value="2" />
                            <label for="star2-2">&#9733;</label>
                            <input type="radio" id="star1-2" name="rating-2" value="1" />
                            <label for="star1-2">&#9733;</label>
                        </div>
                    </div>
                         <div class="rating-value-1">Rating: <span id="selectedRating">50000</span></div>
                    </div>
                    <div class="cont">
                        <a href="https://www.coursera.org/?irclickid=V6H3MuT6rxyNTNNWd9xWC0CcUkAQEQRusX5AQU0&irgwc=1&utm_medium=partners&utm_source=impact&utm_campaign=3030402&utm_content=b2c">
                            <h4>Learn basic from start for beginner students</h4>
                        </a>
                    </div>
                </div>
            </div>


                <div class="col-lg-4">
                    <div class="singel-course-2">
                        <div class="thum">
                            <div class="image">
                                <img src="images/course/cu-2.jpg" alt="Course" style="height: 150px;">
                            </div>
                            <div class="price">
                                <span>Free</span>
                            </div>
                            <div class="course-teacher">
                                <div class="thum">
                                    <a href="#"><img src="images/course/teacher/t-2.png" alt="teacher"></a>
                                </div>
                                <div class="name">
                                    <a href="https://www.coursera.org/?irclickid=V6H3MuT6rxyNTNNWd9xWC0CcUkAQEQRusX5AQU0&irgwc=1&utm_medium=partners&utm_source=impact&utm_campaign=3030402&utm_content=b2c"><h6>Anchani Ghosal</h6></a>
                                </div>
                                <div class="rating-star-rating">
                                    <input type="radio" id="star5-2" name="rating-1" value="5" />
                                    <label for="star5-1">&#9733;</label>
                                    <input type="radio" id="star4-2" name="rating-1" value="4" />
                                    <label for="star4-1">&#9733;</label>
                                    <input type="radio" id="star3-2" name="rating-1" value="3" />
                                    <label for="star3-1">&#9733;</label>
                                    <input type="radio" id="star2-2" name="rating-1" value="2" />
                                    <label for="star2-1">&#9733;</label>
                                    <input type="radio" id="star1-2" name="rating-1" value="1" />
                                    <label for="star1-1">&#9733;</label>
                                </div>
                          </div>
                        <div class="rating-value-1">Rating: <span id="rating">50000</span></div>
                    </div>
                        <div class="cont">
                            <a href="https://www.coursera.org/?irclickid=V6H3MuT6rxyNTNNWd9xWC0CcUkAQEQRusX5AQU0&irgwc=1&utm_medium=partners&utm_source=impact&utm_campaign=3030402&utm_content=b2c">
                                <h4>Learn basic from start for beginner students</h4>
                            </a>
                        </div>
                    </div> 
                </div>


                <div class="col-lg-4">
                    <div class="singel-course-2">
                        <div class="thum">
                            <div class="image">
                                <img src="images/course/cu-3.jpg" alt="Course" style="height: 150px;">
                            </div>
                            <div class="price">
                                <span>Free</span>
                            </div>
                            <div class="course-teacher">
                                <div class="thum">
                                    <a href="#"><img src="images/course/teacher/t-2.png" alt="teacher"></a>
                                </div>
                                <div class="name">
                                    <a href="https://www.coursera.org/?irclickid=V6H3MuT6rxyNTNNWd9xWC0CcUkAQEQRusX5AQU0&irgwc=1&utm_medium=partners&utm_source=impact&utm_campaign=3030402&utm_content=b2c"><h6>Rahul Mllike</h6></a>
                                </div>
                                <div class="rating-star-rating">
                                    <input type="radio" id="star5-2" name="rating-2" value="5" />
                                    <label for="star5-2">&#9733;</label>
                                    <input type="radio" id="star4-2" name="rating-2" value="4" />
                                    <label for="star4-2">&#9733;</label>
                                    <input type="radio" id="star3-2" name="rating-2" value="3" />
                                    <label for="star3-2">&#9733;</label>
                                    <input type="radio" id="star2-2" name="rating-2" value="2" />
                                    <label for="star2-2">&#9733;</label>
                                    <input type="radio" id="star1-2" name="rating-2" value="1" />
                                    <label for="star1-2">&#9733;</label>
                                </div>
                            </div>
                                <div class="rating-value-1">Rating: <span id="selectedRating">50000</span></div>
                            </div>
                        <div class="cont">
                            <a href="https://www.coursera.org/?irclickid=V6H3MuT6rxyNTNNWd9xWC0CcUkAQEQRusX5AQU0&irgwc=1&utm_medium=partners&utm_source=impact&utm_campaign=3030402&utm_content=b2c">
                                <h4>Learn basic from start for beginner students</h4>
                            </a>
                        </div>
                    </div> 
                </div>

                <div class="col-lg-4">
                    <div class="singel-course-2">
                        <div class="thum">
                            <div class="image">
                                <img src="images/course/cu-4.jpg" alt="Course" style="height: 150px;">
                            </div>
                            <div class="price">
                                <span>Free</span>
                            </div>
                            <div class="course-teacher">
                                <div class="thum">
                                    <a href="#"><img src="images/course/teacher/t-2.png" alt="teacher"></a>
                                </div>
                                <div class="name">
                                    <a href="https://www.coursera.org/?irclickid=V6H3MuT6rxyNTNNWd9xWC0CcUkAQEQRusX5AQU0&irgwc=1&utm_medium=partners&utm_source=impact&utm_campaign=3030402&utm_content=b2c"><h6>Anjali karmokar</h6></a>
                                </div>
                                <div class="rating-star-rating">
                                    <input type="radio" id="star5-2" name="rating-2" value="5" />
                                    <label for="star5-2">&#9733;</label>
                                    <input type="radio" id="star4-2" name="rating-2" value="4" />
                                    <label for="star4-2">&#9733;</label>
                                    <input type="radio" id="star3-2" name="rating-2" value="3" />
                                    <label for="star3-2">&#9733;</label>
                                    <input type="radio" id="star2-2" name="rating-2" value="2" />
                                    <label for="star2-2">&#9733;</label>
                                    <input type="radio" id="star1-2" name="rating-2" value="1" />
                                    <label for="star1-2">&#9733;</label>
                                </div>
                            </div>
                                <div class="rating-value-1">Rating: <span id="selectedRating">50000</span></div>
                            </div>
                        <div class="cont">
                            <a href="https://www.coursera.org/?irclickid=V6H3MuT6rxyNTNNWd9xWC0CcUkAQEQRusX5AQU0&irgwc=1&utm_medium=partners&utm_source=impact&utm_campaign=3030402&utm_content=b2c">
                                <h4>Learn basic from start for beginner students</h4>
                            </a>
                        </div>
                    </div> 
                </div>

                <div class="col-lg-4">
                    <div class="singel-course-2">
                        <div class="thum">
                            <div class="image">
                                <img src="images/course/cu-5.jpg" alt="Course" style="height: 150px;">
                            </div>
                            <div class="price">
                                <span>Free</span>
                            </div>
                            <div class="course-teacher">
                                <div class="thum">
                                    <a href="#"><img src="images/course/teacher/t-2.png" alt="teacher"></a>
                                </div>
                                <div class="name">
                                    <a href="https://www.coursera.org/?irclickid=V6H3MuT6rxyNTNNWd9xWC0CcUkAQEQRusX5AQU0&irgwc=1&utm_medium=partners&utm_source=impact&utm_campaign=3030402&utm_content=b2c"><h6>kamli Prmokar</h6></a>
                                </div>
                                <div class="rating-star-rating">
                                    <input type="radio" id="star5-2" name="rating-2" value="5" />
                                    <label for="star5-2">&#9733;</label>
                                    <input type="radio" id="star4-2" name="rating-2" value="4" />
                                    <label for="star4-2">&#9733;</label>
                                    <input type="radio" id="star3-2" name="rating-2" value="3" />
                                    <label for="star3-2">&#9733;</label>
                                    <input type="radio" id="star2-2" name="rating-2" value="2" />
                                    <label for="star2-2">&#9733;</label>
                                    <input type="radio" id="star1-2" name="rating-2" value="1" />
                                    <label for="star1-2">&#9733;</label>
                                </div>
                            </div>
                               <div class="rating-value-1">Rating: <span id="selectedRating">50000</span></div>
                            </div>
                        <div class="cont">
                            <a href="https://www.coursera.org/?irclickid=V6H3MuT6rxyNTNNWd9xWC0CcUkAQEQRusX5AQU0&irgwc=1&utm_medium=partners&utm_source=impact&utm_campaign=3030402&utm_content=b2c">
                                <h4>Learn basic from start for beginner students</h4>
                            </a>
                        </div>
                    </div> 
                </div>


                <div class="col-lg-4">
                    <div class="singel-course-2">
                        <div class="thum">
                            <div class="image">
                                <img src="images/course/cu-6.jpg" alt="Course" style="height: 150px;">
                            </div>
                            <div class="price">
                                <span>Free</span>
                            </div>
                            <div class="course-teacher">
                                <div class="thum">
                                    <a href="#"><img src="images/course/teacher/t-2.png" alt="teacher"></a>
                                </div>
                                <div class="name">
                                    <a href="https://www.coursera.org/?irclickid=V6H3MuT6rxyNTNNWd9xWC0CcUkAQEQRusX5AQU0&irgwc=1&utm_medium=partners&utm_source=impact&utm_campaign=3030402&utm_content=b2c"><h6>Souvik Sarkar</h6></a>
                                </div>
                                <div class="rating-star-rating">
                                    <input type="radio" id="star5-2" name="rating-2" value="5" />
                                    <label for="star5-2">&#9733;</label>
                                    <input type="radio" id="star4-2" name="rating-2" value="4" />
                                    <label for="star4-2">&#9733;</label>
                                    <input type="radio" id="star3-2" name="rating-2" value="3" />
                                    <label for="star3-2">&#9733;</label>
                                    <input type="radio" id="star2-2" name="rating-2" value="2" />
                                    <label for="star2-2">&#9733;</label>
                                    <input type="radio" id="star1-2" name="rating-2" value="1" />
                                    <label for="star1-2">&#9733;</label>
                                </div>
                            </div>
                               <div class="rating-value-1">Rating: <span id="selectedRating">50000</span></div>
                            </div>
                        <div class="cont">
                            <a href="https://www.coursera.org/?irclickid=V6H3MuT6rxyNTNNWd9xWC0CcUkAQEQRusX5AQU0&irgwc=1&utm_medium=partners&utm_source=impact&utm_campaign=3030402&utm_content=b2c">
                                <h4>Learn basic from start for beginner students</h4>
                            </a>
                        </div>
                    </div> 
                </div>

        </div>
    </div>
</section>


 <!-- COUNTER PART START -->
    
 <div id="counter-part" class="bg_cover pt-50 pb-50" data-overlay="8" style="background-image: url(images/bg-2.jpg)">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="singel-counter text-center mt-40">
                    <span><span class="counter">050</span></span>
                    <p>Total Teachers</p>
                </div> 
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="singel-counter text-center mt-40">
                    <span><span class="counter">078</span></span>
                    <p>Total Students</p>
                </div> 
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="singel-counter text-center mt-40">
                    <span><span class="counter">045</span></span>
                    <p>Courses Uploaded</p>
                </div> 
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="singel-counter text-center mt-40">
                    <span><span class="counter">021</span></span>
                    <p>People certified</p>
                </div>
            </div>
        </div> 
    </div> 
</div>


 
    <!--  EVENT PART START  -->

    <section id="event-part" class="pt-50">
        <div class="container-fluid-xl">
            <div class="event-bg bg_cover" style="background-image: url(images/bg-3.jpg)">
                <div class="row">
                    <div class="col-lg-5 offset-lg-6 col-md-8 offset-md-2 col-sm-10 offset-sm-1">
                        <div class="event-2 pt-90 pb-70">
                            <div class="event-title">
                                <h3>Upcoming Events 23-24</h3>
                            </div> 
                            <ul>
                                <li>
                                    <div class="singel-event">
                                        <span><i class="fa fa-calendar"></i> 12 September 2023</span>
                                        <a href="#"><h4>Campus Drives Workshop Technology</h4></a>
                                        <span><i class="fa fa-clock-o"></i> 10:00 Am - 3:00 Pm</span>
                                        <span><i class="fa fa-map-marker"></i> Salt Lake Sector 5, Kolkata 7000091</span>
                                    </div>
                                </li>

                                <li>
                                    <div class="singel-event">
                                        <span><i class="fa fa-calendar"></i> 22 October 2023</span>
                                        <a href="#"><h4>Technology Meeting Summit</h4></a>
                                        <span><i class="fa fa-clock-o"></i> 10:00 Am - 3:00 Pm</span>
                                        <span><i class="fa fa-map-marker"></i>Salt Lake Sector 5, Kolkata 7000091</span>
                                    </div>
                                </li>

                                <li>
                                    <div class="singel-event">
                                        <span><i class="fa fa-calendar"></i> 24 October 2023</span>
                                        <a href="#"><h4>Technology Meeting Summit</h4></a>
                                        <span><i class="fa fa-clock-o"></i> 10:00 Am - 3:00 Pm</span>
                                        <span><i class="fa fa-map-marker"></i>Salt Lake Sector 5, Kolkata 7000091</span>
                                    </div>
                                </li>

                                <li>
                                    <div class="singel-event">
                                        <span><i class="fa fa-calendar"></i> 26 October 2024</span>
                                        <a href="#"><h4>Technology Metting Summit</h4></a>
                                        <span><i class="fa fa-clock-o"></i> 10:00 Am - 3:00 Pm</span>
                                        <span><i class="fa fa-map-marker"></i>Salt Lake Sector 5, Kolkata 7000091</span>
                                    </div>
                                </li>

                                <li>
                                    <div class="singel-event">
                                        <span><i class="fa fa-calendar"></i> 29 October 2025</span>
                                        <a href="#"><h4>Technology Drives Summit</h4></a>
                                        <span><i class="fa fa-clock-o"></i> 10:00 Am - 3:00 Pm</span>
                                        <span><i class="fa fa-map-marker"></i>Salt Lake Sector 5, Kolkata 7000091</span>
                                    </div>
                                </li>

                                <li>
                                    <div class="singel-event">
                                        <span><i class="fa fa-calendar"></i> 19 December 2026</span>
                                        <a href="#"><h4>Technology Enviroement conference Metting</h4></a>
                                        <span><i class="fa fa-clock-o"></i> 10:00 Am - 3:00 Pm</span>
                                        <span><i class="fa fa-map-marker"></i>Salt Lake Sector 5, Kolkata 7000091</span>
                                    </div>
                                </li>
                            </ul> 
                        </div> 
                    </div>
                </div> 
            </div>
        </div>  
    </section>


     <section id="news-part">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title-1">
                        <h5>Latest New Blog</h5>
                        <h2>From the new's</h2>
                    </div> 
                </div>
            </div> 
            <div class="row">
                <div class="col-lg-6">
                    <div class="singel-news">
                        <div class="news-thum">
                            <img src="images/news/c-1.jpg" alt="News">
                        </div>
                        <div class="news-cont">
                            <ul>
                                <li><a href="#"><i class="fa fa-calendar"></i>2 December 2023 </a></li>
                                <li><a href="#"> <span>By</span> Adam linn</a></li>
                            </ul>
                            <a href="#"><h3 style="text-decoration:none ;">Tips to grade high cgpa in  internship life</h3></a>
                            <p>Consider applying for internships beginning your freshman year. Many college students pursue internships during their junior or senior year of school. However, it's never too early to begin applying and participating in internship programs, especially programs that are directly related to your career path</p>
                        </div>
                    </div> 
                </div>


                <div class="col-lg-6">
                    <div class="singel-news news-list">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="news-thum">
                                    <img src="images/news/c-2.jpg" alt="News" style="height: 100px;">
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="news-cont">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-calendar"></i>2 December 2023 </a></li>
                                        <li><a href="#"> <span>By</span>linn Ralin</a></li>
                                    </ul>
                                    <a href="blog.html"><h3>Intellectual communication</h3></a>
                                    <p>On a personal level, Intercultural Communication can help us understand our own preferences, when communicating across cultures</p>
                                </div>
                            </div>
                        </div> 
                    </div> 

                    <div class="singel-news news-list">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="news-thum mt-30">
                                    <img src="images/news/c-3.jFIF" alt="News" style="height: 100px;">
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="news-cont mt-30">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-calendar"></i>2 December 2024 </a></li>
                                        <li><a href="#"> <span>By</span> Adam linn</a></li>
                                    </ul>
                                    <a href="blog.html"><h3>Study makes you perfect</h3></a>
                                    <p>Adam Edmund Linn is an American author and essayist. Linn’s recent work includes the satirical and several of his personal essays have been adapted for audio broadcast</p>
                                </div>
                            </div>
                        </div> 
                    </div> 

                    <div class="singel-news news-list">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="news-thum mt-30">
                                    <img src="images/news/c-4.jpg" alt="News" style="height: 100px;">
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="news-cont mt-30">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-calendar"></i>2 December 2025 </a></li>
                                        <li><a href="#"> <span>By</span> Adam linn</a></li>
                                    </ul>
                                    <a href="blog.html"><h3>Technology edcution is now....</h3></a>
                                    <p>Technology is an effective way to promote a healthy educational system worldwide. </p>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div> 
    </section>
    
    <!-- PATNAR LOGO PART START -->
    <div class="row">
    <section id="picture">
        <div class="container-fluid-xl">
            <div class="card-images">        
               <li class="card">
                    <div class="img"><img src="images/patnar-logo/p-2.png" alt="Logo 2"></div>
                </li>
                <li class="card">
                    <div class="img"><img src="images/patnar-logo/p-3.png" alt="Logo 3"></div>
                </li>
                <li class="card">
                    <div class="img"><img src="images/patnar-logo/p-4.png" alt="Logo 3"></div>
                </li>
                <li class="card">
                    <div class="img"><img src="images/patnar-logo/p-5.png" alt="Logo 3"></div>
                </li>
                <li class="card">
                    <div class="img"><img src="images/patnar-logo/p-6.png" alt="Logo 3"></div>
                </li>
                <li class="card">
                    <div class="img"><img src="images/patnar-logo/p-8.png" alt="Logo 3"></div>
                </li>
                <li class="card">
                    <div class="img"><img src="images/patnar-logo/p-10.png" alt="Logo 3"></div>
                </li>
            </div>
        </div>
    </section>


<!--FOOTER PART START -->
    
    <footer id="footer-part">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-about">
                        <div class="logo">
                            <a href="#"><img src="images/logo-2.png" alt="Logo" style="height: 60px;"></a>
                        </div>

                        <p>An educational institution and especially devoted to technical fields.</p>
                        <div class="social-links">
                        <a href="https://www.facebook.com/profile.php?id=100009573664206&mibextid=ZbWKwL" target="_blank" class="social-link facebook">Facebook</a>
                        <a href="https://instagram.com/subhendumajhi8673?utm_source=qr&igshid=OGIxMTE0OTdkZA==" target="_blank" class="social-link instagram">Instagram</a>
                        <a href="https://www.linkedin.com/in/subhendu-majhi-436792247" target="_blank" class="social-link linkedin">LinkedIn</a>
                    </div>
                    </div> 
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer-link">
                        <div class="footer-title">
                            <h6>Sitemap</h6>
                        </div>

                        <ul>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Home</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>About us</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Courses</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>News</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Event</a></li>
                        </ul>
                        <ul>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Gallery</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Shop</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Teachers</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Services</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Contact</a></li>
                        </ul>
                    </div> 
                </div>

                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="footer-link support">
                        <div class="footer-title">
                            <h6>Support</h6>
                        </div>
                        <ul>
                            <li><a href="#"><i class="fa fa-angle-right"></i>FAQS</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Privacy</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Policy</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Support</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Documentation</a></li>
                        </ul>
                    </div> 
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="footer-address">
                        <div class="footer-title">
                            <h6>Contact Us</h6>
                        </div>
                        <ul>
                            <li>
                                <div class="icon">
                                    <i class="fa fa-home" style="color: royalblue;"></i>
                                </div>
                                <div class="cont">
                                    <p>Salt Lake City,Kolkata,7000091 </p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fa fa-phone" style="color: royalblue;"></i>
                                </div>
                                <div class="cont">
                                    <p>Contact:+91 9733960608</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fa fa-envelope-o" style="color: royalblue;"></i>
                                </div>
                                <div class="cont">
                                    <p>subhendu@Gmail.com</p>
                                </div>
                            </li>
                        </ul>
                    </div> 
                </div>
            </div> 
        </div> 
    </div>   
</footer>

        

<script src="js/jquery-3.6.0.min.js"></script>
<script src="js/slick.min.js"></script>

<script src="js/script.js"></script>


</body>
</html>

<?php
    }
    else{
        header("Location:index.php");
        exit();
    }
?>