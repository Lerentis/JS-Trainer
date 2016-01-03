<?php
ini_set('display_errors',1); ini_set('display_startup_errors',1);

define('IN_PHPBB', true);
$phpbb_root_path = '/usr/share/phpBB3/';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.' . $phpEx);

// Start session management
$user->session_begin();
$auth->acl($user->data);
$user->setup();

if($user->data['is_registered']){

?>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en" data-useragent="Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.2; Trident/6.0)">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="../../css/foundation.css" />
    <script src="../../js/vendor/modernizr.js"></script>
    <script src="../../js/vendor/jquery.js"></script>
    <script src="../../js/foundation.min.js"></script>
    <script src="../../js/vendor/jquery.cookie.js"></script>
    <title> <?php echo "Chapter 1 for " . $user->data['username']; ?> </title>
</head>
<body>
<div class="row">
    <div class="large-12 columns">
        <div class="row">
            <div class="large-12 columns">
                <nav class="top-bar" data-topbar>
                    <ul class="title-area">
                        <li class="name">
                            <h1><a href="../../user.php">Learn JavaScript within minutes</a></h1>
                        </li>
                        <li class="toggle-topbar menu-icon">
                            <a href="#"><span>menu</span></a>
                        </li>
                    </ul>
                    <section class="top-bar-section">
                        <ul class="right">
                            <li class="divider"></li>
                            <li class="has-dropdown">
                                <a href="#">Select Chapter</a>
                                <ul class="dropdown">
                                    <li><label>Startes</label></li>
                                    <li>
                                        <a href="../chapter1/tutorial_chapter1.php">Lesson 1</a>
                                    </li>
                                    <li>
                                        <a href="../chapter2/tutorial_chapter2.php">Lesson 2</a>
                                    </li>
                                    <li>
                                        <a href="../chapter3/tutorial_chapter3.php">Lesson 3</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li><label>Advanced</label></li>
                                    <li>
                                        <a href="../chapter4/tutorial_chapter4.php">Lesson 4</a>
                                    </li>
                                    <li>
                                        <a href="../chapter5/tutorial_chapter5.php">Lesson 5</a>
                                    </li>
                                    <li>
                                        <a href="../chapter6/tutorial_chapter6.php">Lesson 6</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="../../user.php">See all →</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="divider"></li>
                            <li class="has-dropdown">
                                <a href="#">Select Quizes</a>
                                <ul class="dropdown">
                                    <li><label>Startes</label></li>
                                    <li>
                                        <a href="#">Quiz 1</a>
                                    </li>
                                    <li>
                                        <a href="#">Quiz 2</a>
                                    </li>
                                    <li>
                                        <a href="#">Quiz 3</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li><label>Advanced</label></li>
                                    <li>
                                        <a href="#">Quiz 4</a>
                                    </li>
                                    <li>
                                        <a href="#">Quiz 5</a>
                                    </li>
                                    <li>
                                        <a href="#">Quiz 6</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="divider"></li>
                            <li class="has-dropdown">
                                <a href="#"> <?php echo $user->data['username']; ?> </a>
                                <ul class="dropdown">
                                    <li>
                                        <a href="http://127.0.0.1:80/memberlist.php?mode=viewprofile&u=<?php echo $user->data['user_id'] ?>">Profile</a>
                                    </li>
                                    <li>
                                        <a href="http://127.0.0.1:80/ucp.php?i=pm&folder=inbox">Inbox</a>
                                    </li>
                                    <li>
                                        <a href="../../php/handle_logout.php">Logout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </section>
                </nav>
            </div>
        </div>
        <div class="split">
            <br>
        </div>
        <h1>Welcome to your first Tutorial on Javascript</h1>
        <div class="split">
            <br>
        </div>
        <article>
            In this chapter you will learn the basics on how Javascript interacts with your browser.<br>
            You will need nothing else besides your browser, a cup of coffee and your brain ... Well a working mouse and keyboard would be handy,too ;-)
            Without further explanation, let's jump in our first little program: Hello World.
        </article>
        <div class="split">
            <br>
        </div>
        <article>
            <h3>Like seen so many times ... "Hello world!" or how can I include JavaScript</h3>
            As seen in other programming tutorials, your first lines of code will greet you with an alert window in your browser saying "Hello World".
            To do so we use a little function called <span class="impor">alert()</span>. This function works in nearly all Browsers and creates a popup with a given text. <br>
            To use this function you can type the JavaScript-code within a script-html tag:<br><br>

            <div class="panel">
                <p><img  height="15" width="15" hspace="20">
                    <span class="script">&lt;script&gt;</span>alert(<span class="string"> "STRING"</span>);<span class="script">&lt;&#47;script&gt;</span>
                </p>
            </div>
            <br>
            <div class="panel">
                <img src="../../img/bulb-146443_960_720.png" height="15" width="15" hspace="20"><span> The type attribut with <span class="impor"> type=text/javascript</span> inside the script tag is optional in html 5 but required in html 4.x .</span>
            </div>
            <br>
            The example below shows how you write the code. Fell free to play around with the Live Editor Example. <br><br>
            <div class="panel">
                <p><img src="../../img/bulb-146443_960_720.png" height="15" width="15" hspace="20"> Don't forget the semicolon after the closing bracket.</p>
            </div>
        </article>

        <div class="split">
            <br>
        </div>
        <div class="row">
            <div class="small-3 columns small-centered">
                <a  href="live_editor_chapter1_part1.php" target="_blank">
                    <div class="button primary round radius text-center expand">
                        Try It!
                    </div>
                </a>
            </div>
        </div>
        <div class="split">
            <br>
        </div>
        <article>
            <h3>A little less annoying - the write()-function</h3>
            There you go :D your first line of JS, and it wasn't that hard, or was it?<br>
            But this may be the line of code which can drive you insane on a webpage showing the cute little adds you do not wand to read.***img*** So is there a way showing something
            like this without a popup?<br>
            Another way to print something on a blank website is the <span class="impor">write()</span> function of the object <span class="impor">document</span>.<br>
            You can call the function with the "." (point-operator). Like you may already now the struktur to call a member function from an object is <span class="impor">"object.funkction()"</span> or with our new function within a script tag:<br><br>

            <div class="panel">
                <p><img  height="15" width="15" hspace="20">
                    <span class="script">&lt;script&gt;</span> document.<span class="string2">write</span>(<span class="string">"Hello World"</span>); <span class="script">&lt;&#47;script&gt;</span> <br>
                </p>
            </div>
            You can try it out on your own here:

        </article>
        <div class="split">
            <br>
        </div>
            <div class="row">
                  <div class="small-3 columns small-centered">
                      <a  href="live_editor_chapter1_part2.php" target="_blank">
                          <div class="button primary round radius text-center expand">
                              Try It!
                          </div>
                      </a>
                  </div>
              </div>
        <div class="split">
            <br>
        </div>
        <article>
            In the next chapter we are gonna have a closer look at some Data Types, Functions and Operations. <br>
            You can take on the next Chapter here or take a short Test, to see if you got everything right.
        </article>
        <div class="split">
            <br>
        </div>
            <div class="row">
                <div class="columns pagination-centered">
                    <ul class="button-group round ">
                        <li>
                            <a href="#" class="button secondary" >Test Knowledge</a>
                        </li>

                        <li>
                            <a href="../chapter2/tutorial_chapter2.php" class="button secondary">Next Chapter</a>
                        </li>
                    </ul>

                </div>
            </div>
        <footer class="row">
            <div class="large-12 columns">
                <hr>
                <div class="row">
                    <div class="large-6 columns">
                    </div>
                    <div class="large-6 columns">
                        <ul class="inline-list right">
                            <li>
                                <a href="../../impressum.php">Impressum</a>
                            </li>
                            <li>
                                <a href="#">Link 2</a>
                            </li>
                            <li>
                                <a href="#">Link 3</a>
                            </li>
                            <li>
                                <a href="#">Link 4</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>
<script>
    $(document).foundation();
    var doc = document.documentElement;
    doc.setAttribute('data-useragent', navigator.userAgent);
</script>
</body>
</html>
    <?php
}else{
    header('refresh:0,../../index.php');
}
?>
