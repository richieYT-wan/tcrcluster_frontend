<?php 
include '/var/www/services/utils.php';
ob_start();
include '/var/www/services/header';
?>

<?php
$service='TCRcluster-1.0';
$service_keywords='';
$service_description='Latent embeddings of TCR sequences and agglomerative clustering';
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
<h1>TCRcluster - 1.0</h1>
<h3>Latent embeddings of TCR sequences and agglomerative clustering</h3>
<p>TCRcluster is a variational autoencoder and agglomerative clustering pipeline. It clusters TCRs together based on latent cosine distances extracted with a VAE.</p>

<div class='servicetab'>
  <button id='servicedefaultOpen' class='servicetablink' tabid='servicetabs-1'>Submission</button>
  <button class='servicetablink' tabid='servicetabs-2'>Instructions</button>
  <button class='servicetablink' tabid='servicetabs-4'>Abstract</button>
</div>
<div class='serviceframes'>
  <div id='servicetabs-1' style='overflow:auto;' class='servicetabcontent'>
<script>
  function myFile() {
    var x = document.getElementById("uploadfile").value;
    if (x){
      document.getElementById("fastafileinfo").innerHTML = document.getElementById("uploadfile").files[0].name;
    }else{
      document.getElementById("fastafileinfo").innerHTML = null;
    }

    }

    function with_label_sample(){
      var seq="DRGSQS,IYSNGD,AVGMNNDMR,LNHDA,SQIVND,ASSTGGLAGEQY,ELAGIGILTV\nDRGSQS,IYSNGD,AVPSGNTPLV,SNHLY,FYNNEI,ASSEYGGGVAGELF,ELAGIGILTV\nDRGSQS,IYSNGD,ALGGGGADGLT,MNHEY,SMNVEV,ASSFSSNNEQF,ELAGIGILTV\nDRGSQS,IYSNGD,AVNSGNQFY,MNHEY,SMNVEV,ASRPTGMGQPQH,ELAGIGILTV\nSVFSS,VVTGGEV,AIPQKAAGNKLT,MDHEN,SYDVKM,ASSFPQFVTGLPEAF,ELAGIGILTV\nNSMFDY,ISSIKDK,AASAFLGGSEKLV,LNHNV,YYDKDF,ATSERGDLNFGTDTQY,GILGFVFTL\nNSASDY,IRSNMDK,AENEGGGSQGNLI,LNHDA,SQIVND,ASSLYASYEQY,GILGFVFTL\nSVFSS,VVTGGEV,AGGGDGGSQGNLI,LNHDA,SQIVND,ASSIRSGVEQY,GILGFVFTL\nSVFSS,VVTGGEV,AGGRHSGGGADGLT,MNHNY,SVGAGI,ASSYSRPGLSNQPQH,GILGFVFTL\nTSESDYY,QEAYKQQN,AYRADSNYQLI,MNHEY,SVGAGI,ASSYNVRDGDYGYT,GILGFVFTL\nDSASNY,IRSNVGE,AAKEGYSTLT,SGHNS,FNNNVP,ASSFSGNTGELF,RAKFKQLL\nDSASNY,IRSNVGE,AASETSYDKVI,MNHEY,SVGAGI,ASSPIPGLQPSEQAETQY,RAKFKQLL\nDSASNY,IRSNVGE,AASETSYDKVI,SEHNR,FQNEAQ,ASSLAGSYEQY,RAKFKQLL\nYGATPY,YFSGDTLV,AVTRDDKII,SGHDT,YYEEEE,ASSLRDGSEAF,RAKFKQLL\nNSASQS,VYSSG,VVNIDNARLM,SQVTM,ANQGSEA,SVGQGPYEQY,RAKFKQLL\nNSASQS,VYSSG,VVNNNNDMR,SGHNS,FNNNVP,ASGEANTGELF,YLQPRTFLL\nNSASQS,VYSSG,VVNRDDKII,SGHVS,FQNEAQ,ASSDSYGYT,YLQPRTFLL\nNSASQS,VYSSG,VVNIPQAGTALI,DFQATT,SNEGSKA,SARGLAEANTGELF,YLQPRTFLL\nNSASQS,VYSSG,VVNGADKII,SEHNR,FQNEAQ,ASSPDIEAF,YLQPRTFLL\nYSGSPE,HISR,ALSYSSASKII,MDHEN,SYDVKM,ASSTMVGGKGEKLF,YLQPRTFLL"

      document.getElementById('fasta').value=seq
      document.getElementById('sd3').checked=true

    }

    function no_label_sample(){

      var seq="DRGSQS,IYSNGD,ALGGGGADGLT,MNHEY,SMNVEV,ASSFSSNNEQF\nDRGSQS,IYSNGD,AVQGSTLT,MGHRA,YSYEKL,ASSQGGLTGEGYT\nDRGSQS,IYSNGD,AVSNNNDMR,MGHRA,YSYEKL,ASSQDRWLSGQPQH\nDRGSQS,IYSNGD,AAPGGATNKLI,MNHEY,SVGAGI,ASSYSTPSWTDTQY\nYGGTVN,YFSGDPLV,AVPNTNAGKST,SGHNT,YYREEE,ASTLRGTGVETQY\nTTLSN,LVKSGEV,AGSPIYNQGGKLI,LGHNA,YSLEER,ASSQEWGINEKLF\nTSGFNG,NVLDGL,AVSDSNYQLI,LNHDA,SQIVND,ASSIYSNQPQH\nYSGSPE,HISR,ALRVMNRDDKII,LNHDA,SQIVND,ASSTKDGGTGELF\nTSENNYY,QEAYKQQN,AFMTNAGGTSYGKLT,PRHDT,FYEKMQ,ASSLMRGGTYNSPLH\nDSSSTY,IFSNMDM,AERVTGGGNKLT,MGHRA,YSYEKL,ASSQDPGDEQF\nVSPFSN,MTFSENT,VGYTNAGKST,SGHTA,FQGNSA,ASSLVVVNTEAF\nYGATPY,YFSGDTLV,AVGTARLM,MNHEY,SMNVEV,ASSLPGTGGSPLH\nDSASNY,IRSNVGE,AAMETSYDKVI,MNHEY,SVGEGT,ASGMTGLTSEQY\nKALYS,LLKGGEQ,GTRYISFTGGGNKLT,SGHNS,FNNNVP,ASSFSGNTGELF\nDSASNY,IRSNVGE,AASEGAPDKLI,SGHVS,FNYEAQ,ASSFQGLVSSYNEQF\nTSGFNG,NVLDGL,AVMDSNYQLI,DFQATT,SNEGSKA,SARVLTSGETYEQY\nNSASQS,VYSSG,VVNRDDKII,SGHVS,FQNEAQ,ASSDSYGYT\nSSYSPS,YTSAATLV,VVSDPDTGTYKYI,SNHLY,FYNNEI,ASRDRGNYYGYT\nATGYPS,ATKADDK,ALRRGATDSWGKLQ,SGHVS,FQNEAQ,ASSDQNTGELF\nTSINN,IRSNERE,ATDASEAAGNKLT,SGDLS,YYNGEE,ASSAGSPAYEQY"

      document.getElementById('fasta').value=seq
      document.getElementById('sd123').checked=true


    }

    function toggleThresholdInput(isCustom) {
    document.getElementById('thresholdInput').style.display = isCustom ? 'block' : 'none';

    }

