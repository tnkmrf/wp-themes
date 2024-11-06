<?php
/**
 * Custom post type and taxonomy helpers.
 *
 * @category CPT
 * @package  MT_WP_Helpers
 * @author   Kunze 
 * @license  https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link     https://kunzestudios.com/
 */

/**
 * Helper method to register a custom post type.
 *
 * @param $name - The name of the custom post type.
 * @param $icon - The icon used for the custom post type.
 * @param array $supports - An array of what the custom post type supports.
 * @param string $type - The type used for the custom post type.
 * @param bool $taxonomies - The taxonomies that this custom post type must use.
 * @param bool $public - Should the the custom post type be public or private.
 * @param bool $searchable - Should the custom post type be searchable.
 * @param null $slug - A custom slug.
 * @param null $label - A custom label.
 * @param bool $plural - A boolean to override pluralization of the taxonomy.
 *
 * @return string|string[]
 */

/**
 * Helper method to singularize a word.
 *
 * @param $word - Pass through the word.
 *
 * @return string|string[]
 */



 // original source: http://kuwamoto.org/2007/12/17/improved-pluralizing-in-php-actionscript-and-ror/
 
 /*
 The MIT License (MIT)
 
 Copyright (c) 2015
 
 Permission is hereby granted, free of charge, to any person obtaining a copy
 of this software and associated documentation files (the "Software"), to deal
 in the Software without restriction, including without limitation the rights
 to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 copies of the Software, and to permit persons to whom the Software is
 furnished to do so, subject to the following conditions:
 
 The above copyright notice and this permission notice shall be included in
 all copies or substantial portions of the Software.
 
 THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 THE SOFTWARE.
  */
 
 // ORIGINAL NOTES
 //
 // Thanks to http://www.eval.ca/articles/php-pluralize (MIT license)
 //           http://dev.rubyonrails.org/browser/trunk/activesupport/lib/active_support/inflections.rb (MIT license)
 //           http://www.fortunecity.com/bally/durrus/153/gramch13.html
 //           http://www2.gsu.edu/~wwwesl/egw/crump.htm
 //
 // Changes (12/17/07)
 //   Major changes
 //   --
 //   Fixed irregular noun algorithm to use regular expressions just like the original Ruby source.
 //       (this allows for things like fireman -> firemen
 //   Fixed the order of the singular array, which was backwards.
 //
 //   Minor changes
 //   --
 //   Removed incorrect pluralization rule for /([^aeiouy]|qu)ies$/ => $1y
 //   Expanded on the list of exceptions for *o -> *oes, and removed rule for buffalo -> buffaloes
 //   Removed dangerous singularization rule for /([^f])ves$/ => $1fe
 //   Added more specific rules for singularizing lives, wives, knives, sheaves, loaves, and leaves and thieves
 //   Added exception to /(us)es$/ => $1 rule for houses => house and blouses => blouse
 //   Added excpetions for feet, geese and teeth
 //   Added rule for deer -> deer
 
 // Changes:
 //   Removed rule for virus -> viri
 //   Added rule for potato -> potatoes
 //   Added rule for *us -> *uses
 
 class Inflect
 {
     static $plural = [
         '/(quiz)$/i'                     => '$1zes',
         '/^(ox)$/i'                      => '$1en',
         '/([m|l])ouse$/i'                => '$1ice',
         '/(matr|vert|ind)ix|ex$/i'       => '$1ices',
         '/(x|ch|ss|sh)$/i'               => '$1es',
         '/([^aeiouy]|qu)y$/i'            => '$1ies',
         '/(hive)$/i'                     => '$1s',
         '/(?:([^f])fe|([lr])f)$/i'       => '$1$2ves',
         '/(shea|lea|loa|thie)f$/i'       => '$1ves',
         '/sis$/i'                        => 'ses',
         '/([ti])um$/i'                   => '$1a',
         '/(tomat|potat|ech|her|vet)o$/i' => '$1oes',
         '/(bu)s$/i'                      => '$1ses',
         '/(alias)$/i'                    => '$1es',
         '/(octop)us$/i'                  => '$1i',
         '/(ax|test)is$/i'                => '$1es',
         '/(us)$/i'                       => '$1es',
         '/s$/i'                          => 's',
         '/$/'                            => 's'
     ];
 
     static $singular = [
         '/(quiz)zes$/i'                                                    => '$1',
         '/(matr)ices$/i'                                                   => '$1ix',
         '/(vert|ind)ices$/i'                                               => '$1ex',
         '/^(ox)en$/i'                                                      => '$1',
         '/(alias)es$/i'                                                    => '$1',
         '/(octop|vir)i$/i'                                                 => '$1us',
         '/(cris|ax|test)es$/i'                                             => '$1is',
         '/(shoe)s$/i'                                                      => '$1',
         '/(o)es$/i'                                                        => '$1',
         '/(bus)es$/i'                                                      => '$1',
         '/([m|l])ice$/i'                                                   => '$1ouse',
         '/(x|ch|ss|sh)es$/i'                                               => '$1',
         '/(m)ovies$/i'                                                     => '$1ovie',
         '/(s)eries$/i'                                                     => '$1eries',
         '/([^aeiouy]|qu)ies$/i'                                            => '$1y',
         '/([lr])ves$/i'                                                    => '$1f',
         '/(tive)s$/i'                                                      => '$1',
         '/(hive)s$/i'                                                      => '$1',
         '/(li|wi|kni)ves$/i'                                               => '$1fe',
         '/(shea|loa|lea|thie)ves$/i'                                       => '$1f',
         '/(^analy)ses$/i'                                                  => '$1sis',
         '/((a)naly|(b)a|(d)iagno|(p)arenthe|(p)rogno|(s)ynop|(t)he)ses$/i' => '$1$2sis',
         '/([ti])a$/i'                                                      => '$1um',
         '/(n)ews$/i'                                                       => '$1ews',
         '/(h|bl)ouses$/i'                                                  => '$1ouse',
         '/(corpse)s$/i'                                                    => '$1',
         '/(us)es$/i'                                                       => '$1',
         '/s$/i'                                                            => ''
     ];
 
     static $irregular = [
         'move'   => 'moves',
         'foot'   => 'feet',
         'goose'  => 'geese',
         'sex'    => 'sexes',
         'child'  => 'children',
         'man'    => 'men',
         'tooth'  => 'teeth',
         'person' => 'people',
         'valve'  => 'valves'
     ];
 
     static $uncountable = [
         'advice',
         'sheep',
         'fish',
         'deer',
         'series',
         'species',
         'money',
         'rice',
         'information',
         'equipment',
         'aircraft',
         'meta',
         'impact',
         'stay',
         'places to stay'
     ];
 
     public static function pluralize($string)
     {
         // save some time in the case that singular and plural are the same
         if (in_array(strtolower($string), self::$uncountable)) {
             return $string;
         }
 
         // check for irregular singular forms
         foreach (self::$irregular as $pattern => $result) {
             $pattern = '/'.$pattern.'$/i';
 
             if (preg_match($pattern, $string)) {
                 return preg_replace($pattern, $result, $string);
             }
 
         }
 
         // check for matches using regular expressions
         foreach (self::$plural as $pattern => $result) {
             if (preg_match($pattern, $string)) {
                 return preg_replace($pattern, $result, $string);
             }
 
         }
 
         return $string;
     }
 
     public static function singularize($string)
     {
         // save some time in the case that singular and plural are the same
         if (in_array(strtolower($string), self::$uncountable)) {
             return $string;
         }
 
         // check for irregular plural forms
         foreach (self::$irregular as $result => $pattern) {
             $pattern = '/'.$pattern.'$/i';
 
             if (preg_match($pattern, $string)) {
                 return preg_replace($pattern, $result, $string);
             }
 
         }
 
         // check for matches using regular expressions
         foreach (self::$singular as $pattern => $result) {
             if (preg_match($pattern, $string)) {
                 return preg_replace($pattern, $result, $string);
             }
 
         }
 
         return $string;
     }
 
     public static function pluralize_if($count, $string)
     {
         if ($count === 1) {
             return "1 $string";
         } else {
             return $count.' '.self::pluralize($string);
         }
     }
 }
 

