		<div id="footerwrap">
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer menu') ) ?>
		    <div class="copyright">
		    &copy;<?php echo date("Y"); echo " "; bloginfo('name'); ?>. All Rights Reserved. &nbsp;&nbsp;&nbsp;&nbsp;Designed by <a href="http://www.osiris-inc.com">Osiris Group, Inc</a>.  &nbsp;&nbsp;&nbsp;&nbsp;Developed by <a href="http://codeforamerica.org/" title="Code for America">Code for America</a>	
			</div>
			<div id="sponsor-wrapper">
				<div id="footer">
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sponsors') )  ?>
					<br style="clear:both" />
				</div>
			</div>
		</div>
	<?php wp_footer(); ?>
	
	<!-- Don't forget analytics -->
	
</body>

</html>
