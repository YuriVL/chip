/**
 * @license Copyright (c) 2016, yastopch. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

/**
 * @fileOverview Bootstrap Alerts Plugin
 */
CKEDITOR.plugins.add( 'alerts', {
	lang:'en,ru',
    icons: 'alerts',
    init: function( editor ) {
		
        var pluginName='alerts';
		
		editor.addCommand( pluginName, new CKEDITOR.dialogCommand( 'alertsDialog' ) );
		
        editor.ui.addButton( 'Alerts', {
            label: editor.lang.alerts.toolbar,
            command: 'alerts',
            toolbar: 'insert,100'
        });
		
       /* if ( editor.contextMenu ) {
            
			editor.addMenuGroup( 'alertsGroup' );
			
            editor.addMenuItem( 'alertsItem', {
                label: editor.lang.alerts.editalerts,
                icon: this.path + 'icons/alerts.png',
                command: pluginName,
                group: 'alertsGroup'
            });

            editor.contextMenu.addListener( function( element ) {				
                if ( element.getAscendant( 'alerts', true ) ) {
                    return { alertsItem: CKEDITOR.TRISTATE_OFF };
                }
            });            
        }*/
        CKEDITOR.dialog.add( 'alertsDialog', this.path + 'dialogs/alerts.js' );
    }
});