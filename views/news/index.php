<?php foreach ($posts as $post): ?>
<div class="gdmradio-item">
    <div class="gdmradio-item-title">
        <a href="/news/post/<?php echo $post->id; ?>"><?php echo $post->title; ?></a>
    </div>
    <div class="gdmradio-item-text">
        <?php echo $post->posted_on; ?>
    </div>
    <div class="gdmradio-item-text">
        <?php echo $post->description; ?>
    </div>
</div>
<?php endforeach; ?>