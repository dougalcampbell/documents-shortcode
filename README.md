# Documents Shortcode
Contributors: dougal  
Donate link: http://dougal.gunters.org/donate  
Tags: documents, shortcode, documents shortcode, shortcode-only, files, attachments, pdf, word, excel, spreadsheet, text  
Requires at least: 2.5  
Tested up to: 3.4.2  
Stable tag: 1.0.1
License: GPLv2 or later  
License URI: http://www.gnu.org/licenses/gpl-2.0.html  

A [documents] shortcode which will display a list of attached files, with file type icons, and linked to the files for easy downloading.

## Description

By adding a simple `[documents]` shortcode in your post or page, you get a
list of all documents (non-image/audio/video) attached. Each item in the
document list can be styled with CSS to indicate different document types
based on file extension (e.g., .doc, .pdf, etc).

## Installation

Copy the documents-shortcode folder and its contents to your wp-content/plugins
directory, then activate the plugin. Or better yet, use the built-in `Add New`
feature under your Dashboard's `Plugins` menu.

There is no configuration. Just type the `[documents]` shortcode into your 
posts or pages to generate a list of attached files.

## Frequently Asked Questions

### Where is the settings page?

There is no settings page. Just upload attachments to a post or page, and put 
the `[documents]` shortcode where you wish the list of attachments to appear.

### How can I limit which attachments are listed?

There are two attributes you can use with the shortcode to control which
attached documents are listed: `mimetype` and `ext`.

The default match is for mimetype `application/*`. For other types, you will 
need to specifically override that attribute.

Examples:

> Just .XLS files:  
>   `[documents ext="xls"]`

> All .DOC, .DOCX, or .PDF files:  
>   `[documents ext="doc,docx,pdf"]`

> Only 'video' types with a .MOV extension:  
>   `[documents mimetype="video" ext="mov"]`

> Just application/pdf mimetypes:  
>   `[documents mimetype="application/pdf"]`

> All attached documents, regardless of type:  
>   `[documents mimetype="*"]`

### I got an error trying to upload a file!

If WordPress tells you that a file failed to upload due to an error ("Sorry, 
this file type is not permitted for security reasons."), you may need to 
adjust the list of allowed file extensions. For more information on how to do 
this, see: 

> http://wordpress.org/extend/plugins/ap-extended-mime-types/  
> http://wordpress.org/extend/plugins/manage-upload-types/  
> http://www.wprecipes.com/wordpress-tip-allow-upload-of-more-file-types

### How do I change the styling?

See the `dc_documents.css` file for the default styles. Document icons are in 
the `images` sub-folder of the plugin.

You can override these styles in your theme's CSS by adding more specific 
selectors. For example, you could change the font used for the file titles in 
posts with a rule similar to this:

> `.post ul.dc_documents li a { font-family: Courier,monospace; }`

### Why don't my attached images appear in the documents list?

By default, images are filtered out of the list (because, that's what 
galleries are for, right?). If you want to list *all* attached documents, 
with no filtering, just say so:

> `[documents mimetype="*"]`

### What file types are supported?

*Technically*, any file type that WordPress will allow you to upload as an 
attachment (see above). More specifically, there are icons included for the 
following types of files:

> PDF: `.pdf`  
> MS Word: `.doc`, `.docx`  
> MS Excel: `.xls`, `.xlsx`  
> MS PowerPoint: `.ppt`, `.pptx`  
> MS Visio Diagrams: `.vsd`, `.vsdx`  
> MS Access Database: `.mdb`, `.mdbx`  
> ZIP: `.zip`  

Any other extension will display a generic text document icon. I realize this 
list is slanted towards Microsoft applications, but that's just due to the 
original plugin usage. Other extension => icon mappings will be added in the 
future, and I am open to suggestions.

### Can you make the icon bigger/smaller?

At this time, the only supported icon size is 32 x 32 pixels. 

## Changelog
### 1.0
* Initial release. 2012-09-10