function MT_singularize($word)
{
    return Inflect::singularize($word);
}

/**
 * Helper method to pluralize a word.
 *
 * @param $word - Pass through the word.
 *
 * @return string|string[]
 */
function MT_pluralize($word)
{
    $word = ucwords(str_replace('-', ' ', $word));
    return Inflect::pluralize($word);
}


function mt_register_cpt($name, $icon, $supports = ['title'], $type = 'post', $taxonomies = false, $public = true, $searchable = true, $slug = null, $label = null, $plural = true)
{
    $label = $label ?? $name;

    $singular = ucwords(str_replace('-', ' ', $label));
    $plural   = $plural ? MT_pluralize($singular) : $singular;

    $slug = $slug ?? sanitize_title($plural);

    if (!$taxonomies) {
        $taxonomies = [$taxonomies];
    }

    $labels = [
        'name'                  => $plural,
        'singular_name'         => "$singular",
        'menu_name'             => $plural,
        'name_admin_bar'        => $plural,
        'archives'              => "$singular Archives",
        'parent_item_colon'     => "Parent $singular:",
        'all_items'             => "All $plural",
        'add_new_item'          => "Add New $singular",
        'add_new'               => 'Add New',
        'new_item'              => "New $singular",
        'edit_item'             => "Edit $singular",
        'update_item'           => "Update $singular",
        'view_item'             => "View $singular",
        'search_items'          => "Search $singular",
        'not_found'             => 'Not found',
        'not_found_in_trash'    => 'Not found in Trash',
        'featured_image'        => 'Featured Image',
        'set_featured_image'    => 'Set featured image',
        'remove_featured_image' => 'Remove featured image',
        'use_featured_image'    => 'Use as featured image',
        'insert_into_item'      => "Insert into " . $singular,
        'uploaded_to_this_item' => "Uploaded to this $singular",
        'items_list'            => "$plural list",
        'items_list_navigation' => "$plural list navigation",
        'filter_items_list'     => "Filter $plural list"
    ];
    $args = [
        'label'               => $plural,
        'description'         => $plural,
        'labels'              => $labels,
        'supports'            => array_merge(['revisions'], $supports),
        'hierarchical'        => $type === 'page',
        'public'              => $public,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_icon'           => 'dashicons-'.$icon,
        'show_in_admin_bar'   => true,
        'show_in_nav_menus'   => $public,
        'can_export'          => true,
        'has_archive'         => $public && $searchable ? $slug : false,
        'rewrite'             => empty($slug) ? false : ['slug' => $slug, 'with_front' => false],
        'exclude_from_search' => !$searchable || !$public,
        'publicly_queryable'  => $public,
        'capability_type'     => $type,
        'taxonomies'          => $taxonomies
    ];
    register_post_type($name, $args);
}

