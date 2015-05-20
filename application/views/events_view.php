<div class="col-md-9">
	<div  class="col-xs-10 pull-left col-xs-offset-1 content">
		<?php
		var_dump($events);

		foreach ($events as $row) {
			$posts = "";
			if (isset($row -> Picture)) {
				$posts .= '<a href="#"><div class="col-xs-12 content" style=""> <div class="col-xs-12" style="background-color: #F5F5F5; background-image: url(./assets/imgs/' . $row -> Picture . '); text-align:center; border-radius: 25px;">';
			} else {
				$posts .= '<a href="#"><div class="col-xs-12 content"><div class="col-xs-12" style="background-color: #F5F5F5; text-align:center; border-radius: 25px;">';
			}

			if (isset($row -> Title)) {
				$posts .= '<a><h1>' . $row -> Title . '</h2></a><br />';
			}
			if (isset($row -> Date)) {
				if (isset($row -> Time)) {
					$posts .= '<h5>When?</h5><h3>' . $row -> Date . ' at ' . $row -> Time . '</h3><br />';
				}
			}
			if (isset($row -> Description)) {
				$posts .= '<h5>What?</h5><h3>' . $row -> Description . '</h3>';
			}

			$posts .= '<br/>	</div></a></div>';

			echo $posts;
		}
	?>
	</div>
</div>