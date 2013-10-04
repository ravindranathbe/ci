<div id="container">
	<h1>Home page</h1>

	<div id="body">
		<div id="searchForm">
			<?php
				echo form_open('home/index', array('method' => 'post'));
				echo '<p>'.form_label('Select table', 'tableVal').'</p>';
				echo '<p>'.form_dropdown('tableVal', $tablesOptions, '', 'id = "tableVal"').'</p>';
				echo '<p>'.form_submit('search_go', 'Go!').'</p>';
				echo form_close();
			?>
		</div>
	</div>

</div>