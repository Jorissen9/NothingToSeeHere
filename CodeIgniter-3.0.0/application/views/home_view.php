<div class="col-xs-6">
	<div class="col-md-9 pull-right">
		<br/>
		<h2>Welcome to TEDxUHasselt </h2>
		<br/>
		<h3> Latest News: </h3>
		<?php
		$page_id = 'TEDxUHasselt';
		$access_token = '384545391746432|kMtO9DQn412t0WTd6MfLo3fsKkI';
		$fbid = "TEDxUHasselt";
		$limit = 5;
		$posts = "";
		
		//Get the JSON
		$json_object = @file_get_contents('https://graph.facebook.com/' . $page_id . '/feed?limit=' . $limit . '&access_token=' . $access_token);

		//Interpret data
		$fbdata = json_decode($json_object);

		foreach ($fbdata->data as $post) {
			        
		 $fbTime = strtotime($post->created_time);
         $myTime= date("d M Y h:ia",$fbTime);
		 		
			if(isset($post-> message))
			{
				$posts .= '<h5><p style="line-height:60px;">Posted on: ' . $myTime. '</h5>';
				$posts .= '<h4><a href="' . $post -> link . '">' . $post -> message . '</a></p>';
				
				if(isset($post-> description))
				{
					$posts .= '<p style="line-height:60px;"><img src="' . $post -> picture . '" class="fbpicture" style="width:470px; height:246px;" /></p>';
					$posts .= '<p>' . $post -> description . '</p>';
				
				}
			}
			else
			continue;


			
			$posts .= '</h4><br/><hr />';	
			

		}

		//Display the posts
		echo $posts;
		?>
	</div>
</div>
