<?php
   /**
    * 2018 by Kolja Nolte
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

   /** Prevents this file from being called directly */
   if(!function_exists("add_action")) {
      return;
   }

   function secondary_title_display_gutenberg_info_handler() {
      if(isset($_GET["hide_info"]) && $_GET["hide_info"] === "hide") {
         update_option("secondary_title_hide_gutenberg_info", "hide");
      }
   }

   add_action("admin_init", "secondary_title_display_gutenberg_info_handler");

   function secondary_title_display_gutenberg_info_plugins() {
      if(get_option("secondary_title_hide_gutenberg_info") === "hide") {
         return;
      }

      if(isset($_GET["n"]) && !wp_verify_nonce($_GET["n"], "secondary_title_hide_info")) {
         return;
      }

      $current_screen = (object)get_current_screen();
      if($current_screen->base !== "post" && $current_screen->base !== "page") {
         return;
      }

      $hide_url = get_edit_post_link(get_the_ID()) . "&hide_info=hide";
      $hide_url = wp_nonce_url($hide_url, "secondary_title_hide_info", "n");
      ?>
      <div id="message" class="notice notice-warning notice-success">
         <h3>
            <i class="fa fa-exclamation-circle"></i>
            Secondary Title does not work anymore!
         </h3>
         <h4>
            <a href="http://koljanolte.com/wordpress/plugins/secondary-title/announcements/2018-12-12.html">Click here</a>
            to find out why and how to temporarily fix the problem.
            Or
            <a href="<?php echo $hide_url; ?>">here</a>
            to disable this warning.
         </h4>
      </div>
      <?php
   }

   add_action("admin_notices", "secondary_title_display_gutenberg_info_plugins");
