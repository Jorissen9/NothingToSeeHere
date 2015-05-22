<div class="col-md-9">
	<div class="col-xs-10 pull-left col-xs-offset-1 content">
		<br/>
		<h2>Welcome to TEDxPXL !</h2>
		<br/>
		<h3 style="margin-bottom:50px;"> Latest News: </h3>
		<?php
		
		$posts = '<ol class="events col-xs-12 content">';
		foreach ($fbdata -> data as $post) {
			
			$posts .= '<li class="col-xs-12 container"><a class="overview landscape" target="_blank" href="'. $post -> link .'">';
			//$posts .= '<div class="col-xs-12 content"><div class="col-xs-7 col-xs-offset-3" style="background-color: #F5F5F5; text-align:center; border-radius: 25px;">';
			$fbTime = strtotime($post -> created_time);
			$myTime = date("d M Y h:ia", $fbTime);
			
			if (isset($post -> picture)) {
				//$posts .= '<p style="line-height:60px;"><img src="' .$post -> full_picture. '" class="center-block fbpicture img-responsive img-rounded" style="width:504px; text-align:center;" /></p>';
				$posts .= '<img typeof="foaf:Image" class="img-responsive" src="' .$post -> full_picture. '">';
			}

			if (isset($post -> message)) {
			
				$posts .= '<h5 class="title">' . $myTime . ' - ' . $post -> message . '</h5>';

				
			if (isset($post -> description)) {		
				$posts .= '<h5 class="description">' . $post -> description . '</h5>';
			}

				
			} else
				continue;

			$posts .= '</a></li>';
			//Display the posts
			
		}

		$posts .= '</ol>';
		echo $posts;
		?>
	</div>
</div>
