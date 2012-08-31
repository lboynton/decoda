<?php
/**
 * @author      Miles Johnson - http://milesj.me
 * @copyright   Copyright 2006-2012, Miles Johnson, Inc.
 * @license     http://opensource.org/licenses/mit-license.php - Licensed under The MIT License
 * @link        http://milesj.me/code/php/decoda
 */

namespace mjohnson\decoda\filters;

use mjohnson\decoda\filters\FilterAbstract;

/**
 * Provides tags for text and font styling.
 *
 * @package	mjohnson.decoda.filters
 */
class TextFilter extends FilterAbstract {

	/**
	 * Supported tags.
	 *
	 * @access protected
	 * @var array
	 */
	protected $_tags = array(
		'font' => array(
			'htmlTag' => 'span',
			'displayType' => self::TYPE_INLINE,
			'allowedTypes' => self::TYPE_INLINE,
			'attributes' => array(
				'default' => array('/(.*?)/', 'font-family: {default}')
			),
			'mapAttributes' => array(
				'default' => 'style'
			)
		),
		'size' => array(
			'htmlTag' => 'span',
			'displayType' => self::TYPE_INLINE,
			'allowedTypes' => self::TYPE_INLINE,
			'attributes' => array(
				'default' => array('/^[1-2]{1}[0-9]{1}$/', 'font-size: {default}px'),
			),
			'mapAttributes' => array(
				'default' => 'style'
			)
		),
		'color' => array(
			'htmlTag' => 'span',
			'displayType' => self::TYPE_INLINE,
			'allowedTypes' => self::TYPE_INLINE,
			'attributes' => array(
				'default' => array('/^(?:#[0-9a-f]{3,6}|[a-z]+)$/i', 'color: {default}'),
			),
			'mapAttributes' => array(
				'default' => 'style'
			)
		),
		'h1' => array(
			'htmlTag' => 'h1',
			'displayType' => self::TYPE_BLOCK,
			'allowedTypes' => self::TYPE_INLINE
		),
		'h2' => array(
			'htmlTag' => 'h2',
			'displayType' => self::TYPE_BLOCK,
			'allowedTypes' => self::TYPE_INLINE
		),
		'h3' => array(
			'htmlTag' => 'h3',
			'displayType' => self::TYPE_BLOCK,
			'allowedTypes' => self::TYPE_INLINE
		),
		'h4' => array(
			'htmlTag' => 'h4',
			'displayType' => self::TYPE_BLOCK,
			'allowedTypes' => self::TYPE_INLINE
		),
		'h5' => array(
			'htmlTag' => 'h5',
			'displayType' => self::TYPE_BLOCK,
			'allowedTypes' => self::TYPE_INLINE
		),
		'h6' => array(
			'htmlTag' => 'h6',
			'displayType' => self::TYPE_BLOCK,
			'allowedTypes' => self::TYPE_INLINE
		)
	);

}