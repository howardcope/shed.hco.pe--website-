<?php include_once("shed_globals.php") ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
        <title>hco.pe | workshed</title>
        <style type="text/css">
                
	    body
	    {
		    font-family:courier;
		    font-size: 100%;
		    background-color:#fff;
	    }

	    div#main {width:100%; border:0px}
	    div#wrapper 
	    {
		    width:227px;
		    margin-left:auto; 
		    margin-right:auto; 
		    border:0px;
		    text-align:center;
		    margin-top: 40px;
	    }
	    
	    ul#menu
	    {
	    	list-style: none;
	    	
	    }
	    
	    ul#menu li
	    {
	    	xlist-stlye:none;
	    	xdisplay:inline;
	    	margin:4px:
	    	border:1px solid #666;
	    	
	    }
                
        </style>
    </head>
<body>
        <div id="main">
            <div id="wrapper">
                <ul id="menu">
		            <?php
		            	if (is_dir($webfileroot)) {
							if ($dh = opendir($webfileroot)) {
								while (($file = readdir($dh)) !== false) {
									//echo "filename: $file : filetype: " . filetype($dir . $file) . "\n";
									if (!preg_match($dotfile_pattern, $file) && is_dir($file)) {
										echo "<li><a href='$file'>{$file}</a></li>";
										
									}
								}
								closedir($dh);
							}
						}
		            ?>
                <ul>
            </div>
        </div>
    </body>
</html>
