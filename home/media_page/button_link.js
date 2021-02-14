document.write("<script type='text/javascript' src='media_list.js'><"+"/script>");

function isMobile() {
    return /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
}


    if (isMobile()) {
    //   alert('mobile');
      document.write('<link rel="stylesheet" type="text/css" href="moButton.css">');
      document.write('<div>'+
      '<video id="video" controls preload="none" width="500" height="250">'+
        '<source type="video/mp4">'+
        '<p>Your user agent does not support the HTML5 Video element.</p>'+
      '</video><br><br></div>');
      document.write('<div class="control"><button onclick="video.play()">재생 안될시 클릭</button></div>');
      
    }else{
    //   alert('pc');
      document.write('<link rel="stylesheet" type="text/css" href="pcButton.css">');
      document.write('<div>'+
      '<video id="video" controls preload="none" width="500" height="250">'+
        '<source type="video/mp4">'+
        '<p>Your user agent does not support the HTML5 Video element.</p>'+
      '</video><br><br></div>');
    }
 



function changeVid(videos,n,m){
    var video = document.getElementById('video');
	video.setAttribute("src", videos[n][m]);
    video.load();
    // video.play();
}

