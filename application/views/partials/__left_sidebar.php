		<!-- ------left-sidebar-------->
		<?php if ($left_sidebar == 1) : ?>
			<div class="left-sidebar">

				<?php foreach ($left_content as $content) {
					$this->load->view($content);
				} ?>
				<p id="showMoreLink" onclick="toggleActivity()">Show more <b>+</b></p>
			</div>
		<?php endif ?>