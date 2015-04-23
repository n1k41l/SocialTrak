var text_max = 140;

$('#micro_count').html(text_max + ' chars remaining');

$('#_micropost').keyup(function() {
	var text_length = $('#_micropost').val().length;
	var text_remaining = text_max - text_length;

	$('#micro_count').html(text_remaining + ' chars remaining');
});