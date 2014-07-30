var isValid = {
        "title" : true,
        "author" : true,
        "body" : true,
        "category" : true
    };

$("#addpost").submit(function(e){
    e.preventDefault();
    var title = $("#title").val();
    var author = $("#author").val();
    var body = $("#body").val();
    var category = $("#category").val();
    var tags = $("#tags").val();
    var robot = $("#space").val();
    var robobool = "false";

    if(robot.length > 0)
    	robobool = "true";

    var dataString = 'title=' + title + '&author=' + author + '&body=' + body + '&category=' + category + '&tags=' + tags + '&robot=' + robobool;


    if (title.length < 1)
        invalidInput("title");
    else
        validInput("title");

    if (author.length < 1)
        invalidInput("author");
    else
        validInput("author");

    if (body.length < 1)
        invalidInput("body");
    else
        validInput("body");

    if (category.length < 1)
        invalidInput("category");
    else
        validInput("category");

    var allValid = false;
    if(isValid["title"] == true && isValid["author"] == true && isValid["body"] == true && isValid["category"] == true)
        allValid = true;

    if (allValid){
        $('#addpost_fail').fadeOut(500);
        $.ajax({
            type: "POST",
            url: "/assets/insertpost.php",
            data: dataString,
            success: function(result){
            	if(result == "true"){
            		$('#addpost_form').fadeOut(500, function(){
	                    $('#addpost_success').fadeIn(1000);
	                });
            	}
            	else{
                    $('#result_text').text(result);
            		$('#addpost_fail').fadeIn(500);
            	}
                
            }
        });
    }
    return false;
});

var invalidInput = function(input)
{
    $("#"+input).addClass('validate_border');
    $("#"+input+"validate").animate({height:'1.6em'}, 300);
    isValid[input] = false;
}

var validInput = function(input)
{
    $("#"+input).removeClass('validate_border');
    $("#"+input+"validate").animate({height:'0'}, 300);
    isValid[input] = true;
}