</script>
<h2>Submit data</h2>
<hr>
<form enctype="multipart/form-data" action="/cgi-bin/webface2.cgi" method="POST">
  <input type=hidden name=configfile value="/var/www/services/services/ICERFIRE-1.0/webface.cf">

  <p>
    Paste in the sequences for all CDR chains (A1,A2,A3,B1,B2,B3), and an optional label column. The leading C and trailing F amino acids must be clipped from A3 and B3.
    <br>Additionally, the label of each data point can be provided by the user, if available.
    <br>Alternatively, load and example input or upload a file from your local machine.
    <br>Each column should be comma separated.
    <br>
    <br>For detailed instructions, see Instructions tab above.
  </p>
  <p>For an overview of the method and citation information, see Abstract tab.</P>

  <p><b>Sequences submission</b></p>
  <p><i><b>Paste</b></i> the sequence(s): </p></b>
  <textarea id="fasta" name="pastefile" class="form-control" ng-model="fasta"
    placeholder="Paste data here" rows=10 cols=64></textarea>
  <p>
    or <i><b>load</b></i> some sample data:
    <input type="button" value="With labels" onclick="with_label_sample()" size=64>
    <input type="button" value="Without labels" onclick="no_label_sample()" size=64>
    <br>
    or <i><b>upload</b></i> a local file: <input name="uploadfile" size=64 type="file">
    <br>
  <p>

  <br>
  <h3>Options</h3>

  VAE model:
  <input type="radio" name="model" value="OSNOTRP"> One Stage (No Triplet)
  <input type="radio" name="model" value="OSCSTRP"> One Stage (Cosine Triplet)
  <input type="radio" name="model" value="TSNOTRP"> Two Stages (No Triplet)
  <input type="radio" name="model" value="TSCSTRP" checked> Two Stages (Cosine Triplet)
  <br>
  
  
  <h3>Threshold Options</h3>
  <p>
    Set a threshold:
    <input type="radio" name="threshold_type" value="None" checked onclick="toggleThresholdInput(false)"> Use default (Optimisation)
    <input type="radio" name="threshold_type" value="custom" onclick="toggleThresholdInput(true)"> Set manually
  </p>
  <p id="thresholdInput" style="display:none;">
    Enter your threshold value: <input type="number" name="t_value" min="0.01" step="0.01" placeholder="Enter value">
  </p>

  <input type="submit" class="btn btn-success" ng-disabled="invalidForm()" value="Submit" id="submitBtn" />
  <input type="reset" class="btn btn-default" id="resetBtn">
