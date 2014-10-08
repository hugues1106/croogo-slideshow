<?php
App::uses('SlideshowItem', 'Slideshow.Model');

/**
 * SlideshowItem Test Case
 *
 */
class SlideshowItemTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.slideshow.slideshow_item',
		'plugin.slideshow.slideshow'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SlideshowItem = ClassRegistry::init('Slideshow.SlideshowItem');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SlideshowItem);

		parent::tearDown();
	}

}
