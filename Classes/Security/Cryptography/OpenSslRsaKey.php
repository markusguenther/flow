<?php
namespace TYPO3\FLOW3\Security\Cryptography;

/*                                                                        *
 * This script belongs to the FLOW3 framework.                            *
 *                                                                        *
 * It is free software; you can redistribute it and/or modify it under    *
 * the terms of the GNU Lesser General Public License, either version 3   *
 * of the License, or (at your option) any later version.                 *
 *                                                                        *
 * The TYPO3 project - inspiring people to share!                         *
 *                                                                        */

/**
 * An RSA key
 *
 * @scope prototype
 */
class OpenSslRsaKey {

	/**
	 * @var string
	 */
	protected $modulus;

	/**
	 * @var string
	 */
	protected $keyString;

	/**
	 * Constructor
	 *
	 * @param string $modulus The HEX modulus
	 * @param string $keyString The private key string
	 * @return void
	 * @author Andreas Förthner <andreas.foerthner@netlogix.de>
	 */
	public function __construct($modulus, $keyString) {
		$this->modulus = $modulus;
		$this->keyString = $keyString;
	}

	/**
	 * Returns the modulus in HEX representation
	 *
	 * @return string The modulus
	 * @author Andreas Förthner <andreas.foerthner@netlogix.de>
	 */
	public function getModulus() {
		return $this->modulus;
	}

	/**
	 * Returns the key string
	 *
	 * @return string The key string
	 * @author Andreas Förthner <andreas.foerthner@netlogix.de>
	 */
	public function getKeyString() {
		return $this->keyString;
	}
}
?>