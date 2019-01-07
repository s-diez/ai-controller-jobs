<?php

/**
 * @license LGPLv3, http://opensource.org/licenses/LGPL-3.0
 * @copyright Aimeos (aimeos.org), 2015-2018
 */


namespace Aimeos\Controller\Common\Product\Import\Csv\Processor;


class DoneTest extends \PHPUnit\Framework\TestCase
{
	private $object;
	private $context;


	protected function setUp()
	{
		\Aimeos\MShop::cache( true );

		$this->context = \TestHelperCntl::getContext();
		$this->object = new \Aimeos\Controller\Common\Product\Import\Csv\Processor\Done( $this->context, [] );
	}


	protected function tearDown()
	{
		\Aimeos\MShop::cache( false );
		$this->object = null;
	}


	public function testProcess()
	{
		$product = \Aimeos\MShop::create( $this->context, 'product' )->createItem();

		$result = $this->object->process( $product, array( 'test' ) );

		$this->assertEquals( array( 'test' ), $result );
	}
}