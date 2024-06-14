<?php
/**
 * Generated stub declarations for WPForms.
 * @see https://wpforms.com
 * @see https://github.com/mralaminahamed/phpstan-wpforms-stubs
 */

/**
 * Functionality related to the admin TinyMCE editor.
 *
 * @package    WPForms
 * @author     WPForms
 * @since      1.0.0
 * @license    GPL-2.0+
 * @copyright  Copyright (c) 2016, WPForms LLC
*/
class WPForms_Admin_Editor
{
    /**
     * Primary class constructor.
     *
     * @since 1.0.0
     */
    public function __construct()
    {
    }
    /**
     * Allow easy shortcode insertion via a custom media button.
     * 
     * @since 1.0.0
     * @param string $editor_id
     * @return
     */
    function media_button($editor_id)
    {
    }
    /**
     * Modal window for inserting the form shortcode into TinyMCE.
     *
     * Thickbox is old and busted so we don't use that. Creating a custom view in
     * Backbone would make me pull my hair out. So instead we offer a small clean
     * modal that is based off of the WordPress insert link modal.
     *
     * @since 1.0.0
     */
    function shortcode_modal()
    {
    }
}
/**
 * Register menu elements and do other global tasks.
 *
 * @package    WPForms
 * @author     WPForms
 * @since      1.0.0
 * @license    GPL-2.0+
 * @copyright  Copyright (c) 2016, WPForms LLC
*/
class WPForms_Admin_Menu
{
    /**
     * Primary class constructor.
     *
     * @since 1.0.0
     */
    public function __construct()
    {
    }
    /**
     * Register our menus.
     *
     * @since 1.0.0
     */
    function register_menus()
    {
    }
    public function admin_page()
    {
    }
    /**
     * Load CSS for custom menu icon.
     *
     * @since 1.0.0
     */
    public function menu_icon()
    {
    }
}
/**
 * Welcome page class.
 *
 * This page is shown when the plugin is activated.
 *
 * @package    WPForms
 * @author     WPForms
 * @since      1.0.0
 * @license    GPL-2.0+
 * @copyright  Copyright (c) 2016, WPForms LLC
*/
class WPForms_Welcome
{
    /**
     * Primary class constructor.
     *
     * @since 1.0.0
     */
    public function __construct()
    {
    }
    /**
     * Register the pages to be used for the Welcome screen (and tabs).
     *
     * These pages will be removed from the Dashboard menu, so they will
     * not actually show. Sneaky, sneaky.
     *
     * @since 1.0.0
     */
    public function register_pages()
    {
    }
    /**
     * Removed the dashboard pages from the admin menu.
     *
     * This means the pages are still available to us, but hidden.
     *
     * @since 1.0.0
     */
    public function hide_menu_items()
    {
    }
    /**
     * Welcome screen header area.
     *
     * Consists of the plugin title, desciption, badge, and navigation tabs.
     *
     * @since 1.0.0
     */
    public function welcome_head()
    {
    }
    /**
     * Getting Started screen. Shows after first install.
     *
     * @since 1.0.0
     */
    public function welcome_getting_started()
    {
    }
    /**
     * What's New screen. Shows after updates.
     *
     * @since 1.0.0
     */
    public function welcome_whats_new()
    {
    }
    /**
     * Welcome screen redirect.
     *
     * This function checks if a new install or update has just occured. If so,
     * then we redirect the user to the appropriate page.
     *
     * @since 1.0.0
     */
    public function welcome_redirect()
    {
    }
    /**
     * Load our required assets on the Welcome page(s).
     *
     * @since 1.0.0
     */
    public function welcome_enqueues()
    {
    }
}
/**
 * Generates the table on the plugin overview page.
 *
 * @package    WPForms
 * @author     WPForms
 * @since      1.0.0
 * @license    GPL-2.0+
 * @copyright  Copyright (c) 2016, WPForms LLC
*/
class WPForms_Overview_Table extends \WP_List_Table
{
    /**
     * Numbe of forms to show per page.
     *
     * @since 1.0.0
     */
    public $per_page;
    /**
     * Primary class constructor.
     *
     * @since 1.0.0
     */
    public function __construct()
    {
    }
    /**
     * Retrieve the table columns
     *
     * @since 1.0.0
     * @return array $columns Array of all the list table columns
     */
    public function get_columns()
    {
    }
    /**
     * Render the checkbox column.
     *
     * @since 1.0.0
     * @param array
     * @return string
     */
    public function column_cb($form)
    {
    }
    /**
     * Renders the columns.
     *
     * @since 1.0.0
     * @param array $form
     * @param string $column_name
     * @return string
     */
    public function column_default($form, $column_name)
    {
    }
    /**
     * Render the form name column with action links.
     *
     * @since 1.0.0
     * @param array $optin
     * @return string
     */
    public function column_form_name($form)
    {
    }
    /**
     * Define bulk actions available for our table listing
     *
     * @since 1.0.0
     * @return array
     */
    public function get_bulk_actions()
    {
    }
    /**
     * Process the bulk actions
     *
     * @since 1.0.0
     */
    public function process_bulk_actions()
    {
    }
    /**
     * Message to be displayed when there are no forms
     *
     * @since 1.0.0
     */
    public function no_items()
    {
    }
    /**
     * Fetch and setup the final data for the table
     *
     * @since 1.0.0
     */
    public function prepare_items()
    {
    }
}
/**
 * Primary overview page inside the admin which lists all forms.
 *
 * @package    WPForms
 * @author     WPForms
 * @since      1.0.0
 * @license    GPL-2.0+
 * @copyright  Copyright (c) 2016, WPForms LLC
*/
class WPForms_Overview
{
    /**
     * Primary class constructor.
     *
     * @since 1.0.0
     */
    public function __construct()
    {
    }
    /**
     * Determing if the user is viewing the overview page, if so, party on.
     *
     * @since 1.0.0
     */
    public function init()
    {
    }
    /**
     * Add per-page screen option to the Forms table.
     *
     * @since 1.0.0
     */
    function screen_options()
    {
    }
    /**
     * Forms table per-page screen option value
     *
     * @since 1.0.0
     * @param mixed $status
     * @param string $option
     * @param mixed $value
     * @return mixed
     */
    function screen_options_set($status, $option, $value)
    {
    }
    /**
     * Enqueue assets for the overview page.
     *
     * @since 1.0.0
     */
    public function enqueues()
    {
    }
    /**
     * Build the output for the overview page.
     *
     * @since 1.0.0
     */
    public function output()
    {
    }
}
/**
 * Conditional logic core.
 *
 * Contains functionality for using conditional logic in the form builder as
 * well as a global processing method that can be leveraged by all types of
 * conditional logic.
 *
 * This was contained in an addon until version 1.3.8 when it was rolled into
 * core.
 *
 * @package    WPForms
 * @author     WPForms
 * @since      1.3.8
 * @license    GPL-2.0+
 * @copyright  Copyright (c) 2017, WPForms LLC
 */
class WPForms_Conditional_Logic_Core
{
    /**
     * One is the loneliest number that you'll ever do.
     *
     * @since 1.1.0
     * @var object
     */
    private static $instance;
    /**
     * Main Instance.
     *
     * @since 1.1.0
     * @return WPForms_Conditional_Logic_Core
     */
    public static function instance()
    {
    }
    /**
     * Initialize.
     *
     * @since 1.0.0
     */
    public function init()
    {
    }
    /**
     * Enqueue assets for the builder.
     *
     * @since 1.0.0
     */
    public function builder_assets()
    {
    }
    /**
     * Outputs footer scripts inside the form builder.
     *
     * @since 1.3.8
     */
    public function builder_footer_scripts()
    {
    }
    /**
     * Builds the conditional logic settings to display in the form builder.
     *
     * @since 1.3.8
     * @param array $args
     * @param bool $echo
     */
    public function builder_block($args = array(), $echo = \true)
    {
    }
    /**
     * Alias method for backwards compatibility.
     *
     * @since 1.1.0
     * @param array $args
     * @param bool $echo
     */
    public function conditionals_block($args = array(), $echo = \true)
    {
    }
    /**
     * Process conditional rules.
     *
     * Checks if a form passes the conditional logic rules that are provided.
     *
     * @since 1.3.8
     * @param array $fields
     * @param array $form_data
     * @param array $conditionals
     */
    public function process($fields, $form_data, $conditionals)
    {
    }
    /**
     * Alias function for backwards compatibility.
     *
     * @since 1.0.0
     * @param array $fields
     * @param array $form_data
     * @param array $conditionals
     */
    public function conditionals_process($fields, $form_data, $conditionals)
    {
    }
}
/**
 * Load the field types.
 *
 * @package    WPForms
 * @author     WPForms
 * @since      1.0.0
 * @license    GPL-2.0+
 * @copyright  Copyright (c) 2016, WPForms LLC
*/
class WPForms_Fields
{
    /**
     * Primary class constructor.
     *
     * @since 1.0.0
     */
    public function __construct()
    {
    }
    /**
     * Load and init the base field class.
     *
     * @since 1.2.8
     */
    public function init()
    {
    }
    /**
     * Load default field types.
     *
     * @since 1.0.0
     */
    public function load()
    {
    }
}
/**
 * Form front-end rendering.
 *
 * @package    WPForms
 * @author     WPForms
 * @since      1.0.0
 * @license    GPL-2.0+
 * @copyright  Copyright (c) 2016, WPForms LLC
 */
