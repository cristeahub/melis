<?
    $file_name = 'content.json';
    $content_raw = file_get_contents($file_name);
    $content_decoded = json_decode($content_raw, true);
    $items = $content_decoded['items'];
    $image = $content_decoded['image'];
    $skills = $content_decoded['skills'];
    $languages = $content_decoded['languages'];
    $contacts = $content_decoded['contacts'];
?>

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
    <a href="http://mel.is">melis</a> -> CV
</div>

<div class=content>

<h1 class=center>Christoffer Tønnessen</h1>
<div class=cvpdf>
    <a href=http://mel.is/cv/CV.pdf>Download a summary CV</a>
</div>

<div class=other>
    <div class=imgwrapper>
        <img src=<?=$image?>>
    </div>
    <div class=list>
        <h2>Contact</h2>
        <ul>
            <? foreach($contacts as $contact) { ?>
                <? if(strcmp($contact, "cristeahub")==0) { ?>
                    <li>Github: <a href=http://github.com/cristeahub><?=$contact?></a></li>
                <?} else {?>
                    <li><?=$contact?></li>
                <?}?>
            <?}?>
        </ul>
    </div>
    <div class=list>
        <h2>Skills</h2>
        <ul>
            <? foreach($skills as $skill) { ?>
                <li><?=$skill?></li>
            <?}?>
        </ul>
    </div>
    <div class=list>
        <h2>Languages</h2>
        <ul>
            <? foreach($languages as $language) { ?>
                <li><?=$language?></li>
            <?}?>
        </ul>
    </div>
</div>

<div class=text>

    <? foreach($items as $i) { ?>
        <div class=title>
            <?=$i['name']?>
        </div>

        <? foreach($i['items'] as $s) { ?>
            <div class=itemwrapper>
                <div class=year>
                    <?=$s['period']?>
                </div>
                <div class=infowrapper>
                    <? if(isset($s['link'])) { ?>
                        <a href=<?=$s['link']?>>
                    <?}?>
                    <h1><?=$s['title']?></h1>
                    <? if(isset($s['link'])) { ?>
                        </a>
                    <?}?>
                    <div class=info>
                        <?=$s['info']?>
                    </div>
                </div>
            </div>
        <?}?>

    <?}?>
</div>
</div>

</body>
</html>
