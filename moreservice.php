<!--The CRUD operations (Create, Read, Update, Delete) are done only in Furniture rentals and Flower decoration services only..-->
<!DOCTYPE html>
<html>
	<head>
		<title>Eventescape</title>
		<link rel="stylesheet" href="moreservicestyle.css">
		<link rel="stylesheet" href="headfootfurniture.css">
		
		<script src="moreservicejs.js"></script>
	</head>

	<body>
		<header class="header">
            <div class="Logo">
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
		
		<div class="maindata">
			<h1>More services</h1>
		
			<p id="para1">At EventEscape, we offer more than just hotel reservations to make your special occasions unforgettable. 
			Our commitment is to ensure that every detail is taken care of, so you can relax and enjoy a seamless experience. 
			Explore more services and let us help turn your vision into reality.</p>
			
			<section class="services">
				<div class="card">
					<button class="card-content" onclick="gopage(this)" value="furnitureform.php">
						<div class="title">Funiture rentals</div>
						<p> Furniture rentals offer affordable, temporary solutions for any occasion, providing flexible furnishing options without the need to buy.<h4>(CLICK HERE)</h4></p>
					</button>
				</div>
				
				<div class="card">
					<button class="card-content" onclick="gopage(this)" value="flowerform.php">
						<div class="title">Floral & decorations</div>
						<p> Flowers and decorations give you the freedom to create beautiful spaces for events or occasions, without dissapointment.<h4>(CLICK HERE)</h4></p>
					</button>
				</div>
				
				<div class="card">
					<button class="card-content" onclick="anotherpage('pg4')">
						<div class="title">Photography</div>
						<p> Having a photographer ensures high quality images that beautifully capture your special moments, preserving memories for years.<h4>(CLICK HERE)</h4></p>
					</button>
				</div>
				
				<div class="card">
					<button class="card-content">
						<div class="title">Lighting</div>
						<p> A professional lighting setup enhances the atmosphere, creating the perfect mood and highlighting key details with precision and elegance.</p>
					</button>
				</div>
				
				<div class="card">
					<button class="card-content">
						<div class="title">Transportation</div>
						<p> Having a professional transportation service ensures safe and comfortable travel, allowing you to focus on your journey while leaving the logistics in expert hands.</p>
					</button>
				</div>
				
				<div class="card">
					<button class="card-content">
						<div class="title">Other</div>
						<p> Professional services ensure every aspect of your experience is expertly handled, providing a seamless experience tailored to your needs.</p>
					</button>
				</div>
				
			</section>	
		</div>

		<footer>
           <div class="contacts">
                <p><h2>Contact Information</h2></p>
                <p>📞 011-2814518</p>
                <p>🏠 25/3, Eventescape, Colombo 05</p>
                <p>✉ eventescape@gmail.com</p>
            </div>

            
            <div class="footer-links"><a href ="http://localhost/iwt/terms.php"> Terms & conditions</a><span class="span"></span>   |   <a href="http://localhost/iwt/privacypolicy.php">  Privacy Policy </a><a href ="http://localhost/Website/Home/terms.php"> Terms & conditions</a><span class="span"></span>   |   <a href="http://localhost/Website/Home/privacypolicy.php">  Privacy Policy </a>
            </div>
        </footer>
	</body>
</html>	
	