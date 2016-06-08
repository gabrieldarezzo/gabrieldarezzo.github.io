<?php

$files = glob("img/*.gif");

foreach($files as $file){
	//echo $files[$i] . "\n";
	echo "
			<li>
				<a href='site.com.br'>
					<img src='$file' />
				</a>
			</li>
		";
}

