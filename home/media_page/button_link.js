document.write("<script type='text/javascript' src='media_list.js'><"+"/script>");

function changeVid(i,videos,n,m){
    var video = document.getElementById('video');
	video.setAttribute("src", videos[n][m]);
    video.setAttribute("type",types[i])
    video.load();
}
