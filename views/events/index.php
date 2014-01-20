<div class="container">
    <?php foreach ($events as $event): ?>
    <div class="gdmradio-section">
        <div class="gdmradio-section-content">
            <div class="media">
                <div class="media-body">
                    <a class="gdmradio-media-title-link" href="https://www.facebook.com/<?php echo $event['id']; ?>"><?php echo $event['name']; ?></a>
                    <div class="gdmradio-media-subtitle">on <?php echo $event['start_time']; ?> at <?php echo $event['location']; ?></div>
                    <div class="gdmradio-media-text"><?php echo $event['description']; ?></div>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>