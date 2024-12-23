<?php 
include '/var/www/services/utils.php';
ob_start();
include '/var/www/services/header';
?>

<?php
$service='ServiceTemplate-0.0';
$service_keywords='';
$service_description='Template for services';
$service_status='active';
$service_label='Bioinformatic Services';
$header=ob_get_contents();
$header=do_SEO($header, $service, $service_keywords, $service_status, $service_label, $service_description);
ob_end_clean();
print $header;
ob_start();
?>

<script type="text/javascript" src="/js/site.js"></script>
<?php include '/var/www/services/correspondence.php';?>
<style>
#bioinformatics_service_parent_container {width: 960px !important}
</style>
<h1>Service Template - 0.0</h1>
<h3>Template for services</h3>
<p> This is an example of a service header describing the function and important information regarding the service.</p>

<div class='servicetab'>
  <button id='servicedefaultOpen' class='servicetablink' tabid='servicetabs-1'>Submission</button>
  <button class='servicetablink' tabid='servicetabs-2'>Instructions</button>
  <button class='servicetablink' tabid='servicetabs-3'>Output format</button>
  <button class='servicetablink' tabid='servicetabs-4'>Abstract</button>
  <button class='servicetablink' tabid='servicetabs-5'>Training and Evaluation Data</button>
  <button class='servicetablink' tabid='servicetabs-6'>Versions</button>
  <button class='servicetablink' tabid='servicetabs-9'>Download</button>
</div>
<div class='serviceframes'>
  <div id='servicetabs-1' style='overflow:auto;' class='servicetabcontent'>
<h2>Submission</h2>
<hr>
<form enctype="multipart/form-data" action="/cgi-bin/webface2.cgi" method="POST">
<input type="hidden" name="configfile" value="/var/www/services/services/ServiceTemplate-0.0/webface.cf">
<table width="100%" class="noborder">
<tr>
  <td><h3>Sorry, this service has not been implemented yet</h3></td>
</tr>
<tr>
  <td valign=top>
  <p>
  <input type="reset" value="Clear fields">
  <input type="submit" value="Send file">
  </td>
</tr>
</table>

</form>

</div>
  <div id='servicetabs-2' style='overflow:auto;' class='servicetabcontent'>
<h2>Instructions</h2>
<hr>
Lorem ipsum dolor sit amet, consectetur adipiscing elit:
<ol>
<li> Suspendisse facilisis nisi sem, at rutrum leo congue ut.</li>
<li> Aliquam erat volutpat. </li>
<li>Press the "Send file" button.</li>
<li>A WWW page will return the results as the prediction finishes. Response time depends on system load.</li>
</ol>

</div>
  <div id='servicetabs-3' style='overflow:auto;' class='servicetabcontent'>
<h2>Output format</h2>
<hr>
<br>
<p>
Donec venenatis, augue non ultricies imperdiet, sapien nulla lobortis justo, a pharetra odio nunc et mi. Donec placerat a turpis vitae posuere. Sed quis nibh facilisis, dapibus tortor ut, scelerisque tellus. Phasellus dui augue, molestie a ex ac, rhoncus facilisis dolor. Donec sit amet ligula orci. Sed rhoncus malesuada dui, a porta sapien dignissim non. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer ac est ac nulla convallis rhoncus non convallis mauris. Phasellus eleifend erat ut magna hendrerit suscipit.
</p>


</div>
  <div id='servicetabs-4' style='overflow:auto;' class='servicetabcontent'>
<h2>References</h2>
<hr>

<p><div class="reference">
<span class="title">Lorem Ipsum dolor sit amet</span>
<span class="authors">A.N. Onymus, S.O. Else and G. Odd</span>,
<span class="journal">Nucleic Acids Research</span>, 2042, Vol. 42, No. 69, 1234-1235.
</div></p>

<div class="abstract">
<h3>Abstract</h3>

<p><span class="text">
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse facilisis nisi sem, at rutrum leo congue ut. Aliquam erat volutpat. Nulla vel lorem molestie, consequat justo porta, convallis ipsum. Pellentesque fermentum elit ultrices, feugiat odio a, faucibus sem. Praesent sollicitudin tempor leo cursus efficitur. Nulla facilisi. Curabitur euismod rhoncus dui sit amet semper. Etiam fermentum mattis orci a dictum. Donec auctor risus felis, sit amet mattis massa pulvinar non. Phasellus imperdiet, arcu a aliquam semper, ex diam aliquet turpis, eu imperdiet dolor velit vitae est. Praesent viverra arcu mollis tellus semper, nec volutpat ex cursus. Suspendisse et augue pulvinar, dignissim enim non, commodo felis. Aenean ut placerat elit. Mauris consectetur metus vitae semper rutrum. Nullam posuere condimentum leo, at placerat felis rutrum id.
</span></p>

</div>

</div>
  <div id='servicetabs-5' style='overflow:auto;' class='servicetabcontent'>

</div>
  <div id='servicetabs-6' style='overflow:auto;' class='servicetabcontent'>

</div>
  <div id='servicetabs-9' style='overflow:auto;' class='servicetabcontent'>
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

</div>
</div>
<br><?php standard_foot("Getting Help","('Correspondence','Jens Hansen','jens@hansen.com'),('Technical Support','Support','health-master@dtu.dk')"); ?>
</div>
<?php
  $wholepage=ob_get_contents();
  ob_end_clean(); 
  print $wholepage;
?>
<?php include '/var/www/services/footer';?>

