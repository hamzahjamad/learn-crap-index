<?php
namespace App\CrapExperiment;

class CrapClassImproved 
{
	private $states;

	public function __construct() {
		$this->states = [
			"Sabah" => ["Kota Kinabalu", "Sandakan", "Tawau"],
			"Sarawak" => ["Sibu", "Kuching", "Miri"],
			"Selangor" => ["Sepang", "Sabak Bernam", "Gombak"],
			"Johor" => ["Batu Pahat", "Muar", "Segamat"],
			"Terengganu" => ["Dungun", "Marang", "Setiu"],
		];
	}

	public function listCities($state) {
		if (isset($this->states[$state])) {
			return implode(", ", $this->states[$state]);
		} else {
			throw new \UnexpectedValueException("Unknown state $state");
		}
	}	
}