document.write("<script type='text/javascript' src='media_list.js'><"+"/script>");

function changeVid(videos,n,m){
    var video = document.getElementById('video');
	video.setAttribute("src", videos[n][m]);
    video.load();
}
