<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <title>is *insert nzb service* up??</title>
    <link rel="stylesheet" type="text/css" href="bs.css">
    <link href="style.css" rel="stylesheet" type="text/css">
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script async defer src="script.js"></script>
</head>

<body>

    <div class="container">
        <h1>Is *insert nzb service* up?</h1>
        <h5>Last updated at <span id="updated"></span></h5> <br />

        <div id="loadingmsg" style="text-align: center;">
            <br />

            <h1>Loading..</h1>        

            <br /><br />

            <h5>If the site appears to be loading for a while, site status is being updated.</h5>    
        </div>

        <div id="sites" style="display: none;">

            <h3>Indexers</h3> <br>
            <div id="indexers">
            </div>

            <h3>Usenet Service Providers</h3> <br>
            <div id="newsgroups">
            </div>

        </div>
    </div>

</body>
</html>