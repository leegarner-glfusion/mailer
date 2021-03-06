<?php
/**
 * Table definitions and other static config variables.
 *
 * @author      Lee Garner <lee@leegarner.com>
 * @author      Wayne Patterson <suprsidr@gmail.com>
 * @copyright   Copyright (c) 2010-2021 Lee Garner <lee@leegarner.com>
 * @copyright   Copyright (C) 2009 Wayne Patterson <suprsidr@gmail.com>
 * @package     mailer
 * @version     v0.1.0
 * @license     http://opensource.org/licenses/gpl-2.0.php
 *              GNU Public License v2 or later
 * @filesource
 */

/**
 * Global array of table names from glFusion
 * @global  array $_TABLES
 */
global $_TABLES;

/**
*   Global table name prefix
*   @global string $_DB_table_prefix
*/
global $_DB_table_prefix;

$_TABLES['mailer_campaigns'] = $_DB_table_prefix . 'mailer_campaigns';
$_TABLES['mailer_subscribers']   = $_DB_table_prefix . 'mailer_subscribers';
$_TABLES['mailer_queue'] = $_DB_table_prefix . 'mailer_queue';
$_TABLES['mailer_txn']  = $_DB_table_prefix . 'mailer_txn';
$_TABLES['mailer_provider_campaigns'] = $_DB_table_prefix . 'mailer_provider_campaigns';

Mailer\Config::set('pi_version', '0.1.0');
Mailer\Config::set('gl_version', '1.7.8');

