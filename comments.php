	<?php if( have_comments() ) : ?>
		<h2>Kommentarer till artikeln</h2>
		<ul class="comments">
			<?php 
				wp_list_comments( array(
					'avatar_size' => 0
					,'style' => 'ul'
					,'type' => 'comment'
					,'reply_text' => 'Svara'
					,'reverse_top_level' => false
					)
				);
			?>
		</ul>
	<?php endif; ?>