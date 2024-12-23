<?php
# Configuration
$packagedir = '/var/www/packages';
$licensefile = $packagedir . '/auto/licence.txt';

# Step 1, is there anything to download?
#$cwd = getcwd();
#$downloadinfo = downloadable($cwd);
$downloadinfo = downloadable(__DIR__);
# find brother folders



if ($downloadinfo == '') {
    print "<h3>This service offers no downloadable software</h3>";
    print '<a href="/softwarelist.php">See a list of available software</a>';
}

# Step 3 show license


# Functions

function downloadable ($folder) {
    global $packagedir;
    # What does config say?
    if (! file_exists($folder . '/config.info'))
        return '';
    $config = file_get_contents($folder . '/config.info');
    preg_match('/^\s*DOWNLOAD\s*:\s*(\w+)\b/m', $config, $matches);
    if (count($matches) == 0)
        return '';
    if (strtolower($matches[1]) != 'yes')
        return '';
    # Config says there is something to download, find it
    # First get name and version
    preg_match('/^\s*NAME\s*:\s*([\-\w]+)\b/m', $config, $matches);
    if (count($matches) == 0)
        return '';
    $name = $matches[1];
    preg_match('/^\s*VERSION\s*:\s*([\.\-\w]+)\b/m', $config, $matches);
    $version = '';
    if (count($matches) > 0)
        $version = $matches[1];
    # Find path
    $matches = glob($packagedir . "/*", GLOB_ONLYDIR);
    $path = '';
    foreach ($matches as $dir) {
        if (strtolower($dir) == strtolower($packagedir . '/' . $name))
            $path =  $dir;
    }
    if ($path == '')
        return '';
    if ($version != '')
        $path .= '/' . $version;
    if (file_exists($path))
        return [$path, $name, $version];
    return '';
}
?>
