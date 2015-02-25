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

$(document).ready(function() {
 "use strict";
 $('#normal-view').hover(function() {
    $('#normal-view').attr('src','/web-butil/public/assets/images/buttons/Normal3.png');
	$('#biomass-view').attr('src','/web-butil/public/assets/images/buttons/Biomass3-inactive.png');
	$('#greenness-view').attr('src','/web-butil/public/assets/images/buttons/Greenness2-inactive.png');
	$('#height-view').attr('src','/web-butil/public/assets/images/buttons/Height2-inactive.png');
	$('#tiller-view').attr('src','/web-butil/public/assets/images/buttons/Tiller2-inactive.png');
    }, function () {
 });
});

$(document).ready(function() {
 "use strict";
 $('#biomass-view').hover(function() {
    $('#normal-view').attr('src','/web-butil/public/assets/images/buttons/Normal3-inactive.png');
	$('#biomass-view').attr('src','/web-butil/public/assets/images/buttons/Biomass3.png');
	 $('#greenness-view').attr('src','/web-butil/public/assets/images/buttons/Greenness2-inactive.png');
	 $('#height-view').attr('src','/web-butil/public/assets/images/buttons/Height2-inactive.png');
	 $('#tiller-view').attr('src','/web-butil/public/assets/images/buttons/Tiller2-inactive.png');
  }, function() {
 });
});

$(document).ready(function() {
 "use strict";
 $('#greenness-view').hover(function() {
    $('#normal-view').attr('src','/web-butil/public/assets/images/buttons/Normal3-inactive.png');
	$('#biomass-view').attr('src','/web-butil/public/assets/images/buttons/Biomass3-inactive.png');
	 $('#greenness-view').attr('src','/web-butil/public/assets/images/buttons/Greenness2.png');
	 $('#height-view').attr('src','/web-butil/public/assets/images/buttons/Height2-inactive.png');
	 $('#tiller-view').attr('src','/web-butil/public/assets/images/buttons/Tiller2-inactive.png');
  }, function() {
 });
});

$(document).ready(function() {
 "use strict";
 $('#height-view').hover(function() {
    $('#normal-view').attr('src','/web-butil/public/assets/images/buttons/Normal3-inactive.png');
	$('#biomass-view').attr('src','/web-butil/public/assets/images/buttons/Biomass3-inactive.png');
	 $('#greenness-view').attr('src','/web-butil/public/assets/images/buttons/Greenness2-inactive.png');
	 $('#height-view').attr('src','/web-butil/public/assets/images/buttons/Height2.png');
	 $('#tiller-view').attr('src','/web-butil/public/assets/images/buttons/Tiller2-inactive.png');
  }, function() {
 });
});

$(document).ready(function() {
 "use strict";
 $('#tiller-view').hover(function() {
    $('#normal-view').attr('src','/web-butil/public/assets/images/buttons/Normal3-inactive.png');
	$('#biomass-view').attr('src','/web-butil/public/assets/images/buttons/Biomass3-inactive.png');
	 $('#greenness-view').attr('src','/web-butil/public/assets/images/buttons/Greenness2-inactive.png');
	 $('#height-view').attr('src','/web-butil/public/assets/images/buttons/Height2-inactive.png');
	 $('#tiller-view').attr('src','/web-butil/public/assets/images/buttons/Tiller2.png');
  }, function() {
 });
});

$('#summaryTab a').click(function (e) {
  e.preventDefault();
  $(this).tab('show');
});


