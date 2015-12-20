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
    <script>document.title = "Javascript Tutorial Two for " + (getCoockieValue("username"))</script>
</head>
<body>
<div class="row">
    <div class="large-12 columns">
        <div class="row">
            <div class="large-12 columns">
                <nav class="top-bar" data-topbar>
                    <ul class="title-area">
                        <li class="name">
                            <h1><a href="../../user.html">Learn JavaScript within minutes</a></h1>
                        </li>
                        <li class="toggle-topbar menu-icon">
                            <a href="#"><span>menu</span></a>
                        </li>
                    </ul>
                    <section class="top-bar-section">
                        <ul class="right">
                            <li class="divider"></li>
                            <li class="has-dropdown">
                                <a href="#">Main Item 1</a>
                                <ul class="dropdown">
                                    <li><label>Section Name</label></li>
                                    <li class="has-dropdown">
                                        <a class="" href="#">Has Dropdown, Level 1</a>
                                        <ul class="dropdown">
                                            <li>
                                                <a href="#">Dropdown Options</a>
                                            </li>
                                            <li>
                                                <a href="#">Dropdown Options</a>
                                            </li>
                                            <li>
                                                <a href="#">Level 2</a>
                                            </li>
                                            <li>
                                                <a href="#">Subdropdown Option</a>
                                            </li>
                                            <li>
                                                <a href="#">Subdropdown Option</a>
                                            </li>
                                            <li>
                                                <a href="#">Subdropdown Option</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Dropdown Option</a>
                                    </li>
                                    <li>
                                        <a href="#">Dropdown Option</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li><label>Section Name</label></li>
                                    <li>
                                        <a href="#">Dropdown Option</a>
                                    </li>
                                    <li>
                                        <a href="#">Dropdown Option</a>
                                    </li>
                                    <li>
                                        <a href="#">Dropdown Option</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="#">See all →</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">Main Item 2</a>
                            </li>
                            <li class="divider"></li>
                            <li class="has-dropdown">
                                <a href="#">Main Item 3</a>
                                <ul class="dropdown">
                                    <li>
                                        <a href="#">Dropdown Option</a>
                                    </li>
                                    <li>
                                        <a href="#">Dropdown Option</a>
                                    </li>
                                    <li>
                                        <a href="#">Dropdown Option</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="#">See all →</a>
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
            Now we are starting to make some stuff with the number type we've learn. We can assign a value to a variable but maybe we want to to modify this variable. No long words and starting manipulating numbers wa are jumping in the water.

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
            At fist, there were only whole numbers and than there was the little point (or in germany comma) which made things complicated. Guess you had slept very well in school and can't remember how division works. You can still divide 6/2 because this is equal to 3. But if you try to divide 7 you can only divide 6/2 but don't know what to do with the remaining one. That's pretty much the modulus operator. It tries how much it can divide the whole numbers and gives you back the rest.

            CODE GOES HERE
            </article>
            <article>
                <h3>Increment and decrement or up and down</h3>
                Well, coding is much about loops which we discuss later. Loops need a counter and this is where these two operators enter the scene. You'll need a lot of operators. That means you will type this line of code a lot. Programmers are lazy and instead of typing x = x + 1 you simply type x++. Of course you first initialise x ;)

                CODE GOES HERE

            </article>
            <h3>When the assignment with the operator</h3>
            There can be times when adding or subtracting 1 isn't enough any more. Maybe you want to at 2 every round or even multiply with 2. In this case of emergency there is a whole bunlde of assignment operator combinations which makes your life a little bit easier.

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
            </article>

            <article>
                <h3>Strings, Numbers and the + Operator</h3>
            </article>
            <article>
                <h3>Comparison and Logical Operators</h3>
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