var videos =
[
 [
	"png",
	"media/Clannad/1/01.mp4"
 ],
 [
	"png",
	"media/Clannad/1/02.mp4"
 ],
 [
    "png",
	"media/Clannad/1/03.mp4"
 ],
 [
    "png",
	"media/Clannad/1/04.mp4"
 ]
 ];

function changeVid(n){
    var video = document.getElementById('video');
	video.setAttribute("src", videos[n][1]);
    

    video.load();
}
