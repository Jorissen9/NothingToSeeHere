<?php
$Session = Gdn::Session();
var_dump($Session->User);


// Declare an alias for the user session.
// Check if the user session is valid.
if ($Session -> IsValid())
	//echo "The user is logged in!";
	if (is_object($Session->User) && $Session->User->Admin)
     echo "I'm an admin!";
// The session is valid, so the user is logged in.
else
	echo "The user is not logged in.";
// The session is invalid, so the user is not logged in.
?>