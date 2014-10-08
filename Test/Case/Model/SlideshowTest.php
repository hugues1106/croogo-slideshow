<?php
App::uses('Slideshow', 'Slideshow.Model');

/**
 * Slideshow Test Case
 *
 */
class SlideshowTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.slideshow.slideshow',
		'plugin.slideshow.slideshow_item'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Slideshow = ClassRegistry::init('Slideshow.Slideshow');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Slideshow);

		parent::tearDown();
	}

}
