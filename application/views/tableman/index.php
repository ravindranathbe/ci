<div id="container">
	<h1><?php echo $page_title; ?></h1>

	<div id="body">
		<!--
		<div id="searchForm">
			<?php
				echo form_open('asset/search', array('method' => 'post'));
				echo '<p>'.form_input('search_val', 'Search').'</p>';
				echo '<p>'.form_submit('search_go', 'Go!').'</p>';
				echo form_close();
			?>
		</div>
		-->
		<?php
		$tmpl = array (
                    'table_open'          => '<table border="0" cellpadding="4" cellspacing="0">',

                    'heading_row_start'   => '<tr>',
                    'heading_row_end'     => '</tr>',
                    'heading_cell_start'  => '<th>',
                    'heading_cell_end'    => '</th>',

                    'row_start'           => '<tr>',
                    'row_end'             => '</tr>',
                    'cell_start'          => '<td>',
                    'cell_end'            => '</td>',

                    'row_alt_start'       => '<tr>',
                    'row_alt_end'         => '</tr>',
                    'cell_alt_start'      => '<td>',
                    'cell_alt_end'        => '</td>',

                    'table_close'         => '</table>'
              );

		$this->table->set_template($tmpl);

		$this->table->set_heading($tableFields);

		echo $this->table->generate($tableData_array);

		echo '<p>'.$this->pagination->create_links().'</p>';
		?>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>