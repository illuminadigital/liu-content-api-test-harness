 var typeset = '';
 var locset = '';
 var keysset = '';
 var nidparam = '';
 var queryType = '';
 var pagequery = '';
 var numquery = '';
 var tagset = '';
 var path = 'http://liu-flourish.joe.dlsdev.co.uk';


$(function() {

/*
	$('#edit-field-location-tid option').each(function(){
		var text = $(this).text();
		$(this).val(text);
	});
*/

  //http://ubuntu14.liuportal.local/api/1.0/search?
  //  keys=fantastic+turnout&
  //  type[]=blog&
  //  type[]=article&
  //  field_location_tid[]=2


  //console.log($("#edit-endpoint option:eq(1)").html());

  $('#edit-endpoint').change(function(){
  	var type = this.value;
	 if(type == 'article'){
	 	$('#views-exposed-widgets > *').show();
		 queryType = '/api/1.0/article';
		 $('#count, #pager, #edit-type, #edit-keys, #edit-field-location-tid, #edit-field-ht-activity-tags-tid').prop("disabled", true);
		 $('#edit-type-wrapper, #edit-keys-wrapper, #edit-field-location-tid-wrapper, #edit-field-ht-activity-tags-tid-wrapper, .sorting-wrapper').css('opacity','0.1');

		 $('#edit-nid').prop("disabled", false);
		 $('#edit-nid').css('opacity','1');
	 }
	 if(type == 'search'){
		 queryType = '/api/1.0/search';
		  $('#count, #pager, #edit-type, #edit-keys, #edit-field-location-tid, #edit-field-ht-activity-tags-tid').prop("disabled", false);
		 $('#edit-type-wrapper, #edit-keys-wrapper, #edit-field-location-tid-wrapper, #edit-field-ht-activity-tags-tid-wrapper, .sorting-wrapper').css('opacity','1');

		 $('#edit-nid').prop("disabled", true);
		 $('#edit-nid').css('opacity','0.1');
	 }
	 if(type == 'comment'){
		 queryType = '/api/1.0/comments';
		  $('#count, #pager, #edit-type, #edit-keys, #edit-field-location-tid, #edit-field-ht-activity-tags-tid').prop("disabled", true);
		 $('#edit-type-wrapper, #edit-keys-wrapper, #edit-field-location-tid-wrapper, #edit-field-ht-activity-tags-tid-wrapper, .sorting-wrapper').css('opacity','0.1');

		 $('#edit-nid').prop("disabled", false);
		 $('#edit-nid').css('opacity','1');
	 }
	 $('#inputquery').val(path);

  });

  $('#edit-endpoint')
        .val('search')
        .trigger('change');

  var starter = 'api/1.0/' + $('#edit-endpoint').val();
  $('#inputquery').val(path + '/' + starter);

  $('form .form-select').each(function(){
    var option_count = $('option', this).size();
   // $(this).attr('size', option_count+2);
  });

  //$('#inputquery').val(path);

  // build content-type SET
  buildKeys(path);
  buildType(path);
  buildLocation(path);
  buildNid(path);
  buildPage(path);
  buildTags(path);
  countResults(path);

  var dataString = 'query';
  $("#query-form").submit(function(e){

	// create spinner loader
	var opts = {
	  lines: 15, // The number of lines to draw
	  length: 15, // The length of each line
	  width: 5, // The line thickness
	  radius: 30, // The radius of the inner circle
	  corners: 1, // Corner roundness (0..1)
	  rotate: 0, // The rotation offset
	  direction: 1, // 1: clockwise, -1: counterclockwise
	  color: '#0b708e', // #rgb or #rrggbb or array of colors
	  speed: 1.5, // Rounds per second
	  trail: 60, // Afterglow percentage
	  shadow: false, // Whether to render a shadow
	  hwaccel: false, // Whether to use hardware acceleration
	  className: 'spinner', // The CSS class to assign to the spinner
	  zIndex: 2e9, // The z-index (defaults to 2000000000)
	  top: '50%', // Top position relative to parent
	  left: '50%' // Left position relative to parent
	};
	$('#querytext').html('');
	var target = document.getElementById('querytext');
	var spinner = new Spinner(opts).spin(target);
	//var spinner = new Spinner().spin();
	target.appendChild(spinner.el);
  	// trigger popup
  	$('#querytext').bPopup();

    var postURL = $('#inputquery').val();
     var postData = $(this).serializeArray();

     var th_posturl = 'http://th-flourish-liu.joe.dlsdev.co.uk/caller.php?path=' + postURL;

     var json = $.getJSON(th_posturl, function(response, status, jqXHR){
     	var prettyyjson = JSON.stringify(response, undefined, 2);
        $('#querytext').html(prettyyjson);
      }
    );
   e.preventDefault(); //STOP default action
  });
});

