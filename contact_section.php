<div class="section_header">Contact</div>
<div class="section group">
	<div class="col span_1_of_2">
		<div class='postBox contactBox'>
			<div class="innerPostBox">
				<div class="postTitle">Send me an email</div>
                <div id="contact_form" >
    				<form id="contact" method="post" action="assets/contactcomplete.php">
    					<label class="contact_label hidden" id="namelabel">Your Name</label>
    					<input name="name" id="name" type="text" class="contact_input" placeholder="Name"/>
    					<div class="validate" id="namevalidate">Please enter a name</div>

    					<label class="contact_label hidden" id="emaillabel">Your Email</label>
    					<input name="email" id="email" type="text" class="contact_input" placeholder="Email address"/>
    					<div class="validate" id="emailvalidate">Please enter a valid email</div>

    					<label class="contact_label hidden" id="bodylabel">Your Question</label>
    					<textarea rows="10" name="text" id="text" class="contact_input contact_textarea" placeholder="Message"></textarea>
    					<div class="validate" id="textvalidate">Your message must be at least 15 charaters in length</div>

                        <input name="space" id="space" type="hidden" value=""/>

    					<a class="contact_button unselectable" onclick="$('#contact').submit();">Send</a>
    					<div class="clear"></div>
    				</form>
                </div>
                <div id="contact_success" class="contact_success"><div style="font-size:1.6em;font-weight:300">Message sent</div><div class="icon">&#61443;</div>Thanks for getting in contact!</div>
                <div id="contact_fail" class="contact_success"><div style="font-size:1.6em;font-weight:300">Message not sent</div>It looks like something went wrong. Please try again or email <a href="mailto:admin@jakenusca.com">admin@jakenusca.com</a>.</div>
			</div>
            
		</div>
	</div>
	<div class="col span_1_of_2">
		<div class='postBox contactLinkBox'>
			<div class="innerPostBox">

                <div class="badge_container">

                    <!-- Desktop badge -->
                    <div class="desktop_gplus_badge">
                        <div class="g-person" data-width="240" data-href="//plus.google.com/100591511286649329894" data-showtagline="false" data-rel="author"></div>
                        <script type="text/javascript">
                          (function() {
                            var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
                            po.src = 'https://apis.google.com/js/platform.js';
                            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
                          })();
                        </script>
                    </div>

                    <!-- Mobile badge -->
                    <div class="mobile_gplus_badge">
                        <div class="g-person" data-width="275" data-href="//plus.google.com/100591511286649329894" data-theme="dark" data-layout="landscape" data-rel="author"></div>
                        <script type="text/javascript">
                          (function() {
                            var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
                            po.src = 'https://apis.google.com/js/platform.js';
                            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
                          })();
                        </script>
                    </div>

                </div>
                <div class="contact_links_pusher">
                    <div class="contact_links_container">
                        <div class="link_box"><a href="http://ca.linkedin.com/in/jakenusca/" class="link linkedin_icon"><span class="icon contact_icon" style="top: -0.05em;">&#61665;</span>LinkedIn</a></div>
                        <!-- <div class="link_box"><a href="https://plus.google.com/100591511286649329894/" class="link google_icon"><span class="icon contact_icon">&#61653;</span>Google</a></div> -->
                        <div class="link_box"><a href="https://github.com/jakis39" class="link github_icon"><span class="icon contact_icon">&#61595;</span>Github</a></div>
                        <div class="link_box"><a href="https://twitter.com/JakeNusca" class="link twitter_icon"><span class="icon contact_icon">&#61593;</span>Twitter</a></div>
                    </div>
                </div>
                <div class="clear"></div>
               


                
                </div>
			</div>
		</div>
	</div>
</div>