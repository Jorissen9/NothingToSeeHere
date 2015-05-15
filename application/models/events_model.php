<?php
Class Events_Model extends CI_Model {

	function AddEvent($newEvent) {
		$this -> db -> insert('events', $newEvent);
	}

	function getEvents() {
		$events = $this -> db -> query('SELECT * FROM events');
		return $events -> result();
	}

}
?>