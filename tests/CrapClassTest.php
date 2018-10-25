<?php
namespace Test;

use PHPUnit\Framework\TestCase;
use App\CrapExperiment\CrapClass;

class CrapClassTest extends TestCase
{

	protected $crapClass;
	
	protected function setUp() {
		$this->crapClass = new CrapClass;
	}

	protected function tearDown() {

	}

	public function testListCities(){
		$this->markTestIncomplete('This test has not been implemented yet');
	}
}