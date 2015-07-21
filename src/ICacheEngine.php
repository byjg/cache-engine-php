<?php
/*
*=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
*  Copyright:
*
*  XMLNuke: A XML site content management.
*
*  Main Specification: Joao Gilberto Magalhaes, joao at byjg dot com
*
*  This file is part of XMLNuke project. Visit http://www.xmlnuke.com
*  for more information.
*
*  This program is free software; you can redistribute it and/or
*  modify it under the terms of the GNU General Public License
*  as published by the Free Software Foundation; either version 2
*  of the License, or (at your option) any later version.
*
*  This program is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  You should have received a copy of the GNU General Public License
*  along with this program; if not, write to the Free Software
*  Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
*
*=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
*/

namespace ByJG\Cache;


interface ICacheEngine
{

	/**
	 * @param string $key The object KEY
	 * @param int $ttl The time to live in seconds of the object. Depends on implementation.
	 * @return object The Object
	 */
	function get($key, $ttl = 0);

	/**
	 * @param string $key The object Key
	 * @param object $object The object to be cached
	 * @param int $ttl The time to live in seconds of the object. Depends on implementation.
	 * @return bool If the object is successfully posted
	 */
	function set($key, $object, $ttl = 0);

	/**
	 * Append only will work with strings.
	 *
	 * @param string $key
	 * @param string $str
	 * @return bool
	 */
	function append($key, $str);

	/**
	 * Lock resource before set it.
	 * @param string $key
	 */
	function lock($key);

	/**
	 * Unlock resource
	 * @param string $key
	 */
	function unlock($key);

	/**
	 * Release the object
	 * @param string $key
	 */
	function release($key);
}
