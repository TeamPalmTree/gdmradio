<div id="content" class="container">
    <?php foreach ($posts as $post): ?>
    <div class="gdmradio-block">
        <div class="gdmradio-block-content">
            <div class="media">
                <a class="pull-left" href="#">
                    <img src="<?php echo '/assets/img/uploads/' . $post->image; ?>" width="128" height="128" />
                </a>
                <div class="media-body">
                    <a class="gdmradio-media-title-link local" href="/posts/view/<?php echo $post->id; ?>"><?php echo $post->title; ?></a>
                    <div class="gdmradio-media-subtitle">by <?php echo \Promoter\Model\Promoter_User::username($post->user_id); ?> on <?php echo $post->user_posted_on ?></div>
                    <div class="gdmradio-media-text"><?php echo $post->summary; ?></div>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
    <ul class="pager">
        <li class="previous"><a class="local" href="/posts/page/<?php echo $page + 1; ?>">&larr; Older</a></li>
        <?php if ($page == 1): ?>
        <li class="next disabled"><a>Newer &rarr;</a></li>
        <?php else: ?>
        <li class="next"><a class="local" href="/posts/page/<?php echo $page - 1; ?>">Newer &rarr;</a></li>
        <?php endif; ?>
    </ul>
</div>