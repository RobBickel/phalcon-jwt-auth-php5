<?php
namespace Dmkit\Phalcon\Auth\TokenGetter\Handler;

use Dmkit\Phalcon\Auth\TokenGetter\Handler\Adapter;

/**
 * Dmkit\Phalcon\Auth\TokenGetter\Handle\Header.
 */
class Header extends Adapter
{
	// header key
	protected $key='Authorization';

	// header value prefix
	protected $prefix='Bearer';
	

	/**
     * Gets the token from the headers
     *
     * @return string
     */
	public function parse()
	{
		$headers = getallheaders();
		$keys = array_keys($headers);
		if(in_array($this->key, $keys)) {
			$raw_token = getallheaders()[$this->key];
			return trim( str_ireplace($this->prefix, '', $raw_token));
		}
		
		return '';
	}

	/**
     * Sets the header value prefix
     *
     */
	public function setPrefix(string $prefix)
	{
		$this->prefix = $prefix;
	}
}