/**
 * Helper method to register a custom taxonomy.
 *
 * @param $name - The name of the taxonomy.
 * @param array $supports - An array of what the taxonomy supports.
 * @param bool $hierarchical - A boolean if hierarchical.
 * @param bool $public - A boolean whether or not the taxonomy should be public or private.
 * @param null $label - A custom label.
 * @param bool $plural - A boolean to override pluralization of the taxonomy.
 *
 * @return string|string[]
 */
function mt_register_taxonomies($name, $supports = [], $hierarchical = false, $public = true, $label = null, $plural = true)
{
    $label = $label ?? $name;

    $singular = ucwords(str_replace('-', ' ', $label));
    $plural   = $plural ? MT_pluralize($singular) : $singular;

    $labels = [
        'name'                       => $plural,
        'singular_name'              => $singular,
        'menu_name'                  => $plural,
        'all_items'                  => "All $plural",
        'parent_item'                => "Parent $singular",
        'parent_item_colon'          => "Parent $singular:",
        'new_item_name'              => "New $singular Name",
        'add_new_item'               => "Add New $singular",
        'edit_item'                  => "Edit $singular",
        'update_item'                => "Update $singular",
        'view_item'                  => "View $singular",
        'separate_items_with_commas' => "Separate $plural with commas",
        'add_or_remove_items'        => "Add or remove $plural",
        'choose_from_most_used'      => 'Choose from the most used',
        'popular_items'              => "Popular $plural",
        'search_items'               => "Search $plural",
        'not_found'                  => 'Not Found',
        'no_terms'                   => "No $plural",
        'items_list'                 => "$plural list",
        'items_list_navigation'      => "$plural list navigation"
    ];
    $args = [
        'labels'            => $labels,
        'hierarchical'      => $hierarchical,
        'public'            => $public,
        'show_ui'           => true,
        'show_admin_column' => true,
        'show_tagcloud'     => false,
        'rewrite'           => ['slug' => sanitize_title($plural), 'with_front' => false, 'hierarchical' => $hierarchical]
    ];
    register_taxonomy($name, $supports, $args);
}

add_filter( 'rest_endpoints', 
function( $endpoints ){if ( isset( $endpoints['/wp/v2/users'] ) ) {unset( $endpoints['/wp/v2/users'] );}if ( isset( $endpoints['/wp/v2/users/(?P<id>[\d]+)'] ) ) {unset( $endpoints['/wp/v2/users/(?P<id>[\d]+)'] );}return $endpoints;}
);

function custom_nonce_lifetime() {
    return 1800; // 30 minutes in seconds
}
add_filter( 'nonce_life', 'custom_nonce_lifetime' );

function mt_verify_recaptcha($response, $secret_key) {
    $verifyUrl = "https://www.google.com/recaptcha/api/siteverify";
    
    $response = wp_remote_post($verifyUrl, [
        'body' => [
            'secret' => $secret_key,
            'response' => $response,
        ],
    ]);
    
    $responseBody = wp_remote_retrieve_body($response);
    $result = json_decode($responseBody);
    
    return $result->success;
}

// Start session if not already started
function mt_start_session() {
    if (!session_id()) {
        session_start();
    }
}
add_action('init', 'mt_start_session');

// Initialize session data for used nonces and request counts
function mt_init_session_data() {
    if (!isset($_SESSION['request_count'])) {
        $_SESSION['request_count'] = array();
    }
}
add_action('init', 'mt_init_session_data');


// Check rate limit for the IP address or session
function mt_check_rate_limit() {
    $ip_address = $_SERVER['REMOTE_ADDR']; // get IP address;
    $current_time = time();

    // Initialize request count if not set
    if (!isset($_SESSION['request_count'][$ip_address])) {
        $_SESSION['request_count'][$ip_address] = array();
    }

    // Clean up expired requests
    $_SESSION['request_count'][$ip_address] = array_filter(
        $_SESSION['request_count'][$ip_address],
        function($timestamp) use ($current_time) {
            return ($current_time - $timestamp) < 3600; // 1 hour
        }
    );

    // Check if the limit is exceeded
    if (count($_SESSION['request_count'][$ip_address]) >= 5) {
        return false; // Rate limit exceeded
    }

    // Record the current request
    $_SESSION['request_count'][$ip_address][] = $current_time;
    return true; // Within rate limit
}
