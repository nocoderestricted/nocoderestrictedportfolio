<?php require_once( '../couch/cms.php' ); ?>
<cms:template title='File Uploader' />
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>File Upload</title>
    <meta name="description" content="{nocoderestricted} File Uploader">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<!--[if lt IE 8]>
	<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<link rel="icon" type="image/x-icon" href="favicon.ico">
	<meta name="author" content="Donte'Trumble">
    <!-- style -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,600,700,800,300' rel='stylesheet' type='text/css'>
</head>
<body class="">
<!-- Begin of yurlWrap -->
<div id="yurlWrap">
    <header class="">
        <nav id="nav">
            <div class="btn">
                <h1><a href="#"><span>N.C.R</span></br>nocoderestricted</a></h1>
                <div class="bg"></div>
            </div>
            <section>
                <ul>
                    <li><a href="#">Work</a></li>
                    <li><a href="#">Code Zone</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </section>
        </nav>
        <section id="slogan">
            <i class="fa fa-file fa-4x"></i>
            <h2 id="headSlogan">{nocoderestricted - files uploader} </h2>
            <p id="subSlogan">Meet / Code / Send. Opportunities are endless.</p>
        </section>
        

    </header>
    <section class="container">
        <form method="post" enctype="multipart/form-data" action="uploader-files.php" id="upload" class="upload">
            <input type="file" id="file"  name="file[]" title="hi" required multiple>
            <input type="submit" value="upload" name="submit" id="submit">

            <div class="bar">
                <span class="bar-fill" id="pb"><span class="bar-fill-text" id="pt"></span></span>
            </div>

            <div id="uploads" class="uploads">
                <h3>Uploaded file links will appear here.</h3>
            </div>
        </form>
    </section>
</div>
 <!-- End of yurlWrap -->
    
<!-- scripts -->
<script src="http://cdn.jsdelivr.net/jquery/1.11.1/jquery.js"></script>
<script type="text/javascript" src="script.js"></script>
<script>
    document.getElementById('submit').addEventListener("click", function(e){
        e.preventDefault();
        var f = document.getElementById('file'),
            pb = document.getElementById('pb'),
            pt = document.getElementById('pt');

        app.uploader({
            files: f,
            progressBar: pb,
            progressText: pt,
            processor: 'uploader-files.php',
            finished: function(data){
                var uploads = document.getElementById('uploads'),
                    succeeded = document.createElement('div'),
                    failed = document.createElement('div'),
                    anchor,
                    smessage = '<p class="failedYurl">Successful files uploaded. Click to preview!</p>',
                    span,
                    icon,
                    x;

                    if (data.failed.length) {
                        failed.innerHTML = '<p class="failedYurl">Unfortunately, the following failed: (var supported-extenstions = ["jpg, png, psd"] );</p>'
                    }
                    uploads.innerText = '';

                    for(x= 0; x < data.succeeded.length; x = x + 1){
                        anchor = document.createElement('a');
                        anchor.href = 'uploads/' + data.succeeded[x].file;
                        anchor.innerText = data.succeeded[x].name;
                        anchor.target = '_blank';
                        succeeded.appendChild(anchor);
                    }

                    for(x = 0; x < data.failed.length; x = x + 1){
                        span = document.createElement('span');
                        span.innerText= data.failed[x].name;

                        failed.appendChild(span);
                    }

                    uploads.appendChild(succeeded);
                    uploads.appendChild(failed);
            },
            error: function(){
                console.log("Not Working!");
            }
        });
    });

    
</script>
</body>
</html>

<?php COUCH::invoke(); ?>