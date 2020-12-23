<div id="sidebar" class="wrapper-cell">
    <div class="sidebar_box info_box">
        <h3><?php _e('Plugin Info', $this->plugin_slug); ?></h3>
        <div class="inside">
			<?php $plugin_data = wpmm_plugin_info($this->plugin_slug); ?>
            <ul>
                <li><?php _e('Name', $this->plugin_slug); ?>: 
					<?php
					echo!empty($plugin_data['Name']) ? esc_html($plugin_data['Name']) : '';
					echo!empty($plugin_data['Version']) ? esc_html(' v' . $plugin_data['Version']) : '';
					?>
                </li>
                <li><?php _e('Author', $this->plugin_slug); ?>: <?php echo!empty($plugin_data['AuthorName']) ? esc_html($plugin_data['AuthorName']) : ''; ?></li>
                <li><?php _e('Website', $this->plugin_slug); ?>: <?php echo!empty($plugin_data['AuthorURI']) ? '<a href="' . esc_url(wpmm_get_utmized_url($plugin_data['AuthorURI'], array('source' => 'plugininfo'))) . '" target="_blank">' . esc_html($plugin_data['AuthorName']) . '</a>' : ''; ?></li>
                <li><?php _e('Twitter', $this->plugin_slug); ?>: <?php echo!empty($plugin_data['Twitter']) ? '<a href="' . esc_url('https://twitter.com/' . $plugin_data['Twitter']) . '" target="_blank">@' . esc_html($plugin_data['Twitter']) . '</a>' : ''; ?></li>
                <li><?php _e('GitHub', $this->plugin_slug); ?>: <?php echo!empty($plugin_data['GitHub Plugin URI']) ? '<a href="' . esc_url(wpmm_get_utmized_url($plugin_data['GitHub Plugin URI'], array('source' => 'plugininfo'))) . '" target="_blank">' . esc_html(basename($plugin_data['GitHub Plugin URI'])) . '</a>' : ''; ?></li>
            </ul>
        </div>
    </div>

	<?php
	$banners = wpmm_get_banners();

	if (!empty($banners)) {
		?>
		<div class="sidebar_box themes_box">
			<h3><?php _e('Recommended', $this->plugin_slug); ?></h3>
			<div class="inside">
				<ul>
					<?php
					foreach ($banners as $item) {
						$item['image'] = wpmm_get_banner_url($item['image']);

						if ($item['utm']) {
							$item['link'] = wpmm_get_utmized_url($item['link'], array('source' => 'recommended'));
						}

						printf('<li><a href="%s" target="_blank" title="%s"><img src="%s" alt="%s" width="280" height="160" /></a></li>', esc_url($item['link']), esc_attr($item['title']), esc_url($item['image']), esc_attr($item['title']));
					}
					?>
				</ul>
			</div>
		</div>     
	<?php } ?>
</div>