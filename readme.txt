=== Documents Shortcode ===

Contributors: dougal
Donate link: http://dougal.gunters.org/donate
Tags: documents, shortcode, shortcode-only, files, attachments, pdf, word, excel, spreadsheet, text
License: GPL2
Requires at least: 2.5
Tested up to: 3.4
Stable tag: 1.0


== Description ==

By adding a simple [documents] shortcode in your post or page, you get a
list of all documents (non-image/audio/video) attached. Each item in the
document list can be styled with CSS to indicate different document types
based on file extension (e.g., .doc, .pdf, etc).

== Installation ==

Copy the documents-shortcode folder and its contents to your wp-content/plugins
directory, then activate the plugin.

== Frequently Asked Questions ==

= Where is the settings page? =

There is no settings page. Just upload attachments to a post or page, and put 
the [documents] shortcode where you wish the list of attachments to appear.

= How can I limit which attachments are listed? =

There are two attributes you can use with the shortcode to control which
attached documents are listed: `mimetype` and `ext`.

The default match is for mimetype "application/*". For other types, you will 
need to specifically override that attribute.

Examples:

    Just .XLS files:
      [documents ext="xls"]

    All .DOC, .DOCX, or .PDF files:
      [documents ext="doc,docx,pdf"]

    Only 'video' types with a .MOV extension:
      [documents mimetype="video" ext="mov"]

    Just application/pdf mimetypes:
      [documents mimetype="application/pdf"]

= I got an error trying to upload a file! =

If WordPress tells you that a file failed to upload due to an error ("Sorry, this file type is not permitted for security reasons."), you may need to adjust the list of allowed file extensions. For one way to do this, see: 

    http://wordpress.org/extend/plugins/ap-extended-mime-types/
    http://wordpress.org/extend/plugins/manage-upload-types/
    http://www.wprecipes.com/wordpress-tip-allow-upload-of-more-file-types


== Changelog ==
= 1.0 =
* Initial release. 2012-09-10

