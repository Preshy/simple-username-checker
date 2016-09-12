function validate() {
	var valid = true;
	var usern = $('#usern').val().length;
	if(usern < 6 ) {
		$('#load').html('Username is short!');
		valid = false;
	}
	$('#usern').keydown(function(e) {
      if (e.shiftKey || e.ctrlKey || e.altKey) {
        e.preventDefault();
      } else {
        var key = e.keyCode;
        if (!((key == 8) || (key == 32) || (key == 46) || (key >= 35 && key <= 40) || (key >= 65 && key <= 90))) {
          e.preventDefault();
        }
      }
    });
	return valid;
}

function checkusername(){
	var valid = validate();
	if(valid) {
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
}
