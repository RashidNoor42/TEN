<?php include("includes/meta.php");?>
<?php include("includes/header.php");?> <!-- left section -->
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 white-bg right-container">
		<h1 class="logo-right hidden-xs margin-bottom-60">Technology Entrepreneurship Networking</h1>	
			<div class="tm-right-inner-container">
				<h1 class="templatemo-header">Alumni Registration Form</h1><br>
				<div class="row">
                 <address>
						  <strong>TEN-Technology Entrepreneurship Networking</strong><br><br>
						  Riphah International University Islamabad<br>
						  Pakistan , Islamabad 45710<br><br>
						  Phone: +92-312-5188252<br>
                          Email: rashidnoor@ieee.org<br><br>
				</address>
                    </div>

                    <div class="col-sm-12 col-md-12">
                        <form action="registeralumni.php" method="post">
                        <label>Name:</label>
                            <div class="form-group">
                                <input name="name" type="text" id="contact_name" class="form-control" placeholder="Name" required/>
                            </div>
                            <label>Email:</label>
                            <div class="form-group">
                                <input name="email" type="text" id="contact_email" class="form-control" placeholder="Email Address"required />
                            </div>
                            <div class="form-group">
                                <label>Phone:</label>
                                <input type="text" name="phone" id="contact_email" class="form-control" placeholder="Phone(0312-XXXXXXX)" required/>
                            </div>
                            <label>Batch:</label>
                            <div class="form-group">
                                <input type="text" name="batch" id="contact_subject" class="form-control" placeholder="Batch" />
                            </div>
                            <label>LinkedIn profile link:</label>
                            <div class="form-group">
                                <input type="text" name="linked" id="contact_subject" class="form-control" placeholder="LinkedIn profile link" required/>
                            </div>
                            <label>Facebook profile link:</label>
                            <div class="form-group">
                                <input type="text" name="facebook" id="contact_subject" class="form-control" placeholder="Facebook profile link" />
                            </div>
                            <label>Introduction:</label>
                            <div class="form-group">
                                <textarea id="contact_message" name="intro" class="form-control" rows="9" required placeholder="Write about yourself education, career, expertise and what you want to describe.."></textarea>
                            </div>
                            
                            <input type="submit" value="Send" class="btn btn-primary py-3 px-5">
                        </form>
                    </div>

                    <div class="clearfix"></div>
                </div>
				<?php include("includes/footer.php");?>
			</div>	
		</div> <!-- right section -->
	</div>
	<script src="js/jquery-1.11.1.min.js"></script>
	</body>
</html>