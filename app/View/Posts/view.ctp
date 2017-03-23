<!-- START PAGE SOURCE -->
<div id="wrap">
    <div id="wrap-container">
        <div id="topnav">
            <h1 id="sitename">Zen Design</h1>
            <ul id="nav">
                <li><a href="index.html">Home</a></li>
                <li><a href="styles.html">Styles</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li>
                    <?php
                    echo $this->Html->link(
                        'Login',
                        '/users/login',
                        array()
                    );
                    ?>
                </li>
            </ul>
        </div>
        <div id="header">
            <div id="featuredpost">
                <div id="featuredthumb">
                    <?php echo $this->Html->image('/img/featuredimage.jpg', array('alt' => 'featuredimage', 'class' => 'shadow', 'width' => '200', 'height' => '135'));?>
                </div>
                <div id="featuredcontent">
                    <h2><span>Hello World</span></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam blandit facilisis viverra. Nullam id tristique arcu. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla vehicula eros commodo est vestibulum cursus..<span class="readmore"> <a href="#">read more</a></span></p>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <div id="content">
            <div id="left">
                <div class="post">
                    <div class="postleft">
                        <div class="postdate">
                            <span class="day">
                                <?php echo date('d', strtotime($post['Post']['created'])); ?>
                            </span>
                            <span class="month">
                                <?php echo date('M', strtotime($post['Post']['created']));?>
                            </span>
                        </div>
                        <div class="comments">
                            <span class="count"><a href="#">0</a></span>
                            <p>
                                <?php echo $this->Html->image('/img/view.png', array('alt' => 'view', 'width' => '25', 'height' => '25'));?>
                                <a href="#" class="view">
                                    <?php echo $post['Post']['viewCount'];?>
                                </a>
                            </p>
                        </div>
                    </div>
                    <div class="postcontent">
                        <div class="postheader">
                            <h2><?php echo h($post['Post']['title']); ?></h2>
                            <span class="postmeta">By <?php echo h($post['User']['username']); ?></span>
                        </div>
                            <p><?php echo h($post['Post']['body']); ?></p>
                        <div id="comments" class="comments-list">
                            <h2>2 Responses to &quot;Story of Lorem Ipsum&quot;</h2>
                            <div class="entry  alt">
                                <p class="avt">
                                    <?php echo $this->Html->image('/img/avatar.jpg', array('alt' => 'avatar', 'width' => '45', 'height' => '45'));?>
                                </p>
                                <p class="name">Roshan</p>
                                <p class="date"><a href="#">July 12th, 2009 at 10:25 am</a> </p>
                                <div class="con">
                                    <p>Mea eu volumus offendit, pro ei ferri ipsum saperet. Ea vocent splendide mea, minim doctus et has. Mel duis epicuri omnesque at, mea cu ferri scripta. Causae facilisi tincidunt eu eam, munere atomorum repudiandae at eum.</p>
                                    <p>Mel duis epicuri omnesque at, mea cu ferri scripta. Causae facilisi tincidunt eu eam, munere atomorum repudiandae at eum.</p>
                                </div>
                            </div>
                            <div class="entry " id="comment-4">
                                <p class="avt">
                                    <?php echo $this->Html->image('/img/avatar.jpg', array('alt' => 'avatar', 'width' => '45', 'height' => '45'));?>
                                </p>
                                <p class="name">admin</p>
                                <p class="date"><a href="#">July 19th, 2007 at 10:32 am</a> </p>
                                <div class="con">
                                    <p>Mei in saepe persius feugiat, postulant honestatis cu his, duo ea indoctum moderatius. Ut duo modo definiebas posidonium. Causae mentitum percipitur cum eu, usu dolor regione oporteat no. At iusto dolores electram eos, everti intellegat consectetuer eos id. Eum ut vero veniam verterem.</p>
                                </div>
                            </div>
                        </div>
                        <div class="comments-form">
                            <h3 id="respond">Add A Comment</h3>
                            <form id="comment-form" action="#" method="post">
                                <p>
                                    <input id="comment-name" value="" name="author"  type="text" class="formid" />
                                    <label for="comment-name">Your Name <strong class="required">(required)</strong></label>
                                </p>
                                <p>
                                    <input id="comment-email" name="email" value="" type="text" class="formemail" />
                                    <label for="comment-name">Your Email <strong class="required">(required)</strong></label>
                                </p>
                                <p>
                                    <textarea name="comment" cols="50" rows="8"></textarea>
                                </p>
                                <p>
                                    <input name="submit"  type="button" class="button" id="submit" tabindex="5" value="Submit" />
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sidebar">
                <div id="search">
                    <h2>Search</h2>
                    <form action="#">
                        <div id="searchfield">
                            <input type="text" name="s" class="keyword" />
                            <input type="image" src="images/searchbutton.png" />
                        </div>
                    </form>
                </div>
                <div id="sb_container">
                    <h2><span>Latest Posts</span></h2>
                    <div class="posts">
                        <ul>
                            <li><a href="#">Pellentesque odio ante, mle stie</a></li>
                            <li><a href="#">Curabitur et augue massa</a></li>
                            <li><a href="#">Morbi Vitae Velit Ante</a></li>
                            <li><a href="#">Dolar Sit Lorem Quisque Dictum Molestie</a></li>
                            <li><a href="#">Sample blog post</a></li>
                        </ul>
                    </div>
                    <h2><span>Categories</span></h2>
                    <div class="categories">
                        <ul>
                            <li><a href="#">Web Design</a></li>
                            <li><a href="#">CSS Templates</a></li>
                            <li><a href="#">Graphic Design</a></li>
                            <li><a href="#">Usability</a></li>
                            <li><a href="#">W3C Standards</a></li>
                        </ul>
                    </div>
                    <h2><span>Blogroll</span></h2>
                    <div class="links">
                        <ul>
                            <li><a href="#">CSS Templates</a></li>
                            <li><a href="#">Free CSS Templates</a></li>
                            <li><a href="#">PSD Templates</a></li>
                            <li><a href="#">Web Design Blog</a></li>
                            <li><a href="#">CSS Tutorials</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <div id="bottom">
        <div id="container">
            <div id="about">
                <div id="authorimage">
                    <?php echo $this->Html->image('/img/authorimg.png', array('alt' => 'authorimg', 'width' => '108', 'height' => '108'));?>
                </div>
                <div id="authorbio">
                    <h2>About</h2>
                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vel porttitor purus. Ut id mi vel mauris volutpat volutpat et vitae lorem. Duis nisi neque, ultricies scelerisque placerat ut, elementum eu elit. Quisque molestie velit at nisl aliquet id lobortis lorem euismod.</p>
                </div>
            </div>
            <div id="tags">
                <h2 class="title">Tag Cloud</h2>
                <div class="content"> <a href="#" class="level6">inspiration</a> <a href="#" class="level5">daily inspiration</a> <a href="#" class="level4">photography</a> <a href="#" class="level4">tutorial</a> <a href="#" class="level4">illustration</a> <a href="#" class="level4">design</a> <a href="#" class="level3">best of the week</a> <a href="#" class="level3">iphone</a> <a href="#" class="level3">Typography</a> <a href="#" class="level3">photoshop</a> <a href="#" class="level3">wallpaper</a> <a href="#" class="level2">architecture</a> <a href="#" class="level2">web design</a> <a href="#" class="level2">interview</a> <a href="#" class="level2">video</a> <a href="#" class="level2">free</a> <a href="#" class="level2">wallpaper of the week</a> <a href="#" class="level2">sites of the week</a> <a href="#" class="level2">graphic design</a> <a href="#" class="level2">freebie</a> <a href="#" class="level2">fonts</a> <a href="#" class="level2">case study</a> <a href="#" class="level2">logo</a> <a href="#" class="level2">giveaway</a> <a href="#" class="level2">art</a> <a href="#" class="level1">hdr</a> <a href="#" class="level1">digital art</a> <a href="#" class="level1">poster</a> <a href="#" class="level1">fireworks</a> <a href="#" class="level1">posters</a> <a href="#" class="level1">illustrator</a> <a href="#" class="level1">gadgets</a> <a href="#" class="level1">photo manipulation</a> <a href="#" class="level1">ads</a> <a href="#" class="level1">logo design</a> <a href="#" class="level1">FFFF</a> <a href="#" class="level1">3d</a> <a href="#" class="level1">video of the week</a> <a href="#" class="level1">offices</a> <a href="#" class="level1">product design</a> </div>
            </div>
            <div class="clear"></div>
        </div>
        <div id="credits">
            <div class="leftalign">Copyright &copy; 2010 YourSiteName.com</div>
            <div class="rightalign">Design by <a href="http://cssheaven.org">CSSHeaven.org</a></div>
        </div>
    </div>
</div>