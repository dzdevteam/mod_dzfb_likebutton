<?php
/**
 * @version     1.0.0
 * @package     mod_dzfb_likebutton
 * @copyright   Copyright (C) 2013. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      DZ Team <support@dezign.vn> - dezign.vn
 */
 
// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

// Include the syndicate functions only once
require_once __DIR__ . '/helper.php';

$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));
$data_attribs = modDZFacebookLikeButtonHelper::getDataAttribs($params);

// Display template
require JModuleHelper::getLayoutPath('mod_dzfb_likebutton', $params->get('layout', 'default'));
