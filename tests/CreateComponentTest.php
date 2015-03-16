<?php

namespace Zenify\FlashMessageComponent\Tests;

use Nette\DI\Container;
use PHPUnit_Framework_TestCase;
use Zenify;
use Zenify\FlashMessageComponent\FlashMessageControl;
use Zenify\FlashMessageComponent\FlashMessageControlFactory;


class CreateComponentTest extends PHPUnit_Framework_TestCase
{

	/**
	 * @var Container
	 */
	private $container;


	public function __construct()
	{
		$this->container = (new ContainerFactory)->create();
	}


	/**
	 * @return mixed
	 */
	public function testFactory()
	{
		/** @var FlashMessageControlFactory $factory */
		$factory = $this->container->getByType('Zenify\FlashMessageComponent\FlashMessageControlFactory');
		$this->assertInstanceOf('Zenify\FlashMessageComponent\FlashMessageControlFactory', $factory);
		$this->assertInstanceOf('Zenify\FlashMessageComponent\FlashMessageControl', $factory->create());
	}

}
