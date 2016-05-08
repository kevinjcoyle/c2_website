imgInfoList = [];

function getFileName(imgSrc) {  		
  var parts = new Array();
  parts = imgSrc.split('/');
  return parts[parts.length-1];
}

function destroyImage(img) {  
  if (confirm("Are you sure you want to delete the image?")) {    destroyurl = "destroy.php?src=" + getFileName(img.src);
        $.get(destroyurl, function(data) { 	  if (data == '1') {
	    removeImage(img);
	  }    		
 	}); 
  }
  return true;
}

function showDelete(surroundingDiv) {  		
  $(surroundingDiv).children(".delete").css({    		
    display: 'block'  		
  });
}

function hideDelete(surroundingDiv) {  		
  $(surroundingDiv).children(".delete").css({    		
    display: 'none'   		
  });
}

function addNewImage(src) {
  var img = new Image();
  var delImg = new Image();

  img.src = src;
  
  delImg.src = "./images/delete.png";

  $(delImg).css({
    display: 'none',
    position:'absolute',
    left:    '12px',
    top:     '12px',
    zindex:  '10'
  });
    
  $(delImg).addClass("delete");
    
  $(delImg).click(function(){
    destroyImage(img);
  });
    
  dv = document.createElement('div');
   
  $(img) 
  // if there was an error loading the image, react accordingly
  .error(function () {
	  alert("Error Loading File: " + $(this).src + ".  Try Refreshing." );
    // notify the user that the image could not be loaded
  });
  
  $(dv).append($(img));
  $(dv).append(delImg);
  $(dv).css({
  	position:'relative',
    margin:'10px',
    border:'0px',
    padding:'0px'
  });
    
  $(dv).mouseover(function() {
    showDelete(this);
  });
    
  $(dv).mouseout(function() {
    hideDelete(this);
  });
  
  $('.simpleGalleryManager').prepend($(dv));		
}

function removeImage(img) {  		
  $(img).parent().remove();
}


function stopUpload(success){
	// Do what you want to happen when upload is complete    return true;   
}
    
// when the DOM is ready
$(document).ready(function () {  
  $.getScript("readdir.php", function(){    loadImages();  		
  });
	
  // -- Setup the container --
  $('.simpleGalleryManager').attr('style','position:absolute;width:600px;height:600px;'); 
  // Add Controls
  $('.simpleGalleryManager').append(
    '<img id="addNewImage" src="./images/add.png" style="position:absolute;top:5px;right:5px;z-index:10"/>');
  // Add the dialog box
  $('.simpleGalleryManager').append(
	'<div id="dialog-form" title="Add New Image">' +
	  '<p class="validateTips">All form fields are required.</p>' +
	  '<p id="result"></p>' +
	  '<form id="fileForm" action="upload.php" method="post" enctype="multipart/form-data" target="upload_target" onsubmit="startUpload();">' +
	    '<fieldset>' +
		  '<label for="imageFile">Image File</label>' +
		  '<input type="file" name="imageFile" id="imageFile" class="text ui-widget-content ui-corner-all" />' +
		'</fieldset>' +
	  '</form>' +
	  '<iframe id="upload_target" name="upload_target" src="#" style="width:0;height:0;border:0px solid #fff;"></iframe>' +
    '</div>');
  
  $( "#dialog:ui-dialog" ).dialog( "destroy" );
   var imageFile = $( "#imageFile" ),  		
   allFields = $( [] ).add( imageFile ),  		
   tips = $( ".validateTips" );
  
  function updateTips( t ) {    tips  	  .text( t )  	  .addClass( "ui-state-highlight" );			
	setTimeout(function() {  	  tips.removeClass( "ui-state-highlight", 1500 );	}, 500 );  		
  }
  
  function checkLength( o, n, min, max ) {    		
    if ( o.val().length > max || o.val().length < min ) {
      o.addClass( "ui-state-error" );      		
      updateTips( "Length of " + n + " must be between " +
	    min + " and " + max + "." );  	  return false;    		
  	} else {  	  return true;	}  		
  }
  		
  	
  $( "#dialog-form" ).dialog({    		
    autoOpen: false,	height: 200,	width: 350,	modal: true,	buttons: {  	  "Add Image": function() {
	    var bValid = true;
        allFields.removeClass( "ui-state-error" );

	    bValid = bValid && checkLength( $(imageFile), "image filename", 4, 800 );
////bValid = bValid && checkRegexp( $(imageFile), /^([0-9a-zA-Z_. ])+$/, "Image file names may consist of a-z, 0-9, underscores, periods and spaces." );
					
		if ( bValid ) {
  		  $("#fileForm").submit();
  		  var fileName = $(imageFile).val();
  		  fileName = fileName.substr(fileName.lastIndexOf('\\')+1);
  		  addNewImage('./images/SimpleGallery/' + fileName);
  		  $( this ).dialog( "close" );
		}
	  },
	  Cancel: function() {
	    $( this ).dialog( "close" );
      }
	},
	close: function() {
		allFields.val( "" ).removeClass( "ui-state-error" );
	}
  });

  $( "#addNewImage" )
	.click(function() {
	  $( "#dialog-form" ).dialog( "open" );
  });
});


function loadImages() {
  jQuery.each(imgInfoList, function(index, value) {
	addNewImage(imgInfoList[index].src);
  });
}
  