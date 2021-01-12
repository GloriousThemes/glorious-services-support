<?php ?>
<div class="nav-tab-wrapper">
   <div class="rsssl-logo-container">
      <div id="rsssl-logo"><img width="200" height="" src="<?php echo GLORIOUS_PLUGIN;?>images/glorious-themes-dark.png" alt="glorious-logo"></div>
   </div>
   <div class="header-links">
      <div class="documentation">
         <a href="https://really-simple-ssl.com/knowledge-base" class="" target="_blank">Documentation</a>
      </div>
      <div class="header-upsell">
         <div class="documentation">
            <a href="https://wordpress.org/support/plugin/really-simple-ssl/" class="button button-primary" target="_blank">Support</a>
         </div>
      </div>
   </div>
</div>

<div class="rsssl-container">
   <div class="rsssl-main">
      <div class="rsssl-grid">
         <div class="rsssl-item small settings">
            <div class="item-container">
               <div class="rsssl-grid-item-header">
                  <h3>Settings</h3>
                  <div class="rsssl-secondary-header-item">
                     <div class="rsssl-instructions"></div>
                  </div>
               </div>
               <div class="rsssl-grid-item-content">
                  <form action="options.php" method="post">
                    <?php settings_fields( 'glorious-services-settings-group' ); ?>
                    <?php do_settings_sections( 'glorious-services-settings-group' ); ?>
                     <div class="rsssl-settings">
                        
                        <h2>Settings</h2>
                        <table class="form-table" role="presentation">
                           <tbody>
                              <tr>
                                 <th scope="row">
                                    <span class="rsssl-tooltip-right tooltip-right" data-rsssl-tooltip="In most cases you need to leave this enabled, to prevent mixed content issues on your site.">
                                    <span class="dashicons dashicons-editor-help"></span>
                                    </span>
                                    <div class="rsssl-settings-text">Activate Support via Chat (<?php echo get_option('is_chat_active')==1 ? 'Active' : 'Not Active'; ?>)</div>
                                    
                                 </th>
                                 <td>
                                    <label class="rsssl-switch" id="rsssl-maybe-highlight-autoreplace_insecure_links">

                                    <input id="is_chat_active" name="is_chat_active" size="40" value="1" type="checkbox" 
                                        <?php echo get_option('is_chat_active')==1 ? 'checked="checked"' : ''; ?>>
                                        <span class="rsssl-slider rsssl-round"></span>
                                    </label>
                                    
                                 </td>
                              </tr>

                           </tbody>
                        </table>
                     </div>
                     <?php submit_button(); ?>
                  </form>
               </div>
               <div class="rsssl-grid-item-footer">
               
               </div>
            </div>
         </div>
         <div class="rsssl-item small">
            <div class="item-container">
               <div class="rsssl-grid-item-header">
                  <h3>Tips &amp; Tricks</h3>
               </div>
               <div class="rsssl-grid-item-content">
                  <div class="rsssl-tips-tricks">
                     <div class="tips-tricks-content">
                        <div class="tips-tricks-top">
                           <div class="rsssl-tips-tricks-element">
                              <div class="rsssl-tips-tricks-content">
                                 Is your site still not secure? Do the extensive site scan                
                              </div>
                              <div class="rsssl-tips-tricks-read-more">
                                 <a href="https://really-simple-ssl.com/why-is-my-site-still-not-secure/" target="_blank">Read more</a>
                              </div>
                           </div>
                           <div class="rsssl-tips-tricks-element">
                              <div class="rsssl-tips-tricks-content">
                                 Improve security: Enable HTTP Strict Transport Security (HSTS)				
                              </div>
                              <div class="rsssl-tips-tricks-read-more">
                                 <a href="https://really-simple-ssl.com/hsts-http-strict-transport-security-good/" target="_blank">Read more</a>
                              </div>
                           </div>
                           <div class="rsssl-tips-tricks-element">
                              <div class="rsssl-tips-tricks-content">
                                 Improve security: Add security headers				
                              </div>
                              <div class="rsssl-tips-tricks-read-more">
                                 <a href="https://really-simple-ssl.com/everything-you-need-to-know-about-security-headers/" target="_blank">Read more</a>
                              </div>
                           </div>
                           <div class="rsssl-tips-tricks-element">
                              <div class="rsssl-tips-tricks-content">
                                 Improve security: Secure cookies                
                              </div>
                              <div class="rsssl-tips-tricks-read-more">
                                 <a href="https://really-simple-ssl.com/secure-cookies-with-httponly-secure-and-use_only_cookies/" target="_blank">Read more</a>
                              </div>
                           </div>
                           <div class="rsssl-tips-tricks-element">
                              <div class="rsssl-tips-tricks-content">
                                 Information about landing page redirects                
                              </div>
                              <div class="rsssl-tips-tricks-read-more">
                                 <a href="https://really-simple-ssl.com/knowledge-base/avoid-landing-page-redirects/" target="_blank">Read more</a>
                              </div>
                           </div>
                        </div>
                        <div class="tips-tricks-bottom">
                           Any questions? See the <a href="https://really-simple-ssl.com/knowledge-base/" target="_blank">documentation</a> or the <a href="https://wordpress.org/support/plugin/really-simple-ssl/" target="_blank">WordPress Forum</a>.        
                        </div>
                     </div>
                  </div>
               </div>
               <div class="rsssl-grid-item-footer">
                  <a href="https://really-simple-ssl.com/knowledge-base-overview/" target="_blank" class="button button-rsssl-secondary">Documentation</a>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>