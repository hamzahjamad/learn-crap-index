<?php
namespace Test;

use PHPUnit\Framework\TestCase;
use App\CrapExperiment\CrapClass;

class CrapClassPartialTest extends TestCase
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
			["Sarawak", "Sibu, Kuching, Miri"]
		];
	}

	/**
	* @dataProvider statesProvider
	*/
	public function testListCities($state, $result){
		$output = $this->crapClass->listCities($state);
		$this->assertEquals($result, $output);
	}
}