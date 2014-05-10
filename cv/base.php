<?php
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
        <img src=<?php echo $image?>>
    </div>
    <div class=list>
        <h2>Contact</h2>
        <ul>
            <?php foreach($contacts as $contact) { ?>
                <?php if(strcmp($contact, "cristeahub")==0) { ?>
                    <li>Github: <a href=http://github.com/cristeahub><?php echo $contact?></a></li>
                <?} else {?>
                    <li><?php echo $contact?></li>
                <?php }?>
            <?php }?>
        </ul>
    </div>
    <div class=list>
        <h2>Skills</h2>
        <ul>
            <?php foreach($skills as $skill) { ?>
                <li><?php echo $skill?></li>
            <?php }?>
        </ul>
    </div>
    <div class=list>
        <h2>Languages</h2>
        <ul>
            <?php foreach($languages as $language) { ?>
                <li><?php echo $language?></li>
            <?php }?>
        </ul>
    </div>
</div>

<div class=text>

    <?php foreach($items as $i) { ?>
        <div class=title>
            <?php echo $i['name']?>
        </div>

        <?php foreach($i['items'] as $s) { ?>
            <div class=itemwrapper>
                <div class=year>
                    <?php echo $s['period']?>
                </div>
                <div class=infowrapper>
                    <?php if(isset($s['link'])) { ?>
                        <a href=<?php echo $s['link']?>>
                    <?php }?>
                    <h1><?php echo $s['title']?></h1>
                    <?php if(isset($s['link'])) { ?>
                        </a>
                    <?php }?>
                    <div class=info>
                        <?php echo $s['info']?>
                    </div>
                </div>
            </div>
        <?php }?>

    <?php }?>
</div>
</div>

</body>
</html>
