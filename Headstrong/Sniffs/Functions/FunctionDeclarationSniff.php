<?php

if (class_exists('PHP_CodeSniffer_Standards_AbstractPatternSniff', true) === false)
{
    throw new PHP_CodeSniffer_Exception('Class PHP_CodeSniffer_Standards_AbstractPatternSniff not found');
}

/**
 * Checks the function declaration is correct.
 *
 * @author Ben Roberts <ben@headsnet.com>
 * @link   http://pear.php.net/package/PHP_CodeSniffer
 */
class Headstrong_Sniffs_Functions_FunctionDeclarationSniff extends PHP_CodeSniffer_Standards_AbstractPatternSniff
{

    /**
     * Returns an array of patterns to check are correct.
     *
     * @return string[]
     */
    protected function getPatterns()
    {
        return [
            'function abc(...);',
            'function abc(...)',
            'abstract function abc(...);',
        ];

    }

}
