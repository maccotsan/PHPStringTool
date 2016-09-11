<?php
/**
 * maccotsan/StringTool
 *
 * @copyright 2016 maccotsan <maccotsan@gmail.com>
 * @license The MIT License (MIT)
 */

namespace maccotsan\StringTool;

/**
 * Class GeneralSupportTest
 * @package maccotsan\StringTool
 */
class GeneralSupportTest extends \PHPUnit_Framework_TestCase
{
	/**
	 * 文字列の改行コードを揃える
	 */
	public function testConvertEOL()
	{
		$str = "test\r";
		$expected = "test\n";
		$ret = GeneralSupport::convertEOL($str, "\n");
		$this->assertEquals($expected, $ret);

		$str = "test\r\n";
		$expected = "test\n";
		$ret = GeneralSupport::convertEOL($str, "\n");
		$this->assertEquals($expected, $ret);
	}
}
