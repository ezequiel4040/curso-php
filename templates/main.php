
<main>

  <section>
    <img src="<?= $poster_url; ?> "width="300"" alt="Poster de <?=$title?>"  
    style="border-radius: 18px" />    
  </section>

  <hgroup>
    <h3> <?= $title; ?> <?= $untilMessage ?> </h3>
    <p>fecha de estreno <?= $release_date; ?> </p>
    <p>La siguiente es: <?= $following_production; ?></p>
  </hgroup>

</main>