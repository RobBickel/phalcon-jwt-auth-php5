<?php
namespace Dmkit\Phalcon\Auth\TokenGetter\Handler;

use Phalcon\Http\RequestInterface;

/**
 * Dmkit\Phalcon\Auth\TokenGetter\Handler\Adapter.
 */
abstract class Adapter
{

	// request object
	protected $_Request;

	// key for fetching JWT
	protected $key;

	/**
     * Sets request object.
     *
     * @param Phalcon\Http\RequestInterface $request
     */
	public function __construct(RequestInterface $request)
	{
		$this->_Request = $request;
	}

	/**
     * Sets the key for fetching
     *
     */
	public function setKey(string $key)
	{
		$this->key = $key;
	}
}