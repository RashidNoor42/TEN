<?php include("includes/config.php");?>
<?php include("includes/meta.php");?>
<?php include("includes/header.php");?> <!-- left section -->
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 white-bg right-container">
		<h1 class="logo-right hidden-xs margin-bottom-60">Technology Entrepreneurship Networking</h1>	
			<div class="tm-right-inner-container">
				<h1 class="templatemo-header">Add Events</h1>

                    <div class="col-sm-12 col-md-12">
                        <form action="event.php" method="post" enctype="multipart/form-data">

                            <div class="form-group">
                                <input name="title" type="text" id="contact_name" class="form-control" placeholder="Title" />
                            </div>
							<div class="form-group">
                                <input name="speaker" type="text" id="contact_name" class="form-control" placeholder="Speaker/Guest" />
							</div>
							<div class="form-group">
                                <input name="venue" type="text" id="contact_subject" class="form-control" placeholder="Venue" />
                            </div>
                            <div class="form-group">
                                <input name="date" type="date" id="contact_email" class="form-control" placeholder="Date" />
                            </div>
                            <div class="form-group">
                                <input name="start" type="time" id="contact_subject" class="form-control" placeholder="Start Time" />
                            </div>
							<div class="form-group">
                                <input name="end" type="time" id="contact_subject" class="form-control" placeholder="End Time" />
                            </div>
                            <div class="form-group">
                                <textarea name="details" id="contact_message" class="form-control" rows="9" placeholder="Write Detail of Event"></textarea>
                            </div>
							<label>Upload Image of Event.</label>
							<div class="form-group">
							<input type="file" name="profileImage" id="" class="form-control" ">
							</div>
							<lablel for="status">Want to accept Registration?</label>
							<input type="checkbox" name="status" value="1"><hr>
							<input type="submit" name="save_event" value="Save Event" class="btn py-3 px-4 btn-primary">

                        </form>
                    </div>

                    <div class="clearfix"></div>
                </div>
				<?php include("includes/footer.php");?>
			</div>	
		</div> <!-- right section -->
	</div>
	<script src="js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript">
		var map = '';
		var center;

		function initialize() {
		    var mapOptions = {
		      zoom: 16,
		      center: new google.maps.LatLng(16.8496189,96.1288854)
		  	};
		  
		  	map = new google.maps.Map(document.getElementById('map-canvas'),  mapOptions);

		  	google.maps.event.addDomListener(map, 'idle', function() {
			  calculateCenter();
			});
			
			google.maps.event.addDomListener(window, 'resize', function() {
			  map.setCenter(center);
			});
		}

		function calculateCenter() {
		  center = map.getCenter();
		}

		function loadGoogleMap(){
		    // load google map
		    var script = document.createElement('script');
		    script.type = 'text/javascript';
		    script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&' +
		    'callback=initialize';
		    document.body.appendChild(script);
		}

		$(document).ready( function() {
			loadGoogleMap();
		});

	</script>	
</body>
</html>