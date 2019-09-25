(function ($) {
	$(function () {

		$('.sidenav').sidenav();

	}); // end of document ready
})(jQuery); // end of jQuery name space

$('#content').val('New Text');
M.textareaAutoResize($('#content'));

$(document).ready(function(){
    $('.fixed-action-btn').floatingActionButton();
  });

function Bekuld() {
	M.toast({
		html: '<span>Hamarosan</span><button class="btn-flat toast-action" onclick="M.Toast.dismissAll();">kk</button>',
		classes: 'rounded'
	})
}

var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
		var yeet = this.responseText.split("\n")
		var min=0;
		var max=yeet.length;  
		var random = Math.floor(Math.random() * (+max - +min)) + +min;
		document.getElementById("funfact").innerHTML = yeet[random];
	}
};
xhttp.open("GET", "funfact.txt", true);
xhttp.send();

function writeThis() {
	var title = prompt("Cím");
	var content = prompt("Tartalom");

		$('#btn').click(function() {
			$.post('write-title.php', { text: title }, function(data) { 
			  console.log(data); 
			});

			setTimeout(() => {
				$.post('write-content.php', { text: content }, function(data) { 
					// output response to console
					console.log(data); 
				});
			}, 10);

		  });
	
	Reset();
}

function Reset() {
	$.post('write.php', { text: "hmm" }, function(data) { 
		console.log(data); 
	  });
}