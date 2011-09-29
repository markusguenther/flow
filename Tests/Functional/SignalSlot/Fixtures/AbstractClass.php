<?php
namespace TYPO3\FLOW3\Tests\Functional\SignalSlot\Fixtures;

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
 * An abstract class with a signal
 *
 * @scope prototype
 */
abstract class AbstractClass {

	/**
	 * @return void
	 */
	public function triggerSomethingSignalFromAbstractClass() {
		$this->emitSomething();
	}

	/**
	 * @signal
	 * @return void
	 */
	public function emitSomething() {
	}

}
?>