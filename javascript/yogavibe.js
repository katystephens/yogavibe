var standing = [];
var ground = [];
var sequence = [];
var hourClasses = ['/videos/warrior-series(full)'];
var sixty = [];
var beginner = [];
var currSelection;

for (var i = 0; i < 15; i++) {
	var filename = "<img src=/images/_standing/standing" + i + ".jpg" + " class=" + "thumbnails" + " onclick=" + "buildSequence(event);" + ">";
	standing.push(filename);
}

for (var i = 0; i < 137; i++) {
	var filename = "<img src=/images/_ground/ground" + i + ".jpg" + " class=" + "thumbnails" + " onclick=" + "buildSequence(event);" + ">";
	ground.push(filename);
}

for (var i = 0; i < hourClasses.length; i++) {
      var videoname = '<video width="300" controls><br>' + '<source src="' + hourClasses[i] + '.mp4" type="video/mp4"><br>' + '<source src="' + hourClasses[i] + '.ogg" type="video/ogg"><br>' + 'Your browser does not support HTML5 video.<br>' + '</video>';
      sixty.push(videoname);
      beginner.push(videoname);
}

$(document).ready(function() {
      $("#build-standing").append(standing);
      $("#build-ground").append(ground);
      $("#sixty").append(sixty);
      $("#one-beginner").append(beginner);

      currSelection = $("select option:selected").val();

      // $("#play-sequence").click(function () {
      //       $("#dialog").dialog({
      //             height: 600,
      //             width: 600,
      //             modal: true,
      //             resizable: true,
      //             dialogClass: 'video-dialog'
      //       });
      //       $(this).parents(".ui-dialog-titlebar").css("padding", 20);
      //       playSequence(event);
      //       console.log('hi');
      // });

      $('#sixty').show();
      $("select.classLength").change(function(){
            var selected = $("select.classLength option:selected").val();
            $('.video-holder').hide();
            $('#' + selected).show();
      }).change()

      $('#one-beginner').show();
      $("select.classLevel").change(function(){
            var selected = $("select.classLevel option:selected").val();
            $('.video-holder').hide();
            $('#' + selected).show();
      }).change()

      // $('#duration-choices').bind('change', function(event) {


      buildSequence = function (evt) {
      	var img = $(evt.target);
      	sequence.push(img);
		img.clone().appendTo("#build-sequence");
      }

      playSequence = function (evt) {
            $.each(sequence, function(i, val) {
                  var newStr = val.attr('src').replace(/((_ground)|(_standing))/i, "large-images");
                  val.attr('src', newStr);
                  val.removeClass("thumbnails");
                  val.addClass("large-thumbnails");
            });

            sequence[0].addClass('active');

            var timer = function (curImage) {
                  if (sequence.length > curImage)
                  {
                        sequence[curImage].removeClass('active');
                        sequence[curImage + 1].addClass('active');
                        setTimeout(function() {
                              timer(curImage+1)
                        }, 3000);
                  }
            }


            setTimeout(function() {
                  timer(0);
            }, 3000);

            $("#dialog").show();
            $("#front-dialog").html('')
            $("#front-dialog").append(sequence);

            var close = $('#dialog');

            close.bind('click', function(e)
            {
                  $(e.target).hide()
            });

            var el = $(evt.target);
      }
});

