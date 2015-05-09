<?php 

 
class GoogleCalendarFeed extends Gdn_Module
{
    // Don't edit below this line unless you know what you are doing.

    public function __construct(&$Sender = '') 
	{ 
		parent::__construct($Sender); 
	}
    public function AssetTarget() { return 'Panel'; }
    
	function getfeed($path,$days,$tz)
	{
		$xml='';
		try{
		
		$gDateFormat = "Y-m-d";
		$endDate = date($gDateFormat,strtotime("+".$days." days"));
		$url = "http://www.google.com/calendar/feeds/".$path."/public/full?ctz=".$tz."&orderby=starttime&sortorder=a&singleevents=true&start-min=".date($gDateFormat)."&start-max=$endDate";
		//echo($url);
		$session = curl_init($url);
		curl_setopt($session, CURLOPT_HEADER, false);
		curl_setopt($session, CURLOPT_RETURNTRANSFER, true);
		$xml = curl_exec($session);
		curl_close($session);
		}
		catch (Error $e)
		{
			$xml='';
		}
		return $xml;
	}

	//processes a xml feed for a google calendar.
	function processfeed($xml,$title,$name,$path)
	{		
		$event_dateheader="<h5>###DATE###</h5>";
		$dateformat="j F Y"; // 10 March 2009 - see http://www.php.net/date for details
		$timeformat="g.ia";
		$rssimg = asset(DS."plugins".DS."GoogleCalendar".DS."rss.png");
		$rssUrl = "http://www.google.com/calendar/feeds/".$path."/public/basic";
		$text="<div class=Box  id=cal$name><a style=\"float:right\"href=\"$rssUrl\"><img src=\"$rssimg\" /></a><h4 style='width=80%'>$title</h4><ul class=PanelInfo>";
		try
		{
			$doc =  new SimpleXmlElement($xml, LIBXML_NOCDATA);
			$lastStartDate;
			foreach ($doc->entry as $entry) 
			{
				$ns_gd = $entry->children('http://schemas.google.com/g/2005');
				$title=$entry->title;
				$where = $ns_gd->where->attributes()->valueString;
				$map = "http://maps.google.com/?q=".urlencode($where);
				$when = strtotime($ns_gd->when->attributes()->startTime);
				$startTime = gmdate("g.ia", $when);
				$startDate = gmdate("j F Y", $when);
				if (!isset($lastStartDate)||($startDate != $lastStartDate))
				{
					$text.="</ul><h5>$startDate</h5><ul class=PanelInfo>";
					$lastStartDate = $startDate;
				}
				$text.="<li style=\"text-align:left\"><strong>$startTime - $title (<a style=\"float:none\" href=\"$map\">map</a>)</strong></li>";
			}
			
		}
		catch (Exception $e)
		{
			$text .=$xml; 
		}
		return $text."</ul></div>";
	}

	public function createfeeds()
	{
		//getfeeds from db
		$SQL = Gdn::SQL();
		$feeds= $SQL
		->Select("url,days,name,feedid")
		->From('Cals')
         ->Get();
		$String="";
		if ($feeds !== FALSE) {
			foreach($feeds as $feed ) {
				//for each feed add div and process.
				$tz = $feed->timezone;
				if ($tz=='')
				{
					$tz='Europe/London';
				}
				$xml= $this->getfeed($feed->url,$feed->days,$tz);
				if (xml!='')
					$String.=$this->processfeed($xml,$feed->name,$feed->feedid,$feed->url);
			}
		}
		return $String;
	}	
	
    public function ToString()
    {
	//return "";
     return $this->createfeeds();
   }
}
?>