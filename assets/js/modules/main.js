function get_data() {
	// alert("data");

	var response = '';
	$.ajax({ type: "GET",   
		url: "<?php echo base_url('index.php/main/get_data') ?>",   
		data: { get_param: 'value' }, 
	    dataType: 'json',
	    success: function (data) { 
	        $.each(data, function(index, element) {
	            $('#show_data').append(element.id);
	            // alert(element.id);
	        });
	    }
	});
}

var timerID = setInterval(function() {
	get_data()
}, 60 * 300); 

function open_window_radioplayer() {
	window.open('http://localhost/radio/index.php/main/window_radio','winname','directories=no,titlebar=no,toolbar=no,location=no,status=no,menubar=no,scrollbars=no,resizable=no,width=400,height=350');
}

function launchApplication(l_url, l_windowName)
{
	if ( typeof launchApplication.winRefs == 'undefined' )
	{
	launchApplication.winRefs = {};
	}
	if ( typeof launchApplication.winRefs[l_windowName] == 'undefined' || launchApplication.winRefs[l_windowName].closed )
	{
	var l_width = screen.availWidth;
	var l_height = screen.availHeight;

	// var l_params = 'directories=no, ' +
	// 'titlebar=no, ' +
	// 'toolbar=no, ' +
	// 'location=no, ' +
	// 'status=no, ' +
	// ',scrollbars=no, ' +
	// ',resizable=no, ' +
	// ',width=' + '300, ' +
	// ',height=' + '300, ' +
	// ',left=0, ' +
	// ',top=0, ';
	var l_params = 'scrollbars=no, directories=no, width=800, height=600';

	launchApplication.winRefs[l_windowName] = window.open(l_url, l_windowName, l_params);
	launchApplication.winRefs[l_windowName].moveTo((l_width / 2) - 400,(l_height / 2) - 150);
	// launchApplication.winRefs[l_windowName].resizeTo(l_width, l_height);
	} else {
	launchApplication.winRefs[l_windowName].focus()
	}
}

function open_program_menu() {
	$('#program_menu_1').slideDown();
	alert('hai')
}