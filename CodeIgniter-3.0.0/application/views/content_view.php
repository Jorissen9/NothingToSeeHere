<div class="col-xs-6">
	<div class="col-md-9 pull-right">
		<br/>

		<h2>Welcome to TEDxUHasselt </h2>
		<h4>TEDxUHasselt is an independently organized TED conference where speakers from around the world share cutting-edge ideas. During the breaks, attendees connect with each other through various interactive activities.</h4>
		<p>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</p>

		<br/>
		<h1> Nieuws </h1>
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
