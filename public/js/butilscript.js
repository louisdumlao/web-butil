function changeImage(newImageSource, plantID) {
	"use strict";
	var img = document.getElementById(plantID);
	img.src = '../'+ newImageSource;
	return false;
}

function getPlantDetails() {
	"use strict";
	
}


$('#summaryTab a').click(function (e) {
  e.preventDefault();
  $(this).tab('show');
});


