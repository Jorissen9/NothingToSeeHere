<?php 
if (!defined('APPLICATION')) exit();
?>
<h1> Edit Calendar</h1>
<div class="info">
<?php
echo $this->Form->Open();
echo $this->Form->Errors();?>
<p><?php echo $this->Form->Label('Feed ID','feedid');?>
<?php echo $this->Form->Input('feedid');?></p>
<p><?php echo $this->Form->Label('Title','name');?>
	<?php echo $this->Form->Input('name');?></p>
<p><?php echo $this->Form->Label('Days','days');?>
	<?php echo $this->Form->Input('days');?></p>
<p><?php echo $this->Form->Label('Calendar URL','url');?>
	<?php echo $this->Form->Input('url');?></p>
<p><?php echo $this->Form->Label('Timezone','timezone');?>
<?php
$timezones= array
    (
        'Kwajalein' => 'Kwajalein',
        'Pacific/Midway' =>  'Pacific/Midway',
        'Pacific/Honolulu' => 'Pacific/Honolulu',
        'America/Anchorage' => 'America/Anchorage',
        'America/Los_Angeles' =>'America/Los_Angeles',
        'America/Denver' => 'America/Denver',
        'America/Tegucigalpa' => 'America/Tegucigalpa',
        'America/New_York' => 'America/New_York',
        'America/Halifax' => 'America/Halifax',
        'America/Sao_Paulo' => 'America/Sao_Paulo',
        'Atlantic/South_Georgia' => 'Atlantic/South_Georgia',
        'Atlantic/Azores' => 'Atlantic/Azores',
        'Europe/London' =>'Europe/London',
        'Europe/Belgrade' => 'Europe/Belgrade',
        'Europe/Minsk' => 'Europe/Minsk',
        'Asia/Kuwait' => 'Asia/Kuwait',
        'Asia/Muscat' => 'Asia/Muscat',
        'Asia/Yekaterinburg' =>'Asia/Yekaterinburg',
        'Asia/Dhaka' =>  'Asia/Dhaka',
        'Asia/Krasnoyarsk' => 'Asia/Krasnoyarsk',
        'Asia/Brunei' => 'Asia/Brunei',
        'Asia/Seoul' => 'Asia/Seoul',
        'Australia/Canberra' => 'Australia/Canberra',
        'Asia/Magadan' =>'Asia/Magadan',
        'Pacific/Fiji' =>'Pacific/Fiji',
        'Pacific/Tongatapu' =>'Pacific/Tongatapu'
    );

 echo $this->Form->Dropdown('timezone',$timezones);?></p>
<?php echo $this->Form->Close('Save');?>
</div>