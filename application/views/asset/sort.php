<div id="container">
	<h1>Asset sort page</h1>

	<div id="body">
		<?php
		if($sort_dir == 'asc') {
			$dir = 'desc';
			$arr = '&uarr;';
		} elseif($sort_dir == 'desc') {
			$dir = 'asc';
			$arr = '&darr;';
		}

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

		$this->table->set_heading(
				'Id', 
				 anchor('asset/sort/IssueId/'.$dir, 'IssueId '.$arr, array()),
				'Description', 
				'Filename', 
				'PartPageContainerId', 
				'StatusId', 'PageType', 'PageSize', 'PageHeight', 'PageWidthfloat', 'OriginalFolioNumber', 'FinalStatus', 'FolioStatus', 'DispatchCount', 'AssetProgressId', 'Validate', 'CurrentFolio', 'FiveCol', 'ElementsAvailable');
		echo $this->table->generate($asset_array);

		echo '<p>'.$this->pagination->create_links().'</p>';
		?>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>