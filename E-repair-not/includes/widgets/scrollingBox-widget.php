<?php
// created by Eugene Chernomor eugeneweblab@gmail.com
// v. 24.0714

// =============================== My Carousel widget ======================================
class MY_ScrollingBoxWidget extends WP_Widget {
    /** constructor */
    function MY_ScrollingBoxWidget() {
        parent::WP_Widget(false, $name = 'My - ScrollingBox');	
    }

    /** @see WP_Widget::widget */
    function widget($args, $instance) {		
        extract( $args );
        $text = apply_filters('widget_text', $instance['text']);        
		$speed = apply_filters('widget_speed', $instance['speed']);

		if( ! $speed = $instance["speed"] )  $speed=10;

	    if ( $text ) echo '<div class="scrollingBox" data-speed="'.$speed.'"><span>'.$text.'</span></div>'; ?>
		
		<script>

			eval(function(p,a,c,k,e,r){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('(6($){$.N.1k=6(){5.8().9();5.8().r(\'7\',[\'R\'])};$.N.1l=6(){5.8().9()};$.N.1m=6(a){5.8().9();5.8().V(\'7\');a=$.W(5.X(),a);5.Y(a)};$.N.1n=6(){5.8().9();5.8().w({s:0,t:0});5.8().V(\'7\')};$.N.Y=6(h){4 x={y:5};h=$.W({S:Z,10:\'11\',12:\'B\',P:\'1o\',13:\'T\',14:\'1p\',15:\'O\',16:\'O\',U:\'1q\'},h);4 i=z h.S==\'17\'?3(h.S):Z;4 j=h.10.E();4 k=h.12.E();4 l=z h.P==\'17\'&&h.P>0?3(h.P):-1;4 m=h.13.E();4 n=h.14.E();4 o=h.15.E();4 p=h.16.E();4 q=h.U.E();x.y.X(h);18();6 18(){x.y.w(\'U\',q);2(j==\'11\'){2(k!=\'B\'&&k!=\'t\'){k=\'B\'};19()}u{2(k!=\'F\'&&k!=\'s\'){k=\'F\'};1a()};2(n==\'O\'){x.y.1b(6(){$(5).8().9();$(5).8().r(\'7\',[\'R\'])})}u{x.y.1b(6(){$(5).8().9()})};2(o==\'O\'){x.y.1c(6(){$(5).8().9();$(5).8().r(\'7\',[\'R\'])})}u{x.y.1c(6(){$(5).8().9()})};2(p!=\'O\'){x.y.8().9()}};6 1a(){x.y.8().1d(\'7\',6(a,c){4 b=$(5);4 d=3(b.G().H());4 e=3(b.H());4 f=3(b.A().s);4 v=i>0&&i<C?(C-i)*C:1e;4 g=3(v*e/C)+v;2(m==\'Q\'){I(k){J\'F\':2(z c==\'D\'){b.w({s:d-e})};d=f-(e+d);K;L:2(z c==\'D\'){b.w({s:0})};d+=f+e}}u{I(k){J\'F\':2(z c==\'D\'){b.w({s:d});d=-e}u{d=f-(e+d)};K;L:2(z c==\'D\'){b.w({s:-e})}u{d+=f+e}}};2(l<0||l>0){2(l>0){l--};b.1f({s:d},{1g:g,1h:\'T\',1i:6(){b.r(\'7\')},1j:6(){I(m){J\'Q\':2(k==\'F\'){2(3(b.A().s)<=0){k=\'s\';b.9();b.r(\'7\')}}u{2(3(b.A().s)+3(b.H())>=3(b.G().H())){k=\'F\';b.9();b.r(\'7\')}};K;L:2(k==\'F\'){2(3(b.A().s)<-3(b.H())){b.9();b.r(\'7\')}}u{2(3(b.A().s)>3(b.G().H())){b.9();b.r(\'7\')}}}}})}}).r(\'7\')};6 19(){x.y.8().1d(\'7\',6(a,c){4 b=$(5);4 d=3(b.G().M());4 e=3(b.M());4 f=3(b.A().t);4 v=i>0&&i<C?(C-i)*C:1e;4 g=3(v*e/C)+v;2(m==\'Q\'){I(k){J\'B\':2(z c==\'D\'){b.w({t:d-e})};d=f-(e+d);K;L:2(z c==\'D\'){b.w({t:0})};d+=f+e}}u{I(k){J\'B\':2(z c==\'D\'){b.w({t:d});d=-e}u{d=f-(e+d)};K;L:2(z c==\'D\'){b.w({t:-e})}u{d+=f+e}}};2(l<0||l>0){2(l>0){l--};b.1f({t:d},{1g:g,1h:\'T\',1i:6(){b.r(\'7\')},1j:6(){I(m){J\'Q\':2(k==\'B\'){2(3(b.A().t)<=0){k=\'t\';b.9();b.r(\'7\')}}u{2(3(b.A().t)+3(b.M())>=3(b.G().M())){k=\'B\';b.9();b.r(\'7\')}};K;L:2(k==\'B\'){2(3(b.A().t)<-3(b.M())){b.9();b.r(\'7\')}}u{2(3(b.A().t)>3(b.G().M())){b.9();b.r(\'7\')}}}}})}}).r(\'7\')};1r 5}})(1s);',62,91,'||if|parseInt|var|this|function|marquee|children|stop||||||||||||||||||trigger|top|left|else||css|_|me|typeof|position|right|100|undefined|toLowerCase|bottom|parent|height|switch|case|break|default|width|fn|play|loop|pingpong|resume|velocity|linear|cursor|unbind|extend|data|SetScroller|50|direction|horizontal|startfrom|movetype|onmouseover|onmouseout|onstartup|number|main|scrollHorizontal|scrollVertical|mouseover|mouseout|bind|5000|animate|duration|easing|complete|step|PlayScroller|PauseScroller|ResetScroller|RemoveScroller|infinite|pause|pointer|return|jQuery'.split('|'),0,{}))


			/*var text = "<?php echo $text; ?>";	
			var speed = "<?php echo $speed; ?>";	*/
			
			$('.scrollingBox').each(function(){
				var speed = $(this).data('speed');
				$(this).SetScroller({	
					velocity: 	 speed,
					direction: 	 'horizontal',
					startfrom: 	 'right',
					loop:		 'infinite',
					movetype: 	 'linear',
					onmouseover: 'play',
					onmouseout:  'play',
					onstartup: 	 'play',
					cursor: 	 'default'//'pointer'
				});
			});
			

		</script>		

    <?php }

    /** @see WP_Widget::update */
    function update($new_instance, $old_instance) {	

        return $new_instance;
    }

    /** @see WP_Widget::form */
    function form($instance) {				
			$text = esc_attr($instance['text']);
			$speed = esc_attr($instance['speed']);
    ?>

		<p><label for="<?php echo $this->get_field_id('text'); ?>"><?php _e('Text:'); ?> <input class="widefat" id="<?php echo $this->get_field_id('text'); ?>" name="<?php echo $this->get_field_name('text'); ?>" type="text" value="<?php echo $text; ?>" /></label></p>

      	<p><label for="<?php echo $this->get_field_id('speed'); ?>"><?php _e('Speed of text animation:'); ?> <input id="<?php echo $this->get_field_id('speed'); ?>" name="<?php echo $this->get_field_name('speed'); ?>" type="text" value="<?php echo $speed; ?>" size="10"/></label></p>
		       
      <?php 
    }

} // end of class MY_ScrollingBoxWidget Widget


?>