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
    <title> <?php echo "Chapter 3 for " . $user->data['username']; ?> </title>
</head>
<body>
<div class="row">
    <div class="large-12 columns">
        <div class="row">
            <div class="large-12 columns">
                <nav class="top-bar" data-topbar>
                    <ul class="title-area">
                        <li class="name">
                            <h1><a href="user.php">Learn JavaScript within minutes</a></h1>
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
        <h1>Javascript operators</h1>
        <div class="split">
            <br>
        </div>
        <article>
            Now we are starting to make some stuff with the number type we've learned. We can assign a value to a variable but maybe we want to to modify this variable. without further ado, let's get started!

            <h3>What we have to play around</h3>

            <table style="width:30%">
                <tr>
                    <th>Operator</th>
                    <th>Description</th>
                </tr>
                <tr>
                    <td>+</td>
                    <td>Addition</td>
                </tr>
                <tr>
                    <td>-</td>
                    <td>Subtraction</td>
                </tr>
                <tr>
                    <td>*</td>
                    <td>Multiplication</td>
                </tr>
                <tr>
                    <td>/</td>
                    <td>Division</td>
                </tr>
                <tr>
                    <td>%</td>
                    <td>Modulus</td>
                </tr>
                <tr>
                    <td>++</td>
                    <td>Increment</td>
                </tr>
                <tr>
                    <td>--</td>
                    <td>Decrement</td>
                </tr>
            </table>
            If you haven't sleep the whole class 1-4 in your school time, you possibly can guess the first four operators. The last three are a little bit more tricky.
            <article>
            <h3>Modulus or thou shall have the rest</h3>
            At fist, there were only whole numbers and than there was the little point (or in germany comma) which made things complicated. Guess you had slept very well in school and can't remember how division works. You can still divide 6/2 because this is equal to 3. But if you try to divide 7 by 2, you can only divide 6/2 and don't know what to do with the remaining one. That's pretty much the modulus operator. It tries how much it can divide the whole numbers and gives you back the rest.

            CODE GOES HERE
            </article>
            <article>
                <h3>Increment and decrement or up and down</h3>
                Well, coding is much about loops which we discuss later. Loops need a counter and this is where these two operators enter the scene. You'll need a lot of operators. That means you will type this line of code a lot. Programmers are lazy and instead of typing x = x + 1 you simply type x++. Of course you have to first initialise x ;)
                The same is possible with decrementing a variable. Instead of x = x - x you can simply write x--.
                These two operators can be used on the right of a variable as well as on the left of it. In programming we call it "right associative" and "left associative".
                In small Programs it has no effect where you put these operators but on advanced loops you can get into a situation where you have to increment a variable before a loop is finished. But at first have a look at this example and try to play around a little bit.

                CODE GOES HERE

            </article>
            <h3>When the assignment with the operator</h3>
            There can be times when adding or subtracting 1 isn't enough any more. Maybe you want to at 2 every round or even multiply with 2. In this case of emergency there is a whole bundle of assignment operator combinations which makes your life a little bit easier.

            <table style="width:50%">
                <tr>
                    <th>Operator</th>
                    <th>Example</th>
                    <th>Equal to</th>
                </tr>
                <tr>
                    <td>=</td>
                    <td>x=y</td>
                    <td>x=y</td>
                </tr>
                <tr>
                    <td>+=</td>
                    <td>x+=y</td>
                    <td>x=x+y</td>
                </tr>
                <tr>
                    <td>-=</td>
                    <td>x-=y</td>
                    <td>x=x-y</td>
                </tr>
                <tr>
                    <td>*=</td>
                    <td>x*=y</td>
                    <td>x=x*y</td>
                </tr>
                <tr>
                    <td>/=</td>
                    <td>x/=y</td>
                    <td>x=x/y</td>
                </tr>
                <tr>
                    <td>%=</td>
                    <td>x%=y</td>
                    <td>x=x%y</td>
                </tr>
            </table>

            <article>
                <h3>String Operators</h3>
                The + and the += operator can also be used with strings. You can concatenate two different Strings with this operator.
                <br>
                CODE GOES HERE
            </article>

            <article>
                <h3>Strings, Numbers and the + Operator</h3>
                If you use the + and the += operator between string an number variable things doesn't turn out as you might expect.
                <br>
                CODE GOES HERE
                <br>
                If you want to use a number which is saved as a string type you have to typecast the variable first.
                <br>
                CODE GOES HERE

            </article>
            <article>
                <h3>Comparison and Logical Operators</h3>
                If you want to test two variables you have to use the caparison and logical operators.

                <table style="70%">
                    <tr>
                        <th>Operator</th>
                        <th>Description</th>
                    </tr>
                    <tr>
                        <td>==</td>
                        <td>equal to</td>
                    </tr>
                    <tr>
                        <td>===</td>
                        <td>equal value and equal type</td>
                    </tr>
                    <tr>
                        <td>!=</td>
                        <td>not equal</td>
                    </tr>
                    <tr>
                        <td>></td>
                        <td>greater than</td>
                    </tr>
                    <tr>
                        <td><</td>
                        <td>less than</td>
                    </tr>
                    <tr>
                        <td>>=</td>
                        <td>greater than or equal to</td>
                    </tr>
                    <tr>
                        <td><=</td>
                        <td>less than or equal to</td>
                    </tr>
                    <tr>
                        <td>?</td>
                        <td>ternary operator</td>
                    </tr>
                </table>

                This is a whole bunch of new fun stuff and enough for this chapter.
            </article>

            <article>
                <h3>Coming soon ...</h3>
                We will play around with the logical operators and a construct called loops. Like the name suggest they are structures which allows you to redo a similar task again and again.
            </article>

        </article>
        <footer class="row">
            <div class="large-12 columns">
                <hr>
                <div class="row">
                    <div class="large-6 columns">
                    </div>
                    <div class="large-6 columns">
                        <ul class="inline-list right">
                            <li>
                                <a href="#">Link 1</a>
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