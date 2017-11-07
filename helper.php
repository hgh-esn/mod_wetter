<?php

/**
* @version		$Id: helper.php v1.5.0b 2008-04-22 dirkf $
* @package		Wetter module
* @copyright	Copyright (C) 2005 - 2008 Open Source Matters. All rights reserved.
* @license		GNU/GPL
* Based on:
* Mos 4.5.1 Weather Module
* by Gerald Berger Http://www.vb-dozent.net
* Gerald@vb-dozent.net
*
* Joomla! is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See COPYRIGHT.php for copyright notices and details.
*/

// no direct access
defined('_JEXEC') or die;

class modWetterHelper
{
/*HGH*/ //			function getPLZ(&$params)   170306 Server-protokol-Fehler beseitigt
	public static 	function getPLZ(&$params)
	{
	//	global $mainframe;

		if ($params->get('PLZ'))
		{
			$PLZ = $params->get('PLZ', '63739');

			return $PLZ;
		}
	}

/*HGH*/ //			function getDesign(&$params)   170306 Server-protokol-Fehler beseitigt
	public static 	function getDesign(&$params)
	{

	//	global $mainframe;

		$Design = $params->get('Design', 1);
		$Design = $Design > 5 ? 5 : $Design;

		return $Design;		

	}

/*HGH*/ //			function getTomorrow(&$params)   170306 Server-protokol-Fehler beseitigt
	public static 	function getTomorrow(&$params)
	{

	//	global $mainframe;

		$Tomorrow = $params->get('Tomorrow', 0);

		return $Tomorrow;		

	}

/*HGH*/ //			function getLocaltype(&$params)   170306 Server-protokol-Fehler beseitigt
	public static 	function getLocaltype(&$params)
	{
	//	global $mainframe;
		
		$Localtype = $params->get('Localtype', 'DEPLZ');

		return $Localtype;		
	}

}