class WPForms_Frontend
{
    /**
     * Contains form data to be referenced later.
     *
     * @since 1.0.0
     * @var array
     */
    public $forms;
    /**
     * Contains information for multipage forms.
     *
     * Forms that do not contain pages return false, otherwise returns an array
     * that contains the number of total pages and page counter used when
     * displaying pagebreak fields.
     *
     * @since 1.3.7
     * @var array
     */
    public $pages = \false;
    /**
     * Primary class constructor.
     *
     * @since 1.0.0
     */
    public function __construct()
    {
    }
    /**
     * Primary function to render a form on the frontend.
     *
     * @since 1.0.0
     * @param int $id
     * @param boolean $title
     * @param boolean $description
     */
    public function output($id, $title = \false, $description = \false)
    {
    }
    /**
     * Display form confirmation message.
     *
     * @since 1.0.0
     * @param array $form_data
     */
    function confirmation($form_data)
    {
    }
    /**
     * Form head area.
     *
     * @since 1.0.0
     * @param array $form_data
     * @param null $deprecated Deprecated in v1.3.7, previously was $form object.
     * @param mixed $title
     * @param mixed $description
     * @param array $errors
     */
    public function head($form_data, $deprecated, $title, $description, $errors)
    {
    }
    /**
     * Form field area.
     *
     * @since 1.0.0
     * @param array $form_data
     * @param null $deprecated Deprecated in v1.3.7, previously was $form object.
     * @param mixed $title
     * @param mixed $description
     * @param array $errors
     */
    public function fields($form_data, $deprecated, $title, $description, $errors)
    {
    }
    /**
     * Return base attributes for a specific field. This is deprecated and
     * exists for backwards-compatibility purposes. Use field proprties instead.
     *
     * @since 1.3.7
     * @param array $field
     * @param array $form_data
     * @return array
     */
    public function get_field_attributes($field, $form_data)
    {
    }
    /**
     * Return base properties for a specific field.
     *
     * @since 1.3.7
     * @param array $field
     * @param array $form_data
     * @param array $attributes
     * @return array
     */
    function get_field_properties($field, $form_data, $attributes = array())
    {
    }
    /**
     * Display the opening container markup for each field.
     *
     * @since 1.3.7
     * @param array $field
     * @param array $form_data
     */
    public function field_container_open($field, $form_data)
    {
    }
    /**
     * Display the label for each field.
     *
     * @since 1.3.7
     * @param array $field
     * @param array $form_data
     */
    public function field_label($field, $form_data)
    {
    }
    /**
     * Display any errors for each field.
     *
     * @since 1.3.7
     * @param array $field
     * @param array $form_data
     */
    public function field_error($field, $form_data)
    {
    }
    /**
     * Display the description for each field.
     *
     * @since 1.3.7
     * @param array $field
     * @param array $form_data
     */
    public function field_description($field, $form_data)
    {
    }
    /**
     * Display the closing container markup for each field.
     *
     * @since 1.3.7
     * @param array $field
     * @param array $form_data
     */
    public function field_container_close($field, $form_data)
    {
    }
    /**
     * Anti-spam honeypot output if configured.
     *
     * @since 1.0.0
     * @param array $form_data
     * @param null $deprecated Deprecated in v1.3.7, previously was $form object.
     * @param mixed $title
     * @param mixed $description
     * @param array $errors
     */
    public function honeypot($form_data, $deprecated, $title, $description, $errors)
    {
    }
    /**
     * Google reCAPTCHA output if configured.
     *
     * @since 1.0.0
     * @param array $form_data
     * @param null $deprecated Deprecated in v1.3.7, previously was $form object.
     * @param mixed $title
     * @param mixed $description
     * @param array $errors
     */
    public function recaptcha($form_data, $deprecated, $title, $description, $errors)
    {
    }
    /**
     * Form footer arera.
     *
     * @since 1.0.0
     * @param array $form_data
     * @param null $deprecated Deprecated in v1.3.7, previously was $form object.
     * @param mixed $title
     * @param mixed $description
     * @param array $errors
     */
    public function foot($form_data, $deprecated, $title, $description, $errors)
    {
    }
    /**
     * Determine if we should load assets globally. If false assets will
     * load conditionally (default).
     *
     * @since 1.2.4
     * @return bool
     */
    public function assets_global()
    {
    }
    /**
     * Load the necessary CSS for single pages/posts earlier if possible.
     *
     * If we are viewing a singular page, then we can check the content early
     * to see if the shortcode was used. If not we fallback and load the assets
     * later on during the page (widgets, archives, etc).
     *
     * @since 1.0.0
     */
    public function assets_header()
    {
    }
    /**
     * Load the CSS assets for frontend output.
     *
     * @since 1.0.0
     */
    public function assets_css()
    {
    }
    /**
     * Load the JS assets for frontend output.
     *
     * @since 1.0.0
     */
    public function assets_js()
    {
    }
    /**
     * Load the necessary assets for the confirmation message.
     *
     * @since 1.1.2
     */
    public function assets_confirmation()
    {
    }
    /**
     * Load the assets in footer if needed (archives, widgets, etc).
     *
     * @since 1.0.0
     */
    public function assets_footer()
    {
    }
    /**
     * Hook at fires at a later priority in wp_footer
     *
     * @since 1.0.5
     */
    public function footer_end()
    {
    }
    /**
     * Shortcode wrapper for the outputting a form.
     *
     * @since 1.0.0
     * @param array $atts
     * @return array
     */
    public function shortcode($atts)
    {
    }
}
/**
 * Handles plugin installation upon activation.
 *
 * @package    WPForms
 * @author     WPForms
 * @since      1.0.0
 * @license    GPL-2.0+
 * @copyright  Copyright (c) 2016, WPForms LLC
*/
class WPForms_Install
{
    /**
     * Primary class constructor.
     *
     * @since 1.0.0
     */
    public function __construct()
    {
    }
    /**
     * Let's get the party started.
     *
     * @since 1.0.0
     * @param boolean $network_wide
     */
    public function install($network_wide = \false)
    {
    }
    /**
     * Run the actual installer.
     *
     * @since 1.3.0
     */
    function run_install()
    {
    }
    /**
     * When a new site is created in multisite, see if we are network activated,
     * and if so run the installer.
     *
     * @since 1.3.0
     * @param int $blog_id
     * @param int $user_id
     * @param string $domain
     * @param string $path
     * @param int $site_id
     * @param array $meta
     */
    function new_multisite_blog($blog_id, $user_id, $domain, $path, $site_id, $meta)
    {
    }
}
/**
 * Class for logging events and errors
 *
 * This class is forked from Easy Digital Downloads / Pippin Williamson.
 *
 * @link       https://github.com/easydigitaldownloads/Easy-Digital-Downloads/blob/master/includes/class-edd-logging.php
 * @package    WPForms
 * @author     WPForms
 * @since      1.0.0
 * @license    GPL-2.0+
 * @copyright  Copyright (c) 2016, WPForms LLC
*/
class WPForms_Logging
{
    /**
     * Set up the logging class.
     *
     * @since 1.0.0
     */
    public function __construct()
    {
    }
    /**
     * Registers the log post type.
     *
     * @since 1.0.0
     */
    public function register_post_type()
    {
    }
    /**
     * Registers the Log Type taxonomy.
     *
     * @since 1.0.0
     */
    public function register_taxonomy()
    {
    }
    /**
     * Log types.
     *
     * @since 1.0.0
     * @return array
     */
    public function log_types()
    {
    }
    /**
     * Check if a log type is valid.
     *
     * @since 1.0.0
     * @param string $type
     * @return bool
     */
    function valid_type($type)
    {
    }
    /**
     * Create new log entry.
     *
     * This is just a simple and fast way to log something. Use $this->insert_log()
     * if you need to store custom meta data
     *
     * @since 1.0.0
     * @param string $title Log entry title
     * @param string $message Log entry message
     * @param int $parent Log entry parent
     * @param string $type Log type (default: null)
     * @return int Log ID
     */
    public function add($title = '', $message = '', $parent = 0, $type = \null, $meta = '')
    {
    }
    /**
     * Easily retrieves log items for a particular object ID.
     *
     * @since 1.0.0
     * @param int $object_id (default: 0)
     * @param string $type Log type (default: null)
     * @param int $paged Page number (default: null)
     * @return array Array of the connected logs
     */
    public function get_logs($object_id = 0, $type = \null, $paged = \null)
    {
    }
    /**
     * Stores a log entry.
     *
     * @since 1.0.0
     * @param array $log_data Log entry data
     * @param array $log_meta Log entry meta
     * @return int The ID of the newly created log item
     */
    function insert_log($log_data = array(), $log_meta = array())
    {
    }
    /**
     * Update and existing log item.
     *
     * @since 1.0.0
     * @param array $log_data Log entry data
     * @param array $log_meta Log entry meta
     * @return bool True if successful, false otherwise
     */
    public function update_log($log_data = array(), $log_meta = array())
    {
    }
    /**
     * Retrieve all connected logs.
     *
     * Used for retrieving logs related to particular items, such as a specific purchase.
     *
     * @since 1.0.0
     * @param array $args Query arguments
     * @return mixed array if logs were found, false otherwise
     */
    public function get_connected_logs($args = array())
    {
    }
    /**
     * Retrieves number of log entries connected to particular object ID
     *
     * @since 1.0.0
     * @param int $object_id (default: 0)
     * @param string $type Log type (default: null)
     * @param array $meta_query Log meta query (default: null)
     * @param array $date_query Log data query (default: null) (since 1.9)
     * @return int Log count
     */
    public function get_log_count($object_id = 0, $type = \null, $meta_query = \null, $date_query = \null)
    {
    }
    /**
     * Delete a log.
     *
     * @since 1.0.0
     * @param int $object_id (default: 0)
     * @param string $type Log type (default: null)
     * @param array $meta_query Log meta query (default: null)
     */
    public function delete_logs($object_id = 0, $type = \null, $meta_query = \null)
    {
    }
}
/**
 * Preview class.
 *
 * @package    WPForms
 * @author     WPForms
 * @since      1.1.5
 * @license    GPL-2.0+
 * @copyright  Copyright (c) 2016, WPForms LLC
*/
class WPForms_Preview
{
    /**
     * Primary class constructor.
     *
     * @since 1.1.5
     */
    public function __construct()
    {
    }
    /**
     * Determing if the user should see a preview page, if so, party on.
     *
     * @since 1.1.5
     */
    public function init()
    {
    }
    /**
     * Print Preview.
     *
     * @since 1.1.5
     */
    public function print_preview()
    {
    }
    /**
     * Check if preview page exists, if not create it.
     *
     * @since 1.1.9
     */
    public function form_preview_check()
    {
    }
    /**
     * Preview page URL.
     *
     * @since 1.1.9
     * @param int $form_id
     * @return string
     */
    public function form_preview_url($form_id)
    {
    }
    /**
     * Fires when form preview might be detected.
     *
     * @since 1.1.9
     */
    public function form_preview()
    {
    }
    /**
     * Tweak the page content for form preview page requests.
     *
     * @since 1.1.9
     * @param array $posts
     * @param object $query
     * @return array
     */
    public function form_preview_query($posts, $query)
    {
    }
    /**
     * Hide the preview page from admin
     *
     * @since 1.2.3
     * @param object $query
     */
    function form_preview_hide($query)
    {
    }
}
/**
 * Load the providers.
 *
 * @package    WPForms
 * @author     WPForms
 * @since      1.3.6
 * @license    GPL-2.0+
 * @copyright  Copyright (c) 2017, WPForms LLC
*/
class WPForms_Providers
{
    /**
     * Primary class constructor.
     *
     * @since 1.3.6
     */
    public function __construct()
    {
    }
    /**
     * Load and init the base provider class.
     *
     * @since 1.3.6
     */
    public function init()
    {
    }
    /**
     * Load default marketing providers.
     *
     * @since 1.3.6
     */
    public function load()
    {
    }
}
/**
 * Smart tag functionality.
 *
 * @package    WPForms
 * @author     WPForms
 * @since      1.0.0
 * @license    GPL-2.0+
 * @copyright  Copyright (c) 2016, WPForms LLC
*/
class WPForms_Smart_Tags
{
    /**
     * Primary class constructor.
     *
     * @since 1.0.0
     */
    public function __construct()
    {
    }
    /**
     * Approved smart tags.
     *
     * @since 1.0.0
     * @param string $return
     * @return array
     */
    function get($return = 'array')
    {
    }
    /**
     * Process and parse smart tags.
     *
     * @since 1.0.0
     * @param string $content
     * @param array $form_data
     * @param array $fields
     * @param int $entry_id
     * @return string
     */
    function process($content, $form_data, $fields = '', $entry_id = '')
    {
    }
}
/**
 * WPForms widget.
 *
 * @package    WPForms
 * @author     WPForms
 * @since      1.0.2
 * @license    GPL-2.0+
 * @copyright  Copyright (c) 2016, WPForms LLC
*/
class WPForms_Widget extends \WP_Widget
{
    /**
     * Holds widget settings defaults, populated in constructor.
     *
     * @since 1.0.2
     * @var array
     */
    protected $defaults;
    /**
     * Constructor
     *
     * @since 1.0.2
     */
    function __construct()
    {
    }
    /**
     * Outputs the HTML for this widget.
     *
     * @since 1.0.2
     * @param array $args An array of standard parameters for widgets in this theme 
     * @param array $instance An array of settings for this widget instance 
     */
    function widget($args, $instance)
    {
    }
    /**
     * Deals with the settings when they are saved by the admin. Here is
     * where any validation should be dealt with.
     *
     * @since 1.0.2
     * @param array $new_instance An array of new settings as submitted by the admin
     * @param array $old_instance An array of the previous settings 
     * @return array The validated and (if necessary) amended settings
     */
    function update($new_instance, $old_instance)
    {
    }
    /**
     * Displays the form for this widget on the Widgets page of the WP Admin area.
     *
     * @since 1.0.2
     * @param array $instance An array of the current settings for this widget
     */
    function form($instance)
    {
    }
}
/**
 * Emails.
 *
 * This class handles all (notification) emails sent by WPForms.
 *
 * Heavily influceded by the great AffiliateWP plugin by Pippin Williamson.
 * https://github.com/AffiliateWP/AffiliateWP/blob/master/includes/emails/class-affwp-emails.php
 *
 * @package    WPForms
 * @author     WPForms
 * @since      1.1.3
 * @license    GPL-2.0+
 * @copyright  Copyright (c) 2016, WPForms LLC
*/
class WPForms_WP_Emails
{
    /**
     * Holds the from address.
     *
     * @since 1.1.3
     */
    private $from_address;
    /**
     * Holds the from name.
     *
     * @since 1.1.3
     */
    private $from_name;
    /**
     * Holds the reply-to address.
     *
     * @since 1.1.3
     */
    private $reply_to = \false;
    /**
     * Holds the carbon copy addresses.
     *
     * @since 1.3,1
     */
    private $cc = \false;
    /**
     * Holds the email content type.
     *
     * @since 1.1.3
     */
    private $content_type;
    /**
     * Holds the email headers.
     *
     * @since 1.1.3
     */
    private $headers;
    /**
     * Whether to send email in HTML.
     *
     * @since 1.1.3
     */
    private $html = \true;
    /**
     * The email template to use.
     *
     * @since 1.1.3
     */
    private $template;
    /**
     * Form data.
     *
     * @since 1.1.3
     */
    public $form_data = '';
    /**
     * Fields, formatted, and sanitized.
     *
     * @since 1.1.3
     */
    public $fields = '';
    /**
     * Entry ID.
     *
     * @since 1.2.3
     */
    public $entry_id = '';
    /**
     * Get things going.
     *
     * @since 1.1.3
     * @return void
     */
    public function __construct()
    {
    }
    /**
     * Set a property.
     *
     * @since 1.1.3
     * @return void
     */
    public function __set($key, $value)
    {
    }
    /**
     * Get the email from name.
     *
     * @since 1.1.3
     * @return string The email from name
     */
    public function get_from_name()
    {
    }
    /**
     * Get the email from address.
     *
     * @since 1.1.3
     * @return string The email from address
     */
    public function get_from_address()
    {
    }
    /**
     * Get the email reply-to.
     *
     * @since 1.1.3
     * @return string The email reply-to address
     */
    public function get_reply_to()
    {
    }
    /**
     * Get the email carbon copy addresses.
     *
     * @since 1.3.1
     * @return string The email reply-to address
     */
    public function get_cc()
    {
    }
    /**
     * Get the email content type.
     *
     * @since 1.1.3
     * @return string The email content type
     */
    public function get_content_type()
    {
    }
    /**
     * Get the email headers.
     *
     * @since 1.1.3
     * @return string The email headers
     */
    public function get_headers()
    {
    }
    /**
     * Build the email
     *
     * @since 1.1.3
     * @param string $message The email message
     * @return string
     */
    public function build_email($message)
    {
    }
    /**
     * Send the email
     *
     * @since 1.1.3
     * @param string $to The To address
     * @param string $subject The subject line of the email
     * @param string $message The body of the email
     * @param string|array $attachments Attachments to the email
     */
    public function send($to, $subject, $message, $attachments = array())
    {
    }
    /**
     * Add filters/actions before the email is sent.
     *
     * @since 1.1.3
     */
    public function send_before()
    {
    }
    /**
     * Remove filters/actions after the email is sent.
     *
     * @since 1.1.3
     */
    public function send_after()
    {
    }
    /**
     * Converts text formatted HTML. This is primarily for turning line breaks
     * into <p> and <br/> tags.
     *
     * @since 1.1.3
     * @param string $message
     * @return string
     */
    public function text_to_html($message)
    {
    }
    /**
     * Processes a smart tag.
     *
     * @since 1.1.3
     * @param string $string
     * @param bool $sanitize
     * @return string
     */
    function process_tag($string = '', $sanitize = \true, $linebreaks = \false)
    {
    }
    /**
     * Process the all fields smart tag if present.
     *
     * @since 1.1.3
     */
    function wpforms_html_field_value($html = \true)
    {
    }
    /**
     * Email kill switch if needed.
     *
     * @since 1.1.3
     * @return bool
     */
    public function is_email_disabled()
    {
    }
    /**
     * Get the enabled email template
     *
     * @since 1.1.3
     * @return string|null
     */
    public function get_template()
    {
    }
    /**
     * Retrieves a template part. Taken from bbPress.
     *
     * @since 1.1.3
     * @param string $slug
     * @param string $name Optional. Default null
     * @param bool $load
     * @return string
     */
    public function get_template_part($slug, $name = \null, $load = \true)
    {
    }
    /**
     * Retrieve the name of the highest priority template file that exists.
     *
     * Searches in the STYLESHEETPATH before TEMPLATEPATH so that themes which
     * inherit from a parent theme can just overload one file. If the template is
     * not found in either of those, it looks in the theme-compat folder last.
     *
     * Taken from bbPress
     *
     * @since 1.1.3
     * @param string|array $template_names Template file(s) to search for, in order.
     * @param bool $load If true the template file will be loaded if it is found.
     * @param bool $require_once Whether to require_once or require. Default true.
     *   Has no effect if $load is false.
     * @return string The template filename if one is located.
     */
    public function locate_template($template_names, $load = \false, $require_once = \true)
    {
    }
    /**
     * Returns a list of paths to check for template locations
     *
     * @since 1.1.3
     * @return mixed|void
     */
    public function get_theme_template_paths()
    {
    }
}
/**
 * Base field template.
 *
 * @package    WPForms
 * @author     WPForms
 * @since      1.0.0
 * @license    GPL-2.0+
 * @copyright  Copyright (c) 2016, WPForms LLC
 */
