<?php
namespace Test;

use PHPUnit\Framework\TestCase;

class SampleOneTest extends TestCase
{
	
	public function testSampling(){
		$sampleOne = new \App\SampleOne;
		$this->assertEquals(
			'sampling',
			$sampleOne->doSampling()
		);
	}
}