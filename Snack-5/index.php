<!-- Prendere un paragrafo abbastanza lungo, contenente diverse frasi.
Prendere il paragrafo e suddividerlo in tanti paragrafi <p>. Ogni punto un
nuovo paragrafo. -->




<?php

$par = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi alias sit velit nisi quas aut aliquid aspernatur itaque dignissimos, laboriosam, officia earum odit optio eos tenetur porro. Autem, labore repellendus.Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi alias sit velit nisi quas aut aliquid aspernatur itaque dignissimos, laboriosam, officia earum odit optio eos tenetur porro. Autem, labore repellendusadipisicing elit. Commodi alias sit velit nisi quas aut aliquid aspernatur itaque dignissimos, laboriosam, officia earum odit optio eos tenetur porro. Autem, labore repellendus.Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi alias sit velit nisi quas aut aliquid aspernatur itaque dignissimos, laboriosam, officia earum odit optio eos tenetur porro. Autem, labore repellendusadipisicing elit. Commodi alias sit velit nisi quas aut aliquid aspernatur itaque dignissimos, laboriosam, officia earum odit optio eos tenetur porro. Autem, labore repellendus.Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi alias sit velit nisi quas aut aliquid aspernatur itaque dignissimos, laboriosam, officia earum odit optio eos tenetur porro. Autem, labore repellendus";

$par = explode(".", $par);



?>
<ol>
    <?php foreach ($par as $k => $v) {
?>  <li><?= $v."."  ?></li> <?php 
    } ?>
</ol>


