@extends('layouts.master')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<div class="well display-inline" style="width:820px;">
        <h3 class="text-danger"><strong>{{ucwords($sirket->com_name)}}</strong>, Company Profile</h3>
      <div class="right">
      <div class="btn-group">
              <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle">
                <i class="fa fa-gear fa-lg"></i>  <span class="caret"></span>
              </button>
              <ul class="dropdown-menu">
                <li><a href="#">Edit Company Name</a></li>
                <li><a href="#">Edit Company</a></li>
                <li><a href="#">Edit Authortiy</a></li>
                <li class="divider"></li>
                <li><a href="#"> <span class="text-primary">Update Email & Password</span></a></li>
                <li class="divider"></li>
                <li><a href="#"> <span class="text-danger">Delete Company</span></a></li>
              </ul>
          </div>
      </div>
			
      <div class="col-sm-4">
				<a href="#" data-toggle="modal" data-target="#myModal">
        		<img src="{{$sirket->logo}}" id="target-5" alt="logo" style="max-width:235px;" class="pfimg img-rounded" ></a><hr>
			</div>
   			<div class="col-sm-6">
   				<div class="col-sm-5">
   					Company Name:
   				</div>
   				<div class="col-sm-7">
   					<strong onclick="toggleId()">{{ucwords($sirket->com_name)}}</strong>
            <div ID="id" style="display:none;">
              <form action="stdNewInfo.php?komut=upId&id=" method="post" class="form">
                  <div class="form-group">
                    <input type="text" class="form-control" name="epokaID" id="InputName" value="{{ucwords($sirket->com_name)}}">
                  </div>
              </form>
            </div>
   				</div>
   				<div class="col-sm-5">
   					Company NIPT:
   				</div>
   				<div class="col-sm-7">
   					<strong><code>{{ucwords($sirket->com_nipt)}}</code></strong>
   				</div>
   				<div class="col-sm-5">
   					Company Sector:
   				</div>
   				<div class="col-sm-7">
   					<strong><span>{{ucwords($sirket->com_sector)}}</span></strong>
   				</div>
   				<div class="col-sm-5">
   					Nr of Employee:
   				</div>
   				<div class="col-sm-7">
   					<strong><span>{{ucwords($sirket->nr_emp)}}</span></strong>
   				</div>
   				<div class="col-sm-5">
   					Company Address:
   				</div>
   				<div class="col-sm-7">
   					<strong><span>{{ucwords($sirket->com_add)}}</span></strong>
   				</div>
   				<div class="col-sm-5">
   					Company Zip Code:
   				</div>
   				<div class="col-sm-7">
   					<strong><span>{{ucwords($sirket->zip_code)}}</span></strong>
   				</div>
   				<div class="col-sm-5">
   					Country:
   				</div>
   				<div class="col-sm-7">
   					<strong><span>{{ucwords($sirket->country)}}</span></strong>
   				</div>
   				<div class="col-sm-5">
   					City:
   				</div>
   				<div class="col-sm-7">
   					<strong><span>{{ucwords($sirket->city)}}</span></strong>
   				</div>
   				<div class="col-sm-5">
   					Web Address:
   				</div>
   				<div class="col-sm-7">
   					<strong><span>{{ucwords($sirket->web_add)}}</span></strong>
   				</div>
				        
   			</div>
   			<div class="col-sm-2">
   				<small>Creation Date:<br>{{$sirket->created_at}} </small></strong><hr>
   			</div>
   			<div class="col-sm-2">
   				<small>Last Updated Date:<br>{{$sirket->updated_at}} </small></strong><hr>
   			</div>
        <div class="col-sm-2">
          <a href="/all_ins/create-job/{{$sirket->id}}" class="btn btn-block btn-success">Create Job</a>
        </div>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<div class="well display-inline" style="width:820px;">
				<h3 class="text-danger"><strong>{{ucwords($sirket->com_name)}}</strong>, Job Lists</h3>

        @if($adsInfo->count())
          <table class="table table-hover">
              <thead>
                    <tr><th>Job Name</th>
                        <th>Job Place</th>
                        <th>Publish Date</th>
                        <th>Languages</th>
                        <th>Creation Date</th>
                    </tr>
                 </thead>
                 @foreach($adsInfo as $r)
                 <tbody>   
                <td><a style="text-decoration: none;" href="all_ins/profile_ins/{{$r->id}}">{{$r->ads_name}}</a></td>
                <td><span class="text-danger">{{$r->work_place}}</span></td>
                <td><span class="text-warning">{{$r->pub_time}}</span></td>
                <td><span class="label label-info">{{$r->languages}} </span></td>
                <td><span>{{$r->created_at}} </span></td>
              </tbody>
              @endforeach
          </table>
        @endif
        {{$adsInfo->links()}}
			</div>
		</div>
	</div>
