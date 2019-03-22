<?php

namespace MWD\Robots;

add_action('do_robots', function () {
    echo 'Sitemap: ' . get_home_url() . '/sitemap_index.xml';
});
