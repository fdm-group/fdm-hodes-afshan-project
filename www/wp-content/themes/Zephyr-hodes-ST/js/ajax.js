function downloadUrl(url, postdata, callback) {

			var dataString = {lat: '55.56', lng: '25.35', radius:'100', action:'filter_posts'};

data = {
            action: 'filter_posts',
            lat: '55.56',
            lng: '25.35',
            radius:'100',
        };


 $.ajax({                            
       url: afp_vars.afp_ajax_url,
            data: data, 
        type: "post",
        cache: false,
     
        success: function(data,textStatus, XMLHttpRequest){ 
            console.log(data);

            },
        error: function() {
            console.log("Error");            
        }
    });

}
