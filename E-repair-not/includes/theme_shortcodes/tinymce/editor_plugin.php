<?php 
header("Content-Type:text/javascript");

//Setup URL to WordPress
$absolute_path = __FILE__;
$path_to_wp = explode( 'wp-content', $absolute_path );
$wp_url = $path_to_wp[0];

//Access WordPress
require_once( $wp_url.'/wp-load.php' );

//URL to TinyMCE plugin folder
$plugin_url = get_template_directory_uri().'/includes/theme_shortcodes/tinymce/';
?>
(function(){
	
	var icon_url = '<?php echo $plugin_url; ?>' + 'images/icon_shortcodes.png';

	tinymce.create(
		"tinymce.plugins.MyThemeShortcodes",
		{
			init: function(d,e) {
					
					d.addCommand( "myThemeOpenDialog",function(a,c){
						
						// Grab the selected text from the content editor.
						selectedText = '';
					
						if ( d.selection.getContent().length > 0 ) {
					
							selectedText = d.selection.getContent();
							
						} // End IF Statement
						
						myThemeSelectedShortcodeType = c.identifier;
						myThemeSelectedShortcodeTitle = c.title;
						
						jQuery.get(e+"/dialog.php",function(b){
							
							jQuery('#shortcode-options').addClass( 'shortcode-' + myThemeSelectedShortcodeType );
							
							// Skip the popup on certain shortcodes.
							
							switch ( myThemeSelectedShortcodeType ) {
								
								// alert
								
								case 'alert':
								
								var a = '[alert]'+selectedText+'[/alert]';
								
								tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
								
								break;
								
								// approved
								
								case 'approved':
								
								var a = '[approved]'+selectedText+'[/approved]';
								
								tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
								
								break;
								
								// attention
								
								case 'attention':
								
								var a = '[attention]'+selectedText+'[/attention]';
								
								tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
								
								break;
								
								// notice
								
								case 'notice':
								
								var a = '[notice]'+selectedText+'[/notice]';
								
								tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
								
								break;
								
								// tags
								
								case 'tags':
								
								var a = '[tags]';
								
								tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
								
								break;
								
								// dropcap
								
								case 'dropcap':
								
								var a = '[dropcap]'+selectedText+'[/dropcap]';
								
								tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
								
								break;
								
								// frame
								
								case 'frame':
								
								var a = '[frame]'+selectedText+'[/frame]';
								
								tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
								
								break;
								
								// frame_left
								
								case 'frameleft':
								
								var a = '[frame_left]'+selectedText+'[/frame_left]';
								
								tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
								
								break;
								
								// frame_right
								
								case 'frameright':
								
								var a = '[frame_right]'+selectedText+'[/frame_right]';
								
								tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
								
								break;
								
								// Horizontal Ruel
								
								case 'hr':
								
								var a = '[hr]';
								
								tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
								
								break;
								
								// Small Horizontal Rule
								
								case 'sm_hr':
								
								var a = '[sm_hr]';
								
								tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
								
								break;
                
                // spacer
								
								case 'spacer':
								
								var a = '[spacer]';
								
								tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
								
								break;

                // spacer2
								
								case 'spacer2':
								
								var a = '[spacer2]';
								
								tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
								
								break;

				// row
								
								case 'row':
								
								var a = '[row]'+selectedText+'[/row]';
								
								tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
								
								break;

				// span1
								
								case 'span1':
								
								var a = '[span1]'+selectedText+'[/span1]';
								
								tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
								
								break;
								
				// span2
								
								case 'span2':
								
								var a = '[span2]'+selectedText+'[/span2]';
								
								tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
								
								break;
                
                // span3
								
								case 'span3':
								
								var a = '[span3]'+selectedText+'[/span3]';
								
								tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
								
								break;
                
                // span4
								
								case 'span4':
								
								var a = '[span4]'+selectedText+'[/span4]';
								
								tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
								
								break;
                
                // span5
								
								case 'span5':
								
								var a = '[span5]'+selectedText+'[/span5]';
								
								tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
								
								break;
                
                // span6
								
								case 'span6':
								
								var a = '[span6]'+selectedText+'[/span6]';
								
								tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
								
								break;
                
                // span7
								
								case 'span7':
								
								var a = '[span7]'+selectedText+'[/span7]';
								
								tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
								
								break;
                
                // span8
								
								case 'span8':
								
								var a = '[span8]'+selectedText+'[/span8]';
								
								tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
								
								break;
                
                // span9
								
								case 'span9':
								
								var a = '[span9]'+selectedText+'[/span9]';
								
								tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
								
								break;
                
                // span10
								
								case 'span10':
								
								var a = '[span10]'+selectedText+'[/span10]';
								
								tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
								
								break;
                
                // span11
								
								case 'span11':
								
								var a = '[span11]'+selectedText+'[/span11]';
								
								tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
								
								break;
                
                // span12
								
								case 'span12':
								
								var a = '[span12]'+selectedText+'[/span12]';
								
								tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
								
								break;
                
                // check_list
								
								case 'check_list':
								
								var a = '[check_list]'+selectedText+'[/check_list]';
								
								tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
								
								break; 

				// numeric_list
								
								case 'numeric_list':
								
								var a = '[numeric_list]'+selectedText+'[/numeric_list]';
								
								tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
								
								break;   

				// Arrow list
								
								case 'arrow_list':
								
								var a = '[arrow_list]'+selectedText+'[/arrow_list]';
								
								tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
								
								break;

				// link_READ
								
								case 'link_READ':
								
								var a = '[link_READ]'+selectedText+'[/link_READ]';
								
								tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
								
								break;
                
                // Clearfix Box
								
								case 'clearfixBox':
								
								var a = '[clearfixBox]'+selectedText+'[/clearfixBox]';
								
								tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
								
								break;

				 // block95perc Box
								
								case 'block95perc':
								
								var a = '[block95perc]'+selectedText+'[/block95perc]';
								
								tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
								
								break;				
                               
                // one_half_column (1/2)
								
								case 'one_half_column':
								
								var a = '[one_half_column]'+selectedText+'[/one_half_column]';
								
								tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
								
								break;
                
                // one_third_column (1/3)
								
								case 'one_third_column':
								
								var a = '[one_third_column]'+selectedText+'[/one_third_column]';
								
								tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
								
								break;
                
                // two_third_column (2/3)
								
								case 'two_third_column':
								
								var a = '[two_third_column]'+selectedText+'[/two_third_column]';
								
								tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
								
								break;
                
                // one_fourth_column (1/4)
								
								case 'one_fourth_column':
								
								var a = '[one_fourth_column]'+selectedText+'[/one_fourth_column]';
								
								tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
								
								break;
                
                // three_fourth_column (3/4)
								
								case 'three_fourth_column':
								
								var a = '[three_fourth_column]'+selectedText+'[/three_fourth_column]';
								
								tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
								
								break;
                
                // one_sixth_column (1/5)
								
								case 'one_sixth_column':
								
								var a = '[one_sixth_column]'+selectedText+'[/one_sixth_column]';
								
								tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
								
								break;
                
                // five_sixth_column (2/5)
								
								case 'five_sixth_column':
								
								var a = '[five_sixth_column]'+selectedText+'[/five_sixth_column]';
								
								tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
								
								break;

                // fluidFiftyBox 
								
								case 'fluidFiftyBox':
								
								var a = '[fluidFiftyBox]'+selectedText+'[/fluidFiftyBox]';
								
								tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
								
								break;

                // borderRightBox 
								
								case 'borderRightBox':
								
								var a = '[borderRightBox]'+selectedText+'[/borderRightBox]';
								
								tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
								
								break;
								
                // dispayTableBox 
								
								case 'dispayTableBox':
								
								var a = '[dispayTableBox]'+selectedText+'[/dispayTableBox]';
								
								tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
								
								break;

                // palaroidBox 
								
								case 'palaroidBox':
								
								var a = '[palaroidBox]'+selectedText+'[/palaroidBox]';
								
								tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
								
								break;
                
                                
                 // blockquote
								
								case 'blockquote':
								
								var a = '[blockquote]'+selectedText+'[/blockquote]';
								
								tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
								
								break;
                
                // clear
								
								case 'clear':
								
								var a = '[clear]';
								
								tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
								
								break;
								
								// tabs
								
								case 'tabs':
								
								var a = '[tabs tab1="Title #1" tab2="Title #2" tab3="Title #3"] [tab1] Tab 1 content... [/tab1] [tab2] Tab 2 content... [/tab2] [tab3] Tab 3 content... [/tab3] [/tabs]';
								
								tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
                
                break;
                
                // toggle
								
								case 'toggle':
								
								var a = '[toggle title="Your title goes here"]Your content goes here.[/toggle] ';
								
								tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
								
								break;
															
								default:
								
								jQuery("#dialog").remove();
								jQuery("body").append(b);
								jQuery("#dialog").hide();
								var f=jQuery(window).width();
								b=jQuery(window).height();
								f=720<f?720:f;
								f-=80;
								b-=84;
							
							tb_show("Insert "+ myThemeSelectedShortcodeTitle +" Shortcode", "#TB_inline?width="+f+"&height="+b+"&inlineId=dialog");jQuery("#shortcode-options h3:first").text(""+c.title+" Shortcode Settings");
							
								break;
							
							} // End SWITCH Statement
						
						}
												 
					)
					 
					} 
				);

				},
					
				createControl:function(d,e){
				
						if(d=="shortcodes_button"){
						
							d=e.createMenuButton("shortcodes_button",{
								title:"Insert Shortcode",
								image:icon_url,
								icons:false
								});
								
								var a=this;d.onRenderMenu.add(function(c,b){
                c=b.addMenu({title:"Basic"});
                  	a.addWithDialog(c,"Recent Posts","recentposts");
                    a.addWithDialog(c,"Recent Testimonials","recenttesti");
                    a.addWithDialog(c,"Popular Posts","popularposts");
					a.addWithDialog(c,"Recent Comments","recentcomments");
                    a.addWithDialog(c,"Categories","list_categories");
					a.addWithDialog(c,"Tags","tags");

                c=b.addMenu({title:"Span Columns"});
					a.addWithDialog(c,"row","row");
					a.addWithDialog(c,"span1","span1");
					a.addWithDialog(c,"span2","span2");
                    a.addWithDialog(c,"span3","span3");
                    a.addWithDialog(c,"span4","span4");
                    a.addWithDialog(c,"span5","span5");
                    a.addWithDialog(c,"span6","span6");
                    a.addWithDialog(c,"span7","span7");
                    a.addWithDialog(c,"span8","span8");
                    a.addWithDialog(c,"span9","span9");
                    a.addWithDialog(c,"span10","span10");
                    a.addWithDialog(c,"span11","span11");
                    a.addWithDialog(c,"span12","span12");
                   
					a.addWithDialog(c,"Clear Row","clear");
                c=b.addMenu({title:"Fluid Columns"});
					a.addWithDialog(c,"1/2","one_half_column");
					a.addWithDialog(c,"1/3","one_third_column");
                    a.addWithDialog(c,"2/3","two_third_column");
                    a.addWithDialog(c,"1/4","one_fourth_column");
                    a.addWithDialog(c,"3/4","three_fourth_column");
					a.addWithDialog(c,"1/6","one_sixth_column");
                    a.addWithDialog(c,"5/6","five_sixth_column");
                    a.addWithDialog(c,"50% Box","fluidFiftyBox");

                c=b.addMenu({title:"HTML"});
					a.addWithDialog(c,"Button","button");
					a.addWithDialog(c,"Drop Cap","dropcap");
                    a.addWithDialog(c,"Blockquote","blockquote");
					a.addWithDialog(c,"Frame","frame");
					a.addWithDialog(c,"Frame Left","frameleft");
					a.addWithDialog(c,"Frame Right","frameright");
					a.addWithDialog(c,"Horizontal Rule","hr");
					a.addWithDialog(c,"Small Horizontal Rule","sm_hr");
                    a.addWithDialog(c,"Spacer","spacer");
                    a.addWithDialog(c,"Block95perc","block95perc");
                    a.addWithDialog(c,"Palaroid Box","palaroidBox");

                    a.addWithDialog(c,"Check list","check_list");
                    a.addWithDialog(c,"Arrow list","arrow_list");
                    a.addWithDialog(c,"Numeric list","numeric_list");
                    a.addWithDialog(c,"Link READ","link_READ");
                    a.addWithDialog(c,"Clearfix Box","clearfixBox");


				c=b.addMenu({title:"Alert Boxes"});
					a.addWithDialog(c,"Alert","alert");
					a.addWithDialog(c,"Approved","approved");
					a.addWithDialog(c,"Attention","attention");
					a.addWithDialog(c,"Notice","notice");

				c=b.addMenu({title:"Audio & Video"});b.addSeparator();
					a.addWithDialog(c,"Audio","audio");
					a.addWithDialog(c,"Video","video");
					a.addWithDialog(b,"Tabs","tabs");
					a.addWithDialog(b,"Toggle","toggle");
					a.addWithDialog(b,"Google Map","map");

							});
							
							return d
						
						} // End IF Statement
						
						return null
					},
		
				addImmediate:function(d,e,a){d.add({title:e,onclick:function(){tinyMCE.activeEditor.execCommand("mceInsertContent",false,a)}})},
				
				addWithDialog:function(d,e,a){d.add({title:e,onclick:function(){tinyMCE.activeEditor.execCommand("myThemeOpenDialog",false,{title:e,identifier:a})}})},
		
				getInfo:function(){ return{longname:"Shortcode Generator",author:"VisualShortcodes.com",authorurl:"http://visualshortcodes.com",infourl:"http://visualshortcodes.com/shortcode-ninja",version:"1.0"} }
			}
		);
		
		tinymce.PluginManager.add("MyThemeShortcodes",tinymce.plugins.MyThemeShortcodes)
	}
)();
