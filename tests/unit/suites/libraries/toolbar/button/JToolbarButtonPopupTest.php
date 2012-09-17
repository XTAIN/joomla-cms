<?php
/**
 * @package	    Joomla.UnitTest
 * @subpackage  Toolbar
 *
 * @copyright   Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license	    GNU General Public License version 2 or later; see LICENSE
 */

/**
 * Test class for JToolbarButtonPopup.
 * Generated by PHPUnit on 2012-08-10 at 22:19:30.
 */
class JToolbarButtonPopupTest extends PHPUnit_Framework_TestCase
{
	/**
	 * @var JToolbar
	 */
	protected $toolbar;

	/**
	 * @var JToolbarButtonPopup
	 */
	protected $object;

	/**
	 * Sets up the fixture, for example, opens a network connection.
	 * This method is called before a test is executed.
	 */
	protected function setUp()
	{
		$this->toolbar = JToolbar::getInstance();
		$this->object  = $this->toolbar->loadButtonType('popup');
	}

	/**
	 * Tears down the fixture, for example, closes a network connection.
	 * This method is called after a test is executed.
	 */
	protected function tearDown()
	{
	}

	/**
	 * @covers JToolbarButtonPopup::fetchButton
	 * @todo   Implement testFetchButton().
	 */
	public function testFetchButton()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete('This test has not been implemented yet.'
		);
	}

	/**
	 * Tests the fetchId method
	 *
	 * @return  void
	 *
	 * @since   3.0
	 *
	 * @covers  JToolbarButtonPopup::fetchId
	 */
	public function testFetchId()
	{
		$this->assertThat(
			$this->object->fetchId('popup', 'test'),
			$this->equalTo('toolbar-popup-test')
		);
	}
}