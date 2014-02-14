<?php
/**
 * Htmlbox Element
 *
 * Please do not edit this file. This file is part of the Cyber Chimps Framework and all modifications
 * should be made in a child theme.
 *
 * @category Cyber Chimps Framework
 * @package  Framework
 * @since    1.0
 * @author   CyberChimps
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     http://www.cyberchimps.com/
 */

// Don't load directly
if ( !defined('ABSPATH') ) { die('-1'); }

if ( !class_exists( 'CyberChimpsHTMLbox' ) ) {
	class CyberChimpsHTMLbox {
		
		protected static $instance;
		public $options;
		
		/* Static Singleton Factory Method */
		public static function instance() {
			if (!isset(self::$instance)) {
				$className = __CLASS__;
				self::$instance = new $className;
			}
			return self::$instance;
		}	
		
		/**
		 * Initializes plugin variables and sets up WordPress hooks/actions.
		 *
		 * @return void
		 */
		protected function __construct( ) {
			add_action( 'html_box', array( $this, 'render_display' ) );
			$this->options = get_option( 'cyberchimps_options' );
		}
		
		public function render_display() {
			global $post, $allowedposttags;
			
			if( is_page() ) {
				$content = ( get_post_meta( $post->ID, 'html_box', true ) ) ? get_post_meta($post->ID, 'html_box', true) : '';
			}
			else {
				$content = ( $this->options['html_box'] ) ? $this->options['html_box'] : '';
			}
			
			if( $content != '' ): ?>
				<div id="htmlbox-container" class="row-fluid">
          <div id="htmlbox" class="span12">
            <div class="htmlbox-content">
            	<?php echo $content; ?>
            </div>
          </div>
        </div>
<?php endif;
			
		}
	}
}
CyberChimpsHTMLbox::instance();