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
