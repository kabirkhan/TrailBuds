<?php



?>
<div class="row">
		<?php

		foreach ($events as $event) {
			
			$date=strtotime($event['departure_date']);
			
			$date1 = date('F d, Y',$date);
			
			
			?>

			
			  <div class="col-sm-4 col-md-3">
			    <div class="thumbnail">
			      <img class='tree' src="http://i.imgur.com/dHNHfGD.jpg" alt="...">
			      <?php //were going to want to set a variable for image here, need to add that to the events database and the create event modal ?>
			      <div class="caption">
			        <h3><a href=<?php echo "'/show/" . $event['id'] . "'" ?>><?php echo $event['name'] ?> </a></h3>
			        <p><?php echo $event['description'] ?></p>
			        
			      </div>
			      <div class='coconut'><h4>Hike Facts</h4>
			      	<?php
			      	echo "<p><span style='font-weight:bold'>Hike Location: </span>" . $event['hike_location'] . "</p>";
					echo "<p><span style='font-weight:bold'>Departure Location: </span>" . $event['departure_location'] . "</p>";
					echo "<p><span style='font-weight:bold'>Distance: </span>" . $event['distance'] . " miles</p>";
					echo "<p><span style='font-weight:bold'>Duration: </span>" . $event['duration'] . " hours</p>";
					echo "<p><span style='font-weight:bold'>Attendees: </span>" . $event['attendees'] . "</p>";
					echo "<p><span style='font-weight:bold'>Spots Remaining: </span>" . $event['attendees_remaining'] . "</p>";
					echo "<p><span style='font-weight:bold'>Departure Date: </span>" . $date1 . "</p>";
			      	?>
			      	</div>
			      	<div>
			      	<p><a href=<?php echo "'/show/" . $event['id'] . "'" ?>class="btn btn-md" id='btn5' role="button"><span style='color:white' class="glyphicon glyphicon-search"></span>   Event Details</a></p>
			      </div>
			    </div>
			  </div>
			
			
	<?php 	} 

		?>
</div>




		