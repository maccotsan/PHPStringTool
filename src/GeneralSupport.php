<?php
/**
 * maccotsan/StringTool
 *
 * @copyright 2016 maccotsan <maccotsan@gmail.com>
 * @license The MIT License (MIT)
 */

namespace maccotsan\StringTool;

/**
 * Class GeneralSupport
 * @package maccotsan\StringTool
 */
class GeneralSupport
{
	/**
	 * 文字列の改行コードを揃える
	 *
	 * @param string $string 文字列
	 * @param string $to 変換後の改行コード
	 * @return string 文字列
	 */
	public static function convertEOL($string, $to = "\n")
	{
		return preg_replace("/\r\n|\r|\n/", $to, $string);
	}
}
