console.log("hello");

// var standing = "/images/standing";
// var ground = "/images/ground"
// var fileextension = ".JPG";

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


// $.ajax({
//     //This will retrieve the contents of the folder if the folder is configured as 'browsable'
//     url: standing,
//     success: function (data) {
//         //Lsit all png file names in the page
//         $(data).find("a:contains(" + fileextension + ")").each(function () {
//             var filename = this.href.replace(window.location.host, "");
//             $("#build-standing").append("<img src=" + standing + filename + " width=" + "200" + "></img>");
//         });
//     }
// });


// function validateName(x) {
// 	alert(document.getElementById(x).value);
// }


// $(function($) {

// 	$('#custom-classes').click(function ()
// 	{
// 		customClasses();
// 	});


// });
