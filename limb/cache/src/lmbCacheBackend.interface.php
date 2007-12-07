<?php
/*
 * Limb PHP Framework
 *
 * @link http://limb-project.com 
 * @copyright  Copyright &copy; 2004-2007 BIT(http://bit-creative.com)
 * @license    LGPL http://www.gnu.org/copyleft/lesser.html 
 */

/**
 * interface lmbCacheBackend.
 *
 * @package cache
 * @version $Id$
 */
interface lmbCacheBackend
{
  function set ($key, $value, $params = array());
  function get ($key, $params = array());
  function delete($key, $params = array());
  function flush();
}