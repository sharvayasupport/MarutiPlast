( function( api ) {

	// Extends our custom "mobile-repair-shop" section.
	api.sectionConstructor['mobile-repair-shop'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );