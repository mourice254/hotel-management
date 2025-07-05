<?php include 'header.php'; ?>

<!-- Link to custom CSS -->
<link rel="stylesheet" href="css/room.css">

<!-- Hero Section -->
<div class="roombg container-fluid">
    <ul class="pt-4">
        <li class="logo"><i class="fab fa-pied-piper logo_color"></i>Hirato</li>
        <li><a href="index.php">Home</a></li>
        <li><a href="rooms.php">Rooms</a></li>
        <li><a href="blog.php">Blog</a></li>
        <li><a href="#about">About Us</a></li>
    </ul>
    <p class="note shadow">Luxurious Rooms</p>
    <p id="cursive">For your Holiday <i class="fas fa-swimmer"></i></p>
</div>

<!-- Room Listings -->
<div class="container mt-5">
    <div class="row">
        <?php
        $rooms = [
            [
                "name" => "Family Room",
                "image" => "Resources/12.jpg",
                "adults" => 4,
                "capacity" => 4,
                "facilities" => "Closet, HD TV",
                "bed" => "Two Queen Beds",
                "price" => 4000
            ],
            [
                "name" => "Premium King Room",
                "image" => "Resources/9.jpg",
                "adults" => 3,
                "capacity" => 3,
                "facilities" => "Closet, HD TV, Balcony",
                "bed" => "One King Bed",
                "price" => 6000
            ],
            [
                "name" => "Deluxe Room",
                "image" => "Resources/16.jpg",
                "adults" => 2,
                "capacity" => 2,
                "facilities" => "Closet, HD TV",
                "bed" => "One Queen Bed",
                "price" => 5000
            ],
            [
                "name" => "Double Room",
                "image" => "Resources/16.jpg",
                "adults" => 2,
                "capacity" => 2,
                "facilities" => "Wi-Fi, HD TV",
                "bed" => "Two Twin Beds",
                "price" => 4000
            ],
            [
                "name" => "Luxury Room",
                "image" => "Resources/17.jpg",
                "adults" => 2,
                "capacity" => 2,
                "facilities" => "Air Conditioning, Mini-bar",
                "bed" => "One King Bed",
                "price" => 8000
            ],
            [
                "name" => "Bachelor Room",
                "image" => "Resources/17.jpg",
                "adults" => 1,
                "capacity" => 1,
                "facilities" => "Smart TV, Workspace",
                "bed" => "One Single Bed",
                "price" => 3500
            ],
            [
                "name" => "Premium Room",
                "image" => "Resources/18.jpg",
                "adults" => 3,
                "capacity" => 3,
                "facilities" => "Wi-Fi, Closet, TV",
                "bed" => "One King Bed",
                "price" => 6000
            ],
        ];

        foreach ($rooms as $room) {
            echo '
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card h-100 shadow-sm border-0">
                    <img src="' . htmlspecialchars($room["image"]) . '" 
                         class="card-img-top img-fluid" 
                         alt="' . htmlspecialchars($room["name"]) . ' Image" 
                         onerror="this.onerror=null; this.src=\'Resources/placeholder.jpg\'; this.style.border=\'2px solid red\'" 
                         style="height: 200px; object-fit: cover;">

                    <div class="card-body">
                        <h5 class="card-title">' . htmlspecialchars($room["name"]) . '</h5>
                        <p class="card-text"><strong>Adults:</strong> ' . htmlspecialchars($room["adults"]) . '</p>
                        <p class="card-text"><strong>Max Capacity:</strong> ' . htmlspecialchars($room["capacity"]) . '</p>
                        <p class="card-text"><strong>Facilities:</strong> ' . htmlspecialchars($room["facilities"]) . '</p>
                        <p class="card-text"><strong>Bed:</strong> ' . htmlspecialchars($room["bed"]) . '</p>
                        <h5 class="text-primary">Ksh ' . number_format($room["price"]) . '<small class="text-muted"> /night</small></h5>
                        <a href="billing.php?room=' . urlencode($room["name"]) . '" class="btn btn-info btn-block mt-3">Book Now</a>
                    </div>
                </div>
            </div>';
        }
        ?>
    </div>
</div>

<?php include 'footer.php'; ?>

<!-- JS -->
<script src="js/room.js" defer></script>
