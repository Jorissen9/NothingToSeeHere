<?php
if (!defined('APPLICATION')) exit();
// Define the plugin:
$PluginInfo['GoogleCalendar'] = array(
   'Description' => 'Simple Calendar Feed',
   'Version' => '2.01',
   'Author' => "David Wylie",
   'AuthorEmail' => 'you@yourdomain.com',
   'AuthorUrl' => 'http://yourdomain.com',
   'RegisterPermissions' => array(
      'Plugins.GoogleCalendar.Edit'),
   'SettingsUrl' => '/plugin/googlecalendar',
   'SettingsPermission' => 'Garden.AdminUser.Only'
);
Gdn_LibraryMap::SafeCache('library','class.googlecalendarfeed.php',PATH_PLUGINS.DS.'GoogleCalendar'.DS.'class.googlecalendarfeed.php');
class GoogleCalendarPlugin extends Gdn_Plugin {
 
 
   public function Setup() {
      // Create db table. gc_cals (name,feedid, url,days)
	  $s = Gdn::Structure();
	  $s->Table('Cals')
         ->PrimaryKey('CalsID')
         ->Column('name', 'varchar(255)')
         ->Column('feedid', 'varchar(128)')
         ->Column('days', 'int(3)')
         ->Column('url', 'varchar(255)')
		 ->Column('timezone','varchar(255)')
         ->Set(FALSE, FALSE);
      
	   // Gdn::Database()
	   // ->SQL()
	   // ->Insert('Cals', array(
         // 'name' => 'UK Holidays',
         // 'feedid' => 'ukhols',
         // 'days' => 365,
         // 'url' => 'en.uk%23holiday%40group.v.calendar.google.com'
		 // ));
	  SaveToConfig('Plugins.Calendar.Enabled', FALSE);
      SaveToConfig('Plugins.GoogleCalendar.Enabled', TRUE);
   }
   
   public function PluginController_GoogleCalendar_Create($Sender)
   {
	$this->Dispatch($Sender, $Sender->RequestArgs);
	$Sender->Form = new Gdn_Form();
   }
   public function OnDisable() {
      SaveToConfig('Plugins.GoogleCalendar.Enabled', FALSE);
   }
   
	public function Base_Render_Before(&$Sender) {
		if (!in_array('Garden.Settings.Manage', $Sender->RequiredAdminPermissions)) {
            $CalendarFeed = new GoogleCalendarFeed($Sender);
			$Sender->AddModule($CalendarFeed);
         }
		
    }
	
	 public function Base_GetAppSettingsMenuItems_Handler(&$Sender) {
      $Menu = &$Sender->EventArguments['SideMenu'];
      $Menu->AddItem('GoogleCalendar', 'GoogleCalendar');
      $Menu->AddLink('GoogleCalendar', 'Settings', 'plugin/GoogleCalendar','Plugins.GoogleCalendar.Edit');
       }
	
	public function Controller_Index(&$Sender)
	{
		$Sender->AddCssFile('admin.css');
		$Sender->AddSideMenu('plugin/googlecalendar');
		$Sender->Render($this->GetView('settings.php'));
	}
	
	public function Controller_Edit(&$Sender)
	{
		$id =$Sender->RequestArgs[1];
		$Session = Gdn::Session();
		$Sender->AddCssFile('admin.css');
		$Sender->AddSideMenu('plugin/googlecalendar');
		$validation = new Gdn_Validation();
		$calModel = new Gdn_Model('Cals',$validation);
		$calData = $calModel->GetWhere(array('CalsID' => $id))->FirstRow();
		$Sender->Permission('Plugins.GoogleCalendar.Edit');
		$Sender->Form->SetModel($calModel);
		if ($Sender->Form->AuthenticatedPostBack() === FALSE) 
		{			
			$Sender->Form->SetData($calData);
			$Sender->Form->AddHidden('CalsID',$id);
		}
		else
		{
			 $feedid=$Sender->Form->GetFormValue('feedid', '');
			 if ($feedid != '' && Gdn_Format::Text($feedid) == '')
               $this->Form->AddError(T('You have entered an invalid feedID'), 'feedid');
			 $url=$Sender->Form->GetFormValue('url', '');
			 if ($url != '' && Gdn_Format::Text($url) == '')
               $this->Form->AddError(T('You have entered an invalid URL'), 'url');
			 $days = $Sender->Form->GetFormValue('days', 8);
			 if ($days <0)
               $this->Form->AddError(T('You have entered an invalid number of days'), 'days');
			 $name = $Sender->Form->GetFormValue('name', '');
			 if ($name != '' && Gdn_Format::Text($name) == '')
               $this->Form->AddError(T('You have entered an invalid Calendar Title'), 'name');
			if($Sender->Form->ErrorCount() == 0)
			{			
				$Saved = $Sender->Form->Save();
				if($Saved) 
				{
					$Sender->StatusMessage = T("Your changes have been saved.");
					//redirect
					Redirect('plugin/GoogleCalendar');
				}  
			}
		}
		$Sender->Render($this->GetView('edit.php'));
	}
	
	public function Controller_Add(&$Sender)
	{
		$Sender->AddCssFile('admin.css');
		$Sender->AddSideMenu('plugin/googlecalendar');
		$validation = new Gdn_Validation();
		$calModel = new Gdn_Model('Cals',$validation);
		$Sender->Permission('Plugins.GoogleCalendar.Edit');
		$Sender->Form->SetModel($calModel);
		if ($Sender->Form->AuthenticatedPostBack() !== FALSE) 
		{
			 $feedid=$Sender->Form->GetFormValue('feedid', '');
			 if ($feedid != '' && Gdn_Format::Text($feedid) == '')
               $this->Form->AddError(T('You have entered an invalid feedID'), 'feedid');
			 $url=$Sender->Form->GetFormValue('url', '');
			 if ($url != '' && Gdn_Format::Text($url) == '')
               $this->Form->AddError(T('You have entered an invalid URL'), 'url');
			 $days = $Sender->Form->GetFormValue('days', 8);
			 if ($days <0)
               $this->Form->AddError(T('You have entered an invalid number of days'), 'days');
			 $name = $Sender->Form->GetFormValue('name', '');
			 if ($name != '' && Gdn_Format::Text($name) == '')
               $this->Form->AddError(T('You have entered an invalid Calendar Title'), 'name');
			if($Sender->Form->ErrorCount() == 0)
			{			
				$Saved = $Sender->Form->Save();
				if($Saved) 
				{
					$Sender->StatusMessage = T("Your changes have been saved.");
					//redirect
					Redirect('plugin/GoogleCalendar');
				}  
			}
		}
		$Sender->Render($this->GetView('edit.php'));
	}
	
	public function Controller_Delete(&$Sender)
	{
		//delete given calendar id.
		$id =$Sender->RequestArgs[1];
		$validation = new Gdn_Validation();
		$calModel = new Gdn_Model('Cals',$validation);
		$calModel->Delete($id);
		$calModel->Save();
		Redirect('plugin/GoogleCalendar');
	}
}
?>