function buildPage(path){
$('#pager').change(function() {
    pagequery = '';
    var page = $(this).val();

    if(page){
		pagequery += 'page_num=' + page + '&';
	}
	buildQuery(path, typeset, locset, keysset, nidparam, pagequery, tagset, numquery);
  });
 }

function countResults(path){
$('#count').change(function() {
   numquery = '';
    var num_results = $(this).val();

    if(num_results){
		numquery += 'num_results=' + num_results + '&';
	}
	buildQuery(path, typeset, locset, keysset, nidparam, pagequery, tagset, numquery);
  });
 }



function buildKeys(path){
  $('#edit-keys').keyup(function(){
  	keysset = '';
  	keys = $(this).val();
  	var keysplus = keys.replace(/ /g, ",");
  	keysset = keysplus != '' ? 'search_keywords=' + keysplus + '&' : '';
	buildQuery(path, typeset, locset, keysset, nidparam, pagequery, tagset, numquery);
  })
}

function buildNid(path){
  $('#edit-nid').keyup(function(){

  	this.value = this.value.replace(/[^0-9\.]/g,'');
  	nid = '';
  	nid = $(this).val();
  	nidparam = nid != '' ? nid : '';
	buildQuery(path, typeset, locset, keysset, nidparam, pagequery, tagset, numquery);
  })
}

function buildType(path){
    $('#edit-type').change(function() {
    typeset = '';
    var type = $(this).val();
    if(type){
   	    typeset = 'filter_types=';
	    var typelength = type.length != null ? type.length : 0;
	    for (i = 0; i < typelength; i++) {

	      typeset += type[i] + ',';
	    }
	    typeset = typeset.substring(0, typeset.length - 1);
	    typeset +=  '&';
	}
	buildQuery(path, typeset, locset, keysset, nidparam, pagequery, tagset, numquery);

  });
}

function buildLocation(path){
    $('#edit-field-location-tid').change(function() {
    locset = '';
    var loc = $(this).val();
    if(loc){
    	locset = 'filter_locations=';
	    var loclength = loc.length !== null ? loc.length : 0;
	    for (i = 0; i < loclength; i++) {
	      locset +=  loc[i] + ',';
	    }
	    locset = locset.substring(0, locset.length - 1);
	    locset +=  '&';
	}

	buildQuery(path, typeset, locset, keysset, nidparam, pagequery, tagset, numquery);
  });
}

function buildTags(path){
    $('#edit-field-ht-activity-tags-tid').change(function() {
    tagset = '';
    var tag = $(this).val();
    if(tag){
	    tagset = 'filter_tags=';
	    var taglength = tag.length != null ? tag.length : 0;
	    for (i = 0; i < taglength; i++) {

	      tagset += tag[i] + ',';
	    }
	    tagset = tagset.substring(0, tagset.length - 1);
	    tagset +=  '&';
	}
	buildQuery(path, typeset, locset, keysset, nidparam, pagequery, tagset, numquery);

  });
}

function buildQuery(path, typeset, locset, keys, nidparam, pagequery, tagset, numquery){
	var query = ''

	if(queryType == '/api/1.0/article' || queryType == '/api/1.0/comments'){
		query = path + queryType + '/' + nidparam;
	}else{
		query = path + queryType + '?' + keys + typeset + locset + tagset + pagequery + numquery;
	}
	$('#inputquery').val(query);
}

