<?php

namespace MrClean\Test;

class StripPhoneNumberTest extends TestBase
{

	/** @test */

	public function it_can_strip_a_phone_number()
	{
		$cleaner = new \MrClean\MrClean();

		$result = $cleaner->cleaners(['strip_phone_number'])
							->scrub('(555) 555-5555');

		$this->assertEquals('5555555555', $result);
	}
	/** @test */

	public function it_can_strip_a_phone_number_with_an_extension()
	{
		$cleaner = new \MrClean\MrClean();

		$result = $cleaner->cleaners(['strip_phone_number'])
							->scrub('(555) 555-5555 ext. 123');

		$this->assertEquals('5555555555x123', $result);
	}

}