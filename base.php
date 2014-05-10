<?php
    $file_name = 'content.json';
    $content_raw  = file_get_contents($file_name);
    $content_decoded = json_decode($content_raw, true);
    $items = $content_decoded['items'];
    $projects = $content_decoded['projects'];
    $contact = $content_decoded['contact'];
    $cv = $content_decoded['cv'];
?>
<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8>
<meta content="width=device-width, initial-scale=1.0, minimum-scale=1,0, maximum-scale=1.0" name="viewport">
<title>Christoffer Tønnessen</title>
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
<?php echo $contact?>
</div>
</div>
<div class=contact>
<div class=social-icons>
<a href=http://facebook.com/chrisfjes class=icon-facebook></a>
<a href=http://twitter.com/cristeatweet class=icon-twitter></a>
<a href=http://github.com/cristeahub class=icon-github-alt></a>
<a href=http://no.linkedin.com/in/chrislinked class=icon-linkedin></a>
<a href=http://instagram.com/cristeagram class=icon-instagram></a>
<a href=http://plus.google.com/100967783214171909833 class=icon-google-plus-sign></a>
</div>
</div>

<div class=section-divider>
<div class=section-divider-title>
CV
</div>
</div>
<div class="item center">
<a href=<?php echo $cv['link']?>><img src=<?php echo $cv['image']?>></a>
</div>

<div class=section-divider>
<div class=section-divider-title>
<?php echo $projects?>
</div>
</div>
<div class=content>
<?php foreach($items as $i) { ?>
<div class=item>
<a href=<?php echo $i['link']?>>
<img src=<?php echo $i['image']?>>
<h1><?php echo $i['title']?></h1>
</a>
<div class=description>
<?php echo $i['description']?>
</div>
</div>
<?php }?>
</div>

</body>
</html>
