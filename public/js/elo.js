$(document).ready(function() {
	$("#matches").height($(".match:first-child").height());
	$("#matches").on("click", ".match img,.button.tie", function() {
		var matchcount = parseInt($("#matchcount").text());
		var matches = $(this).closest("#matches");
		var matchform = $(this).closest('form');
		var winner = matchform.find("input[name=winner]");
		winner.val($(this).attr('value'));
		var match = $(this).closest(".match");

		if (matchcount % 10 == 0) {
			

			match.fadeTo("fast", 0, function() {
				
				var params = {};
				params['matchcount'] = matchcount;
				$.get( "matches/break",  params, function( data ) {
					match.html('');
					match.html(data);
					$("#matches").height($(".match:first-child").height());
					match.fadeTo("fast", 1, function() {

					});
					
				});
			})
			
			$.post( "matches",  matchform.serialize(), function( data ) {
				matches.append(data);
			});
		} else {

			$.post( "matches",  matchform.serialize(), function( data ) {
				matches.append(data);
			});
			
			
			match.fadeOut(100, "swing", function() {
				match.remove();
				$("#matchcount").text(matchcount+1);
				$("#matches").height($(".match:first-child").height());
			});
		}
	});
	$("#matches").on("click", ".break .button", function() {
		var matchcount = parseInt($("#matchcount").text());
		var match = $(this).closest(".match");
		match.fadeOut(100, "swing", function() {
			match.remove();
			$("#matchcount").text(matchcount+1);
			$("#matches").height($(".match:first-child").height());
		});
	});
		
});