<?php
/* vim: set expandtab tabstop=4 shiftwidth=4 encoding=utf-8: */
// +----------------------------------------------------------------------+
// | Eventum - Issue Tracking System                                      |
// +----------------------------------------------------------------------+
// | Copyright 2011, Elan Ruusamäe <glen@delfi.ee>                        |
// | Copyright (c) 2011 - 2013 Eventum Team.                              |
// +----------------------------------------------------------------------+
// |                                                                      |
// | This program is free software; you can redistribute it and/or modify |
// | it under the terms of the GNU General Public License as published by |
// | the Free Software Foundation; either version 2 of the License, or    |
// | (at your option) any later version.                                  |
// |                                                                      |
// | This program is distributed in the hope that it will be useful,      |
// | but WITHOUT ANY WARRANTY; without even the implied warranty of       |
// | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the        |
// | GNU General Public License for more details.                         |
// |                                                                      |
// | You should have received a copy of the GNU General Public License    |
// | along with this program; if not, write to:                           |
// |                                                                      |
// | Free Software Foundation, Inc.                                       |
// | 59 Temple Place - Suite 330                                          |
// | Boston, MA 02111-1307, USA.                                          |
// +----------------------------------------------------------------------+

/*
 * Setup autoload for tests.
 */

// we init paths ourselves like init.php does, to be independant and not
// needing actual config being present.
define('APP_PATH', realpath(dirname(__FILE__).'/..'));
define('APP_CONFIG_PATH', APP_PATH . '/config');
define('APP_SETUP_FILE', APP_CONFIG_PATH . '/setup.php');
define('APP_INC_PATH', APP_PATH . '/lib/eventum');
define('APP_PEAR_PATH', APP_PATH . '/lib/pear');
define('APP_SYSTEM_USER_ID', 1);
define('APP_CHARSET', 'utf-8');
define('APP_DEFAULT_LOCALE', 'en_US');
define('APP_HOSTNAME', 'eventum.example.org');

if (file_exists($autoload = APP_PATH . '/vendor/autoload.php')) {
    // composer paths
    require_once $autoload;
    define('APP_SMARTY_PATH', APP_PATH . '/vendor/smarty/smarty/distribution/libs');
    define('APP_SPHINXAPI_PATH', APP_PATH . '/vendor/sphinx/php-sphinxapi');
} else {
    require_once APP_INC_PATH . '/autoload.php';
}

require_once APP_INC_PATH . '/gettext.php';

// this setups ev_gettext wrappers
Language::setup();
