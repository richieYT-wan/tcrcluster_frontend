
<br>

<br>

<h2>EXAMPLE OUTPUT</h2>

Using the sample data, with labels, with optimisation:
<br>
<br>


<font size=3 face="Courier">
<pre>
Click here to download the <b>latent vector and predicted clusters</b> in .csv format.
Click here to download the <b>clusters summary</b> in .csv format.
Click here to download the <b>cosine distance matrix</b> in .csv format.
Click here to download the <b>optimisation results</b> in .csv format.
Click here to download the <b>optimisation curve</b> plot in .png format.


Below is a table preview of clustering metrics at each threshold tested.
A total of 80 points are tested, showing only 10 points centered around the best solution.
the 'best' column denotes the best silhouette solution.

    threshold   best  n_cluster  n_singletons  silhouette  mean_purity  \
40    0.77949  False          6             6       0.194        0.875
41    0.79165  False          6             6       0.194        0.875
42    0.80380  False          6             6       0.194        0.875
43    0.81596  False          6             6       0.194        0.875
44    0.82811  False          6             5       0.197        0.850
45    0.84026  False          5             5       0.184        0.820
46    0.85242  False          6             3       0.195        0.767
47    0.86457  False          6             3       0.195        0.767
48    0.87673  False          6             3       0.195        0.767
49    0.88888  False          6             3       0.195        0.767
50    0.90104   True          6             1       0.206        0.739
51    0.91319  False          6             1       0.206        0.739
52    0.92534  False          6             1       0.206        0.739
53    0.93750  False          6             1       0.206        0.739
54    0.94965  False          6             1       0.206        0.739
55    0.96181  False          6             1       0.206        0.739
56    0.97396  False          6             1       0.206        0.739
57    0.98612  False          6             1       0.206        0.739
58    0.99827  False          6             0       0.202        0.683
59    1.01042  False          6             0       0.202        0.683
60    1.02258  False          6             0       0.202        0.683

    retention  mean_size  max_size
40       0.70      2.333       4.0
41       0.70      2.333       4.0
42       0.70      2.333       4.0
43       0.70      2.333       4.0
44       0.75      2.500       5.0
45       0.75      3.000       5.0
46       0.85      2.833       5.0
47       0.85      2.833       5.0
48       0.85      2.833       5.0
49       0.85      2.833       5.0
50       0.95      3.167       5.0
51       0.95      3.167       5.0
52       0.95      3.167       5.0
53       0.95      3.167       5.0
54       0.95      3.167       5.0
55       0.95      3.167       5.0
56       0.95      3.167       5.0
57       0.95      3.167       5.0
58       1.00      3.333       5.0
59       1.00      3.333       5.0
60       1.00      3.333       5.0
</pre>
</font>
<br>

<h2>DESCRIPTION</h2>
<div class="bulk">

<p>
<b>The output contains up to 5 files when optimising, or 3 files when using a custom threshold:</b>
<p>
<nl>
<p><li> <b>latent vector and predicted cluster</b> CSV table containing the input datapoint and sequences, extracted latent vector (columns z_XX) and the predicted cluster label.
<p><li> <b>clusters summary</b> CSV table containing a summary of the clusters for each label. Purity and majority labels are only informative if labels were provided with the input data.
<p><li> <b>cosine distance matrix</b> CSV table of square cosine distance matrix (all versus all). Additional placeholder label and index columns are included and only used in the python code for compatibility purposes.
<p><li> <b>Optimisation results</b> CSV table containing the clustering metrics at each hyperparameter (distance threshold) used in the optimisation process. The column "Best" denotes which threshold has been found to be optimal (e.g. max Silhouette score).
<p><li> <b>Optimisation plot</b> png plot of the optimisation table, with the optimal SI denoted by a dashed line.
<br>Silhouette score, purity, retention are plotted in range (0-1) on the main Y-axis. mean size and n_cluster above are plotted in log2 scale on the secondary Y-axis. n_above denotes the number of clusters above size 6 and purity 80% (only useful if labels were provided)

<img src="/services/TCRcluster-1.0/example_image.png" style="width: 110%;">

</nl>
</div>
