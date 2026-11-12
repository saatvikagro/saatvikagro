<?php

// Disable WordPress Emojis
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

// Disable WordPress Embeds and unused link tags
remove_action('wp_head', 'wp_oembed_add_discovery_links');
remove_action('wp_head', 'wp_oembed_add_host_js');
remove_action('wp_head', 'rest_output_link_wp_head');
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'wp_shortlink_wp_head', 10);
remove_action('wp_head', 'rel_shortlink');

// Disable Dashicons on Front-End
function remove_dashicons_styles()
{
    wp_deregister_style('dashicons');
}
add_action('wp_print_styles', 'remove_dashicons_styles', 100);

// Theme Support for Thumbnails across all post types
add_theme_support('post-thumbnails', array('post', 'page', 'product', 'article'));

// Remove Wordpress Styles
add_action(
    'wp_enqueue_scripts',
    function () {
        wp_dequeue_style('classic-theme-styles');
        wp_dequeue_style('global-styles');
        wp_dequeue_style('wp-block-library');
    },
    20
);

// Remove RSD link
remove_action('wp_head', 'rsd_link');

// Remove wordpress generator, robot meta tag
remove_action('wp_head', 'wp_generator');
remove_filter('wp_robots', 'wp_robots_max_image_preview_large');

// Block endpoints for public users only on wp-json requests
function allow_specific_rest_api_endpoints($endpoints)
{
    if (strpos($_SERVER['REQUEST_URI'], '/wp-json/') !== false) {
        $allowed_endpoints = [
            '/wp/v2/posts',
            '/wp/v2/pages',
            '/wp/v2/media',
            '/wp/v2/product',
            '/wp/v2/product_cat',
            '/wp/v2/article',
            '/wp/v2/article_cat',
            '/simple-history/v1'
        ];

        foreach ($endpoints as $route => $handlers) {
            $route_match = false;
            foreach ($allowed_endpoints as $allowed) {
                if (strpos($route, $allowed) === 0) {
                    $route_match = true;
                    break;
                }
            }
            if (!$route_match) {
                unset($endpoints[$route]);
            }
        }
    }
    return $endpoints;
}
add_filter('rest_endpoints', 'allow_specific_rest_api_endpoints');

function add_cors_http_header()
{
    header("Access-Control-Allow-Origin: *");
}
add_action('init', 'add_cors_http_header');

// Auto-flush rewrite rules if products rule is missing
add_action('init', function () {
    $rules = get_option('rewrite_rules');
    if (empty($rules) || !isset($rules['products/?$'])) {
        flush_rewrite_rules(false);
    }
}, 99);

// Hide Admin Toolbar on Frontend
add_filter('show_admin_bar', '__return_false');
show_admin_bar(false);

// Serve robots.txt dynamically from Theme
add_action('do_robots', function () {
    header('Content-Type: text/plain; charset=utf-8');
    $robots_file = get_theme_file_path('robots.txt');
    if (file_exists($robots_file)) {
        readfile($robots_file);
    } else {
        echo "User-agent: *\nAllow: /\nDisallow: /wp-admin/\nAllow: /wp-admin/admin-ajax.php\n";
        echo "Sitemap: " . esc_url(home_url('/sitemap.xml')) . "\n";
    }
    exit;
}, 100);

// Serve sitemap.xml dynamically from Theme
add_action('template_redirect', function () {
    $req_path = trim(parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH), '/');
    if ($req_path === 'sitemap.xml') {
        $sitemap_file = get_theme_file_path('sitemap.xml');
        if (file_exists($sitemap_file)) {
            header('Content-Type: application/xml; charset=utf-8');
            readfile($sitemap_file);
            exit;
        }
    }
});

?>
