<?php
/**
 * maccotsan/StringTool
 *
 * @copyright 2016 maccotsan <maccotsan@gmail.com>
 * @license The MIT License (MIT)
 */

namespace maccotsan\StringTool;

/**
 * Class JpSupportTest
 * @package maccotsan\StringTool
 */
class JpSupportTest extends \PHPUnit_Framework_TestCase
{
	/**
	 * 文字列中の半角文字を全角文字に揃える
	 */
	public function testConvertSingle2DoubleByte()
	{
		$str = "ｱｲｳｴｵｶｷｸｹｺｻｼｽｾｿﾀﾁﾂﾃﾄﾅﾆﾇﾈﾉﾊﾋﾌﾍﾎﾏﾐﾑﾒﾓﾔﾕﾖﾗﾘﾙﾚﾛﾜｦﾝｧｨｩｪｫｬｭｮｯ";
		$expected = "アイウエオカキクケコサシスセソタチツテトナニヌネノハヒフヘホマミムメモヤユヨラリルレロワヲンァィゥェォャュョッ";
		$ret = JpSupport::convertSingle2DoubleByte($str);
		$this->assertEquals($expected, $ret);

		$str = "ｰﾞﾟ｡｢｣､･ｶﾞｷﾞｸﾞｹﾞｺﾞｻﾞｼﾞｽﾞｾﾞｿﾞﾀﾞﾁﾞﾂﾞﾃﾞﾄﾞﾊﾞﾊﾟﾋﾞﾋﾟﾌﾞﾌﾟﾍﾞﾍﾟﾎﾞﾎﾟｳﾞﾜﾞｦﾞ";
		$expected = "ー゛゜。「」、・ガギグゲゴザジズゼゾダヂヅデドバパビピブプベペボポヴワ゛ヲ゛";
		$ret = JpSupport::convertSingle2DoubleByte($str);
		$this->assertEquals($expected, $ret);

		$str = "!\"#$%&'()*+,-./0123456789:;<=>?@";
		$expected = "！”＃＄％＆'（）＊＋，－．／０１２３４５６７８９：；＜＝＞？＠";
		$ret = JpSupport::convertSingle2DoubleByte($str);
		$this->assertEquals($expected, $ret);

		$str = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
		$expected = "ＡＢＣＤＥＦＧＨＩＪＫＬＭＮＯＰＱＲＳＴＵＶＷＸＹＺ";
		$ret = JpSupport::convertSingle2DoubleByte($str);
		$this->assertEquals($expected, $ret);

		$str = "[\]^_`abcdefghijklmnopqrstuvwxyz{|}~";
		$expected = "［＼］＾＿｀ａｂｃｄｅｆｇｈｉｊｋｌｍｎｏｐｑｒｓｔｕｖｗｘｙｚ｛｜｝〜";
		$ret = JpSupport::convertSingle2DoubleByte($str);
		$this->assertEquals($expected, $ret);


		$str = " ";
		$expected = "　";
		$ret = JpSupport::convertSingle2DoubleByte($str);
		$this->assertEquals($expected, $ret);
	}
}