abstract class WPForms_Field
{
    /**
     * Full name of the field type, eg "Paragraph Text".
     *
     * @since 1.0.0
     * @var string
     */
    public $name;
    /**
     * Type of the field, eg "textarea".
     *
     * @since 1.0.0
     * @var string
     */
    public $type;
    /**
     * Font Awesome Icon used for the editor button, eg "fa-list".
     *
     * @since 1.0.0
     * @var mixed
     */
    public $icon = \false;
    /**
     * Priority order the field button should show inside the "Add Fields" tab.
     *
     * @since 1.0.0
     * @var integer
     */
    public $order = 20;
    /**
     * Field version number, used to introduce new features and capabilities.
     *
     * @since 1.3.7
     * @var integer
     */
    public $version = 1;
    /**
     * Field group the field belongs to.
     *
     * @since 1.0.0
     * @var string
     */
    public $group = 'standard';
    /**
     * Placeholder to hold default value(s) for some field types.
     *
     * @since 1.0.0
     * @var mixed
     */
    public $defaults;
    /**
     * Current form ID in the admin builder.
     *
     * @since 1.1.1
     * @var mixed, int or false
     */
    public $form_id;
    /**
     * Current form data in admin builder.
     *
     * @since 1.1.1
     * @var mixed, int or false
     */
    public $form_data;
    /**
     * Primary class constructor.
     *
     * @since 1.0.0
     * @param bool $init
     */
    public function __construct($init = \true)
    {
    }
    /**
     * All systems go. Used by subclasses.
     *
     * @since 1.0.0
     */
    public function init()
    {
    }
    /**
     * Create the button for the 'Add Fields' tab, inside the form editor.
     *
     * @since 1.0.0
     * @param array $fields
     * @return array
     */
    public function field_button($fields)
    {
    }
    /**
     * Creates the field options panel. Used by subclasses.
     *
     * @since 1.0.0
     * @param array $field
     */
    public function field_options($field)
    {
    }
    /**
     * Creates the field preview. Used by subclasses.
     *
     * @since 1.0.0
     * @param array $field
     */
    public function field_preview($field)
    {
    }
    /**
     * Helper function to create field option elements.
     *
     * Field option elements are peices that help create a field option. They
     * are used to quickly build field options.
     *
     * @since 1.0.0
     * @param string $option
     * @param array $field
     * @param array $args
     * @param boolean $echo
     * @return mixed echo or return string
     */
    public function field_element($option, $field, $args = array(), $echo = \true)
    {
    }
    /**
     * Helper function to create common field options that are used frequently.
     *
     * @since 1.0.0
     * @param string $option
     * @param array $field
     * @param array $args
     * @param boolean $echo
     * @return mixed echo or return string
     */
    public function field_option($option, $field, $args = array(), $echo = \true)
    {
    }
    /**
     * Helper function to create common field options that are used frequently
     * in the field preview.
     *
     * @since 1.0.0
     * @param string $option
     * @param array $field
     * @param array $args
     * @param boolean $echo
     * @return mixed echo or return string
     */
    public function field_preview_option($option, $field, $args = array(), $echo = \true)
    {
    }
    /**
     * Create a new field in the admin AJAX editor.
     *
     * @since 1.0.0
     */
    public function field_new()
    {
    }
    /**
     * Display the field input elements on the frontend.
     *
     * @since 1.0.0
     * @param array $field
     * @param array $field_atts
     * @param array $form_data
     */
    public function field_display($field, $field_atts, $form_data)
    {
    }
    /**
     * Display field input errors if present.
     *
     * @since 1.3.7
     * @param tring $key
     * @param array $field
     */
    public function field_display_error($key, $field)
    {
    }
    /**
     * Display field input sublabel if present.
     *
     * @since 1.3.7
     * @param tring $key
     * @param array $field
     */
    public function field_display_sublabel($key, $position, $field)
    {
    }
    /**
     * Validates field on form submit.
     *
     * @since 1.0.0
     * @param int $field_id
     * @param array $field_submit
     * @param array $form_data
     */
    public function validate($field_id, $field_submit, $form_data)
    {
    }
    /**
     * Formats and sanitizes field.
     *
     * @since 1.0.0
     * @param int $field_id
     * @param array $field_submit
     * @param array $form_data
     */
    public function format($field_id, $field_submit, $form_data)
    {
    }
}
/**
 * Checkbox field.
 *
 * @package    WPForms
 * @author     WPForms
 * @since      1.0.0
 * @license    GPL-2.0+
 * @copyright  Copyright (c) 2016, WPForms LLC
*/
class WPForms_Field_Checkbox extends \WPForms_Field
{
    /**
     * Primary class constructor.
     *
     * @since 1.0.0
     */
    public function init()
    {
    }
    /**
     * Field options panel inside the builder.
     *
     * @since 1.0.0
     * @param array $field
     */
    public function field_options($field)
    {
    }
    /**
     * Field preview inside the builder.
     *
     * @since 1.0.0
     * @param array $field
     */
    public function field_preview($field)
    {
    }
    /**
     * Field display on the form front-end.
     *
     * @since 1.0.0
     * @param array $field
     * @param array $form_data
     */
    public function field_display($field, $field_atts, $form_data)
    {
    }
    /**
     * Formats and sanitizes field.
     *
     * @since 1.0.2
     * @param int $field_id
     * @param array $field_submit
     * @param array $form_data
     */
    public function format($field_id, $field_submit, $form_data)
    {
    }
}
/**
 * Email text field.
 *
 * @package    WPForms
 * @author     WPForms
 * @since      1.0.0
 * @license    GPL-2.0+
 * @copyright  Copyright (c) 2016, WPForms LLC
 */
