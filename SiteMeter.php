<?php
/**
 * Site Meter for MediaWiki
 *
 * @file
 * @ingroup Extensions
 * @author Lewis Cawte (http://mediawiki.org/wiki/User:Lcawte) <lewis@lewiscawte.co.cc>
 * @license http://www.gnu.org/copyleft/gpl.html GNU General Public License 2.0 or later
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
 */

if ( !defined( 'MEDIAWIKI' ) ) {
	die( 1 );
}

$wgExtensionCredits['parserhook'][] = array(
	'path' => __FILE__,
	'name' => 'Site Meter',
	'version' => '1.1',
	'author' => 'Lewis Cawte',
	'descriptionmsg' => 'sitemeter-desc',
	'url' => 'https://www.mediawiki.org/wiki/Extension:Site_Meter',
);

$wgSiteMeterServer = 'sm8';
$wgSiteMeterCodename = 'sm4mw';

# Internationalization files
$wgMessagesDirs['SiteMeter'] = __DIR__ . '/i18n';

$wgHooks['SkinBuildSidebar'][] = "wfSiteMeterMW";

function wfSiteMeterMW( $skin, &$bar ) {
	global $wgSiteMeterServer, $wgSiteMeterCodename;

	$siteMeterCodename = $wgSiteMeterServer . $wgSiteMeterCodename;
	$siteMeterCode = '<!-- Site Meter -->' .
'<script type="text/javascript" src="http://' . $wgSiteMeterServer . '.sitemeter.com/js/counter.js?site=' . $siteMeterCodename . '">' .
'</script>' .
'<noscript>' .
'<a href="http://' . $wgSiteMeterServer . '.sitemeter.com/stats.asp?site=' . $siteMeterCodename . '" target="_top">' .
'<img src="http://' . $wgSiteMeterServer . '.sitemeter.com/meter.asp?site=' . $siteMeterCodename . '" alt="Site Meter" border="0"/></a>' .
'</noscript>' .
'<!-- Copyright (c)2009 Site Meter -->';

	$bar['sitemeter'] = $siteMeterCode;
	return true;
}
