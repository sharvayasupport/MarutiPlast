<?php
/**
 * Displaying Footer.
 * @package Mobile Repair Shop
 */
?>
<footer id="footer-section" role="contentinfo">
	<div class="footer-overlay"></div>
	<?php
		get_template_part( 'template-parts/footer/footer', 'widgets' );
		
		get_template_part( 'template-parts/footer/site', 'info' );
	?>
</footer>

<?php wp_footer(); ?>

</body>
</html>