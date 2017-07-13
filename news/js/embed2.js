function onYouTubeIframeAPIReady() {
    var temp = $(&quot;iframe.yt_players&quot;);
    for (var i = 0; i &lt; temp.length; i++) {
        var t = new YT.Player($(temp[i]).attr(&#39;id&#39;), {
            events: {
                &#39;onStateChange&#39;: onPlayerStateChange
            }
        });
        players.push(t);
    }

}
onYouTubeIframeAPIReady();


function onPlayerStateChange(event) {

    if (event.data == YT.PlayerState.PLAYING) {
        var temp = event.target.a.src;
        var tempPlayers = $(&quot;iframe.yt_players&quot;);
        for (var i = 0; i &lt; players.length; i++) {
            if (players[i].a.src != temp) players[i].stopVideo();

        }
    }
}