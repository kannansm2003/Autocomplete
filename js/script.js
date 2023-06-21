$( "#product_name" ).autocomplete({
    source: function(request,respone){
        $.ajax({
            url:'http://localhost/autocomplete/server.php',
            type:'GET',
            dataType:'json',
            success:function(data){
                aData=$.map(data,function(value,key){
                    return{
                        label:value.name
                    };
                });
                //console.log(aData);
                var results=$.ui.autocomplete.filter(aData,request.term);
                respone(results);
            }
        })
    }
});