class WPForms_Field_Email extends \WPForms_Field
{
    /**
     * Primary class constructor.
     *
     * @since 1.0.0
     */
    public function init()
    {
    }
    /**
     * Define additional field properties.
     *
     * @since 1.3.7
     * @param array $properties
     * @param array $field
     * @param array $form_data
     * @return array
     */
    public function field_properties($properties, $field, $form_data)
    {
    }
    /**
     * Field should default to being required.
     *
     * @since 1.0.9
     * @param bool $required
     * @param array $field
     * @return bool
     */
    public function default_required($required, $field)
    {
    }
    /**
     * Add class to field options wrapper to indicate if field confirmation is
     * enabled.
     *
     * @since 1.3.0
     * @param string $class
     * @param array $field
     * @return string
     */
    function field_option_class($class, $field)
    {
    }
    /**
     * Field options panel inside the builder.
     *
     * @since 1.0.0
     * @param array $field
     */
    public function field_options($field)
    {
    }
    /**
     * Field preview inside the builder.
     *
     * @since 1.0.0
     * @param array $field
     */
    public function field_preview($field)
    {
    }
    /**
     * Field display on the form front-end.
     *
     * @since 1.0.0
     * @param array $field
     * @param array $deprecated
     * @param array $form_data
     */
    public function field_display($field, $deprecated, $form_data)
    {
    }
    /**
     * Formats and sanitizes field.
     *
     * @since 1.3.0
     * @param int $field_id
     * @param array $field_submit
     * @param array $form_data
     */
    public function format($field_id, $field_submit, $form_data)
    {
    }
}
/**
 * Name text field.
 *
 * @package    WPForms
 * @author     WPForms
 * @since      1.0.0
 * @license    GPL-2.0+
 * @copyright  Copyright (c) 2016, WPForms LLC
 */