</div>


<div class="modal fade in slacker-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="false">
  <div class="modal-dialog modal-slacker">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h5 class="modal-title" id="myLargeModalLabel">Change Company Logo</h5>
      </div>
      <div class="modal-body">
        <div class="col-sm-8">
        
        {{ Form::open(array('url' => array('logo_up',$sirket->id),'class'=>'form-horizontal', 'enctype' => 'multipart/form-data')) }}
             <div class="fileinput fileinput-new" data-provides="fileinput">
					  <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 540px; height: 300px;">
					  	<span class="text-danger"><strong>Warning!</strong> Your photographs will be sent to the company you choose properly for (max.2 mb)</span>
					  <img src="http://institutional.njepuneere.com/{{$sirket->logo}}" id="target-5" class="pfimg"></a>
					  </div>
					  
					  <div>
					    <span class="btn btn-success btn-sm btn-file"><span class="fileinput-new">Select Company Logo</span>
					    <span class="fileinput-exists">Change</span>
					    {{ Form::file('logo', '') }}
					    </span>
					    <a href="#" class="btn btn-danger btn-sm fileinput-exists" data-dismiss="fileinput">Remove</a>
					    <button type="submit" class="btn btn-primary btn-sm fileinput-exists">Upload</button>
					  </div>
				</div>

        </div>
        {{ Form::close() }}
               
      </div>
      
      	
      
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        <img src="{{$sirket->logo}}" id="target-5" class="pfimg"></a>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  function toggleId() {
          // Get the DOM reference
          var contentId = document.getElementById("id");
          // Toggle 
          contentId.style.display == "block" ? contentId.style.display = "none" : 
        contentId.style.display = "block"; 
        }
</script>

