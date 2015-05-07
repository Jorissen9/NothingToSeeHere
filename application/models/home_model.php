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

		//Display the posts
		return $fbdata;
	}

}
?>