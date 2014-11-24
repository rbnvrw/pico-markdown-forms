<?php
/**
* @package Pico
* @subpackage Markdown Forms
* @version 1.0
* @author Ruben Verweij <development@rubenverweij.nl>
* @link https://github.com/rbnvrw/pico-markdown-forms
* @license http://opensource.org/licenses/MIT
*
*/

use RubenVerweij\MarkdownForms;

class Pico_Markdown_Forms {

	/**
	* Parse the content using the MarkdownForms class
	*/
    public function before_parse_content(&$content)
	{
		$content = preg_replace('#/\*.+?\*/#s', '', $content); // Remove comments and meta
		$content = MarkdownForms::defaultTransform($content);  // Use MarkdownForms
	}
	
}
