<div class="col-md-9">
	<div  class="col-xs-10 pull-left col-xs-offset-1 content">
		<br/>
		<h2>Welcome to TEDxPXL !</h2>
		<br/>
		<h3 style="margin-bottom:50px;"> Latest News: </h3>
		<?php

		$posts = "";
		foreach ($fbdata -> data as $post) {

			$posts .= '<div class="col-xs-12 content"><div class="class="col-xs-7 col-xs-offset-3"" style="background-color: #F5F5F5; text-align:center; border-radius: 25px;">';
			$fbTime = strtotime($post -> created_time);
			$myTime = date("d M Y h:ia", $fbTime);

			if (isset($post -> message)) {
				$posts .= '<h5><p style="line-height:60px;">Posted on: ' . $myTime . '</h5>';
				$posts .= '<h4><a href="' . $post -> link . '">' . $post -> message . '</a></p>';
			
			if (isset($post -> picture)) {
				$posts .= '<p style="line-height:60px;"><img src="' .$post -> full_picture. '" class="center-block fbpicture img-responsive img-rounded" style="width:504px; text-align:center;" /></p>';
				
			}

				
			if (isset($post -> description)) {		
				$posts .= '<p>' . $post -> description . '</p>';
			}

				
			} else
				continue;

			$posts .= '</h4><br/>';
			$posts .= '</div></div></div>';

		}

		//Display the posts
		echo $posts;
		?>
	</div>
</div>
