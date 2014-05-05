<div id="welcome-index" class="container">
    <div class="gdmradio-block">
        <div class="gdmradio-block-content">
            <div class="gdmradio-jumbotron">
                <div class="gdmradio-jumbotron-left">
                    <div id="carousel" class="carousel slide" data-ride="carousel" data-interval="15000">
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
                    <div class="gdmradio-jumbotron-news">
                        <?php foreach ($posts as $post): ?>
                        <div class="gdmradio-jumbotron-article">
                            <div>
                                <a class="local" href="/posts/view/<?php echo $post->id; ?>">
                                    <img src="<?php echo '/assets/img/uploads/' . $post->image; ?>" width="128" height="128" />
                                </a>
                            </div>
                            <div>
                                <a class="gdmradio-media-title-link-small local" href="/posts/view/<?php echo $post->id; ?>"><?php echo $post->title; ?></a>
                                <div class="gdmradio-media-subtitle-small">by <?php echo $post->username ?></div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="gdmradio-jumbotron-right" data-bind="foreach: recent_files">
                    <div class="gdmradio-jumbotron-file">
                        <div class="gdmradio-media-title-link-small" data-bind="text: title"></div>
                        <div class="gdmradio-media-subtitle-small" data-bind="text: artist"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="gdmradio-block-split-hide">
        <div class="gdmradio-block-split-left">
            <div class="gdmradio-block-title">NEWS</div>
            <div class="gdmradio-block-content">
                <?php foreach ($posts as $post): ?>
                <div class="media">
                    <a class="pull-left local" href="/posts/view/<?php echo $post->id; ?>">
                        <img src="<?php echo '/assets/img/uploads/' . $post->image; ?>" width="64" height="64" />
                    </a>
                    <div class="media-body">
                        <a class="gdmradio-media-title-link-small local" href="/posts/view/<?php echo $post->id; ?>"><?php echo $post->title; ?></a>
                        <div class="gdmradio-media-subtitle-small">by <?php echo $post->username ?> on <?php echo $post->user_posted_on ?></div>
                        <div class="gdmradio-media-text-small"><?php echo $post->summary; ?></div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="gdmradio-block-split-right">
            <div class="gdmradio-block-title">PLAYED</div>
            <div class="gdmradio-block-content" data-bind="foreach: recent_files">
                <div class="media-body">
                    <div class="gdmradio-media-title-link-small" data-bind="text: title"></div>
                    <div class="gdmradio-media-subtitle-small" data-bind="text: artist"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="gdmradio-block-split">
        <div class="gdmradio-block-split-left">
            <div class="gdmradio-block-title">FACEBOOK</div>
            <div class="gdmradio-block-content">
                <?php foreach ($activities as &$activity): ?>
                <div class="media">
                    <?php if (isset($activity['picture'])): ?>
                    <a class="pull-left" href="https://www.facebook.com/<?php echo $activity['id']; ?>" target="_blank">
                        <img src="<?php echo $activity['picture']; ?>" width="64" height="64" />
                    </a>
                    <?php endif; ?>
                    <div class="media-body">
                        <a class="gdmradio-media-title-link-small" href="https://www.facebook.com/<?php echo $activity['from']['id']; ?>" target="_blank"><?php echo $activity['from']['name']; ?></a>
                        <div class="gdmradio-media-subtitle-small"><?php echo $activity['user_created_time']; ?></div>
                        <div class="gdmradio-media-text-small"><?php if (isset($activity['message'])) { echo $activity['message']; } ?></div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="gdmradio-block-split-right">
            <div class="gdmradio-block-title">TWITTER</div>
            <div class="gdmradio-block-content">
                <?php foreach ($tweets as $tweet): ?>
                    <div class="media">
                        <?php if (isset($tweet->entities->media)): ?>
                            <a class="pull-left" href="https://www.twitter.com/<?php echo $tweet->user->screen_name; ?>" target="_blank">
                                <img src="<?php echo $tweet->entities->media[0]->media_url; ?>" width="64" height="64" />
                            </a>
                        <?php endif; ?>
                        <div class="media-body">
                            <a class="gdmradio-media-title-link-small" href="https://www.twitter.com/<?php echo $tweet->user->screen_name; ?>" target="_blank"><?php echo $tweet->user->screen_name; ?></a>
                            <div class="gdmradio-media-subtitle-small"><?php echo $tweet->created_at; ?></div>
                            <div class="gdmradio-media-text-small"><?php if (isset($tweet->text)) { echo $tweet->text; } ?></div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>