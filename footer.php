<div class="row">
  <div class="twelve columns">
    <ul class="block-grid three-up cta-section mobile-one-up">
      <li class="approach">
        <a href="<?php echo fullpath ?>approach">
          <i></i>
          <h3>Approach</h3>
          <p>There is a method to our madness, and users are at the heart of it.</p>
          <span class="button round medium">Find out how</span>
        </a>
      </li>

      <li class="planner">
        <a href="<?php echo fullpath ?>project-planner">
          <i></i>
          <h3>Project Planner</h3>
          <p>Want to work with us? Let us know your requirements!</p>
         <span class="button round medium">Launch!</span>
        </a>
      </li>

      <li class="intouch">
        <a href="<?php echo fullpath ?>get-in-touch">
          <i></i>
          <h3>Get In Touch</h3>
          <p>
            <a href="mailto:hi@minitheory.com">Email</a> <br/>
            <a href="http://www.facebook.com/minitheory">Facebook</a>
          </p>  
          
          <span class="button round medium">Contact Us</span>
        </a>
      </li>
    </ul>
  </div>
</div>

  <footer>
    copyright &copy; 2012&ndash;2013. Crafted by Minitheory Pte Ltd. All the rights are belong to us.
  </footer>
  
  <!-- Included JS Files (Uncompressed) -->
  <!--
  <script src="javascripts/jquery.js"></script><script src="javascripts/jquery.foundation.mediaQueryToggle.js"></script><script src="javascripts/jquery.foundation.forms.js"></script><script src="javascripts/jquery.foundation.reveal.js"></script><script src="javascripts/jquery.foundation.orbit.js"></script><script src="javascripts/jquery.foundation.navigation.js"></script><script src="javascripts/jquery.foundation.buttons.js"></script><script src="javascripts/jquery.foundation.tabs.js"></script><script src="javascripts/jquery.foundation.tooltips.js"></script><script src="javascripts/jquery.foundation.accordion.js"></script><script src="javascripts/jquery.placeholder.js"></script><script src="javascripts/jquery.foundation.alerts.js"></script><script src="javascripts/jquery.foundation.topbar.js"></script><script src="javascripts/jquery.foundation.joyride.js"></script><script src="javascripts/jquery.foundation.clearing.js"></script><script src="javascripts/jquery.foundation.magellan.js"></script>
  -->
  
  <!-- Included JS Files (Compressed) -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
  <script src="<?php echo fullpath ?>javascripts/foundation.min.js"></script>
  
  <!-- Initialize JS Plugins -->
  <script src="<?php echo fullpath ?>javascripts/app.js"></script>
  <script type="text/javascript" src="<?php echo fullpath ?>javascripts/jquery.ba-cond.min.js"></script>
  <script type="text/javascript" src="<?php echo fullpath ?>javascripts/modernizr.custom.79639.js"></script>
  <script src="<?php echo fullpath ?>javascripts/jquery.slitslider.js"></script>
  <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
  <script type="text/javascript"> 

  		$(window).load(function(){
  			$('.portfolio-images').orbit({
  				animation: 'fade',
  				directionalNav: 'false'
  			});

        $('.blockquotes-holder').orbit({
          fluid: '16x5',
          animation: 'fade',
          directionalNav: 'false',
          timer: 'false',
          bullets: 'true'
        });

        $('#slider').animate({
          opacity:1
        });

  		});

      $(function() {
        var foo = null;
        //set blockquote height
        /*var maxHeight = -1;
        $('.blockquote .orbit-slide').each(function(){
          maxHeight = maxHeight > $(this).height()? maxHeight :$(this).height();
        });
        $('.blockquotes-holder').each(function(){
          $(this).height(maxHeight);
        });*/
        
        

        // project planner form
        $('.planner-radio label').click(function(){
          $(this).addClass('selected');
          $(this).parent().siblings('li').find('label').removeClass('selected');
          $(this).siblings('input').attr('checked',true)
        });
        $('.planner-checkbox label').click(function(){
          var checkBox = $(this).siblings('input');
          $(this).toggleClass('selected');
          checkBox.attr("checked", !checkBox.attr("checked"))
          if($(this).hasClass('btn-not-sure')){
            $(this).parent().siblings('li').find('label').removeClass('selected').siblings('input').attr('checked',false);
          }
          else {
            $(this).closest('ul').find('label.btn-not-sure').removeClass('selected').siblings('input').attr('checked',false);
          }
        });
        $('.form-project-planner select').change(function(){
          if ($(this).val() =='0'){
            $(this).next().addClass('empty');
          }
          else {
           $(this).next().removeClass('empty'); 
          }
        });
        $('.form-project-planner select').change();

        //jquery placeholder
        $('[placeholder]').focus(function() {
          var input = $(this);
          if (input.val() == input.attr('placeholder')) {
            input.val('');
            input.removeClass('placeholder');
          }
        }).blur(function() {
          var input = $(this);
          if (input.val() == '' || input.val() == input.attr('placeholder')) {
            input.addClass('placeholder');
            input.val(input.attr('placeholder'));
          }
        }).blur();
        $('[placeholder]').parents('form').submit(function() {
          $(this).find('[placeholder]').each(function() {
            var input = $(this);
            if (input.val() == input.attr('placeholder')) {
              input.val('');
            }
          })
        });

        //project planner validation
        $('.form-project-planner').validate({
          rules: {
            name: "required",
            email: {required:true, email:true},
            contact: {required:true, number:true},
            'project-type': "required",
            organisation: "required",
            description: "required",
            "service-type[]": "required",
            "project-budget": "required"
          },
          ignore:[],
          errorPlacement: function(error,element){
              error.appendTo(element.parent());
            
            
          }
        });

        //home slit slider
        var Page = (function() {

          var $navArrows = $( '#nav-arrows' ),
            $nav = $( '#nav-dots > span' ),
            slitslider = $( '#slider' ).slitslider( {
              onBeforeChange : function( slide, pos ) {

                $nav.removeClass( 'nav-dot-current' );
                $nav.eq( pos ).addClass( 'nav-dot-current' );

              }
            } ),

            init = function() {

              initEvents();
              
            },
            initEvents = function() {

              // add navigation events
              $navArrows.children( ':last' ).on( 'click', function() {

                slitslider.next();
                return false;

              } );

              $navArrows.children( ':first' ).on( 'click', function() {
                
                slitslider.previous();
                return false;

              } );

              $nav.each( function( i ) {
              
                $( this ).on( 'click', function( event ) {
                  
                  var $dot = $( this );
                  
                  if( !slitslider.isActive() ) {

                    $nav.removeClass( 'nav-dot-current' );
                    $dot.addClass( 'nav-dot-current' );
                  
                  }
                  
                  slitslider.jump( i + 1 );
                  return false;
                
                } );
                
              } );

            };

            return { init : init };

        })();

        Page.init();

        /**
         * Notes: 
         * 
         * example how to add items:
         */

        /*
        
        var $items  = $('<div class="sl-slide sl-slide-color-2" data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1"><div class="sl-slide-inner bg-1"><div class="sl-deco" data-icon="t"></div><h2>some text</h2><blockquote><p>bla bla</p><cite>Margi Clarke</cite></blockquote></div></div>');
        
        // call the plugin's add method
        ss.add($items);

        */
        
        /*if ($('body').hasClass('project')){
          history.replaceState({ myState: true });
        }*/

         $('.nav-arrows > a').unbind();
         $('.nav-arrows > a').click(clickHandler);
         function clickHandler(e){
          foo = true;
          loadPage(this.href);
          history.pushState({myState:'fml'},null,this.href);
          e.preventDefault();
         }

        function loadPage(newUrl){
          $('.nav-arrows > a').unbind().click(function(){return false});
          $.ajax({
            url: newUrl,
            cache: false,
            success: function(data){
              var titles = data.match(/<title>(.*?)<\/title>/);
              document.title=titles[1];
             
              var newContent = $(data).filter('#work-content');
              $('#work-content').animate(
              {
                opacity: 0,
                'margin-top':-100
                },300,function(){

                  var newBanner = $(data).find('#banner-content');
                  $('.banner > .row').fadeOut(function(){
                    $('#banner-content').parent().html(newBanner);
                    $('.banner > .row').fadeIn(function(){
                      $('#work-content').html(newContent).animate({
                        opacity:1,
                        'margin-top':0
                      },300,function(){
                        $('.portfolio-images').orbit({
                          animation: 'fade',
                          directionalNav: 'false'
                        });
                        var newPrev = $(data).find('.nav-arrow-prev').parent().attr('href');
                        var newNext = $(data).find('.nav-arrow-next').parent().attr('href');
                        $('.nav-arrow-prev').parent().attr('href', newPrev);
                        $('.nav-arrow-next').parent().attr('href', newNext);
                        $('.nav-arrows > a').click(clickHandler);
                      });
                    });
                  });
                  
                });
              }
          });
          foo = true;
        }

        if ($('body').hasClass('project')){
          $(window).bind('popstate',function(e){
            /*foo = false;
            try{
              if (e.originalEvent.state.myState != 'fml') {return;} // ignore initial popstate 
              else{
                loadPage(location.pathname);
              }
              
            }
            catch (err){return;};*/
            if (foo==true){
                loadPage(location.pathname);
             }
            foo = true;
          });
        }

      });


    </script>
	<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-38016103-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</body>
</html>