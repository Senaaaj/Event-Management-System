<!--The CRUD operations (Create, Read, Update, Delete) are done only in Furniture rentals and Flower decoration services only..-->
<!DOCTYPE html>
<html>
	<head>
		<title>Eventescape</title>
		<link rel="stylesheet" href="headfootfurniture.css">
		<link rel="stylesheet" href="furniturestyle.css">
		<script src="furnture.js"></script>
		
		<script src="Moreservices.js"></script>
	</head>

	<body>
	
		<header class="header">
            <div class="Logo">
                <img src="Images/blacklogo.png" alt="Company Logo">
            </div>
            
           
            <div>
                <ul class="header-nav">
				<div>
            <ul class="header-nav">
                <<li><a href="http://localhost/iwt/home1.php">Home</a></li>
                <li><a href="http://localhost/iwt/Aboutus.php">About Us</a></li>
                <li><a href="http://localhost/iwt/New%20listing.php">List Your Property</a></li>
                <li><a href="http://localhost/iwt/services.php">More Services</a></li>
                <li><a href="http://localhost/iwt/booking.php">Confirm Booking</a></li>
                <li><a href="http://localhost/iwt/index.php">Contact Us</a></li>
            </ul>
            </div>
            </div>
        </header>
		
		<section class="box">
			<h1>Flowers and Decorations</h1>
			
			<div class="form">
				<form action="insertflower.php" method="post" onsubmit="validData(event)">
				
					<div class="sidebyside">
						<div class="inputbox">
							<label for="id">Order NO:</label>
							<input type="text" id="wid" disabled>
						</div>
						
						<div class="inputbox">
							<label for="mail">Email: </label>
							<input type="email" id="mail" name="wemail" required>
						</div>
					</div>
					
					
					<div class="sidebyside">
						<div class="inputbox">
							<label for="day">Select the date of the event:</label>
							<input type="date" id="day" name="wdate" required>
						</div>
						
						<div class="inputbox">
							<label for="clock">Select the time:</label>
							<input type="time" id="clock" name="wtime">
						</div>
					</div>	
			
					<div class="inputbox">
						<label for="price">Budget Range: </label>
						<select id="price" name="wbudget">
							<option value="Rs.20000-Rs.30000">Rs.20000-Rs.30000</option>
							<option value="Rs.31000-Rs.40000">Rs.31000-Rs.40000</option>
							<option value="Rs.41000-Rs.50000">Rs.41000-Rs.50000</option>
							<option value="Rs.51000-Rs.60000">Rs.51000-Rs.60000</option>
							<option value="aboveRs.60000">AboveRs.60000</option>
						</select>
					</div>
					
					<div class="inputbox">
						<label for="favor">Do you have a preferred rental shop? </label>
						<select id="favor" name="wshop">
							<option value="Lassana Flora Pvt Ltd">Lassana Flora Pvt Ltd</option>
							<option value="Senuri Wedding decorations">Senuri Wedding decorations</option>
							<option value="Araliya Flora">Araliya Flora</option>
							<option value="Chamathkara Flora Company">Chamathkara Flora Company</option>
							<option value="The Banquet Company Events">The Banquet Company Events</option>
						</select>
					</div>
					
					<div class="inputbox">
						<label for="free">Additional Information</label>
						<textarea id="free" cols="80" rows="8" name="winfo"></textarea>
					</div>
					
					<input type="submit" id="button" value="Submit">
					
				</form>
			</div>
		</section>
		
		<section class="box">
		<div class="form">
			<p>WAIT!  DO YOU WANT TO .............. PREVIOUS RESPONSE?</p>
			
			<div class="sidebyside">
				<div class="inputbox">
					<button id="button" onclick="gopage(this)" value="updateflowerform.php">UPDATE</button>		
				</div>
						
				<div class="inputbox">
					<button id="button" onclick="gopage(this)" value="deleteflowerform.php">DELETE</button>
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
