<?php
/**
 * maccotsan/StringTool
 *
 * @copyright 2016 maccotsan <maccotsan@gmail.com>
 * @license The MIT License (MIT)
 */

namespace maccotsan\StringTool;

/**
 * Class JpSupport
 * @package maccotsan\StringTool
 */
class JpSupport
{
	/**
	 * 文字列中の半角文字を全角文字に揃える
	 *
	 * @param string $str 文字列
	 * @return string 文字列
	 */
	public static function convertSingle2DoubleByte($str)
	{
		$doubleByteStr = mb_convert_kana($str, 'ASKV');

		// mb_convert_kana()で変換されない文字の対応
		$doubleByteStr = str_replace("\'", '’', $doubleByteStr);
		$doubleByteStr = str_replace('"', '”', $doubleByteStr);
		$doubleByteStr = str_replace('\\', '＼', $doubleByteStr);
		$doubleByteStr = str_replace('~', '〜', $doubleByteStr);

		return $doubleByteStr;
	}
}
