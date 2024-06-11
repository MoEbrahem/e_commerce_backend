);
		while (!feof($datei)) {
			$zeile = fgets($datei, 255);
			if ( $zeile == "usbstick = 1" ) {
        echo "  USB stick installation found! Using relative paths by default ($nonpartition).";
          $dirpartwampp=$nonpartition;
          $usbstick="1";
          $partwampp=$nonpartition;
        //exit;
      }
			$sysroot[] = $zeile;
			$i += 1;
		}
		fclose($datei);

		$sysroot[2] = str_replace('perl', 'server', $sysroot[2]); // Fix by Wiedmann
		file_put_contents($installsysroot, implode('', $sysroot));

		list($left, $right) = preg_split ("/ = /", $sysroot[0]);
		$right = preg_replace ("/\r\n/i", "", $right);
		if (strtolower($partwampp) == strtolower($right)) {
			$xamppinstaller = "nothingtodo";
		} else {
			$xamppinstaller = "newpath";
			$substit = preg_replace ("/\\\\/i", "\\\\\\\\\\\\\\\\", $right);
			$doublesubstit = preg_replace ("/\\\\/i", "\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\", $right);
			$substitslash = preg_replace("/\\\\/i", "/", $right);
		}
	} else {
		$installsys = fopen($installsysroot, 'w');
		if ( $usbstick == "1" ) {
		$wamppinfo = "DIR = $nonpartition\r\nxampp = $xamppversion\r\nserver = 0\r\nperl = 0\r\npython = 0\r\nutils = 0\r\njava = 0\r\nother = 0\r\nusbstick = $usbstick";
		} else {
    $wamppinfo = "DIR = $partwampp\r\nxampp = $xamppversion\r\nserver = 0\r\nperl = 0\r\npython = 0\r\nutils = 0\r\njava = 0\r\nother = 0\r\nusbstick = $usbstick";
    }
    fputs($installsys, $wamppinfo);
		fclose($installsys);
		$xamppinstaller = "newinstall";
	}

	/// Find some *update.sys files and modify the install.sys ...
	$path = $partwampp."\install\\";
	$hdl = opendir($path);
	while ($res = readdir($hdl)) { //Searching all xampp sys files
		$array[]