<?php 
/**
	Admin Page Framework v3.7.15 by Michael Uno 
	Generated by PHP Class Files Script Generator <https://github.com/michaeluno/PHP-Class-Files-Script-Generator>
	<http://en.michaeluno.jp/localhost.com>
	Copyright (c) 2013-2016, Michael Uno; Licensed under MIT <http://opensource.org/licenses/MIT> */
class hub_AdminPageFramework_Form_View___CSS_Base extends hub_AdminPageFramework_FrameworkUtility {
    public $aAdded = array();
    public function add($sCSSRules) {
        $this->aAdded[] = $sCSSRules;
    }
    public function get() {
        $_sCSSRules = $this->_get() . PHP_EOL;
        $_sCSSRules.= $this->_getVersionSpecific();
        $_sCSSRules.= implode(PHP_EOL, $this->aAdded);
        return $_sCSSRules;
    }
    protected function _get() {
        return '';
    }
    protected function _getVersionSpecific() {
        return '';
    }
}
class hub_AdminPageFramework_Form_View___CSS_CollapsibleSection extends hub_AdminPageFramework_Form_View___CSS_Base {
    protected function _get() {
        return $this->_getCollapsibleSectionsRules();
    }
    private function _getCollapsibleSectionsRules() {
        $_sCSSRules = ".localhost.com-collapsible-sections-title.localhost.com-collapsible-type-box, .localhost.com-collapsible-section-title.localhost.com-collapsible-type-box{font-size:13px;background-color: #fff;padding: 15px 18px;margin-top: 1em; border-top: 1px solid #eee;border-bottom: 1px solid #eee;}.localhost.com-collapsible-sections-title.localhost.com-collapsible-type-box.collapsed.localhost.com-collapsible-section-title.localhost.com-collapsible-type-box.collapsed {border-bottom: 1px solid #dfdfdf;margin-bottom: 1em; }.localhost.com-collapsible-section-title.localhost.com-collapsible-type-box {margin-top: 0;}.localhost.com-collapsible-section-title.localhost.com-collapsible-type-box.collapsed {margin-bottom: 0;}#poststuff .metabox-holder .localhost.com-collapsible-sections-title.localhost.com-collapsible-type-box.localhost.com-section-title h3,#poststuff .metabox-holder .localhost.com-collapsible-section-title.localhost.com-collapsible-type-box.localhost.com-section-title h3{font-size: 1em;margin: 0;}.localhost.com-collapsible-sections-title.localhost.com-collapsible-type-box.accordion-section-title:after,.localhost.com-collapsible-section-title.localhost.com-collapsible-type-box.accordion-section-title:after {top: 12px;right: 15px;}.localhost.com-collapsible-sections-title.localhost.com-collapsible-type-box.accordion-section-title:after,.localhost.com-collapsible-section-title.localhost.com-collapsible-type-box.accordion-section-title:after {content: '\\f142';}.localhost.com-collapsible-sections-title.localhost.com-collapsible-type-box.accordion-section-title.collapsed:after,.localhost.com-collapsible-section-title.localhost.com-collapsible-type-box.accordion-section-title.collapsed:after {content: '\\f140';} .localhost.com-collapsible-sections-content.localhost.com-collapsible-content.accordion-section-content,.localhost.com-collapsible-section-content.localhost.com-collapsible-content.accordion-section-content,.localhost.com-collapsible-sections-content.localhost.com-collapsible-content-type-box, .localhost.com-collapsible-section-content.localhost.com-collapsible-content-type-box{border: 1px solid #dfdfdf;border-top: 0;background-color: #fff;}tbody.localhost.com-collapsible-content {display: table-caption; padding: 10px 20px 15px 20px;}tbody.localhost.com-collapsible-content.table-caption {display: table-caption; }.localhost.com-collapsible-toggle-all-button-container {margin-top: 1em;margin-bottom: 1em;width: 100%;display: table; }.localhost.com-collapsible-toggle-all-button.button {height: 36px;line-height: 34px;padding: 0 16px 6px;font-size: 20px;width: auto;}.flipped > .localhost.com-collapsible-toggle-all-button.button.dashicons {-moz-transform: scaleY(-1);-webkit-transform: scaleY(-1);transform: scaleY(-1);filter: flipv; }.localhost.com-collapsible-section-title.localhost.com-collapsible-type-box .localhost.com-repeatable-section-buttons {margin: 0;margin-right: 2em; margin-top: -0.32em;}.localhost.com-collapsible-section-title.localhost.com-collapsible-type-box .localhost.com-repeatable-section-buttons.section_title_field_sibling {margin-top: 0;}.localhost.com-collapsible-section-title.localhost.com-collapsible-type-box .repeatable-section-button {background: none; }.accordion-section-content.localhost.com-collapsible-content-type-button {background-color: transparent;}.localhost.com-collapsible-button {color: #888;margin-right: 0.4em;font-size: 0.8em;}.localhost.com-collapsible-button-collapse {display: inline;} .collapsed > * > .localhost.com-collapsible-button-collapse {display: none;}.localhost.com-collapsible-button-expand {display: none;}.collapsed > * > .localhost.com-collapsible-button-expand {display: inline;}";
        if (version_compare($GLOBALS['wp_version'], '3.8', '<')) {
            $_sCSSRules.= ".localhost.com-collapsible-sections-title.localhost.com-collapsible-type-box.accordion-section-title:after,.localhost.com-collapsible-section-title.localhost.com-collapsible-type-box.accordion-section-title:after {content: '';top: 18px;}.localhost.com-collapsible-sections-title.localhost.com-collapsible-type-box.accordion-section-title.collapsed:after,.localhost.com-collapsible-section-title.localhost.com-collapsible-type-box.accordion-section-title.collapsed:after {content: '';} .localhost.com-collapsible-toggle-all-button.button {font-size: 1em;}.localhost.com-collapsible-section-title.localhost.com-collapsible-type-box .localhost.com-repeatable-section-buttons {top: -8px;}";
        }
        return $_sCSSRules;
    }
}
