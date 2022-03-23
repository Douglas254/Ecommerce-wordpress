/*************************************/
// Bottom Footer Hide and Show control
/*************************************/
( function( $ ){
OPNControlTrigger.addHook( 'm-shop-toggle-control', function( argument, api ){
OPNCustomizerToggles ['m_shop_bottom_footer_layout'] = [
		    {
				controls: [ 
				'm_shop_bottom_footer_col1_set',
				'm_shop_footer_bottom_col1_texthtml',
				'm_shop_footer_bottom_col1_widget_redirect',
				'm_shop_footer_bottom_col1_menu_redirect',
				'm_shop_footer_bottom_col1_social_media_redirect',
				'm_shop_bottom_footer_col2_set', 
				'm_shop_bottom_footer_col2_texthtml',
				'm_shop_bottom_footer_col2_widget_redirect',
				'm_shop_bottom_footer_col2_menu_redirect',
				'm_shop_bottom_footer_col2_social_media_redirect',
				'm_shop_bottom_footer_col3_set',
				'm_shop_bottom_footer_col3_texthtml',
				'm_shop_bottom_footer_col3_widget_redirect',
				'm_shop_bottom_footer_col3_menu_redirect',
				'm_shop_bottom_footer_col3_social_media_redirect',
				'm_shop_btm_ftr_hgt',
				'm_shop_bottom_frt_brdr_clr',
				'm_shop_btm_ftr_botm_brd',
				'm_shop_bottom_footer_color_scheme',
				],
				callback: function(layout){
					if(layout=='ft-btm-none'){
					return false;
					}
					return true;
				}
			},

			{
				controls: [    
				'm_shop_bottom_footer_col2_set',  
				'm_shop_bottom_footer_col3_set',
				
				],
				callback: function(layout){
					if(layout!=='ft-btm-two'|| layout!=='ft-btm-three' || layout!=='ft-btm-none'){
					return false;
					}
					return true;
				}
			},
			{
				controls: [    
				'm_shop_bottom_footer_col2_set',  
				'm_shop_bottom_footer_col3_set',
				
				],
				callback: function(layout){
					if(layout!=='ft-btm-two'|| layout!=='ft-btm-three' || layout!=='ft-btm-none'){
					return false;
					}
					return true;
				}
			},
			
			{
				controls: [ 
				'm_shop_bottom_footer_col1_set',   
				'm_shop_bottom_footer_col2_set', 
				
				],
				callback: function(layout){
					if(layout=='ft-btm-two' || layout=='ft-btm-three'){
					return true;
					}
					return false;
				}
			},
			{
				controls: [ 
				'm_shop_bottom_footer_col1_set', 
				],
				callback: function(layout){
					if(layout=='ft-btm-one'|| layout=='ft-btm-two' ||  layout=='ft-btm-three'){
					return true;
					}
					return false;
				}
			},
			{
				controls: [ 
				'm_shop_bottom_footer_col3_set',  
				],
				callback: function(layout){
					if(layout=='ft-btm-three'){
					return true;
					}
					return false;
				}
			},
			
// col1
			{
				controls: [    
				'm_shop_footer_bottom_col1_texthtml',
				],
				callback: function(layout){
					var val = api( 'm_shop_bottom_footer_col1_set' ).get();
					if((layout!== 'ft-btm-none') && val=='text'){
					return true;
					}
					return false;
				}
			},
			{
				controls: [    
				'm_shop_footer_bottom_col1_widget_redirect',
				],
				callback: function(layout){
					var val = api( 'm_shop_bottom_footer_col1_set' ).get();
					if((layout!== 'ft-btm-none') && val=='widget'){
					return true;
					}
					return false;
				}
			},
			{
				controls: [    
				'm_shop_footer_bottom_col1_menu_redirect',
				],
				callback: function(layout){
					var val = api( 'm_shop_bottom_footer_col1_set' ).get();
					if((layout!== 'ft-btm-none') && val=='menu'){
					return true;
					}
					return false;
				}
			},
			{
				controls: [    
				'm_shop_footer_bottom_col1_social_media_redirect',
				],
				callback: function(layout){
					var val = api( 'm_shop_bottom_footer_col1_set' ).get();
					if((layout!== 'ft-btm-none') && val=='social'){
					return true;
					}
					return false;
				}
			},
// col2
			{
				controls: [    
				'm_shop_bottom_footer_col2_texthtml',
				],
				callback: function(layout){
					var val = api( 'm_shop_bottom_footer_col2_set' ).get();
					if((layout=='ft-btm-two'||layout=='ft-btm-three') && (val=='text')){
					return true;
					}
					return false;
				}
			},
			{
				controls: [    
				'm_shop_bottom_footer_col2_widget_redirect',
				],
				callback: function(layout){
					var val = api( 'm_shop_bottom_footer_col2_set' ).get();
					if((layout=='ft-btm-two'||layout=='ft-btm-three') && (val=='widget')){
					return true;
					}
					return false;
				}
			},
			{
				controls: [    
				'm_shop_bottom_footer_col2_menu_redirect',
				],
				callback: function(layout){
					var val = api( 'm_shop_bottom_footer_col2_set' ).get();
					if((layout=='ft-btm-two'||layout=='ft-btm-three') && (val=='menu')){
					return true;
					}
					return false;
				}
			},
			{
				controls: [    
				'm_shop_bottom_footer_col2_social_media_redirect',
				],
				callback: function(layout){
					var val = api( 'm_shop_bottom_footer_col2_set' ).get();
					if((layout=='ft-btm-two'||layout=='ft-btm-three') && (val=='social')){
					return true;
					}
					return false;
				}
			},
			// col3
			{
				controls: [    
				'm_shop_bottom_footer_col3_texthtml',
				],
				callback: function(layout){
					var val = api( 'm_shop_bottom_footer_col3_set' ).get();
					if((layout== 'ft-btm-three') && val=='text'){
					return true;
					}
					return false;
				}
			},
			{
				controls: [    
				'm_shop_bottom_footer_col3_widget_redirect',
				],
				callback: function(layout){
					var val = api( 'm_shop_bottom_footer_col3_set' ).get();
					if((layout== 'ft-btm-three') && val=='widget'){
					return true;
					}
					return false;
				}
			},
			{
				controls: [    
				'm_shop_bottom_footer_col3_menu_redirect',
				],
				callback: function(layout){
					var val = api( 'm_shop_bottom_footer_col3_set' ).get();
					if((layout== 'ft-btm-three') && val=='menu'){
					return true;
					}
					return false;
				}
			},
			{
				controls: [    
				'm_shop_bottom_footer_col3_social_media_redirect',
				],
				callback: function(layout){
					var val = api( 'm_shop_bottom_footer_col3_set' ).get();
					if((layout== 'ft-btm-three') && val=='social'){
					return true;
					}
					return false;
				}
			},
					
];
OPNCustomizerToggles ['m_shop_bottom_footer_col1_set'] = [
			{
				controls: [    
				'm_shop_footer_bottom_col1_texthtml',
				],
				callback: function(layout){
					var val = api( 'm_shop_bottom_footer_layout' ).get();
					if((layout == 'text') && (val!=='ft-btm-none')){
					return true;
					}
					return false;
				}
			},
			{
				controls: [    
				'm_shop_footer_bottom_col1_widget_redirect',
				],
				callback: function(layout){
					var val = api( 'm_shop_bottom_footer_layout' ).get();
					if((layout == 'widget') && (val!=='ft-btm-none')){
					return true;
					}
					return false;
				}
			},
			{
				controls: [    
				'm_shop_footer_bottom_col1_menu_redirect',
				],
				callback: function(layout){
					var val = api( 'm_shop_bottom_footer_layout' ).get();
					if((layout == 'menu') && (val!=='ft-btm-none')){
					return true;
					}
					return false;
				}
			},
			{
				controls: [    
				'm_shop_footer_bottom_col1_social_media_redirect',
				],
				callback: function(layout){
					var val = api( 'm_shop_bottom_footer_layout' ).get();
					if((layout == 'social') && (val!=='ft-btm-none')){
					return true;
					}
					return false;
				}
			},
			
		];
OPNCustomizerToggles ['m_shop_bottom_footer_col2_set'] = [
		    {
				controls: [    
				'm_shop_bottom_footer_col2_texthtml',
				'm_shop_bottom_footer_col2_widget_redirect',
				'm_shop_bottom_footer_col2_menu_redirect',
				'm_shop_bottom_footer_col2_social_media_redirect',
				],
				callback: function(layout){
					var val = api( 'm_shop_bottom_footer_layout' ).get();
					if(layout == 'none' || val=='ft-btm-none'){
					return false;
					}
					return true;
				}
			},
			{
				controls: [    
				'm_shop_bottom_footer_col2_texthtml',
				],
				callback: function(layout){
					var val = api( 'm_shop_bottom_footer_layout' ).get();
					if((layout == 'text') && (val=='ft-btm-two'|| val=='ft-btm-three')){
					return true;
					}
					return false;
				}
			},
			{
				controls: [    
				'm_shop_bottom_footer_col2_widget_redirect',
				],
				callback: function(layout){
					var val = api( 'm_shop_bottom_footer_layout' ).get();
					if((layout == 'widget') && (val=='ft-btm-two'|| val=='ft-btm-three')){
					return true;
					}
					return false;
				}
			},
			{
				controls: [    
				'm_shop_bottom_footer_col2_menu_redirect',
				],
				callback: function(layout){
					var val = api( 'm_shop_bottom_footer_layout' ).get();
					if((layout == 'menu') && (val=='ft-btm-two'|| val=='ft-btm-three')){
					return true;
					}
					return false;
				}
			},
			{
				controls: [    
				'm_shop_bottom_footer_col2_social_media_redirect',
				],
				callback: function(layout){
					var val = api( 'm_shop_bottom_footer_layout' ).get();
					if((layout == 'social') && (val=='ft-btm-two'|| val=='ft-btm-three')){
					return true;
					}
					return false;
				}
			},
			
		];
OPNCustomizerToggles ['m_shop_bottom_footer_col3_set'] = [
		    {
				controls: [    
				'm_shop_bottom_footer_col3_texthtml',
				'm_shop_bottom_footer_col3_widget_redirect',
				'm_shop_bottom_footer_col3_menu_redirect',
				'm_shop_bottom_footer_col3_social_media_redirect',
				],
				callback: function(layout){
					var val = api( 'm_shop_bottom_footer_layout' ).get();
					if(layout == 'none' && val!=='ft-btm-three'){
					return false;
					}
					return true;
				}
			},
			{
				controls: [    
				'm_shop_bottom_footer_col3_texthtml',
				],
				callback: function(layout){
					var val = api( 'm_shop_bottom_footer_layout' ).get();
					if(layout == 'text' && val=='ft-btm-three'){
					return true;
					}
					return false;
				}
			},
			{
				controls: [    
				'm_shop_bottom_footer_col3_widget_redirect',
				],
				callback: function(layout){
					var val = api( 'm_shop_bottom_footer_layout' ).get();
					if(layout == 'widget' && val=='ft-btm-three'){
					return true;
					}
					return false;
				}
			},
			{
				controls: [    
				'm_shop_bottom_footer_col3_menu_redirect',
				],
				callback: function(layout){
					var val = api( 'm_shop_bottom_footer_layout' ).get();
					if(layout == 'menu' && val=='ft-btm-three'){
					return true;
					}
					return false;
				}
			},
			{
				controls: [    
				'm_shop_bottom_footer_col3_social_media_redirect',
				],
				callback: function(layout){
					var val = api( 'm_shop_bottom_footer_layout' ).get();
					if(layout == 'social' && val=='ft-btm-three'){
					return true;
					}
					return false;
				}
			},
			
		];
	});
})( jQuery );