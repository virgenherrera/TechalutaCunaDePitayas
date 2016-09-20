// JavaScript Document

$(function() { 
	demo.add(function() {
		$('#map_canvas').gmap({
			'center': '20.074822,-103.550284',
			'zoom': 17,
			'disableDefaultUI':false,
			'callback': function() {
			var self = this;
			self.addMarker({'position': this.get('map').getCenter() }).click(function() {
				self.openInfoWindow({ 'content': 'Cooperativa Techaluta Cuna de Pitayas' }, this);
			});	
		}});
	}).load();
});