<div id="welcome-index" class="container">
    <div class="gdmradio-section">
        <div class="gdmradio-section-content">
            <div id="carousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <?php foreach ($carousels as $index => $carousel): ?>
                    <li data-target="#carousel" data-slide-to="<?php echo $index; ?>" class="<?php if ($index == 0) echo 'active'; ?>"></li>
                    <?php endforeach; ?>
                </ol>
                <div class="carousel-inner">
                    <?php foreach ($carousels as $index => $carousel): ?>
                    <div class="item<?php if ($index == 0) echo ' active'; ?>">
                        <a href="<?php echo $carousel->website; ?>" target="_blank">
                            <img src="/assets/img/uploads/<?php echo $carousel->image; ?>" alt="<?php echo $carousel->title; ?>">
                        </a>
                        <div class="carousel-caption">
                            <h4><?php echo $carousel->title; ?></h4>
                           <?php echo $carousel->text; ?>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <a class="left carousel-control" href="#carousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>
        </div>
    </div>
    <div class="gdmradio-section-split">
        <div class="gdmradio-section-split-left">
            <div class="gdmradio-section-title">RECENT NEWS</div>
            <div class="gdmradio-section-content">
                <?php foreach ($posts as $post): ?>
                <div class="media">
                    <a class="pull-left" href="#">
                        <img src="<?php echo '/assets/img/uploads/' . $post->image; ?>" width="64" height="64" />
                    </a>
                    <div class="media-body">
                        <a class="gdmradio-media-title-link-small" href="/posts/view/<?php echo $post->id; ?>"><?php echo $post->title; ?></a>
                        <div class="gdmradio-media-subtitle-small">by <?php echo $post->username ?> on <?php echo $post->user_posted_on ?></div>
                        <div class="gdmradio-media-text-small"><?php echo $post->summary; ?></div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="gdmradio-section-split-right">
            <div class="gdmradio-section-title">RECENT SONGS</div>
            <div class="gdmradio-section-content" data-bind="foreach: recent_files">
                <div class="media-body">
                    <div class="gdmradio-media-title-link-small" data-bind="text: title"></div>
                    <div class="gdmradio-media-subtitle-small" data-bind="text: artist"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="gdmradio-section-split">
        <div class="gdmradio-section-split-left">
            <div class="gdmradio-section-title-inline">FACEBOOK</div>
            <div class="gdmradio-section-facebook">
                <iframe src="//www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2FGDMRadio&amp;width&amp;height=560&amp;colorscheme=dark&amp;show_faces=false&amp;header=false&amp;stream=true&amp;show_border=false&amp;appId=123445794492497" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:560px;" allowTransparency="true"></iframe>
            </div>
        </div>
        <div class="gdmradio-section-split-right">
            <div class="gdmradio-section-title">TWITTER</div>
            <div class="gdmradio-section-twitter">
                <a class="twitter-timeline" href="https://twitter.com/GDMRadio" height="510" data-widget-id="420700905973899265" data-theme="dark" data-chrome="noheader nofooter transparent">Tweets by @GDMRadio</a>
                <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
            </div>
        </div>
    </div>
</div>