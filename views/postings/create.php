<?php
	$info = $this->info;
?>
<form method="POST" action="">
	<div id="fieldHolder">
	
	</div>
	<div>
		<input type="submit" value="addTextField" name="createForm"/>
		<input type="submit" value="addDropdownField" name="createForm"/>
		<input type="submit" value="addTextAreaField" name="createForm"/>
	</div>
</form>
<script>
	$(document).ready(function(){
		$('input[type=submit]').click(function(){
			$.ajax({
				url:'?page=postings/getField/'+$(this).val()+'&ajax=1',
				success: function(html){
					$('#fieldHolder').append('<div>'+html+'</div>');
				}
			});
			return false;
		})
	})
</script>