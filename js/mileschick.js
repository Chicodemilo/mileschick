$(document).ready(function() {

	var movementStrength = 35;
	var height = movementStrength / $(window).height();
	var width = movementStrength / $(window).width();
	var tot_width = $(window).width();

	if(tot_width > 975){
		$("#miles_image").mousemove(function(e){
	          var pageX = e.pageX - ($(window).width() / 2);
	          var pageY = e.pageY - ($(window).height() / 2);
	          var newvalueX = width * pageX * -1 - 25;
	          var newvalueY = height * pageY * -1 - 50;
	          $('#miles_image').css("background-position", newvalueX+"px     "+newvalueY+"px");
		});
		$("#box").mousemove(function(e){

	          var pageX = e.pageX - ($(window).width() / 2);
	          var pageY = e.pageY - ($(window).height() / 2);
	          var newvalueX = width * pageX * -1 - 25;
	          var newvalueY = height * pageY * -1 - 50;
	          $('#miles_image').css("background-position", newvalueX+"px     "+newvalueY+"px");
		});
		$("#box_svg").mousemove(function(e){
	          var pageX = e.pageX - ($(window).width() / 2);
	          var pageY = e.pageY - ($(window).height() / 2);
	          var newvalueX = width * pageX * -1 - 25;
	          var newvalueY = height * pageY * -1 - 50;
	          $('#miles_image').css("background-position", newvalueX+"px     "+newvalueY+"px");
		});
	}
	


	function letter_mover(){
		
    	$("#m_letter").animate(
       		{left : "-=2000", opacity: '1'}, 1000, function() {}
    	);

    	$("#i_letter").animate(
       		{top : "-=1000", opacity: '1'}, 800, function() {}
    	);

    	$("#l_letter").animate(
       		{left : "-=1000", opacity: '1'}, 900, function() {}
    	);

    	$("#e_letter").animate(
       		{right : "-=1000", opacity: '1'}, 1000, function() {}
    	);

    	$("#s_letter").animate(
       		{top : "+=200", opacity: '1'}, 700, function() {}
    	);
		
	}

	function letter_mover_2(){
		$("#c_letter").animate(
       		{top : "-=500", opacity: '1'}, 800, function() {}
    	);

    	$("#h_letter").animate(
       		{top : "-=1000", opacity: '1'}, 700, function() {}
    	);

    	$("#i2_letter").animate(
       		{left : "-=1000", opacity: '1'}, 750, function() {}
    	);

    	$("#c2_letter").animate(
       		{right : "-=1000", opacity: '1'}, 900, function() {}
    	);

    	$("#k_letter").animate(
       		{top : "+=200", opacity: '1'}, 600, function() {}
    	);
	}

	function reveal_lines(){
		$('#lines').slideDown(2500);
	}

	function reveal_links(){
		$('#links').fadeIn(1000);
	}



	function box_sizer(){
		var minus_this = $('#miles_name').height() + $('#chick_name').height() + $('#lines').height();
		var box_height = $(window).height() - minus_this - 60;

		$('#box_one').height(box_height);
		$('#box_two').height(box_height);
		$('#box_three').height(box_height);
		$('.title_box').height(box_height);
		$('.content_box').height(box_height);
	}

	// box_sizer();

	$(window).resize(box_sizer);
	
	setTimeout(letter_mover, 3000);
	setTimeout(letter_mover_2, 4100);
	setTimeout(reveal_lines, 5000);
	setTimeout(reveal_links, 7000);
	setTimeout(box_sizer, 9000);


	$('#about').mouseenter(function(event) {
		$('#box_two').slideUp('2000');
		$('#box_three').slideUp('2000');
		$('#box_one').slideDown("2000");
	});

	$('#web_dev').mouseenter(function(event) {
		$('#box_one').slideUp('2000');
		$('#box_three').slideUp('2000');
		$('#box_two').slideDown("2000");
	});

	$('#contact').mouseenter(function(event) {
		$('#box_one').slideUp('2000');
		$('#box_two').slideUp('2000');
		$('#box_three').slideDown("2000");
	});

	$('#miles_name').mouseenter(function(event) {
		$('#box_one').slideUp('2000');
		$('#box_two').slideUp('2000');
		$('#box_three').slideUp("2000");
	});

	$('#chick_name').mouseenter(function(event) {
		$('#box_one').slideUp('2000');
		$('#box_two').slideUp('2000');
		$('#box_three').slideUp("2000");
	});


});