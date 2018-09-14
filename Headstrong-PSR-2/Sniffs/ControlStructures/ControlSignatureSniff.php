<?php

namespace HeadstrongPSR2\Sniffs\ControlStructures;

use PHP_CodeSniffer\Sniffs\Sniff;
use PHP_CodeSniffer\Files\File;

/**
 * Verifies that control statements conform to their coding standards.
 *
 * @author Ben Roberts <ben@headsnet.com>
 */
class ControlSignatureSniff implements Sniff
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
