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

  Include expression in the model (Recommended):
  <input type="radio" name="add_expr" value="yes" checked> Yes &nbsp
  <input type="radio" name="add_expr" value="no"> No
  <input type="radio" name="add_expr" value="test"> No
  <br>
  <!-- <input type="checkbox" name="usr_expr" id="usr_expr">  -->
  Use user-provided expression values:
  <input type="radio" name="usr_expr" value="yes"> Yes &nbsp
  <input type="radio" name="usr_expr" value="no" checked> No
  <br><br>

  <input type="submit" class="btn btn-success" ng-disabled="invalidForm()" value="Submit"
    id="submitBtn" />
  <input type="reset" class="btn btn-default" id="resetBtn"></a>

  <div style="margin: 15px;"></div>

  <h3>Cite</h3>
Yat-tsai Richie Wan, Zeynep Koşaloğlu‐Yalçın, Bjoern Peters, Morten Nielsen, A large-scale study of peptide features defining immunogenicity of cancer neo-epitopes, NAR Cancer, Volume 6, Issue 1, March 2024, zcae002, https://doi.org/10.1093/narcan/zcae002
<a href="https://academic.oup.com/narcancer/article/6/1/zcae002/7591107" target="_blank">Read the full article here</a>
</a>
