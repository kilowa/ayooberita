$(document).ready(function() {
    selesai();
});

function selesai() {
	setTimeout(function() {
		update();
		selesai();
	}, 200);
}

function update() {
	$.getJSON("Application/Modules/Hotnews.php", function(data) {
		$("#hotnews").empty();
		$.each(data.result, function() {
			$("#hotnews").append("<a href='detail.html?q="+this['id_berita']+"'>\n\
    <div class='mdl-brt'><div class='gbr-brt'>"+this['gambar']+"</div>\n\
    <div class='isi-brt'><span class='tgl'>"+this['tgl']+"</span>\n\
<h3 class='jdl-brt'>"+this['judul']+"</h3></div></div></a>");
		});
	});
}