class WPForms_Field_Name extends \WPForms_Field
{
    /**
     * Primary class constructor.
     *
     * @since 1.0.0
     */
    public function init()
    {
    }
    /**
     * Define additional field properties.
     *
     * @since 1.3.7
     * @param array $properties
     * @param array $field
     * @param array $form_data
     * @return array
     */
    public function field_properties($properties, $field, $form_data)
    {
    }
    /**
     * Name fields should default to being required.
     *
     * @since 1.0.8
     * @param bool $required
     * @param array $field
     * @return bool
     */
    public function default_required($required, $field)
    {
    }
    /**
     * Field options panel inside the builder.
     *
     * @since 1.0.0
     * @param array $field
     */
    public function field_options($field)
    {
    }
    /**
     * Field preview inside the builder.
     *
     * @since 1.0.0
     * @param array $field
     */
    public function field_preview($field)
    {
    }
    /**
     * Field display on the form front-end.
     *
     * @since 1.0.0
     * @param array $field
     * @param array $deprecated
     * @param array $form_data
     */
    public function field_display($field, $deprecated, $form_data)
    {
    }
    /**
     * Validates field on form submit.
     *
     * @since 1.0.0
     * @param int $field_id
     * @param array $field_submit
     * @param array $form_data
     */
    public function validate($field_id, $field_submit, $form_data)
    {
    }
    /**
     * Formats field.
     *
     * @since 1.0.0
     * @param int $field_id
     * @param array $field_submit
     * @param array $form_data
     */
    public function format($field_id, $field_submit, $form_data)
    {
    }
}
/**
 * Number text field.
 *
 * @package    WPForms
 * @author     WPForms
 * @since      1.0.0
 * @license    GPL-2.0+
 * @copyright  Copyright (c) 2016, WPForms LLC
 */
class WPForms_Field_Number extends \WPForms_Field
{
    /**
     * Primary class constructor.
     *
     * @since 1.0.0
     */
    public function init()
    {
    }
    /**
     * Field options panel inside the builder.
     *
     * @since 1.0.0
     * @param array $field
     */
    public function field_options($field)
    {
    }
    /**
     * Field preview inside the builder.
     *
     * @since 1.0.0
     * @param array $field
     */
    public function field_preview($field)
    {
    }
    /**
     * Field display on the form front-end.
     *
     * @since 1.0.0
     * @param array $field
     * @param array $deprecated
     * @param array $form_data
     */
    public function field_display($field, $deprecated, $form_data)
    {
    }
    /**
     * Validates field on form submit.
     *
     * @since 1.0.0
     * @param int $field_id
     * @param array $field_submit
     * @param array $form_data
     */
    public function validate($field_id, $field_submit, $form_data)
    {
    }
    /**
     * Formats and sanitizes field.
     *
     * @since 1.3.5
     * @param int $field_id
     * @param array $field_submit
     * @param array $form_data
     */
    public function format($field_id, $field_submit, $form_data)
    {
    }
}
/**
 * Multiple Choice field.
 *
 * @package    WPForms
 * @author     WPForms
 * @since      1.0.0
 * @license    GPL-2.0+
 * @copyright  Copyright (c) 2016, WPForms LLC
*/
class WPForms_Field_Radio extends \WPForms_Field
{
    /**
     * Primary class constructor.
     *
     * @since 1.0.0
     */
    public function init()
    {
    }
    /**
     * Field options panel inside the builder.
     *
     * @since 1.0.0
     * @param array $field
     */
    public function field_options($field)
    {
    }
    /**
     * Field preview inside the builder.
     *
     * @since 1.0.0
     * @param array $field
     */
    public function field_preview($field)
    {
    }
    /**
     * Field display on the form front-end.
     *
     * @since 1.0.0
     * @param array $field
     * @param array $form_data
     */
    public function field_display($field, $field_atts, $form_data)
    {
    }
    /**
     * Formats and sanitizes field.
     *
     * @since 1.0.2
     * @param int $field_id
     * @param array $field_submit
     * @param array $form_data
     */
    public function format($field_id, $field_submit, $form_data)
    {
    }
}
/**
 * Dropdown field.
 *
 * @package    WPForms
 * @author     WPForms
 * @since      1.0.0
 * @license    GPL-2.0+
 * @copyright  Copyright (c) 2016, WPForms LLC
*/
class WPForms_Field_Select extends \WPForms_Field
{
    /**
     * Primary class constructor.
     *
     * @since 1.0.0
     */
    public function init()
    {
    }
    /**
     * Field options panel inside the builder.
     *
     * @since 1.0.0
     * @param array $field
     */
    public function field_options($field)
    {
    }
    /**
     * Field preview inside the builder.
     *
     * @since 1.0.0
     * @param array $field
     */
    public function field_preview($field)
    {
    }
    /**
     * Field display on the form front-end.
     *
     * @since 1.0.0
     * @param array $field
     * @param array $form_data
     */
    public function field_display($field, $field_atts, $form_data)
    {
    }
    /**
     * Formats and sanitizes field.
     *
     * @since 1.0.2
     * @param int $field_id
     * @param array $field_submit
     * @param array $form_data
     */
    public function format($field_id, $field_submit, $form_data)
    {
    }
}
/**
 * Single line text field.
 *
 * @package    WPForms
 * @author     WPForms
 * @since      1.0.0
 * @license    GPL-2.0+
 * @copyright  Copyright (c) 2016, WPForms LLC
 */
