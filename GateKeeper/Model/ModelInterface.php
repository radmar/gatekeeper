<?php
/**
 * Author: Łukasz Barulski
 * Date: 22.04.14 15:04
 */

namespace GateKeeper\Model;

interface ModelInterface
{
	/**
	 * @return string
	 */
	public function getAccess();

	/**
	 * @return string
	 */
	public function getGate();
}