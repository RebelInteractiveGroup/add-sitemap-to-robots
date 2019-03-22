<?php
/*
Plugin Name: Add Sitemap to Robots
Plugin URI:
Description: Add typical XML sitemap to robots.txt
Version: 1.0
Author: Michael W. Delaney
Author URI:
License: MIT
*/

namespace MWD\Robots;

add_action('do_robots', function () {
    echo 'Sitemap: ' . get_home_url() . '/sitemap_index.xml';
});
