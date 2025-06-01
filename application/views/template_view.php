<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KIT TEAM</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Kreon" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="/css/style.css" />

</head>

<body>
    <div id="wrapper">
        <div id="header">
            <div id="logo">
                <a href="/">KIT</span> <span class="cms">TEAM</span></a>
            </div>
            <div id="menu">
                <ul>
                    <li class="first active"><a href="/">Home</a></li>
                    <li><a href="/services">Services</a></li>
                    <li><a href="/portfolio">Portfolio</a></li>
                    <li class="last"><a href="/contacts">Contacts</a></li>
                </ul>
                <br class="clearfix" />
            </div>
        </div>
        <div id="page">
            <div id="sidebar">
                <div class="side-box">
                    <h3>Random Quote</h3>
                    <p class="quote">
                        "A website, like a living organism, changes and develops.
                        You can't just write an ideal version and call it a day - that's a utopia"
                    </p>
                    <p class="quote">
                        "Everything should be very simple, like a text file, and at the same time functional
                        and then users will leave us"
                    </p>
                    <p class="quote">
                        "Criticism is when the critic explains to the author how he would do it if he could."
                    </p>
                    <p class="quote">
                        "He who tries to understand this crazy world becomes crazy"
                    </p>
                    <p class="quote">
                        "An experienced developer knows which choice leads to the set goal, while a beginner takes a
                        step into the unknown every time"
                    </p>
                </div>
                <div class="side-box">
                    <h3>Main menu</h3>
                    <ul class="list">
                        <li class="first "><a href="/">Home</a></li>
                        <li><a href="/services">Servicesги</a></li>
                        <li><a href="/portfolio">Portfolio</a></li>
                        <li class="last"><a href="/contacts">Contacts</a></li>
                    </ul>
                </div>
            </div>
            <div id="content">
                <div class="box">
                    <?php include 'application/views/' . $content_view; ?>
                </div>
                <br class="clearfix" />
            </div>
            <br class="clearfix" />
        </div>
        <div id="page-bottom">
            <div id="page-bottom-sidebar">
                <h3>Contacts</h3>
                <ul class="list">
                    <li class="first">tel: 199199538</li>
                    <li>insta: kitit</li>
                    <li class="last">email: kitit@gmail.com</li>
                </ul>
            </div>
            <div id="page-bottom-content">
                <h3>About the Company</h3>
                <p>
                    This is the house that Jack built.
                    This is the malt that lay in the house that Jack built.
                    This is the rat that ate the malt
                    That lay in the house that Jack built.
                    This is the cat that killed the rat
                    That ate the malt that lay in the house that Jack built.

                </p>
            </div>
            <br class="clearfix" />
        </div>
    </div>
    <div id="footer">
        <a href="/">KIT TEAM</a> &copy; 2024</a>
    </div>
    <script src="/js/jquery-1.6.2.js" type="text/javascript"></script>
    <script type="text/javascript">
    // return a random integer between 0 and number
    function random(number) {
        return Math.floor(Math.random() * (number + 1));
    };

    // show random quote
    $(document).ready(function() {
        let quotes = $('.quote');
        quotes.hide();
        let qlen = quotes.length; //document.write( random(qlen-1) );
        $('.quote:eq(' + random(qlen - 1) + ')').show(); //tag:eq(1)
    });
    </script>
</body>

</html>