<script type="text/javascript">
  /* DO NOT REMOVE : GLOBAL FUNCTIONS!
   *
   * pageSetUp(); WILL CALL THE FOLLOWING FUNCTIONS
   *
   * // activate tooltips
   * $("[rel=tooltip]").tooltip();
   *
   * // activate popovers
   * $("[rel=popover]").popover();
   *
   * // activate popovers with hover states
   * $("[rel=popover-hover]").popover({ trigger: "hover" });
   *
   * // activate inline charts
   * runAllCharts();
   *
   * // setup widgets
   * setup_widgets_desktop();
   *
   * // run form elements
   * runAllForms();
   *
   ********************************
   *
   * pageSetUp() is needed whenever you load a page.
   * It initializes and checks for all basic elements of the page
   * and makes rendering easier.
   *
   */

  pageSetUp();

  /*
   * ALL PAGE RELATED SCRIPTS CAN GO BELOW HERE
   * eg alert("my home function");
   *
   * var pagefunction = function() {
   *   ...
   * }
   * loadScript("js/plugin/_PLUGIN_NAME_.js", pagefunction);
   *
   * TO LOAD A SCRIPT:
   * var pagefunction = function (){
   *  loadScript(".../plugin.js", run_after_loaded);
   * }
   *
   * OR
   *
   * loadScript(".../plugin.js", run_after_loaded);
   */

  var pagefunction = function() {
    //console.log("load and ready");


    // api_handler
    
    var api_handler = function() {

      // The variable jcrop_api will hold a reference to the
      // Jcrop API once Jcrop is instantiated.
      var jcrop_api;


      // The function is pretty simple
      var initJcrop = function(){
        // Hide any interface elements that require Jcrop
        // (This is for the local user interface portion.)
        $('.requiresjcrop').hide();

        // Invoke Jcrop in typical fashion
        $('#target-5').Jcrop({
          onRelease : releaseCheck
        }, function() {

          jcrop_api = this;
          jcrop_api.animateTo([100, 100, 400, 300]);

          // Setup and dipslay the interface for "enabled"
          $('#can_click,#can_move,#can_size').attr('checked', 'checked');
          $('#ar_lock,#size_lock,#bg_swap').attr('checked', false);
          $('.requiresjcrop').show();

        });

      };

      // In this example, since Jcrop may be attached or detached
      // at the whim of the user, I've wrapped the call into a function 
      initJcrop();

      // Use the API to find cropping dimensions
      // Then generate a random selection
      // This function is used by setSelect and animateTo buttons
      // Mainly for demonstration purposes
      function getRandom() {
        var dim = jcrop_api.getBounds();
        return [Math.round(Math.random() * dim[0]), Math.round(Math.random() * dim[1]), Math.round(Math.random() * dim[0]), Math.round(Math.random() * dim[1])];
      };

      // This function is bound to the onRelease handler...
      // In certain circumstances (such as if you set minSize
      // and aspectRatio together), you can inadvertently lose
      // the selection. This callback re-enables creating selections
      // in such a case. Although the need to do this is based on a
      // buggy behavior, it's recommended that you in some way trap
      // the onRelease callback if you use allowSelect: false
      function releaseCheck() {
        jcrop_api.setOptions({
          allowSelect : true
        });
        $('#can_click').attr('checked', false);
      };

      // Attach interface buttons
      // This may appear to be a lot of code but it's simple stuff
      $('#setSelect').click(function(e) {
        // Sets a random selection
        jcrop_api.setSelect(getRandom());
      });
      $('#animateTo').click(function(e) {
        // Animates to a random selection
        jcrop_api.animateTo(getRandom());
      });
      $('#release').click(function(e) {
        // Release method clears the selection
        jcrop_api.release();
      });
      $('#disable').click(function(e) {
        // Disable Jcrop instance
        jcrop_api.disable();
        // Update the interface to reflect disabled state
        $('#enable').show();
        $('.requiresjcrop').hide();
      });
      $('#enable').click(function(e) {
        // Re-enable Jcrop instance
        jcrop_api.enable();
        // Update the interface to reflect enabled state
        $('#enable').hide();
        $('.requiresjcrop').show();
      });
      $('#rehook').click(function(e) {
        // This button is visible when Jcrop has been destroyed
        // It performs the re-attachment and updates the UI
        $('#rehook,#enable').hide();
        initJcrop();
        $('#unhook,.requiresjcrop').show();
        return false;
      });
      $('#unhook').click(function(e) {
        // Destroy Jcrop widget, restore original state
        jcrop_api.destroy();
        // Update the interface to reflect un-attached state
        $('#unhook,#enable,.requiresjcrop').hide();
        $('#rehook').show();
        return false;
      });

      // Hook up the three image-swapping buttons
      $('#img1').click(function(e) {
        $(this).addClass('active').closest('.btn-group').find('button.active').not(this).removeClass('active');

        jcrop_api.setImage('img/superbox/superbox-full-7.jpg');
        jcrop_api.setOptions({
          bgOpacity : .6
        });
        return false;
      });
      $('#img2').click(function(e) {
        $(this).addClass('active').closest('.btn-group').find('button.active').not(this).removeClass('active');

        jcrop_api.setImage('img/superbox/superbox-full-24.jpg');
        jcrop_api.setOptions({
          bgOpacity : .6
        });
        return false;
      });
      $('#img3').click(function(e) {
        $(this).addClass('active').closest('.btn-group').find('button.active').not(this).removeClass('active');

        jcrop_api.setImage('img/superbox/superbox-full-20.jpg', function() {
          this.setOptions({
            bgOpacity : 1,
            outerImage : 'img/superbox/superbox-full-20-bw.jpg'
          });
          this.animateTo(getRandom());
        });
        return false;
      });

      // The checkboxes simply set options based on it's checked value
      // Options are changed by passing a new options object

      // Also, to prevent strange behavior, they are initially checked
      // This matches the default initial state of Jcrop

      $('#can_click').change(function(e) {
        jcrop_api.setOptions({
          allowSelect : !!this.checked
        });
        jcrop_api.focus();
      });
      $('#can_move').change(function(e) {
        jcrop_api.setOptions({
          allowMove : !!this.checked
        });
        jcrop_api.focus();
      });
      $('#can_size').change(function(e) {
        jcrop_api.setOptions({
          allowResize : !!this.checked
        });
        jcrop_api.focus();
      });
      $('#ar_lock').change(function(e) {
        jcrop_api.setOptions(this.checked ? {
          aspectRatio : 4 / 3
        } : {
          aspectRatio : 0
        });
        jcrop_api.focus();
      });
      $('#size_lock').change(function(e) {
        jcrop_api.setOptions(this.checked ? {
          minSize : [80, 80],
          maxSize : [350, 350]
        } : {
          minSize : [0, 0],
          maxSize : [0, 0]
        });
        jcrop_api.focus();
      });

    }
    
    // end api_handler

    // default
    
    var default_handler = function(){
      $('#target').Jcrop();
    }

    // basic handler

    var basic_handler = function() {

      var jcrop_api;

      $('#target-2').Jcrop({
        onChange : showCoords,
        onSelect : showCoords,
        onRelease : clearCoords
      }, function() {
        jcrop_api = this;
      });

      $('#coords').on('change', 'input', function(e) {
        var x1 = $('#x1').val(), x2 = $('#x2').val(), y1 = $('#y1').val(), y2 = $('#y2').val();
        jcrop_api.setSelect([x1, y1, x2, y2]);
      });

      // Simple event handler, called from onChange and onSelect
      // event handlers, as per the Jcrop invocation above
      function showCoords(c) {
        $('#x1').val(c.x);
        $('#y1').val(c.y);
        $('#x2').val(c.x2);
        $('#y2').val(c.y2);
        $('#w').val(c.w);
        $('#h').val(c.h);
      };

      function clearCoords() {
        $('#coords input').val('');
      };

    };

    // end basic_handler

    // aspect ratio

    var aspect_ratio = function() {

      // Create variables (in this scope) to hold the API and image size
      var jcrop_api, boundx, boundy,

      // Grab some information about the preview pane
      $preview = $('#preview-pane'), $pcnt = $('#preview-pane .preview-container'), $pimg = $('#preview-pane .preview-container img'), xsize = $pcnt.width(), ysize = $pcnt.height();

      console.log('init', [xsize, ysize]);
      $('#target-3').Jcrop({
        onChange : updatePreview,
        onSelect : updatePreview,
        aspectRatio : xsize / ysize
      }, function() {
        // Use the API to get the real image size
        var bounds = this.getBounds();
        boundx = bounds[0];
        boundy = bounds[1];
        // Store the API in the jcrop_api variable
        jcrop_api = this;

        // Move the preview into the jcrop container for css positioning
        $preview.appendTo(jcrop_api.ui.holder);
      });

      function updatePreview(c) {
        if (parseInt(c.w) > 0) {
          var rx = xsize / c.w;
          var ry = ysize / c.h;

          $pimg.css({
            width : Math.round(rx * boundx) + 'px',
            height : Math.round(ry * boundy) + 'px',
            marginLeft : '-' + Math.round(rx * c.x) + 'px',
            marginTop : '-' + Math.round(ry * c.y) + 'px'
          });
        }
      };

    }
    // end aspect_ratio

    // animation_handler

    var animation_handler = function() {

      var jcrop_api;

      $('#target-4').Jcrop({
        bgFade : true,
        bgOpacity : .2,
        setSelect : [60, 70, 540, 330]
      }, function() {
        jcrop_api = this;
      });

      $('#fadetog').change(function() {
        jcrop_api.setOptions({
          bgFade : this.checked
        });
      }).attr('checked', 'checked');

      $('#shadetog').change(function() {
        if (this.checked)
          $('#shadetxt').slideDown();
        else
          $('#shadetxt').slideUp();
        jcrop_api.setOptions({
          shade : this.checked
        });
      }).attr('checked', false);

      // Define page sections
      var sections = {
        bgc_buttons : 'Change bgColor',
        bgo_buttons : 'Change bgOpacity',
        anim_buttons : 'Animate Selection'
      };
      // Define animation buttons
      var ac = {
        anim1 : [217, 122, 382, 284],
        anim2 : [20, 20, 580, 380],
        anim3 : [24, 24, 176, 376],
        anim4 : [347, 165, 550, 355],
        anim5 : [136, 55, 472, 183]
      };
      // Define bgOpacity buttons
      var bgo = {
        Low : .2,
        Mid : .5,
        High : .8,
        Full : 1
      };
      // Define bgColor buttons
      var bgc = {
        R : '#900',
        B : '#4BB6F0',
        Y : '#F0B207',
        G : '#46B81C',
        W : 'white',
        K : 'black'
      };
      // Create fieldset targets for buttons
      for (i in sections)insertSection(i, sections[i]);

      function create_btn(c) {
        var $o = $('<button />').addClass('btn btn-default btn-small');
        if (c)
          $o.append(c);
        return $o;
      }

      var a_count = 1;
      // Create animation buttons
      for (i in ac) {
        $('#anim_buttons .btn-group').append(create_btn(a_count++).click(animHandler(ac[i])), ' ');
      }

      $('#anim_buttons .btn-group').append(create_btn('Bye!').click(function(e) {
        $(e.target).addClass('active');
        jcrop_api.animateTo([300, 200, 300, 200], function() {
          this.release();
          $(e.target).closest('.btn-group').find('.active').removeClass('active');
        });
        return false;
      }));

      // Create bgOpacity buttons
      for (i in bgo) {
        $('#bgo_buttons .btn-group').append(create_btn(i).click(setoptHandler('bgOpacity', bgo[i])), ' ');
      }
      // Create bgColor buttons
      for (i in bgc) {
        $('#bgc_buttons .btn-group').append(create_btn(i).css({
          background : bgc[i],
          color : ((i == 'K') || (i == 'R')) ? 'white' : 'black'
        }).click(setoptHandler('bgColor', bgc[i])), ' ');
      }
      // Function to insert named sections into interface
      function insertSection(k, v) {
        $('#interface').prepend($('<fieldset></fieldset>').attr('id', k).append($('<legend></legend>').append(v), '<div class="btn-toolbar"><div class="btn-group"></div></div>'));
      };
      // Handler for option-setting buttons
      function setoptHandler(k, v) {
        return function(e) {
          $(e.target).closest('.btn-group').find('.active').removeClass('active');
          $(e.target).addClass('active');
          var opt = { };
          opt[k] = v;
          jcrop_api.setOptions(opt);
          return false;
        };
      };
      // Handler for animation buttons
      function animHandler(v) {
        return function(e) {
          $(e.target).addClass('active');
          jcrop_api.animateTo(v, function() {
            $(e.target).closest('.btn-group').find('.active').removeClass('active');
          });
          return false;
        };
      };

      $('#bgo_buttons .btn:first,#bgc_buttons .btn:last').addClass('active');
      $('#interface').show();

    }
    // end animation_handler
    
    // styling_handler
    
    var styling_handler = function () {
      
      var api;

      $('#target-6').Jcrop({
        // start off with jcrop-light class
        bgOpacity : 0.5,
        bgColor : 'white',
        addClass : 'jcrop-light'
      }, function() {
        api = this;
        api.setSelect([130, 65, 130 + 350, 65 + 285]);
        api.setOptions({
          bgFade : true
        });
        api.ui.selection.addClass('jcrop-selection');
      });

      $('#buttonbar').on('click', 'button', function(e) {
        var $t = $(this), $g = $t.closest('.btn-group');
        $g.find('button.active').removeClass('active');
        $t.addClass('active');
        $g.find('[data-setclass]').each(function() {
          var $th = $(this), c = $th.data('setclass'), a = $th.hasClass('active');
          if (a) {
            api.ui.holder.addClass(c);
            switch(c) {

              case 'jcrop-light':
                api.setOptions({
                  bgColor : 'white',
                  bgOpacity : 0.5
                });
                break;

              case 'jcrop-dark':
                api.setOptions({
                  bgColor : 'black',
                  bgOpacity : 0.4
                });
                break;

              case 'jcrop-normal':
                api.setOptions({
                  bgColor : $.Jcrop.defaults.bgColor,
                  bgOpacity : $.Jcrop.defaults.bgOpacity
                });
                break;
            }
          } else
            api.ui.holder.removeClass(c);
        });
      });
      
    }
    
    // end styling_handler
    
    //run functions
    
    api_handler();
    default_handler();
    basic_handler();
    aspect_ratio();
    animation_handler();
    styling_handler();
    
  };

  loadScript("/js/plugin/jcrop/jquery.Jcrop.min.js", function() {
    loadScript("/js/plugin/jcrop/jquery.color.min.js", pagefunction);
  });

</script>
@stop