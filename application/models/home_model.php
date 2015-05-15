<?php
Class Home_Model extends CI_Model {

	function get_posts() {

		$page_id = 'TEDxEvents';
		$access_token = '384545391746432|kMtO9DQn412t0WTd6MfLo3fsKkI';
		$fbid = "TEDxEvents";
		$limit = 5;
		$posts = "";

		//Get the JSON
		$json_object = @file_get_contents('https://graph.facebook.com/' . $page_id . '/feed?limit=' . $limit . '&access_token=' . $access_token);

		//Interpret data
		$fbdata = json_decode($json_object);

		foreach ($fbdata -> data as $post) {
			
			if (isset($post -> picture)) {
				$json_picture = @file_get_contents('https://graph.facebook.com/' . $post -> id . '?fields=full_picture&access_token=' . $access_token);
				$fbpicture = json_decode($json_picture);

				$post -> full_picture = $fbpicture -> full_picture;

			}
			else {
				continue;
			}

		}
		//Display the posts
		return $fbdata;
	}

}
?>