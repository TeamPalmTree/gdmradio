<?php foreach ($DJs as $DJ): ?>
<div class="gdmradio-item">
    <div class="gdmradio-item-DJ-image" style="background-image: url(<?php echo $DJ->image(); ?>);" /></div>
    <div class="gdmradio-item-title">
        <?php echo $DJ->name; ?> <a href="mailto:<?php echo $DJ->email; ?>"><?php echo $DJ->email; ?></a>
    </div>
    <?php foreach ($DJ->DJ_times as $DJ_time): ?>
        <div class="gdmradio-item-DJ-time">
            <?php echo $DJ_time->days; ?> : <?php echo $DJ_time->times; ?>
        </div>
    <?php endforeach; ?>
    <div class="gdmradio-item-text">
        <?php echo $DJ->description; ?>
    </div>
    <div class="clear"></div>
</div>
<?php endforeach; ?>