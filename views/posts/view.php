<div id="posts-view" class="container">
    <div class="gdmradio-block">
        <div class="gdmradio-block-content">
            <div class="media" data-bind="with: post">
                <a class="pull-left" href="#">
                    <img src="" width="128" height="128" data-bind="attr: { src: '/assets/img/uploads/' + image() }" />
                </a>
                <div class="media-body">
                    <div class="gdmradio-media-title-link" data-bind="text: title"></div>
                    <div class="gdmradio-media-subtitle" >by <span data-bind="text: username"></span> on <span data-bind="text: user_posted_on"></span></div>
                    <div class="gdmradio-media-text" data-bind="html: text"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="gdmradio-block">
        <div class="gdmradio-block-title<?php if (!$post_comment_access) echo '-inline'; ?>">COMMENTS</div>
        <div class="gdmradio-block-content">
            <?php if ($post_comment_access): ?>
            <div data-bind="with: post_comment">
                <textarea id="post-form-comment" name="comment" class="form-control" data-bind="ckeditor: comment, ckeditorOptions: { height: '100px' }, validate: $root.errors"></textarea>
                <button class="btn btn-default" data-bind="click: $root.comment">COMMENT</button>
            </div>
            <?php endif; ?>
            <!-- ko with: post -->
            <!-- ko foreach: post_comments -->
            <div class="media">
                <div class="media-body">
                    <div class="gdmradio-media-subtitle">by <span data-bind="text: username"></span> on <span data-bind="text: user_commented_on"></span></div>
                    <div class="gdmradio-media-text" data-bind="html: comment"></div>
                </div>
            </div>
            <!-- /ko -->
            <!-- /ko -->
        </div>
    </div>
</div>