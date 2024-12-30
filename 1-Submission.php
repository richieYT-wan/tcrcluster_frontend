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
      var seq="A1,A2,A3,B1,B2,B3,label\nDRGSQS,IYSNGD,AVGMNNDMR,LNHDA,SQIVND,ASSTGGLAGEQY,ELAGIGILTV\nDRGSQS,IYSNGD,AVPSGNTPLV,SNHLY,FYNNEI,ASSEYGGGVAGELF,ELAGIGILTV\nDRGSQS,IYSNGD,ALGGGGADGLT,MNHEY,SMNVEV,ASSFSSNNEQF,ELAGIGILTV\nDRGSQS,IYSNGD,AVNSGNQFY,MNHEY,SMNVEV,ASRPTGMGQPQH,ELAGIGILTV\nSVFSS,VVTGGEV,AIPQKAAGNKLT,MDHEN,SYDVKM,ASSFPQFVTGLPEAF,ELAGIGILTV\nNSMFDY,ISSIKDK,AASAFLGGSEKLV,LNHNV,YYDKDF,ATSERGDLNFGTDTQY,GILGFVFTL\nNSASDY,IRSNMDK,AENEGGGSQGNLI,LNHDA,SQIVND,ASSLYASYEQY,GILGFVFTL\nSVFSS,VVTGGEV,AGGGDGGSQGNLI,LNHDA,SQIVND,ASSIRSGVEQY,GILGFVFTL\nSVFSS,VVTGGEV,AGGRHSGGGADGLT,MNHNY,SVGAGI,ASSYSRPGLSNQPQH,GILGFVFTL\nTSESDYY,QEAYKQQN,AYRADSNYQLI,MNHEY,SVGAGI,ASSYNVRDGDYGYT,GILGFVFTL\nDSASNY,IRSNVGE,AAKEGYSTLT,SGHNS,FNNNVP,ASSFSGNTGELF,RAKFKQLL\nDSASNY,IRSNVGE,AASETSYDKVI,MNHEY,SVGAGI,ASSPIPGLQPSEQAETQY,RAKFKQLL\nDSASNY,IRSNVGE,AASETSYDKVI,SEHNR,FQNEAQ,ASSLAGSYEQY,RAKFKQLL\nYGATPY,YFSGDTLV,AVTRDDKII,SGHDT,YYEEEE,ASSLRDGSEAF,RAKFKQLL\nNSASQS,VYSSG,VVNIDNARLM,SQVTM,ANQGSEA,SVGQGPYEQY,RAKFKQLL\nNSASQS,VYSSG,VVNNNNDMR,SGHNS,FNNNVP,ASGEANTGELF,YLQPRTFLL\nNSASQS,VYSSG,VVNRDDKII,SGHVS,FQNEAQ,ASSDSYGYT,YLQPRTFLL\nNSASQS,VYSSG,VVNIPQAGTALI,DFQATT,SNEGSKA,SARGLAEANTGELF,YLQPRTFLL\nNSASQS,VYSSG,VVNGADKII,SEHNR,FQNEAQ,ASSPDIEAF,YLQPRTFLL\nYSGSPE,HISR,ALSYSSASKII,MDHEN,SYDVKM,ASSTMVGGKGEKLF,YLQPRTFLL"

      document.getElementById('fasta').value=seq
      document.getElementById('sd3').checked=true

    }

    function no_label_sample(){

      var seq="A1,A2,A3,B1,B2,B3\nDRGSQS,IYSNGD,ALGGGGADGLT,MNHEY,SMNVEV,ASSFSSNNEQF\nDRGSQS,IYSNGD,AVQGSTLT,MGHRA,YSYEKL,ASSQGGLTGEGYT\nDRGSQS,IYSNGD,AVSNNNDMR,MGHRA,YSYEKL,ASSQDRWLSGQPQH\nDRGSQS,IYSNGD,AAPGGATNKLI,MNHEY,SVGAGI,ASSYSTPSWTDTQY\nYGGTVN,YFSGDPLV,AVPNTNAGKST,SGHNT,YYREEE,ASTLRGTGVETQY\nTTLSN,LVKSGEV,AGSPIYNQGGKLI,LGHNA,YSLEER,ASSQEWGINEKLF\nTSGFNG,NVLDGL,AVSDSNYQLI,LNHDA,SQIVND,ASSIYSNQPQH\nYSGSPE,HISR,ALRVMNRDDKII,LNHDA,SQIVND,ASSTKDGGTGELF\nTSENNYY,QEAYKQQN,AFMTNAGGTSYGKLT,PRHDT,FYEKMQ,ASSLMRGGTYNSPLH\nDSSSTY,IFSNMDM,AERVTGGGNKLT,MGHRA,YSYEKL,ASSQDPGDEQF\nVSPFSN,MTFSENT,VGYTNAGKST,SGHTA,FQGNSA,ASSLVVVNTEAF\nYGATPY,YFSGDTLV,AVGTARLM,MNHEY,SMNVEV,ASSLPGTGGSPLH\nDSASNY,IRSNVGE,AAMETSYDKVI,MNHEY,SVGEGT,ASGMTGLTSEQY\nKALYS,LLKGGEQ,GTRYISFTGGGNKLT,SGHNS,FNNNVP,ASSFSGNTGELF\nDSASNY,IRSNVGE,AASEGAPDKLI,SGHVS,FNYEAQ,ASSFQGLVSSYNEQF\nTSGFNG,NVLDGL,AVMDSNYQLI,DFQATT,SNEGSKA,SARVLTSGETYEQY\nNSASQS,VYSSG,VVNRDDKII,SGHVS,FQNEAQ,ASSDSYGYT\nSSYSPS,YTSAATLV,VVSDPDTGTYKYI,SNHLY,FYNNEI,ASRDRGNYYGYT\nATGYPS,ATKADDK,ALRRGATDSWGKLQ,SGHVS,FQNEAQ,ASSDQNTGELF\nTSINN,IRSNERE,ATDASEAAGNKLT,SGDLS,YYNGEE,ASSAGSPAYEQY"

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
    <br>Each column should be comma separated, with headers A1,A2,A3,B1,B2,B3,label (label column is optional)
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
  <!-- <input type="checkbox" name="usr_expr" id="usr_expr">  -->
  <!-- New Threshold Section -->
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
