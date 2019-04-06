<?php return array (
  'manifest-version' => '1.1',
  'manifest-attributes' => 
  array (
    'license' => 'Copyright (C) 2010-2014  Salvatore Sodano (http://salscode.com/)

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.',
    'readme' => '	MetaX (Meta Tags Extended) for Revolution
	Version: 2.0.2
	Author: Salvatore Sodano - http://salscode.com
	Other Contributors:
		Mike Stop Continues - http://mikestopcontinues.com
		Jakob Class - http://www.class-zec.de <jakob.class@class-zec.de>
		Stefan Rochlitzer - icebear-solutions.com <Stefan.Rochlitzer@icebear-solutions.com>
	Support Page: http://rtfm.modx.com/display/ADDON/MetaX

	Description: Automatically generates Meta tags for your pages, along with a base and a couple link tags.
	For a full description visit http://rtfm.modx.com/extras/revo/metax.

	MODx Versions:
	Evolution - This is the Revo version, visit http://modx.com/extras/package/metax-evo for Evo.
	Revolution - All versions, tested up to 2.3.',
    'changelog' => '	Version History:
	1.0 - Private beta.
	1.1 - First Public release.
	1.2 - Thank you "Mike Stop Continues" for cleaning up some of the code. He made all of the
	variables below work as inline parameters (they can still be set below if you wish)
	and added mobile icon support. Also I\'ve added RSS tag support and support for
	different HTML and xHTML syntaxes.
	1.3 - Dublin Core support via &dublin parameter.
	Also added &tabs parameter to control the number of tabs in front of each element.
	Added the &ietool and &css parameters. As always, fully backward compatible.
	1.3.1 - Fixes issues with getTvOutput function. Adds &spaces parameter which controls the
	number of spaces in front of each tag.
	1.4 - Canonical URL now supports Archivist URLs (Enabled in Revo only), thank you Jakob Class
	for working on this feature. Fixed possible issue with a function declaration.
	1.5 - Implemented StripTags function for all document fields (just in case you put some html in a
	description field). Also removed all deprecated functions in preparation for Revo 2.1.
	1.6 - Add HTML5 compat.
	2.0 - Large rewrite. Employs TPL chunks to allow maximum flexibility.
	2.0.1 - Small error fix about getOne use.
	2.0.2 - Small fixes for Revo 2.3.',
  ),
  'manifest-vehicles' => 
  array (
    0 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modNamespace',
      'guid' => '6b0c4696a4639e9846436a41ce453f40',
      'native_key' => 'metax',
      'filename' => 'modNamespace/5881c76b990d3036d32babe9f677a689.vehicle',
      'namespace' => 'metax',
    ),
    1 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modCategory',
      'guid' => '9438fb1bf0b8f2e0a9a89960e02730d3',
      'native_key' => 1,
      'filename' => 'modCategory/80e259d75e77fc3d3d9d20445cb3f39e.vehicle',
      'namespace' => 'metax',
    ),
  ),
);