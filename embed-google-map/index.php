<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Expires" content="0" />
<title>• Embed Google Map - Add Google Maps to your Website!</title>
<meta name="description" content="Get your own Google Map with two clicks ✓ Free Map-Generator ✓ Type in your Title & Address, copy the HTML-Code  ✓ Paste the Code to your Website. Finished!">

<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="jquery-mobile.js"></script>
<script src="jqueryui.js"></script>

<script src="script.js?v2" type="text/javascript" charset="utf-8"></script>


<link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="style.css">


</head>
<body>

 
  
<div id="wrap">

<div class="leftr">
<img src="https://cdn.vox-cdn.com/thumbor/x6e1SCOtGJc6wG4Xk9tkVJZqyws=/0x0:1280x800/1400x933/filters:focal(538x298:742x502):no_upscale()/cdn.vox-cdn.com/uploads/chorus_image/image/66260585/googlemaps.5.png" class="logo"> <div style="position:absolute;left: 71px;top: 48px;font-weight: 500;">Embed Google Map (No API needed)</div>
<div class="light">
<h2>Enter your Address:</h2>
<input type="text" name="s" id="s"  value="2880 Broadway, New York" placeholder="Enter Adress"  data-role="none">

</div>
  



<div class="flipout">
<h3>Satellite  </h3>

	<div id="flipswitchWrapper">
				<select id="ic" name="yes" data-role="flipswitch" style="display:none;">
					<option name="yes" value="" checked="checked">OFF</option>
					<option name="yes" value="k" >ON</option>
				</select>
	</div>
</div>

<input style="display:none;" type="text" name="z" id="z" data-role="none"  value="" placeholder="">
<input style="display:none;"  type="text" name="city" id="city" data-role="none"  value="" placeholder="">


<div class="other">
		<h3 class="mapz">Map Zoom </h3>
		<button class="btns" data-role="none">-</button>
		<input data-role="none" id="zoom" type="range" min="1" max="20" step="2" value="13" onchange="console.log(this.value)" />
		<button class="btn" data-role="none">+</button>
		<img src="" alt="" class="" id="img">
</div>

<div class="clear"></div>



<div class="container d">
    <div class="right">
		<div class="input-group" style="
    margin-top: 11px;
">
				<input type="text" name="width" class="form-control" id="width"  value="600"   placeholder="" class="numeric"  style="height: 10px;font-size: 14px;padding-top: 10px;line-height: 0;" data-role="none">
				<span class="input-group-addon" data-role="none" style="height: 12px;font-size: 13px;border-radius: 0px 3px 3px 0px;margin-left: -1px;">px</span>
		</div>
    </div>
    <div class="left">
	Width: <div id="slider" data-role="none"></div>
    </div>
</div>




<div class="container e">
		<div class="right">
			<div class="input-group">
				
				<input type="text" name="ac" class="form-control" id="ac"  value="500"   placeholder="" class="numeric" data-role="none">
				<span class="input-group-addon" data-role="none">px</span>
			</div>
		</div>
		    <div class="left">
			Height:		<div id="slider2" data-role="none" style="float:left;width:100%;"></div> 
		</div>
</div>


<button id="h" data-bb="alert_callback" class=" ui-btn ui-shadow ui-corner-all">Get HTML-Code</button>

	<div class="clear"></div>

</div>




<div class="mapout">
	<div class="map-holder">
		<div id="le"></div>
	</div>
</div>


<div class="clear"></div>

</div>

<div class="overlay"></div>
	<div class="modal">

	Copy &amp; Paste this Code to your Website:<br>
	
	<textarea id="ef" placeholder="Please click on &raquo;Generate Code&laquo; to get your Maps-Code." readonly="readonly" onmouseup="return false;" onclick="this.select()"  data-role="none" ></textarea>

	</div>



<script type="text/javascript">
$("#zoom").on('change',function () {
 var value = $(this).val();
    $("#img").width(value);
    $("#img").height(value);
   // console.log(value);
});
 $('.btn').click(function() {
               //if value < max
              $("#zoom").val(parseInt($("#zoom").val())+2);  
               $("#zoom").trigger('change');
            });
 $('.btns').click(function() {
               //if value < max
              $("#zoom").val(parseInt($("#zoom").val())-2);  
               $("#zoom").trigger('change');
            });
$(function() {
    $("#slider").slider({
    min: 1, // min value
    max: 1080, // max value
    step: 1,
    value: 600, // default value of slider
    slide: function(event, ui) {
        $("#width").val(ui.value).trigger('keyup');
    }
    })
	;
});
$(function() {
    $("#slider2").slider({
    min: 1, // min value
    max: 1080, // max value
    step: 1,
    value: 500, // default value of slider
    slide: function(event, ui) {
        $("#ac").val(ui.value).trigger('keyup');
    }
    })
	;
});
    $('#h').click(function() {
  $('.modal').css({
    'visibility': 'visible',
    'opacity': '1',
  });
  $('.overlay').css({
    'visibility': 'visible',
    'opacity': '1',
  });
});

$(document).mouseup(function(e) {

  var container = $(".modal");

  if (!container.is(e.target) 
    && container.has(e.target).length === 0) 
  {
    $('.modal').css({
      'visibility': 'hidden',
      'opacity': '0',
    });
    $('.overlay').css({
      'visibility': 'hidden',
      'opacity': '0',
    });
  }
});
</script>

<script type="text/template" id="te">&lt;iframe width="{{3}}" height="{{4}}" src="https://maps.google.com/maps?q={{1}}&t={{2}}&z={{0}}&ie=UTF8&iwloc=B&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"&gt;&lt;/iframe&gt;</script>

</body>
</html>
