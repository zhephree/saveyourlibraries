<?php 
$page_title = 'Public Comment';
$active_page = 'comment';
require('_header.php'); 
?>
		<section class="red">
			<h1>#SaveYourLibraries Comment</h1>

			<div class="bullet-item">
				<i class="fad fa-video-plus"></i>
				<p>
					<strong>Tell Your Story!</strong><br>
					<a href="https://forms.gle/b7aLpqSjDngoSsiW7" target="_blank" rel="noopener">Make a personal video</a> and let your community know why the NOPL is important to you! We will be editing and releasing videos until election day to amplify the voices of the people that will be affected if #2 passes. Videos from activities at the library or personal testimonials from supporters large and small are encouraged!
				</p>
			</div>
			
			<p>Tell us why you love your New Orleas Public Library!</p>

			<div id="disqus_thread"></div>
			<script>
			    /**
			    *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
			    *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
			    /*
			    var disqus_config = function () {
			    this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
			    this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
			    };
			    */
			    (function() { // DON'T EDIT BELOW THIS LINE
			    var d = document, s = d.createElement('script');
			    s.src = 'https://save-your-library.disqus.com/embed.js';
			    s.setAttribute('data-timestamp', +new Date());
			    (d.head || d.body).appendChild(s);
			    })();
			</script>
			<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
		</section>
<?php require('_footer.php'); ?>