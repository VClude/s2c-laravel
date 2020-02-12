<?php if(!empty($prep['ptp_aanwijzing_online'])){ ?>

<div class="row" id="aanwijzing_online">
  <div class="col-lg-12">
    <div class="ibox float-e-margins"  id="aanwijzingcontent" style="background-color:white;">
      <div class="ibox-title">
      <?php $pa = (isset($prep_avail)) ? $prep_avail : true;
            $readonly = (isset($read_only)) ? $read_only : false;?> 
      <h5><?php echo ($readonly) ? "Monitor " : "" ?>Aanwijzing Online</h5>
        <div class="ibox-tools">

          <a class="collapse-link">
            <i class="fa fa-chevron-up"></i>
          </a>
        </div>
      </div>
      <div class="ibox-content">
        <div id="chat" class="wrapper">
          <div class="container">
            <div class="left">

              <div class="top">
              <?php $isonline = ($user_aanwijzing[$userdata['dept_name']] == "Online"); ?>
                <h1>Chat
                <?php if($pa == true && $readonly == false){ ?>
                <input type="checkbox" id="checkonline" <?php echo ($isonline) ? "checked" : "" ?> data-toggle="toggle">
                <?php } 
                else if($readonly == true){ ?>
                (Monitor)
                  <?php }
                  
                else{ echo '(Aanwijzing Selesai)';} ?>
                </h1>
                </div>
              <ul class="people">
                <?php foreach ($user_aanwijzing as $key => $value) { ?>
                <li class="person <?php echo ($key == $userdata['dept_name']) ? "active" : "" ?>" data-user="<?php echo strtoupper($key) ?>">
                  <span class="name"><?php 
                    if(isset($alias_aanwijzing) && (isset($alias_aanwijzing[$key]) && !empty($alias_aanwijzing[$key]))){
                      if($activity_id <= 1081){
                        echo $alias_aanwijzing[$key];
                      }else{
                        echo $key." (".$alias_aanwijzing[$key].")";
                      }
                    }else{
                      echo $key; 
                    }
                  ?></span>
                  <span class="time <?php echo ($value == "Online") ? "active" : "" ?>">
                    <?php echo $value; ?>
                  </span>
                </li>
                <?php } ?>
              </ul>
            </div>
            <div class="right">

              <div class="top"></div>

              <div class="chat" data-chat="chat-aanwijzing">
                <br/>
                <?php foreach ($chat_aanwijzing as $key => $value) {
                  $isyou = ($userdata['dept_name'] == $value['name_ac']); ?>
                  <div class='bubble <?php echo ($isyou) ? "me" : "you" ?>'>
                <?php if(!$isyou){ ?>
                <?php
                 if(isset($alias_aanwijzing) && (isset($alias_aanwijzing[$key]) && !empty($alias_aanwijzing[$key]))){
                    if($activity_id <= 1081){
                      echo $alias_aanwijzing[$key];
                    }else{
                      echo $key." (".$alias_aanwijzing[$key].")";
                    }
                  }else{
                    echo $value['name_ac']; 
                  } 
                ?>
                <br/>
                <?php } ?>
                <?php echo $value['message_ac'] ?><br/><small>(<?php echo date("d/m/y H:i",strtotime($value['datetime_ac'])) ?>)</small>
                  </div>
                  <?php } ?>
                </div>

              </div>
                </h1>
              <div class="write">
                <textarea id="chat-input" style="resize:none;"></textarea>
                <a class="write-link send"></a>
                <span id="clf" style="vertical-align:middle;padding-top:20px;">1024</span> 
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <link href="<?php echo base_url('assets/css/aanwijzing.css') ?>" rel="stylesheet">
  <script type="text/javascript">
    let elemctr = 0;
    const tenderid_aanwijzing = "<?php echo $permintaan['ptm_number'] ?>";
    const username_aanwijzing = "<?php echo $userdata['dept_name'] ?>";
    const submiturl_aanwijzing = "<?php echo site_url('procurement/sendaanwijzing') ?>";
    $('#chat-input').keydown(function(e){
      updateOutput();
});


function updateOutput(){
    var sampleInput = $('#chat-input').val(),
        sampleInputLength = sampleInput.length,
        sampleInputLeft = 1024 - sampleInputLength,
        alertshowctr = 0;

    if(sampleInputLeft < 0) {    
        sampleInput = sampleInput.substr(0,1024);    
        sampleInputLeft = 0;
        $("#chat-input").effect( "shake", {times: 1, distance: 2});
        if(alertshowctr == 0){
          alert('text tidak boleh melebihi 1024 karakter');
          alertshowctr = 1;
        }
    }
    const elem = document.getElementById('chat-input');
    
    if (elem.clientHeight < elem.scrollHeight){
      if(elemctr <3){
        do{
            $('.write').css("height", $('#chat-input').height()+20);
            $('#aanwijzingcontent').css("height", $('#aanwijzingcontent').height()+20);
            $('#chat-input').autoResize();
            elemctr++;
        }
        while(elemctr < 3);
      }
    }
    

    $('#clf').text(sampleInputLeft);
    $('#chat-input').val(sampleInput);
}
  </script>
  <script>
  (function($){
    
    $.fn.autoResize = function(options) {
        
        // Just some abstracted details,
        // to make plugin users happy:
        var settings = $.extend({
            onResize : function(){},
            animate : false,
            animateDuration : 150,
            animateCallback : function(){},
            extraSpace : 20,
            limit: 5
        }, options);
        
        // Only textarea's auto-resize:
        this.filter('textarea').each(function(){
            
                // Get rid of scrollbars and disable WebKit resizing:
            var textarea = $(this).css({resize:'none','overflow-y':'hidden'}),
            
                // Cache original height, for use later:
                origHeight = textarea.height(),
                
                // Need clone of textarea, hidden off screen:
                clone = (function(){
                    
                    // Properties which may effect space taken up by chracters:
                    var props = ['height','width','lineHeight','textDecoration','letterSpacing'],
                        propOb = {};
                        
                    // Create object of styles to apply:
                    $.each(props, function(i, prop){
                        propOb[prop] = textarea.css(prop);
                    });
                    
                    // Clone the actual textarea removing unique properties
                    // and insert before original textarea:
                    return textarea.clone().removeAttr('id').removeAttr('name').css({
                        position: 'absolute',
                        top: 0,
                        left: -9999
                    }).css(propOb).attr('tabIndex','-1').insertBefore(textarea);
					
                })(),
                lastScrollTop = null,
                updateSize = function() {
					
                    // Prepare the clone:
                    clone.height(0).val($(this).val()).scrollTop(10000);
					
                    // Find the height of text:
                    var scrollTop = Math.max(clone.scrollTop(), origHeight) + settings.extraSpace,
                        toChange = $(this).add(clone);
						
                    // Don't do anything if scrollTip hasen't changed:
                    if (lastScrollTop === scrollTop) { return; }
                    lastScrollTop = scrollTop;
					
                    // Check for limit:
                    if ( scrollTop >= settings.limit ) {
                        $(this).css('overflow-y','');
                        return;
                    }
                    // Fire off callback:
                    settings.onResize.call(this);
					
                    // Either animate or directly apply height:
                    settings.animate && textarea.css('display') === 'block' ?
                        toChange.stop().animate({height:scrollTop}, settings.animateDuration, settings.animateCallback)
                        : toChange.height(scrollTop);
                };
            
            // Bind namespaced handlers to appropriate events:
            textarea
                .unbind('.dynSiz')
                .bind('keyup.dynSiz', updateSize)
                .bind('keydown.dynSiz', updateSize)
                .bind('change.dynSiz', updateSize);
            
        });
        
        // Chain:
        return this;
        
    };
    
    
    
})(jQuery);
  </script>
  <script type="text/javascript" src="<?php echo base_url('assets/js/aanwijzing.js') ?>"></script>

  <?php } ?>
