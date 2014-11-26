function changeImage(newImageSource, imageView) {
	"use strict";
	var img = document.getElementById("plantImage");
	if (imageView === "Normal") {
		img.src = "assets/images/" + newImageSource + ".JPG";
	} else {
		img.src = "assets/images/" + newImageSource + "-" + imageView + ".JPG";
	}
	return false;
}

function getPlantDetails() {
	"use strict";
	
}


$('#summaryTab a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
});


$('#date-input input').datepicker({
    format: "mm/dd/yyyy",
    weekStart: 0,
    todayBtn: true,
    forceParse: false,
    todayHighlight: true
});

