<div class="col-xs-6">
	<div class="col-md-9 pull-right">
		<br/>
		<h1>Welcome to TEDxUHasselt </h2>
		<br/>
		<h2> Nieuws </h1>
		<?php
			$page_id = 'TEDxUHasselt';
			$access_token = '384545391746432|kMtO9DQn412t0WTd6MfLo3fsKkI';
			//Get the JSON
			$json_object = @file_get_contents('https://graph.facebook.com/' . $page_id . '/posts?access_token=' . $access_token);
			//Interpret data
			$fbdata = json_decode($json_object);

			foreach ($fbdata->data as $post) {
				$posts .= '<p><a href="' . $post -> link . '">' . $post -> story . '</a></p>';
				$posts .= '<p><a href="' . $post -> link . '">' . $post -> message . '</a></p>';
				$posts .= '<p>' . $post -> description . '</p>';
				$posts .= '<br />';
			}
		//Display the posts
		echo $posts;
		?>
	</div>
</div>
