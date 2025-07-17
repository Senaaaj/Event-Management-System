<!--The CRUD operations (Create, Read, Update, Delete) are done only in Furniture rentals and Flower decoration services only..-->
<!DOCTYPE html>
<html>
	<head>
		<title>Eventescape</title>
		<link rel="stylesheet" href="headfootfurniture.css">
		<link rel="stylesheet" href="furniturestyle.css">
		<script src="furnture.js"></script>
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
		
		<section class="box">
			<h1>Furniture Rentals</h1>
			
			<div class="form">
				<form action="insertfurniture.php" method="post" onsubmit="validData(event)">
				
					<div class="sidebyside">
						<div class="inputbox">
							<label for="id">Order NO:</label>
							<input type="text" id="id" disabled>
						</div>
						
						<div class="inputbox">
							<label for="mail">Email: </label>
							<input type="email" id="mail" name="email">
						</div>
					</div>
					
					
					<div class="sidebyside">
						<div class="inputbox">
							<label for="day">Select the date of the event:</label>
							<input type="date" id="day" name="date" required>
						</div>
						
						<div class="inputbox">
							<label for="clock">Select the time:</label>
							<input type="time" id="clock" name="time">
						</div>
					</div>	
			
					<div class="inputbox">
						<label for="place">Location:</label>
						<input type="text" id="place" name="location">
					</div>
					
					<div class="inputbox">
						<label for="price">Budget Range: </label>
						<select id="price" name="budget">
							<option value="Rs.20000-Rs.30000">Rs.20000-Rs.30000</option>
							<option value="Rs.31000-Rs.40000">Rs.31000-Rs.40000</option>
							<option value="Rs.41000-Rs.50000">Rs.41000-Rs.50000</option>
							<option value="Rs.51000-Rs.60000">Rs.51000-Rs.60000</option>
							<option value="aboveRs.60000">AboveRs.60000</option>
						</select>
					</div>
					
					<div class="sidebyside1">
						<p class="define">Event Theme</p>
						
						<div class="inputbox1">
							<input type="radio" id="rustic" name="theme" value="rustic">
							<label for="rustic">Rustic</label>
						</div>
					
						<div class="inputbox1">
							<input type="radio" id="modern" name="theme" value="modern">
							<label for="modern">Modern</label>
						</div>
						
						<div class="inputbox1">
							<input type="radio" id="pastel" name="theme" value="pastel">
							<label for="pastel">Pastel</label>
						</div>
						
						<div class="inputbox1">
							<input type="radio" id="vintage" name="theme" value="vintage">
							<label for="pastel">Vintage</label>
						</div>
						
						
						<div class="inputbox1">
							<input type="radio" id="classic" name="theme" value="classic">
							<label for="classic">Classic</label>
						</div>
						
						
						<div class="inputbox1">
							<input type="radio" id="vibrant" name="theme" value="vibrant">
							<label for="vibrant">Vibrant</label>
						</div>
					</div>
					
					<input type="submit" id="button" value="Submit Me">
					
				</form>
			</div>
		</section>
		<section class="box">
		<div class="form">
			<p>WAIT!  DO YOU WANT TO .............. PREVIOUS RESPONSE?</p>
			
			<div class="sidebyside">
				<div class="inputbox">
					<button id="button" onclick="gopage(this)" value="updatefurnitureform.php">UPDATE</button>		
				</div>
						
				<div class="inputbox">
					<button id="button" onclick="gopage(this)" value="deletefurnitureform.php">DELETE</button>
				</div>
			</div>
		</div>
		</section>
		<footer>
           <div class="contacts">
                <p><h2>Contact Information</h2></p>
                <p>📞 011-2814518</p>
                <p>🏠 25/3, Eventescape, Colombo 05</p>
                <p>✉ eventescape@gmail.com</p>
            </div>

            
            <div class="footer-links">
			<a href ="http://localhost/iwt/terms.php"> Terms & conditions</a><span class="span"></span>   |   <a href="http://localhost/iwt/privacypolicy.php">  Privacy Policy </a>
            </div>
        </footer>
	</body>
</html>		