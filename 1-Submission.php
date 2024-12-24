<script>
  function myFile() {
    var x = document.getElementById("uploadfile").value;
    if (x){
      document.getElementById("fastafileinfo").innerHTML = document.getElementById("uploadfile").files[0].name;
    }else{
      document.getElementById("fastafileinfo").innerHTML = null;
    }

    }

    function paste_expr_sample(){
      var seq="RRASKARLP,RRASKALLP,HLA-C0602,0.00199998\nSSGFCNIAVK,SSGFRNIAVK,HLA-A0301,8.35072\nGIIPPSVQV,GKIPPSVQV,HLA-A0201,105.084\nMASISSFLL,MASISSSLL,HLA-B3501,6.201\nLQTIKDIASPI,LQTIKDIASAI,HLA-B5201,36.9909"


      document.getElementById('fasta').value=seq
      document.getElementById('sd3').checked=true

    }

    function paste_noexpr_sample(){

      var seq="SVLDVGVAV,SVLDVGGAV,HLA-A0201\nLLQICERIPTI,LLQVCERIPTI,HLA-A0201\nPLLPALSPGL,PLLPALSPGS,HLA-A0201\nIVFGVSQPDV,IVSGVSQPDV,HLA-A0201\nSLLMWITQAL,SLLMWITQCF,HLA-A0201"

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
    Paste in the sequences for the mutant, wild-type, and a third column containing the HLA alleles (in the format HLA-XYYZZ, ex: HLA-A0201). Sequences should be 8 to 14 amino acids long.
    <br>Additionally, the expression values of each data point can be provided by the user, if available and the option below is selected. If no expression values are provided and expression is included in the model, expression values will be queried from a reference dataset (TCGA pan-can).
    <br>Alternatively, load and example input or upload a file from your local machine.
    <br>Each column should be comma separated.
    <br>
    <br>For detailed instructions, see Instructions tab above.
  </p>
  <p>For an overview of the method and citation information, see Abstract tab.</P>

  <p><b>Sequence submission</b></p>
  <p><i><b>Paste</b></i> the sequence(s): </p></b>
  <textarea id="fasta" name="pastefile" class="form-control" ng-model="fasta"
    placeholder="Paste data here" rows=10 cols=64></textarea>
  <p>
    or <i><b>load</b></i> some sample data:
    <input type="button" value="With expression values" onclick="paste_expr_sample()" size=64>
    <input type="button" value="Without expression values" onclick="paste_noexpr_sample()" size=64>
    <br>
    or <i><b>upload</b></i> a local file: <input name="uploadfile" size=64 type="file">
    <br>
  <p>

  <br>
  <h3>Options</h3>

  VAE model:
  <input type="radio" name="model" value="osnotrp"> One Stage (No Triplet)
  <input type="radio" name="model" value="oscstrp"> One Stage (Cosine Triplet)
  <input type="radio" name="model" value="tsnotrp"> Two Stages (No Triplet)
  <input type="radio" name="model" value="tscstrp" checked> Two Stages (Cosine Triplet)
  <br>
  <!-- <input type="checkbox" name="usr_expr" id="usr_expr">  -->
  <!-- New Threshold Section -->
  <h3>Threshold Options</h3>
  <p>
    Set a threshold:
    <input type="radio" name="threshold_type" value="default" checked onclick="toggleThresholdInput(false)"> Use default (Optimisation)
    <input type="radio" name="threshold_type" value="custom" onclick="toggleThresholdInput(true)"> Set manually
  </p>
  <p id="thresholdInput" style="display:none;">
    Enter your threshold value: <input type="number" name="custom_threshold" min="0.01" step="0.01" placeholder="Enter value">
  </p>

  <input type="submit" class="btn btn-success" ng-disabled="invalidForm()" value="Submit" id="submitBtn" />
  <input type="reset" class="btn btn-default" id="resetBtn">
</form>

  <h3>Cite</h3>
Yat-tsai Richie Wan, Morten Nielsen ; Placeholder
<a href="https://placeholder.ch" target="_blank">Read the full article here</a>
</a>
