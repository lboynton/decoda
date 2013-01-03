<?php
/**
 * @copyright	Copyright 2006-2013, Miles Johnson - http://milesj.me
 * @license		http://opensource.org/licenses/mit-license.php - Licensed under the MIT License
 * @link		http://milesj.me/code/php/decoda
 */

namespace Decoda;

use Decoda\Decoda;

/**
 * Defines the methods for all Hooks to implement.
 */
interface Hook {

	/**
	 * Return a specific configuration key value.
	 *
	 * @access public
	 * @param string $key
	 * @return mixed
	 */
	public function config($key);

	/**
	 * Process the content after the parsing has finished.
	 *
	 * @access public
	 * @param string $content
	 * @return string
	 */
	public function afterParse($content);

	/**
	 * Process the content after the stripping has finished.
	 *
	 * @access public
	 * @param string $content
	 * @return string
	 */
	public function afterStrip($content);

	/**
	 * Process the content before the parsing begins.
	 *
	 * @access public
	 * @param string $content
	 * @return string
	 */
	public function beforeParse($content);

	/**
	 * Process the content before the stripping begins.
	 *
	 * @access public
	 * @param string $content
	 * @return string
	 */
	public function beforeStrip($content);

	/**
	 * Return the Decoda parser.
	 *
	 * @access public
	 * @return \Decoda\Decoda
	 */
	public function getParser();

	/**
	 * Return a message string from the parser.
	 *
	 * @access public
	 * @param string $key
	 * @param array $vars
	 * @return string
	 */
	public function message($key, array $vars = array());

	/**
	 * Set the Decoda parser.
	 *
	 * @access public
	 * @param \Decoda\Decoda $parser
	 * @return \Decoda\Hook
	 */
	public function setParser(Decoda $parser);

	/**
	 * Add any filter dependencies.
	 *
	 * @access public
	 * @param \Decoda\Decoda $decoda
	 * @return \Decoda\Hook
	 */
	public function setupFilters(Decoda $decoda);

}