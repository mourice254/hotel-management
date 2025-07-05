<?php
// Start session if needed
session_start();

// Rooms data array (you can later fetch this from a database)
$rooms = [
    [
        'title' => 'Family Room',
        'image' => 'Resources/n3.jfif',
        'adults' => 1,
        'category' => 'Single',
        'facilities' => 'Closet with hangers , HD TV',
        'bed' => 'One Bed',
        'price' => 4000
    ],
    [
        'title' => 'Premium King Room',
        'image' => 'Resources/n2.jfif',
        'adults' => 1,
        'category' => 'Single',
        'facilities' => 'Closet with hangers , HD TV',
        'bed' => 'One Bed',
        'price' => 6000
    ],
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Hirato</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    crossorigin="anonymous" />
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/683b4b40e3.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>

  <!-------------------------------Top Nav Start------------------------------>
  <div class="container-fluid w-100">
    <div class="row">
      <div class="col">
        <div class="card bg-dark text-white">
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active" style="height: 600px;">
                <img src="Resources/banner.png" class="d-block w-100 h-100" alt="..." />
              </div>
              <div class="carousel-item" style="height: 600px;">
                <img src="Resources/banner2.png" class="d-block w-100 h-100" alt="..." />
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>

          <div class="card-img-overlay">
            <h5 class="card-title">
              <div>
                <div class="float-left">
                  <div class="nav-item" role="presentation">
                    <a class="nav-link active logo " id="pills-home-tab" data-toggle="pill" href="#pills-home"
                      role="tab" aria-controls="pills-home" aria-selected="true"> <i class="fab fa-pied-piper"></i>  Hirato
                    </a>
                  </div>
                </div>

                <div class="float-right font-weight-bold h5">
                  <ul class="nav nav-pills ml-5 navl">
                    <li class="nav-item">
                      <a class="nav-link" href="index.php" style="color: white;">Home</a>
                    </li>
                    <li>
                      <a class="nav-link" href="rooms.php" style="color: white;">Rooms</a>
                    </li>
                    <li>
                      <a class="nav-link" href="blog.php" style="color: white;">Blog</a>
                    </li>
                    <li>
                      <a class="nav-link" href="signup.php" style="color: white;margin-left: 320px;">Register/Log In</a>
                    </li>
                  </ul>
                  <h3 class="heading">High Aay Resort</h3>
                  <span style="margin-left: 40px;">Unlock to enjoy the view of Marine World</span>

                </div>
              </div>
            </h5>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--============================top nav end===========================-->

  <!-------------About US Start--------------->

  <div style="height: 100px;"></div>
  <div class="container">
    <div class="row">
      <div class="col">
        <h6 class="about">About Us</h6>
        <h2 class="welcome">Welcome to <br>High Way Hotel Luxury</h2>
        <h5 class="text-secondary about_text">Experience luxury and comfort in our beautifully appointed rooms and suites. Each space features
          elegant décor, premium bedding, and modern amenities. From deluxe rooms to exclusive suites, every detail is designed to provide relaxation,
          privacy, and exceptional service, ensuring an unforgettable stay in refined surroundings</h5>
      </div>
      <div class="col">
        <div class="row">
          <div class="col">
            <div><img src="Resources/13.jpg" class="mb-2 mt-2 rounded about_img"></div>
            <div><img src="Resources/n4.jfif" class="rounded about_img"></div>
          </div>
          <div class="col">
            <img src="Resources/as1.jpg" class="rounded" style="height: 410px;">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div style="height: 80px;"></div>
  <!--==================================About Us end============================-->

  <!--============================Facilities Area Start===========================-->
  <section class="facilities_area section_gap">
    <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background="">
    </div>
    <div class="container">
      <div class="section_title text-center">
        <h2 class="title_w">Royal Facilities</h2>
        <p>Who are in extremely love with eco friendly system.</p>
      </div>
      <div class="row mb_30">
        <div class="col-lg-4 col-md-6">
          <div class="facilities_item">
            <h4 class="sec_h4"><i class="fas fa-utensils"></i><u>Restaurant</u></h4>
            <p>Enjoy gourmet cuisine, elegant ambiance, and exceptional service in our restaurant, offering unforgettable dining
              experiences day and night</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="facilities_item">
            <h4 class="sec_h4"><i class="fas fa-biking"></i><u>Sports Club</u></h4>
            <p>Stay active with our state-of-the-art gym, tennis courts, and recreational activities for all ages.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="facilities_item">
            <h4 class="sec_h4"><i class="fas fa-swimmer"></i><u>Swimming Pool</u></h4>
            <p>Relax and unwind in our temperature-controlled infinity pool with poolside service and scenic views.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="facilities_item">
            <h4 class="sec_h4"><i class="fas fa-theater-masks"></i><u>Events</u></h4>
            <p>Host unforgettable events with elegant venues, modern technology, and personalized service for every occasion.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="facilities_item">
            <h4 class="sec_h4"><i class="fas fa-dumbbell"></i><u>Gymnesium</u></h4>
            <p>Stay fit in our fully-equipped gymnasium with state-of-the-art machines, personal training, and wellness programs</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="facilities_item">
            <h4 class="sec_h4"><i class="fas fa-glass-cheers"></i><u>Bar</u></h4>
            <p>Enjoy handcrafted cocktails and premium beverages in our stylish bar, perfect for relaxation and socializing.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--=====================================Facilities Area end============================-->

  <div style="height: 80px;"></div>

  <!--==================== rooms start ====================== -->
  <div class="container">
    <div class="display-3">Rooms & Suits</div>
    <p class="col-8 text-secondary mt-4" style="font-size: 20px;"></p>
    <div style="height: 30px;"></div>
    <div class="row">
      <?php foreach ($rooms as $room): ?>
      <div class="col">
        <div class="card shadow p-3 mb-5 bg-white rounded">
          <img src="<?= htmlspecialchars($room['image']) ?>" class="card-img-top img-fluid" alt="Room Image" />
          <div class="card-body">
            <h2 class="mist"><?= htmlspecialchars($room['title']) ?></h2>
            <hr />
            <div class="row">
              <div class="col-4 col1">
                <p>Adults:</p>
                <p>Categories:</p>
                <p>Facilities:</p>
                <p>Bed Type: </p>
                <p>Price: </p>
              </div>
              <div class="col-8 col2">
                <p><?= htmlspecialchars($room['adults']) ?></p>
                <p><?= htmlspecialchars($room['category']) ?></p>
                <p><?= htmlspecialchars($room['facilities']) ?></p>
                <p><?= htmlspecialchars($room['bed']) ?></p>
                <h3>sh <?= number_format($room['price']) ?><span class="text-secondary">/night</span></h3>
                <button type="button" class="btn text-light float-right bg-info text-center mt-5">Know more</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  <div style="height: 100px;"></div>
  <!--==============================Rooms End ==========================-->

  <!--=========================== Food Start ===========================-->

  <div class="container-fluid">
    <h1 class=" mb-5 text-center rest">Restaurant Menu <i class="fas fa-utensils"></i></h1>

    <ul class="nav nav-tabs justify-content-between text-center" id="myTab" role="tablist">
      <li class="nav-item text-center" role="presentation">
        <a class="nav-link text-center items active"
          id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
          aria-selected="true">Breakfast</a>
      </li>
      <li class="nav-item" role="presentation">
        <a class="nav-link items" id="profile-tab" data-toggle="tab" href="#profile"
          role="tab" aria-controls="profile" aria-selected="false">Lunch</a>
      </li>
      <li class="nav-item" role="presentation">
        <a class="nav-link items" id="contact-tab" data-toggle="tab" href="#contact"
          role="tab" aria-controls="contact" aria-selected="false">Dinner</a>
      </li>
    </ul>
    <div style="height: 20px;"></div>
    <div class="tab-content" id="myTabContent">
      <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
        <div class="row">
          <div class="col">
            <div class="card card shadow p-3 mb-5 bg-white rounded">
              <img src="Resources/nf5.jfif" class="card-img-top" alt="..." />
              <div class="card-body">
                <h4 class="teal">Grilled Top Sirloin Steak</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione quo vel aut ab qui quas!</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card card shadow p-3 mb-5 bg-white rounded">
              <img src="Resources/nf4.jfif" class="card-img-top" alt="..." />
              <div class="card-body">
                <h4 class="teal">Egg &amp; Asparagus</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione quo vel aut ab qui quas!</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card card shadow p-3 mb-5 bg-white rounded">
              <img src="Resources/nf6.jfif" class="card-img-top" alt="..." />
              <div class="card-body">
                <h4 class="teal">Egg &amp; Grilled Steak</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione quo vel aut ab qui quas!</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
        <div class="row">
          <div class="col">
            <div class="card card shadow p-3 mb-5 bg-white rounded">
              <img src="Resources/menu_1.jpg" class="card-img-top" alt="..." />
              <div class="card-body">
                <h4 class="teal">Grilled Top Sirloin Steak</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione quo vel aut ab qui quas!</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card card shadow p-3 mb-5 bg-white rounded">
              <img src="Resources/menu_2.jpg" class="card-img-top" alt="..." />
              <div class="card-body">
                <h4 class="teal">Egg &amp; Asparagus</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione quo vel aut ab qui quas!</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card card shadow p-3 mb-5 bg-white rounded">
              <img src="Resources/menu_3.jpg" class="card-img-top" alt="..." />
              <div class="card-body">
                <h4 class="teal">Egg &amp; Grilled Steak</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione quo vel aut ab qui quas!</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
        <div class="row">
          <div class="col">
            <div class="card card shadow p-3 mb-5 bg-white rounded">
              <img src="Resources/nf7.jfif" class="card-img-top" alt="..." />
              <div class="card-body">
                <h4 class="teal">Grilled Top Sirloin Steak</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione quo vel aut ab qui quas!</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card card shadow p-3 mb-5 bg-white rounded">
              <img src="Resources/nf8.jfif" class="card-img-top" alt="..." />
              <div class="card-body">
                <h4 class="teal">Egg &amp; Asparagus</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione quo vel aut ab qui quas!</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card card shadow p-3 mb-5 bg-white rounded">
              <img src="Resources/nf9.jfif" class="card-img-top" alt="..." />
              <div class="card-body">
                <h4 class="teal">Egg &amp; Grilled Steak</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione quo vel aut ab qui quas!</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div style="height: 100px;"></div>
  <!--===================================Food end====================================-->

  <!--===================Testimonials (kohli) start===========================-->
  <div class="container-fluid">
    <div class="row">
      <div class="col-5" style="margin-left: 20px;">
        <img src="Resources/virat.jpg" class="img-fluid virat" />
      </div>
      <div class="col-6 p-3 cust">
        <p style="font-size: 20px; color: orange;">Customer Reviews</p>
        <h2 class="text-dark font-weight-bold">Best hotel I have ever been</h2>
        <p class="mb-5 mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi consequatur commodi eos maxime
          optio pariatur repellat sequi voluptas voluptatum.</p>
        <h5 class="text-dark font-weight-bold">Virat Kohli</h5>
        <p>Indian Cricket Captain</p>
      </div>
    </div>
  </div>
  <div style="height: 100px;"></div>
  <!--================================Testimonials end===========================-->

  <!-- =============================footer Start =========================== -->

  <div class="container-fluid" style="background-color: black;">
    <div class="row">
      <div class="col-4 text-white ml-5 pt-4 pb-4">
        <h5>Quick Links</h5>
        <ul class="list-unstyled quick-links">
          <li><a href="#"><i class="fas fa-angle-double-right"></i>Home</a></li>
          <li><a href="#"><i class="fas fa-angle-double-right"></i>About</a></li>
          <li><a href="#"><i class="fas fa-angle-double-right"></i>FAQ</a></li>
          <li><a href="#"><i class="fas fa-angle-double-right"></i>Get Started</a></li>
          <li><a href="#"><i class="fas fa-angle-double-right"></i>Videos</a></li>
        </ul>
      </div>
      <div class="col-4 text-white pt-4 pb-4">
        <h5>Resources</h5>
        <ul class="list-unstyled quick-links">
          <li><a href="#"><i class="fas fa-angle-double-right"></i>Blogs</a></li>
          <li><a href="#"><i class="fas fa-angle-double-right"></i>Download</a></li>
          <li><a href="#"><i class="fas fa-angle-double-right"></i>Help</a></li>
          <li><a href="#"><i class="fas fa-angle-double-right"></i>Contact</a></li>
          <li><a href="#"><i class="fas fa-angle-double-right"></i>Information</a></li>
        </ul>
      </div>
      <div class="col-3 text-white pt-4 pb-4">
        <h5>Contact Us</h5>
        <ul class="list-unstyled quick-links">
          <li>
            <p>1234 Street Name, City, Country</p>
          </li>
          <li>
            <p>+254 112 664037</p>
          </li>
          <li>
            <p>info@hirato.com</p>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <!-- =============================footer End =========================== -->
</body>

</html>
