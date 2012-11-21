$(document).ready(function() {
	// this loop is for the interval time
	for (var i = 10; i < 46; i++) { //loop creates the times
		$("#time").append("<option> " + i + " </option>");
		i = i + 4;
	}
	
	//this map and loop is for the player position 
	dropdown_values = {"1":"CF", "2":"CM"," 3":"LWB", "4":"CB", "5":"SW", "6":"RWB", "7":"GK"}; //map to store position
	var arr2 = ["postions1", "postions2", "postions3", "postions4", "postions5"];
	$.each(arr2, function () {
		var sb = this;
		$.each(dropdown_values, function(key, value){
			$("#" + sb).append($('<option>', { value : key }).text(value));
		})
	});
	
	// this loop is for the player number
	var arr1 = ["player1", "player2", "player3", "player4", "player5"];
	for (var i = 1; i < 101; i++) { //loop creates the jersey numbers
		$.each(arr1, function() {
			$("#" + this).append("<option> " + i + " </option>");
		})
	}			
	
	//this loop is for player creation 
	for (var i = 1; i < 10; i++) {
		$(".list").append("<li>"+"<a>"+"Player Name"+"<span>" + "</span>" + "<span> 1"+"</span>"+"</a>"+"</li>");	//creates the list		
	}
	
	$(".list li a").each(function() { // adds link to a, for popover
		var _href = $(this).attr("href");
		$(this).attr("href", _href + '#myPopover')
	});
	
	$(".list li a span").nextAll().prev().addClass("chevron"); //adds chevron class to the first span in a
	$(".list li a span").next().addClass("count");	//adds count class to the second span in a
	
	// this loop is for the pop over stats options
	for (var i = 1; i < 7; i++) {
		$("#stats").append("<a> Stats " + i + "</a>");
		$("#stats a").addClass("button"); //adds a class to the created <a>
	}		
});		