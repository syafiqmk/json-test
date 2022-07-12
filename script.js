$.getJSON('menu.json', function(data) {
    let menu = data.menu;
    let no = 1;
    $.each(menu[0].menu, function(i, data){
        $("#martabakTelur").append('<tr><td>'+ no++ +'</td><td>'+ data.nama +'</td><td>Rp. '+ data.harga +'</td></tr>');
    });
    no = 1;
    $.each(menu[1].menu, function(i, data){
        $("#martabakManis").append('<tr><td>'+ no++ +'</td><td>'+ data.nama +'</td><td>Rp. '+ data.harga +'</td></tr>');
    });
});