class WPForms_Field_Text extends \WPForms_Field
{
    /**
     * Primary class constructor.
     *
     * @since 1.0.0
     */
    public function init()
    {
    }
    /**
     * Field options panel inside the builder.
     *
     * @since 1.0.0
     * @param array $field
     */
    public function field_options($field)
    {
    }
    /**
     * Field preview inside the builder.
     *
     * @since 1.0.0
     * @param array $field
     */
    public function field_preview($field)
    {
    }
    /**
     * Field display on the form front-end.
     *
     * @since 1.0.0
     * @param array $field
     * @param array $deprecated
     * @param array $form_data
     */
    public function field_display($field, $deprecated, $form_data)
    {
    }
}
/**
 * Paragraph text field.
 *
 * @package    WPForms
 * @author     WPForms
 * @since      1.0.0
 * @license    GPL-2.0+
 * @copyright  Copyright (c) 2016, WPForms LLC
 */
class WPForms_Field_Textarea extends \WPForms_Field
{
    /**
     * Primary class constructor.
     *
     * @since 1.0.0
     */
    public function init()
    {
    }
    /**
     * Field options panel inside the builder.
     *
     * @since 1.0.0
     * @param array $field
     */
    public function field_options($field)
    {
    }
    /**
     * Field preview inside the builder.
     *
     * @since 1.0.0
     * @param array $field
     */
    public function field_preview($field)
    {
    }
    /**
     * Field display on the form front-end.
     *
     * @since 1.0.0
     * @param array $field
     * @param array $deprecated
     * @param array $form_data
     */
    public function field_display($field, $deprecated, $form_data)
    {
    }
}
/**
 * Provider class.
 *
 * @package    WPForms
 * @author     WPForms
 * @since      1.0.0
 * @license    GPL-2.0+
 * @copyright  Copyright (c) 2016, WPForms LLC
*/
abstract class WPForms_Provider
{
    /**
     * Provider add-on version.
     *
     * @since 1.0.0
     * @var sting
     */
    private $version;
    /**
     * Provider name.
     *
     * @since 1.0.0
     * @var sting
     */
    public $name;
    /**
     * Provider name in slug format.
     *
     * @since 1.0.0
     * @var sting
     */
    public $slug;
    /**
     * Load priority.
     *
     * @since 1.0.0
     * @var int
     */
    public $priority = 10;
    /**
     * Holds the API connections.
     *
     * @since 1.0.0
     * @var mixed
     */
    public $api = \false;
    /**
     * Service icon.
     *
     * @since 1.0.0
     * @var string
     */
    public $icon;
    /**
     * Service icon.
     *
     * @since 1.2.3
     * @var string
     */
    public $type;
    /**
     * Form data.
     *
     * @since 1.2.3
     * @var array
     */
    public $form_data;
    /**
     * Primary class constructor.
     *
     * @since 1.0.0
     */
    public function __construct()
    {
    }
    /**
     * All systems go. Used by subclasses.
     *
     * @since 1.0.0
     */
    public function init()
    {
    }
    /**
     * Add to list of registered providers.
     *
     * @since 1.0.0
     * @param array $providers
     * @return array
     */
    function register_provider($providers = array())
    {
    }
    /**
     * Process the Builder AJAX requests.
     *
     * @since 1.0.0
     */
    public function process_ajax()
    {
    }
    /**
     * Process and submit entry to provider.
     *
     * @since 1.0.0
     * @param array $fields
     * @param array $entry
     * @param array $form_data
     * @param int $entry_id
     */
    public function process_entry($fields, $entry, $form_data, $entry_id)
    {
    }
    /**
     * Process conditional fields.
     *
     * @since 1.0.0
     * @param array $fields
     * @param array $entry
     * @param array $form_data
     * @param array $connection
     */
    public function process_conditionals($fields, $entry, $form_data, $connection)
    {
    }
    /**
     * Retrieve all available forms in a field.
     *
     * Not all fields should be available for merge tags so we compare against a
     * white-list. Also some fields, such as Name, should have additional
     * variations.
     *
     * @since 1.0.0
     * @param mixed $form_id
     * @return mixed boolean or array
     */
    public function get_form_fields($form = \false, $whitelist = array())
    {
    }
    /**
     * Get form fields ready for select list options.
     *
     * In this function we also do the logic to limit certain fields to certain
     * provider field types.
     *
     * @since 1.0.0
     * @param array $form_fields
     * @param string $form_field_type
     */
    public function get_form_field_select($form_fields = array(), $form_field_type = '')
    {
    }
    //************************************************************************//
    //
    //	API methods - these methods interact directly with the provider API.
    //
    //************************************************************************//
    /**
     * Authenticate with the provider API.
     *
     * @param array $data
     * @param string $form_id
     * @return mixed id or error object
     */
    public function api_auth($data = array(), $form_id = '')
    {
    }
    /**
     * Establish connection object to provider API.
     *
     * @since 1.0.0
     * @param string $account_id
     * @return mixed array or error object
     */
    public function api_connect($account_id)
    {
    }
    /**
     * Retrieve provider account lists.
     *
     * @since 1.0.0
     * @param string $connection_id
     * @param string $account_id
     * @return mixed array or error object
     */
    public function api_lists($connection_id = '', $account_id = '')
    {
    }
    /**
     * Retrieve provider account list groups.
     *
     * @since 1.0.0
     * @param string $connection_id
     * @param string $account_id
     * @return mixed array or error object
     */
    public function api_groups($connection_id = '', $account_id = '', $list_id = '')
    {
    }
    /**
     * Retrieve provider account list fields.
     *
     * @since 1.0.0
     * @param string $connection_id
     * @param string $account_id
     * @return mixed array or error object
     */
    public function api_fields($connection_id = '', $account_id = '', $list_id = '')
    {
    }
    //************************************************************************//
    //
    //	Output methods - these methods generally return HTML for the builder.
    //
    //************************************************************************//
    /**
     * Connection HTML.
     *
     * This method compiles all the HTML necessary for a connection to a provider.
     *
     * @since 1.0.0
     * @param string $connection_id
     * @param array $connection
     * @param mixed $form form id or form data
     * @return string
     */
    public function output_connection($connection_id = '', $connection = array(), $form = '')
    {
    }
    /**
     * Connection header HTML.
     *
     * @since 1.0.0
     * @param string $connection_id
     * @param array $connection
     * @return string
     */
    public function output_connection_header($connection_id = '', $connection = array())
    {
    }
    /**
     * Provider account authorize fields HTML.
     *
     * @since 1.0.0
     * @return string
     */
    public function output_auth()
    {
    }
    /**
     * Provider account select HTML.
     *
     * @since 1.0.0
     * @param string $connection_id
     * @param array $connection
     * @return string
     */
    public function output_accounts($connection_id = '', $connection = array())
    {
    }
    /**
     * Provider account lists HTML.
     *
     * @since 1.0.0
     * @param string $connection_id
     * @param array $connection
     * @return string
     */
    public function output_lists($connection_id = '', $connection = array())
    {
    }
    /**
     * Provider account list groups HTML.
     *
     * @since 1.0.0
     * @param string $connection_id
     * @param array $connection
     * @return string
     */
    public function output_groups($connection_id = '', $connection = array())
    {
    }
    /**
     * Provider account list fields HTML.
     *
     * @since 1.0.0
     * @param string $connection_id
     * @param array $connection
     * @param mixed $form
     * @return string
     */
    public function output_fields($connection_id = '', $connection = array(), $form = '')
    {
    }
    /**
     * Provider connection conditional options HTML
     *
     * @since 1.0.0
     * @param string $connection_id
     * @param array $connection
     * @param array $form
     * @return string
     */
    public function output_conditionals($connection_id = '', $connection = array(), $form = '')
    {
    }
    /**
     * Provider account list options HTML.
     *
     * @since 1.0.0
     * @param string $connection_id
     * @param array $connection
     * @param mixed $form
     * @return string
     */
    public function output_options($connection_id = '', $connection = array())
    {
    }
    //************************************************************************//
    //
    //	Builder methods - these methods _build_ the Builder.
    //
    //************************************************************************//
    /**
     * Fetch and store the current form data when in the builder.
     *
     * @since 1.2.3
     */
    public function builder_form_data()
    {
    }
    /**
     * Display content inside the panel content area.
     *
     * @since 1.0.0
     */
    public function builder_content()
    {
    }
    /**
     * Display content inside the panel sidebar area.
     *
     * @since 1.0.0
     */
    public function builder_sidebar()
    {
    }
    /**
     * Wraps the builder content with the required markup.
     *
     * @since 1.0.0
     */
    public function builder_output()
    {
    }
    /**
     * Optionally output content before the main builder output.
     *
     * @since 1.3.6
     */
    public function builder_output_before()
    {
    }
    /**
     * Optionally output content after the main builder output.
     *
     * @since 1.3.6
     */
    public function builder_output_after()
    {
    }
    //************************************************************************//
    //
    //	Integrations tab methods - these methods relate to the settings page.
    //
    //************************************************************************//
    /**
     * Form fields to add a new provider account.
     *
     * @since 1.0.0
     */
    public function integrations_tab_new_form()
    {
    }
    /**
     * AJAX to disconnect a provider from the settings integrations tab.
     *
     * @since 1.0.0
     */
    public function integrations_tab_disconnect()
    {
    }
    /**
     * AJAX to add a provider from the settings integrations tab.
     *
     * @since 1.0.0
     */
    public function integrations_tab_add()
    {
    }
    /**
     * Add provider to the Settings Integrations tab
     *
     * @since 1.0.0
     * @param array $active
     * @param array $settings
     */
    public function integrations_tab_options($active, $settings)
    {
    }
    /**
     * Error wrapper for WP_Error.
     *
     * @since 1.0.0
     * @param string $id
     * @param string $message
     * @return object
     */
    public function error($message = '', $parent = '0')
    {
    }
}
/**
 * Constant Contact integration.
 *
 * @package    WPForms
 * @author     WPForms
 * @since      1.3.6
 * @license    GPL-2.0+
 * @copyright  Copyright (c) 2017, WPForms LLC
*/
class WPForms_Constant_Contact extends \WPForms_Provider
{
    /**
     * Provider access token.
     *
     * @since 1.3.6
     * @var string
     */
    public $access_token;
    /**
     * Provider API key.
     *
     * @since 1.3.6
     * @var string
     */
    public $api_key = 'c58xq3r27udz59h9rrq7qnvf';
    /**
     * Sign up link.
     *
     * @since 1.3.6
     * @var string
     */
    public $sign_up = 'https://constant-contact.evyy.net/c/11535/341874/3411?sharedid=wpforms';
    /**
     * Initialize.
     *
     * @since 1.3.6
     */
    public function init()
    {
    }
    /**
     * Process and submit entry to provider.
     *
     * @since 1.3.6
     * @param array $fields
     * @param array $entry
     * @param array $form_data
     */
    public function process_entry($fields, $entry, $form_data, $entry_id = 0)
    {
    }
    //************************************************************************//
    //
    //	API methods - these methods interact directly with the provider API.
    //
    //************************************************************************//
    /**
     * Authenticate with the API.
     *
     * @since 1.3.6
     * @param array $data
     * @param string $form_id
     * @return mixed id or error object
     */
    public function api_auth($data = array(), $form_id = '')
    {
    }
    /**
     * Establish connection object to API.
     *
     * @since 1.3.6 [<description>]
     * @param string $account_id
     * @return mixed array or error object
     */
    public function api_connect($account_id)
    {
    }
    /**
     * Retrieve provider account lists.
     *
     * @since 1.3.6
     * @param string $connection_id
     * @param string $account_id
     * @return mixed array or error object
     */
    public function api_lists($connection_id = '', $account_id = '')
    {
    }
    /**
     * Retrieve provider account list fields.
     *
     * @since 1.3.6
     * @param string $connection_id
     * @param string $account_id
     * @return mixed array or error object
     */
    public function api_fields($connection_id = '', $account_id = '', $list_id = '')
    {
    }
    //************************************************************************//
    //
    //	Output methods - these methods generally return HTML for the builder.
    //
    //************************************************************************//
    /**
     * Provider account authorize fields HTML.
     *
     * @since 1.3.6
     * @return string
     */
    public function output_auth()
    {
    }
    /**
     * Provider account list groups HTML.
     *
     * @since 1.3.6
     * @param string $connection_id
     * @param array $connection
     * @return string
     */
    public function output_groups($connection_id = '', $connection = array())
    {
    }
    /**
     * Output content after the main builder output.
     *
     * @since 1.3.6
     */
    public function builder_output_after()
    {
    }
    //************************************************************************//
    //
    //	Integrations tab methods - these methods relate to the settings page.
    //
    //************************************************************************//
    /**
     * Form fields to add a new provider account.
     *
     * @since 1.3.6
     */
    public function integrations_tab_new_form()
    {
    }
    //************************************************************************//
    //
    //	Other functionality.
    //
    //************************************************************************//
    /**
     * Add admin notices to connect to Constant Contact.
     *
     * @since 1.3.6
     */
    public function connect_request()
    {
    }
    /**
     * Dismiss the Constant Contact admin notice.
     *
     * @since 1.3.6
     */
    public function connect_dismiss()
    {
    }
    /**
     * Constant Contact "Learn More" admin page.
     *
     * @since 1.3.6
     */
    public function learn_more_page()
    {
    }
}
/**
 * License key fun.
 *
 * @package    WPForms
 * @author     WPForms
 * @since      1.3.2
 * @license    GPL-2.0+
 * @copyright  Copyright (c) 2017, WPForms LLC
*/
class WPForms_Review
{
    /**
     * Primary class constructor.
     *
     * @since 1.3.2
     */
    public function __construct()
    {
    }
    /**
     * Add admin notices as needed for reviews.
     *
     * @since 1.3.2
     */
    public function review_request()
    {
    }
    /**
     * Dismiss the review admin notice
     *
     * @since 1.3.2
     */
    public function review_dismiss()
    {
    }
    /**
     * When user is on a WPForms related admin page, display footer text
     * that graciously asks them to rate us.
     *
     * @since 1.3.2
     * @param string $text
     * @return string
     */
    public function admin_footer($text)
    {
    }
}
/**
 * WPForms Lite. Load Lite specific features/functionality.
 *
 * @since 1.2.0
 * @package WPForms
 */
