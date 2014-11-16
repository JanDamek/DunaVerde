<?php
use_helper('Lightbox');
?>
<!-- HEADRE -->
<div id="header">
    <h1><a href="<?php echo $stranka->getLinkH1(); ?>" class="dunanad"><span>Duna Verde</span></a>severoitalské letovisko</h1>
</div>
<!-- END HEADRE -->


<div id="page">  
    <!-- CONTENT -->
    <div id="content">
        <div id="obsah"> 
            <h2><?php echo $stranka->getTitleStr(); ?></h2>
            <?php echo image_tag(image_resizer(859, 252, $stranka->getTopImg()), array('alt' => $stranka->getTopImgAlt(), 'title' => $stranka->getTopImgTitle())); ?>
            <div id="leva">
                <?php echo $stranka->getRaw('popis_levy'); ?>
                <?php if ($gal1) { ?>
                    <?php
                    $images = array();
                    $link_options = array(
                        'title' => $gal1->getTitle(),
                        'size' => '880x530',
                        'speed' => '20',
                        'slidenamew' => 1
                    );
                    foreach ($gal1_img as $value) {
                        $images[] = array(
                            'thumbnail' => image_resizer(100, 80, $value->getPath()),
                            'image' => image_resizer(870, 500, $value->getPath()),
                            'options' => array('title' => $value->getTitle(), 'alt' => $value->getTitle())
                        );
                    }
                    echo light_slide_text(image_tag(image_resizer(203, 104, $stranka->getImg1()), array('alt' => $stranka->getImg1Alt(), 'title' => $stranka->getImg1Title(), 'class' => 'obrazek')), $images, $link_options);
                    ?>
                <?php } else { ?>                        
                    <?php echo image_tag(image_resizer(203, 104, $stranka->getImg1()), array('alt' => $stranka->getImg1Alt(), 'title' => $stranka->getImg1Title(), 'class' => 'obrazek')); ?>
                <?php } ?>
                <?php if ($gal2) { ?>
                    <?php
                    $images = array();
                    $link_options = array(
                        'title' => $gal2->getTitle(),
                        'size' => '880x530',
                        'speed' => '20',
                        'slidename' => 2
                    );
                    foreach ($gal2_img as $value) {
                        $images[] = array(
                            'thumbnail' => image_resizer(100, 80, $value->getPath()),
                            'image' => image_resizer(870, 500, $value->getPath()),
                            'options' => array('title' => $value->getTitle(), 'alt' => $value->getTitle())
                        );
                    }
                    echo light_slide_text(image_tag(image_resizer(203, 104, $stranka->getImg2()), array('alt' => $stranka->getImg2Alt(), 'title' => $stranka->getImg2Title(), 'class' => 'obrazek')), $images, $link_options);
                    ?>
                <?php } else { ?>                        
                    <?php echo image_tag(image_resizer(203, 104, $stranka->getImg2()), array('alt' => $stranka->getImg2Alt(), 'title' => $stranka->getImg2Title(), 'class' => 'obrazek')); ?>
                <?php } ?>
                <?php if ($gal3) { ?>
                    <?php
                    $images = array();
                    $link_options = array(
                        'title' => $gal3->getTitle(),
                        'size' => '880x530',
                        'speed' => '20',
                        'slidename' => 3
                    );
                    foreach ($gal3_img as $value) {
                        $images[] = array(
                            'thumbnail' => image_resizer(100, 80, $value->getPath()),
                            'image' => image_resizer(870, 500, $value->getPath()),
                            'rel' => 3,                            
                            'options' => array('title' => $value->getTitle(), 'alt' => $value->getTitle())
                        );
                    }
                    echo light_slide_text(image_tag(image_resizer(203, 104, $stranka->getImg3()), array('alt' => $stranka->getImg3Alt(), 'title' => $stranka->getImg3Title(), 'class' => 'obrazek')), $images, $link_options);
                    ?>
                <?php } else { ?>                        
                    <?php echo image_tag(image_resizer(203, 104, $stranka->getImg3()), array('alt' => $stranka->getImg3Alt(), 'title' => $stranka->getImg3Title(), 'class' => 'obrazek')); ?>
                <?php } ?>
                <?php if ($gal4) { ?>
                    <?php
                    $images = array();
                    $link_options = array(
                        'title' => $gal4->getTitle(),
                        'size' => '880x530',
                        'speed' => '20',
                        'slidename' => 4
                    );
                    foreach ($gal4_img as $value) {
                        $images[] = array(
                            'thumbnail' => image_resizer(100, 80, $value->getPath()),
                            'image' => image_resizer(870, 500, $value->getPath()),
                            'rel' => 4,
                            'options' => array('title' => $value->getTitle(), 'alt' => $value->getTitle())
                        );
                    }
                    echo light_slide_text(image_tag(image_resizer(203, 104, $stranka->getImg4()), array('alt' => $stranka->getImg4Alt(), 'title' => $stranka->getImg4Title(), 'class' => 'obrazek')), $images, $link_options);
                    ?>
                <?php } else { ?>                        
                    <?php echo image_tag(image_resizer(203, 104, $stranka->getImg4()), array('alt' => $stranka->getImg4Alt(), 'title' => $stranka->getImg4Title(), 'class' => 'obrazek')); ?>
                <?php } ?>
            </div>
            <div id="prava">
                <div class="region">
                    Region: <strong><?php echo $stranka->getRegion(); ?></strong><br />
                    Vzdálenost od Prahy: <strong><?php echo $stranka->getVzdalenost(); ?> km</strong>
                </div>
                <?php echo $stranka->getRaw('popis_pravy'); ?>
            </div>

            <div class="ubytovani">
                <h4>Vybrané ubytovací kapacity v Duna Verde:</h4> <br /><br />

                <div class="zajezd" style="margin-right: 60px;">
                    <div class="zajezd_obsah">
                        <a href="<?php echo $stranka->getPromo1Link(); ?>"><?php echo image_tag(image_resizer(151, 105, $stranka->getPromo1Img()), array('alt' => $stranka->getPromo1ImgAlt(), 'title' => $stranka->getPromo1ImgTitle())); ?></a>
                        <h3><?php
                echo $stranka->getPromo1Title();
                for ($i = 1; $i <= $stranka->getPromo1Star(); $i++)
                    echo '*';
                ?></h3>
                        <?php echo $stranka->getRaw('promo1_popis'); ?>
                    </div>
                    <div class="cena">Cena od: <strong><?php echo $stranka->getPromo1Cena(); ?></strong></div><a href="<?php echo $stranka->getPromo1Link(); ?>" class="butvice"><span>více informací</span></a>
                </div>

                <div class="zajezd">
                    <div class="zajezd_obsah">
                        <a href="<?php echo $stranka->getPromo2Link(); ?>"><?php echo image_tag(image_resizer(151, 105, $stranka->getPromo2Img()), array('alt' => $stranka->getPromo2ImgAlt(), 'title' => $stranka->getPromo2ImgTitle())); ?></a>
                        <h3><?php
                            echo $stranka->getPromo2Title();
                            for ($i = 1; $i <= $stranka->getPromo2Star(); $i++)
                                echo '*';
                ?></h3>
                        <?php echo $stranka->getRaw('promo2_popis'); ?>
                    </div>
                    <div class="cena">Cena od: <strong><?php echo $stranka->getPromo2Cena(); ?></strong></div><a href="<?php echo $stranka->getPromo2Link(); ?>" class="butvice"><span>více informací</span></a>
                </div>

                <div class="zajezd" style="margin-right: 60px;">
                    <div class="zajezd_obsah">
                        <a href="<?php echo $stranka->getPromo3Link(); ?>"><?php echo image_tag(image_resizer(151, 105, $stranka->getPromo3Img()), array('alt' => $stranka->getPromo3ImgAlt(), 'title' => $stranka->getPromo3ImgTitle())); ?></a>
                        <h3><?php
                            echo $stranka->getPromo3Title();
                            for ($i = 1; $i <= $stranka->getPromo3Star(); $i++)
                                echo '*';
                ?></h3>
                        <?php echo $stranka->getRaw('promo3_popis'); ?>
                    </div>
                    <div class="cena">Cena od: <strong><?php echo $stranka->getPromo3Cena(); ?></strong></div><a href="<?php echo $stranka->getPromo3Link(); ?>" class="butvice"><span>více informací</span></a>
                </div>

                <div class="zajezd">
                    <div class="zajezd_obsah">
                        <a href="<?php echo $stranka->getPromo4Link(); ?>"><?php echo image_tag(image_resizer(151, 105, $stranka->getPromo4Img()), array('alt' => $stranka->getPromo4ImgAlt(), 'title' => $stranka->getPromo4ImgTitle())); ?></a>
                        <h3><?php
                            echo $stranka->getPromo4Title();
                            for ($i = 1; $i <= $stranka->getPromo4Star(); $i++)
                                echo '*';
                ?></h3>
                        <?php echo $stranka->getRaw('promo4_popis'); ?>
                    </div>
                    <div class="cena">Cena od: <strong><?php echo $stranka->getPromo4Cena(); ?></strong></div><a href="<?php echo $stranka->getPromo4Link(); ?>" class="butvice"><span>více informací</span></a>
                </div>  
            </div>

            <div class="banners">
                <div class="banner" style="margin-right: 30px;"><a href="<?php echo $stranka->getBaner1Link(); ?>"><?php echo image_tag(image_resizer(310, 100, $stranka->getBaner1Img()), array('alt' => $stranka->getBaner1ImgAlt(), 'title' => $stranka->getBaner1ImgTitle())); ?></a></div>
                <div class="banner" style="margin-right: 30px;"><a href="<?php echo $stranka->getBaner2Link(); ?>"><?php echo image_tag(image_resizer(310, 100, $stranka->getBaner2Img()), array('alt' => $stranka->getBaner2ImgAlt(), 'title' => $stranka->getBaner2ImgTitle())); ?></a></div>
                <div class="banner"><a href="<?php echo $stranka->getBaner3Link(); ?>"><?php echo image_tag(image_resizer(310, 100, $stranka->getBaner3Img()), array('alt' => $stranka->getBaner3ImgAlt(), 'title' => $stranka->getBaner3ImgTitle())); ?></a></div>
            </div>

            <div class="seo">
                <p>
                    DOVOLENÁ DUNA VERDE - ZÁJEZDY DUNA VERDE - POBYTY DUNA VERDE - UBYTOVÁNÍ DUNA VERDE - APARTMÁNY DUNA VERDE
                </p>
            </div>

        </div>
    </div>
    <!-- END CONTENT -->

    <!-- FOOTER -->
    <div id="footer">
        Copyright © 2012 Cestovní agentura Italia v.o.s. | <a href="http://www.caitalia.cz">www.caitalia.cz</a>
    </div>
    <!-- END FOOTER -->
    <div id="links">
        <?php
        $first = true;
        foreach ($odkazy as $item) {
            if (!$first) {
                echo ' | ';
            }
            echo '<a href="' . $item->getLink() . '">' . $item->getName() . '</a>';
            $first = false;
        }
        ?>
    </div>
</div>
