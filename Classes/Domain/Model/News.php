<?php
/***************************************************************
 *  Copyright notice
 *  (c) 2013 Georg Ringer <georg.ringer@cyberhouse.at>
 *  All rights reserved
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Add field "feAuthor" to the news class
 *
 * @package TYPO3
 * @subpackage tx_newsauthor
 */
class Tx_Newsauthor_Domain_Model_News extends Tx_News_Domain_Model_News {

	/**
	 * @var Tx_Extbase_Domain_Model_FrontendUser
	 *
	 */
	protected $feAuthor;

	/**
	 * @param Tx_Extbase_Domain_Model_FrontendUser $feAuthor
	 */
	public function setFeAuthor($feAuthor) {
		$this->feAuthor = $feAuthor;
	}

	/**
	 * @return Tx_Extbase_Domain_Model_FrontendUser
	 */
	public function getFeAuthor() {
//		print_r(($this->feAuthor));
//		echo 'xxx';die('x');
		return $this->feAuthor;
	}

}

?>