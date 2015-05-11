<!-- jsconnect auth used to safely authenticate through multiple sites / domains, currently not in use, but successfully tested! ~Kenny -->

<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		//Add this line to load the library from the library folder
   		 //$this->load->library('jsconnect'); autoload config
	}

	function index()
	{
	}

  function vanilla()
  {
    // This would be the authentication function for your jsconnect install
    // My server uses TankAuth for authentication, so i left in their syntax down
    // below for reference. Please remove that and add your own Authentication 
    // related code!
    
    $clientID = "372750243";
    $secret = "0db1130bd2526eca034c49389d21377c";
	$secure = true; 
    
    $User = array();

    if ($this -> session -> userdata('logged_in')) 
    { 
      // 2. Grab the current user from your session management system or database here.
      $session_data = $this -> session -> userdata('logged_in');
	  
      // 3. Fill in the user information in a way that Vanilla can understand.
      //$this->userID = $this->tank_auth->get_user_id();
      //$this->userName = $this->tank_auth->get_username();
      //$this->user = $this->users->getUserByID($this->userID);
      
      // CHANGE THESE FOUR LINES.
      $User['uniqueid'] = $session_data['UserID'];
      $User['name'] = $session_data['Name'];
      $User['email'] = $session_data['Email'];
      $User['photourl'] = $session_data['Photo'];
	  
    }
    
    // 4. Generate the jsConnect string.

    // This should be true unless you are testing. 
    // You can also use a hash name like md5, sha1 etc which must be the name as the connection settings in Vanilla.

    $this -> jsconnect -> WriteJsConnect($User, $_GET, $clientID, $secret, $secure);
	
	//
  }

}

/* End of file auth.php */
/* Location: ./application/controllers/auth.php */