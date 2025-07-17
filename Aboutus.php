<!DOCTYPE html>
<head>
    <!--title-->
    <title>Visit Our Gallery</title>
    <link rel="stylesheet" href="Aboutus.css">
    <script>
    let currentSlide = 0;
    function changeSlide(direction) {
    const slides = document.getElementsByClassName('carousel-image');
    slides[currentSlide].style.display = "none";
    
    currentSlide += direction;
    
    if (currentSlide >= slides.length) {
        currentSlide = 0;
    } else if (currentSlide < 0) {
        currentSlide = slides.length - 1;
    }
    
    slides[currentSlide].style.display = "block";
}

window.onload = function () {
    const slides = document.getElementsByClassName('carousel-image');
    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slides[0].style.display = "block"; 
};
</script>
</head>
<body>
    <!-- Header -->
    <header class="header">
            <div class="Logo">
                 <!-- Company Logo-->
                <img src="Images/blacklogo.png" alt="Company Logo">
            </div>
            <div>
            <ul class="header-nav">
                <li><a href="http://localhost/iwt/home1.php">Home</a></li>
                <li><a href="http://localhost/iwt/Aboutus.php">About Us</a></li>
                <li><a href="http://localhost/iwt/New%20listing.php">List Your Property</a></li>
                <li><a href="http://localhost/iwt/services.php">More Services</a></li>
                <li><a href="http://localhost/iwt/booking.php">Confirm Booking</a></li>
                <li><a href="http://localhost/iwt/index.php">Contact Us</a></li>
            </ul>
            </div>
        </header>
    <main>
        <h1>Visit Our Gallery</h1>
        <p>Experience a visual journey with us</p>

        <!-- Image carousel section -->
        <div class="carousel">
            <div class="carousel-container">
                <img src="Images/placeholder1.jpg" alt="Gallery Image 1" class="carousel-image">
                <img src="Images/placeholder2.jpg" alt="Gallery Image 2" class="carousel-image">
                <img src="Images/placeholder3.jpg" alt="Gallery Image 3" class="carousel-image">
            </div>
            <button class="prev" onclick="changeSlide(-1)">&#10094;</button>
            <button class="next" onclick="changeSlide(1)">&#10095;</button>
        </div>

        <!-- Our Story Section -->
        <section class="our-story">
            <div class="story-image">
                <img src="Images/hotel.jpg" style=" width: 600px;" alt="Our Story Image">
            </div>
            <br>
            <div class="story-content">
                <h2>Our Story</h2>
                <p>Welcome to EventEscape, where your dream events come to life in a world of luxury and comfort! 
                    We are passionate about providing an unforgettable experience for every occasion, whether it's a wedding, 
                    a birthday celebration, a corporate event, or a family gathering. Our mission is to create moments 
                    that leave a lasting impression, filled with joy, laughter, and cherished memories.</p>
                <p>EventEscape began with a vision: to offer a place where every guest feels special and 
                    every occasion is celebrated with style. Founded by a team of event enthusiasts and hospitality experts,
                     we set out to redefine the way people host and celebrate their special events. Our journey started with
                      a simple idea - to provide a unique blend of elegance, comfort, and top-notch service in a venue designed 
                      for creating timeless memories.</P>
                <p>At EventEscape, we believe that every detail matters. From the moment you make your reservation to the day of your event,
                     our dedicated team works tirelessly to ensure everything runs seamlessly. Our venues are tailored to suit a variety of 
                     occasions, offering beautiful ballrooms and cozy spaces that can be personalized to reflect your style and theme. 
                     With our easy-to-use reservation system, planning your event becomes a stress-free and enjoyable experience.</p>
                     
                <p>What sets us apart is our unwavering commitment to excellence. We don't just provide a space; we create an environment
                         where your dreams can come to life. Our state-of-the-art facilities, elegant decor, and professional staff are here to make 
                         sure your event is nothing short of perfection.</p>
                
                <p>So, whether you're planning an intimate gathering or a grand celebration, EventEscape is here to turn your vision into reality.
                     We look forward to welcoming you and making your special moments truly unforgettable. With us, it’s not just about booking a venue;
                      it's about crafting an experience you'll cherish forever.</p>
            </div>
        </section>
    </main>

    <footer>
            <!--Contanct information-->
            <div class="contacts">
                <!--Section Heading-->
                <p><h2>Contact Information</h2></p>
                <!--Section details-->
                <p>📞 011-2814518</p>
                <p>🏠 25/3, Eventescape, Colombo 05</p>
                <p>✉ eventescape@gmail.com</p>
            </div>

            <!--Terms and conditions and privacy policy-->
            <div class="footer-links">
            <a href ="http://localhost/iwt/terms.php"> Terms & conditions</a><span class="span"></span>   |   <a href="http://localhost/iwt/privacypolicy.php">  Privacy Policy </a>
            </div>
        </footer>
</body>
</html>
