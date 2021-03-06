<?php 
/**
	Admin Page Framework v3.7.15 by Michael Uno 
	Generated by PHP Class Files Script Generator <https://github.com/michaeluno/PHP-Class-Files-Script-Generator>
	<http://en.michaeluno.jp/localhost.com>
	Copyright (c) 2013-2016, Michael Uno; Licensed under MIT <http://opensource.org/licenses/MIT> */
class hub_AdminPageFramework_Message {
    public $aMessages = array();
    public $aDefaults = array('option_updated' => 'The options have been updated.', 'option_cleared' => 'The options have been cleared.', 'export' => 'Export', 'export_options' => 'Export Options', 'import_options' => 'Import', 'import_options' => 'Import Options', 'submit' => 'Submit', 'import_error' => 'An error occurred while uploading the import file.', 'uploaded_file_type_not_supported' => 'The uploaded file type is not supported: %1$s', 'could_not_load_importing_data' => 'Could not load the importing data.', 'imported_data' => 'The uploaded file has been imported.', 'not_imported_data' => 'No data could be imported.', 'upload_image' => 'Upload Image', 'use_this_image' => 'Use This Image', 'insert_from_url' => 'Insert from URL', 'reset_options' => 'Are you sure you want to reset the options?', 'confirm_perform_task' => 'Please confirm your action.', 'specified_option_been_deleted' => 'The specified options have been deleted.', 'nonce_verification_failed' => 'A problem occurred while processing the form data. Please try again.', 'check_max_input_vars' => 'Not all form fields could not be sent. Please check your server settings of PHP <code>max_input_vars</code> and consult the server administrator to increase the value. <code>max input vars</code>: %1$s. <code>$_POST</code> count: %2$s', 'send_email' => 'Is it okay to send the email?', 'email_sent' => 'The email has been sent.', 'email_scheduled' => 'The email has been scheduled.', 'email_could_not_send' => 'There was a problem sending the email', 'title' => 'Title', 'author' => 'Author', 'categories' => 'Categories', 'tags' => 'Tags', 'comments' => 'Comments', 'date' => 'Date', 'show_all' => 'Show All', 'show_all_authors' => 'Show all Authors', 'powered_by' => 'Thank you for creating with', 'and' => 'and', 'settings' => 'Settings', 'manage' => 'Manage', 'select_image' => 'Select Image', 'upload_file' => 'Upload File', 'use_this_file' => 'Use This File', 'select_file' => 'Select File', 'remove_value' => 'Remove Value', 'select_all' => 'Select All', 'select_none' => 'Select None', 'no_term_found' => 'No term found.', 'select' => 'Select', 'insert' => 'Insert', 'use_this' => 'Use This', 'return_to_library' => 'Return to Library', 'queries_in_seconds' => '%1$s queries in %2$s seconds.', 'out_of_x_memory_used' => '%1$s out of %2$s MB (%3$s) memory used.', 'peak_memory_usage' => 'Peak memory usage %1$s MB.', 'initial_memory_usage' => 'Initial memory usage  %1$s MB.', 'allowed_maximum_number_of_fields' => 'The allowed maximum number of fields is {0}.', 'allowed_minimum_number_of_fields' => 'The allowed minimum number of fields is {0}.', 'add' => 'Add', 'remove' => 'Remove', 'allowed_maximum_number_of_sections' => 'The allowed maximum number of sections is {0}', 'allowed_minimum_number_of_sections' => 'The allowed minimum number of sections is {0}', 'add_section' => 'Add Section', 'remove_section' => 'Remove Section', 'toggle_all' => 'Toggle All', 'toggle_all_collapsible_sections' => 'Toggle all collapsible sections', 'reset' => 'Reset', 'yes' => 'Yes', 'no' => 'No', 'on' => 'On', 'off' => 'Off', 'enabled' => 'Enabled', 'disabled' => 'Disabled', 'supported' => 'Supported', 'not_supported' => 'Not Supported', 'functional' => 'Functional', 'not_functional' => 'Not Functional', 'too_long' => 'Too Long', 'acceptable' => 'Acceptable', 'no_log_found' => 'No log found.', 'method_called_too_early' => 'The method is called too early.', 'debug_info' => 'Debug Info', 'click_to_expand' => 'Click here to expand to view the contents.', 'click_to_collapse' => 'Click here to collapse the contents.', 'loading' => 'Loading...', 'please_enable_javascript' => 'Please enable JavaScript for better experience.');
    protected $_sTextDomain = 'localhost.com';
    static private $_aInstancesByTextDomain = array();
    public static function getInstance($sTextDomain = 'localhost.com') {
        $_oInstance = isset(self::$_aInstancesByTextDomain[$sTextDomain]) && (self::$_aInstancesByTextDomain[$sTextDomain] instanceof hub_AdminPageFramework_Message) ? self::$_aInstancesByTextDomain[$sTextDomain] : new hub_AdminPageFramework_Message($sTextDomain);
        self::$_aInstancesByTextDomain[$sTextDomain] = $_oInstance;
        return self::$_aInstancesByTextDomain[$sTextDomain];
    }
    public static function instantiate($sTextDomain = 'localhost.com') {
        return self::getInstance($sTextDomain);
    }
    public function __construct($sTextDomain = 'localhost.com') {
        $this->_sTextDomain = $sTextDomain;
        $this->aMessages = array_fill_keys(array_keys($this->aDefaults), null);
    }
    public function getTextDomain() {
        return $this->_sTextDomain;
    }
    public function set($sKey, $sValue) {
        $this->aMessages[$sKey] = $sValue;
    }
    public function get($sKey = '') {
        if (!$sKey) {
            return $this->_getAllMessages();
        }
        return isset($this->aMessages[$sKey]) ? __($this->aMessages[$sKey], $this->_sTextDomain) : __($this->{$sKey}, $this->_sTextDomain);
    }
    private function _getAllMessages() {
        $_aMessages = array();
        foreach ($this->aMessages as $_sLabel => $_sTranslation) {
            $_aMessages[$_sLabel] = $this->get($_sLabel);
        }
        return $_aMessages;
    }
    public function output($sKey) {
        echo $this->get($sKey);
    }
    public function __($sKey) {
        return $this->get($sKey);
    }
    public function _e($sKey) {
        $this->output($sKey);
    }
    public function __get($sPropertyName) {
        return isset($this->aDefaults[$sPropertyName]) ? $this->aDefaults[$sPropertyName] : $sPropertyName;
    }
    private function __doDummy() {
        __('The options have been updated.', 'localhost.com');
        __('The options have been cleared.', 'localhost.com');
        __('Export', 'localhost.com');
        __('Export Options', 'localhost.com');
        __('Import', 'localhost.com');
        __('Import Options', 'localhost.com');
        __('Submit', 'localhost.com');
        __('An error occurred while uploading the import file.', 'localhost.com');
        __('The uploaded file type is not supported: %1$s', 'localhost.com');
        __('Could not load the importing data.', 'localhost.com');
        __('The uploaded file has been imported.', 'localhost.com');
        __('No data could be imported.', 'localhost.com');
        __('Upload Image', 'localhost.com');
        __('Use This Image', 'localhost.com');
        __('Insert from URL', 'localhost.com');
        __('Are you sure you want to reset the options?', 'localhost.com');
        __('Please confirm your action.', 'localhost.com');
        __('The specified options have been deleted.', 'localhost.com');
        __('A problem occurred while processing the form data. Please try again.', 'localhost.com');
        __('Not all form fields could not be sent. Please check your server settings of PHP <code>max_input_vars</code> and consult the server administrator to increase the value. <code>max input vars</code>: %1$s. <code>$_POST</code> count: %2$s', 'localhost.com');
        __('Is it okay to send the email?', 'localhost.com');
        __('The email has been sent.', 'localhost.com');
        __('The email has been scheduled.', 'localhost.com');
        __('There was a problem sending the email', 'localhost.com');
        __('Title', 'localhost.com');
        __('Author', 'localhost.com');
        __('Categories', 'localhost.com');
        __('Tags', 'localhost.com');
        __('Comments', 'localhost.com');
        __('Date', 'localhost.com');
        __('Show All', 'localhost.com');
        __('Show All Authors', 'localhost.com');
        __('Thank you for creating with', 'localhost.com');
        __('and', 'localhost.com');
        __('Settings', 'localhost.com');
        __('Manage', 'localhost.com');
        __('Select Image', 'localhost.com');
        __('Upload File', 'localhost.com');
        __('Use This File', 'localhost.com');
        __('Select File', 'localhost.com');
        __('Remove Value', 'localhost.com');
        __('Select All', 'localhost.com');
        __('Select None', 'localhost.com');
        __('No term found.', 'localhost.com');
        __('Select', 'localhost.com');
        __('Insert', 'localhost.com');
        __('Use This', 'localhost.com');
        __('Return to Library', 'localhost.com');
        __('%1$s queries in %2$s seconds.', 'localhost.com');
        __('%1$s out of %2$s MB (%3$s) memory used.', 'localhost.com');
        __('Peak memory usage %1$s MB.', 'localhost.com');
        __('Initial memory usage  %1$s MB.', 'localhost.com');
        __('The allowed maximum number of fields is {0}.', 'localhost.com');
        __('The allowed minimum number of fields is {0}.', 'localhost.com');
        __('Add', 'localhost.com');
        __('Remove', 'localhost.com');
        __('The allowed maximum number of sections is {0}', 'localhost.com');
        __('The allowed minimum number of sections is {0}', 'localhost.com');
        __('Add Section', 'localhost.com');
        __('Remove Section', 'localhost.com');
        __('Toggle All', 'localhost.com');
        __('Toggle all collapsible sections', 'localhost.com');
        __('Reset', 'localhost.com');
        __('Yes', 'localhost.com');
        __('No', 'localhost.com');
        __('On', 'localhost.com');
        __('Off', 'localhost.com');
        __('Enabled', 'localhost.com');
        __('Disabled', 'localhost.com');
        __('Supported', 'localhost.com');
        __('Not Supported', 'localhost.com');
        __('Functional', 'localhost.com');
        __('Not Functional', 'localhost.com');
        __('Too Long', 'localhost.com');
        __('Acceptable', 'localhost.com');
        __('No log found.', 'localhost.com');
        __('The method is called too early: %1$s', 'localhost.com');
        __('Debug Info', 'localhost.com');
        __('Click here to expand to view the contents.', 'localhost.com');
        __('Click here to collapse the contents.', 'localhost.com');
        __('Loading...', 'localhost.com');
        __('Please enable JavaScript for better experience.', 'localhost.com');
    }
}
