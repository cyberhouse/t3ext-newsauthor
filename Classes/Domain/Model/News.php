<?php

namespace Cyberhouse\Newsauthor\Domain\Model;

/*
 * This file is part of the TYPO3 project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Lesser General Public License, either version 3
 * of the License, or (at your option) any later version.
 *
 * For the full copyright and license information, please read the LICENSE
 * file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

/**
 * Class News
 *
 * @package Cyberhouse\Newsauthor\Domain\Model
 */
class News extends \GeorgRinger\News\Domain\Model\News {

	/**
	 * @var \TYPO3\CMS\Extbase\Domain\Model\FrontendUser
	 *
	 */
	protected $feAuthor;

	/**
	 * @param \TYPO3\CMS\Extbase\Domain\Model\FrontendUser $feAuthor
	 */
	public function setFeAuthor($feAuthor) {
		$this->feAuthor = $feAuthor;
	}

	/**
	 * @return \TYPO3\CMS\Extbase\Domain\Model\FrontendUser
	 */
	public function getFeAuthor() {
		return $this->feAuthor;
	}

}