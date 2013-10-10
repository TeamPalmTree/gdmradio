<div id="gdmradio-playing" class="gdmradio-playing" data-bind="with: status">
    <div class="gdmradio-playing-now">Now Playing</div>
    <div class="gdmradio-playing-artist-song"><span data-bind="text: current_file_artist"></span> - <span data-bind="text: current_file_title"></span></div>
    <div><button class="btn btn-mini gdmradio-playing-listen" data-bind="click: $parent.listen">LISTEN NOW</button></div>
</div>