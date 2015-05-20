<?php
//var_dump($events);

foreach ($events as $row) {
			$posts = "";
			$posts.= '<div class="col-xs-9 content"> <div class="col-xs-9 col-xs-offset-3" style="background-color: #F5F5F5; text-align:center; border-radius: 25px;">';
			if (isset($row -> Title)) {
				$posts .= '<a><h1>' . $row -> Title . '</h2></a><br />';
			}
			if (isset($row -> Date)) {
				if (isset($row -> Time)){
					$posts .= '<h5>When?</h5><h3>' . $row -> Date . ' at '. $row -> Time . '</h3><br />';
				}
			}
			if (isset($row -> Description)) {
				$posts .= '<h5>What?</h5><h3>' . $row -> Description . '</h3>';
			}
			
			echo '<br/>	</div> </div>';
			
			echo $posts;
		}

?>
