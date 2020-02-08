<?php

/*
 * @package   ANDYP - Regex Posts
 * @author    Andy Pearson <andy@londonparkour.com>
 * @copyright 2020 LondonParkour
 * 
 * @wordpress-plugin
 * Plugin Name:       _ANDYP - Regex Posts
 * Plugin URI:        http://londonparkour.com
 * Description:       Bulk Regex on post fields.
 * Version:           1.0.0
 * Author:            Andy Pearson
 * Author URI:        https://londonparkour.com
 * Domain Path:       /languages
 */

//  ┌─────────────────────────────────────────────────────────────────────────┐
//  │                              The ACF                                    │
//  └─────────────────────────────────────────────────────────────────────────┘
require __DIR__.'/src/admin/acf_admin_page.php';
require __DIR__.'/src/admin/acf_dashboard.php';

//  ┌─────────────────────────────────────────────────────────────────────────┐
//  │                              The Code                                   │
//  └─────────────────────────────────────────────────────────────────────────┘
require __DIR__.'/src/lib/regexer.php';

//  ┌─────────────────────────────────────────────────────────────────────────┐
//  │                               Actions                                   │
//  └─────────────────────────────────────────────────────────────────────────┘
require __DIR__.'/src/action_save_post.php';