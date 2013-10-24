	$('.edit').click(function(){
	    var commentHolder = $(this);
		$.ajax({
			url: $(this).attr('href')+'&ajax=1',
			success: function(html){
				commentHolder.parent().parent().html(html);
			}
		})
		return false;
	})
	$('.add').click(function(){
        var commentHolder = $(this);
        $.ajax({
            url: $(this).attr('href')+'&ajax=1',
            success: function(html){
                commentHolder.parent().html(html);
            }
        })
        return false;
    })
	$('.delete').click(function(){
        $.ajax({
            url: $(this).attr('href')+'&ajax=1',
            success: function(html){
                $('.comment_holder').html(html);
            }
        })
        return false;
    })