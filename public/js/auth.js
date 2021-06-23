$("#updateImage").click(function(e) {
    $("#upload").click();
});

function fasterPreview( uploader ) {
    if ( uploader.files && uploader.files[0] ){
          $('#profileImage').attr('src', 
             window.URL.createObjectURL(uploader.files[0]) );
    }
}

$("#upload").change(function(){
    fasterPreview( this );
});