(function() {
    var video=document.getElementById("video"),
    //vendorUrl=window.URL || window.webkitURL;

    navigator.getUserMedia= navigator.getUserMedia || 
                            navigator.webkitGetUserMedia || 
                            navigator.mozGetUserMedia || 
                            navigator.msGetUSerMedia;
   /* navigator.mediaDevices.getUserMedia()({
        video:true,
        audio:false
    }, function(stream) { 
        video.src= vendorUrl.createObjectURL(stream);
        video.onplay();
    }, function(error){
        //an error occured
    });*/
    navigator.mediaDevices.getUserMedia({video: {}}) .then((stream)=> {video.srcObject = stream;}, (err)=> console.error(err));
})();