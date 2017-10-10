<?

namespace Bitrix\Main\UI\Filter;


/**
 * Class Theme. Available default filter themes
 * @package Bitrix\Main\UI\Filter
 */
class Theme
{
	const DEFAULT_FILTER = "DEFAULT";
	const ROUNDED = "ROUNDED";


	/**
	 * Gets themes list
	 * @return array
	 */
	public static function getList()
	{
		$reflection = new \ReflectionClass(__CLASS__);
		return $reflection->getConstants();
	}
}