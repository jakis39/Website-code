$(window).load(function(){
	resizeGrid();
	$(window).resize(function(){
		resizeGrid();
	});
});

var resizeGrid = function()
{
	if(isPhone())
	{
		$('.example').css('min-height','1px');
	}
	else if(isTerblet())
		fixRowHeights(2);
	else
		fixRowHeights(3);
}

var fixRowHeights = function(row_length)
{
	var posts = $('.example');
	posts.css('min-height','1px');

	for(i=0;i<posts.length;i+=row_length){
		var max_height = 0;

		for(j=0;j<row_length;j++)
		{
			console.log("HEIGHT = "+$(posts[i+j]).height());
			if($(posts[i+j]).height() > max_height)
				max_height = $(posts[i+j]).height();
		}

		for(j=0;j<row_length;j++)
		{
			$(posts[i+j]).css('min-height', max_height+'px');
		}
	}
}