<div class="container">
    <div class="gdmradio-section">
        <div class="gdmradio-section-content">
            <div id="myCarousel" class="carousel slide">
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="item active">
                        <a href="https://www.facebook.com/RespectTheBrunch"><img src="assets/img/carousel/RespectTheBrunch.png" alt=""></a>
                        <div class="carousel-caption">
                            <h4>Come Join Your Friends at Respect the Brunch!</h4>
                            <p>Let’s brunch together in the ATL! In exchange for brunching in a large group, restaurants will donate to Lost N Found; an amazing charity assisting LGBT youth. <a href="https://www.facebook.com/RespectTheBrunch">Visit us on Facebook.</a></p>
                        </div>
                    </div>
                    <div class="item">
                        <a href="https://www.facebook.com/GDMRadio"><img src="assets/img/carousel/PrideParade.png" alt=""></a>
                        <div class="carousel-caption">
                            <h4>We are GDM Radio</h4>
                            <p>Gay Dance Music Radio will unite the LGBT community of Atlanta, the Southeast, and eventually the world by broadcasting a unique and superior mix of gay and electronic dance music, while providing a mental catalyst for the appreciation of the distinctive interests of LGBT individuals. <a href="https://www.facebook.com/GDMRadio">Visit us on Facebook.</a></p>
                        </div>
                    </div>
                </div>
                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>
        </div>
    </div>
    <div class="gdmradio-section">
        <div class="gdmradio-section-title">NEWS</div>
        <div class="gdmradio-section-content">
            <?php foreach ($posts as $post): ?>
                <div class="media">
                    <a class="pull-left" href="#">
                        <img src="<?php echo '/assets/img/uploads/' . $post->image; ?>" width="128" height="128" />
                    </a>
                    <div class="media-body">
                        <a class="media-heading" href="/posts/view/<?php echo $post->id; ?>"><?php echo $post->title; ?></a>
                        <h5 class="media-heading">ON <?php echo $post->posted_on ?> BY <?php echo Model_User::username($post->user_id); ?></h5>
                        <?php echo $post->text; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="gdmradio-split">
        <div class="gdmradio-split-left">
            <div class="gdmradio-section-title">FACEBOOK</div>
            <div class="gdmradio-section-facebook">
                <iframe src="//www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2FGDMRadio&amp;width&amp;height=560&amp;colorscheme=dark&amp;show_faces=false&amp;header=false&amp;stream=true&amp;show_border=false&amp;appId=123445794492497" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:560px;" allowTransparency="true"></iframe>
            </div>
        </div>
        <div class="gdmradio-split-right">
            <div class="gdmradio-section-title">TWITTER</div>
            <div class="gdmradio-section-twitter">
                <a class="twitter-timeline" href="https://twitter.com/GDMRadio" height="500" data-widget-id="420700905973899265" data-theme="dark" data-chrome="noheader nofooter transparent">Tweets by @GDMRadio</a>
                <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
            </div>
        </div>
    </div>
</div>