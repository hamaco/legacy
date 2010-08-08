<?php
/**
 * @file
 * @package lecat
 * @version $Id$
**/

if(!defined('XOOPS_ROOT_PATH'))
{
	exit;
}

/**
 * Lecat_Utils
**/
class Lecat_Utils
{
	/**
	 * &getXoopsHandler
	 * 
	 * @param	string	$name
	 * @param	bool  $optional
	 * 
	 * @return	XoopsObjectHandler
	**/
	public static function &getXoopsHandler(/*** string ***/ $name,/*** bool ***/ $optional = false)
	{
		// TODO will be emulated xoops_gethandler
		return xoops_gethandler($name,$optional);
	}

	/**
	 * getEnv
	 * 
	 * @param	string	$key
	 * 
	 * @return	string
	**/
	public static function getEnv(/*** string ***/ $key)
	{
		return getenv($key);
	}

	/**
	 * getActorList
	 * 
	 * @param	string	$dirname
	 * 
	 * @return	string[]
	**/
	public static function getActorList(/*** string ***/ $dirname)
	{
		$handler = xoops_gethandler('config');
		$conf = $handler->getConfigsByDirname($dirname);
	
		$actors = $conf['actors'];
		return isset($actors) ? unserialize($actors) : array('key'=>array('viewer','poster','manager'),'title'=>array('Viewer', 'Poster', 'Manager'),'default'=>array(1,1,0));
	}
}

?>
