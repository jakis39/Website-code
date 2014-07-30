<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Post || Jake Nusca</title>
    <?php include("../assets/googlefont.html"); ?>
    <link href="../assets/css/main.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/subpage.css" rel="stylesheet" type="text/css" />
    <link href="page.css" rel="stylesheet" type="text/css" />
    <script src="../assets/javascript/jquery-1.9.1.min.js" type="text/javascript"></script>
</head>

<body>
    <div id="header" class="header">
        <div id="navtop">
            <div class="navwrap">
                <div id="mobile_controls" class="mobile_controls">
                    <a href="/" id="back_button" class="back_button icon"><span></span></a>
                    <div class="mobile_jakenusca">Add Post</div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>

    <div id="main" class="main_content">
        <div>
            <div id="about" class="content_section">
                <div class="content_inner_section">
                    <div class="postBox" id="BossTank">
                        <div class="innerPostBox">
                            <div id="addpost_fail" class="contact_success addpost_fail"><div style="font-size:1.6em;font-weight:300">Error</div><div class="icon">&#61453;</div><span id="result_text">Error text here</span></div>
                            <div class="addpost_form" id="addpost_form">

                                <form id="addpost" action="/assets/insertpost.php" method="post">
                                    <label for="title" class="addpost_label">Title</label>
                                    <input type="text" name="title" maxlength="350" class="addpost_input" id="title" />
                                    <div class="validate addpost" id="titlevalidate">Each post needs a title</div>

                                    <label for="author" class="addpost_label">Author</label>
                                    <input type="text" name="author" maxlength="100" value="Jake Nusca" class="addpost_input" id="author" />
                                    <div class="validate addpost" id="authorvalidate">Each post needs an author</div>

                                    <label for="body" class="addpost_label">Body</label>
                                    <textarea name="body" maxlength="10000" rows="10" class="addpost_input" id="body" ></textarea>
                                    <div class="validate addpost" id="bodyvalidate">Fill in the body</div>

                                    <label for="category" class="addpost_label">Category</label>
                                    <input type="text" name="category" maxlength="150" class="addpost_input" id="category" />
                                    <div class="validate addpost" id="categoryvalidate">Please enter a Category</div>

                                    <label for="tags" class="addpost_label">Tags</label>
                                    <input type="text" name="tags" maxlength="150" class="addpost_input" id="tags" />

                                    <input name="space" id="space" type="hidden" value=""/>

                                    <a class="contact_button unselectable addpost_button" onclick="$('#addpost').submit();">Publish</a>
                                    <div class="clear"></div>
                                </form>

                            </div>
                            <div id="addpost_success" class="contact_success addpost_success"><div style="font-size:1.6em;font-weight:300">Message sent</div><div class="icon">&#61452;</div>Go check it out</div>
                        </div>
                    </div>
                </div>
            </div>
        
        </div>
    </div>
</body>
</html>

<script src="../assets/javascript/subpage.js" type="text/javascript"></script>
<script src="../assets/javascript/addpost.js" type="text/javascript"></script>