imgList = [];
imgInfoList = [];
var currentImage = 0;
var proposedImage = 0;

// when the DOM is ready
$(document).ready(function () { 
  // Load image filenames etc from readdir.php on completion call createImageList
  $.getScript("readdir.php", function(){
	  createImageList();
	  setupGallery();
	  setupImageFinder();
  });  
});

function trace(s) {
	  try { console.log(s) } catch (e) { alert(s) }
	};

function addNewHorizImage(indexDiv,index,src) {
	 var img;
  
  // Create a new image
  img = new Image(); 

 // $(img)
  
  //for (var i=0; i<500000; i++) {
	  //trace("test");
//  }
  
  // Set the source, error handling for the image and some css to center it
  $(img) 
    .attr('src',src)
    // if there was an error loading the image, react accordingly
    .error(function () {
      alert("Error Loading File: " + $(this).src + ".  Try Refreshing." );
      // notify the user that the image could not be loaded
    })
    .css({
      display:'block',
      marginTop:'auto',
      marginBottom:'auto'
    })
    .show()
    .load(function() {
    	// Resize the image to 115 pixel width
    	img = resizeImage(img, 80, null);
    	// Create a new div element
    	  dv = document.createElement('div');
    	  	
    	  // Add the image to the div and add some css and click handling
    	  $(dv)
    	    .append($(img))
    	    .css({
			  float:'left',
    	  	  position:'relative',
    	      marginRight:'2px',
    	      border:'0px',
    	      padding:'0px',
    	      height: '100%'
    	    })
    		.attr("index", index)
    		.click(function() {
    	    	showImage($(this).attr("index"));
    		});
    	  
    	  // Add the div to the beginning of the simpleGalleryIndex div
    	  $(indexDiv).append($(dv));
    });
	  
}

function addNewImage(indexDiv, index, src) {
  var img;
  
  // Create a new image
  img = new Image(); 

 // $(img)
  
  //for (var i=0; i<500000; i++) {
	  //trace("test");
//  }
  
  // Set the source, error handling for the image and some css to center it
  $(img) 
    .attr('src',src)
    // if there was an error loading the image, react accordingly
    .error(function () {
      alert("Error Loading File: " + $(this).src + ".  Try Refreshing." );
      // notify the user that the image could not be loaded
    })
    .css({
      display:'block',
      marginLeft:'auto',
      marginRight:'auto'
    })
    .show()
    .load(function() {
    	// Resize the image to 115 pixel width
    	img = resizeImage(img, null, 150);
    	// Create a new div element
    	  dv = document.createElement('div');
    	  	
    	  // Add the image to the div and add some css and click handling
    	  $(dv)
    	    .append($(img))
    	    .css({
    	  	  position:'relative',
    	      marginBottom:'2px',
    	      border:'0px',
    	      padding:'0px',
    	      width: '100%'
    	    })
    		.attr("index", index)
    		.click(function() {
    	    	showImage($(this).attr("index"));
    		});
    	  
    	  // Add the div to the beginning of the simpleGalleryIndex div
    	  $(indexDiv).append($(dv));
    });
	  
  	
}

function createImageList(){
  // For each image filename in the folder
  jQuery.each(imgInfoList, function(index, value) {
    
	// Create a new image
    var img = new Image();
    
    // Add the image to the list
    imgList.push(img);

    // Wrap our new image in jQuery, then:
    $(img)
      // Once the image has loaded, execute this code
      .load(function () {
        // Set the image hidden by default
        $(this)
          .hide()
        
          // Add centering css
          .css({
            display:'block',
            marginLeft:'auto',
            marginRight:'auto'
          });
      })
   
      // If there was an error loading the image, react accordingly
      .error(function () {
        alert("Loading Image Failed");
        // Notify the user that the image could not be loaded
      })
    
      // *finally*, set the src attribute of the new image to our image
      .attr('src', imgInfoList[index].src)
      .attr("index",index);    
  });
}

function setupGallery() {
  // -- Set up the picture viewing container --
  $('.simpleGallery').css({
	    width:'100%',
	    height:'100%',
	    position: 'relative',
	    textAlign: 'center'
	  });

  // Add the image div
  $('.simpleGallery').append('<div id="outerSimpleGalleryImageDiv" style="display: inline-block;   margin-left: auto;   margin-right: auto;">' + 
  '<div class="dropshadow2">' +
  '<div class="innerbox">' +
  '<div id="simpleGalleryImageDiv"><img src="' + img1.src + '"/></div>' +
  '</div>' +
  '</div>' + '</div>');
}
  
