document.write("<script type='text/javascript' src='media_list.js'><"+"/script>");

function isMobile() {
    return /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
}


    if (isMobile()) {
    //   alert('mobile');
      document.write('<link rel="stylesheet" type="text/css" href="moButton.css">');
      //document.write('<div class="control"><button onclick="video.play()">재생 안될시 클릭</button></div>');
      
    }else{
    //   alert('pc');
      document.write('<link rel="stylesheet" type="text/css" href="pcButton.css">');
    }
 



function changeVid(i,videos,n,m){
    var video = document.getElementById('video');
	video.setAttribute("src", videos[n][m]);
    video.setAttribute("type",types[i])
    video.load();
    video.play();
}

