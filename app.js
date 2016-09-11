function checkusername(){
	var usern = $('#usern').val();
	$.ajax({
		url: "app.php",
		type: "POST",
		data: 'usern='+$("#usern").val(),
		beforeSend:function() {
			$('#load').html('Checking...');
		},
		success:function(data) {
          $('#load').html(data);
		}
	});
}