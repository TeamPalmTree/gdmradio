<div id="content" class="container">
    <?php foreach ($DJs as $DJ): ?>
    <div class="gdmradio-block">
        <div class="gdmradio-block-content">
            <div class="media">
                <a class="pull-left" href="#">
                    <img src="<?php echo '/assets/img/DJs/' . $DJ->shortname . '.jpg'; ?>" width="128" height="128" />
                </a>
                <div class="media-body">
                    <div class="gdmradio-media-title-big"><?php echo $DJ->shortname; ?></div>
                    <div class="gdmradio-media-text"><?php echo $DJ->description; ?></div>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>