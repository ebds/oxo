<?php
    $item = 'EQ2P2QBDLNUJQVLAR3I2CUGZ5IEW4LEF';
    $res = json_decode(json_encode($entityResult), true);
    $input = array(explode(",", $res));
?>
<div id="snes" class="reveal-modal" data-reveal aria-labelledby="Super Nintendo Entertainment System" aria-hidden="true" role="dialog">
    <a class="close-reveal-modal" aria-label="Close">
        <i class="fa fa-close fa-2x"></i>
    </a>
    <h2 class="oxo__modal__title">
    <?php
        echo $input[0][1];
    ?>
    </h2>
    <div class="reveal-modal__content">
        <ul class="tabs" data-tab>
          <li class="tab-title active"><a href="#panel4">Info</a></li>
          <li class="tab-title"><a href="#panel5">Technische Daten</a></li>
          <li class="tab-title"><a href="#panel6">Spiele</a></li>
          <li class="tab-title"><a href="#panel7">Bedeutung</a></li>
        </ul>
        <div class="tabs-content">
          <div class="content active" id="panel4">
            <h3 class="oxo__headline--third">
                <?php
                echo $input[0][1];
                ?>
            </h3>
            <p class="oxo__paragraph">
            </p>

          </div>
          <div class="content" id="panel5">
            <p>This is the second panel of the basic tab example. This is the second panel of the basic tab example.</p>
          </div>
          <div class="content" id="panel6">
            <p>This is the third panel of the basic tab example. This is the third panel of the basic tab example.</p>
          </div>
          <div class="content" id="panel7">
            <p>This is the fourth panel of the basic tab example. This is the fourth panel of the basic tab example.</p>
          </div>
        </div>
    </div>

    <div class="oxo__detail__image-wrapper">
        <a href="/img/consoles/snes.png" class="oxo__link oxo__image--link">
            <img src="/img/consoles/snes.png" class="oxo__image" alt="Super Nintendo Entertainment System" />
            <i class="fa fa-search-plus fa-4x"></i>
        </a>
    </div>
</div>
