<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div id="navigation-collapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="<?php if ($section == 'Home') echo 'active'; ?>"><a href="/">HOME</a></li>
                <li class="<?php if ($section == 'Posts') echo 'active'; ?>"><a href="/posts">NEWS</a></li>
                <li class="<?php if ($section == 'DJs') echo 'active'; ?>"><a href="/DJs">DJs</a></li>
                <li class="<?php if ($section == 'Shows') echo 'active'; ?>"><a href="/DJs">SHOWS</a></li>
                <li class="<?php if ($section == 'Events') echo 'active'; ?>"><a href="/DJs">EVENTS</a></li>
                <li class="<?php if ($section == 'Listen') echo 'active'; ?>"><a href="/listen">LISTEN</a></li>
                <li class="<?php if ($section == 'Contact') echo 'active'; ?>"><a href="/contact">CONTACT</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <button title="Play" class="btn btn-default navbar-btn"><span class="glyphicon glyphicon-play"></span></button>
                    <span>Madonna - Ray of Light</span>
                </li>
                <?php echo $promoter_menu; ?>
            </ul>
        </div>
    </div>
</nav>