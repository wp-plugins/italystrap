/**
 * italystrap Gallery Settings
 * @see JetPack
 * @see http://codex.wordpress.org/Javascript_Reference/wp.media [Non completa per jquery]
 */
(function($) {
	var media = wp.media;

	// Wrap the render() function to append controls.
	media.view.Settings.Gallery = media.view.Settings.Gallery.extend({
		render: function() {
			var $el = this.$el;

			media.view.Settings.prototype.render.apply( this, arguments );

			/**
			 * Append the type template and update the settings.
			 */
			$el.append( media.template( 'italystrap-gallery-settings' ) );
			media.gallery.defaults.type = 'default'; // lil hack that lets media know there's a type attribute.
			// media.gallery.defaults.interval = '';
			// media.gallery.defaults.indicators = '';

			this.update.apply( this, ['type'] );
			// this.update.apply( this, ['interval'] );
			// this.update.apply( this, ['indicators'] );

			// Hide the Columns setting for all types except Default
			$el.find( 'select[name=type]' ).on( 'change', function () {
				var columnSetting = $el.find( 'select[name=columns]' ).closest( 'label.setting' );
				// var divItalyStrapOption = $( '#italystrap-carousel-option' );
				// var italyStrapCarouselOption = $el.find( divItalyStrapOption );
				// italyStrapCarouselOption.hide();

				if ( 'default' === $( this ).val() ) {
					columnSetting.show();
					// italyStrapCarouselOption.hide();
				} else {
					columnSetting.hide();
					// italyStrapCarouselOption.show();
				}
			} ).change();

			return this;
		}
	});
})(jQuery);