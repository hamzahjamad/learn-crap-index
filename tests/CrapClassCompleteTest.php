<?php
namespace Test;

use PHPUnit\Framework\TestCase;
use App\CrapExperiment\CrapClass;

class CrapClassCompleteTest extends TestCase
{

	protected $crapClass;
	
	protected function setUp() {
		$this->crapClass = new CrapClass;
	}

	protected function tearDown() {

	}

	public function statesProvider() {
		return [
			["Sabah", "Kota Kinabalu, Sandakan, Tawau"],
			["Sarawak", "Sibu, Kuching, Miri"],
			["Selangor", "Sepang, Sabak Bernam, Gombak"],
		    ["Johor", "Batu Pahat, Muar, Segamat"],
		    ["Terengganu", "Dungun, Marang, Setiu"]
		];
	}

	/**
	* @dataProvider statesProvider
	*/
	public function testListCities($state, $result){
		$output = $this->crapClass->listCities($state);
		$this->assertEquals($result, $output);
	}

	/**
	* @expectedException UnexpectedValueException
	*/
	public function testListCitiesException() {
		$this->crapClass->listCities('Hiroshima');
	}
}