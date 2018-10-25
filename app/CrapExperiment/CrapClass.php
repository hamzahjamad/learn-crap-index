<?php
namespace App\CrapExperiment;

class CrapClass 
{
	public function listCities($state) {
		if ($state == "Sabah") {
			return "Kota Kinabalu, Sandakan, Tawau";
		} elseif ($state == "Sarawak") {
			return "Sibu, Kuching, Miri";
		} elseif ($state == "Selangor") {
			return "Sepang, Sabak Bernam, Gombak";
		} elseif ($state == "Johor") {
			return "Batu Pahat, Muar, Segamat";
		} elseif ($state == "Terengganu") {
			return "Dungun, Marang, Setiu";
		} else {
			throw new \UnexpectedValueException("Unknown state $state");
		}
	}	
}