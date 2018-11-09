<!DOCTYPE html>
<html>
	<head>
		<title>Create Event</title>
		<link href="css/createTemplate.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		
		<div class="container">
			<ul id = "menu">
				<li><a href="homePage.html">Home</a></li>
				<li><a href="create.html">Create Event</a></li>
				<li><a href="viewEvents.html">View My Events</a></li>
			</ul>
			<div align="center">
			<h2>Create Event</h2>

			<div class="gallery">
				<form action="create-event.php" method="POST" class="copyright" id="createForm">

					<div class="formHeading">Event Name:</div><input type="text" name="event_name_input">
					<div class="formHeading">Thumbnail:</div><input type="text" name="event_thumbnail_input">
					<div class="formHeading">Event Date:</div><input type="date" name="event_date_input">
					<div class="formHeading">Organization:</div><input type="text" name="event_organization_input">
					<div class="formHeading">Distribution Date:</div><input type="Date" name="event_dist_date_input">
					<div class="formHeading">Email Address:</div><input type="Email" name="event_seller_email_input">
					<div class="formHeading">Ticket Price:</div><input type="number" name="event_price_input">
					<div class="formHeading">Number of Tickets:</div><input type="number" name="event_tickets_input">
					<div class="formHeading">Event Caption:</div><input type="text" name="event_caption_input">
					<div class="formHeading">Event Description:</div><input id="descriptionBox" type="text" name="event_discription_input"><br>
					<input type="submit" value="Submit" class="button">

				</form>

				</div>
			</div>
		</div>
	</body>
</html>