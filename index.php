Yoast SEO
WP No Category Base
WordPress Importer
TinyMCE Advanced
qTranslate-X
Post Views Counter
Image Watermark
Duplicator
Duplicate Post
Default featured image
Cyr to Lat enhanced
Contact Form 7

Advanced Custom Fields: qTranslate
Advanced Custom Fields: Options Page
Advanced Custom Fields: Gallery Field
Advanced Custom Fields: Repeater Field


/* content */
if(strlen(get_the_content('')) > 0) { 
  $string = strip_tags( get_the_content('')); 
  $string = substr($string, 0, 250);
  $string = rtrim($string, "!,.-");
  $string = substr($string, 0, strrpos($string, ' ')) ."… ";
}
/* content */


/* image */
$img = '';
if ( has_post_thumbnail() ){
  $img = '<img src="' . get_the_post_thumbnail_url(null, 'full') . '" alt="alt">';
}else{
  preg_match_all( '~<img [^>]* />~' , get_the_content(''), $aPics );
  if ( count($aPics[0]) > 0 ) {
    $img = $aPics[0][0];
  }
}
/* image */


/* count views */
$views = strip_tags(pvc_post_views( get_the_ID(), false ));
/* count views */
