<div id="content" class="container">
    <?php foreach ($events as &$event): ?>
    <div class="gdmradio-block">
        <div class="gdmradio-block-content">
            <div class="media">
                <a class="pull-left" href="https://www.facebook.com/<?php echo $event['id']; ?>">
                    <img src="<?php echo $event['picture']['data']['url']; ?>" width="128" height="128" />
                </a>
                <div class="media-body">
                    <a class="gdmradio-media-title-link" href="https://www.facebook.com/<?php echo $event['id']; ?>"><?php echo $event['name']; ?></a>
                    <div class="gdmradio-media-subtitle">on <?php echo $event['user_start_time']; ?> at <?php echo $event['location']; ?></div>
                    <div class="gdmradio-media-text"><?php echo $event['description']; ?></div>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>