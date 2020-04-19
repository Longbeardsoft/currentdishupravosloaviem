<?php
/**
 * Template for displaying the footer
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Deep_Breath
 * @since Deep Breath 1.0
 */
?>
	</div><!-- #main -->

	<footer id="colophon" role="contentinfo">

			<?php
				/*
				 * A sidebar in the footer? Yep. You can customize
				 * your footer with three columns of widgets.
				 */
			if ( ! is_404() ) {
				get_sidebar( 'footer' );
			}
			?>

			<div id="site-generator">
				<?php do_action( 'deepbreath_credits' ); ?>
				<?php
				if ( function_exists( 'the_privacy_policy_link' ) ) {
					the_privacy_policy_link( '', '<span role="separator" aria-hidden="true"></span>' );
				}
				?><!-- Yandex.Metrika informer -->
                <a href="https://metrika.yandex.ru/stat/?id=48744038&amp;from=informer"
                   target="_blank" rel="nofollow"><img src="https://informer.yandex.ru/informer/48744038/3_0_FFFFFFFF_EFEFEFFF_0_uniques"
                                                       style="width:88px; height:31px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)" class="ym-advanced-informer" data-cid="48744038" data-lang="ru" /></a>
                <!-- /Yandex.Metrika informer -->
                <!-- Top100 (Kraken) Widget -->
                <span id="top100_widget"></span>
                <!-- END Top100 (Kraken) Widget -->
                <br>
				<a href="<?php echo esc_url( __( 'http://longbeardsoft.ru/', 'deepbreath' ) ); ?>" class="imprint" title="<?php esc_attr_e( 'Разработка сайтов', 'deepbreath' ); ?>">
					<?php printf( __( 'Разработано %s', 'deepbreath' ), 'longbeardsoft.ru' ); ?>
				</a>
			</div>
	</footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>
