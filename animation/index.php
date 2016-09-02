

<?php
// Nom du fichier css
// $fichier_css = "style.css"
$fichier_css = "style.css";
include'../head.php';
?>
</div> <!-- END SIDEBAR -->

<div class="page">

  <div class="row">
  <div class="container ctn-demo">
    <div class="row">
      <div class="col-md-12 text-center">
        <h1>Animations CSS 3</h1>
        <h2 style="font-size:18px;line-height: normal">Survolez les éléments pour visualiser les effets</h2>
        <div class="colored-line"></div>
        <div class="row ctn-demo">

          <div class="col-md-4 text-center">
            <div class="exemple">
              <a href="#text1"><h5>Bounce</h5></a>
              <div class="element img-circle " id="bounce"></div>
            </div>
          </div>
          <!-- lightbox container hidden with CSS -->
          <div class="lightbox" id="text1">
            <div class="box">
              <a class="close" href="#">X</a>
              <p class="title">Animated bounce</p>
              <div class="content">
                <img src="img/bounce.png" alt="code de l'animation bounce" />
              </div>
            </div>
          </div>

          <div class="col-md-4 text-center">
            <div class="exemple">
              <a href="#text2"><h5>Flash</h5></a>
              <div class="element" id="flash"></div>
            </div>
          </div>
          <!-- lightbox container hidden with CSS -->
          <div class="lightbox" id="text2">
            <div class="box">
              <a class="close" href="#">X</a>
              <p class="title">Animated flash</p>
              <div class="content">
                <img src="img/flash.png" alt="code de l'animation flash" />
              </div>
            </div>
          </div>

          <div class="col-md-4 text-center">
            <div class="exemple">
              <a href="#text3"><h5>Pulse</h5></a>
              <div class="element img-circle uni" id="pulse"></div>
            </div>
          </div>
          <!-- lightbox container hidden with CSS -->
          <div class="lightbox" id="text3">
            <div class="box">
              <a class="close" href="#">X</a>
              <p class="title">Animated pulse</p>
              <div class="content">
                <img src="img/pulse.png" alt="code de l'animation pulse" />
              </div>
            </div>
          </div>
        </div>

        <div class="row ctn-demo">

          <div class="col-md-4 text-center">
            <div class="exemple">
              <a href="#text4"><h5>RubberBand</h5></a>
              <div class="element" id="rubberBand"></div>
            </div>
          </div>
          <!-- lightbox container hidden with CSS -->
          <div class="lightbox" id="text4">
            <div class="box">
              <a class="close" href="#">X</a>
              <p class="title">Animated rubberBand</p>
              <div class="content">
                <img src="img/rubberBand.png" alt="code de l'animation rubberBand" />
              </div>
            </div>
          </div>

          <div class="col-md-4 text-center">
            <div class="exemple">
              <a href="#text5"><h5>Shake</h5></a>
              <div class="element img-circle" id="shake"></div>
            </div>
          </div>
          <!-- lightbox container hidden with CSS -->
          <div class="lightbox" id="text5">
            <div class="box">
              <a class="close" href="#">X</a>
              <p class="title">Animated shake</p>
              <div class="content">
                <img src="img/shake.png" alt="code de l'animation shake" />
              </div>
            </div>
          </div>

          <div class="col-md-4 text-center">
            <div class="exemple">
              <a href="#text9"><h5>Jello</h5></a>
              <div class="element img-circle" id="jello"></div>
            </div>
          </div>
          <!-- lightbox container hidden with CSS -->
          <div class="lightbox" id="text9">
            <div class="box">
              <a class="close" href="#">X</a>
              <p class="title">Animated jello</p>
              <div class="content">
                <img src="img/jello.png" alt="code de l'animation jello" />
              </div>
            </div>
          </div>
        </div>

        <div class="row ctn-demo">

          <div class="col-md-4 text-center">
            <div class="exemple">
              <a href="#text7"><h5>Tada</h5></a>
              <div class="element" id="tada"></div>
            </div>
          </div>
          <!-- lightbox container hidden with CSS -->
          <div class="lightbox" id="text7">
            <div class="box">
              <a class="close" href="#">X</a>
              <p class="title">Animated tada</p>
              <div class="content">
                <img src="img/tada.png" alt="code de l'animation tada" />
              </div>
            </div>
          </div>

          <div class="col-md-4 text-center">
            <div class="exemple">
              <a href="#text8"><h5>Wobble</h5></a>
              <div class="element" id="wobble"></div>
            </div>
          </div>
          <!-- lightbox container hidden with CSS -->
          <div class="lightbox" id="text8">
            <div class="box">
              <a class="close" href="#">X</a>
              <p class="title">Animated wobble</p>
              <div class="content">
                <img src="img/wobble.png" alt="code de l'animation wobble" />
              </div>
            </div>
          </div>

          <div class="col-md-4 text-center">
            <div class="exemple">
              <a href="#text6"><h5>Swing</h5></a>
              <div class="element" id="swing"></div>
            </div>
          </div>
          <!-- lightbox container hidden with CSS -->
          <div class="lightbox" id="text6">
            <div class="box">
              <a class="close" href="#">X</a>
              <p class="title">Animated swing</p>
              <div class="content">
                <img src="img/swing.png" alt="code de l'animation swing" />
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

</div> <!-- END PAGE -->

<?php include'../footer.php'; ?>
