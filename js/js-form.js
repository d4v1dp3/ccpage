$('.only-text').on('keydown', function(event){
    var arr = [8,9,16,17,20,32,35,36,37,38,39,40,45,46];
    for(var i = 65; i <= 90; i++){
        arr.push(i);
    }
    if(jQuery.inArray(event.which, arr) === -1){
        event.preventDefault();
    }
});

$('.only-digit').on('keydown', function(event){
    var arr = [8,9,16,17,32,35,36,37,38,39,40,45,46];
    for(var i = 48; i <= 57; i++){
        arr.push(i);
    }
    if(jQuery.inArray(event.which, arr) === -1){
        event.preventDefault();
    }
});