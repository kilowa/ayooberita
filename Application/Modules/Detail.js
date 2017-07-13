$(document).ready(function(str) {
    selesai();
});

function selesai() {
	setTimeout(function() {
		update();
		selesai();
	}, 200);
}

function update() {
    
	$.getJSON("Application/Modules/Detail.php?q="+str, function(data) {
		$("#hotnews").empty();
		$.each(data.result, function() {
                   var ajaxRequest;
    ajaxRequest.onreadystatechange = function(){
                  if(ajaxRequest.readyState == 4){
                     var ajaxDisplay = document.getElementById('#hotnews');
                     ajaxDisplay.innerHTML = ajaxRequest.responseText;
                  }
               }
               var age = document.getElementById('id').value;
               var queryString = "?q=" + id ;
               queryString +=  "&q=" + q;
               
			$("#hotnews").append("<div class='mdl-brt'><div class='gbr-brt'>"+this['gambar']+"</div>\n\
    <div class='isi-brt'><span class='tgl'>"+this['tgl']+"</span>\n\
<h3 class='jdl-brt'>"+this['judul']+"</h3></div></div>");
		});
	});
}