<?php
/**
 * Copyright (c) 2012 Steffen Lindner <gomez@flexiabel.de>
 * This file is licensed under the Affero General Public License version 3 or
 * later.
 * See the COPYING-README file.
 */

//Logged in 
OCP\JSON::checkLoggedIn();
OCP\JSON::checkAppEnabled('quotabar');

OCP\Util::addscript('quotabar', 'quotabar');

$quotabar_enabled = OCP\Config::getUserValue(OCP\USER::getUser(), "quotabar", "quotabar_enabled");

$tmpl = new OCP\Template( 'quotabar', 'settings');
$tmpl->assign('quotabar_enabled',$quotabar_enabled);

return $tmpl->fetchPage();
