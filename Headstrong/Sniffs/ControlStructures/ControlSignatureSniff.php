<?php

if (class_exists('PHP_CodeSniffer_Standards_AbstractPatternSniff', true) === false)
{
	throw new PHP_CodeSniffer_Exception('Class PHP_CodeSniffer_Standards_AbstractPatternSniff not found');
}

/**
 * Verifies that control statements conform to their coding standards.
 *
 * @author Ben Roberts <ben@headsnet.com>
 * @link   http://pear.php.net/package/PHP_CodeSniffer
 */
class Headstrong_Sniffs_ControlStructures_ControlSignatureSniff extends PHP_CodeSniffer_Standards_AbstractPatternSniff
{
	/**
	 * A list of tokenizers this sniff supports.
	 *
	 * @var array
	 */
	public $supportedTokenizers = ['PHP', 'JS'];

	/**
	 * Returns the patterns that this test wishes to verify.
	 *
	 * @return string[]
	 */
	protected function getPatterns()
	{
		return [
			'tryEOL...{EOL...}EOL...catch (...)EOL...{EOL',
			'do {EOL...}EOL...while (...);EOL',
			'while (...)EOL...{EOL',
			'for (...)EOL...{EOL',
			'if (...)EOL...{EOL',
			'foreach (...)EOL...{EOL',
			'}EOL...else if (...)EOL...{EOL',
			'}EOL...elseif (...)EOL...{EOL',
			'}EOL...elseEOL...{EOL',
		];
	}

}
