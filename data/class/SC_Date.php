<?php
/*
 * This file is part of EC-CUBE
 *
 * Copyright(c) 2000-2007 LOCKON CO.,LTD. All Rights Reserved.
 *
 * http://www.lockon.co.jp/
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
 */

/*　日時表示用クラス */
class SC_Date {
	var $start_year;
	var $month;
	var $day;
	var $end_year;
	
	// コンストラクタ
	function SC_Date($start_year='', $end_year='') {
		if ( $start_year ) 	$this->setStartYear($start_year);	
		if ( $end_year )	$this->setEndYear($end_year);
	}
	
	function setStartYear($year){
		$this->start_year = $year;
	}
	
	function getStartYear(){
		return $this->start_year;
	}
	
	function setEndYear($endYear) {
		$this->end_year = $endYear;	
	}
	
	function getEndYear() {
		return $this->end_year;
	}
	
	function setMonth($month){
		$this->month = $month;			
	}
	
	function setDay ($day){
		$this->day = $day;
	}
			
	function getYear($year = '', $default = ''){
		if ( $year ) $this->setStartYear($year);
		
		$year = $this->start_year;
		if ( ! $year ) $year = DATE("Y");
		
		$end_year = $this->end_year;
		if ( ! $end_year ) $end_year = (DATE("Y") + 3);
		
		$year_array = array();
		
		for ($i=$year; $i<=($end_year); $i++){		
			$year_array[$year] = $i;
			if($year == $default) {
				$year_array['----'] = "----";
			}
			$year++;
		}
		return $year_array;
	}
	
	function getZeroYear($year = ''){
		if ( $year ) $this->setStartYear($year);
		
		$year = $this->start_year;
		if ( ! $year ) $year = DATE("Y");
		
		$end_year = $this->end_year;
		if ( ! $end_year ) $end_year = (DATE("Y") + 3);
		
		$year_array = array();
		
		for ($i=$year; $i<=($end_year); $i++){
			$key = substr($i, -2);
			$year_array[$key] = $key;
		}
		return $year_array;
	}
	
	function getZeroMonth(){
	
		$month_array = array();
		for ($i=1; $i <= 12; $i++){
			$val = sprintf("%02d", $i);
			$month_array[$val] = $val;
		}
		return $month_array;
	}	
	
	
	function getMonth(){
	
		$month_array = array();
		for ($i=0; $i < 12; $i++){
			$month_array[$i + 1 ] = sprintf("%02d",$i + 1) ;
		
                }
		return $month_array;
	}	
	
	function getDay(){	
		
		$day_array = array();
		for ($i=0; $i < 31; $i++){		
			$day_array[ $i + 1 ] = sprintf("%02d", $i + 1);
		}
		
		return $day_array;
	}

	function getHour(){	
		
		$day_array = array();
		for ($i=0; $i<=23; $i++){		
			$hour_array[$i] = $i;
		}
		
		return $hour_array;
	}

	function getMinutes(){	
		
		$minutes_array = array();
		for ($i=0; $i<=59; $i++){		
			$minutes_array[$i] = $i;
		}
		
		return $minutes_array;
	}
	
	function getMinutesInterval(){	
		
		$minutes_array = array("00"=>"00", "30"=>"30");		
		return $minutes_array;
	}	
}
?>
