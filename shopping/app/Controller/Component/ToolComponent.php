<?php 
	/**
	* 
	*/
	class ToolComponent extends Component
	{
		
		public function between($date,$start,$end,$timezone = 'asia/Ho Chi Minh'){
			date_default_timezone_set($timezone);
			$date = strtotime($date);
			$start = strtotime($start);
			$end = strtotime($end);
			if($date >= $start && $date <= $end){
				return true;
			}else{
				return false;
			}
		}
	}
?>