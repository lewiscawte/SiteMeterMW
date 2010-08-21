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

if( !defined( 'MEDIAWIKI' ) ) {
	die( 1 );
}

$wgExtensionCredits['parserhook'][] = array (
	'path' => __FILE__,
	'name' => 'Site Meter for MediaWiki',
	'url' => 'http://mediawiki.org/wiki/Extension:SiteMeter4MW',
	'version' => '1.0',
	'author' => "[http://mediawiki.org/wiki/User:Lcawte Lewis Cawte]",
	'descriptionmsg' => 'sitemetermw-desc',
);
// Internationalization file
$dir = dirname( __FILE__ ) . '/';
$wgExtensionMessagesFiles['SiteMeterMW'] = $dir . 'SiteMeterMW.i18n.php';

$wgHooks['SiteMeterMW'][] = 'wfSiteMeterMW';

function wfSiteMeterMW( $skin, &$bar ) {
	global $wgSiteMeterMW;
	$bar['sitemeter'] = $wgSiteMeterMW;
	return true;
}

# Site Meter code
#$wgSiteMeterMW = '/code.php';

