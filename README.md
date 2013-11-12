subscribe2-post
===============

Subscribe2 Post plugin for WordPress. An ongoing effort to combine the easy of use of [Subscribe2](http://wordpress.org/plugins/subscribe2/) with the flexibility of [Post Notification](http://wordpress.org/plugins/post-notification/).
Based on Subscribe2 v9.0, thus this initial release will be called v9.1.

New features (v9.1)
-------------------

- partial HTML mail support
- HTML mail support for Public Subscribers
- Custom keywords, eg. {MY_KEYWORD} (simple version; just string search and replace)
- Semi-dynamic replacement of most of the used text strings using a drop-in replacment file called strings.php (also see below)
- Theme-based customization using a seperate directory named "subscribe2-post" placed in the directory of the current theme
- Backward compatiblity to Subscribe2 v9.0

Bugfixes (v9.1)
---------------

- Confirm messages: If the_content is called more than once, no message is being displayed - disabled the check in some parts, as there are already failsafes in check for avoiding eg. sending of multiple subscription confirm mails, which work seperately from the "is_called" variable check
- Saving settings: Removed the restrainment for using only already existing options, thus enabling developers to easier introduce new settings to the plugin
- JS layer: Fixed the spam protection - there was an obnoxious single quote instead of an apostroph, which resulted in JS errors. Simply removed the single quote of "Don't", so the text currently is grammatically incorrect, saying "Dont". Will be fixed in a future release (see below)


Planned features (v10.0)
------------------------

- Full HTML mail support
- Complete rewrite of the butt-ugly admin interface, both code- as also usability-wise
- Custom keywords - extended version with optional function or class callbacks
- Custom HTML header and footer
- Dynamic replacement of all text strings using either a custom theme template OR the plugin settings (thus: new admin screen)
- Full theme-based customization of all mail templates AND messages displayed in the WordPress frontend view
- Theme functions to better adapt template pages to the plugin (eg. making the messages in the frontend even more customizable, or displaying different headers and other media depending on the current scenario)
- Default settings to avoid having to reset the plugin every time a new option gets introduced
- Settings backup and restore function (to avoid above scenario and also to be able to reuse mail template customizations)
- Proper AJAX / Javascript output and integration

