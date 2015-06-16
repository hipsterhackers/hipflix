<!DOCTYPE html>
<html>
  <?php require 'head.php'; ?>
  <body>
    <?php require 'nav.php'; ?>
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="/images/Jurassic-World-The-Game.jpg">
          <div class="carousel-caption">
            Jurassic World
          </div>
        </div>
        <div class="item">
          <img src="/images/Mad-Max-Fury-Road-lovely-day.png">
          <div class="carousel-caption">
            Mad Max Fury Road
          </div>
        </div>
        <div class="item">
          <img src="/images/Cinderella-2015.jpg">
          <div class="carousel-caption">
            Cinderella 2015
          </div>
        </div>
      </div>

      <!-- Controls -->
      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h1 class="page-header">Top Picks</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">
          Movie 1
        </div>
        <div class="col-sm-3">
          Movie 2
        </div>
        <div class="col-sm-3">
          Movie 3
        </div>
        <div class="col-sm-3">
          Movie 4
        </div>
      </div>
    </div>
    <?php require 'footer.php'; ?>
  </body>
</html>
