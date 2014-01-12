<?php if (Uri::segment(1) == 'posts'): ?>
    <?php if (Auth::has_access('gdmradio.post[delete]') and (Uri::segment(2) == 'view')): ?>
    <li><a href="/posts/delete/<?php echo Uri::segment(3); ?>"><span class="glyphicon glyphicon-remove"></span> DELETE POST</a></li>
    <?php endif; ?>
    <?php if (Auth::has_access('gdmradio.post[create]') and is_null(Uri::segment(2))): ?>
    <li><a href="/posts/create"><span class="glyphicon glyphicon-plus"></span> CREATE POST</a></li>
    <?php endif; ?>
<?php endif; ?>