</form>

  <h3>Cite</h3>
Yat-tsai Richie Wan, Morten Nielsen ; Placeholder
<a href="https://placeholder.ch" target="_blank">Read the full article here</a>
</a>

</div>
  <div id='servicetabs-2' style='overflow:auto;' class='servicetabcontent'>
<div class="bulk">
 <h2>Instructions for TCRcluster-1.0</h2>
 <h4>Input format</h4>

<ul>
 <li>The data should have format: <b>A1,A2,A3,B1,B2,B3,label</b>, or <b>A1,A2,A3,B1,B2,B3</b>.</li>
 <li>Each CDR chain have a different maximum length limit, with the standard uppercase 20 amino acid alphabet:</li>
 <br><b>A C D E F G H I K L M N P Q R S T V W Y</b>
 <li>The input can be submitted with or without labels. Labels can be any specificity to a known peptide or the source of a sample, and are not used during clustering</li>
 <li>The input needs to be <b>comma separated, with no headers.</b></li>
 <br><li>Load Example data on the Submission page to ensure your data format is correct.</li>
</ul>
<a href="/services/TCRcluster-1.0/CDR_lengths.html" target="_blank">List of supported CDR lengths</a><br>
<br>

 
<ol type="A">
	<li>Paste the data into the box, or load an example file, or load a file from your local machine. </li>
	<li>Select which VAE model to use.</li>
	<li>Select whether to run the clustering optimisation (recommended), or provide a custom distance threshold.</li>
</ol>

 Click the submit button when all data are entered. </p>
 </div>

</div>
  <div id='servicetabs-4' style='overflow:auto;' class='servicetabcontent'>
<h2>References</h2>
<hr>

<p><div class="reference">
<span class="title"> - </span>
<span class="authors">Yat-tsai Richie Wan, Morten Nielsen</span>,
<span class="journal">Manuscript in preparation</span>, 2025, Vol. 1, No. 2, 1234-1235.
</div></p>

<div class="abstract">
<h3>Abstract</h3>
T cells are a crucial part of the adaptive immune system, tasked with identifying and eliminating pathogen-infected or cancerous cells. However prediction of T cell specificity and clustering T cell repertoires remain a highly challenging task, mainly due to their large sequence diversity.  As a means to resolve this, accurately encoding T-cell receptor (TCR) sequences into a latent feature space is critical for advancing TCR-specificity prediction and downstream applications. Here, we developed a variational autoencoder (VAE)-based model trained on paired TCR α-β chain data. Our approach incorporates all six complementarity-determining regions (CDRs) for enhanced specificity assessment. Optimized through a custom loss regime, our best models achieved up to 99.3% sequence reconstruction accuracy. We introduced a semi-supervised “Two-Stage VAE” framework, combining a cosine triplet loss with an integrated classifier predictor to refine the latent representations for peptide specificity. Benchmarking against sequence-based methods (TCRBase and tcrdist3), our VAE models demonstrated superior performance for peptide-specificity prediction. Clustering analyses leveraging our VAE latent space were evaluated using K-means, agglomerative clustering, and a novel graph-based Top1Cut method. Agglomerative clustering achieved the most biologically relevant results, balancing cluster purity and retention despite noise in TCR specificity annotations.

We extended these insights to TCR repertoire data, evaluating immune repertoires from SARS-CoV-2 and cancer patients. Across datasets, VAE-based models outperformed sequence-based methods, particularly in retention metrics, with notable improvements in the SARS-CoV-2 repertoire likely reflecting the presence of both SARS-CoV-2 epitopes and TCRs in training dataset. Moreover, the cancer repertoire analysis highlighted the generalizability of our approach, where the Two-Stage VAE without triplet loss excelled despite minimal similarity between the training and test data. Collectively, these results demonstrate the potential of VAE-based latent representations for TCR-specificity prediction, clustering, and repertoire analysis, offering a robust framework for analyzing diverse immune datasets.

<p><span class="text">

</span></p>

</div>

</div>
</div>
<br><?php standard_foot("Getting Help","('Correspondence','Yat-tsai Richie Wan','riwa@dtu.dk'),('Technical Support','Support','health-master@dtu.dk')"); ?>
</div>
<?php
  $wholepage=ob_get_contents();
  ob_end_clean(); 
  print $wholepage;
?>
<?php include '/var/www/services/footer';?>