function setupImageFinder() {
  // -- Set up the picture index container 
  indexDiv = document.createElement('div');
  
  $(indexDiv)
    .attr("id", "scrollableIndex")
    .css({
	  width: '150px',
	  height: '150px',
	  overflow: 'hidden',
	  position: 'relative'
    })
    .mousewheel(function(event, delta) {
  	  $("#scrollableIndex").animate({scrollTop: $("#scrollableIndex").scrollTop() + delta * -25}, 1, "linear", function() {});
    });
  
  jQuery.each(imgInfoList, function(index, value) {
	  addNewImage(indexDiv, index, imgInfoList[index].src);
  });
  
  $('.simpleGalleryIndex')
    .css({
	  width: '150px',
	  height: '200px',
	  overflow: 'hidden',
	  position: 'relative',
	  margin: 'auto'
    })
    .append("<img style='display:block;margin-left:auto;margin-right:auto;' id='scrollUp' src='./images/scrollup.png'>")
    .append($(indexDiv))
    .append("<img style='display:block;margin-left:auto;margin-right:auto;' id='scrollDown' src='./images/scrolldown.png'>");
    
  $("#scrollUp").hover(function() {
    // Calculate a rate
	ratio = $("#scrollableIndex").scrollTop() / document.getElementById("scrollableIndex").scrollHeight;
	$("#scrollableIndex").animate({scrollTop: 0}, 5000 * ratio, "linear", function() {});
  }, 
    function() {
			$("#scrollableIndex").stop(true,false);
	}
  );
  
  $("#scrollDown").hover(function() {	  
    // Calculate a rate
    ratio = (document.getElementById("scrollableIndex").scrollHeight - $("#scrollableIndex").scrollTop()) / document.getElementById("scrollableIndex").scrollHeight;
	
	$("#scrollableIndex").animate({scrollTop: document.getElementById("scrollableIndex").scrollHeight}, 5000 * ratio, "linear", function() {});
  },
    function() {
		$("#scrollableIndex").stop(true,false);
	}
  ); 	
}

function setupImageFinderHorizontal() {
  // -- Set up the picture index container 
  indexDiv = document.createElement('div');
  
  $(indexDiv)
    .attr("id", "scrollableIndex")
    .css({
	  width: '450px',
	  height: '150px',
	  overflow: 'hidden',
	  position: 'relative'
    })
    .mousewheel(function(event, delta) {
  	  $("#scrollableIndex").animate({scrollTop: $("#scrollableIndex").scrollTop() + delta * -25}, 1, "linear", function() {});
    });
  
  jQuery.each(imgInfoList, function(index, value) {
	  addNewHorizImage(indexDiv, index, imgInfoList[index].src);
  });
  
  $('.simpleGalleryIndex')
    .css({
	  width: '450px',
	  height: '150px',
	  overflow: 'hidden',
	  position: 'relative',
	  margin: 'auto'
    })
    .append("<img style='display:block;margin-left:auto;margin-right:auto;' id='scrollUp' src='./images/scrollup.png'>")
    .append($(indexDiv))
    .append("<img style='display:block;margin-left:auto;margin-right:auto;' id='scrollDown' src='./images/scrolldown.png'>");
    
  $("#scrollUp").hover(function() {
    // Calculate a rate
	ratio = $("#scrollableIndex").scrollTop() / document.getElementById("scrollableIndex").scrollHeight;
	$("#scrollableIndex").animate({scrollTop: 0}, 5000 * ratio, "linear", function() {});
  }, 
    function() {
			$("#scrollableIndex").stop(true,false);
	}
  );
  
  $("#scrollDown").hover(function() {	  
    // Calculate a rate
    ratio = (document.getElementById("scrollableIndex").scrollHeight - $("#scrollableIndex").scrollTop()) / document.getElementById("scrollableIndex").scrollHeight;
	
	$("#scrollableIndex").animate({scrollTop: document.getElementById("scrollableIndex").scrollHeight}, 5000 * ratio, "linear", function() {});
  },
    function() {
		$("#scrollableIndex").stop(true,false);
	}
  ); 	
}

function resizeImage(img, height, width) {
	var scale = 0;
	// Check if the height was given
	if (height == null) {
		// Calculate the scale using the width
		scale = img.width/width;
		
		// Use the scale to set the width and height
		img.width = img.width/scale;
		img.height = img.height/scale;
	}
	else if (width == null) {
		// Calculate the scale using the height
		scale = img.height/height;
		
		// Use the scale to set the width and height
		img.width = img.width/scale;
		img.height = img.height/scale;
	}
	else {
		// Set the width and height to the given values
		img.height = height;
		img.width = width;
	}	
	return img;
}
  
function showNextImage() {
  proposedImage++;
  if (proposedImage >= imgList.length) {
	  proposedImage = 0;
  }
  showImage(proposedImage);
} 

function showImage(index) {
  if (index != currentImage) {
    //$('.simpleGallery').children('#outerSimpleGalleryImageDiv').children('#simpleGalleryImageDiv').fadeOut();
    //$('.simpleGallery').children('#outerSimpleGalleryImageDiv').children('#simpleGalleryImageDiv').replaceWith(imgList[index]);
	  $('#simpleGalleryImageDiv').children().fadeOut();
	  if (imgList[index].width > imgList[index].height) { 
	      resizeImage(imgList[index], null, 515);
	  } else {
		  resizeImage(imgList[index], 515, null);
	  }
	  $('#simpleGalleryImageDiv').children().replaceWith(imgList[index]);
    $(imgList[index]).fadeIn();
    currentImage = index;
    proposedImage = currentImage;
  }
}
    
function showPrevImage() {
  proposedImage--;
  if (proposedImage < 0) {
	  proposedImage = imgList.length-1;
  }
  showImage(proposedImage);
}
    
