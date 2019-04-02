<?php

namespace InnovioCore\Lib;

/**
 * interface PostTypeInterface
 * @package InnovioCore\Lib;
 */
interface PostTypeInterface {
	/**
	 * @return string
	 */
	public function getBase();
	
	/**
	 * Registers custom post type with WordPress
	 */
	public function register();
}