<div class="col-md-9">
	<div class="col-md-10 pull-left col-md-offset-1 content">
		<br/>
		<h2>Welcome to TEDxPXL</h2>
		<br/>
		<h3> Latest News: </h3>
		<?php

		$posts = "";
		foreach ($fbdata -> data as $post) {

			$posts .= '<div class="col-xs-12 content"><div class="col-xs-7" style="background-color: #F4F4F4;">';
			$fbTime = strtotime($post -> created_time);
			$myTime = date("d M Y h:ia", $fbTime);

			if (isset($post -> message)) {
				$posts .= '<h5><p style="line-height:60px;">Posted on: ' . $myTime . '</h5>';
				$posts .= '<h4><a href="' . $post -> link . '">' . $post -> message . '</a></p>';
			
			if (isset($post -> picture)) {
				$posts .= '<p style="line-height:60px;"><img src="' .$post -> full_picture. '" class="fbpicture" style="width:504px;" /></p>';
				
			}

				
			if (isset($post -> description)) {		
				$posts .= '<p>' . $post -> description . '</p>';
			}

				
			} else
				continue;

			$posts .= '</h4><br/><hr />';
			$posts .= '</div></div>';

		}

		//Display the posts
		echo $posts;
		?>
	</div>
</div>
