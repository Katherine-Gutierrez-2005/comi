$('.capa-data').hide();
$('.container-data').hide();

$('.container-data').css({
    bottom:'0px'
})

$('.request').on('click', function(){
    $('.capa-data').fadeIn();
    $('.container-data').show();
    $('.container-data').animate();({
        bottom: '0px'
    })

})

$('container-data').on('click', function(){

});
$(function(){
    $('#loadfoto').change(function)(e){
        addImage(e);
    }
});
 function addImage(e){
    var file = e.target.files[0],
    imageType = /image,*/;

    if (!file.type.match(imageType))
    return;
    var reader = new FileReader();
    reader.onloand = fileonloand;
    reader,readAsdataURL(file);
 }
  
 function fileOnloand(e) {
var result=e.target.result;
$('#fotoSelect'). attr("src", result);
 }

