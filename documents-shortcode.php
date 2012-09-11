<?php
/*
Plugin Name: Document Shortcode
Plugin URI: http://dougal.gunters.org/
Description: Shortcode to display a list of attached documents, optionally filtered by mime-type and/or file extension.
Author: Dougal Campbell
Version: 1.0
Min WP Version: 2.5
Author URI: http://dougal.gunters.org/
*/

/**
 * The default mimetype match is for "application/*". For other types, you
 * will need to specifically override that attribute.
 * Examples:
 *
 * Just .XLS files:
 *   [documents ext="xls"]
 *
 * All .DOC, .DOCX, or .PDF files:
 *   [documents ext="doc,docx,pdf"]
 * 
 * Only 'video' types with a .MOV extension:
 *   [documents mimetype="video" ext="mov"]
 * 
 * Just application/pdf mimetypes:
 *   [documents mimetype="application/pdf"]
 */
function dc_document_shortcode($atts) {
	extract(shortcode_atts(array(
		'mimetype' => 'application',
		'ext' => null,
	), $atts));
	
	$mime = "&post_mime_type=$mimetype";
	
	$kids =& get_children( 'post_type=attachment&post_parent=' . get_the_id() . $mime );

	if ( empty( $kids ) ) {
		return '';
	}
	
	$exts = array();
	
	if ( $ext ) {
		$exts = explode(',', $ext);
		$exts = array_map('trim', $exts);
		$exts = array_map('strtolower', $exts);
	}
	
	$documents = '';
	
	foreach ( $kids as $id => $doc ) {
		$url = wp_get_attachment_url( $id );
		
		$file = get_attached_file( $id );
		$filetype = wp_check_filetype( $file );
		$file_ext = strtolower($filetype['ext']);
		
		if ( count($exts) && ! in_array($file_ext, $exts) ) {
			// Not in list of requested extensions. Skip it!
			continue;
		}
		
		$name = $doc->post_title;
		$mime = sanitize_title_with_dashes( $file_ext );
		$documents .= "<li class='$mime'><a href='$url'>$name</a></li>\n";
	}

	if (! empty( $documents ) ) {
		// Wrap it up:
		$documents = "<ul class='dc_documents'>\n" . $documents;
		$documents .= "</ul>\n";
	}

	return $documents;
}

function dc_document_shortcode_init() {
	add_shortcode( 'documents', 'dc_document_shortcode' );
}

add_action( 'init', 'dc_document_shortcode_init' );

/**
 * Register and enqueue the default styles
 */
function dc_document_shortcode_add_style() {
	// Don't need plugin styles in dashboard
	if ( is_admin() ) return;
	
	wp_register_style( 'dc_document_shortcode' , plugins_url( 'dc_documents.css', __FILE__ ) );
	wp_enqueue_style( 'dc_document_shortcode' );
}

add_action('wp_enqueue_scripts', 'dc_document_shortcode_add_style');
