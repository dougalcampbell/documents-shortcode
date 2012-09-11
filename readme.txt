=== Documents Shortcode ===

Contributors: dougal
Donate link: http://dougal.gunters.org/donate
Tags: 
License: GPL2
Requires at least: 2.5
Tested up to: 3.0
Stable tag: 1.0


== Description ==

By adding a simple [documents] shortcode in your post or page, you get a
list of all documents (non-image/audio/video) attached. Each item in the
document list can be styled with CSS to indicate different document types
(e.g., .doc, .pdf, etc).

== Installation ==

Copy the documents-shortcode folder and its contents to your wp-content/plugins
directory, then activate the plugin.

== Frequently Asked Questions ==

= How can I limit which attachments are listed? =

There are two attributes you can use with the shortcode to control which
attached documents are listed: `mimetype` and `ext`.

The default mimetype match is for mimetype "application/*". For other types,
you will need to specifically override that attribute.

Examples:

    Just .XLS files:
      [documents ext="xls"]

    All .DOC, .DOCX, or .PDF files:
      [documents ext="doc,docx,pdf"]

    Only 'video' types with a .MOV extension:
      [documents mimetype="video" ext="mov"]

    Just application/pdf mimetypes:
      [documents mimetype="application/pdf"]


== Changelog ==
= 1.0 =
* Initial release. 2012-09-10

