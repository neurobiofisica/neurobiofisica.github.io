<?php
require_once('header.php'); ?>
    

<!-- Add jQuery library -->
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

<!-- Add mousewheel plugin (this is optional) -->
<script type="text/javascript" src="fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>

<!-- Add fancyBox -->
<link rel="stylesheet" href="fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
<script type="text/javascript" src="fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>

<!-- Optionally add helpers - button, thumbnail and/or media -->
<link rel="stylesheet" href="fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
<script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
<script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

<link rel="stylesheet" href="fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
<script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

    
<?php
require_once('vindex_general1.php'); ?>
	
    <div id="content">
      <h1>Pictures of our Lab</h1>
      
	<a title="Group meeting in October 2013" class="fancybox" rel="group" href="Fotos/2013-Reuniao.jpg"><img src="Fotos/2013-Reuniao.jpg" height='100px'/></a>
	<a title="Reynaldo in the Lab @ 2013" class="fancybox" rel="group" href="Fotos/photoreynaldo.jpg"><img src="Fotos/photoreynaldo.jpg" height='100px'/></a>
	<a title="2013" class="fancybox" rel="group" href="Fotos/2013-Reuniao.jpg"><img src="Fotos/2013-Reuniao.jpg" height='100px'/></a>
	<a title="Reynaldo in the Lab @ 2013" class="fancybox" rel="group" href="Fotos/photoreynaldo.jpg"><img src="Fotos/photoreynaldo.jpg" height='100px'/></a>
	<a title="2013" class="fancybox" rel="group" href="Fotos/2013-Reuniao.jpg"><img src="Fotos/2013-Reuniao.jpg" height='100px'/></a>
	<a title="Reynaldo in the Lab @ 2013" class="fancybox" rel="group" href="Fotos/photoreynaldo.jpg"><img src="Fotos/photoreynaldo.jpg" height='100px'/></a>
	<a title="2013" class="fancybox" rel="group" href="Fotos/2013-Reuniao.jpg"><img src="Fotos/2013-Reuniao.jpg" height='100px'/></a>
	<a title="Reynaldo in the Lab @ 2013" class="fancybox" rel="group" href="Fotos/photoreynaldo.jpg"><img src="Fotos/photoreynaldo.jpg" height='100px'/></a>
	<a title="2013" class="fancybox" rel="group" href="Fotos/2013-Reuniao.jpg"><img src="Fotos/2013-Reuniao.jpg" height='100px'/></a>
	
    </div>
<?php
require_once('footer.php'); ?>
<script type="text/javascript">
	$(document).ready(function() {
		$(".fancybox").fancybox();
	});
</script>