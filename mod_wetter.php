<?php
/**
* @version     $Id: mod_wetter.php v1.5.0.b 2008-04-22 dirkf $
* @package     Wetter Module
* @copyright   Copyright (C) 2005 - 2008 Open Source Matters. All rights reserved.
* @license     GNU/GPL
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

// Include the syndicate functions only once
//
// HGH J3
//
// require_once (dirname(__FILE__).DS.'/helper.php');

   require_once (dirname(__FILE__).'/'.'/helper.php');

       $PLZ = modWetterHelper::getPLZ($params);
    $Design = modWetterHelper::getDesign($params);
  $Tomorrow = modWetterHelper::getTomorrow($params);
 $Localtype = modWetterHelper::getLocaltype($params);

// $PLZ     = $this->params->PLZ;
// $Design     = modWetterHelper::getDesign($params);
// $Tomorrow  = modWetterHelper::getTomorrow($params);
// $Localtype = modWetterHelper::getLocaltype($params);

require(JModuleHelper::getLayoutPath('mod_wetter'));

