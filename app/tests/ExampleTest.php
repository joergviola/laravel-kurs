<?php

class ExampleTest extends TestCase {

	/**
	 * A basic functional test example.
	 *
	 * @return void
	 */
	public function testBasicExample()
	{
		$crawler = $this->client->request('GET', '/');

		$this->assertTrue($this->client->getResponse()->isOk());
		
		$h1 = $crawler->filter("h1")
				->first();
		
		$this->assertEquals("You have arrived.", $h1->text());
	}

}