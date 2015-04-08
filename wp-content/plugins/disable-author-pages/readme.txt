=== Plugin Name ===
Contributors:f.staude
Donate link: http://www.staude.net/donate/
Tags: widgets, page, post, sidebar, shortcode
Requires at least: 3.0
Tested up to: 4.0
Stable tag: 0.7
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Disable the author pages

== Description ==

Disable the author pages ( /author=? ) in wordpress and redirect the user to another page.

Entrys in the changelog with numbers means the ticket id on http://bugs.staude.net



== Installation ==

1. Install the plugin from within the Dashboard or upload the directory `disable-author-pages` and all its contents to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Configure it under settings/disable author pages

== Frequently Asked Questions ==
English:

= I have a new translation  =

Send them by e-mail to frank@staude.net, I will then install the next update with.

= I found a bug  =

Please report it at https://github.com/staude/disable-author-pages/issues

= I have a feature request =

Please report it at https://github.com/staude/disable-author-pages/issues



Deutsch:

= Ich habe eine neue Übersetzung fertiggestellt  =

Schick sie mir per e-mail an frank@staude.net, ich werde sie dann beim nächsten Update mit einbauen

= Ich habe einen Fehler gefunden  =

Bitte trag es ein auf https://github.com/staude/disable-author-pages/issues

= Ich möchte eine neue Funktion vorschlage  =

Bitte trag es ein auf https://github.com/staude/disable-author-pages/issues




== Changelog ==

= 0.7 =
- Make it work if WordPress installed in a subdirectory
  https://github.com/staude/disable-author-pages/pull/1
  Thanks to smeric
- Moved sourcecode to GitHub: https://github.com/staude/disable-author-pages
- Moved Issuetracker to GitHub: https://github.com/staude/disable-author-pages/issues


= 0.6 =
Fix: When I choose redirect to "Profile" page and save, the dialogue reverts back to Homepage. ( Thanks to Tradedog )

= 0.5 =
Fix: Notice: Trying to get property of non-object in wp-includes/post-template.php on line 29 (from user BackuPs - Thanks)

= 0.4 =
- Added feature disable only admin author page (from user BackuPs - Thanks)
- Added feature redirect non exists autor page (instead of default 404) ( Request from Matt Jensen - Thanks) 


= 0.3 =
Disable some php notices if WP Debug active

= 0.2 =
- Added settings to Options > Author Pages
- 0000027: Overwrite the author_link (optional). 
- 0000029: status of redirect
- 0000028: Select destination for redirect


= 0.1 =
First version.

