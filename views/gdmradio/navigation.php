<nav id="navigation" class="navbar navbar-default navbar-fixed-top" data-section_title="<?php echo $section_title; ?>" data-model="GDMRadio_Navigation_Model">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="btn btn-default navbar-btn pull-right gdmradio-navigation-explore" data-toggle="collapse" data-target="#navigation-collapse">
                EXPLORE
            </button>
            <button title="Play" class="btn btn-default navbar-btn gdmradio-navigation-player-left" data-bind="click: play, css: {'gdmradio-navigation-playing' : playing}">
                <span class="glyphicon" data-bind="css: css"></span> <span data-bind="visible: !playing() && !buffering()">PLAY</span>
                <!-- ko with: status -->
                <span class="gdmradio-navigation-player-text"><span data-bind="text: current_file_artist"></span> - <span data-bind="text: current_file_title"></span></span>
                <!-- /ko -->
            </button>
        </div>
        <div id="navigation-collapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li data-bind="css: { active: section_title() == 'Home' }"><a class="local" href="/">HOME</a></li>
                <li data-bind="css: { active: section_title() == 'Posts' }"><a class="local" href="/posts">NEWS</a></li>
                <li data-bind="css: { active: section_title() == 'DJs' }"><a class="local" href="/DJs">DJs</a></li>
                <li data-bind="css: { active: section_title() == 'Shows' }"><a class="local" href="/shows">SHOWS</a></li>
                <li data-bind="css: { active: section_title() == 'Events' }"><a class="local" href="/events">EVENTS</a></li>
                <li data-bind="css: { active: section_title() == 'Listen' }"><a class="local" href="/listen">LISTEN</a></li>
                <li data-bind="css: { active: section_title() == 'Contact' }"><a class="local" href="/contact">CONTACT</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <button title="Play" class="btn btn-default navbar-btn gdmradio-navigation-player-right" data-bind="click: play, css: {'gdmradio-navigation-playing' : playing}">
                        <span class="glyphicon" data-bind="css: css"></span>
                        <!-- ko with: status -->
                        <span class="gdmradio-navigation-player-text"><span data-bind="text: current_file_artist"></span> - <span data-bind="text: current_file_title"></span></span>
                        <!-- /ko -->
                    </button>
                </li>
                <?php echo $promoter_menu; ?>
            </ul>
        </div>
    </div>
</nav>