class WPForms_Lite
{
    /**
     * Primary class constructor.
     *
     * @since 1.2.x
     */
    public function __construct()
    {
    }
    /**
     * Include files.
     *
     * @since 1.0.0
     */
    private function includes()
    {
    }
    /**
     * Form notification settings, supports multiple notifications.
     *
     * @since 1.2.3
     * @param object $settings
     */
    public function form_settings_notifications($settings)
    {
    }
    /**
     * Provide upgrade URL.
     *
     * @since 1.2.0
     */
    public function upgrade_link()
    {
    }
    /**
     * Display/register additional templates available in the Pro version.
     *
     * @since 1.0.6
     */
    public function form_templates()
    {
    }
    /**
     * Display/register additional fields available in the Pro version.
     *
     * @since 1.0.0
     * @param array $fields
     * @return array
     */
    public function form_fields($fields)
    {
    }
    /**
     * Display/register additional panels available in the Pro version.
     *
     * @since 1.0.0
     */
    public function form_panels()
    {
    }
    /**
     * Load assets for lite version with the admin builder.
     *
     * @since 1.0.0
     */
    public function builder_enqueues()
    {
    }
    /**
     * Display other providers available with paid license.
     *
     * @since 1.3.8
     */
    public function builder_provider_sidebar()
    {
    }
    /**
     * Notify user that entries is a pro feature.
     *
     * @since 1.0.0
     */
    public function entries_page()
    {
    }
    /**
     * Add appropriate styling to addons page.
     *
     * @since 1.0.4
     */
    public function addon_page_enqueues()
    {
    }
    /**
     * Notify user that addons are a pro feature.
     *
     * @since 1.0.0
     */
    public function addons_page()
    {
    }
}
/**
 * Ajax actions used in by admin.
 *
 * @package    WPForms
 * @author     WPForms
 * @since      1.0.0
 * @license    GPL-2.0+
 * @copyright  Copyright (c) 2016, WPForms LLC
*/
/**
 * Save a form
 *
 * @since 1.0.0
 */
function wpforms_save_form()
{
}
/**
 * Create a new form
 *
 * @since 1.0.0
 */
function wpforms_new_form()
{
}
/**
 * Update form template.
 *
 * @since 1.0.0
 */
function wpforms_update_form_template()
{
}
/**
 * Form Builder update next field ID.
 *
 * @since 1.2.9
 */
