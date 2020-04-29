<?php include("includes/meta.php");
include("includes/config.php");?>
<?php include("includes/header.php");?> <!-- left section -->
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 white-bg right-container">
		<h1 class="logo-right hidden-xs margin-bottom-60">Technology Entrepreneurship Networking</h1>	
			<div class="tm-right-inner-container">
				<h1 class="templatemo-header">Events</h1>
				 
				<?php
        $conn = new mysqli($server, $username, $pass, $db);
        $sql = "SELECT * FROM event";
        $result = $conn->query($sql);
        ?>

          <?php
            if($result->num_rows > 0){
          while($row = $result->fetch_assoc()){
              ?>
                      <div class="pt-5 mt-5">
                        <ul class="comment-list">
                          <li class="comment">
								
							 <a href="https://www.facebook.com/tenorgpk"> <img id='eventpic' src="<?php echo $row['picture']; ?>" alt="Picyure will be shown here."/></a>	
                              <div class="comment-body">
							 <h1 class="display-1 text-primary">Title:</h1> <h3 class="comment-body"><?php echo $row['title']; ?></h3>
							 <h1 class="display-1 text-primary">Speaker/Guest:</h1> <h3 class="comment-body"><?php echo $row['speaker'];?></h3>
							 <h1 class="display-1 text-primary">Venue:</h1> <p class="comment-body"><?php echo $row['venue']; ?></p>
							 <h1 class="display-1 text-primary">Date:</h1> <h3 class="comment-body"><?php echo $row['date']; ?></h3>
							 <h1 class="display-1 text-primary">Start:</h1> <h3 class="comment-body"><?php echo $row['start']; ?></h3>
							 <h1 class="display-1 text-primary">End:</h1> <h3 class="comment-body"><?php echo $row['end']; ?></h3>
							 <h1 class="display-1 text-primary">Details:</h1> <h3 class="comment-body"><?php echo $row['details']; ?></h3>
					<?php 
					if($row['status']==1)
							 echo "<input type='submit' value='Register' class='btn btn-primary py-3 px-5'>";
				    ?>
                            </div>
                          </li><hr>
                      </div>
                    </ul>
      <?php
      }
      }
      ?>
              
				<?php include("includes/footer.php");?>
			</div>	
		</div> <!-- right section -->
	</div>	
</body>
</html>