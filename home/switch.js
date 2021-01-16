var media_properties = [ "error", "src", "srcObject", "currentSrc", "crossOrigin", "networkState", "preload", "buffered", "readyState", "seeking", "currentTime", "duration",
"paused", "defaultPlaybackRate", "playbackRate", "played", "seekable", "ended", "autoplay", "loop", "controls", "volume",
"muted", "defaultMuted", "audioTracks", "videoTracks", "textTracks", "width", "height", "videoWidth", "videoHeight", "poster" ];

var videos =
[
 [
	"png",
	"media/Clannad/1/1.mp4"
 ],
 [
	"png",
	"media/Clannad/1/2.mp4"
 ],
 [
    "png",
	"media/Clannad/1/3.mp4"
 ],
 [
    "png",
	"media/Clannad/1/4.mp4"
 ]
 ];

function switchVideo(n) {
	if (n >= videos.length) n = 0;

	var mp4 = document.getElementById("mp4");
	var parent = mp4.parentNode;

	// document._video.setAttribute("poster", videos[n][0]);
	mp4.setAttribute("src", videos[n][1]);

	// if (videos[n][2]) {
	// 	if (webm.parentNode == null) {
	// 		parent.insertBefore(webm, mp4);
	// 	}
	// 	webm.setAttribute("src", videos[n][2]);
	// } else {
	// 	if (webm.parentNode != null) {
	//     	parent.removeChild(webm);
	// 	}
    // }
    document._video.width = 0;
    document._video.height = 0;
    document._video.load();
}