<?php

global $post;

$previous_post = get_adjacent_post( false, '', true );
$previous_text = __( 'Previous Post', 'shift' );

if ( $previous_post == '' ) {
	$previous_text  = __( 'No Older Posts', 'shift' );
	if ( get_option( 'show_on_front' ) == 'page' ) {
		$previous_url = get_permalink( get_option( 'page_for_posts' ) );
	} else {
		$previous_url = get_home_url();
	}
	$previous_link = '<a href="' . esc_url( $previous_url ) . '">' . esc_html__( 'Return to Blog', 'shift' ) . '</a>';
}

$next_post  = get_adjacent_post( false, '', false );
$next_text  = __( 'Next Post', 'shift' );

if ( $next_post == '' ) {
	$next_text  = __( 'No Newer Posts', 'shift' );
	if ( get_option( 'show_on_front' ) == 'page' ) {
		$next_url = get_permalink( get_option( 'page_for_posts' ) );
	} else {
		$next_url = get_home_url();
	}
	$next_link = '<a href="' . esc_url( $next_url ) . '">' . esc_html__( 'Return to Blog', 'shift' ) . '</a>';
}

?>
<nav class="further-reading">
	<div class="previous">
		<span><?php echo esc_html( $previous_text ); ?></span>
		<?php
		if ( $previous_post == '' ) {
			echo $previous_link;
		} else {
			previous_post_link( '%link' );
		}
		?>
	</div>
	<div class="next">
		<span><?php echo esc_html( $next_text ); ?></span>
		<?php
		if ( $next_post == '' ) {
			echo $next_link;
		} else {
			next_post_link( '%link' );
		}
		?>
	</div>
</nav>