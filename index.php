<?php include 'includes/header.php'; ?>

<div id="home_banner"></div>

<div class="author">
  <img src="images/logos3.png" alt="Logo Rosa Gaulí">
  <h1>Textile Graphic Designer</h1>
</div>

<div id="container"></div>

<script id="cards-template" type="text/x-handlebars-template">
  {{#each cards}}
  <div class="row" id="{{id}}">
      <a href="pages/home-{{id}}.php">
        <div class="card card-image" style="background-image: url({{slides.[0]}});">
        </div>
        <div class="card card-title">
          <section class="section-top" style="background-image: url({{bannerImg}}); background-size: cover;"></section>
          <section class="section-bottom">
            <h3 class="subtitle">{{subTitle1}}</h3>
            <h2 class="title">{{title}}</h2>
            <h3 class="subtitle">{{subTitle2}}</h3>
            <p class="description">{{description}}</p>
          </section>
        </div>
      </a>
    </div>
  {{/each}}
</script>

<?php include 'includes/footer.php'; ?>