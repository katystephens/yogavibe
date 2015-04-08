// creating an empty object that holds the created events.
myEvents = {};

var current_date = new Date ();
var year = current_date.getFullYear();
var month = current_date.getMonth();
var day = current_date.getDate();

var current_year = year;
var current_month = month;

var month_names = new Array ( );
		month_names[month_names.length] = "January";
		month_names[month_names.length] = "February";
		month_names[month_names.length] = "March";
		month_names[month_names.length] = "April";
		month_names[month_names.length] = "May";
		month_names[month_names.length] = "June";
		month_names[month_names.length] = "July";
		month_names[month_names.length] = "August";
		month_names[month_names.length] = "September";
		month_names[month_names.length] = "October";
		month_names[month_names.length] = "November";
		month_names[month_names.length] = "December";
		
var days_names = new Array ( );
		days_names[days_names.length] = "Sunday";
		days_names[days_names.length] = "Monday";
		days_names[days_names.length] = "Tuesday";
		days_names[days_names.length] = "Wednesday";
		days_names[days_names.length] = "Thursday";
		days_names[days_names.length] = "Friday";
		days_names[days_names.length] = "Saturday";
	

jQuery(function($) {
	
	$("#eventList").click( function () 
	{
		EventView(year, month, day);
		$('#week').addClass('displayNone');	
		$(this).removeClass('normal');
		$(this).addClass('active');
		$('#calendar').removeClass('active');
		$('#calendar').addClass('normal');	
	});
	
	$("#calendar").click( function ()
	{	
		CreateCalendarViewTable(current_year, current_month, day);
		$('#week').removeClass('displayNone');	
		$(this).removeClass('normal');
		$(this).addClass('active');
		$('#eventList').removeClass('active');
		$('#eventList').addClass('normal');	
	});
										  
	CreateCalendarViewTable(year, month, day);
										 
}); 

var CreateCalendarViewTable = function (y, m, d)
	{
	$("#month").html("");
	$("#schedule-container").html("");
	mystring = '<div id="calendarView">';
	var FirstDay = new Date (y, m, 1);
	var day1 = FirstDay.getDay(); // this retrieve what the first day of the current month. For example 10/1/10 was a friday day1=5
	var nextmonthdays = 1;
	var count = 0;
		
	if (m === 12)
	{
		m=0;
		y=y+1;
	}
	
	if (m === -1)
	{
		m=11;
		y=y-1;
	}
	
	
	var i = 0;
	if(m === 0 || m === 2 || m === 4 || m === 6 || m === 7 || m === 9 || m === 11){i = 31;}

	else if(m === 1)
	{
			if (y % 4 === 0) {i = 29;}
			else { i = 28;}
	}

	else{i = 30;}
	
	var days = 1;
	
	
	var lastDay = new Date (y, m, i);
	var dayi = lastDay.getDay(); // this retrieve what the first day of the current month. For example 10/1/10 was a friday day1=5
	var extra = 0;
	if (dayi < 6){extra = 6-dayi}
	var isData = false;
	lenghtofLoop = i+day1+extra;
	// ****************** //
	// make month a 2 digit number for id
	var m2d = -1;
	var d2d = -1;
	if (String(m).length === 1)
	{
		m2d = String(0) + String(m);
	}
	else
	{
		var m2d = m;
	}
	var id ='';

	$("#month").append('<p>' + month_names[m] + ' ' + y + '</p>');

	$("#left-arrow").click( function ()
	{	
		CreateCalendarViewTable(y, (m - 1), d);
	});

	$("#right-arrow").click( function ()
	{	
		CreateCalendarViewTable(y, (m + 1), d);

	});

	mystring += '<table>';

	for(var f=0; f < lenghtofLoop; f++)
	{
		if(day1 <= f && days <= i)
		{
			
			if (String(days).length === 1)
			{
				d2d = String(0) + String(days);
			}
			else
			{
				var d2d = days;
			}
			//id = String(y) +'q'+  String(m)  +'q'+ String(days); // this is creating a new id
			id = String(y) + String(m2d)  + String(d2d); // this is creating a new id
			if (id in myEvents)
			{	
				var myElist = '';
				for (var k = 0; k < myEvents[id].length; k++)
				{
					myElist+= '<a onclick="PopEventWindowEdit('+id +','+k+')">'+ myEvents[id][k] +'</a>';
				}
				
	
				mystring += '<td class="eventadding"><div class="days">' + days + '</div><div class="added-event">'+ myElist +'</div><a id="add-more" onclick="PopEventWindow('+id+')"></div></td>';
			
				days+=1;
			}
			
			else
			{
				
				if (String(days).length === 1)
				{
					d2d = String(0) + String(days);
				}
				else
				{
					var d2d = days;
				}
				id = String(y) + String(m2d)  + String(d2d); // this is creating a new id
				mystring += '<td class="eventadding" onclick="PopEventWindow('+id+')"><div class="days">' + days + '</div><div></div></td>';
				
				
				days+=1;
			}
		}
		
		else if(day1 >= f)
		{
			mystring += '<td class="nextMonth">&nbsp;</td>';
		}
		
		else
		{
			mystring += '<td class="nextMonth"><div></div><div>&nbsp;</div></td>';
			nextmonthdays+=1;
		}
		
		
		if (f===6 || f===13 || f===20 || f===27 || f===34 || f===41){mystring += '</tr><tr>';}
		
		
	}
	mystring += '</tr></table></div>';
	$("#schedule-container").append(mystring);
	
	//jQuery('td div:contains('+d2d+')').parent().addClass('day');
	
	current_year = y;
	current_month = m;
	
	};



