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
                            <div class="addpost_login_form">
                                <?php 
                                    if($badlogin == true)
                                        echo '<div class="badlogin" id="badlogin">Incorrect username or password.</div>';
                                ?>
                                <form method="POST">
                                    <label for="user" class="addpost_label">User</label>
                                    <input type="text" name="user" class="addpost_input login" ></input><br/>

                                    <label for="pass" class="addpost_label">Password</label>
                                    <input type="password" name="pass" class="addpost_input login" ></input><br/>

                                    <input name="space" id="space" type="hidden" value=""/>

                                    <input type="submit" name="submit" value="Sign in" class="login_button"></input>
                                </form>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
        </div>
    </div>
</body>
</html>

<script src="../assets/javascript/subpage.js" type="text/javascript"></script>
<script src="page.js" type="text/javascript"></script>