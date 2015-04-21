var standing = [];
var ground = [];
var sequence = [];

for (var i = 0; i < 14; i++) {
	var filename = "<img src=/images/standing/standing" + i + ".jpg" + " width=" + "200" + " class=" + "thumbnails" + " onclick=" + "buildSequence(event);" + ">";
	standing.push(filename);
}

for (var i = 0; i < 136; i++) {
	var filename = "<img src=/images/ground/ground" + i + ".jpg" + " width=" + "200" + " class=" + "thumbnails" + " onclick=" + "buildSequence(event);" + ">";
	ground.push(filename);
}

$(document).ready(function() {
      $("#build-standing").append(standing);
      $("#build-ground").append(ground);


      buildSequence = function (evt) {
      	var img = $(evt.target);
      	sequence.push(img);
		img.clone().appendTo("#build-sequence");
      }
});

