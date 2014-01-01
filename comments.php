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
		<?php 
			comment_form( array(
				'comment_notes_before' => ''
				,'comment_notes_after' => ''
				,'comment_field' => '<p class="comment-form-comment"><textarea id="comment" name="comment" rows="8" aria-required="true"></textarea></p>'
				) 
			); 
		?>
	<?php endif; ?>