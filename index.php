<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
	<title>Meme Generator</title>
</head>
<?php include 'nav.inc';?>
<script>
			function toggleMenu(arg){
				if(document.getElementById(arg).style.display=='block'){
					document.getElementById(arg).style.display='none';
				}
				else{
					document.getElementById(arg).style.display='block';
				}
				
			
			}
		</script>
 <body>
        <p>
            <textarea id="top-text"></textarea>
            Text size: <input type="range" id="top-text-size-input" min="0.05" max="0.25" value="0.15" step="0.01">
        </p>
        <p>
            <textarea id="bottom-text"></textarea>
            Text size: <input type="range" id="bottom-text-size-input" min="0.05" max="0.25" value="0.15" step="0.01">
        </p>
        <p>
            <input type="file" id="image-input" accept="image/*">
        </p>
        <p>
            <button id="generate-btn">Generate!</button>
        </p>
        <p>
            <canvas id="meme-canvas" title="Right click -> &quot;Save image as...&quot;"></canvas>
        </p>
        <script src="memegen.js"></script>
    </body>

</html>
