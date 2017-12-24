<?php
namespace Dmkit\Phalcon\Auth\TokenGetter;

/**
 * Dmkit\Phalcon\Auth\TokenGetter\TokenGetter.
 */
class TokenGetter
{
	// TokenGetters
	protected $getters = [];

	/**
     * Sets getters.
     *
     * @param Dmkit\Phalcon\Auth\TokenGetter\AdapterInterface $getters
     */
	public function __construct(...$getters)
	{
		$this->getters = $getters;
	}

	/**
     * Calls the getters parser and returns the token
     *
     * @return string
     */
	public function parse()
	{
		foreach($this->getters as $getter) 
		{
			$token = $getter->parse();
			if($token) {
				return $token;
			}
		}
		return '';
	}
}