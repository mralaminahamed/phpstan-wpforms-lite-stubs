<?php
/**
 * Generated stub declarations for WPForms.
 * @see https://wpforms.com
 * @see https://github.com/mralaminahamed/phpstan-wpforms-stubs
 */

namespace {
    /**
     * About WPForms admin page class.
     *
     * @package    WPForms
     * @author     WPForms
     * @since      1.5.0
     * @license    GPL-2.0+
     * @copyright  Copyright (c) 2018, WPForms LLC
     */
    class WPForms_About
    {
        /**
         * Admin menu page slug.
         *
         * @since 1.5.0
         *
         * @var string
         */
        const SLUG = 'wpforms-about';
        /**
         * Default view for a page.
         *
         * @since 1.5.0
         *
         * @var string
         */
        const DEFAULT_TAB = 'about';
        /**
         * Array of license types, that are considered being top level and has no features difference.
         *
         * @since 1.5.0
         *
         * @var array
         */
        public static $licenses_top = array('pro', 'agency', 'ultimate', 'elite');
        /**
         * List of features that licenses are different with.
         *
         * @since 1.5.0
         *
         * @var array
         */
        public static $licenses_features = array();
        /**
         * The current active tab.
         *
         * @since 1.5.0
         *
         * @var string
         */
        public $view;
        /**
         * The core views.
         *
         * @since 1.5.0
         *
         * @var array
         */
        public $views = array();
        /**
         * Primary class constructor.
         *
         * @since 1.5.0
         */
        public function __construct()
        {
        }
        /**
         * Determining if the user is viewing the our page, if so, party on.
         *
         * @since 1.5.0
         */
        public function init()
        {
        }
        /**
         * Enqueue assets for the the page.
         *
         * @since 1.5.0
         */
        public function enqueues()
        {
        }
        /**
         * Output the basic page structure.
         *
         * @since 1.5.0
         */
        public function output()
        {
        }
        /**
         * Display the About tab content.
         *
         * @since 1.5.0
         */
        protected function output_about()
        {
        }
        /**
         * Display the Getting Started tab content.
         *
         * @since 1.5.0
         */
        protected function output_getting_started()
        {
        }
        /**
         * Get the next license type. Helper for Versus tab content.
         *
         * @since 1.5.5
         *
         * @param string $current Current license type slug.
         *
         * @return string Next license type slug.
         */
        protected function get_next_license($current)
        {
        }
        /**
         * Display the Versus tab content.
         *
         * @since 1.5.0
         */
        protected function output_versus()
        {
        }
        /**
         * List of AM plugins that we propose to install.
         *
         * @since 1.5.0
         *
         * @return array
         */
        protected function get_am_plugins()
        {
        }
        /**
         * Get the array of data that compared the license data.
         *
         * @since 1.5.0
         *
         * @param string $feature Feature name.
         * @param string $license License type to get data for.
         *
         * @return array|false
         */
        protected function get_license_data($feature, $license)
        {
        }
        /**
         * Get the current installation license type (always lowercase).
         *
         * @since 1.5.0
         *
         * @return string
         */
        protected function get_license_type()
        {
        }
    }
    /**
     * Awesome Motive Deactivation Survey.
     *
     * This prompts the user for more details when they deactivate the plugin.
     *
     * @version    1.2.1
     * @package    AwesomeMotive
     * @author     Jared Atchison and Chris Christoff
     * @license    GPL-2.0+
     * @copyright  Copyright (c) 2018
     */
    class AM_Deactivation_Survey
    {
        /**
         * The API URL we are calling.
         *
         * @since 1.0.0
         * @var string
         */
        public $api_url = 'https://api.awesomemotive.com/v1/deactivation-survey/';
        /**
         * Name for this plugin.
         *
         * @since 1.0.0
         * @var string
         */
        public $name;
        /**
         * Unique slug for this plugin.
         *
         * @since 1.0.0
         * @var string
         */
        public $plugin;
        /**
         * Primary class constructor.
         *
         * @since 1.0.0
         * @param string $name Plugin name.
         * @param string $plugin Plugin slug.
         */
        public function __construct($name = '', $plugin = '')
        {
        }
        /**
         * Checks if current site is a development one.
         *
         * @since 1.2.0
         * @return bool
         */
        public function is_dev_url()
        {
        }
        /**
         * Checks if current admin screen is the plugins page.
         *
         * @since 1.0.0
         * @return bool
         */
        public function is_plugin_page()
        {
        }
        /**
         * Survey javascript.
         *
         * @since 1.0.0
         */
        public function js()
        {
        }
        /**
         * Survey CSS.
         *
         * @since 1.0.0
         */
        public function css()
        {
        }
        /**
         * Survey modal.
         *
         * @since 1.0.0
         */
        public function modal()
        {
        }
    }
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
         *
         * @param string $editor_id
         */
        public function media_button($editor_id)
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
        public function shortcode_modal()
        {
        }
    }
    /**
     * Load the different form importers.
     *
     * @package    WPForms
     * @author     WPForms
     * @since      1.4.2
     * @license    GPL-2.0+
     * @copyright  Copyright (c) 2017, WPForms LLC
     */
    class WPForms_Importers
    {
        /**
         * Primary class constructor.
         *
         * @since 1.4.2
         */
        public function __construct()
        {
        }
        /**
         * Load and init the base importer class.
         *
         * @since 1.4.2
         */
        public function init()
        {
        }
        /**
         * Load default form importers.
         *
         * @since 1.4.2
         */
        public function load()
        {
        }
    }
    /**
     * Skin for on-the-fly addon installations.
     *
     * @since 1.0.0
     * @since 1.5.6.1 Extend PluginSilentUpgraderSkin and clean up the class.
     */
    class WPForms_Install_Skin extends \WPForms\Helpers\PluginSilentUpgraderSkin
    {
        /**
         * Instead of outputting HTML for errors, json_encode the errors and send them
         * back to the Ajax script for processing.
         *
         * @since 1.0.0
         *
         * @param array $errors Array of errors with the install process.
         */
        public function error($errors)
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
        public function register_menus()
        {
        }
        /**
         * Wrapper for the hook to render our custom settings pages.
         *
         * @since 1.0.0
         */
        public function admin_page()
        {
        }
        /**
         * Add settings link to the Plugins page.
         *
         * @since 1.3.9
         *
         * @param array $links Plugin row links.
         *
         * @return array $links
         */
        public function settings_link($links)
        {
        }
    }
    /**
     * Admin notices, on the fly.
     *
     * @example
     * WPForms_Admin_Notice::success( 'All is good!' );
     *
     * @example
     * WPForms_Admin_Notice::warning( 'Do something please.' );
     *
     * @todo       Persistent, dismissible notices.
     * @link       https://gist.github.com/monkeymonk/2ea17e2260daaecd0049c46c8d6c85fd
     * @package    WPForms
     * @author     WPForms
     * @since      1.3.9
     * @license    GPL-2.0+
     * @copyright  Copyright (c) 2017, WPForms LLC
     */
    class WPForms_Admin_Notice
    {
        /**
         * Single instance holder.
         *
         * @since 1.3.9
         * @var mixed
         */
        private static $_instance = \null;
        /**
         * Added notices.
         *
         * @since 1.3.9
         * @var array
         */
        public $notices = array();
        /**
         * Get the instance.
         *
         * @since 1.3.9
         * @return WPForms_Admin_Notice
         */
        public static function getInstance()
        {
        }
        /**
         * Hook when called.
         *
         * @since 1.3.9
         */
        public function __construct()
        {
        }
        /**
         * Display the notices.
         *
         * @since 1.3.9
         */
        public function display()
        {
        }
        /**
         * Add notice to instance property.
         *
         * @since 1.3.9
         *
         * @param string $message Message to display.
         * @param string $type Type of the notice (default: '').
         */
        public static function add($message, $type = '')
        {
        }
        /**
         * Add Info notice.
         *
         * @since 1.3.9
         *
         * @param string $message Message to display.
         */
        public static function info($message)
        {
        }
        /**
         * Add Error notice.
         *
         * @since 1.3.9
         *
         * @param string $message Message to display.
         */
        public static function error($message)
        {
        }
        /**
         * Add Success notice.
         *
         * @since 1.3.9
         *
         * @param string $message Message to display.
         */
        public static function success($message)
        {
        }
        /**
         * Add Warning notice.
         *
         * @since 1.3.9
         *
         * @param string $message Message to display.
         */
        public static function warning($message)
        {
        }
    }
    /**
     * Ask for some love.
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
         * Maybe show review request.
         *
         * @since 1.3.9
         */
        public function review()
        {
        }
        /**
         * Maybe show Lite review request.
         *
         * @since 1.3.9
         */
        public function review_lite()
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
         *
         * @param string $text
         *
         * @return string
         */
        public function admin_footer($text)
        {
        }
    }
    /**
     * Tools admin page class.
     *
     * @package    WPForms
     * @author     WPForms
     * @since      1.3.9
     * @license    GPL-2.0+
     * @copyright  Copyright (c) 2017, WPForms LLC
     */
    class WPForms_Tools
    {
        /**
         * The current active tab.
         *
         * @since 1.3.9
         *
         * @var string
         */
        public $view;
        /**
         * Template code if generated.
         *
         * @since 1.3.9
         *
         * @var string
         */
        private $template = \false;
        /**
         * Registered importers.
         *
         * @since 1.4.2
         *
         * @var array
         */
        public $importers = array();
        /**
         * Available forms for a specific importer.
         *
         * @since 1.4.2
         *
         * @var array
         */
        public $importer_forms = array();
        /**
         * The available forms.
         *
         * @since 1.3.9
         *
         * @var array
         */
        public $forms = \false;
        /**
         * The core views.
         *
         * @since 1.4.3
         *
         * @var array
         */
        public $views = array();
        /**
         * Primary class constructor.
         *
         * @since 1.3.9
         */
        public function __construct()
        {
        }
        /**
         * Determining if the user is viewing the tools page, if so, party on.
         *
         * @since 1.3.9
         */
        public function init()
        {
        }
        /**
         * Build the output for the Tools admin page.
         *
         * @since 1.3.9
         */
        public function output()
        {
        }
        /**
         * Import tab contents.
         *
         * @since 1.4.2
         */
        public function import_tab()
        {
        }
        /**
         * Importer tab contents.
         *
         * @since 1.4.2
         */
        public function importer_tab()
        {
        }
        /**
         * Various Underscores templates for form importing.
         *
         * @since 1.4.2
         */
        public function importer_templates()
        {
        }
        /**
         * Export tab contents.
         *
         * @since 1.4.2
         */
        public function export_tab()
        {
        }
        /**
         * System Info tab contents.
         *
         * @since 1.3.9
         */
        public function system_info_tab()
        {
        }
        /**
         * Import/Export processing.
         *
         * @since 1.3.9
         */
        public function import_export_process()
        {
        }
        /**
         * Get system information.
         *
         * Based on a function from Easy Digital Downloads by Pippin Williamson.
         *
         * @link https://github.com/easydigitaldownloads/easy-digital-downloads/blob/master/includes/admin/tools.php#L470
         *
         * @since 1.3.9
         *
         * @return string
         */
        public function get_system_info()
        {
        }
    }
    /**
     * Welcome page class.
     *
     * This page is shown when the plugin is activated.
     *
     * @since      1.0.0
     * @author     WPForms
     * @package    WPForms
     * @license    GPL-2.0+
     * @copyright  Copyright (c) 2016, WPForms LLC
     */
    class WPForms_Welcome
    {
        /**
         * Hidden welcome page slug.
         *
         * @since 1.5.6
         */
        const SLUG = 'wpforms-getting-started';
        /**
         * Primary class constructor.
         *
         * @since 1.0.0
         */
        public function __construct()
        {
        }
        /**
         * Register all WP hooks.
         *
         * @since 1.5.6
         */
        public function hooks()
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
        public function register()
        {
        }
        /**
         * Removed the dashboard pages from the admin menu.
         *
         * This means the pages are still available to us, but hidden.
         *
         * @since 1.0.0
         */
        public function hide_menu()
        {
        }
        /**
         * Welcome screen redirect.
         *
         * This function checks if a new install or update has just occurred. If so,
         * then we redirect the user to the appropriate page.
         *
         * @since 1.0.0
         */
        public function redirect()
        {
        }
        /**
         * Getting Started screen. Shows after first install.
         *
         * @since 1.0.0
         */
        public function output()
        {
        }
    }
    /**
     * Interface WPForms_Importer_Interface to handle common methods for all importers.
     *
     * @package    WPForms
     * @author     WPForms
     * @since      1.4.2
     * @license    GPL-2.0+
     * @copyright  Copyright (c) 2017, WPForms LLC
     */
    interface WPForms_Importer_Interface
    {
        /**
         * Define required properties.
         *
         * @since 1.4.2
         */
        public function init();
        /**
         * Get ALL THE FORMS.
         *
         * @since 1.4.2
         */
        public function get_forms();
        /**
         * Get a single form.
         *
         * @since 1.4.2
         *
         * @param int $id Form ID.
         */
        public function get_form($id);
        /**
         * Import a single form using AJAX.
         *
         * @since 1.4.2
         */
        public function import_form();
        /**
         * Replace 3rd-party form provider tags/shortcodes with our own Smart Tags.
         *
         * @since 1.4.2
         *
         * @param string $string Text to look for Smart Tags in.
         * @param array  $fields List of fields to process Smart Tags in.
         *
         * @return string
         */
        public function get_smarttags($string, $fields);
    }
    /**
     * Base Importer class.
     *
     * @package    WPForms
     * @author     WPForms
     * @since      1.4.2
     * @license    GPL-2.0+
     * @copyright  Copyright (c) 2017, WPForms LLC
     */
    abstract class WPForms_Importer implements \WPForms_Importer_Interface
    {
        /**
         * Importer name.
         *
         * @since 1.4.2
         *
         * @var string
         */
        public $name;
        /**
         * Importer name in slug format.
         *
         * @since 1.4.2
         *
         * @var string
         */
        public $slug;
        /**
         * Importer plugin path.
         *
         * @since 1.4.2
         *
         * @var string
         */
        public $path;
        /**
         * Primary class constructor.
         *
         * @since 1.4.2
         */
        public function __construct()
        {
        }
        /**
         * Add to list of registered importers.
         *
         * @since 1.4.2
         *
         * @param array $importers List of supported importers.
         *
         * @return array
         */
        public function register($importers = array())
        {
        }
        /**
         * If the importer source is available.
         *
         * @since 1.4.2
         *
         * @return bool
         */
        protected function is_active()
        {
        }
        /**
         * Add the new form to the database and return AJAX data.
         *
         * @since 1.4.2
         *
         * @param array $form Form to import.
         * @param array $unsupported List of unsupported fields.
         * @param array $upgrade_plain List of fields, that are supported inside the paid WPForms, but not in Lite.
         * @param array $upgrade_omit No field alternative in WPForms.
         */
        public function add_form($form, $unsupported = array(), $upgrade_plain = array(), $upgrade_omit = array())
        {
        }
        /**
         * After a form has been successfully imported we track it, so that in the
         * future we can alert users if they try to import a form that has already
         * been imported.
         *
         * @since 1.4.2
         *
         * @param int $source_id Imported plugin form ID.
         * @param int $wpforms_id WPForms form ID.
         */
        public function track_import($source_id, $wpforms_id)
        {
        }
    }
    /**
     * Contact Form 7 Importer class.
     *
     * @package    WPForms
     * @author     WPForms
     * @since      1.4.2
     * @license    GPL-2.0+
     * @copyright  Copyright (c) 2017, WPForms LLC
     */
    class WPForms_Contact_Form_7 extends \WPForms_Importer
    {
        /**
         * @inheritdoc
         */
        public function init()
        {
        }
        /**
         * @inheritdoc
         */
        public function get_forms()
        {
        }
        /**
         * Get a single form.
         *
         * @since 1.4.2
         *
         * @param int $id Form ID.
         *
         * @return WPCF7_ContactForm|bool
         */
        public function get_form($id)
        {
        }
        /**
         * @inheritdoc
         */
        public function import_form()
        {
        }
        /**
         * Lookup and return the placeholder or default value.
         *
         * @since 1.4.2
         *
         * @param object $field Field object.
         * @param string $type Type of the field.
         *
         * @return string
         */
        public function get_field_placeholder_default($field, $type = 'placeholder')
        {
        }
        /**
         * Get the field label.
         *
         * @since 1.4.2
         *
         * @param string $form Form data and settings.
         * @param string $type Field type.
         * @param string $name Field name.
         *
         * @return string
         */
        public function get_field_label($form, $type, $name = '')
        {
        }
        /**
         * @inheritdoc
         */
        public function get_smarttags($string, $fields)
        {
        }
        /**
         * Find Reply-To in headers if provided.
         *
         * @since 1.4.2
         *
         * @param string $headers CF7 email headers.
         * @param array  $fields List of fields.
         *
         * @return string
         */
        public function get_replyto($headers, $fields)
        {
        }
        /**
         * Sender information.
         *
         * @since 1.4.2
         *
         * @param string $sender Sender strings in "Name <email@example.com>" format.
         * @param array  $fields List of fields.
         *
         * @return bool|array
         */
        public function get_sender_details($sender, $fields)
        {
        }
    }
    /**
     * Ninja Forms Importer class.
     *
     * @package    WPForms
     * @author     WPForms
     * @since      1.4.2
     * @license    GPL-2.0+
     * @copyright  Copyright (c) 2017, WPForms LLC
     */
    class WPForms_Ninja_Forms extends \WPForms_Importer
    {
        /**
         * @inheritdoc
         */
        public function init()
        {
        }
        /**
         * Get ALL THE FORMS.
         *
         * @since 1.4.2
         *
         * @return NF_Database_Models_Form[]
         */
        public function get_forms()
        {
        }
        /**
         * @inheritdoc
         */
        public function get_form($id)
        {
        }
        /**
         * @inheritdoc
         */
        public function import_form()
        {
        }
        /**
         * Get the field label.
         *
         * @since 1.4.2
         *
         * @param array $field
         *
         * @return string
         */
        public function get_field_label($field)
        {
        }
        /**
         * @inheritdoc
         */
        public function get_smarttags($string, $fields)
        {
        }
    }
    /**
     * Pirate Forms Importer class.
     *
     * @package    WPForms
     * @author     WPForms
     * @since      1.4.9
     * @license    GPL-2.0+
     * @copyright  Copyright (c) 2018, WPForms LLC
     */
    class WPForms_Pirate_Forms extends \WPForms_Importer
    {
        /**
         * Direct URL to download the latest version of WP Mail SMTP plugin from WP.org repo.
         *
         * @since 1.4.9
         *
         * @var string
         */
        const URL_SMTP_ZIP = 'https://downloads.wordpress.org/plugin/wp-mail-smtp.zip';
        /**
         * WP Mail SMTP plugin basename.
         *
         * @since 1.4.9
         *
         * @var string
         */
        const SLUG_SMTP_PLUGIN = 'wp-mail-smtp/wp_mail_smtp.php';
        /**
         * Default PirateForms smart tags.
         *
         * @var array
         */
        public static $tags = array('[email]');
        /**
         * Define required properties.
         *
         * @since 1.4.9
         */
        public function init()
        {
        }
        /**
         * Get ALL THE FORMS.
         * We need only ID's and names here.
         *
         * @since 1.4.9
         *
         * @return array
         */
        public function get_forms()
        {
        }
        /**
         * Pirate Forms has a default form, which doesn't have an ID.
         *
         * @since 1.4.9
         *
         * @return array
         */
        protected function get_default_forms()
        {
        }
        /**
         * Copy-paste from Pro plugin code, it doesn't have API to get this data easily.
         *
         * @since 1.4.9
         *
         * @return array
         */
        protected function get_pro_forms()
        {
        }
        /**
         * Get a single form options.
         *
         * @since 1.4.9
         *
         * @param int $id Form ID.
         *
         * @return array
         */
        public function get_form($id)
        {
        }
        /**
         * Import a single form using AJAX.
         *
         * @since 1.4.9
         */
        public function import_form()
        {
        }
        /**
         * Replace 3rd-party form provider tags/shortcodes with our own Smart Tags.
         * See: PirateForms_Util::get_magic_tags() for all PF tags.
         *
         * @since 1.4.9
         *
         * @param string $string String to process the smart tag in.
         * @param array  $fields List of fields for the form.
         *
         * @return string
         */
        public function get_smarttags($string, $fields)
        {
        }
        /**
         * Import SMTP settings from Default form only.
         *
         * @since 1.4.9
         *
         * @param int   $pf_form_id PirateForms form ID.
         * @param array $form WPForms form array.
         */
        protected function import_smtp($pf_form_id, $form)
        {
        }
        /**
         * Do all the voodoo to install and activate the WP Mail SMTP plugin behind the scene.
         * No user interaction is needed.
         *
         * @since 1.4.9
         *
         * @return bool
         */
        protected function install_activate_smtp()
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
         * Number of forms to show per page.
         *
         * @since 1.0.0
         *
         * @var int
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
         * Retrieve the table columns.
         *
         * @since 1.0.0
         *
         * @return array $columns Array of all the list table columns.
         */
        public function get_columns()
        {
        }
        /**
         * Render the checkbox column.
         *
         * @since 1.0.0
         *
         * @param WP_Post $form
         *
         * @return string
         */
        public function column_cb($form)
        {
        }
        /**
         * Renders the columns.
         *
         * @since 1.0.0
         *
         * @param WP_Post $form
         * @param string $column_name
         *
         * @return string
         */
        public function column_default($form, $column_name)
        {
        }
        /**
         * Render the form name column with action links.
         *
         * @since 1.0.0
         *
         * @param WP_Post $form
         *
         * @return string
         */
        public function column_form_name($form)
        {
        }
        /**
         * Define bulk actions available for our table listing.
         *
         * @since 1.0.0
         *
         * @return array
         */
        public function get_bulk_actions()
        {
        }
        /**
         * Message to be displayed when there are no forms.
         *
         * @since 1.0.0
         */
        public function no_items()
        {
        }
        /**
         * Fetch and setup the final data for the table.
         *
         * @since 1.0.0
         */
        public function prepare_items()
        {
        }
        /**
         * Extending the `display_rows()` method in order to add hooks.
         *
         * @since 1.5.6
         */
        public function display_rows()
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
         * Determine if the user is viewing the overview page, if so, party on.
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
        public function screen_options()
        {
        }
        /**
         * Forms table per-page screen option value.
         *
         * @since 1.0.0
         *
         * @param mixed  $status
         * @param string $option
         * @param mixed  $value
         *
         * @return mixed
         */
        public function screen_options_set($status, $option, $value)
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
        /**
         * Add admin action notices and process bulk actions.
         *
         * @since 1.5.7
         */
        public function notices()
        {
        }
        /**
         * Process the bulk table actions.
         *
         * @since 1.5.7
         */
        public function process_bulk_actions()
        {
        }
        /**
         * Delete forms.
         *
         * @since 1.5.7
         *
         * @param array $ids Form ids to delete.
         *
         * @return array List of deleted forms.
         */
        private function bulk_action_delete_forms($ids)
        {
        }
        /**
         * Duplicate forms.
         *
         * @since 1.5.7
         *
         * @param array $ids Form ids to duplicate.
         *
         * @return array List of duplicated forms.
         */
        private function bulk_action_duplicate_forms($ids)
        {
        }
        /**
         * Remove certain arguments from a query string that WordPress should always hide for users.
         *
         * @since 1.5.7
         *
         * @param array $removable_query_args An array of parameters to remove from the URL.
         *
         * @return array Extended/filtered array of parameters to remove from the URL.
         */
        public function removable_query_args($removable_query_args)
        {
        }
    }
    /**
     * Analytics integration class.
     *
     * @package    WPForms
     * @author     WPForms
     * @since      1.4.5
     * @license    GPL-2.0+
     * @copyright  Copyright (c) 2017, WPForms LLC
     */
    abstract class WPForms_Analytics_Integration
    {
        /**
         * Payment name.
         *
         * @since 1.0.0
         *
         * @var string
         */
        public $name;
        /**
         * Payment name in slug format.
         *
         * @since 1.0.0
         *
         * @var string
         */
        public $slug;
        /**
         * Load priority.
         *
         * @since 1.0.0
         *
         * @var int
         */
        public $priority = 10;
        /**
         * Payment icon.
         *
         * @since 1.0.0
         * @var string
         */
        public $icon;
        /**
         * Form data and settings.
         *
         * @since 1.1.0
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
         * Add to list of registered analytics.
         *
         * @since 1.0.0
         *
         * @param array $analytics
         *
         * @return array
         */
        public function register_analytics($analytics = array())
        {
        }
        /********************************************************
         * Builder methods - these methods _build_ the Builder. *
         ********************************************************/
        /**
         * Fetch and store the current form data when in the builder.
         *
         * @since 1.1.0
         */
        public function builder_form_data()
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
         * Display content inside the panel content area.
         *
         * @since 1.0.0
         */
        public function builder_content()
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
         * @var WPForms_Conditional_Logic_Core
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
         *
         * @param array $args Data needed for a block to be generated properly.
         * @param bool  $echo Whether to return or print. Default: print.
         *
         * @return string
         */
        public function builder_block($args = array(), $echo = \true)
        {
        }
        /**
         * Alias method for backwards compatibility.
         *
         * @since 1.1.0
         * @deprecated 1.3.8 Use wpforms_conditional_logic()->builder_block() instead.
         *
         * @param array $args Data needed for a block to be generated properly.
         * @param bool  $echo Whether to return or print. Default: print.
         *
         * @return string
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
         *
         * @param array $fields       List of fields with data and settings.
         * @param array $form_data    Form data and settings.
         * @param array $conditionals List of conditionals.
         *
         * @return bool
         */
        public function process($fields, $form_data, $conditionals)
        {
        }
        /**
         * Alias function for backwards compatibility.
         *
         * @since 1.0.0
         *
         * @param array $fields       List of fields with data and settings.
         * @param array $form_data    Form data and settings.
         * @param array $conditionals List of conditionals.
         *
         * @return bool
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
         * Contains information for multi-page forms.
         *
         * Forms that do not contain pages return false, otherwise returns an array
         * that contains the number of total pages and page counter used when
         * displaying pagebreak fields.
         *
         * @since 1.3.7
         *
         * @var array
         */
        public $pages = \false;
        /**
         * Contains a form confirmation message.
         *
         * @since 1.4.8
         * @todo Remove in favor of \WPForms_Process::$confirmation_message().
         *
         * @var string
         */
        public $confirmation_message = '';
        /**
         * If the active form confirmation should auto scroll.
         *
         * @since 1.4.9
         *
         * @var bool
         */
        public $confirmation_message_scroll = \false;
        /**
         * Primary class constructor.
         *
         * @since 1.0.0
         */
        public function __construct()
        {
        }
        /**
         * Get the amp-state ID for a given form.
         *
         * @param int $form_id Form ID.
         * @return string State ID.
         */
        protected function get_form_amp_state_id($form_id)
        {
        }
        /**
         * Disable AMP if query param is detected.
         *
         * This allows the full form to be accessible for Pro users or sites
         * that do not have SSL.
         *
         * @since 1.5.3
         *
         * @param bool $skip Skip AMP mode, display full post.
         *
         * @return bool
         */
        public function amp_skip_post($skip)
        {
        }
        /**
         * Primary function to render a form on the frontend.
         *
         * @since 1.0.0
         *
         * @param int  $id Form ID.
         * @param bool $title Whether to display form title.
         * @param bool $description Whether to display form description.
         */
        public function output($id, $title = \false, $description = \false)
        {
        }
        /**
         * Display form confirmation message.
         *
         * @since 1.0.0
         *
         * @param array $form_data Form data and settings.
         * @param array $fields    Sanitized field data.
         * @param int   $entry_id  Entry id.
         */
        public function confirmation($form_data, $fields = array(), $entry_id = 0)
        {
        }
        /**
         * Form head area, for displaying form title and description if enabled.
         *
         * @since 1.0.0
         *
         * @param array $form_data   Form data and settings.
         * @param null  $deprecated  Deprecated in v1.3.7, previously was $form object.
         * @param bool  $title       Whether to display form title.
         * @param bool  $description Whether to display form description.
         * @param array $errors      List of all errors filled in WPForms_Process::process().
         */
        public function head($form_data, $deprecated, $title, $description, $errors)
        {
        }
        /**
         * Form field area.
         *
         * @since 1.0.0
         *
         * @param array $form_data   Form data and settings.
         * @param null  $deprecated  Deprecated in v1.3.7, previously was $form object.
         * @param bool  $title       Whether to display form title.
         * @param bool  $description Whether to display form description.
         * @param array $errors      List of all errors filled in WPForms_Process::process().
         */
        public function fields($form_data, $deprecated, $title, $description, $errors)
        {
        }
        /**
         * Return base attributes for a specific field. This is deprecated and
         * exists for backwards-compatibility purposes. Use field properties instead.
         *
         * @since 1.3.7
         *
         * @param array $field     Field data and settings.
         * @param array $form_data Form data and settings.
         *
         * @return array
         */
        public function get_field_attributes($field, $form_data)
        {
        }
        /**
         * Return base properties for a specific field.
         *
         * @since 1.3.7
         *
         * @param array $field      Field data and settings.
         * @param array $form_data  Form data and settings.
         * @param array $attributes List of field attributes.
         *
         * @return array
         */
        public function get_field_properties($field, $form_data, $attributes = array())
        {
        }
        /**
         * Display the opening container markup for each field.
         *
         * @since 1.3.7
         *
         * @param array $field     Field data and settings.
         * @param array $form_data Form data and settings.
         */
        public function field_container_open($field, $form_data)
        {
        }
        /**
         * Display the label for each field.
         *
         * @since 1.3.7
         *
         * @param array $field     Field data and settings.
         * @param array $form_data Form data and settings.
         */
        public function field_label($field, $form_data)
        {
        }
        /**
         * Display any errors for each field.
         *
         * @since 1.3.7
         *
         * @param array $field     Field data and settings.
         * @param array $form_data Form data and settings.
         */
        public function field_error($field, $form_data)
        {
        }
        /**
         * Display the description for each field.
         *
         * @since 1.3.7
         *
         * @param array $field     Field data and settings.
         * @param array $form_data Form data and settings.
         */
        public function field_description($field, $form_data)
        {
        }
        /**
         * Display the closing container markup for each field.
         *
         * @since 1.3.7
         *
         * @param array $field     Field data and settings.
         * @param array $form_data Form data and settings.
         */
        public function field_container_close($field, $form_data)
        {
        }
        /**
         * Anti-spam honeypot output if configured.
         *
         * @since 1.0.0
         *
         * @param array $form_data   Form data and settings.
         * @param null  $deprecated  Deprecated in v1.3.7, previously was $form object.
         * @param bool  $title       Whether to display form title.
         * @param bool  $description Whether to display form description.
         * @param array $errors      List of all errors filled in WPForms_Process::process().
         */
        public function honeypot($form_data, $deprecated, $title, $description, $errors)
        {
        }
        /**
         * Google reCAPTCHA output if configured.
         *
         * @since 1.0.0
         *
         * @param array $form_data   Form data and settings.
         * @param null  $deprecated  Deprecated in v1.3.7, previously was $form object.
         * @param bool  $title       Whether to display form title.
         * @param bool  $description Whether to display form description.
         * @param array $errors      List of all errors filled in WPForms_Process::process().
         */
        public function recaptcha($form_data, $deprecated, $title, $description, $errors)
        {
        }
        /**
         * Form footer area.
         *
         * @since 1.0.0
         *
         * @param array $form_data   Form data and settings.
         * @param null  $deprecated  Deprecated in v1.3.7, previously was $form object.
         * @param bool  $title       Whether to display form title.
         * @param bool  $description Whether to display form description.
         * @param array $errors      List of all errors filled in WPForms_Process::process().
         */
        public function foot($form_data, $deprecated, $title, $description, $errors)
        {
        }
        /**
         * Display form error.
         *
         * @since 1.5.3
         *
         * @param string $type  Error type.
         * @param string $error Error text.
         */
        public function form_error($type, $error)
        {
        }
        /**
         * Determine if we should load assets globally.
         * If false assets will load conditionally (default).
         *
         * @since 1.2.4
         *
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
         * Google reCAPTCHA no-conflict mode.
         *
         * When enabled in the WPForms settings, forcefully remove all other
         * reCAPTCHA enqueues to prevent conflicts. Filter can be used to target
         * specific pages, etc.
         *
         * @since 1.4.5
         */
        public function recaptcha_noconflict()
        {
        }
        /**
         * Shortcode wrapper for the outputting a form.
         *
         * @since 1.0.0
         *
         * @param array $atts Shortcode attributes provided by a user.
         *
         * @return string
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
         *
         * @param boolean $network_wide
         */
        public function install($network_wide = \false)
        {
        }
        /**
         * Runs manual install.
         *
         * @since 1.5.4.2
         *
         * @param bool $silent Silent install, disables welcome page.
         */
        public function manual($silent = \false)
        {
        }
        /**
         * Watch for delayed install procedure from WPForms admin.
         *
         * @since 1.5.4.2
         */
        public function admin()
        {
        }
        /**
         * Run the actual installer.
         *
         * @since 1.5.4.2
         */
        protected function run()
        {
        }
        /**
         * When a new site is created in multisite, see if we are network activated,
         * and if so run the installer.
         *
         * @since 1.3.0
         *
         * @param int    $blog_id Blog ID.
         * @param int    $user_id User ID.
         * @param string $domain  Site domain.
         * @param string $path    Site path.
         * @param int    $site_id Site ID. Only relevant on multi-network installs.
         * @param array  $meta    Meta data. Used to set initial site options.
         */
        public function new_multisite_blog($blog_id, $user_id, $domain, $path, $site_id, $meta)
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
         *
         * @param string $return Type of data to return.
         *
         * @return string|array
         */
        public function get($return = 'array')
        {
        }
        /**
         * Process and parse smart tags.
         *
         * @since 1.0.0
         *
         * @param string $content      The string to preprocess.
         * @param array $form_data     Form data and settings.
         * @param string|array $fields Form fields.
         * @param int|string $entry_id Entry ID.
         *
         * @return string
         */
        public function process($content, $form_data, $fields = '', $entry_id = '')
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
        public function __construct()
        {
        }
        /**
         * Outputs the HTML for this widget.
         *
         * @since 1.0.2
         *
         * @param array $args An array of standard parameters for widgets in this theme.
         * @param array $instance An array of settings for this widget instance.
         */
        public function widget($args, $instance)
        {
        }
        /**
         * Deals with the settings when they are saved by the admin. Here is
         * where any validation should be dealt with.
         *
         * @since 1.0.2
         *
         * @param array $new_instance An array of new settings as submitted by the admin.
         * @param array $old_instance An array of the previous settings.
         *
         * @return array The validated and (if necessary) amended settings
         */
        public function update($new_instance, $old_instance)
        {
        }
        /**
         * Displays the form for this widget on the Widgets page of the WP Admin area.
         *
         * @since 1.0.2
         *
         * @param array $instance An array of the current settings for this widget.
         *
         * @return void
         */
        public function form($instance)
        {
        }
    }
    /**
     * Emails.
     *
     * This class handles all (notification) emails sent by WPForms.
     *
     * Heavily influenced by the great AffiliateWP plugin by Pippin Williamson.
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
         *
         * @var string
         */
        private $from_address;
        /**
         * Holds the from name.
         *
         * @since 1.1.3
         *
         * @var string
         */
        private $from_name;
        /**
         * Holds the reply-to address.
         *
         * @since 1.1.3
         *
         * @var string
         */
        private $reply_to = \false;
        /**
         * Holds the carbon copy addresses.
         *
         * @since 1.3.1
         *
         * @var string
         */
        private $cc = \false;
        /**
         * Holds the email content type.
         *
         * @since 1.1.3
         *
         * @var string
         */
        private $content_type;
        /**
         * Holds the email headers.
         *
         * @since 1.1.3
         *
         * @var string
         */
        private $headers;
        /**
         * Whether to send email in HTML.
         *
         * @since 1.1.3
         *
         * @var bool
         */
        private $html = \true;
        /**
         * The email template to use.
         *
         * @since 1.1.3
         *
         * @var string
         */
        private $template;
        /**
         * Form data and settings.
         *
         * @since 1.1.3
         *
         * @var array
         */
        public $form_data = array();
        /**
         * Fields, formatted, and sanitized.
         *
         * @since 1.1.3
         *
         * @var array
         */
        public $fields = array();
        /**
         * Entry ID.
         *
         * @since 1.2.3
         *
         * @var int
         */
        public $entry_id = '';
        /**
         * Notification ID that is currently being processed.
         *
         * @since 1.5.7
         *
         * @var int
         */
        public $notification_id = '';
        /**
         * Get things going.
         *
         * @since 1.1.3
         */
        public function __construct()
        {
        }
        /**
         * Set a property.
         *
         * @since 1.1.3
         *
         * @param string $key   Object property key.
         * @param mixed  $value Object property value.
         */
        public function __set($key, $value)
        {
        }
        /**
         * Get the email from name.
         *
         * @since 1.1.3
         *
         * @return string The email from name
         */
        public function get_from_name()
        {
        }
        /**
         * Get the email from address.
         *
         * @since 1.1.3
         *
         * @return string The email from address.
         */
        public function get_from_address()
        {
        }
        /**
         * Get the email reply-to.
         *
         * @since 1.1.3
         *
         * @return string The email reply-to address.
         */
        public function get_reply_to()
        {
        }
        /**
         * Get the email carbon copy addresses.
         *
         * @since 1.3.1
         *
         * @return string The email reply-to address.
         */
        public function get_cc()
        {
        }
        /**
         * Get the email content type.
         *
         * @since 1.1.3
         *
         * @return string The email content type.
         */
        public function get_content_type()
        {
        }
        /**
         * Get the email headers.
         *
         * @since 1.1.3
         *
         * @return string The email headers.
         */
        public function get_headers()
        {
        }
        /**
         * Build the email.
         *
         * @since 1.1.3
         *
         * @param string $message The email message.
         *
         * @return string
         */
        public function build_email($message)
        {
        }
        /**
         * Send the email.
         *
         * @since 1.1.3
         *
         * @param string $to The To address.
         * @param string $subject The subject line of the email.
         * @param string $message The body of the email.
         * @param array  $attachments Attachments to the email.
         *
         * @return bool
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
         *
         * @param string $message Text to convert.
         *
         * @return string
         */
        public function text_to_html($message)
        {
        }
        /**
         * Processes a smart tag.
         *
         * @since 1.1.3
         *
         * @param string $string     String that may contain tags.
         * @param bool   $sanitize   Toggle to maybe sanitize.
         * @param bool   $linebreaks Toggle to process linebreaks.
         *
         * @return string
         */
        public function process_tag($string = '', $sanitize = \true, $linebreaks = \false)
        {
        }
        /**
         * Process the all fields smart tag if present.
         *
         * @since 1.1.3
         *
         * @param bool $html Toggle to use HTML or plaintext.
         *
         * @return string
         */
        public function wpforms_html_field_value($html = \true)
        {
        }
        /**
         * Email kill switch if needed.
         *
         * @since 1.1.3
         *
         * @return bool
         */
        public function is_email_disabled()
        {
        }
        /**
         * Get the enabled email template.
         *
         * @since 1.1.3
         *
         * @return string When filtering return 'none' to switch to text/plain email.
         */
        public function get_template()
        {
        }
        /**
         * Retrieves a template part. Taken from bbPress.
         *
         * @since 1.1.3
         *
         * @param string $slug Template file slug.
         * @param string $name Optional. Default null.
         * @param bool   $load Maybe load.
         *
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
         * Taken from bbPress.
         *
         * @since 1.1.3
         *
         * @param string|array $template_names Template file(s) to search for, in order.
         * @param bool         $load           If true the template file will be loaded if it is found.
         * @param bool         $require_once   Whether to require_once or require. Default true.
         *                                     Has no effect if $load is false.
         *
         * @return string The template filename if one is located.
         */
        public function locate_template($template_names, $load = \false, $require_once = \true)
        {
        }
        /**
         * Returns a list of paths to check for template locations
         *
         * @since 1.1.3
         *
         * @return array
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
         *
         * @var string
         */
        public $name;
        /**
         * Type of the field, eg "textarea".
         *
         * @since 1.0.0
         *
         * @var string
         */
        public $type;
        /**
         * Font Awesome Icon used for the editor button, eg "fa-list".
         *
         * @since 1.0.0
         *
         * @var mixed
         */
        public $icon = \false;
        /**
         * Priority order the field button should show inside the "Add Fields" tab.
         *
         * @since 1.0.0
         *
         * @var integer
         */
        public $order = 1;
        /**
         * Field group the field belongs to.
         *
         * @since 1.0.0
         *
         * @var string
         */
        public $group = 'standard';
        /**
         * Placeholder to hold default value(s) for some field types.
         *
         * @since 1.0.0
         *
         * @var mixed
         */
        public $defaults;
        /**
         * Current form ID in the admin builder.
         *
         * @since 1.1.1
         *
         * @var int|bool
         */
        public $form_id;
        /**
         * Current field ID.
         *
         * @since 1.5.6
         *
         * @var int
         */
        public $field_id;
        /**
         * Current form data.
         *
         * @since 1.1.1
         *
         * @var array
         */
        public $form_data;
        /**
         * Current field data.
         *
         * @since 1.5.6
         *
         * @var array
         */
        public $field_data;
        /**
         * Primary class constructor.
         *
         * @since 1.0.0
         *
         * @param bool $init Pass false to allow to shortcut the whole initialization, if needed.
         */
        public function __construct($init = \true)
        {
        }
        /**
         * All systems go. Used by subclasses. Required.
         *
         * @since 1.0.0
         * @since 1.5.0 Converted to abstract method, as it's required for all fields.
         */
        public abstract function init();
        /**
         * Prefill field value with either fallback or dynamic data.
         * Needs to be public (although internal) to be used in WordPress hooks.
         *
         * @since 1.5.0
         *
         * @param array $properties Field properties.
         * @param array $field      Current field specific data.
         * @param array $form_data  Prepared form data/settings.
         *
         * @return array Modified field properties.
         */
        public function field_prefill_value_property($properties, $field, $form_data)
        {
        }
        /**
         * As we are processing user submitted data - ignore all admin-defined defaults.
         * Preprocess choices-related fields only.
         *
         * @since 1.5.0
         *
         * @param array $field Field data and settings.
         * @param array $properties Properties we are modifying.
         */
        protected function field_prefill_remove_choices_defaults($field, &$properties)
        {
        }
        /**
         * Whether current field can be populated dynamically.
         *
         * @since 1.5.0
         *
         * @param array $properties Field properties.
         * @param array $field      Current field specific data.
         *
         * @return bool
         */
        public function is_dynamic_population_allowed($properties, $field)
        {
        }
        /**
         * Prefill the field value with a dynamic value, that we get from $_GET.
         * The pattern is: wpf4_12_primary, where:
         *      4 - form_id,
         *      12 - field_id,
         *      first - input key.
         * As 'primary' is our default input key, "wpf4_12_primary" and "wpf4_12" are the same.
         *
         * @since 1.5.0
         *
         * @param array $properties Field properties.
         * @param array $field      Current field specific data.
         *
         * @return array Modified field properties.
         */
        protected function field_prefill_value_property_dynamic($properties, $field)
        {
        }
        /**
         * Get the value, that is used to prefill via dynamic or fallback population.
         * Based on field data and current properties.
         *
         * @since 1.5.0
         *
         * @param string $raw_value  Value from a GET param, always a string.
         * @param string $input      Represent a subfield inside the field. May be empty.
         * @param array  $properties Field properties.
         * @param array  $field      Current field specific data.
         *
         * @return array Modified field properties.
         */
        protected function get_field_populated_single_property_value($raw_value, $input, $properties, $field)
        {
        }
        /**
         * Whether current field can be populated dynamically.
         *
         * @since 1.5.0
         *
         * @param array $properties Field properties.
         * @param array $field      Current field specific data.
         *
         * @return bool
         */
        public function is_fallback_population_allowed($properties, $field)
        {
        }
        /**
         * Prefill the field value with a fallback value from form submission (in case of JS validation failed), that we get from $_POST.
         *
         * @since 1.5.0
         *
         * @param array $properties Field properties.
         * @param array $field      Current field specific data.
         *
         * @return array Modified field properties.
         */
        protected function field_prefill_value_property_fallback($properties, $field)
        {
        }
        /**
         * Create the button for the 'Add Fields' tab, inside the form editor.
         *
         * @since 1.0.0
         *
         * @param array $fields List of form fields with their data.
         *
         * @return array
         */
        public function field_button($fields)
        {
        }
        /**
         * Creates the field options panel. Used by subclasses.
         *
         * @since 1.0.0
         * @since 1.5.0 Converted to abstract method, as it's required for all fields.
         *
         * @param array $field Field data and settings.
         */
        public abstract function field_options($field);
        /**
         * Creates the field preview. Used by subclasses.
         *
         * @since 1.0.0
         * @since 1.5.0 Converted to abstract method, as it's required for all fields.
         *
         * @param array $field Field data and settings.
         */
        public abstract function field_preview($field);
        /**
         * Helper function to create field option elements.
         *
         * Field option elements are pieces that help create a field option.
         * They are used to quickly build field options.
         *
         * @since 1.0.0
         *
         * @param string  $option Field option to render.
         * @param array   $field  Field data and settings.
         * @param array   $args   Field preview arguments.
         * @param boolean $echo   Print or return the value. Print by default.
         *
         * @return mixed echo or return string
         */
        public function field_element($option, $field, $args = array(), $echo = \true)
        {
        }
        /**
         * Helper function to create common field options that are used frequently.
         *
         * @since 1.0.0
         *
         * @param string  $option Field option to render.
         * @param array   $field  Field data and settings.
         * @param array   $args   Field preview arguments.
         * @param boolean $echo   Print or return the value. Print by default.
         *
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
         * @since 1.5.0 Added support for <select> HTML tag for choices.
         *
         * @param string  $option Field option to render.
         * @param array   $field  Field data and settings.
         * @param array   $args   Field preview arguments.
         * @param boolean $echo   Print or return the value. Print by default.
         *
         * @return mixed Print or return a string.
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
         * @since 1.5.0 Converted to abstract method, as it's required for all fields.
         *
         * @param array $field      Field data and settings.
         * @param array $field_atts Field attributes.
         * @param array $form_data  Form data and settings.
         */
        public abstract function field_display($field, $field_atts, $form_data);
        /**
         * Display field input errors if present.
         *
         * @since 1.3.7
         *
         * @param string $key   Input key.
         * @param array  $field Field data and settings.
         */
        public function field_display_error($key, $field)
        {
        }
        /**
         * Display field input sublabel if present.
         *
         * @since 1.3.7
         *
         * @param string $key      Input key.
         * @param string $position Sublabel position.
         * @param array  $field    Field data and settings.
         */
        public function field_display_sublabel($key, $position, $field)
        {
        }
        /**
         * Validates field on form submit.
         *
         * @since 1.0.0
         *
         * @param int   $field_id     Field ID.
         * @param mixed $field_submit Field value that was submitted.
         * @param array $form_data    Form data and settings.
         */
        public function validate($field_id, $field_submit, $form_data)
        {
        }
        /**
         * Formats and sanitizes field.
         *
         * @since 1.0.0
         *
         * @param int   $field_id     Field ID.
         * @param mixed $field_submit Field value that was submitted.
         * @param array $form_data    Form data and settings.
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
         * Return images, if any, for HTML supported values.
         *
         * @since 1.4.5
         *
         * @param string $value     Field value.
         * @param array  $field     Field settings.
         * @param array  $form_data Form data and settings.
         * @param string $context   Value display context.
         *
         * @return string
         */
        public function field_html_value($value, $field, $form_data = array(), $context = '')
        {
        }
        /**
         * Define additional field properties.
         *
         * @since 1.4.5
         *
         * @param array $properties Field properties.
         * @param array $field      Field settings.
         * @param array $form_data  Form data and settings.
         *
         * @return array
         */
        public function field_properties($properties, $field, $form_data)
        {
        }
        /**
         * Field options panel inside the builder.
         *
         * @since 1.0.0
         *
         * @param array $field Field settings.
         */
        public function field_options($field)
        {
        }
        /**
         * Field preview inside the builder.
         *
         * @since 1.0.0
         *
         * @param array $field Field settings.
         */
        public function field_preview($field)
        {
        }
        /**
         * Field display on the form front-end.
         *
         * @since 1.0.0
         *
         * @param array $field      Field settings.
         * @param array $deprecated Deprecated array.
         * @param array $form_data  Form data and settings.
         */
        public function field_display($field, $deprecated, $form_data)
        {
        }
        /**
         * Validates field on form submit.
         *
         * @since 1.5.2
         *
         * @param int   $field_id       field ID.
         * @param array $field_submit   submitted data.
         * @param array $form_data      form data.
         */
        public function validate($field_id, $field_submit, $form_data)
        {
        }
        /**
         * Formats and sanitizes field.
         *
         * @since 1.0.2
         *
         * @param int   $field_id     Field ID.
         * @param array $field_submit Submitted form data.
         * @param array $form_data    Form data and settings.
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
         *
         * @param string $class
         * @param array $field
         *
         * @return string
         */
        public function field_option_class($class, $field)
        {
        }
        /**
         * Field options panel inside the builder.
         *
         * @since 1.0.0
         *
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
         * @param int   $field_id     Field ID.
         * @param mixed $field_submit Field value that was submitted.
         * @param array $form_data    Form data and settings.
         */
        public function format($field_id, $field_submit, $form_data)
        {
        }
        /**
         * Validates field on form submit.
         *
         * @param int   $field_id     Field ID.
         * @param mixed $field_submit Field value that was submitted.
         * @param array $form_data    Form data and settings.
         */
        public function validate($field_id, $field_submit, $form_data)
        {
        }
    }
    /**
     * GDPR Checkbox field.
     *
     * @package    WPForms
     * @author     WPForms
     * @since      1.4.6
     * @license    GPL-2.0+
     * @copyright  Copyright (c) 2018, WPForms LLC
     */
    class WPForms_Field_GDPR_Checkbox extends \WPForms_Field
    {
        /**
         * Primary class constructor.
         *
         * @since 1.4.6
         */
        public function init()
        {
        }
        /**
         * Field should default to being required.
         *
         * @since 1.4.6
         *
         * @param bool  $required Required status, true is required.
         * @param array $field    Field settings.
         *
         * @return bool
         */
        public function field_default_required($required, $field)
        {
        }
        /**
         * Define additional field properties.
         *
         * @since 1.4.6
         *
         * @param array $properties Field properties.
         * @param array $field      Field settings.
         * @param array $form_data  Form data and settings.
         *
         * @return array
         */
        public function field_properties($properties, $field, $form_data)
        {
        }
        /**
         * @inheritdoc
         */
        public function is_dynamic_population_allowed($properties, $field)
        {
        }
        /**
         * Field options panel inside the builder.
         *
         * @since 1.4.6
         *
         * @param array $field Field settings.
         */
        public function field_options($field)
        {
        }
        /**
         * Field preview inside the builder.
         *
         * @since 1.4.6
         *
         * @param array $field Field settings.
         */
        public function field_preview($field)
        {
        }
        /**
         * Field display on the form front-end.
         *
         * @since 1.4.6
         *
         * @param array $field      Field settings.
         * @param array $deprecated Deprecated array.
         * @param array $form_data  Form data and settings.
         */
        public function field_display($field, $deprecated, $form_data)
        {
        }
        /**
         * Formats and sanitizes field.
         *
         * @since 1.4.6
         *
         * @param int   $field_id     Field ID.
         * @param array $field_submit Submitted form data.
         * @param array $form_data    Form data and settings.
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
         *
         * @param array $properties Field properties.
         * @param array $field      Field data and settings.
         * @param array $form_data  Form data and settings.
         *
         * @return array
         */
        public function field_properties($properties, $field, $form_data)
        {
        }
        /**
         * Name fields should default to being required.
         *
         * @since 1.0.8
         *
         * @param bool  $required
         * @param array $field
         *
         * @return bool
         */
        public function default_required($required, $field)
        {
        }
        /**
         * Field options panel inside the builder.
         *
         * @since 1.0.0
         *
         * @param array $field
         */
        public function field_options($field)
        {
        }
        /**
         * Field preview inside the builder.
         *
         * @since 1.0.0
         *
         * @param array $field Field information.
         */
        public function field_preview($field)
        {
        }
        /**
         * Field display on the form front-end.
         *
         * @since 1.0.0
         *
         * @param array $field Field information.
         * @param array $deprecated Deprecated parameter, not used anymore.
         * @param array $form_data Form data and settings.
         */
        public function field_display($field, $deprecated, $form_data)
        {
        }
        /**
         * Validates field on form submit.
         *
         * @since 1.0.0
         *
         * @param int   $field_id
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
         *
         * @param int   $field_id
         * @param array $field_submit
         * @param array $form_data
         */
        public function format($field_id, $field_submit, $form_data)
        {
        }
    }
    /**
     * Number Slider field.
     *
     * @since 1.5.7
     */
    class WPForms_Field_Number_Slider extends \WPForms_Field
    {
        /**
         * Default minimum value of the field.
         *
         * @since 1.5.7
         */
        const SLIDER_MIN = 0;
        /**
         * Default maximum value of the field.
         *
         * @since 1.5.7
         */
        const SLIDER_MAX = 10;
        /**
         * Default step value of the field.
         *
         * @since 1.5.7
         */
        const SLIDER_STEP = 1;
        /**
         * Primary class constructor.
         *
         * @since 1.5.7
         */
        public function init()
        {
        }
        /**
         * Customize format for HTML email notifications.
         *
         * @since 1.5.7
         *
         * @param string $val       Field value.
         * @param array  $field     Field settings.
         * @param array  $form_data Form data and settings.
         * @param string $context   Value display context.
         *
         * @return string
         */
        public function html_email_value($val, $field, $form_data = array(), $context = '')
        {
        }
        /**
         * Field options panel inside the builder.
         *
         * @since 1.5.7
         *
         * @param array $field Field settings.
         */
        public function field_options($field)
        {
        }
        /**
         * Field preview inside the builder.
         *
         * @since 1.5.7
         *
         * @param array $field Field data.
         */
        public function field_preview($field)
        {
        }
        /**
         * Field display on the form front-end.
         *
         * @since 1.5.7
         *
         * @param array $field      Field data and settings.
         * @param array $deprecated Deprecated field attributes. Use $field['properties'] instead.
         * @param array $form_data  Form data and settings.
         */
        public function field_display($field, $deprecated, $form_data)
        {
        }
        /**
         * Validate field on form submit.
         *
         * @since 1.5.7
         *
         * @param int              $field_id     Field ID.
         * @param int|float|string $field_submit Submitted field value.
         * @param array            $form_data    Form data and settings.
         */
        public function validate($field_id, $field_submit, $form_data)
        {
        }
        /**
         * Format and sanitize field.
         *
         * @since 1.5.7
         *
         * @param int              $field_id     Field ID.
         * @param int|string|float $field_submit Submitted field value.
         * @param array            $form_data    Form data and settings.
         */
        public function format($field_id, $field_submit, $form_data)
        {
        }
        /**
         * Sanitize the value.
         *
         * @since 1.5.7
         *
         * @param string $value The number field submitted value.
         *
         * @return float|int|string
         */
        private function sanitize_value($value)
        {
        }
    }
    /**
     * Number text field.
     *
     * @since 1.0.0
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
         *
         * @param array $field Field data.
         */
        public function field_options($field)
        {
        }
        /**
         * Field preview inside the builder.
         *
         * @since 1.0.0
         *
         * @param array $field Field data.
         */
        public function field_preview($field)
        {
        }
        /**
         * Field display on the form front-end.
         *
         * @since 1.0.0
         *
         * @param array $field      Field data.
         * @param array $deprecated Deprecated, not used.
         * @param array $form_data  Form data.
         */
        public function field_display($field, $deprecated, $form_data)
        {
        }
        /**
         * Validates field on form submit.
         *
         * @since 1.0.0
         *
         * @param int    $field_id     Field id.
         * @param string $field_submit Submitted value.
         * @param array  $form_data    Form data.
         */
        public function validate($field_id, $field_submit, $form_data)
        {
        }
        /**
         * Formats and sanitizes field.
         *
         * @since 1.3.5
         *
         * @param int    $field_id     Field id.
         * @param string $field_submit Submitted value.
         * @param array  $form_data    Form data.
         */
        public function format($field_id, $field_submit, $form_data)
        {
        }
        /**
         * Sanitize the value.
         *
         * @since 1.5.7
         *
         * @param string $value The number field submitted value.
         *
         * @return float|int|string
         */
        private function sanitize_value($value)
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
         * Return images, if any, for HTML supported values.
         *
         * @since 1.4.5
         *
         * @param string $value     Field value.
         * @param array  $field     Field settings.
         * @param array  $form_data Form data and settings.
         * @param string $context   Value display context.
         *
         * @return string
         */
        public function field_html_value($value, $field, $form_data = array(), $context = '')
        {
        }
        /**
         * Define additional field properties.
         *
         * @since 1.4.5
         *
         * @param array $properties Field properties.
         * @param array $field      Field settings.
         * @param array $form_data  Form data and settings.
         *
         * @return array
         */
        public function field_properties($properties, $field, $form_data)
        {
        }
        /**
         * Field options panel inside the builder.
         *
         * @since 1.0.0
         *
         * @param array $field Field settings.
         */
        public function field_options($field)
        {
        }
        /**
         * Field preview inside the builder.
         *
         * @since 1.0.0
         *
         * @param array $field Field settings.
         */
        public function field_preview($field)
        {
        }
        /**
         * Field display on the form front-end.
         *
         * @since 1.0.0
         *
         * @param array $field      Field settings.
         * @param array $deprecated Deprecated array.
         * @param array $form_data  Form data and settings.
         */
        public function field_display($field, $deprecated, $form_data)
        {
        }
        /**
         * Formats and sanitizes field.
         *
         * @since 1.0.2
         *
         * @param int    $field_id     Field ID.
         * @param string $field_submit Submitted form data.
         * @param array  $form_data    Form data and settings.
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
         * Define additional field properties.
         *
         * @since 1.5.0
         *
         * @param array $properties Field properties.
         * @param array $field      Field settings.
         * @param array $form_data  Form data and settings.
         *
         * @return array
         */
        public function field_properties($properties, $field, $form_data)
        {
        }
        /**
         * Field options panel inside the builder.
         *
         * @since 1.0.0
         *
         * @param array $field Field settings.
         */
        public function field_options($field)
        {
        }
        /**
         * Field preview inside the builder.
         *
         * @since 1.0.0
         *
         * @param array $field Field settings.
         */
        public function field_preview($field)
        {
        }
        /**
         * Field display on the form front-end.
         *
         * @since 1.0.0
         * @since 1.5.0 Converted to a new format, where all the data are taken not from $deprecated, but field properties.
         *
         * @param array $field      Field data and settings.
         * @param array $deprecated Deprecated array of field attributes.
         * @param array $form_data  Form data and settings.
         */
        public function field_display($field, $deprecated, $form_data)
        {
        }
        /**
         * Formats and sanitizes field.
         *
         * @since 1.0.2
         *
         * @param int    $field_id     Field ID.
         * @param string $field_submit Submitted field value (selected option).
         * @param array  $form_data    Form data and settings.
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
         * Convert mask formatted for jquery.inputmask into  the format used by amp-inputmask.
         *
         * Note that amp-inputmask does not yet support all of the options that jquery.inputmask provides.
         * In particular, amp-inputmask doesn't provides:
         *  - Upper-alphabetical mask.
         *  - Upper-alphanumeric mask.
         *  - Advanced Input Masks with arbitrary repeating groups.
         *
         * @link https://amp.dev/documentation/components/amp-inputmask
         * @link https://wpforms.com/docs/how-to-use-custom-input-masks/
         *
         * @param string $mask Mask formatted for jquery.inputmask.
         * @return array {
         *     Mask and placeholder.
         *
         *     @type string $mask        Mask for amp-inputmask.
         *     @type string $placeholder Placeholder derived from mask if one is not supplied.
         * }
         */
        protected function convert_mask_to_amp_inputmask($mask)
        {
        }
        /**
         * Define additional field properties.
         *
         * @since 1.4.5
         *
         * @param array $properties Field properties.
         * @param array $field      Field settings.
         * @param array $form_data  Form data and settings.
         *
         * @return array
         */
        public function field_properties($properties, $field, $form_data)
        {
        }
        /**
         * Field options panel inside the builder.
         *
         * @since 1.0.0
         *
         * @param array $field Field settings.
         */
        public function field_options($field)
        {
        }
        /**
         * Field preview inside the builder.
         *
         * @since 1.0.0
         *
         * @param array $field Field settings.
         */
        public function field_preview($field)
        {
        }
        /**
         * Field display on the form front-end.
         *
         * @since 1.0.0
         *
         * @param array $field      Field settings.
         * @param array $deprecated Deprecated.
         * @param array $form_data  Form data and settings.
         */
        public function field_display($field, $deprecated, $form_data)
        {
        }
        /**
         * Enqueue frontend limit option js.
         *
         * @since 1.5.6
         *
         * @param array $forms Forms on the current page.
         */
        public function frontend_js($forms)
        {
        }
        /**
         * Formats and sanitizes field.
         *
         * @since 1.5.6
         *
         * @param int   $field_id     Field ID.
         * @param mixed $field_submit Field value that was submitted.
         * @param array $form_data    Form data and settings.
         */
        public function format($field_id, $field_submit, $form_data)
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
         *
         * @param array $field Field data and settings.
         */
        public function field_options($field)
        {
        }
        /**
         * Field preview inside the builder.
         *
         * @since 1.0.0
         *
         * @param array $field Field data and settings.
         */
        public function field_preview($field)
        {
        }
        /**
         * Field display on the form front-end.
         *
         * @since 1.0.0
         *
         * @param array $field      Field data and settings.
         * @param array $deprecated Deprecated.
         * @param array $form_data  Form data and settings.
         */
        public function field_display($field, $deprecated, $form_data)
        {
        }
        /**
         * Enqueue frontend limit option js.
         *
         * @since 1.5.6
         *
         * @param array $forms Forms on the current page.
         */
        public function frontend_js($forms)
        {
        }
        /**
         * Formats and sanitizes field.
         *
         * @since 1.5.6
         *
         * @param int   $field_id     Field ID.
         * @param mixed $field_submit Field value that was submitted.
         * @param array $form_data    Form data and settings.
         */
        public function format($field_id, $field_submit, $form_data)
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
         * Provider addon version.
         *
         * @since 1.0.0
         *
         * @var string
         */
        protected $version;
        /**
         * Provider name.
         *
         * @since 1.0.0
         *
         * @var string
         */
        public $name;
        /**
         * Provider name in slug format.
         *
         * @since 1.0.0
         *
         * @var string
         */
        public $slug;
        /**
         * Load priority.
         *
         * @since 1.0.0
         *
         * @var int
         */
        public $priority = 10;
        /**
         * Holds the API connections.
         *
         * @since 1.0.0
         *
         * @var mixed
         */
        public $api = \false;
        /**
         * Service icon.
         *
         * @since 1.0.0
         *
         * @var string
         */
        public $icon;
        /**
         * Service icon.
         *
         * @since 1.2.3
         *
         * @var string
         */
        public $type;
        /**
         * Form data and settings.
         *
         * @since 1.2.3
         *
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
         *
         * @param array $providers Array of all active providers.
         *
         * @return array
         */
        public function register_provider($providers = array())
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
         *
         * @param array $fields    List of fields in a form.
         * @param array $entry     Submitted entry values.
         * @param array $form_data Form data and settings.
         * @param int   $entry_id  Saved entry ID.
         */
        public function process_entry($fields, $entry, $form_data, $entry_id)
        {
        }
        /**
         * Process conditional fields.
         *
         * @since 1.0.0
         *
         * @param array $fields     List of fields with their data and settings.
         * @param array $entry      Submitted entry values.
         * @param array $form_data  Form data and settings.
         * @param array $connection List of connection settings.
         *
         * @return bool
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
         *
         * @param object|bool $form
         * @param array $whitelist
         *
         * @return bool|array
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
         *
         * @param array $form_fields
         * @param string $form_field_type
         *
         * @return array
         */
        public function get_form_field_select($form_fields = array(), $form_field_type = '')
        {
        }
        /************************************************************************
         * API methods - these methods interact directly with the provider API. *
         ************************************************************************/
        /**
         * Authenticate with the provider API.
         *
         * @since 1.0.0
         *
         * @param array $data
         * @param string $form_id
         *
         * @return mixed id or error object
         */
        public function api_auth($data = array(), $form_id = '')
        {
        }
        /**
         * Establish connection object to provider API.
         *
         * @since 1.0.0
         *
         * @param string $account_id
         *
         * @return mixed array or error object
         */
        public function api_connect($account_id)
        {
        }
        /**
         * Retrieve provider account lists.
         *
         * @since 1.0.0
         *
         * @param string $connection_id
         * @param string $account_id
         *
         * @return mixed array or error object
         */
        public function api_lists($connection_id = '', $account_id = '')
        {
        }
        /**
         * Retrieve provider account list groups.
         *
         * @since 1.0.0
         *
         * @param string $connection_id
         * @param string $account_id
         * @param string $list_id
         *
         * @return mixed array or error object
         */
        public function api_groups($connection_id = '', $account_id = '', $list_id = '')
        {
        }
        /**
         * Retrieve provider account list fields.
         *
         * @since 1.0.0
         *
         * @param string $connection_id
         * @param string $account_id
         * @param string $list_id
         *
         * @return mixed array or error object
         */
        public function api_fields($connection_id = '', $account_id = '', $list_id = '')
        {
        }
        /*************************************************************************
         * Output methods - these methods generally return HTML for the builder. *
         *************************************************************************/
        /**
         * Connection HTML.
         *
         * This method compiles all the HTML necessary for a connection to a provider.
         *
         * @since 1.0.0
         *
         * @param string $connection_id
         * @param array $connection
         * @param mixed $form Form id or form data.
         *
         * @return string
         */
        public function output_connection($connection_id = '', $connection = array(), $form = '')
        {
        }
        /**
         * Connection header HTML.
         *
         * @since 1.0.0
         *
         * @param string $connection_id
         * @param array $connection
         *
         * @return string
         */
        public function output_connection_header($connection_id = '', $connection = array())
        {
        }
        /**
         * Provider account authorize fields HTML.
         *
         * @since 1.0.0
         *
         * @return mixed
         */
        public function output_auth()
        {
        }
        /**
         * Provider account select HTML.
         *
         * @since 1.0.0
         *
         * @param string $connection_id Unique connection ID.
         * @param array  $connection Array of connection data.
         *
         * @return string
         */
        public function output_accounts($connection_id = '', $connection = array())
        {
        }
        /**
         * Provider account lists HTML.
         *
         * @since 1.0.0
         *
         * @param string $connection_id
         * @param array $connection
         *
         * @return WP_Error|string
         */
        public function output_lists($connection_id = '', $connection = array())
        {
        }
        /**
         * Provider account list groups HTML.
         *
         * @since 1.0.0
         *
         * @param string $connection_id
         * @param array $connection
         *
         * @return string
         */
        public function output_groups($connection_id = '', $connection = array())
        {
        }
        /**
         * Provider account list fields HTML.
         *
         * @since 1.0.0
         *
         * @param string $connection_id
         * @param array $connection
         * @param mixed $form
         *
         * @return WP_Error|string
         */
        public function output_fields($connection_id = '', $connection = array(), $form = '')
        {
        }
        /**
         * Provider connection conditional options HTML
         *
         * @since 1.0.0
         *
         * @param string $connection_id
         * @param array $connection
         * @param string|array $form
         *
         * @return string
         */
        public function output_conditionals($connection_id = '', $connection = array(), $form = '')
        {
        }
        /**
         * Provider account list options HTML.
         *
         * @since 1.0.0
         *
         * @param string $connection_id
         * @param array $connection
         *
         * @return string
         */
        public function output_options($connection_id = '', $connection = array())
        {
        }
        /********************************************************
         * Builder methods - these methods _build_ the Builder. *
         ********************************************************/
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
        /*************************************************************************
         * Integrations tab methods - these methods relate to the settings page. *
         *************************************************************************/
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
         * Add provider to the Settings Integrations tab.
         *
         * @since 1.0.0
         *
         * @param array $active Array of active connections.
         * @param array $settings Array of all connections settings.
         */
        public function integrations_tab_options($active, $settings)
        {
        }
        /**
         * Error wrapper for WP_Error.
         *
         * @since 1.0.0
         *
         * @param string $message
         * @param string $parent
         *
         * @return WP_Error
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
         *
         * @param array $fields    List of fields with their data and settings.
         * @param array $entry     Submitted entry values.
         * @param array $form_data Form data and settings.
         * @param int $entry_id    Saved entry ID.
         *
         * @return void
         */
        public function process_entry($fields, $entry, $form_data, $entry_id = 0)
        {
        }
        /************************************************************************
         * API methods - these methods interact directly with the provider API. *
         ************************************************************************/
        /**
         * Authenticate with the API.
         *
         * @since 1.3.6
         *
         * @param array $data
         * @param string $form_id
         *
         * @return mixed id or error object
         */
        public function api_auth($data = array(), $form_id = '')
        {
        }
        /**
         * Establish connection object to API.
         *
         * @since 1.3.6
         *
         * @param string $account_id
         *
         * @return mixed array or error object.
         */
        public function api_connect($account_id)
        {
        }
        /**
         * Retrieve provider account lists.
         *
         * @since 1.3.6
         *
         * @param string $connection_id
         * @param string $account_id
         *
         * @return mixed array or error object
         */
        public function api_lists($connection_id = '', $account_id = '')
        {
        }
        /**
         * Retrieve provider account list fields.
         *
         * @since 1.3.6
         *
         * @param string $connection_id
         * @param string $account_id
         * @param string $list_id
         *
         * @return mixed array or error object
         */
        public function api_fields($connection_id = '', $account_id = '', $list_id = '')
        {
        }
        /*************************************************************************
         * Output methods - these methods generally return HTML for the builder. *
         *************************************************************************/
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
         *
         * @param string $connection_id
         * @param array $connection
         *
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
        /*************************************************************************
         * Integrations tab methods - these methods relate to the settings page. *
         *************************************************************************/
        /**
         * Form fields to add a new provider account.
         *
         * @since 1.3.6
         */
        public function integrations_tab_new_form()
        {
        }
        /************************
         * Other functionality. *
         ************************/
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
     * WPForms Lite. Load Lite specific features/functionality.
     *
     * @since 1.2.0
     *
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
         *
         * @param object $settings
         */
        public function form_settings_notifications($settings)
        {
        }
        /**
         * Lite admin scripts and styles.
         *
         * @since 1.5.7
         */
        public function admin_enqueues()
        {
        }
        /**
         * Form confirmation settings, supports multiple confirmations.
         *
         * @since 1.4.8
         *
         * @param object $settings
         */
        public function form_settings_confirmations($settings)
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
         * Display upgrade notice at the bottom on the plugin settings pages.
         *
         * @since 1.4.7
         *
         * @param string $view
         */
        public function settings_cta($view)
        {
        }
        /**
         * Dismiss upgrade notice at the bottom on the plugin settings pages.
         *
         * @since 1.4.7
         */
        public function settings_cta_dismiss()
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
}
namespace WPForms\Lite\Reports {
    /**
     * Generates form submissions reports.
     *
     * @package    WPForms\Lite\Reports
     * @author     WPForms
     * @since      1.5.4
     * @license    GPL-2.0+
     * @copyright  Copyright (c) 2019, WPForms LLC
     */
    class EntriesCount
    {
        /**
         * Constructor.
         *
         * @since 1.5.4
         */
        public function __construct()
        {
        }
        /**
         * Get entries count grouped by form.
         * Main point of entry to fetch form entry count data from DB.
         * Caches the result.
         *
         * @since 1.5.4
         *
         * @return array
         */
        public function get_by_form()
        {
        }
    }
}
namespace WPForms {
    /**
     * Main WPForms class.
     *
     * @since 1.0.0
     *
     * @package WPForms
     */
    final class WPForms
    {
        /**
         * One is the loneliest number that you'll ever do.
         *
         * @since 1.0.0
         *
         * @var \WPForms\WPForms
         */
        private static $instance;
        /**
         * Plugin version for enqueueing, etc.
         * The value is got from WPFORMS_VERSION constant.
         *
         * @since 1.0.0
         *
         * @var string
         */
        public $version = '';
        /**
         * The form data handler instance.
         *
         * @since 1.0.0
         *
         * @var \WPForms_Form_Handler
         */
        public $form;
        /**
         * The entry data handler instance (Pro).
         *
         * @since 1.0.0
         *
         * @var \WPForms_Entry_Handler
         */
        public $entry;
        /**
         * The entry fields data handler instance (Pro).
         *
         * @since 1.4.3
         *
         * @var \WPForms_Entry_Fields_Handler
         */
        public $entry_fields;
        /**
         * The entry meta data handler instance (Pro).
         *
         * @since 1.1.6
         *
         * @var \WPForms_Entry_Meta_Handler
         */
        public $entry_meta;
        /**
         * The front-end instance.
         *
         * @since 1.0.0
         *
         * @var \WPForms_Frontend
         */
        public $frontend;
        /**
         * The process instance.
         *
         * @since 1.0.0
         *
         * @var \WPForms_Process
         */
        public $process;
        /**
         * The smart tags instance.
         *
         * @since 1.0.0
         *
         * @var \WPForms_Smart_Tags
         */
        public $smart_tags;
        /**
         * The Logging instance.
         *
         * @since 1.0.0
         *
         * @var \WPForms_Logging
         */
        public $logs;
        /**
         * The License class instance (Pro).
         *
         * @since 1.0.0
         *
         * @var \WPForms_License
         */
        public $license;
        /**
         * Classes registry.
         *
         * @since 1.5.7
         *
         * @var array
         */
        private $registry = array();
        /**
         * Paid returns true, free (Lite) returns false.
         *
         * @since 1.3.9
         *
         * @var boolean
         */
        public $pro = false;
        /**
         * Backward compatibility method for accessing the class registry in an old way
         * e.g. 'wpforms()->form' or 'wpforms()->entry'
         *
         * @since 1.5.7
         *
         * @param string $name Name of the object to get.
         *
         * @return mixed|null
         */
        public function __get($name)
        {
        }
        /**
         * Main WPForms Instance.
         *
         * Insures that only one instance of WPForms exists in memory at any one
         * time. Also prevents needing to define globals all over the place.
         *
         * @since 1.0.0
         *
         * @return WPForms
         */
        public static function instance()
        {
        }
        /**
         * Setup plugin constants.
         * All the path/URL related constants are defined in main plugin file.
         *
         * @since 1.0.0
         */
        private function constants()
        {
        }
        /**
         * Loads the plugin language files.
         *
         * @since 1.0.0
         * @since 1.5.0 Load only the lite translation.
         */
        public function load_textdomain()
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
         * Including the new files with PHP 5.3 style.
         *
         * @since 1.4.7
         */
        private function includes_magic()
        {
        }
        /**
         * Setup objects.
         *
         * @since 1.0.0
         */
        public function objects()
        {
        }
        /**
         * Register a class.
         *
         * @since 1.5.7
         *
         * @param string $class_name Class to register.
         * @param array  $args       Class registration options.
         */
        public function register($class_name, $args = array())
        {
        }
        /**
         * Register classes in bulk.
         *
         * @since 1.5.7
         *
         * @param array $classes Classes to register.
         */
        public function register_bulk($classes)
        {
        }
        /**
         * Get a class instance from a registry.
         *
         * @since 1.5.7
         *
         * @param string $name Class name or an alias.
         *
         * @return mixed|null
         */
        public function get($name)
        {
        }
    }
}
namespace {
    /**
     * The function which returns the one WPForms instance.
     *
     * @since 1.0.0
     *
     * @return WPForms\WPForms
     */
    function wpforms()
    {
    }
}
namespace {
    /**
     * Global admin related items and functionality.
     *
     * @package    WPForms
     * @author     WPForms
     * @since      1.3.9
     * @license    GPL-2.0+
     * @copyright  Copyright (c) 2017, WPForms LLC
     */
    /**
     * Load styles for all WPForms-related admin screens.
     *
     * @since 1.3.9
     */
    function wpforms_admin_styles()
    {
    }
    /**
     * Load scripts for all WPForms-related admin screens.
     *
     * @since 1.3.9
     */
    function wpforms_admin_scripts()
    {
    }
    /**
     * Add body class to WPForms admin pages for easy reference.
     *
     * @since 1.3.9
     *
     * @param string $classes CSS classes, space separated.
     *
     * @return string
     */
    function wpforms_admin_body_class($classes)
    {
    }
    /**
     * Outputs the WPForms admin header.
     *
     * @since 1.3.9
     */
    function wpforms_admin_header()
    {
    }
    /**
     * Remove non-WPForms notices from WPForms pages.
     *
     * @since 1.3.9
     */
    function wpforms_admin_hide_unrelated_notices()
    {
    }
    /**
     * Upgrade link used within the various admin pages.
     *
     * Previously was only included as a method in wpforms-lite.php, but made
     * available globally in 1.3.9.
     *
     * @since 1.3.9
     *
     * @param string $medium utm_medium URL parameter.
     *
     * @return string.
     */
    function wpforms_admin_upgrade_link($medium = 'link')
    {
    }
    /**
     * Check the current PHP version and display a notice if on unsupported PHP.
     *
     * @since 1.4.0.1
     * @since 1.5.0 Raising this awareness of old PHP version message from 5.2 to 5.3.
     */
    function wpforms_check_php_version()
    {
    }
    /**
     * Get an upgrade modal text.
     *
     * @since 1.4.4
     *
     * @return string
     */
    function wpforms_get_upgrade_modal_text()
    {
    }
    /**
     * Hide the wp-admin area "Version x.x" in footer on WPForms pages.
     *
     * @since 1.5.7
     *
     * @param string $text Default "Version x.x" or "Get Version x.x" text.
     *
     * @return string
     */
    function wpforms_admin_hide_wp_version($text)
    {
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
     * Save a form.
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
     * This can be triggered with select/radio/checkbox fields.
     *
     * @since 1.2.8
     */
    function wpforms_builder_dynamic_choices()
    {
    }
    /**
     * Form Builder Dynamic Choices Source option toggle.
     *
     * This can be triggered with select/radio/checkbox fields.
     *
     * @since 1.2.8
     */
    function wpforms_builder_dynamic_source()
    {
    }
    /**
     * Perform test connection to verify that the current web host can successfully
     * make outbound SSL connections.
     *
     * @since 1.4.5
     */
    function wpforms_verify_ssl()
    {
    }
    /**
     * Deactivate addon.
     *
     * @since 1.0.0
     */
    function wpforms_deactivate_addon()
    {
    }
    /**
     * Activate addon.
     *
     * @since 1.0.0
     */
    function wpforms_activate_addon()
    {
    }
    /**
     * Install addon.
     *
     * @since 1.0.0
     */
    function wpforms_install_addon()
    {
    }
    /**
     * The function which returns the one WPForms_Conditional_Logic_Core instance.
     *
     * Use this function like you would a global variable, except without needing
     * to declare the global.
     *
     * @since 1.1.0
     *
     * @return WPForms_Conditional_Logic_Core
     */
    function wpforms_conditional_logic()
    {
    }
    /**
     * Register WPForms plugin widgets.
     */
    function wpforms_register_widgets()
    {
    }
    /**
     * Helper functions to work with multidimensional arrays easier.
     *
     * @since      1.5.6
     * @author     WPForms
     * @package    WPForms
     * @license    GPL-2.0+
     * @copyright  Copyright (c) 2019, WPForms LLC
     */
    /**
     * Determine whether the given value is array accessible.
     *
     * @since 1.5.6
     *
     * @param mixed $value Checkin to accessible.
     *
     * @return bool
     */
    function wpforms_list_accessible($value)
    {
    }
    /**
     * Set an array item to a given value using "dot" notation.
     *
     * If no key is given to the method, the entire array will be replaced.
     *
     * @since 1.5.6
     *
     * @param array  $array     Existing array.
     * @param string $key       Path to set.
     * @param mixed  $value     Value to set.
     * @param string $separator Separator.
     *
     * @return array New array.
     */
    function wpforms_list_set($array, $key, $value, $separator = '.')
    {
    }
    /**
     * Determine if the given key exists in the provided array.
     *
     * @since 1.5.6
     *
     * @param \ArrayAccess|array $array Existing array.
     * @param string|int         $key   To check.
     *
     * @return bool
     */
    function wpforms_list_exists($array, $key)
    {
    }
    /**
     * Get an item from an array using "dot" notation.
     *
     * @since 1.5.6
     *
     * @param \ArrayAccess|array $array   Where we want to get.
     * @param string             $key     Key with dot's.
     * @param mixed              $default Value.
     *
     * @return mixed
     */
    function wpforms_list_get($array, $key, $default = \null)
    {
    }
    /**
     * Check if an item exists in an array using "dot" notation.
     *
     * @since 1.5.6
     *
     * @param \ArrayAccess|array $array To check.
     * @param string             $key   Keys with dot's.
     *
     * @return bool
     */
    function wpforms_list_has($array, $key)
    {
    }
    /**
     * Determines if an array is associative.
     *
     * An array is "associative" if it doesn't have sequential numerical keys beginning with zero.
     *
     * @since 1.5.6
     *
     * @param array $array To check.
     *
     * @return bool
     */
    function wpforms_list_is_assoc($array)
    {
    }
    /**
     * Get a subset of the items from the given array.
     *
     * @since 1.5.6
     *
     * @param array        $array To get.
     * @param array|string $keys  To filter.
     *
     * @return array
     */
    function wpforms_list_only($array, $keys)
    {
    }
    /**
     * Remove one or many array items from a given array using "dot" notation.
     *
     * @since 1.5.6
     *
     * @param array        $array To forget.
     * @param array|string $keys  To exclude.
     *
     * @return array
     */
    function wpforms_list_forget($array, $keys)
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
     *
     * @param mixed $form_id Form ID.
     * @param bool  $title Form title.
     * @param bool  $desc Form description.
     */
    function wpforms_display($form_id = \false, $title = \false, $desc = \false)
    {
    }
    /**
     * Performs json_decode and unslash.
     *
     * @since 1.0.0
     *
     * @param string $data
     *
     * @return array|bool
     */
    function wpforms_decode($data)
    {
    }
    /**
     * Performs json_encode and wp_slash.
     *
     * @since 1.3.1.3
     *
     * @param mixed $data
     *
     * @return string
     */
    function wpforms_encode($data = \false)
    {
    }
    /**
     * Check if a string is a valid URL.
     *
     * @since 1.0.0
     *
     * @param string $url
     *
     * @return bool
     */
    function wpforms_is_url($url)
    {
    }
    /**
     * Get current URL.
     *
     * @since 1.0.0
     *
     * @return string
     */
    function wpforms_current_url()
    {
    }
    /**
     * Object to array.
     *
     * @since 1.1.7
     *
     * @param object $object
     *
     * @return mixed
     */
    function wpforms_object_to_array($object)
    {
    }
    /**
     * Get the value of a specific WPForms setting.
     *
     * @since 1.0.0
     *
     * @param string $key
     * @param mixed  $default
     * @param string $option
     *
     * @return mixed
     */
    function wpforms_setting($key, $default = \false, $option = 'wpforms_settings')
    {
    }
    /**
     * Sanitize key, primarily used for looking up options.
     *
     * @since 1.3.9
     *
     * @param string $key
     *
     * @return string
     */
    function wpforms_sanitize_key($key = '')
    {
    }
    /**
     * Check if form provided contains the specified field type.
     *
     * @since 1.0.5
     *
     * @param array|string $type
     * @param array|object $form
     * @param bool         $multiple
     *
     * @return bool
     */
    function wpforms_has_field_type($type, $form, $multiple = \false)
    {
    }
    /**
     * Check if form provided contains a field which a specific setting.
     *
     * @since 1.4.5
     *
     * @param string $setting
     * @param object|array  $form
     * @param bool   $multiple
     *
     * @return bool
     */
    function wpforms_has_field_setting($setting, $form, $multiple = \false)
    {
    }
    /**
     * Checks if form provided contains page breaks, if so give details.
     *
     * @since 1.0.0
     *
     * @param mixed $form
     *
     * @return mixed
     */
    function wpforms_has_pagebreak($form = \false)
    {
    }
    /**
     * Tries to find and return an top or bottom pagebreak.
     *
     * @since 1.2.1
     *
     * @param mixed $form
     * @param mixed $type
     *
     * @return array|bool
     */
    function wpforms_get_pagebreak($form = \false, $type = \false)
    {
    }
    /**
     * Returns information about pages if the form has multiple pages.
     *
     * @since 1.3.7
     *
     * @param mixed $form
     *
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
     *
     * @param string $id
     * @param array  $class
     * @param array  $datas
     * @param array  $atts
     * @param bool   $echo
     *
     * @return string
     */
    function wpforms_html_attributes($id = '', $class = array(), $datas = array(), $atts = array(), $echo = \false)
    {
    }
    /**
     * Sanitizes string of CSS classes.
     *
     * @since 1.2.1
     *
     * @param array|string $classes
     * @param bool         $convert True will convert strings to array and vice versa.
     *
     * @return string|array
     */
    function wpforms_sanitize_classes($classes, $convert = \false)
    {
    }
    /**
     * Convert a file size provided, such as "2M", to bytes.
     *
     * @since 1.0.0
     * @link http://stackoverflow.com/a/22500394
     *
     * @param string $size
     *
     * @return int
     */
    function wpforms_size_to_bytes($size)
    {
    }
    /**
     * Convert bytes to megabytes (or in some cases KB).
     *
     * @since 1.0.0
     *
     * @param int $bytes Bytes to convert to a readable format.
     *
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
     *
     * @param bool $bytes
     *
     * @return mixed
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
     *
     * @param mixed $form
     * @param array $whitelist
     *
     * @return mixed boolean or array
     */
    function wpforms_get_form_fields($form = \false, $whitelist = array())
    {
    }
    /**
     * Conditional logic form fields supported.
     *
     * @since 1.5.2
     *
     * @return array
     */
    function wpforms_get_conditional_logic_form_fields_supported()
    {
    }
    /**
     * Get meta key value for a form field.
     *
     * @since 1.1.9
     *
     * @param int|string $id Field ID.
     * @param string     $key Meta key.
     * @param mixed      $form_data Form data array.
     *
     * @return string
     */
    function wpforms_get_form_field_meta($id = '', $key = '', $form_data = '')
    {
    }
    /**
     * Get meta key value for a form field.
     *
     * @since 1.3.1
     * @since 1.5.0 More strict parameters. Always return an array.
     *
     * @param string $key       Meta key.
     * @param string $value     Meta value to check against.
     * @param array  $form_data Form data array.
     *
     * @return array|bool Empty array, when no data is found.
     */
    function wpforms_get_form_fields_by_meta($key, $value, $form_data)
    {
    }
    /**
     * US States.
     *
     * @since 1.0.0
     *
     * @return array
     */
    function wpforms_us_states()
    {
    }
    /**
     * Countries.
     *
     * @since 1.0.0
     *
     * @return array
     */
    function wpforms_countries()
    {
    }
    /**
     * Calendar Months.
     *
     * @since 1.3.7
     * @return array
     */
    function wpforms_months()
    {
    }
    /**
     * Calendar Days.
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
     *
     * @return string
     */
    function wpforms_get_ip()
    {
    }
    /**
     * Sanitizes hex color.
     *
     * @since 1.2.1
     *
     * @param string $color
     *
     * @return string
     */
    function wpforms_sanitize_hex_color($color)
    {
    }
    /**
     * Sanitizes error message, primarily used during form frontend output.
     *
     * @since 1.3.7
     *
     * @param string $error
     *
     * @return string
     */
    function wpforms_sanitize_error($error = '')
    {
    }
    /**
     * Sanitizes a string, that can be a multiline.
     * If WP core `sanitize_textarea_field()` exists (after 4.7.0) - use it.
     * Otherwise - split onto separate lines, sanitize each one, merge again.
     *
     * @since 1.4.1
     *
     * @param string $string
     *
     * @return string If empty var is passed, or not a string - return unmodified. Otherwise - sanitize.
     */
    function wpforms_sanitize_textarea_field($string)
    {
    }
    /**
     * Sanitizes an array, that consists of values as strings.
     * After that - merge all array values into multiline string.
     *
     * @since 1.4.1
     *
     * @param array $array
     *
     * @return mixed If not an array is passed (or empty var) - return unmodified var. Otherwise - a merged array into multiline string.
     */
    function wpforms_sanitize_array_combine($array)
    {
    }
    /**
     * Detect if we should use a light or dark color based on the color given.
     *
     * @since 1.2.5
     * @link https://docs.woocommerce.com/wc-apidocs/source-function-wc_light_or_dark.html#608-627
     *
     * @param mixed $color
     * @param string $dark (default: '#000000').
     * @param string $light (default: '#FFFFFF').
     *
     * @return string
     */
    function wpforms_light_or_dark($color, $dark = '#000000', $light = '#FFFFFF')
    {
    }
    /**
     * Builds and returns either a taxonomy or post type object that is
     * nests to accommodate any hierarchy.
     *
     * @since 1.3.9
     * @since 1.5.0 Return array only. Empty array of no data.
     *
     * @param array $args Object arguments to pass to data retrieval function.
     * @param bool  $flat Preserve hierarchy or not. False by default - preserve it.
     *
     * @return array
     */
    function wpforms_get_hierarchical_object($args = array(), $flat = \false)
    {
    }
    /**
     * Searches a given array and finds the parent of the provided object.
     *
     * @since 1.3.9
     *
     * @param object $child
     * @param array $parents
     * @param array $children
     * @param string $ref_parent
     */
    function _wpforms_get_hierarchical_object_search($child, &$parents, &$children, $ref_parent)
    {
    }
    /**
     * Flattens a hierarchical object.
     *
     * @since 1.3.9
     *
     * @param array $array
     * @param array $output
     * @param string $ref_name
     * @param int $level
     */
    function _wpforms_get_hierarchical_object_flatten($array, &$output, $ref_name = 'name', $level = 0)
    {
    }
    /**
     * Returns field choice properties for field configured with dynamic choices.
     *
     * @since 1.4.5
     *
     * @param array $field     Field settings.
     * @param int   $form_id   Form ID.
     * @param array $form_data Form data and settings.
     *
     * @return false|array
     */
    function wpforms_get_field_dynamic_choices($field, $form_id, $form_data = array())
    {
    }
    /**
     * Insert an array into another array before/after a certain key.
     *
     * @since 1.3.9
     * @link https://gist.github.com/scribu/588429
     *
     * @param array $array The initial array.
     * @param array $pairs The array to insert.
     * @param string $key The certain key.
     * @param string $position Where to insert the array - before or after the key.
     *
     * @return array
     */
    function wpforms_array_insert($array, $pairs, $key, $position = 'after')
    {
    }
    /**
     * Recursively remove empty strings from an array.
     *
     * @since 1.3.9.1
     *
     * @param array $data
     *
     * @return array
     */
    function wpforms_array_remove_empty_strings($data)
    {
    }
    /**
     * Whether plugin works in a debug mode.
     *
     * @since 1.2.3
     *
     * @return bool
     */
    function wpforms_debug()
    {
    }
    /**
     * Helper function to display debug data.
     *
     * @since 1.0.0
     *
     * @param mixed $data What to dump, can be any type.
     * @param bool  $echo Whether to print or return. Default is to print.
     *
     * @return string
     */
    function wpforms_debug_data($data, $echo = \true)
    {
    }
    /**
     * Log helper.
     *
     * @since 1.0.0
     *
     * @param string $title Title of a log message.
     * @param mixed $message Content of a log message.
     * @param array  $args Expected keys: form_id, meta, parent.
     */
    function wpforms_log($title = '', $message = '', $args = array())
    {
    }
    /**
     * Check whether the current page is in AMP mode or not.
     * We need to check for specific functions, as there is no special AMP header.
     *
     * @since 1.4.1
     *
     * @param bool $check_theme_support Whether theme support should be checked. Defaults to true.
     * @return bool
     */
    function wpforms_is_amp($check_theme_support = \true)
    {
    }
    /**
     * Decode special characters, both alpha- (<) and numeric-based (').
     *
     * @since 1.4.1
     *
     * @param string $string Raw string to decode.
     *
     * @return string
     */
    function wpforms_decode_string($string)
    {
    }
    /**
     * Get a suffix for assets, `.min` if debug is disabled.
     *
     * @since 1.4.1
     *
     * @return string
     */
    function wpforms_get_min_suffix()
    {
    }
    /**
     * Get the required label text, with a filter.
     *
     * @since 1.4.4
     *
     * @return string
     */
    function wpforms_get_required_label()
    {
    }
    /**
     * Get the required field label HTML, with a filter.
     *
     * @since 1.4.8
     *
     * @return string
     */
    function wpforms_get_field_required_label()
    {
    }
    /**
     * Get the default capability to manage everything for WPForms.
     *
     * @since 1.4.4
     *
     * @return string
     */
    function wpforms_get_capability_manage_options()
    {
    }
    /**
     * Check permissions for currently logged in user.
     *
     * @since 1.4.4
     *
     * @return bool
     */
    function wpforms_current_user_can()
    {
    }
    /**
     * Get the certain date of a specified day in a specified format.
     *
     * @since 1.4.4
     *
     * @param string $period Supported values: start, end.
     * @param string $timestamp Default is the current timestamp, if left empty.
     * @param string $format Default is a MySQL format.
     *
     * @return string
     */
    function wpforms_get_day_period_date($period, $timestamp = '', $format = 'Y-m-d H:i:s')
    {
    }
    /**
     * Get an array of all possible provider addons.
     *
     * @since 1.5.5
     *
     * @return array
     */
    function wpforms_get_providers_all()
    {
    }
    /**
     * Get an array of all the active provider addons.
     *
     * @since 1.4.7
     *
     * @return array
     */
    function wpforms_get_providers_available()
    {
    }
    /**
     * Get options for all providers.
     *
     * @since 1.4.7
     *
     * @param string $provider Define a single provider to get options for this one only.
     *
     * @return array
     */
    function wpforms_get_providers_options($provider = '')
    {
    }
    /**
     * Update options for all providers.
     *
     * @since 1.4.7
     *
     * @param string      $provider Provider slug.
     * @param array|false $options If false is passed - provider will be removed. Otherwise saved.
     * @param string      $key Optional key to identify which connection to update. If empty - generate a new one.
     */
    function wpforms_update_providers_options($provider, $options, $key = '')
    {
    }
    /**
     * Helper function to determine if loading an WPForms related admin page.
     *
     * Here we determine if the current administration page is owned/created by
     * WPForms. This is done in compliance with WordPress best practices for
     * development, so that we only load required WPForms CSS and JS files on pages
     * we create. As a result we do not load our assets admin wide, where they might
     * conflict with other plugins needlessly, also leading to a better, faster user
     * experience for our users.
     *
     * @since 1.3.9
     *
     * @param string $slug Slug identifier for a specific WPForms admin page.
     * @param string $view Slug identifier for a specific WPForms admin page view ("subpage").
     *
     * @return boolean
     */
    function wpforms_is_admin_page($slug = '', $view = '')
    {
    }
    /**
     * Get the ISO 639-2 Language Code from user/site locale.
     *
     * @see http://www.loc.gov/standards/iso639-2/php/code_list.php
     *
     * @since 1.5.0
     *
     * @return string
     */
    function wpforms_get_language_code()
    {
    }
    /**
     * Determine if we should show the "Show Values" toggle for checkbox, radio, or
     * select fields in form builder. Legacy.
     *
     * @since 1.5.0
     *
     * @return bool
     */
    function wpforms_show_fields_options_setting()
    {
    }
    /**
     * Check if a string is empty.
     *
     * @since 1.5.0
     *
     * @param string $string String to test.
     *
     * @return bool
     */
    function wpforms_is_empty_string($string)
    {
    }
    /**
     * Return URL to form preview page.
     *
     * @since 1.5.1
     *
     * @param int  $form_id    Form ID.
     * @param bool $new_window New window flag.
     *
     * @return string
     */
    function wpforms_get_form_preview_url($form_id, $new_window = \false)
    {
    }
    /**
     * Include a template - alias to \WPForms\Helpers\Template::get_html.
     * Uses 'require' if $args are passed or 'load_template' if not.
     *
     * @since 1.5.6
     *
     * @param string $template_name Template name.
     * @param array  $args          Arguments.
     * @param bool   $extract       Extract arguments.
     *
     * @throws \RuntimeException If extract() tries to modify the scope.
     *
     * @return string Compiled HTML.
     */
    function wpforms_render($template_name, $args = array(), $extract = \false)
    {
    }
    /**
     * Chain monad, useful for chaining certain array or string related functions.
     *
     * @since 1.5.6
     *
     * @param mixed $value Any data.
     *
     * @return \WPForms\Helpers\Chain
     */
    function wpforms_chain($value)
    {
    }
    /**
     * Get the current installation license type (always lowercase).
     *
     * @since 1.5.6
     *
     * @return string|false
     */
    function wpforms_get_license_type()
    {
    }
    /**
     * Contains various WPForms integrations.
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
}