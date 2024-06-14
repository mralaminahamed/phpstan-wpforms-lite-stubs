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
     * @since 1.5.0
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
        public static $licenses_top = ['pro', 'agency', 'ultimate', 'elite'];
        /**
         * List of features that licenses are different with.
         *
         * @since 1.5.0
         *
         * @var array
         */
        public static $licenses_features = [];
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
        public $views = [];
        /**
         * Primary class constructor.
         *
         * @since 1.5.0
         */
        public function __construct()
        {
        }
        /**
         * Register hooks.
         *
         * @since 1.8.2.3
         */
        private function hooks()
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
         * Display the General Info section of About tab.
         *
         * @since 1.5.8
         */
        protected function output_about_info()
        {
        }
        /**
         * Display the Addons section of About tab.
         *
         * @since 1.5.8
         */
        protected function output_about_addons()
        {
        }
        /**
         * Get AM plugin data to display in the Addons section of About tab.
         *
         * @since 1.5.8
         *
         * @param string $plugin      Plugin slug.
         * @param array  $details     Plugin details.
         * @param array  $all_plugins List of all plugins.
         *
         * @return array
         */
        protected function get_plugin_data($plugin, $details, $all_plugins)
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
        /**
         * Get the list of features for the licenses.
         *
         * @since 1.8.2.3
         *
         * @return array
         */
        private function get_licenses_features_list()
        {
        }
    }
    /**
     * Functionality related to the admin TinyMCE editor.
     *
     * @since 1.0.0
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
         * @param string $editor_id Editor Id.
         */
        public function media_button($editor_id)
        {
        }
        /**
         * Check if we are on the post editor admin page.
         *
         * @since 1.6.2
         *
         * @returns boolean True if it is post editor admin page.
         */
        public function is_post_editor_page()
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
     * @since 1.0.0
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
         * Hide "Add New" admin menu item if a user can't create forms.
         *
         * @since 1.5.8
         */
        public function hide_wpforms_submenu_items()
        {
        }
        /**
         * Hide "WPForms" admin menu if it has no submenu items.
         *
         * @since 1.5.8
         */
        public function hide_wpforms_menu_item()
        {
        }
        /**
         * Alias method for backward compatibility.
         *
         * @since 1.7.4
         * @deprecated 1.7.8
         */
        public function style_upgrade_pro_link()
        {
        }
        /**
         * Add the PRO badge to left sidebar menu item.
         *
         * @since 1.7.8
         * @deprecated 1.8.1
         */
        public function adjust_pro_menu_item_class()
        {
        }
        /**
         * Make changes to the PRO menu item.
         *
         * @since 1.8.1
         */
        public function adjust_pro_menu_item()
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
         * @param array  $links       Plugin row links.
         * @param string $plugin_file Path to the plugin file relative to the plugins directory.
         * @param array  $plugin_data An array of plugin data. See `get_plugin_data()`.
         * @param string $context     The plugin context.
         *
         * @return array $links
         */
        public function settings_link($links, $plugin_file, $plugin_data, $context)
        {
        }
        /**
         * Get the HTML for the "NEW!" badge.
         *
         * @since 1.7.8
         *
         * @return string
         */
        private function get_new_badge_html()
        {
        }
        /**
         * Output inline styles for the admin menu.
         *
         * @since 1.7.8
         */
        public function admin_menu_styles()
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
     * @since 1.3.9
     * @deprecated 1.7.2
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
        public $notices = [];
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
         * @param string $type    Type of the notice (default: '').
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
     * @since 1.3.2
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
         * Dismiss the review admin notice.
         *
         * @deprecated 1.6.7.1
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
         * @param string $text Footer text.
         *
         * @return string
         */
        public function admin_footer($text)
        {
        }
        /**
         * Pre-footer promotion block, displayed on all WPForms admin pages except Form Builder.
         *
         * @since 1.8.0
         */
        public function promote_wpforms()
        {
        }
    }
    /**
     * Welcome page class.
     *
     * This page is shown when the plugin is activated.
     *
     * @since 1.0.0
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
     * Generate the table on the plugin overview page.
     *
     * @since 1.0.0
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
         * Number of forms in different views.
         *
         * @since 1.7.2
         *
         * @var array
         */
        private $count;
        /**
         * Current view.
         *
         * @since 1.7.3
         *
         * @var string
         */
        private $view;
        /**
         * Primary class constructor.
         *
         * @since 1.0.0
         */
        public function __construct()
        {
        }
        /**
         * Get the instance of a class and store it in itself.
         *
         * @since 1.7.5
         */
        public static function get_instance()
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
         * @param WP_Post $form Form.
         *
         * @return string
         */
        public function column_cb($form)
        {
        }
        /**
         * Render the columns.
         *
         * @since 1.0.0
         *
         * @param WP_Post $form        CPT object as a form representation.
         * @param string  $column_name Column Name.
         *
         * @return string
         */
        public function column_default($form, $column_name)
        {
        }
        /**
         * Filter the default list of hidden columns.
         *
         * @since 1.7.2
         *
         * @param string[]  $hidden Array of IDs of columns hidden by default.
         * @param WP_Screen $screen WP_Screen object of the current screen.
         *
         * @return string[]
         */
        public function default_hidden_columns($hidden, $screen)
        {
        }
        /**
         * Render the form name column with action links.
         *
         * @since 1.0.0
         *
         * @param WP_Post $form Form.
         *
         * @return string
         */
        public function column_name($form)
        {
        }
        /**
         * Render the form tags column.
         *
         * @since 1.7.5
         *
         * @param WP_Post $form Form.
         *
         * @return string
         */
        public function column_tags($form)
        {
        }
        /**
         * Get the form name HTML for the form name column.
         *
         * @since 1.5.8
         *
         * @param WP_Post $form Form object.
         *
         * @return string
         */
        protected function get_column_name_title($form)
        {
        }
        /**
         * Get the row actions HTML for the form name column.
         *
         * @since 1.5.8
         *
         * @param WP_Post $form Form object.
         *
         * @return string
         */
        protected function get_column_name_row_actions($form)
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
         * Generate the table navigation above or below the table.
         *
         * @since 1.7.2
         *
         * @param string $which The location of the table navigation: 'top' or 'bottom'.
         */
        protected function display_tablenav($which)
        {
        }
        /**
         * Extra controls to be displayed between bulk actions and pagination.
         *
         * @since 1.7.3
         *
         * @param string $which The location of the table navigation: 'top' or 'bottom'.
         */
        protected function extra_tablenav($which)
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
         * Fetch and set up the final data for the table.
         *
         * @since 1.0.0
         */
        public function prepare_items()
        {
        }
        /**
         * Calculate and update form counts.
         *
         * @since 1.7.2
         *
         * @param array $args Get forms arguments.
         */
        private function update_count($args)
        {
        }
        /**
         * Display the pagination.
         *
         * @since 1.7.2
         *
         * @param string $which The location of the table pagination: 'top' or 'bottom'.
         */
        protected function pagination($which)
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
        /**
         * Forms search markup.
         *
         * @since 1.7.2
         *
         * @param string $text     The 'submit' button label.
         * @param string $input_id ID attribute value for the search input field.
         */
        public function search_box($text, $input_id)
        {
        }
        /**
         * Get the list of views available on forms overview table.
         *
         * @since 1.7.3
         */
        protected function get_views()
        {
        }
    }
    /**
     * Primary overview page inside the admin which lists all forms.
     *
     * @since 1.0.0
     */
    class WPForms_Overview
    {
        /**
         * Overview Table instance.
         *
         * @since 1.7.2
         *
         * @var WPForms_Overview_Table
         */
        private $overview_table;
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
         * Init overview table class.
         *
         * @since 1.7.2
         */
        public function init_overview_table()
        {
        }
        /**
         * Remove previous `_wp_http_referer` variable from the REQUEST_URI.
         *
         * @since 1.7.2
         */
        private function remove_referer()
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
         * Form table per-page screen option value.
         *
         * @since 1.0.0
         *
         * @param bool   $keep   Whether to save or skip saving the screen option value. Default false.
         * @param string $option The option name.
         * @param int    $value  The number of rows to use.
         *
         * @return mixed
         */
        public function screen_options_set($keep, $option, $value)
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
         * Determine if it is an empty state.
         *
         * @since 1.7.5
         */
        private function is_empty_state()
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
         * Admin notices.
         *
         * @since 1.5.7
         * @deprecated 1.7.3
         */
        public function notices()
        {
        }
        /**
         * Process the bulk table actions.
         *
         * @since 1.5.7
         * @deprecated 1.7.3
         */
        public function process_bulk_actions()
        {
        }
        /**
         * Remove certain arguments from a query string that WordPress should always hide for users.
         *
         * @since 1.5.7
         * @deprecated 1.7.3
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
     * Load the field types.
     *
     * @since 1.0.0
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
         * Initialize hooks.
         *
         * @since 1.2.8
         * @since 1.8.2 Moved base class loading to \WPForms\WPForms::includes.
         */
        public function init()
        {
        }
        /**
         * Hooks.
         *
         * @since 1.7.7
         */
        private function hooks()
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
     * Handle plugin installation upon activation.
     *
     * @since 1.0.0
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
         * Perform certain actions on plugin activation.
         *
         * @since 1.0.0
         *
         * @param bool $network_wide Whether to enable the plugin for all sites in the network
         *                           or just the current site. Multisite only. Default is false.
         */
        public function install($network_wide = \false)
        {
        }
        /**
         * Run manual installation.
         *
         * @since 1.5.4.2
         *
         * @param bool $silent Silent install, disables welcome page.
         */
        public function manual($silent = \false)
        {
        }
        /**
         * Perform certain actions on plugin deactivation.
         *
         * @since 1.5.9
         */
        public function deactivate()
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
         * @since 1.8.4 Added $new_site and $args parameters and removed $blog_id, $user_id, $domain, $path, $site_id,
         *        $meta parameters.
         *
         * @param WP_Site $new_site New site object.
         * @param array   $args     Arguments for the initialization.
         *
         * @noinspection PhpUnusedParameterInspection
         */
        public function new_multisite_blog($new_site, $args)
        {
        }
        /**
         * Create database tables if they do not exist.
         * It covers new installations.
         *
         * @since 1.8.2
         */
        private function maybe_create_tables()
        {
        }
    }
    /**
     * Load the providers.
     *
     * @since 1.3.6
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
     * WPForms widget.
     *
     * @since 1.0.2
     */
    class WPForms_Widget extends \WP_Widget
    {
        /**
         * Hold widget settings defaults, populated in constructor.
         *
         * @since 1.0.2
         *
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
         * Output the HTML for this widget.
         *
         * @since 1.0.2
         *
         * @param array $args     An array of standard parameters for widgets in this theme.
         * @param array $instance An array of settings for this widget instance.
         */
        public function widget($args, $instance)
        {
        }
        /**
         * Deal with the settings when they are saved by the admin. Here is
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
         * Display the form for this widget on the Widgets page of the WP Admin area.
         *
         * @since 1.0.2
         *
         * @param array $instance An array of the current settings for this widget.
         */
        public function form($instance)
        {
        }
    }
}
namespace WPForms {
    /**
     * The removed class helps prevent fatal errors for clients
     * that use some of the classes we are about to remove.
     * Use the class extending instead of class_alias function.
     *
     * @since 1.8.0
     */
    class Removed
    {
        /**
         * List of removed classes in the next format:
         * Fully-Qualified Class Name => version.
         *
         * @since 1.8.0
         */
        const CLASSES = ['WPForms\\Pro\\Admin\\Entries\\DefaultScreen' => '1.8.2'];
        /**
         * Inform clients that the class is removed.
         *
         * @since 1.8.0
         */
        public function __construct()
        {
        }
        /**
         * Inform clients that the class is removed.
         *
         * @since 1.8.0
         *
         * @param string $name Property name.
         */
        public function __get($name)
        {
        }
        /**
         * Inform clients that the class is removed.
         *
         * @since 1.8.0
         *
         * @param string $name  Property name.
         * @param mixed  $value Property value.
         */
        public function __set($name, $value)
        {
        }
        /**
         * Inform clients that the class is removed.
         *
         * @since 1.8.0
         *
         * @param string $name Property name.
         */
        public function __isset($name)
        {
        }
        /**
         * Inform clients that the class is removed.
         *
         * @since 1.8.0
         *
         * @param string $name      Method name.
         * @param array  $arguments List of arguments.
         */
        public function __call($name, $arguments)
        {
        }
        /**
         * Inform clients that the class is removed.
         *
         * @since 1.8.0
         *
         * @param string $name      Method name.
         * @param array  $arguments List of arguments.
         */
        public static function __callStatic($name, $arguments)
        {
        }
        /**
         * Inform clients that the class is removed.
         *
         * @since 1.8.0
         *
         * @param string $element_name Property or method name.
         */
        private static function trigger_error($element_name = '')
        {
        }
    }
}
namespace WPForms\Forms {
    class Loader extends \WPForms\Removed
    {
    }
}
namespace WPForms\Pro\Admin\Entries {
    /**
     * Default Entries screen showed a chart and the form entries stats.
     * Replaced with "WPForms\Pro\Admin\Entries\Overview".
     *
     * @since 1.5.5
     * @deprecated 1.8.2
     */
    class DefaultScreen extends \WPForms\Removed
    {
    }
}
namespace {
    /**
     * Emails.
     *
     * This class handles all (notification) emails sent by WPForms.
     *
     * Heavily influenced by the great AffiliateWP plugin by Pippin Williamson.
     * https://github.com/AffiliateWP/AffiliateWP/blob/master/includes/emails/class-affwp-emails.php
     *
     * @since 1.1.3
     */
    class WPForms_WP_Emails
    {
        /**
         * Store the from address.
         *
         * @since 1.1.3
         *
         * @var string
         */
        private $from_address;
        /**
         * Store the from name.
         *
         * @since 1.1.3
         *
         * @var string
         */
        private $from_name;
        /**
         * Store the reply-to address.
         *
         * @since 1.1.3
         *
         * @var bool|string
         */
        private $reply_to = \false;
        /**
         * Store the reply-to name.
         *
         * @since 1.7.9
         *
         * @var bool|string
         */
        private $reply_to_name = \false;
        /**
         * Store the carbon copy addresses.
         *
         * @since 1.3.1
         *
         * @var string
         */
        private $cc = \false;
        /**
         * Store the email content type.
         *
         * @since 1.1.3
         *
         * @var string
         */
        private $content_type;
        /**
         * Store the email headers.
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
        public $form_data = [];
        /**
         * Fields, formatted, and sanitized.
         *
         * @since 1.1.3
         *
         * @var array
         */
        public $fields = [];
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
         * @param string $to          The To address.
         * @param string $subject     The subject line of the email.
         * @param string $message     The body of the email.
         * @param array  $attachments Attachments to the email.
         *
         * @return bool
         */
        public function send($to, $subject, $message, $attachments = [])
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
         * Convert text formatted HTML. This is primarily for turning line breaks
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
         * Process a smart tag.
         * Decodes entities and sanitized (keeping line breaks) by default.
         *
         * @uses wpforms_decode_string()
         *
         * @since 1.1.3
         * @since 1.6.0 Deprecated 2 params: $sanitize, $linebreaks.
         *
         * @param string $string String that may contain tags.
         *
         * @return string
         */
        public function process_tag($string = '')
        {
        }
        /**
         * Process the all fields smart tag if present.
         *
         * @since 1.1.3
         *
         * @param bool $is_html_email Toggle to use HTML or plaintext.
         *
         * @return string
         */
        public function wpforms_html_field_value($is_html_email = \true)
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
         * Retrieve a template part. Taken from bbPress.
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
         * Search in the STYLESHEETPATH before TEMPLATEPATH so that themes which
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
         * Return a list of paths to check for template locations
         *
         * @since 1.1.3
         *
         * @return array
         */
        public function get_theme_template_paths()
        {
        }
        /**
         * Perform email subject preparation: process tags, remove new lines, etc.
         *
         * @since 1.6.1
         *
         * @param string $subject Email subject to post-process.
         *
         * @return string
         */
        private function get_prepared_subject($subject)
        {
        }
        /**
         * If CL is enabled and the field is conditionally hidden, hide it from message.
         *
         * @since 1.7.9
         *
         * @param int $field_id Field ID.
         *
         * @return bool
         */
        private function is_field_conditionally_hidden($field_id)
        {
        }
    }
    /**
     * Base field template.
     *
     * @since 1.0.0
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
         * Field keywords for search, eg "checkbox, file, icon, upload".
         *
         * @since 1.8.3
         *
         * @var string
         */
        public $keywords = '';
        /**
         * Priority order the field button should show inside the "Add Fields" tab.
         *
         * @since 1.0.0
         *
         * @var int
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
         * Instance of the Frontend class.
         *
         * @since 1.8.1
         *
         * @var FrontendBase
         */
        protected $frontend_obj;
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
         * This needs to be public (although internal) to be used in WordPress hooks.
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
         * @param array $field      Field data and settings.
         * @param array $properties Properties we are modifying.
         */
        public function field_prefill_remove_choices_defaults($field, &$properties)
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
         * Public version of get_field_populated_single_property_value() to use by external classes.
         *
         * @since 1.6.0.1
         *
         * @param string $raw_value  Value from a GET param, always a string.
         * @param string $input      Represent a subfield inside the field. May be empty.
         * @param array  $properties Field properties.
         * @param array  $field      Current field specific data.
         *
         * @return array Modified field properties.
         */
        public function get_field_populated_single_property_value_public($raw_value, $input, $properties, $field)
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
         * Get the value, that is used to prefill via dynamic or fallback population.
         * Based on field data and current properties.
         * Dynamic choices section.
         *
         * @since 1.6.0
         *
         * @param string $get_value  Value from a GET param, always a string, sanitized, stripped slashes.
         * @param array  $properties Field properties.
         *
         * @return array Modified field properties.
         */
        protected function get_field_populated_single_property_value_dynamic_choices($get_value, $properties)
        {
        }
        /**
         * Fill choices without labels.
         *
         * @since 1.6.2
         *
         * @param array $form_data Form data.
         *
         * @return array
         */
        public function field_fill_empty_choices($form_data)
        {
        }
        /**
         * Get the value, that is used to prefill via dynamic or fallback population.
         * Based on field data and current properties.
         * Normal choices section.
         *
         * @since 1.6.0
         *
         * @param string $get_value  Value from a GET param, always a string, sanitized.
         * @param array  $properties Field properties.
         * @param array  $field      Current field specific data.
         *
         * @return array Modified field properties.
         */
        protected function get_field_populated_single_property_value_normal_choices($get_value, $properties, $field)
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
         * Get field data for the field.
         *
         * @since 1.8.2
         *
         * @param array $field     Current field.
         * @param array $form_data Form data and settings.
         *
         * @return array
         */
        public function field_data($field, $form_data)
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
         * Create the field options panel. Used by subclasses.
         *
         * @since 1.0.0
         * @since 1.5.0 Converted to abstract method, as it's required for all fields.
         *
         * @param array $field Field data and settings.
         */
        public abstract function field_options($field);
        /**
         * Create the field preview. Used by subclasses.
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
         * @param string $option Field option to render.
         * @param array  $field  Field data and settings.
         * @param array  $args   Field preview arguments.
         * @param bool   $echo   Print or return the value. Print by default.
         *
         * @return mixed echo or return string
         */
        public function field_element($option, $field, $args = [], $echo = \true)
        {
        }
        /**
         * Create field option toggle element.
         *
         * @since 1.6.8
         *
         * @param array   $args  Arguments.
         * @param integer $id    Field ID.
         * @param string  $slug  Field slug.
         * @param string  $attrs Attributes.
         * @param string  $class Class.
         *
         * @return string
         */
        private function field_element_toggle($args, $id, $slug, $attrs, $class)
        {
        }
        /**
         * Helper function to create common field options that are used frequently.
         *
         * @since 1.0.0
         *
         * @param string $option Field option to render.
         * @param array  $field  Field data and settings.
         * @param array  $args   Field preview arguments.
         * @param bool   $echo   Print or return the value. Print by default.
         *
         * @return mixed echo or return string
         */
        public function field_option($option, $field, $args = [], $echo = \true)
        {
        }
        /**
         * Helper function to create common field options that are used frequently
         * in the field preview.
         *
         * @since 1.0.0
         * @since 1.5.0 Added support for <select> HTML tag for choices.
         * @since 1.6.1 Added multiple select support.
         *
         * @param string $option Field option to render.
         * @param array  $field  Field data and settings.
         * @param array  $args   Field preview arguments.
         * @param bool   $echo   Print or return the value. Print by default.
         *
         * @return mixed Print or return a string.
         */
        public function field_preview_option($option, $field, $args = [], $echo = \true)
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
         * Display the field input elements on the frontend
         * according to the render engine setting.
         *
         * @since 1.8.1
         *
         * @param array $field      Field data and settings.
         * @param array $field_atts Field attributes (deprecated).
         * @param array $form_data  Form data and settings.
         *
         * @noinspection PhpUnusedParameterInspection
         */
        public function field_display_proxy($field, $field_atts, $form_data)
        {
        }
        /**
         * Display the field using classic rendering.
         *
         * @since 1.0.0
         * @since 1.5.0 Converted to abstract method, as it's required for all fields.
         *
         * @param array $field      Field data and settings.
         * @param array $field_atts Field attributes (deprecated).
         * @param array $form_data  Form data and settings.
         */
        public abstract function field_display($field, $field_atts, $form_data);
        /**
         * Display the field using classic rendering.
         *
         * @since 1.8.1
         *
         * @param array $field     Field data and settings.
         * @param array $form_data Form data and settings.
         */
        protected function field_display_classic($field, $form_data)
        {
        }
        /**
         * Display the field using modern rendering.
         *
         * @since 1.8.1
         *
         * @param array $field     Field data and settings.
         * @param array $form_data Form data and settings.
         */
        protected function field_display_modern($field, $form_data)
        {
        }
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
         * Validate field on form submit.
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
         * Format and sanitize field.
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
        /**
         * Get field name for ajax error message.
         *
         * @since 1.6.3
         *
         * @param string $name  Field name for error triggered.
         * @param array  $field Field settings.
         * @param array  $props List of properties.
         * @param string $error Error message.
         *
         * @return string
         */
        public function ajax_error_field_name($name, $field, $props, $error)
        {
        }
        /**
         * Exclude empty dynamic choices from the entry preview.
         *
         * @since 1.8.2
         *
         * @param bool  $hide      Whether to hide the field.
         * @param array $field     Field data.
         * @param array $form_data Form data.
         *
         * @return bool
         */
        public function exclude_empty_dynamic_choices($hide, $field, $form_data)
        {
        }
        /**
         * Enqueue Choicesjs script and config.
         *
         * @param array $forms Forms on the current page.
         *
         * @since 1.6.3
         */
        protected function enqueue_choicesjs_once($forms)
        {
        }
        /**
         * Whether a Choicesjs search area should be shown.
         *
         * @since 1.6.4
         *
         * @param int $choices_count Choices amount.
         *
         * @return bool
         */
        protected function is_choicesjs_search_enabled($choices_count)
        {
        }
        /**
         * Get instance of the class connected to the current field,
         * and located in the `src/Forms/[Pro/]Fields/FieldType/Class.php` file.
         *
         * @since 1.8.1
         *
         * @param string $class Class name, for example `Frontend`.
         *
         * @return object
         */
        private function get_object($class)
        {
        }
        /**
         * Add allowed HTML tags for field labels.
         *
         * @since 1.8.2
         *
         * @param array $strings Array of strings.
         *
         * @return array
         */
        public function add_allowed_label_html_tags($strings)
        {
        }
        /**
         * Whether a field has dynamic choices.
         *
         * @since 1.8.2
         *
         * @param array $field Field settings.
         *
         * @return bool
         */
        protected function is_dynamic_choices($field)
        {
        }
        /**
         * Whether a field has dynamic choices and they are empty.
         *
         * @since 1.8.2
         *
         * @param array $field     Field settings.
         * @param array $form_data Form data and settings.
         *
         * @return bool
         */
        protected function is_dynamic_choices_empty($field, $form_data)
        {
        }
        /**
         * Get empty dynamic choices message.
         *
         * @since 1.8.2
         *
         * @param array $field Field data and settings.
         *
         * @return string
         */
        protected function get_empty_dynamic_choices_message($field)
        {
        }
        /**
         * Display empty dynamic choices message.
         *
         * @since 1.8.2
         *
         * @param array $field Field data and settings.
         */
        protected function display_empty_dynamic_choices_message($field)
        {
        }
    }
    /**
     * Checkbox field.
     *
     * @since 1.0.0
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
         * Hooks.
         *
         * @since 1.8.1
         */
        private function hooks()
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
        public function field_html_value($value, $field, $form_data = [], $context = '')
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
         * Field display on the form front-end and admin entry edit page.
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
         * Validate field on form submit.
         *
         * @since 1.5.2
         *
         * @param int   $field_id     Field ID.
         * @param array $field_submit Submitted field value (selected option).
         * @param array $form_data    Form data.
         */
        public function validate($field_id, $field_submit, $form_data)
        {
        }
        /**
         * Format and sanitize field.
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
     * @since 1.0.0
     */
    class WPForms_Field_Email extends \WPForms_Field
    {
        /**
         * Encoding.
         *
         * @since 1.6.9
         */
        const ENCODING = 'UTF-8';
        /**
         * Email type of sanitization.
         *
         * @since 1.7.5
         */
        const EMAIL = 'email';
        /**
         * Rules type of sanitization.
         *
         * @since 1.7.5
         */
        const RULES = 'rules';
        /**
         * Primary class constructor.
         *
         * @since 1.0.0
         */
        public function init()
        {
        }
        /**
         * Hooks.
         *
         * @since 1.8.1
         */
        private function hooks()
        {
        }
        /**
         * Define additional field properties.
         *
         * @since 1.3.7
         *
         * @param array $properties List field properties.
         * @param array $field      Field data and settings.
         * @param array $form_data  Form data and settings.
         *
         * @return array
         */
        public function field_properties($properties, $field, $form_data)
        {
        }
        /**
         * Define the confirmation field properties.
         *
         * @since 1.6.3
         *
         * @param array $properties List field properties.
         * @param array $field      Field data and settings.
         * @param array $form_data  Form data and settings.
         *
         * @return array
         */
        public function confirmation_field_properties($properties, $field, $form_data)
        {
        }
        /**
         * Define the filter field properties.
         *
         * @since 1.6.3
         *
         * @param array $properties List field properties.
         * @param array $field      Field data and settings.
         * @param array $form_data  Form data and settings.
         *
         * @return array
         */
        public function filter_type_field_properties($properties, $field, $form_data)
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
         * @param string $class Class strings.
         * @param array  $field Current field.
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
         * Format and sanitize field.
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
         * Validate field on form submit.
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
         * Ajax handler to detect restricted email.
         *
         * @since 1.6.3
         */
        public function ajax_check_restricted_email()
        {
        }
        /**
         * Sanitize restricted rules.
         *
         * @since 1.6.3
         */
        public function ajax_sanitize_restricted_rules()
        {
        }
        /**
         * Sanitize default email.
         *
         * @since 1.7.5
         */
        public function ajax_sanitize_default_email()
        {
        }
        /**
         * Sanitize email options input.
         *
         * @since 1.7.5
         *
         * @param string $type Type of sanitization.
         *
         * @return void
         */
        private function ajax_sanitize($type)
        {
        }
        /**
         * Verify that an email pattern is valid.
         *
         * @since 1.7.5
         *
         * @param string $pattern Email pattern.
         *
         * @return string|false
         */
        private function is_email_pattern($pattern)
        {
        }
        /**
         * Sanitize the local or domain part of the email pattern.
         *
         * @since 1.7.5
         *
         * @param string $part    Local or domain part of the email pattern.
         * @param string $pattern Sanitization pattern.
         *
         * @return string
         */
        private function sanitize_part_pattern($part, $pattern)
        {
        }
        /**
         * Sanitize the local part of the email pattern.
         *
         * @since 1.7.5
         *
         * @param string $local Local part of the email pattern.
         *
         * @return string
         */
        private function sanitize_local_pattern($local)
        {
        }
        /**
         * Sanitize the domain part of the email pattern.
         *
         * @since 1.7.5
         *
         * @param string $domain Domain part of the email pattern.
         *
         * @return string
         */
        private function sanitize_domain_pattern($domain)
        {
        }
        /**
         * Maybe replace empty subdomains with templates.
         *
         * @since 1.7.5
         *
         * @param string $domain Email domain.
         *
         * @return string
         */
        private function maybe_adjust_domain($domain)
        {
        }
        /**
         * Get pattern from local and domain parts.
         *
         * @since 1.7.5
         *
         * @param string $local  Local part.
         * @param string $domain Domain part.
         *
         * @return string
         */
        private function get_pattern($local, $domain = '')
        {
        }
        /**
         * Sanitize restricted rules.
         *
         * @since 1.6.3
         *
         * @param string $content Content.
         *
         * @return array
         */
        private function sanitize_restricted_rules($content)
        {
        }
        /**
         * The check is a restricted email.
         *
         * @since 1.6.3
         *
         * @param string $email Email string.
         * @param array  $field Field data.
         *
         * @return bool
         */
        private function is_restricted_email($email, $field)
        {
        }
        /**
         * Sanitize from email patter a REGEX pattern.
         *
         * @since 1.6.3
         *
         * @param string $pattern Pattern line.
         *
         * @return string
         */
        private function sanitize_email_pattern($pattern)
        {
        }
        /**
         * Sanitize allow/deny list and default value before saving.
         *
         * @since 1.6.8
         *
         * @param array $form Form array which is usable with `wp_update_post()`.
         * @param array $data Data retrieved from $_POST and processed.
         * @param array $args Empty by default, may contain custom data not intended to be saved, but used for processing.
         *
         * @return array
         */
        public function save_form_args($form, $data, $args)
        {
        }
        /**
         * Add a custom JS i18n strings for the builder.
         *
         * @since 1.7.5
         *
         * @param array $strings List of strings.
         * @param array $form    Current form.
         *
         * @return array
         */
        public function add_builder_strings($strings, $form)
        {
        }
        /**
         * Get Punycode lib class.
         *
         * @since 1.6.9
         *
         * @return \TrueBV\Punycode
         */
        private function get_punycode()
        {
        }
        /**
         * Get email patterns parts splitted by @ and *.
         *
         * @since 1.6.9
         *
         * @param string $email_pattern Email pattern.
         *
         * @return array
         */
        private function get_email_pattern_parts($email_pattern)
        {
        }
        /**
         * Glue email patterns parts.
         *
         * @since 1.6.9
         *
         * @param array $parts Email pattern parts.
         *
         * @return string
         */
        private function glue_email_pattern_parts($parts)
        {
        }
        /**
         * Decode email patterns rules array.
         *
         * @since 1.7.5
         *
         * @param array $rules_arr Patterns rules array.
         *
         * @return string
         */
        private function decode_email_patterns_rules_array($rules_arr)
        {
        }
        /**
         * Decode email patterns rules list.
         *
         * @since 1.6.9
         *
         * @param string $rules Patterns rules list.
         *
         * @return string
         */
        private function decode_email_patterns_rules_list($rules)
        {
        }
        /**
         * Encode email.
         *
         * @since 1.7.3
         *
         * @param string $email Email.
         *
         * @return string
         */
        private function email_encode_punycode($email)
        {
        }
        /**
         * Is email encoded.
         *
         * @since 1.7.5
         *
         * @param string $email Email.
         *
         * @return bool
         */
        private function is_encoded_punycode($email)
        {
        }
        /**
         * Encode email pattern.
         *
         * @since 1.6.9
         *
         * @param string $email_pattern Email pattern.
         *
         * @return string
         */
        private function encode_punycode($email_pattern)
        {
        }
        /**
         * Decode email pattern.
         *
         * @since 1.6.9
         *
         * @param string $email_pattern Email pattern.
         *
         * @return string
         */
        private function decode_punycode($email_pattern)
        {
        }
        /**
         * Transform email pattern.
         *
         * @since 1.6.9
         *
         * @param string   $email_pattern Email pattern.
         * @param callable $callback      Punycode callback.
         *
         * @return string
         */
        private function transform_punycode($email_pattern, callable $callback)
        {
        }
        /**
         * Parse email pattern and return local and domain parts (maybe empty).
         *
         * @since 1.7.5
         *
         * @param string $pattern Email pattern.
         *
         * @return array
         */
        private function parse_email_pattern($pattern)
        {
        }
        /**
         * Verify that an email pattern without @ is valid.
         *
         * @since 1.7.5
         *
         * @param string $pattern Local part.
         *
         * @return false|string
         */
        private function is_email_pattern_without_at($pattern)
        {
        }
        /**
         * Determine if the field requires fieldset instead of the regular field label.
         *
         * @since 1.8.1
         *
         * @param bool  $requires_fieldset True if requires fieldset.
         * @param array $field             Field data.
         *
         * @return bool
         *
         * @noinspection PhpUnusedParameterInspection
         */
        public function is_field_requires_fieldset($requires_fieldset, $field)
        {
        }
    }
    /**
     * GDPR Checkbox field.
     *
     * @since 1.4.6
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
         * Format and sanitize field.
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
     * Internal information field class.
     *
     * @since 1.7.6
     */
    class WPForms_Field_Internal_Information extends \WPForms_Field
    {
        /**
         * The key used to save form checkboxes in post meta table.
         *
         * @since 1.7.6
         *
         * @var string
         */
        const CHECKBOX_META_KEY = 'wpforms_iif_checkboxes';
        /**
         * Class initialization method.
         *
         * @since 1.7.6
         */
        public function init()
        {
        }
        /**
         * Register hooks.
         *
         * @since 1.7.6
         *
         * @noinspection PhpUnnecessaryCurlyVarSyntaxInspection
         */
        private function hooks()
        {
        }
        /**
         * Whether current field can be populated dynamically.
         *
         * @since 1.7.6
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
         * Whether current field can be populated using a fallback.
         *
         * @since 1.7.6
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
         * Define field options to display in left panel.
         *
         * @since 1.7.6
         *
         * @param array $field Field data and settings.
         */
        public function field_options($field)
        {
        }
        /**
         * Define field preview on the right side on builder.
         *
         * @since 1.7.6
         *
         * @param array $field Field data and settings.
         */
        public function field_preview($field)
        {
        }
        /**
         * Checks if button is displayable.
         *
         * @since 1.7.6
         *
         * @param array $field Field data.
         *
         * @return bool
         */
        private function is_button_displayable($field)
        {
        }
        /**
         * Stub to make the field not visible in the front-end.
         *
         * @since 1.7.6
         *
         * @param array $field      Field data and settings.
         * @param array $field_atts Field attributes.
         * @param array $form_data  Form data.
         */
        public function field_display($field, $field_atts, $form_data)
        {
        }
        /**
         * Heading option.
         *
         * @since 1.7.6
         *
         * @param array $field Field data and settings.
         */
        private function heading_option($field)
        {
        }
        /**
         * Expanded description option.
         *
         * @since 1.7.6
         *
         * @param array $field Field data and settings.
         */
        private function expanded_description_option($field)
        {
        }
        /**
         * CTA label option.
         *
         * @since 1.7.6
         *
         * @param array $field Field data and settings.
         */
        private function cta_label_option($field)
        {
        }
        /**
         * CTA link option.
         *
         * @since 1.7.6
         *
         * @param array $field Field data and settings.
         */
        private function cta_link_option($field)
        {
        }
        /**
         * Add CSS class to hide field settings when field is not editable.
         *
         * @since 1.7.6
         *
         * @param string $option Field option to render.
         * @param array  $field  Field data and settings.
         * @param array  $args   Field preview arguments.
         * @param bool   $echo   Print or return the value. Print by default.
         *
         * @return string
         */
        public function field_element($option, $field, $args = [], $echo = \true)
        {
        }
        /**
         * Render custom option preview on the right side of builder.
         *
         * @since 1.7.6
         *
         * @param string $option Field option to render.
         * @param array  $field  Field data and settings.
         * @param array  $args   Field arguments.
         *
         * @return string
         */
        private function render_custom_preview($option, $field, $args = [])
        {
        }
        /**
         * Display field button in left panel only if the field is editable.
         *
         * @since 1.7.6
         *
         * @param array $fields All fields to display in the left panel.
         *
         * @return array
         */
        public function field_button($fields)
        {
        }
        /**
         * When the form is going to be displayed on front-end, remove internal information fields.
         *
         * @since 1.7.6
         *
         * @param array $form_data Form data.
         *
         * @return array
         */
        public function remove_internal_fields_on_front_end($form_data)
        {
        }
        /**
         * Remove field from form data before processing the form submit.
         *
         * @since 1.7.6
         *
         * @param array $form_data Form data.
         * @param array $entry     Form submission raw data ($_POST).
         *
         * @return array
         */
        public function process_before_form_data($form_data, $entry)
        {
        }
        /**
         * Do not display the duplicate button.
         *
         * @since 1.7.6
         *
         * @param bool  $is_visible If true, the duplicate button will be displayed.
         * @param array $field      Field data and settings.
         * @param array $form_data  Form data and settings.
         *
         * @return bool
         */
        public function display_duplicate_button($is_visible, $field, $form_data)
        {
        }
        /**
         * Hide column from the entries list table.
         *
         * @since 1.7.6
         *
         * @param array $disallowed Table columns.
         *
         * @return array
         */
        public function hide_column_in_entries_table($disallowed)
        {
        }
        /**
         * Add CSS class for the field parent div informing about mode (editable or not).
         *
         * @since 1.7.6
         *
         * @param string $css   CSS classes.
         * @param array  $field Field data and settings.
         *
         * @return string
         */
        public function add_css_class_for_field_wrapper($css, $field)
        {
        }
        /**
         * Save checkbox state to the post meta table.
         *
         * @since 1.7.6
         */
        public function save_internal_information_checkbox()
        {
        }
        /**
         * Localized strings for wpforms-internal-information-field JS script.
         *
         * @since 1.7.6
         *
         * @param array $strings Localized strings.
         * @param array $form    The form element.
         *
         * @return array
         * @noinspection PhpUnusedParameterInspection
         */
        public function builder_strings($strings, $form)
        {
        }
        /**
         * Enqueue wpforms-internal-information-field script.
         *
         * @since 1.7.6
         *
         * @param string $view Current view.
         *
         * @noinspection PhpUnusedParameterInspection, PhpUnnecessaryCurlyVarSyntaxInspection
         */
        public function builder_enqueues($view)
        {
        }
        /**
         * Checks if user is allowed to edit the field's content.
         *
         * @since 1.7.6
         *
         * @return bool
         */
        private function is_editable()
        {
        }
        /**
         * Check if the field has type internal-information.
         *
         * @since 1.7.6
         *
         * @param array $field Field data.
         *
         * @return bool
         */
        private function is_internal_information_field($field)
        {
        }
        /**
         * Render result of field_preview_option into custom div.
         *
         * If field has no value, do not echo anything.
         *
         * @since 1.7.6
         *
         * @param string $label Field label.
         * @param array  $field Field settings and data.
         * @param array  $args  Field arguments.
         */
        private function render_preview($label, $field, $args = [])
        {
        }
        /**
         * Replace `[] some text` with checkboxes.
         *
         * Additionally, generates input name by hashing the line of text where the checkbox is.
         *
         * @since 1.7.6
         *
         * @param string $description Expanded description.
         * @param array  $field       Field data and settings.
         *
         * @return string
         */
        private function replace_checkboxes($description, array $field)
        {
        }
        /**
         * Return allowed tags specific to internal information field content.
         *
         * @since 1.7.6
         *
         * @return array
         */
        private function get_allowed_tags()
        {
        }
        /**
         * Adds link parameters to all links in the provided content.
         *
         * @since 1.8.3
         *
         * @param string $content The content to modify.
         *
         * @return string The modified content with UTM parameters added to links.
         */
        private function add_link_attributes($content)
        {
        }
        /**
         * Add UTM parameters to the CTA button link.
         *
         * @since 1.7.6
         *
         * @param array $field Field data.
         *
         * @return string
         */
        private function add_url_utm($field)
        {
        }
    }
    /**
     * Name text field.
     *
     * @since 1.0.0
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
         * Hooks.
         *
         * @since 1.8.1
         */
        private function hooks()
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
         * Validate field on form submit.
         *
         * @since 1.0.0
         *
         * @param int          $field_id     Field id.
         * @param array|string $field_submit Field submit.
         * @param array        $form_data    Form data.
         */
        public function validate($field_id, $field_submit, $form_data)
        {
        }
        /**
         * Format and sanitize field.
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
        /**
         * Determine if the field requires fieldset+legend instead of the regular field label.
         *
         * @since 1.8.1
         *
         * @param bool  $requires_fieldset True if requires fieldset.
         * @param array $field             Field data.
         *
         * @return bool
         *
         * @noinspection PhpUnusedParameterInspection
         */
        public function is_field_requires_fieldset($requires_fieldset, $field)
        {
        }
        /**
         * Validate complicated formats.
         *
         * @since 1.8.2.3
         *
         * @param WPForms_Process $process      Process class instance.
         * @param int|string      $form_id      Form id.
         * @param int|string      $field_id     Field id.
         * @param array           $field_submit Field submit.
         * @param string          $required     Required message text.
         */
        private function validate_complicated_formats($process, $form_id, $field_id, $field_submit, $required)
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
         * Add Builder strings.
         *
         * @since 1.6.2.3
         *
         * @param array $strings Form Builder strings.
         *
         * @return array Form Builder strings.
         */
        public function add_builder_strings($strings)
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
        public function html_email_value($val, $field, $form_data = [], $context = '')
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
         * Get default display value.
         *
         * @since 1.7.1
         *
         * @return string
         */
        private function get_default_display_value()
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
         * Validate field on form submit.
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
         * Format and sanitize field.
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
     * @since 1.0.0
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
         * Hooks.
         *
         * @since 1.8.1
         */
        private function hooks()
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
        public function field_html_value($value, $field, $form_data = [], $context = '')
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
         * Field display on the form front-end and admin entry edit page.
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
         * Validate field.
         *
         * @since 1.8.2
         *
         * @param int          $field_id     Field ID.
         * @param string|array $field_submit Submitted field value (selected option).
         * @param array        $form_data    Form data and settings.
         */
        public function validate($field_id, $field_submit, $form_data)
        {
        }
        /**
         * Format and sanitize field.
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
     * @since 1.0.0
     */
    class WPForms_Field_Select extends \WPForms_Field
    {
        /**
         * Choices JS version.
         *
         * @since 1.6.3
         */
        const CHOICES_VERSION = '9.0.1';
        /**
         * Classic (old) style.
         *
         * @since 1.6.1
         *
         * @var string
         */
        const STYLE_CLASSIC = 'classic';
        /**
         * Modern style.
         *
         * @since 1.6.1
         *
         * @var string
         */
        const STYLE_MODERN = 'modern';
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
         * @since 1.6.1 Added a `Modern` style select support.
         *
         * @param array $field Field settings.
         */
        public function field_preview($field)
        {
        }
        /**
         * Field display on the form front-end and admin entry edit page.
         *
         * @since 1.0.0
         * @since 1.5.0 Converted to a new format, where all the data are taken not from $deprecated, but field properties.
         * @since 1.6.1 Added a multiple select support.
         *
         * @param array $field      Field data and settings.
         * @param array $deprecated Deprecated array of field attributes.
         * @param array $form_data  Form data and settings.
         */
        public function field_display($field, $deprecated, $form_data)
        {
        }
        /**
         * Validate field.
         *
         * @since 1.8.2
         *
         * @param int          $field_id     Field ID.
         * @param string|array $field_submit Submitted field value (selected option).
         * @param array        $form_data    Form data and settings.
         */
        public function validate($field_id, $field_submit, $form_data)
        {
        }
        /**
         * Format and sanitize field.
         *
         * @since 1.0.2
         * @since 1.6.1 Added a support for multiple values.
         *
         * @param int          $field_id     Field ID.
         * @param string|array $field_submit Submitted field value (selected option).
         * @param array        $form_data    Form data and settings.
         */
        public function format($field_id, $field_submit, $form_data)
        {
        }
        /**
         * Form frontend CSS enqueues.
         *
         * @since 1.6.1
         *
         * @param array $forms Forms on the current page.
         */
        public function enqueue_frontend_css($forms)
        {
        }
        /**
         * Form frontend JS enqueues.
         *
         * @since 1.6.1
         *
         * @param array $forms Forms on the current page.
         */
        public function enqueue_frontend_js($forms)
        {
        }
        /**
         * Load WPForms Gutenberg block scripts.
         *
         * @since 1.8.1
         */
        public function enqueue_block_editor_assets()
        {
        }
        /**
         * Whether the provided form has a dropdown field with a specified style.
         *
         * @since 1.6.1
         *
         * @param array  $form  Form data.
         * @param string $style Desired field style.
         *
         * @return bool
         */
        protected function is_field_style($form, $style)
        {
        }
        /**
         * Get field name for ajax error message.
         *
         * @since 1.6.3
         *
         * @param string $name  Field name for error triggered.
         * @param array  $field Field settings.
         * @param array  $props List of properties.
         * @param string $error Error message.
         *
         * @return string
         */
        public function ajax_error_field_name($name, $field, $props, $error)
        {
        }
    }
    /**
     * Single line text field.
     *
     * @since 1.0.0
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
         * Define additional field properties for the inputmask on AMP pages.
         *
         * @since 1.7.6
         *
         * @param array $properties Field properties.
         * @param array $field      Field settings.
         *
         * @return array
         */
        private function get_amp_input_mask_properties($properties, $field)
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
         * Format and sanitize field.
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
        /**
         * Validate field on form submit.
         *
         * @since 1.6.2
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
     * Paragraph text field.
     *
     * @since 1.0.0
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
         * Get the value, that is used to prefill via dynamic or fallback population.
         * Based on field data and current properties.
         *
         * @since 1.6.4
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
         * Format and sanitize field.
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
        /**
         * Validate field on form submit.
         *
         * @since 1.6.2
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
     * Provider class.
     *
     * @since 1.0.0
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
         * Store the API connections.
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
         * Hooks.
         *
         * @since 1.6.8
         */
        private function hooks()
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
        public function register_provider($providers = [])
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
        public function get_form_fields($form = \false, $whitelist = [])
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
        public function get_form_field_select($form_fields = [], $form_field_type = '')
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
        public function api_auth($data = [], $form_id = '')
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
        public function output_connection($connection_id = '', $connection = [], $form = '')
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
        public function output_connection_header($connection_id = '', $connection = [])
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
        public function output_accounts($connection_id = '', $connection = [])
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
        public function output_lists($connection_id = '', $connection = [])
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
        public function output_groups($connection_id = '', $connection = [])
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
        public function output_fields($connection_id = '', $connection = [], $form = '')
        {
        }
        /**
         * Provider connection conditional options HTML.
         *
         * @since 1.0.0
         *
         * @param string       $connection_id Unique connection ID.
         * @param array        $connection    Configured connection properties.
         * @param string|array $form          Form properties.
         *
         * @return string
         */
        public function output_conditionals($connection_id = '', $connection = [], $form = '')
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
        public function output_options($connection_id = '', $connection = [])
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
         * Get provider configured status.
         *
         * @since 1.6.8
         */
        private function get_configured()
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
         * Wrap the builder content with the required markup.
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
         * @param array $active   Array of active connections.
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
     * @since 1.3.6
     */
    class WPForms_Constant_Contact extends \WPForms_Provider
    {
        /**
         * Provider access token.
         *
         * @since 1.3.6
         *
         * @var string
         */
        public $access_token;
        /**
         * Provider API key.
         *
         * @since 1.3.6
         *
         * @var string
         */
        public $api_key = 'c58xq3r27udz59h9rrq7qnvf';
        /**
         * Sign up link.
         *
         * @since 1.3.6
         *
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
         * @param int   $entry_id  Saved entry ID.
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
         * @param array  $data    Contact data.
         * @param string $form_id Form ID.
         *
         * @return WP_Error|string Unique ID or error object
         */
        public function api_auth($data = [], $form_id = '')
        {
        }
        /**
         * Get account information.
         *
         * @since 1.7.6
         *
         * @return array|WP_Error
         */
        public function get_account_information()
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
         *
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
         * @param string $connection_id Connection Id.
         * @param array  $connection    Connection data.
         *
         * @return string
         */
        public function output_groups($connection_id = '', $connection = [])
        {
        }
        /**
         * Default content for the provider settings panel in the form builder.
         *
         * @since 1.6.8
         *
         * @param string $content Default content.
         *
         * @return string
         */
        public function builder_settings_default_content($content)
        {
        }
        /*************************************************************************
         * Integrations tab methods - these methods relate to the settings page. *
         *************************************************************************/
        /**
         * AJAX to add a provider from the settings integrations tab.
         *
         * @since 1.7.6
         */
        public function integrations_tab_add()
        {
        }
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
         * @since 1.6.7.1 Added parameter $notice_id.
         *
         * @param string $notice_id Notice ID (slug).
         */
        public function connect_dismiss($notice_id = '')
        {
        }
    }
    /**
     * WPForms Lite. Load Lite-specific features/functionality.
     *
     * @since 1.2.0
     */
    class WPForms_Lite
    {
        /**
         * Primary class constructor.
         *
         * @since 1.2.2
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
         * @param WPForms_Builder_Panel_Settings $settings Builder panel settings.
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
         * @param string $view Current view inside the plugin settings page.
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
         * @deprecated 1.6.7
         */
        public function addon_page_enqueues()
        {
        }
        /**
         * Addons page.
         *
         * @since 1.0.0
         * @deprecated 1.6.7
         */
        public function addons_page()
        {
        }
        /**
         * Increase entries count once a form is submitted.
         *
         * @since 1.5.9
         * @since 1.8.2 Added Payment ID.
         *
         * @param array $fields     Set of form fields.
         * @param array $entry      Entry contents.
         * @param array $form_data  Form data.
         * @param int   $entry_id   Entry ID.
         * @param int   $payment_id Payment ID for the payment form.
         */
        public function update_entry_count($fields, $entry, $form_data, $entry_id, $payment_id)
        {
        }
        /**
         * Submit entry to the Lite Connect API.
         *
         * @since 1.7.4
         * @since 1.8.2 Added Payment ID.
         *
         * @param array $fields     Set of form fields.
         * @param array $entry      Entry contents.
         * @param array $form_data  Form data.
         * @param int   $entry_id   Entry ID.
         * @param int   $payment_id Payment ID for the payment form.
         */
        public function entry_submit($fields, $entry, $form_data, $entry_id, $payment_id)
        {
        }
        /**
         * Add Lite-specific templates to the list of searchable template paths.
         *
         * @since 1.6.6
         *
         * @param array $paths Paths to templates.
         *
         * @return array
         */
        public function add_templates($paths)
        {
        }
        /**
         * Render Upgrade to Pro admin bar menu item.
         *
         * @since 1.7.4
         *
         * @param WP_Admin_Bar $wp_admin_bar WordPress Admin Bar object.
         */
        public function upgrade_to_pro_menu(\WP_Admin_Bar $wp_admin_bar)
        {
        }
        /**
         * Handle plugin installation upon activation.
         *
         * @since 1.7.4
         */
        public function install()
        {
        }
    }
}
namespace WPForms\Access {
    /**
     * Access/Capability management.
     *
     * @since 1.5.8
     */
    class Capabilities
    {
        /**
         * Init class.
         *
         * @since 1.5.8
         */
        public function init()
        {
        }
        /**
         * Init conditions.
         *
         * @since 1.5.8.2
         */
        public function init_allowed()
        {
        }
        /**
         * Check permissions for currently logged in user.
         *
         * @since 1.5.8
         *
         * @param array|string $caps Capability name(s).
         * @param int          $id   Optional. ID of the specific object to check against if capability is a "meta" cap.
         *                           "Meta" capabilities, e.g. 'edit_post', 'edit_user', etc., are capabilities used
         *                           by map_meta_cap() to map to other "primitive" capabilities, e.g. 'edit_posts',
         *                           edit_others_posts', etc. Accessed via func_get_args() and passed to WP_User::has_cap(),
         *                           then map_meta_cap().
         *
         * @return bool
         */
        public function current_user_can($caps = [], $id = 0)
        {
        }
        /**
         * Get a first valid capability from an array of capabilities.
         *
         * @since 1.5.8
         *
         * @param array $caps Array of capabilities to check.
         *
         * @return string
         */
        public function get_menu_cap($caps)
        {
        }
    }
}
namespace WPForms\Lite\Reports {
    /**
     * Generate form submissions reports.
     *
     * @since 1.5.4
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
         * Cache the result.
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
     * WPForms Class Loader.
     *
     * @since 1.5.8
     */
    class Loader
    {
        /**
         * Classes to register.
         *
         * @since 1.5.8
         *
         * @var array
         */
        private $classes = [];
        /**
         * Loader init.
         *
         * @since 1.5.8
         */
        public function init()
        {
        }
        /**
         * Populate the classes to register.
         *
         * @since 1.5.8
         */
        protected function populate_classes()
        {
        }
        /**
         * Populate the Forms related classes.
         *
         * @since 1.6.2
         */
        private function populate_forms()
        {
        }
        /**
         * Populate Frontend related classes.
         *
         * @since 1.8.1
         */
        private function populate_frontend()
        {
        }
        /**
         * Populate Admin related classes.
         *
         * @since 1.6.0
         */
        private function populate_admin()
        {
        }
        /**
         * Populate Fields related classes.
         *
         * @since 1.8.2
         */
        private function populate_fields()
        {
        }
        /**
         * Populate Forms Overview admin page related classes.
         *
         * @since 1.7.5
         */
        private function populate_forms_overview()
        {
        }
        /**
         * Populate Form Builder related classes.
         *
         * @since 1.6.8
         */
        private function populate_builder()
        {
        }
        /**
         * Populate database classes.
         *
         * @since 1.8.2
         */
        private function populate_db()
        {
        }
        /**
         * Populate migration classes.
         *
         * @since 1.5.9
         */
        private function populate_migrations()
        {
        }
        /**
         * Populate access management (capabilities) classes.
         *
         * @since 1.5.8
         */
        private function populate_capabilities()
        {
        }
        /**
         * Populate tasks related classes.
         *
         * @since 1.5.9
         */
        private function populate_tasks()
        {
        }
        /**
         * Populate smart tags loaded classes.
         *
         * @since 1.6.7
         */
        private function populate_smart_tags()
        {
        }
        /**
         * Populate logger loaded classes.
         *
         * @since 1.6.3
         */
        private function populate_logger()
        {
        }
        /**
         * Populate education related classes.
         *
         * @since 1.6.6
         */
        private function populate_education()
        {
        }
        /**
         * Populate robots loaded class.
         *
         * @since 1.7.0
         */
        private function populate_robots()
        {
        }
        /**
         * Populate AntiSpam loaded classes.
         *
         * @since 1.7.8
         */
        private function populate_anti_spam()
        {
        }
    }
    /**
     * Main WPForms class.
     *
     * @since 1.0.0
     */
    #[\AllowDynamicProperties]
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
         * Classes registry.
         *
         * @since 1.5.7
         *
         * @var array
         */
        private $registry = [];
        /**
         * List of legacy public properties.
         *
         * @since 1.6.8
         *
         * @var string[]
         */
        private $legacy_properties = ['form', 'entry', 'entry_fields', 'entry_meta', 'frontend', 'process', 'smart_tags', 'license'];
        /**
         * Paid returns true, free (Lite) returns false.
         *
         * @since 1.3.9
         * @since 1.7.3 changed to private.
         *
         * @var bool
         */
        private $pro = false;
        /**
         * Backward compatibility method for accessing the class registry in an old way,
         * e.g. 'wpforms()->form' or 'wpforms()->entry'.
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
         * Only one instance of WPForms exists in memory at any one time.
         * Also prevent the need to define globals all over the place.
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
         * @param array $class Class registration info.
         */
        public function register($class)
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
         * @return mixed|stdClass|null
         */
        public function get($name)
        {
        }
        /**
         * Get the list of all custom tables starting with `wpforms_*`.
         *
         * @since 1.6.3
         *
         * @return array List of table names.
         */
        public function get_existing_custom_tables()
        {
        }
        /**
         * Whether the current instance of the plugin is a paid version, or free.
         *
         * @since 1.7.3
         *
         * @return bool
         */
        public function is_pro()
        {
        }
    }
}
namespace {
    /**
     * Get notification state, whether it's opened or closed.
     *
     * @since      1.4.1
     * @deprecated 1.4.8
     *
     * @param int $notification_id Notification ID.
     *
     * @param int $form_id         Form ID.
     *
     * @return string
     */
    function wpforms_builder_notification_get_state($form_id, $notification_id)
    {
    }
    /**
     * Convert bytes to megabytes (or in some cases KB).
     *
     * @since      1.0.0
     * @deprecated 1.6.2
     *
     * @param int $bytes Bytes to convert to a readable format.
     *
     * @return string
     */
    function wpforms_size_to_megabytes($bytes)
    {
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
     * Output the WPForms admin header.
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
     * @since 1.6.9 Added callback for removing on `admin_footer` hook.
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
     * @param string $medium  URL parameter: utm_medium.
     * @param string $content URL parameter: utm_content.
     *
     * @return string
     */
    function wpforms_admin_upgrade_link($medium = 'link', $content = '')
    {
    }
    /**
     * Check the current PHP version and display a notice if on unsupported PHP.
     *
     * @since 1.4.0.1
     * @since 1.5.0 Raising this awareness of old PHP version message from 5.2 to 5.3.
     * @since 1.7.9 Raising this awareness of old PHP version message to 7.1.
     * @since 1.8.4 Raising this awareness of old PHP version message to 7.3.
     */
    function wpforms_check_php_version()
    {
    }
    /**
     * Get an upgrade modal text.
     *
     * @since 1.4.4
     *
     * @param string $type Either "pro" or "elite". Default is "pro".
     *
     * @return string
     */
    function wpforms_get_upgrade_modal_text($type = 'pro')
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
     * Save a form.
     *
     * @since 1.0.0
     */
    function wpforms_save_form()
    {
    }
    /**
     * Create a new form.
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
     * @since 1.6.2.3 Updated the permissions checking.
     */
    function wpforms_deactivate_addon()
    {
    }
    /**
     * Activate addon.
     *
     * @since 1.0.0
     * @since 1.6.2.3 Updated the permissions checking.
     */
    function wpforms_activate_addon()
    {
    }
    /**
     * Install addon.
     *
     * @since 1.0.0
     * @since 1.6.2.3 Updated the permissions checking.
     */
    function wpforms_install_addon()
    {
    }
    /**
     * Search pages for dropdown.
     *
     * @since 1.7.9
     */
    function wpforms_ajax_search_pages_for_dropdown()
    {
    }
    /**
     * Register WPForms plugin widgets.
     */
    function wpforms_register_widgets()
    {
    }
    /**
     * Retrieves the current environment type.
     *
     * The type can be set via the `WP_ENVIRONMENT_TYPE` global system variable,
     * or a constant of the same name.
     *
     * Possible values are 'local', 'development', 'staging', and 'production'.
     * If not set, the type defaults to 'production'.
     *
     * @return string The current environment type.
     */
    function wp_get_environment_type()
    {
    }
    /**
     * Helper functions to work with licenses, permissions and capabilities.
     *
     * @since 1.8.0
     */
    /**
     * Determine if the plugin/addon installations are allowed.
     *
     * @since 1.6.2.3
     *
     * @param string $type Should be `plugin` or `addon`.
     *
     * @return bool
     */
    function wpforms_can_install($type)
    {
    }
    /**
     * Determine if the plugin/addon activations are allowed.
     *
     * @since 1.7.3
     *
     * @param string $type Should be `plugin` or `addon`.
     *
     * @return bool
     */
    function wpforms_can_activate($type)
    {
    }
    /**
     * Determine if the plugin/addon installations/activations are allowed.
     *
     * @since 1.7.3
     *
     * @internal Use wpforms_can_activate() or wpforms_can_install() instead.
     *
     * @param string $what Should be 'activate' or 'install'.
     * @param string $type Should be `plugin` or `addon`.
     *
     * @return bool
     */
    function wpforms_can_do($what, $type)
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
     * Get the current installation license key.
     *
     * @since 1.6.2.3
     * @since 1.8.0 WPFORMS_LICENSE_KEY constant has higher priority than the DB option.
     *
     * @return string
     */
    function wpforms_get_license_key()
    {
    }
    /**
     * Get when WPForms was first installed.
     *
     * @since 1.6.0
     *
     * @param string $type Specific install type to check for.
     *
     * @return int|false Unix timestamp. False on failure.
     */
    function wpforms_get_activated_timestamp($type = '')
    {
    }
    /**
     * Retrieve a timestamp when WPForms was upgraded.
     *
     * @since 1.7.5
     *
     * @param string $version Specific plugin version to check for.
     *
     * @return int|false Unix timestamp or migration status. False on failure.
     *                   Available migration statuses:
     *                   -2 if migration is failed;
     *                   -1 if migration is started (in progress);
     *                    0 if migration is completed, but no luck to set a timestamp.
     */
    function wpforms_get_upgraded_timestamp($version)
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
     * Check WPForms permissions for currently logged in user.
     * Both short (e.g. 'view_own_forms') or long (e.g. 'wpforms_view_own_forms') capability name can be used.
     * Only WPForms capabilities get processed.
     *
     * @since 1.4.4
     *
     * @param array|string $caps Capability name(s).
     * @param int          $id   ID of the specific object to check against if capability is a "meta" cap. "Meta"
     *                           capabilities, e.g. 'edit_post', 'edit_user', etc., are capabilities used by
     *                           map_meta_cap() to map to other "primitive" capabilities, e.g. 'edit_posts',
     *                           edit_others_posts', etc. Accessed via func_get_args() and passed to
     *                           WP_User::has_cap(), then map_meta_cap().
     *
     * @return bool
     */
    function wpforms_current_user_can($caps = [], $id = 0)
    {
    }
    /**
     * Search for posts editable by user.
     *
     * @since 1.7.9
     *
     * @param string $search_term Optional search term. Default ''.
     * @param array  $args        Args {
     *                            Optional. An array of arguments.
     *
     * @type string   $post_type   Post type to search for.
     * @type string[] $post_status Post status to search for.
     * @type int      $count       Number of results to return. Default 20.
     * }
     *
     * @return array
     * @noinspection PhpTernaryExpressionCanBeReducedToShortVersionInspection
     * @noinspection ElvisOperatorCanBeUsedInspection
     */
    function wpforms_search_posts($search_term = '', $args = [])
    {
    }
    /**
     * Search pages by search term and return an array containing
     * `value` and `label` which is the post ID and post title respectively.
     *
     * @since 1.7.9
     *
     * @param string $search_term The search term.
     * @param array  $args        Optional. An array of arguments.
     *
     * @return array
     */
    function wpforms_search_pages_for_dropdown($search_term, $args = [])
    {
    }
    /**
     * Helper functions to work with colors.
     *
     * @since 1.8.0
     */
    /**
     * Detect if we should use a light or dark color based on the color given.
     *
     * @link https://docs.woocommerce.com/wc-apidocs/source-function-wc_light_or_dark.html#608-627
     *
     * @since 1.2.5
     *
     * @param mixed  $color Color value.
     * @param string $dark  Dark color value (default: '#000000').
     * @param string $light Light color value (default: '#FFFFFF').
     *
     * @return string
     */
    function wpforms_light_or_dark($color, $dark = '#000000', $light = '#FFFFFF')
    {
    }
    /**
     * Convert hex color value to RGB.
     *
     * @since 1.7.9
     *
     * @param string $hex Color value in hex format.
     *
     * @return string Color value in RGB format.
     */
    function wpforms_hex_to_rgb($hex)
    {
    }
    /**
     * Helper functions to get data presets.
     *
     * @since 1.8.0
     */
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
     *
     * @return array
     */
    function wpforms_months()
    {
    }
    /**
     * Calendar Days.
     *
     * @since 1.3.7
     *
     * @return array
     */
    function wpforms_days()
    {
    }
    /**
     * Return available date formats.
     *
     * @since 1.7.5
     *
     * @return array
     */
    function wpforms_date_formats()
    {
    }
    /**
     * Return available time formats.
     *
     * @since 1.7.7
     *
     * @return array
     */
    function wpforms_time_formats()
    {
    }
    /**
     * Helper functions to work with dates, time and timezones.
     *
     * @since 1.8.0
     */
    /**
     * Return date and time formatted as expected.
     *
     * @since 1.6.3
     *
     * @param string|int $date       Date to format.
     * @param string     $format     Optional. Format for the date and time.
     * @param bool       $gmt_offset Optional. GTM offset.
     *
     * @return string
     */
    function wpforms_datetime_format($date, $format = '', $gmt_offset = \false)
    {
    }
    /**
     * Return date formatted as expected.
     *
     * @since 1.6.3
     *
     * @param string|int $date       Date to format.
     * @param string     $format     Optional. Format for the date.
     * @param bool       $gmt_offset Optional. GTM offset.
     *
     * @return string
     */
    function wpforms_date_format($date, $format = '', $gmt_offset = \false)
    {
    }
    /**
     * Get the certain date of a specified day in a specified format.
     *
     * @since 1.4.4
     * @since 1.6.3 Added $use_gmt_offset parameter.
     *
     * @param string $period         Supported values: start, end.
     * @param string $timestamp      Default is the current timestamp, if left empty.
     * @param string $format         Default is a MySQL format.
     * @param bool   $use_gmt_offset Use GTM offset.
     *
     * @return string
     */
    function wpforms_get_day_period_date($period, $timestamp = '', $format = 'Y-m-d H:i:s', $use_gmt_offset = \false)
    {
    }
    /**
     * Retrieve a timezone from the site settings as a `DateTimeZone` object.
     *
     * Timezone can be based on a PHP timezone string or a ±HH:MM offset.
     *
     * @since 1.6.6
     *
     * @return DateTimeZone Timezone object.
     */
    function wpforms_get_timezone()
    {
    }
    /**
     * Check whether plugin works in a debug mode.
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
     * @return string|void
     */
    function wpforms_debug_data($data, $echo = \true)
    {
    }
    /**
     * Log helper.
     *
     * @since 1.0.0
     *
     * @param string $title   Title of a log message.
     * @param mixed  $message Content of a log message.
     * @param array  $args    Expected keys: form_id, meta, parent.
     */
    function wpforms_log($title = '', $message = '', $args = [])
    {
    }
    /**
     * Wrapper for set_time_limit to see if it is enabled.
     *
     * @since 1.6.4
     *
     * @param int $limit Time limit.
     */
    function wpforms_set_time_limit($limit = 0)
    {
    }
    /**
     * Helpers functions for the Education pages.
     *
     * @since 1.8.2.2
     */
    /**
     * Get the button.
     *
     * @since 1.8.2.2
     *
     * @param string $action       Action to perform.
     * @param bool   $plugin_allow Is plugin allowed.
     * @param string $path         Plugin file.
     * @param string $url          URL for download plugin.
     * @param array  $utm          UTM parameters.
     */
    function wpforms_edu_get_button($action, $plugin_allow, $path, $url, $utm)
    {
    }
    /**
     * Get the upgrade button.
     *
     * @since 1.8.2.2
     *
     * @param array $utm     UTM parameters.
     * @param array $classes Classes.
     */
    function wpforms_edu_get_upgrade_button($utm, $classes = [])
    {
    }
    /**
     * Decode special characters, both alpha- (<) and numeric-based (').
     * Sanitize recursively, preserve new lines.
     * Handle all the possible mixed variations of < and `&lt;` that can be processed into tags.
     *
     * @since 1.4.1
     * @since 1.6.0 Sanitize recursively, preserve new lines.
     *
     * @param string $string Raw string to decode.
     *
     * @return string
     */
    function wpforms_decode_string($string)
    {
    }
    /**
     * Sanitize key, primarily used for looking up options.
     *
     * @since 1.3.9
     *
     * @param string $key Key name.
     *
     * @return string
     */
    function wpforms_sanitize_key($key = '')
    {
    }
    /**
     * Sanitize hex color.
     *
     * @since 1.2.1
     *
     * @param string $color Color value.
     *
     * @return string
     */
    function wpforms_sanitize_hex_color($color)
    {
    }
    /**
     * Sanitize error message, primarily used during form frontend output.
     *
     * @since 1.3.7
     * @since 1.7.6 Expand list of allowed HTML tags and attributes.
     *
     * @param string $error Error message.
     *
     * @return string
     */
    function wpforms_sanitize_error($error = '')
    {
    }
    /**
     * Sanitize a string, that can be a multiline.
     *
     * @uses wpforms_sanitize_text_deeply()
     *
     * @since 1.4.1
     *
     * @param string $string String to deeply sanitize.
     *
     * @return string Sanitized string, or empty string if not a string provided.
     */
    function wpforms_sanitize_textarea_field($string)
    {
    }
    /**
     * Deeply sanitize the string, preserve newlines if needed.
     * Prevent maliciously prepared strings from containing HTML tags.
     *
     * @since 1.6.0
     *
     * @param string $string        String to deeply sanitize.
     * @param bool   $keep_newlines Whether to keep newlines. Default: false.
     *
     * @return string Sanitized string, or empty string if not a string provided.
     */
    function wpforms_sanitize_text_deeply($string, $keep_newlines = \false)
    {
    }
    /**
     * Sanitize an HTML string with a set of allowed HTML tags.
     *
     * @since 1.7.0
     *
     * @param string $value String to sanitize.
     *
     * @return string Sanitized string.
     */
    function wpforms_sanitize_richtext_field($value)
    {
    }
    /**
     * Escaping for Rich Text field values.
     *
     * @since 1.7.0
     *
     * @param string $value Text to escape.
     *
     * @return string Escaped text.
     */
    function wpforms_esc_richtext_field($value)
    {
    }
    /**
     * Retrieve allowed HTML tags for Rich Text field.
     *
     * @since 1.7.0
     *
     * @return array Array of allowed tags.
     */
    function wpforms_get_allowed_html_tags_for_richtext_field()
    {
    }
    /**
     * Sanitize an array, that consists of values as strings.
     * After that - merge all array values into multiline string.
     *
     * @since 1.4.1
     *
     * @param array $array Data to sanitize.
     *
     * @return mixed If not an array is passed (or empty var) - return unmodified var. Otherwise - a merged array into multiline string.
     */
    function wpforms_sanitize_array_combine($array)
    {
    }
    /**
     * Format, sanitize, and return/echo HTML element ID, classes, attributes,
     * and data attributes.
     *
     * @since 1.3.7
     *
     * @param string $id    HTML id attribute value.
     * @param array  $class A list of classnames for the class attribute.
     * @param array  $datas Data attributes.
     * @param array  $atts  Any additional HTML attributes and their values.
     * @param bool   $echo  Whether to echo the output or just return it. Defaults to return.
     *
     * @return string|void
     */
    function wpforms_html_attributes($id = '', $class = [], $datas = [], $atts = [], $echo = \false)
    {
    }
    /**
     * Sanitize string of CSS classes.
     *
     * @since 1.2.1
     *
     * @param array|string $classes CSS classes.
     * @param bool         $convert True will convert strings to array and vice versa.
     *
     * @return string|array
     */
    function wpforms_sanitize_classes($classes, $convert = \false)
    {
    }
    /**
     * Include a template - alias to \WPForms\Helpers\Template::get_html.
     * Use 'require' if $args are passed or 'load_template' if not.
     *
     * @since 1.5.6
     *
     * @param string $template_name Template name.
     * @param array  $args          Arguments.
     * @param bool   $extract       Extract arguments.
     *
     * @throws RuntimeException If extract() tries to modify the scope.
     *
     * @return string Compiled HTML.
     */
    function wpforms_render($template_name, $args = [], $extract = \false)
    {
    }
    /**
     * Alias for default readonly function.
     *
     * @since 1.6.9
     *
     * @param mixed $readonly One of the values to compare.
     * @param mixed $current  The other value to compare if not just true.
     * @param bool  $echo     Whether to echo or just return the string.
     *
     * @return string HTML attribute or empty string.
     */
    function wpforms_readonly($readonly, $current = \true, $echo = \true)
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
     * Escape unselected choices for radio/checkbox fields.
     *
     * @since 1.8.3
     *
     * @param string $formatted_field HTML field.
     *
     * @return string
     */
    function wpforms_esc_unselected_choices($formatted_field)
    {
    }
    /**
     * Helper functions to work with form fields, generic and specific to certain field types.
     *
     * @since 1.8.0
     */
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
     * Return field choice properties for field configured with dynamic choices.
     *
     * @since 1.4.5
     *
     * @param array $field     Field settings.
     * @param int   $form_id   Form ID.
     * @param array $form_data Form data and settings.
     *
     * @return false|array
     */
    function wpforms_get_field_dynamic_choices($field, $form_id, $form_data = [])
    {
    }
    /**
     * Build and return either a taxonomy or post type object that is
     * nested to accommodate any hierarchy.
     *
     * @since 1.3.9
     * @since 1.5.0 Return array only. Empty array of no data.
     *
     * @param array $args Object arguments to pass to data retrieval function.
     * @param bool  $flat Preserve hierarchy or not. False by default - preserve it.
     *
     * @return array
     */
    function wpforms_get_hierarchical_object($args = [], $flat = \false)
    {
    }
    /**
     * Sort a nested array of objects.
     *
     * @since 1.6.5
     *
     * @param array  $objects An array of objects to sort.
     * @param string $orderby The object field to order by.
     * @param string $order   Order direction.
     */
    function _wpforms_sort_hierarchical_object(&$objects, $orderby, $order)
    {
    }
    /**
     * Search a given array and find the parent of the provided object.
     *
     * @since 1.3.9
     *
     * @param object $child      Current child.
     * @param array  $parents    Parents list.
     * @param array  $children   Children list.
     * @param string $ref_parent Parent reference.
     */
    function _wpforms_get_hierarchical_object_search($child, &$parents, &$children, $ref_parent)
    {
    }
    /**
     * Flatten a hierarchical object.
     *
     * @since 1.3.9
     *
     * @param array  $array    Array to process.
     * @param array  $output   Processed output.
     * @param string $ref_name Name reference.
     * @param int    $level    Nesting level.
     */
    function _wpforms_get_hierarchical_object_flatten($array, &$output, $ref_name = 'name', $level = 0)
    {
    }
    /**
     * Get sanitized post title or "no title" placeholder.
     *
     * The placeholder is prepended with post ID.
     *
     * @since 1.7.6
     *
     * @param WP_Post|object $post Post object.
     *
     * @return string Post title.
     */
    function wpforms_get_post_title($post)
    {
    }
    /**
     * Get sanitized term name or "no name" placeholder.
     *
     * The placeholder is prepended with term ID.
     *
     * @since 1.7.6
     *
     * @param WP_Term $term Term object.
     *
     * @return string Term name.
     */
    function wpforms_get_term_name($term)
    {
    }
    /**
     * Return information about pages if the form has multiple pages.
     *
     * @since 1.3.7
     *
     * @param WP_Post|array $form Form data.
     *
     * @return false|array Page Break details or false.
     */
    function wpforms_get_pagebreak_details($form = \false)
    {
    }
    /**
     * Helper functions to work with forms and form data.
     *
     * @since 1.8.0
     */
    /**
     * Helper function to trigger displaying a form.
     *
     * @since 1.0.2
     *
     * @param mixed $form_id Form ID.
     * @param bool  $title   Form title.
     * @param bool  $desc    Form description.
     */
    function wpforms_display($form_id = \false, $title = \false, $desc = \false)
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
     * Perform json_decode and unslash.
     *
     * IMPORTANT: This function decodes the result of wpforms_encode() properly only if
     * wp_insert_post() or wp_update_post() were used after the data is encoded.
     * Both wp_insert_post() and wp_update_post() remove excessive slashes added by wpforms_encode().
     *
     * Using wpforms_decode() on wpforms_encode() result directly
     * (without using wp_insert_post() or wp_update_post() first) always returns null or false.
     *
     * @since 1.0.0
     *
     * @param string $data Data to decode.
     *
     * @return array|false|null
     */
    function wpforms_decode($data)
    {
    }
    /**
     * Perform json_encode and wp_slash.
     *
     * IMPORTANT: This function adds excessive slashes to prevent data damage
     * by wp_insert_post() or wp_update_post() that use wp_unslash() on all the incoming data.
     *
     * Decoding the result of this function by wpforms_decode() directly
     * (without using wp_insert_post() or wp_update_post() first) always returns null or false.
     *
     * @since 1.3.1.3
     *
     * @param mixed $data Data to encode.
     *
     * @return string|false
     */
    function wpforms_encode($data = \false)
    {
    }
    /**
     * Decode json-encoded string if it is in json format.
     *
     * @since 1.7.5
     *
     * @param string $string      A string.
     * @param bool   $associative Decode to the associative array if true. Decode to object if false.
     *
     * @return array|string
     */
    function wpforms_json_decode($string, $associative = \false)
    {
    }
    /**
     * Get the value of a specific WPForms setting.
     *
     * @since 1.0.0
     *
     * @param string $key     Setting name.
     * @param mixed  $default Default value to return if the setting is not available.
     * @param string $option  Option key, defaults to `wpforms_settings` in the `wp_options` table.
     *
     * @return mixed
     */
    function wpforms_setting($key, $default = \false, $option = 'wpforms_settings')
    {
    }
    /**
     * Update plugin settings option and allow it to be filterable.
     *
     * The purpose of this function is to save settings when the "Save Settings" button is clicked.
     * If you are programmatically saving setting in the database in cases not triggered by user,
     * use update_option() instead.
     *
     * @since 1.6.6
     *
     * @param array $settings A plugin settings array that is saved into options table.
     *
     * @return bool
     */
    function wpforms_update_settings($settings)
    {
    }
    /**
     * Check if form provided contains the specified field type.
     *
     * @since 1.0.5
     *
     * @param array|string $type     Field type or types.
     * @param array|object $form     Form data object.
     * @param bool         $multiple Whether to check multiple field types.
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
     * @param string       $setting  Setting key.
     * @param object|array $form     Form data.
     * @param bool         $multiple Whether to check multiple settings.
     *
     * @return bool
     */
    function wpforms_has_field_setting($setting, $form, $multiple = \false)
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
     * @param mixed $form      Form data.
     * @param array $allowlist A list of allowed fields.
     *
     * @return mixed boolean or array
     */
    function wpforms_get_form_fields($form = \false, $allowlist = [])
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
     * @since 1.3.1
     * @since 1.5.0 More strict parameters. Always return an array.
     *
     * @param string $key       Meta key.
     * @param string $value     Meta value to check against.
     * @param array  $form_data Form data array.
     *
     * @return array Empty array, when no data is found.
     */
    function wpforms_get_form_fields_by_meta($key, $value, $form_data)
    {
    }
    /**
     * Retrieve the full config for CAPTCHA.
     *
     * @since 1.6.4
     *
     * @return array
     */
    function wpforms_get_captcha_settings()
    {
    }
    /**
     * Process smart tags.
     *
     * @since 1.7.1
     *
     * @param string $content   Content.
     * @param array  $form_data Form data.
     * @param array  $fields    List of fields.
     * @param string $entry_id  Entry ID.
     *
     * @return string
     */
    function wpforms_process_smart_tags($content, $form_data, $fields = [], $entry_id = '')
    {
    }
    /**
     * Helper functions to work with multidimensional arrays easier.
     *
     * @since 1.5.6
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
     * @param ArrayAccess|array $array Existing array.
     * @param string|int        $key   To check.
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
     * @param ArrayAccess|array $array   Where we want to get.
     * @param string            $key     Key with dot's.
     * @param mixed             $default Value.
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
     * @param ArrayAccess|array $array To check.
     * @param string            $key   Keys with dot's.
     *
     * @return bool
     */
    function wpforms_list_has($array, $key)
    {
    }
    /**
     * Determine if an array is associative.
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
     * Insert a value or key/value pair after a specific key in an array.
     * If key doesn't exist, value is appended to the end of the array.
     *
     * @since 1.5.8
     *
     * @param array  $array Array where to insert.
     * @param string $key   Insert after key.
     * @param array  $new   Array to insert.
     *
     * @return array
     */
    function wpforms_list_insert_after($array, $key, $new)
    {
    }
    /**
     * Cleanup $items array recursively removing from it all keys not existing in the $default array.
     *
     * @since 1.7.2
     *
     * @param array $items   Items.
     * @param array $default Default items.
     *
     * @return array
     */
    function wpforms_list_intersect_key($items, $default)
    {
    }
    /**
     * Helper functions related to privacy, geolocation and user data.
     *
     * @since 1.8.0
     */
    /**
     * Get the user IP address.
     *
     * @since 1.2.5
     * @since 1.7.3 Improve the IP detection quality by taking care of proxies (e.g. when the site is behind Cloudflare).
     *
     * Code based on the:
     *   - WordPress method \WP_Community_Events::get_unsafe_client_ip
     *   - Cloudflare documentation https://support.cloudflare.com/hc/en-us/articles/206776727
     *
     * @return string
     */
    function wpforms_get_ip()
    {
    }
    /**
     * Determine if collecting user's IP is allowed by GDPR setting (globally or per form).
     * Majority of our users have GDPR disabled.
     * So we remove this data from the request only when it's not needed:
     * 1) when GDPR is enabled AND globally disabled user details storage;
     * 2) when GDPR is enabled AND IP address processing is disabled on per form basis.
     *
     * @since 1.6.6
     *
     * @param array $form_data Form settings.
     *
     * @return bool
     */
    function wpforms_is_collecting_ip_allowed($form_data = [])
    {
    }
    /**
     * Determine if collecting cookies is allowed by GDPR setting.
     *
     * @since 1.7.5
     *
     * @return bool
     */
    function wpforms_is_collecting_cookies_allowed()
    {
    }
    /**
     * Helper functions to work with Providers API.
     *
     * @since 1.8.0
     */
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
     * @param array|false $options  If false is passed - provider will be removed. Otherwise saved.
     * @param string      $key      Optional key to identify which connection to update. If empty - generate a new one.
     */
    function wpforms_update_providers_options($provider, $options, $key = '')
    {
    }
    /**
     * Helper functions that were deprecated and can be removed in future.
     *
     * @since 1.8.0
     */
    /**
     * Get formatted [ id => title ] pages list.
     *
     * @since 1.7.2
     * @deprecated 1.7.9
     *
     * @todo Move to includes/deprecated.php
     *
     * @param array|string $args Array or string of arguments to retrieve pages.
     *
     * @return array
     */
    function wpforms_get_pages_list($args = [])
    {
    }
    /**
     * Dequeue enqueues by URI list.
     * Parts of URI (e.g. filename) is also supported.
     *
     * @since 1.6.1
     *
     * @param array|string         $uris     List of URIs or individual URI to dequeue.
     * @param WP_Scripts|WP_Styles $enqueues Enqueues list to dequeue from.
     */
    function wpforms_dequeue_by_uri($uris, $enqueues)
    {
    }
    /**
     * Dequeue scripts by URI list.
     * Parts of URI (e.g. filename) is also supported.
     *
     * @since 1.6.1
     *
     * @param array|string $uris List of URIs or individual URI to dequeue.
     */
    function wpforms_dequeue_scripts_by_uri($uris)
    {
    }
    /**
     * Dequeue styles by URI list.
     * Parts of URI (e.g. filename) is also supported.
     *
     * @since 1.6.1
     *
     * @param array|string $uris List of URIs or individual URI to dequeue.
     */
    function wpforms_dequeue_styles_by_uri($uris)
    {
    }
    /**
     * Check if form provided contains Page Break, if so give details.
     *
     * @since 1.0.0
     *
     * @todo It is not used since 1.4.0. Probably, it should be deprecated and suggest using the wpforms_get_pagebreak_details() function.
     *
     * @param WP_Post|array $form Form data.
     *
     * @return int|bool Pages count or false.
     */
    function wpforms_has_pagebreak($form = \false)
    {
    }
    /**
     * Try to find and return a top or bottom Page Break.
     *
     * @since 1.2.1
     *
     * @todo It is not used since 1.4.0. Probably, it should be deprecated and suggest using the wpforms_get_pagebreak_details() function.
     *
     * @param WP_Post|array $form Form data.
     * @param string|bool   $type Type of Page Break fields (top, bottom, pages or false).
     *
     * @return array|bool
     */
    function wpforms_get_pagebreak($form = \false, $type = \false)
    {
    }
    /**
     * Get meta key value for a form field.
     *
     * @since 1.1.9
     *
     * @param int|string $id        Field ID.
     * @param string     $key       Meta key.
     * @param mixed      $form_data Form data array.
     *
     * @return string
     */
    function wpforms_get_form_field_meta($id = '', $key = '', $form_data = '')
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
     * Chain monad, useful for chaining certain array or string related functions.
     *
     * @since 1.5.6
     *
     * @param mixed $value Any data.
     *
     * @return Chain
     */
    function wpforms_chain($value)
    {
    }
    /**
     * Convert object to an array.
     *
     * @since 1.1.7
     *
     * @param object $object Object to convert.
     *
     * @return mixed
     */
    function wpforms_object_to_array($object)
    {
    }
    /**
     * Insert an array into another array before/after a certain key.
     *
     * @link  https://gist.github.com/scribu/588429
     *
     * @since 1.3.9
     *
     * @param array  $array    The initial array.
     * @param array  $pairs    The array to insert.
     * @param string $key      The certain key.
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
     * @param array $data Any data.
     *
     * @return array
     */
    function wpforms_array_remove_empty_strings($data)
    {
    }
    /**
     * Count words in the string.
     *
     * @since 1.6.2
     *
     * @param string $string String value.
     *
     * @return integer Words count.
     */
    function wpforms_count_words($string)
    {
    }
    /**
     * Link a list of words or phrases with commas, but the last one – with a conjunction.
     *
     * For example:
     * [ 'Sullie', 'Pattie', 'me' ] with 'and' conjunction becomes 'Sullie, Pattie and me'.
     * [ 'Sullie', 'Pattie', 'me' ] with 'or' conjunction becomes 'Sullie, Pattie or me'.
     *
     * @since 1.8.0
     *
     * @param array  $list        A list of words or phrases to link together.
     * @param string $conjunction Coordinating conjunction to use for last word or phrase (usually – and, or).
     *                            The string is expected to be translatable.
     *
     * @return string Linked words and/or phrases.
     */
    function wpforms_conjunct($list, $conjunction)
    {
    }
    /**
     * Get the current URL.
     *
     * @since 1.0.0
     * @since 1.7.2 Refactored based on the `home_url` function.
     *
     * @return string
     */
    function wpforms_current_url()
    {
    }
    /**
     * Add UTM tags to a link that allows detecting traffic sources for our or partners' websites.
     *
     * @since 1.7.5
     *
     * @param string $link    Link to which you need to add UTM tags.
     * @param string $medium  The page or location description. Check your current page and try to find
     *                        and use an already existing medium for links otherwise, use a page name.
     * @param string $content The feature's name, the button's content, the link's text, or something
     *                        else that describes the element that contains the link.
     * @param string $term    Additional information for the content that makes the link more unique.
     *
     * @return string
     */
    function wpforms_utm_link($link, $medium, $content = '', $term = '')
    {
    }
    /**
     * Modify the default USer-Agent generated by wp_remote_*() to include additional information.
     *
     * @since 1.7.5.2
     *
     * @return string
     */
    function wpforms_get_default_user_agent()
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
     * Changes array of items into string of items, separated by comma and sql-escaped.
     *
     * @see https://coderwall.com/p/zepnaw
     *
     * @since 1.7.4
     *
     * @param mixed|array $items  Item(s) to be joined into string.
     * @param string      $format Can be %s or %d.
     *
     * @return string Items separated by comma and sql-escaped.
     */
    function wpforms_wpdb_prepare_in($items, $format = '%s')
    {
    }
    /**
     * Get the render engine slug according to the Modern Markup setting value and corresponding filter.
     *
     * @since 1.8.1
     *
     * @return string
     */
    function wpforms_get_render_engine()
    {
    }
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