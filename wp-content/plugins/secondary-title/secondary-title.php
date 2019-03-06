<?php
   /**
    * (C) 2018 by Kolja Nolte
    * kolja@koljanolte.com
    * https://www.koljanolte.com
    *
    * This program is free software; you can redistribute it and/or modify
    * it under the terms of the GNU General Public License as published by
    * the Free Software Foundation; either version 2 of the License, or
    * (at your option) any later version.
    *
    * @project Secondary Title
    */

   /**
    * Plugin Name:   Secondary Title
    * Plugin URI:    https://www.koljanolte.com/wordpress/plugins/secondary-title/
    * Description:   Adds a secondary title to posts, pages and custom post types.
    * Version:       1.9.7.5
    * Author:        Kolja Nolte
    * Author URI:    http://www.koljanolte.com
    * License:       GPLv2 or later
    * License URI:   http://www.gnu.org/licenses/gpl-2.0.html
    * Text Domain:   secondary-title
    * Domain Path:   /languages
    */

   /**
    * Stop script when the file is called directly.
    */
   if(!function_exists("add_action")) {
      return false;
   }

   define("SECONDARY_TITLE_PATH", plugin_dir_path(__FILE__));
   define("SECONDARY_TITLE_URL", plugin_dir_url(__FILE__));
   define("SECONDARY_TITLE_VERSION", "1.9.7.5");
   define("SECONDARY_TITLE_TEXTDOMAIN", "secondary-title");

   /** Install default settings (if not set yet) */
   register_activation_hook(__FILE__, "secondary_title_install");

   /** Handles the donation notification display settings */
   register_deactivation_hook(__FILE__, "secondary_title_reset_donation_notice");

   /** Calls function which adds a link to the settings page on "Plugins" section in the admin area */
   add_action("plugin_action_links_" . plugin_basename(__FILE__), "secondary_title_add_settings_link");

   function secondary_title_load_translations() {
      load_plugin_textdomain(
         "secondary-title",
         false,
         plugin_basename(
            plugin_dir_path(__FILE__)
         ) . "/languages"
      );
   }

   /** Defines what file endings should be included */
   $include_files = glob(SECONDARY_TITLE_PATH . "includes/*.php");

   /** Include files inside /includes/ directory */
   foreach($include_files as $include_file) {
      if(realpath($include_file)) {
         require_once $include_file;
      }
   }