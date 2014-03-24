<div id="shows-index" class="container">
    <!-- ko if: single_shows().length > 0 -->
    <div class="gdmradio-block" data-bind="attr: { id: day() }">
        <div class="gdmradio-block-title-inline">SPECIAL SHOWS</div>
        <div class="gdmradio-block-content" data-bind="template: { name: 'show-template', foreach: single_shows }"></div>
    </div>
    <!-- /ko -->
    <div class="gdmradio-block">
        <div class="gdmradio-block-content">
            <div class="btn-group" data-bind="foreach: repeat_days">
                <button type="button" class="btn btn-default" data-bind="text: day().toUpperCase(), click: $root.scroll_to_day"></button>
            </div>
        </div>
    </div>
    <!-- ko foreach: repeat_days -->
    <!-- ko if: shows().length > 0 -->
    <div class="gdmradio-block" data-bind="attr: { id: day() }">
        <div class="gdmradio-block-title-inline" data-bind="text: day().toUpperCase()"></div>
        <div class="gdmradio-block-content" data-bind="template: { name: 'show-template', foreach: shows }"></div>
    </div>
    <!-- /ko -->
    <!-- /ko -->
</div>
<script type="text/html" id="show-template">
    <div class="media">
        <div class="media-body">
            <!-- ko if: website() -->
            <a class="gdmradio-media-title-link-small" data-bind="text: title, attr: { href: website }" target="_blank"></a>
            <!-- /ko -->
            <!-- ko if: !website() -->
            <div class="gdmradio-media-title-link-small" data-bind="text: title"></div>
            <!-- /ko -->
            <div class="gdmradio-media-subtitle" data-bind="text: show_full_date() ? user_start_on_timeday() : user_start_on_time()"></div>
            <div class="gdmradio-media-text" data-bind="html: description"></div>
        </div>
    </div>
</script>