function wpforms_builder_increase_next_field_id()
{
}
/**
 * Form Builder Dynamic Choices option toggle.
 *
 * This can be triggered with select/radio/checkbox fileds.
 *
 * @since 1.2.8
 */
function wpforms_builder_dynamic_choices()
{
}
/**
 * Form Builder Dynamic Choices Source option toggle.
 *
 * This can be triggered with select/radio/checkbox fileds.
 *
 * @since 1.2.8
 */
function wpforms_builder_dynamic_source()
{
}
/**
 * The function which returns the one WPForms_Conditional_Logic_Core instance.
 *
 * Use this function like you would a global variable, except without needing
 * to declare the global.
 *
 * @since 1.1.0
 * @return object
 */
function wpforms_conditional_logic()
{
}
/**
 * Contains various functions that may be potentially used throughout
 * the WPForms plugin.
 *
 * @package    WPForms
 * @author     WPForms
 * @since      1.0.0
 * @license    GPL-2.0+
 * @copyright  Copyright (c) 2016, WPForms LLC
 */
/**
 * Helper function to trigger displaying a form.
 *
 * @since 1.0.2
 * @param int $form_id
 * @param bool $title
 * @param bool $desc
 */
function wpforms_display($form_id = \false, $title = \false, $desc = \false)
{
}
/**
 * Performs json_decode and unslash.
 *
 * @since 1.0.0
 * @param string $data
 * @return array
 */
function wpforms_decode($data)
{
}
/**
 * Performs json_encode and wp_slash.
 *
 * @since 1.3.1.3
 * @param array $data
 * @return string
 */
function wpforms_encode($data = \false)
{
}
/**
 * Check if a string is a valid URL.
 *
 * @since 1.0.0
 * @param $url
 * @return bool
 */
function wpforms_is_url($url)
{
}
/**
 * Get current URL.
 *
 * @since 1.0.0
 * @return string
 */
function wpforms_current_url()
{
}
/**
 * Object to array.
 *
 * @since 1.1.7
 * @param object $object
 * @return array
 */
function wpforms_object_to_array($object)
{
}
/**
 * Get the value of a specific WPForms setting.
 *
 * @since 1.0.0
 * @return mixed
 */
function wpforms_setting($key, $default = \false, $option = 'wpforms_settings')
{
}
/**
 * Check if form provided contains the specified field type.
 *
 * @since 1.0.5
 * @param string $type
 * @param mixed $form
 * @return bool
 */
function wpforms_has_field_type($type, $form, $multiple = \false)
{
}
/**
 * Checks if form provided contains page breaks, if so give details.
 *
 * @since 1.0.0
 * @return mixed
 */
function wpforms_has_pagebreak($form = \false)
{
}
/**
 * Tries to find and return an top or bottom pagebreak.
 *
 * @since 1.2.1
 * @param boolean $form
 * @param string $type
 * @return boolean
 */
function wpforms_get_pagebreak($form = \false, $type = \false)
{
}
/**
 * Returns information about pages if the form has multiple pages.
 *
 * @since 1.3.7
 * @param mixed $form
 * @return mixed false or an array
 */
function wpforms_get_pagebreak_details($form = \false)
{
}
/**
 * Formats, sanitizes, and returns/echos HTML element ID, classes, attributes,
 * and data attributes.
 *
 * @since 1.3.7
 * @param string $id
 * @param array $class
 * @param array $datas
 * @param array $atts
 * @param bool $echo
 * @return string
 */
function wpforms_html_attributes($id = '', $class = array(), $datas = array(), $atts = array(), $echo = \false)
{
}
/**
 * Sanitizes string of CSS classes.
 *
 * @since 1.2.1
 * @param string $classes
 * @param bool $convert True will convert strings to array and vice versa.
 * @return string
 */
function wpforms_sanitize_classes($classes, $convert = \false)
{
}
/**
 * Convert a file size provided, such as "2M", to bytes.
 *
 * @since 1.0.0
 * @link http://stackoverflow.com/a/22500394
 * @param string $size
 * @return int
 */
function wpforms_size_to_bytes($size)
{
}
/**
 * Convert bytes to megabytes (or in some cases KB).
 *
 * @since 1.0.0
 * @param int $bytes
 * @return string
 */
function wpforms_size_to_megabytes($bytes)
{
}
/**
 * Convert a file size provided, such as "2M", to bytes.
 *
 * @since 1.0.0
 * @link http://stackoverflow.com/a/22500394
 * @param string $size
 * @return int
 */
function wpforms_max_upload($bytes = \false)
{
}
/**
 * Retrieve actual fields from a form.
 *
 * Non-posting elements such as section divider, page break, and HTML are
 * automatically excluded. Optionally a white list can be provided.
 *
 * @since 1.0.0
 * @param mixed $form
 * @return mixed boolean or array
 */
function wpforms_get_form_fields($form = \false, $whitelist = array())
{
}
/**
 * Get meta key value for a form field.
 *
 * @since 1.1.9
 * @param int $id Field ID
 * @param string $key Meta key
 * @param array $form_data Form data array
 * @return string
 */
function wpforms_get_form_field_meta($id = '', $key = '', $form_data = '')
{
}
/**
 * Get meta key value for a form field.
 *
 * @since 1.3.1
 * @param string $key Meta key
 * @param array $form_data Form data array
 * @return string
 */
function wpforms_get_form_fields_by_meta($key = '', $value = '', $form_data = '')
{
}
/**
 * US States
 *
 * @since 1.0.0
 * @return array
 */
function wpforms_us_states()
{
}
/**
 * Countries.
 *
 * @since 1.0.0
 * @return array
 */
function wpforms_countries()
{
}
/**
 * Calendar Months
 *
 * @since 1.3.7
 * @return array
 */
function wpforms_months()
{
}
/**
 * Calendar Days
 *
 * @since 1.3.7
 * @return array
 */
function wpforms_days()
{
}
/**
 * Lookup user IP.
 *
 * There are many ways to do this, but we prefer the way EDD does it.
 * https://github.com/easydigitaldownloads/easy-digital-downloads/blob/master/includes/misc-functions.php#L163
 *
 * @since 1.2.5
 * @return string
 */
function wpforms_get_ip()
{
}
/**
 * Sanitizes hex color.
 *
 * @since 1.2.1
 * @param string $color
 * @return string
 */
function wpforms_sanitize_hex_color($color)
{
}
/**
 * Sanitizes error message, primarily used during form frontend output.
 *
 * @since 1.3.7
 * @param string $error
 * @return string
 */
function wpforms_sanitize_error($error = '')
{
}
/**
 * Detect if we should use a light or dark color based on the color given.
 *
 * @since 1.2.5
 * @link https://docs.woocommerce.com/wc-apidocs/source-function-wc_light_or_dark.html#608-627
 * @param mixed $color
 * @param string $dark (default: '#000000')
 * @param string $light (default: '#FFFFFF')
 * @return string
 */
function wpforms_light_or_dark($color, $dark = '#000000', $light = '#FFFFFF')
{
}
/**
 * Debug mode bool.
 *
 * @since 1.2.3
 */
function wpforms_debug()
{
}
/**
 * Helper function to display debug data.
 *
 * @since 1.0.0
 * @param string $data
 * @return string
 */
function wpforms_debug_data($data, $echo = \true)
{
}
/**
 * Log helper.
 *
 * @since 1.0.0
 * @param string $title
 * @param string $message
 * @param array $args
 */
function wpforms_log($title = '', $message = '', $args = array())
{
}
/**
 * Insert element into an array at a specific point a preserve the key.
 *
 * @since 1.3.3
 * @param array $array
 * @param array $values
 * @param int $offset
 * @return array
 */
function wpforms_array_insert($array, $values, $offset)
{
}
/**
 * Contains various WPForms integrations
 *
 * @package    WPForms
 * @author     WPForms
 * @since      1.3.0
 * @license    GPL-2.0+
 * @copyright  Copyright (c) 2016, WPForms LLC
 */
/**
 * Register and setup WPForms as a Visual Composer element.
 *
 * @since 1.3.0
 */
function wpforms_visual_composer_shortcode()
{
}
/**
 * Load our basic CSS when in Visual Composer's frontend editor.
 *
 * @since 1.3.0
 */
function wpforms_visual_composer_shortcode_css()
{
}
/**
 * Deactivate if WPForms already activated.
 *
 * @since 1.0.0
 */
function wpforms_deactivate()
{
}
/**
 * Display notice after deactivation.
 *
 * @since 1.0.0
 */
function wpforms_lite_notice()
{
}