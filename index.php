<?
    $file_name = 'content.json';
    $content_raw  = file_get_contents($file_name);
    $content_decoded = json_decode($content_raw, true);
    $items = $content_decoded['items'];
    $intro = $content_decoded['intro'];
    $outtro = $content_decoded['outtro'];
?>

<html>
<head>
<meta charset=utf-8>
<meta content="width=device-width, initial-scale=1.0, minimum-scale=1,0, maximum-scale=1.0" name="viewport">
<title>Christoffer Tønnesen</title>
<link rel=stylesheet href=style.css>
<link rel=stylesheet href=//cdnjs.cloudflare.com/ajax/libs/normalize/2.1.0/normalize.css>
<link rel=stylesheet href=//cdnjs.cloudflare.com/ajax/libs/font-awesome/3.2.1/css/font-awesome.min.css>
</head>
<body>

<div class=header>
<h1><a href=/>melis</a></h1>
<h2>Christoffer Tønnessen</h2>
</div>

<div class=section-divider>
<div class=section-divider-title>
<?=$intro?>
</div>
</div>
<div class=content>
<? foreach($items as $i) { ?>
<div class=item>
<a href=<?=$i['link']?>>
<img src=<?=$i['image']?>>
<h1><?=$i['title']?></h1>
</a>
<div class=description>
<?=$i['description']?>
</div>
</div>
<?}?>
</div>

<div class=section-divider>
<div class=section-divider-title>
<?=$outtro?>
</div>
</div>
<div class=footer>
<div class=social-icons>
<a href=http://facebook.com/chrisfjes class=icon-facebook></a>
<a href=http://twitter.com/cristeatweet class=icon-twitter></a>
<a href=http://github.com/cristeahub class=icon-github-alt></a>
<a href=http://no.linkedin.com/in/chrislinked class=icon-linkedin></a>
<a href=http://instagram.com/cristeagram class=icon-instagram></a>
<a href=http://plus.google.com/100967783214171909833 class=icon-google-plus-sign></a>
</div>
</div>

</body>
</html>