var EventView = function (y, m, d) {
	var SortedEvents = sortObject(myEvents);
	var count = 0;
	$("#schedule-container").html("");

	if ($.isEmptyObject(myEvents))
	{
		$("#schedule-container").append('<div id="Eventview"> You currently have no schedule events</div>');
	}
	else
	{
		mystring = '<div id="Eventview"><ul>';
	
		for (key in SortedEvents)
		{
			if (count >= 5) {
				break;
			}
			//alert(key);
			// extracting date from key.
			var dy = key.substring(0,4);
			var dm = key.substring(4,6);
			var dd = key.substring(6);
	
			// Formatting date
			if (dm.substring(0, 1) === 0){dm = dm.substring(1);}
			var thisDate = new Date(dy, dm, dd)
			
			// todays' date
			var m2d = -1;
			var d2d = -1;
			if (String(m).length === 1)
			{
				m2d = String(0) + String(m);
			}
			else
			{
				var m2d = m;
			}
			
			if (String(d).length === 1)
			{
				d2d = String(0) + String(d);
			}
			else
			{
				var d2d = d;
			}
			
			var id ='';
			id = String(y) + String(m2d)  + String(d2d); // any id after this will be displayed
			var nextid = String(y+1) + String(m2d)  + String(d2d); // any id after this will be displayed

			
			if (key >= id && key <= nextid)
			{
				var theDate = '';
				theDate = days_names[thisDate.getDay()]+ ', '+ month_names[thisDate.getMonth()] + ' ' + dd + ', '+ dy;
		
		
				mystring+='<div id="event-header"><li class="event-date">'+ theDate +'</li></div>';
		
				for (hs in SortedEvents[key])
				{
		 			mystring+='<div id="event-info"><li class="event-info">'+SortedEvents[key][hs]+' <a style="color:#F00; font-size:12px; cursor:pointer;" onclick="PopEventWindowEdit('+ key+','+hs+')"> edit</a></li></div>';
				}
				mystring+='<br /><br />';
			}
			count++;
		 
		}
	
				mystring += '</ul></div>';
	
		$("#schedule-container").append(mystring);
		
	}
};

var PopEventWindow = function (Did) 
{
	var container = $('<div id="eventwindow"></div>');
	var close = $('<a class="close">X</a>');
	var body = $('<br /><form><input placeholder="Time" type="text" id="eTime" name="eTime" /><br /><input placeholder="Description" type="text" id="eName" name="eName" /></form> <div class="btn" onclick="AddEvent('+Did+','+ 0 +')">Add Event</div>');

	close.bind('click', function(e)
	{
		$(e.target).parent().remove();
	});

	$('#schedule-container').append(container.append(close).append(body));
	$('#eTime').focus();

	$('#eName').keydown(function (e){
	    if(e.keyCode == 13){
	       AddEvent(Did + 0)
	    }
	});
		
};

var PopEventWindowEdit = function (Did, i) 
{
	var container = $('<div id="eventwindow"></div>');
	var close = $('<a class="close">X</a>');
	var body = $('<br /><form><input type="text" id="eEvent" name="eEvent" value="'+myEvents[Did][i]+'" /><br /></form> <div class="btn" onclick="EditEvent('+Did+','+ i +')">Update Changes</div><div class="btn" onclick="RemoveEvent('+Did+','+ i +')">Delete Event</div>');

	close.bind('click', function(e)
	{
		$(e.target).parent().remove();
	});

	$('#schedule-container').append(container.append(close).append(body));
	$('#eEvent').focus();
};

var AddEvent = function (D_id, i) {

	
	if(D_id in myEvents)
	{
		myEvents[D_id].push($('#eTime').val() + ': ' + $('#eName').val());
	}
	else
	{
		myEvents[D_id] = [$('#eTime').val() + ': ' + $('#eName').val()];
	}
	
	
	CreateCalendarViewTable(current_year, current_month, day);
	$('div#eventwindow').remove();
		
};

var EditEvent = function (D_id, i) {
	myEvents[D_id][i] = $('#eEvent').val();
	CreateCalendarViewTable(current_year, current_month, day);
	$('div#eventwindow').remove();
		
};

var EditEventDate = function (D_id, i) {
	myEvents[D_id][i] = $('#eEvent').val();
	EventView(year, month, day);
	$('div#eventwindow').remove();
		
};


var RemoveEvent = function (D_id, i) {
	myEvents[D_id].splice(i, 1);
	if (myEvents[D_id].length === 0) { delete myEvents[D_id]; }
	CreateCalendarViewTable(current_year, current_month, day);
	$('div#eventwindow').remove();
		
};

var RemoveEventDate = function (D_id, i) {
	myEvents[D_id].splice(i, 1);
	if (myEvents[D_id].length === 0) { delete myEvents[D_id]; }
	EventView(year, month, day);
	$('div#eventwindow').remove();
		
};

function sortObject(o) {
    var sorted = {},
    key, a = [];

    for (key in o) {
        if (o.hasOwnProperty(key)) {
                a.push(key);
        }
    }

    a.sort();

    for (key = 0; key < a.length; key++) {
        sorted[a[key]] = o[a[key]];
    }
    return sorted;
};
