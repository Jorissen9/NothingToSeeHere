<?php 
if (!defined('APPLICATION')) exit();
?>
<h1><?php echo T('Manage Calendars'); ?></h1>
<div class="Info">
	<p>
	<?php
	   echo T('The Calendar feeds detailed below will show on the panel in your forum.');
	   echo T('The Calendar feed ID = the name you want on the div in the html.');
	?>
		<dl>
			<dt>FeedID</dt>
			<dd><?php echo T('The name for the calendar used in the div.')?></dd>
			<dt>Title</dt>
			<dd><?php echo T('The title to be displayed at the top of a calendar.')?></dd>
			<dt>Days</dt>
			<dd><?php echo T('The numnber of days you wish to show on each calendar.')?></dd>
			<dt>URL</dt>
			<dd><?php echo T('The calendar id of the calendar.  This is taken from the xml link from google calendar.  Take the part of the link called calendarID in this example. http://www.google.com/calendar/feeds/calendarID/public/full')?></dd>
	    </dl>
	</p>
	<p><?php  echo Anchor( T('Add Calendar'),'plugin/GoogleCalendar/add','SmallButton');?></p>
</div>
<table  id="calTable">
   <thead>
      <tr>
        <th>feedID</th>
		<th>Title</th>
		<th>Days</th>
		<th>Timezone</th>
		<th>URL</th>
		<th>Edit</th>
		<th>Delete</th>
      </tr>
   </thead>
   <tbody>
<?php
$feeds = Gdn::Database()
		->SQL()
		->Select("CalsID,url,days,name,feedid,timezone")
		->From('Cals')
        ->Get();
		$i=0;
foreach($feeds as $feed ) {
?>
   <tr>
      <td><?php echo $feed->feedid; ?></td>
	  <td><?php echo $feed->name; ?></td>
	  <td><?php echo $feed->days; ?></td>
	  <td><?php echo $feed->timezone; ?></td>
	  <td><?php echo $feed->url; ?></td>
	  <td><?php  echo Anchor( T('Edit'),'plugin/GoogleCalendar/edit/'.$feed->CalsID,'SmallButton');?></td>
	  <td><?php  echo Anchor( T('Delete'),'plugin/GoogleCalendar/delete/'.$feed->CalsID,'SmallButton');?></td>
   </tr>
<?php
$i++;
}
?>
   </tbody>
</table> 