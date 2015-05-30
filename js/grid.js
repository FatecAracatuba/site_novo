$(function() {
	$('#ri-grid').gridrotator({
		rows: 2,
		columns:3,
		w1024: {
			rows	: 2,
			columns	: 3
		},
		w768: {
			rows	: 2,
			columns	: 3
		},
		w480: {
			rows	: 2,
			columns	: 2
		},
		w320: {
			rows	: 2,
			columns	: 2
		},
		step: 'random',
		maxStep	: 3,
		animSpeed: 700,
		animEasingOut: 'linear',
		animEasingIn: 'linear',
		interval: 4000,
		preventClick : false
	});
});
