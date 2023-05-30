<?php 
  require_once '../../includes/config.php';
?>

<!DOCTYPE html>
<html lang="en-US" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--  
    Document Title
    =============================================
    -->
    <title>Cardápio</title>
   <!--  
    Favicons
    =============================================
    -->
    <?php include_once ABSPATH.'../includes/favicons.php';?>

    <!--  
    Stylesheets
    =============================================
    -->
    <?php include_once ABSPATH.'../includes/stylesheets.php';?>
  </head>
  <body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
    <main>
      <?php
        include '../../includes/header.php'
      ?>      
      <div class="main">
        <section class="module bg-dark-30 parallax-bg restaurant-menu-bg" data-background="<?php echo BASEURL;?>public/images/restaurant/bg_lanches.jpg">
          <div class="container">
            <div class="row">
              <div class="col-sm-2 col-sm-offset-5">
                <div class="alt-module-subtitle"><span class="holder-w"></span>
                  <h5 class="font-serif">Abaixo</h5><span class="holder-w"></span>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-8 col-sm-offset-2">
                <h2 class="module-title font-alt mb-0">Lanches</h2>
              </div>
            </div>
          </div>
        </section>
        <section class="module">
          <div class="container">
            <div class="row multi-columns-row">
              <div class="col-sm-4">
                <div class="menu">
                  <div class="row">
                    <div class="col-sm-8">
                      <h4 class="menu-title font-alt">Wild Mushroom Bucatini with Kale</h4>
                      <div class="menu-detail font-serif">Mushroom / Veggie / White Sources</div>
                    </div>
                    <div class="col-sm-4 menu-price-detail">
                      <h4 class="menu-price font-alt">$10.5</h4>
                    </div>
                  </div>
                </div>
                <div class="menu">
                  <div class="row">
                    <div class="col-sm-8">
                      <h4 class="menu-title font-alt">Lemon and Garlic Green Beans</h4>
                      <div class="menu-detail font-serif">Lemon / Garlic / Beans</div>
                    </div>
                    <div class="col-sm-4 menu-price-detail">
                      <h4 class="menu-price font-alt">$14.5</h4>
                    </div>
                  </div>
                </div>
                <div class="menu">
                  <div class="row">
                    <div class="col-sm-8">
                      <h4 class="menu-title font-alt">LambBeef Kofka Skewers with Tzatziki</h4>
                      <div class="menu-detail font-serif">Lamb / Wine / Butter</div>
                    </div>
                    <div class="col-sm-4 menu-price-detail">
                      <h4 class="menu-price font-alt">$18.5</h4>
                    </div>
                  </div>
                </div>
                <div class="menu">
                  <div class="row">
                    <div class="col-sm-8">
                      <h4 class="menu-title font-alt">Imported Oysters Grill (5 Pieces)</h4>
                      <div class="menu-detail font-serif">Oysters / Veggie / Ginger</div>
                    </div>
                    <div class="col-sm-4 menu-price-detail">
                      <h4 class="menu-price font-alt">$15.9</h4>
                    </div>
                  </div>
                </div>
                <div class="menu">
                  <div class="row">
                    <div class="col-sm-8">
                      <h4 class="menu-title font-alt">Meatloaf with Black Pepper-Honey BBQ</h4>
                      <div class="menu-detail font-serif">Pepper / Chicken / Honey</div>
                    </div>
                    <div class="col-sm-4 menu-price-detail">
                      <h4 class="menu-price font-alt">$16.4</h4>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="menu">
                  <div class="row">
                    <div class="col-sm-8">
                      <h4 class="menu-title font-alt">Wild Mushroom Bucatini with Kale</h4>
                      <div class="menu-detail font-serif">Mushroom / Veggie / White Sources</div>
                    </div>
                    <div class="col-sm-4 menu-price-detail">
                      <h4 class="menu-price font-alt">$10.5</h4>
                    </div>
                  </div>
                </div>
                <div class="menu">
                  <div class="row">
                    <div class="col-sm-8">
                      <h4 class="menu-title font-alt">Lemon and Garlic Green Beans</h4>
                      <div class="menu-detail font-serif">Lemon / Garlic / Beans</div>
                    </div>
                    <div class="col-sm-4 menu-price-detail">
                      <h4 class="menu-price font-alt">$14.5</h4>
                    </div>
                  </div>
                </div>
                <div class="menu">
                  <div class="row">
                    <div class="col-sm-8">
                      <h4 class="menu-title font-alt">LambBeef Kofka Skewers with Tzatziki</h4>
                      <div class="menu-detail font-serif">Lamb / Wine / Butter</div>
                    </div>
                    <div class="col-sm-4 menu-price-detail">
                      <h4 class="menu-price font-alt">$18.5</h4>
                    </div>
                  </div>
                </div>
                <div class="menu">
                  <div class="row">
                    <div class="col-sm-8">
                      <h4 class="menu-title font-alt">Imported Oysters Grill (5 Pieces)</h4>
                      <div class="menu-detail font-serif">Oysters / Veggie / Ginger</div>
                    </div>
                    <div class="col-sm-4 menu-price-detail">
                      <h4 class="menu-price font-alt">$15.9</h4>
                    </div>
                  </div>
                </div>
                <div class="menu">
                  <div class="row">
                    <div class="col-sm-8">
                      <h4 class="menu-title font-alt">Meatloaf with Black Pepper-Honey BBQ</h4>
                      <div class="menu-detail font-serif">Pepper / Chicken / Honey</div>
                    </div>
                    <div class="col-sm-4 menu-price-detail">
                      <h4 class="menu-price font-alt">$16.4</h4>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="menu">
                  <div class="row">
                    <div class="col-sm-8">
                      <h4 class="menu-title font-alt">Wild Mushroom Bucatini with Kale</h4>
                      <div class="menu-detail font-serif">Mushroom / Veggie / White Sources</div>
                    </div>
                    <div class="col-sm-4 menu-price-detail">
                      <h4 class="menu-price font-alt">$10.5</h4>
                    </div>
                  </div>
                </div>
                <div class="menu">
                  <div class="row">
                    <div class="col-sm-8">
                      <h4 class="menu-title font-alt">Lemon and Garlic Green Beans</h4>
                      <div class="menu-detail font-serif">Lemon / Garlic / Beans</div>
                    </div>
                    <div class="col-sm-4 menu-price-detail">
                      <h4 class="menu-price font-alt">$14.5</h4>
                    </div>
                  </div>
                </div>
                <div class="menu">
                  <div class="row">
                    <div class="col-sm-8">
                      <h4 class="menu-title font-alt">LambBeef Kofka Skewers with Tzatziki</h4>
                      <div class="menu-detail font-serif">Lamb / Wine / Butter</div>
                    </div>
                    <div class="col-sm-4 menu-price-detail">
                      <h4 class="menu-price font-alt">$18.5</h4>
                    </div>
                  </div>
                </div>
                <div class="menu">
                  <div class="row">
                    <div class="col-sm-8">
                      <h4 class="menu-title font-alt">Imported Oysters Grill (5 Pieces)</h4>
                      <div class="menu-detail font-serif">Oysters / Veggie / Ginger</div>
                    </div>
                    <div class="col-sm-4 menu-price-detail">
                      <h4 class="menu-price font-alt">$15.9</h4>
                    </div>
                  </div>
                </div>
                <div class="menu">
                  <div class="row">
                    <div class="col-sm-8">
                      <h4 class="menu-title font-alt">Meatloaf with Black Pepper-Honey BBQ</h4>
                      <div class="menu-detail font-serif">Pepper / Chicken / Honey</div>
                    </div>
                    <div class="col-sm-4 menu-price-detail">
                      <h4 class="menu-price font-alt">$16.4</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="module bg-dark-30 parallax-bg restaurant-menu-bg" data-background="<?php echo BASEURL;?>public/images/restaurant/bg_entradas.jpg">
          <div class="container">
            <div class="row">
              <div class="col-sm-2 col-sm-offset-5">
                <div class="alt-module-subtitle"><span class="holder-w"></span>
                  <h5 class="font-serif">Abaixo</h5><span class="holder-w"></span>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-8 col-sm-offset-2">
                <h2 class="module-title font-alt mb-0">Entradas</h2>
              </div>
            </div>
          </div>
        </section>
        <section class="module">
          <div class="container">
            <div class="row multi-columns-row">
              <div class="col-sm-4">
                <div class="menu">
                  <div class="row">
                    <div class="col-sm-8">
                      <h4 class="menu-title font-alt">Wild Mushroom Bucatini with Kale</h4>
                      <div class="menu-detail font-serif">Mushroom / Veggie / White Sources</div>
                    </div>
                    <div class="col-sm-4 menu-price-detail">
                      <h4 class="menu-price font-alt">$10.5</h4>
                    </div>
                  </div>
                </div>
                <div class="menu">
                  <div class="row">
                    <div class="col-sm-8">
                      <h4 class="menu-title font-alt">Lemon and Garlic Green Beans</h4>
                      <div class="menu-detail font-serif">Lemon / Garlic / Beans</div>
                    </div>
                    <div class="col-sm-4 menu-price-detail">
                      <h4 class="menu-price font-alt">$14.5</h4>
                    </div>
                  </div>
                </div>
                <div class="menu">
                  <div class="row">
                    <div class="col-sm-8">
                      <h4 class="menu-title font-alt">LambBeef Kofka Skewers with Tzatziki</h4>
                      <div class="menu-detail font-serif">Lamb / Wine / Butter</div>
                    </div>
                    <div class="col-sm-4 menu-price-detail">
                      <h4 class="menu-price font-alt">$18.5</h4>
                    </div>
                  </div>
                </div>
                <div class="menu">
                  <div class="row">
                    <div class="col-sm-8">
                      <h4 class="menu-title font-alt">Imported Oysters Grill (5 Pieces)</h4>
                      <div class="menu-detail font-serif">Oysters / Veggie / Ginger</div>
                    </div>
                    <div class="col-sm-4 menu-price-detail">
                      <h4 class="menu-price font-alt">$15.9</h4>
                    </div>
                  </div>
                </div>
                <div class="menu">
                  <div class="row">
                    <div class="col-sm-8">
                      <h4 class="menu-title font-alt">Meatloaf with Black Pepper-Honey BBQ</h4>
                      <div class="menu-detail font-serif">Pepper / Chicken / Honey</div>
                    </div>
                    <div class="col-sm-4 menu-price-detail">
                      <h4 class="menu-price font-alt">$16.4</h4>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="menu">
                  <div class="row">
                    <div class="col-sm-8">
                      <h4 class="menu-title font-alt">Wild Mushroom Bucatini with Kale</h4>
                      <div class="menu-detail font-serif">Mushroom / Veggie / White Sources</div>
                    </div>
                    <div class="col-sm-4 menu-price-detail">
                      <h4 class="menu-price font-alt">$10.5</h4>
                    </div>
                  </div>
                </div>
                <div class="menu">
                  <div class="row">
                    <div class="col-sm-8">
                      <h4 class="menu-title font-alt">Lemon and Garlic Green Beans</h4>
                      <div class="menu-detail font-serif">Lemon / Garlic / Beans</div>
                    </div>
                    <div class="col-sm-4 menu-price-detail">
                      <h4 class="menu-price font-alt">$14.5</h4>
                    </div>
                  </div>
                </div>
                <div class="menu">
                  <div class="row">
                    <div class="col-sm-8">
                      <h4 class="menu-title font-alt">LambBeef Kofka Skewers with Tzatziki</h4>
                      <div class="menu-detail font-serif">Lamb / Wine / Butter</div>
                    </div>
                    <div class="col-sm-4 menu-price-detail">
                      <h4 class="menu-price font-alt">$18.5</h4>
                    </div>
                  </div>
                </div>
                <div class="menu">
                  <div class="row">
                    <div class="col-sm-8">
                      <h4 class="menu-title font-alt">Imported Oysters Grill (5 Pieces)</h4>
                      <div class="menu-detail font-serif">Oysters / Veggie / Ginger</div>
                    </div>
                    <div class="col-sm-4 menu-price-detail">
                      <h4 class="menu-price font-alt">$15.9</h4>
                    </div>
                  </div>
                </div>
                <div class="menu">
                  <div class="row">
                    <div class="col-sm-8">
                      <h4 class="menu-title font-alt">Meatloaf with Black Pepper-Honey BBQ</h4>
                      <div class="menu-detail font-serif">Pepper / Chicken / Honey</div>
                    </div>
                    <div class="col-sm-4 menu-price-detail">
                      <h4 class="menu-price font-alt">$16.4</h4>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="menu">
                  <div class="row">
                    <div class="col-sm-8">
                      <h4 class="menu-title font-alt">Wild Mushroom Bucatini with Kale</h4>
                      <div class="menu-detail font-serif">Mushroom / Veggie / White Sources</div>
                    </div>
                    <div class="col-sm-4 menu-price-detail">
                      <h4 class="menu-price font-alt">$10.5</h4>
                    </div>
                  </div>
                </div>
                <div class="menu">
                  <div class="row">
                    <div class="col-sm-8">
                      <h4 class="menu-title font-alt">Lemon and Garlic Green Beans</h4>
                      <div class="menu-detail font-serif">Lemon / Garlic / Beans</div>
                    </div>
                    <div class="col-sm-4 menu-price-detail">
                      <h4 class="menu-price font-alt">$14.5</h4>
                    </div>
                  </div>
                </div>
                <div class="menu">
                  <div class="row">
                    <div class="col-sm-8">
                      <h4 class="menu-title font-alt">LambBeef Kofka Skewers with Tzatziki</h4>
                      <div class="menu-detail font-serif">Lamb / Wine / Butter</div>
                    </div>
                    <div class="col-sm-4 menu-price-detail">
                      <h4 class="menu-price font-alt">$18.5</h4>
                    </div>
                  </div>
                </div>
                <div class="menu">
                  <div class="row">
                    <div class="col-sm-8">
                      <h4 class="menu-title font-alt">Imported Oysters Grill (5 Pieces)</h4>
                      <div class="menu-detail font-serif">Oysters / Veggie / Ginger</div>
                    </div>
                    <div class="col-sm-4 menu-price-detail">
                      <h4 class="menu-price font-alt">$15.9</h4>
                    </div>
                  </div>
                </div>
                <div class="menu">
                  <div class="row">
                    <div class="col-sm-8">
                      <h4 class="menu-title font-alt">Meatloaf with Black Pepper-Honey BBQ</h4>
                      <div class="menu-detail font-serif">Pepper / Chicken / Honey</div>
                    </div>
                    <div class="col-sm-4 menu-price-detail">
                      <h4 class="menu-price font-alt">$16.4</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="module bg-dark-30 parallax-bg restaurant-menu-bg" data-background="<?php echo BASEURL;?>public/images/restaurant/bg_pratos.webp">
          <div class="container">
            <div class="row">
              <div class="col-sm-2 col-sm-offset-5">
                <div class="alt-module-subtitle"><span class="holder-w"></span>
                  <h5 class="font-serif">Abaixo</h5><span class="holder-w"></span>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-8 col-sm-offset-2">
                <h2 class="module-title font-alt mb-0">Pratos Principais</h2>
              </div>
            </div>
          </div>
        </section>
        <section class="module">
          <div class="container">
            <div class="row multi-columns-row">
              <div class="col-sm-4">
                <div class="menu">
                  <div class="row">
                    <div class="col-sm-8">
                      <h4 class="menu-title font-alt">Wild Mushroom Bucatini with Kale</h4>
                      <div class="menu-detail font-serif">Mushroom / Veggie / White Sources</div>
                    </div>
                    <div class="col-sm-4 menu-price-detail">
                      <h4 class="menu-price font-alt">$10.5</h4>
                    </div>
                  </div>
                </div>
                <div class="menu">
                  <div class="row">
                    <div class="col-sm-8">
                      <h4 class="menu-title font-alt">Lemon and Garlic Green Beans</h4>
                      <div class="menu-detail font-serif">Lemon / Garlic / Beans</div>
                    </div>
                    <div class="col-sm-4 menu-price-detail">
                      <h4 class="menu-price font-alt">$14.5</h4>
                    </div>
                  </div>
                </div>
                <div class="menu">
                  <div class="row">
                    <div class="col-sm-8">
                      <h4 class="menu-title font-alt">LambBeef Kofka Skewers with Tzatziki</h4>
                      <div class="menu-detail font-serif">Lamb / Wine / Butter</div>
                    </div>
                    <div class="col-sm-4 menu-price-detail">
                      <h4 class="menu-price font-alt">$18.5</h4>
                    </div>
                  </div>
                </div>
                <div class="menu">
                  <div class="row">
                    <div class="col-sm-8">
                      <h4 class="menu-title font-alt">Imported Oysters Grill (5 Pieces)</h4>
                      <div class="menu-detail font-serif">Oysters / Veggie / Ginger</div>
                    </div>
                    <div class="col-sm-4 menu-price-detail">
                      <h4 class="menu-price font-alt">$15.9</h4>
                    </div>
                  </div>
                </div>
                <div class="menu">
                  <div class="row">
                    <div class="col-sm-8">
                      <h4 class="menu-title font-alt">Meatloaf with Black Pepper-Honey BBQ</h4>
                      <div class="menu-detail font-serif">Pepper / Chicken / Honey</div>
                    </div>
                    <div class="col-sm-4 menu-price-detail">
                      <h4 class="menu-price font-alt">$16.4</h4>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="menu">
                  <div class="row">
                    <div class="col-sm-8">
                      <h4 class="menu-title font-alt">Wild Mushroom Bucatini with Kale</h4>
                      <div class="menu-detail font-serif">Mushroom / Veggie / White Sources</div>
                    </div>
                    <div class="col-sm-4 menu-price-detail">
                      <h4 class="menu-price font-alt">$10.5</h4>
                    </div>
                  </div>
                </div>
                <div class="menu">
                  <div class="row">
                    <div class="col-sm-8">
                      <h4 class="menu-title font-alt">Lemon and Garlic Green Beans</h4>
                      <div class="menu-detail font-serif">Lemon / Garlic / Beans</div>
                    </div>
                    <div class="col-sm-4 menu-price-detail">
                      <h4 class="menu-price font-alt">$14.5</h4>
                    </div>
                  </div>
                </div>
                <div class="menu">
                  <div class="row">
                    <div class="col-sm-8">
                      <h4 class="menu-title font-alt">LambBeef Kofka Skewers with Tzatziki</h4>
                      <div class="menu-detail font-serif">Lamb / Wine / Butter</div>
                    </div>
                    <div class="col-sm-4 menu-price-detail">
                      <h4 class="menu-price font-alt">$18.5</h4>
                    </div>
                  </div>
                </div>
                <div class="menu">
                  <div class="row">
                    <div class="col-sm-8">
                      <h4 class="menu-title font-alt">Imported Oysters Grill (5 Pieces)</h4>
                      <div class="menu-detail font-serif">Oysters / Veggie / Ginger</div>
                    </div>
                    <div class="col-sm-4 menu-price-detail">
                      <h4 class="menu-price font-alt">$15.9</h4>
                    </div>
                  </div>
                </div>
                <div class="menu">
                  <div class="row">
                    <div class="col-sm-8">
                      <h4 class="menu-title font-alt">Meatloaf with Black Pepper-Honey BBQ</h4>
                      <div class="menu-detail font-serif">Pepper / Chicken / Honey</div>
                    </div>
                    <div class="col-sm-4 menu-price-detail">
                      <h4 class="menu-price font-alt">$16.4</h4>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="menu">
                  <div class="row">
                    <div class="col-sm-8">
                      <h4 class="menu-title font-alt">Wild Mushroom Bucatini with Kale</h4>
                      <div class="menu-detail font-serif">Mushroom / Veggie / White Sources</div>
                    </div>
                    <div class="col-sm-4 menu-price-detail">
                      <h4 class="menu-price font-alt">$10.5</h4>
                    </div>
                  </div>
                </div>
                <div class="menu">
                  <div class="row">
                    <div class="col-sm-8">
                      <h4 class="menu-title font-alt">Lemon and Garlic Green Beans</h4>
                      <div class="menu-detail font-serif">Lemon / Garlic / Beans</div>
                    </div>
                    <div class="col-sm-4 menu-price-detail">
                      <h4 class="menu-price font-alt">$14.5</h4>
                    </div>
                  </div>
                </div>
                <div class="menu">
                  <div class="row">
                    <div class="col-sm-8">
                      <h4 class="menu-title font-alt">LambBeef Kofka Skewers with Tzatziki</h4>
                      <div class="menu-detail font-serif">Lamb / Wine / Butter</div>
                    </div>
                    <div class="col-sm-4 menu-price-detail">
                      <h4 class="menu-price font-alt">$18.5</h4>
                    </div>
                  </div>
                </div>
                <div class="menu">
                  <div class="row">
                    <div class="col-sm-8">
                      <h4 class="menu-title font-alt">Imported Oysters Grill (5 Pieces)</h4>
                      <div class="menu-detail font-serif">Oysters / Veggie / Ginger</div>
                    </div>
                    <div class="col-sm-4 menu-price-detail">
                      <h4 class="menu-price font-alt">$15.9</h4>
                    </div>
                  </div>
                </div>
                <div class="menu">
                  <div class="row">
                    <div class="col-sm-8">
                      <h4 class="menu-title font-alt">Meatloaf with Black Pepper-Honey BBQ</h4>
                      <div class="menu-detail font-serif">Pepper / Chicken / Honey</div>
                    </div>
                    <div class="col-sm-4 menu-price-detail">
                      <h4 class="menu-price font-alt">$16.4</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

    <!-- FOOTER -->
    <?php
        include '../../includes/footer.php';
    ?>

        <!--  
        JavaScripts
        =============================================
        -->
    <?php
      include '../../includes/animations.php';
    ?>
  </body>
</html>