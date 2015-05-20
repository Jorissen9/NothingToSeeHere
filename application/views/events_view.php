<div class="col-md-9">
	<div  class="col-xs-10 pull-left col-xs-offset-1 content">
		<?php
		var_dump($events);
		
		$posts = '<ol class="events">';
		foreach ($events as $row) {
				
			$posts .= '<li class="col-xs-12 container" ><a class="overview portrait" href="#">';
			
			if ($row -> Picture != "")
			{
				$posts .= '<img typeof="foaf:Image" class="img-responsive" src="./assets/imgs/' . $row -> Picture . '">';
			}

			$posts .= '<h4 class="title">' . date('M', $row -> Date) . ' ' . date('d', $row -> Date) . ' at ' . date('g:i a', strtotime($row -> Time)) . ' - ' . $row -> Title . '<h4>';

			//$posts .= '<h5>What?</h5><h3>' . $row -> Description . '</h3>';
			
			$posts .= '<span class="more">Learn more</span>';
			$posts .= '</a>';
			$posts .= '<div></div>';
			$posts .= '</li>';
			
		}
		
		$posts .= '</ol>';
		echo $posts;
		
	?>
	</div>
</div>