<?php if (is_null(Uri::segment(1))): ?>
    <li><a href="/welcome/edit"><span class="glyphicon glyphicon-edit"></span> EDIT WELCOME</a></li>
<?php endif; ?>
<?php if (Uri::segment(1) == 'posts'): ?>
    <?php if (Uri::segment(2) == 'view'): ?>
        <?php if (Auth::has_access('gdmradio.post[update]')): ?>
            <li><a href="/posts/edit/<?php echo Uri::segment(3); ?>"><span class="glyphicon glyphicon-edit"></span> EDIT POST</a></li>
        <?php endif; ?>
        <?php if (Auth::has_access('gdmradio.post[delete]')): ?>
        <li><a href="/posts/delete/<?php echo Uri::segment(3); ?>"><span class="glyphicon glyphicon-remove"></span> DELETE POST</a></li>
        <?php endif; ?>
    <?php endif; ?>
    <?php if (Auth::has_access('gdmradio.post[create]')): ?>
        <?php if (is_null(Uri::segment(2))): ?>
        <li><a href="/posts/create"><span class="glyphicon glyphicon-plus"></span> CREATE POST</a></li>
        <?php endif; ?>
        <?php if ((Uri::segment(2) == 'create') or (Uri::segment(2) == 'edit')): ?>
            <li><a onclick="document.getElementById('posts-form').submit();"><span class="glyphicon glyphicon-floppy-saved"></span> SAVE POST</a></li>
        <?php endif; ?>
    <?php endif; ?>
<?php endif; ?>