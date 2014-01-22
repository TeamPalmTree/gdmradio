<nav id="gdmradio-player" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <button title="Play" class="btn btn-default navbar-btn gdmradio-player-button" data-bind="click: play, css: {'gdmradio-player-playing' : playing}">
                <span class="glyphicon" data-bind="css: css"></span>
                <!-- ko with: status -->
                <span class="gdmradio-player-text"><span data-bind="text: current_file_artist"></span> - <span data-bind="text: current_file_title"></span></span>
                <!-- /ko -->
            </button>
        </div>
        <div id="navigation-collapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="<?php if ($section == 'Home') echo 'active'; ?>"><a href="/">HOME</a></li>
                <li class="<?php if ($section == 'Posts') echo 'active'; ?>"><a href="/posts">NEWS</a></li>
                <li class="<?php if ($section == 'DJs') echo 'active'; ?>"><a href="/DJs">DJs</a></li>
                <li class="<?php if ($section == 'Shows') echo 'active'; ?>"><a href="/shows">SHOWS</a></li>
                <li class="<?php if ($section == 'Events') echo 'active'; ?>"><a href="/events">EVENTS</a></li>
                <li class="<?php if ($section == 'Listen') echo 'active'; ?>"><a href="/listen">LISTEN</a></li>
                <li class="<?php if ($section == 'Contact') echo 'active'; ?>"><a href="/contact">CONTACT</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <button title="Play" class="btn btn-default navbar-btn" data-bind="click: play, css: {'gdmradio-player-playing' : playing}">
                        <span class="glyphicon" data-bind="css: css"></span>
                        <!-- ko with: status -->
                        <span class="gdmradio-player-text"><span data-bind="text: current_file_artist"></span> - <span data-bind="text: current_file_title"></span></span>
                        <!-- /ko -->
                    </button>
                </li>
                <?php echo $promoter_menu; ?>
            </ul>
        </div>
    </div>
</nav>