<?php
/**
 * Generated stub declarations for WPForms Lite.
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
    /**
     * When user is on a WPForms related admin page, display footer text
     * that graciously asks them to rate us.
     *
     * @since 1.2.1
     * @param string $text
     * @return string
     */
    public function admin_footer($text)
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
     * @param mixed $title
     * @param mixed $description
     */
    function confirmation($form_data)
    {
    }
    /**
     * Form head area.
     *
     * @since 1.0.0
     * @param array $form_data
     * @param object $form
     * @param mixed $title
     * @param mixed $description
     */
    public function head($form_data, $form, $title, $description, $errors)
    {
    }
    /**
     * Page Indictor
     *
     * This displays if the form contains pagebreaks and is configured to show
     * a page indicator in the top pagebreak settings.
     *
     * @since 1.2.1
     * @param array $form_data
     * @param object $form
     * @param mixed $title
     * @param mixed $description
     * @param array $errors
     */
    public function page_indicator($form_data, $form, $title, $description, $errors)
    {
    }
    /**
     * Form field area.
     *
     * @since 1.0.0
     * @param array $form_data
     * @param object $form
     * @param mixed $title
     * @param mixed $description
     */
    public function fields($form_data, $form, $title, $description, $errors)
    {
    }
    /**
     * Anti-spam honeypot output if configured.
     *
     * @since 1.0.0
     * @param array $form_data
     * @param object $form
     * @param mixed $title
     * @param mixed $description
     */
    public function honeypot($form_data, $form, $title, $description, $errors)
    {
    }
    /**
     * reCAPTCHA output if configured.
     *
     * @since 1.0.0
     * @param array $form_data
     * @param object $form
     * @param mixed $title
     * @param mixed $description
     */
    public function recaptcha($form_data, $form, $title, $description, $errors)
    {
    }
    /**
     * Form footer arera.
     *
     * @since 1.0.0
     * @param array $form_data
     * @param object $form
     * @param mixed $title
     * @param mixed $description
     */
    public function foot($form_data, $form, $title, $description, $errors)
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
     */
    public function install()
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
    private $form_data = '';
    /**
     * Fields, formatted, and sanitized.
     *
     * @since 1.1.3
     */
    private $fields = '';
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
    function process_tag($string = '', $santiize = \true)
    {
    }
    /**
     * Process the all fields smart tag if pressent.
     *
     * @since 1.1.3
     */
    function process_all_fields($html = \true)
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
     */
    public function field_options($field)
    {
    }
    /**
     * Creates the field preview. Used by subclasses.
     *
     * @since 1.0.0
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
     * @param array $form_data
     */
    public function field_display($field, $field_atts, $form_data)
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
     * @param array $form_data
     */
    public function field_display($field, $field_atts, $form_data)
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
     * @param array $form_data
     */
    public function field_display($field, $field_atts, $form_data)
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
 * Sanitizes string of CSS classes.
 *
 * @since 1.2.1
 * @param string $classes
 * @return string
 */
function wpforms_sanitize_classes($classes)
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
 * US States
 *
 * @since 1.0.0
 * @return array
 */
function wpforms_us_states()
{
}
function wpforms_countries()
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