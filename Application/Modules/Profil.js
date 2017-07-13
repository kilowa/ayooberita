$(function () 
  {
    $.ajax({                                      
      url: 'Application/Modules/Profil.php',                  //the script to call to get data          
      data: "",                        //you can insert url argumnets here to pass to api.php                               //for example "id=5&parent=6"
      dataType: 'json',                //data format      
      success: function(data)          //on recieve of reply
      {
        var id = data[0]; 
        var vnama = data[1];
        var vmail = data[2];
        var vjoin = data[4];
        var vgambar = data[5];
        $('#profil').html("<img src='img/"+vgambar+"' />\n\
<span class='user-name'>"+vnama+"</span>"); 
    } 
    });
  }); 