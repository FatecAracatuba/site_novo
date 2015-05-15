$(function(){
	var url = document.location.toString();
	if (url.match('#')){
		$('.nav-tabs a[href=#'+url.split('#')[1]+']').tab('show') ;
		}
	// Change hash for page-reload
	$('.nav-tabs a').on('shown.bs.tab', function (e) {
		window.location.hash = e.target.hash;
	});
});

$(function () {
	var navTabs = $('.nav-tabs a'); 
	var hash = window.location.hash; 
	hash && navTabs.filter('[data-value="' + hash + '"]').tab('show'); 
	navTabs.on('show', function (e) { 
		var newhash = $(e.target).attr('data-value'); 
		window.location.hash = newhash; 
	}); 
})
