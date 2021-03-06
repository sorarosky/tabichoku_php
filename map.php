<?php include 'header.php';?>

<section class="section-content map-top-map">
  <div class="map-wrap inner">
      <div class="map">
        <div class="map-reagion europe">
          <p>ヨーロッパ</p>
          <p>39件</p>
          <a href=""></a>
        </div>
        <div class="map-reagion africa">
          <p>アフリカ</p>
          <p>3件</p>
          <a href=""></a>
        </div>
        <div class="map-reagion west-asia">
          <p>中東</p>
          <p>23件</p>
          <a href=""></a>
        </div>
        <div class="map-reagion asia">
          <p>アジア</p>
          <p>6件</p>
          <a href=""></a>
        </div>
        <div class="map-reagion japan">
          <p>日本</p>
          <p>3件</p>
          <a href=""></a>
        </div>
        <div class="map-reagion oceania">
          <p>大洋州</p>
          <p>1件</p>
          <a href=""></a>
        </div>
        <div class="map-reagion hawaii">
          <p>ハワイ</p>
          <p>7件</p>
          <a href=""></a>
        </div>
        <div class="map-reagion north-america">
          <p>北米</p>
          <p>24件</p>
          <a href=""></a>
        </div>
        <div class="map-reagion south-america">
          <p>中南米</p>
          <p>3件</p>
          <a href=""></a>
        </div>
      </div>
  </div>
</section>

<div class="contents-wrap">
  <div class="main-aside-wrap">
    <main class="main map">
      <section class="section-content popular">
        <div class="inner">
          <div class="head">人気の旅コンテンツ</div>
          <div class="swiper-container-wrapper swiper-container-travel-content-popular-wrapper">
            <nav class="swiper-container swiper-container-travel-content-popular">
              <ul class="swiper-wrapper">
                <?php for( $i=0;$i<3;$i++ ) { ?>
                <li class="swiper-slide slide0<?php echo $i; ?>">
                  <a href="">
                    <div class="img">
                      <img src="/assets/img/thumb-square.jpg" alt="">
                      <div class="info">
                        <div class="num"><i class="far fa-eye"></i> 00000</div>
                        <div class="country-name">国名が入る、国名が入る</div>
                      </div>
                    </div>
                    <div class="title"> タイトルが入る。タイトルが入る。タイトルが入る。タイトルが入る。タイトルが入る。タイトルが入る。</div>
                    <ul class="tags">
                      <li class="">ハッシュタグ</li>
                      <li class="">ハッシュタグ</li>
                      <li class="">タグ</li>
                      <li class="">ハッシュタグハッシュタグハッシュタグ</li>
                    </ul>
                  </a>
                </li>
                <?php } ?>
              </ul>
            </nav>
            <div class="pager">
              <div class="swiper-button-prev">
                <img src="/assets/img/arrow-left.svg" alt="">
              </div>
              <div class="swiper-button-next">
                <img src="/assets/img/arrow-right.svg" alt="">
              </div>
            </div>
          </div>
          <a href="" class="button">もっと見る</a>
        </div>
      </section>
      <section class="section-content latest">
        <div class="inner">
          <div class="head">新着旅コンテンツ</div>
          <div class="swiper-container-wrapper swiper-container-travel-content-latest-wrapper">
            <nav class="swiper-container swiper-container-travel-content-latest">
              <ul class="swiper-wrapper">
                <?php for( $i=0;$i<3;$i++ ) { ?>
                <li class="swiper-slide slide0<?php echo $i; ?>">
                  <a href="">
                    <div class="img">
                      <img src="/assets/img/thumb-square.jpg" alt="">
                      <div class="new">NEW</div>
                      <div class="info">
                        <div class="num"><i class="far fa-eye"></i> 00000</div>
                        <div class="country-name">国名が入る、国名が入る</div>
                      </div>
                    </div>
                    <div class="title"> タイトルが入る。タイトルが入る。タイトルが入る。タイトルが入る。タイトルが入る。タイトルが入る。</div>
                    <ul class="tags">
                      <li class="">ハッシュタグ</li>
                      <li class="">ハッシュタグ</li>
                      <li class="">タグ</li>
                      <li class="">ハッシュタグハッシュタグハッシュタグ</li>
                    </ul>
                  </a>
                </li>
                <?php } ?>
              </ul>
            </nav>
            <div class="pager">
              <div class="swiper-button-prev">
                <img src="/assets/img/arrow-left.svg" alt="">
              </div>
              <div class="swiper-button-next">
                <img src="/assets/img/arrow-right.svg" alt="">
              </div>
            </div>
          </div>
          <a href="" class="button">もっと見る</a>
        </div>
      </section>
      <section class="section-content ranking">
        <div class="inner">
          <div class="head">人気の国</div>
          <a href="" class="rank rank01">ハワイ</a>
          <a href="" class="rank rank02">セントビンセント・グレナディーン</a>
          <a href="" class="rank rank03">台湾</a>
          <a href="" class="rank rank04">アメリカ</a>
          <a href="" class="rank rank05">韓国</a>
          <a href="" class="rank rank06">フランス</a>
        </div>
      </section>
      <section class="section-content recommended-content">
        <div class="inner">
          <div class="head">おすすめの旅コンテンツ</div>
          <div class="swiper-container-wrapper swiper-container-travel-content-popular-wrapper">
            <nav class="swiper-container swiper-container-travel-content-popular">
              <ul class="swiper-wrapper">
                <?php for( $i=0;$i<3;$i++ ) { ?>
                <li class="swiper-slide slide0<?php echo $i; ?>">
                  <a href="">
                    <div class="img">
                    <div class="new">NEW</div>
                      <img src="/assets/img/thumb-square.jpg" alt="">
                      <div class="info">
                        <div class="num"><i class="far fa-eye"></i> 00000</div>
                        <div class="country-name">国名が入る、国名が入る</div>
                      </div>
                    </div>
                    <div class="title"> タイトルが入る。タイトルが入る。タイトルが入る。タイトルが入る。タイトルが入る。タイトルが入る。</div>
                    <ul class="tags">
                      <li class="">ハッシュタグ</li>
                      <li class="">ハッシュタグ</li>
                      <li class="">タグ</li>
                      <li class="">ハッシュタグハッシュタグハッシュタグ</li>
                    </ul>
                  </a>
                </li>
                <?php } ?>
              </ul>
            </nav>
            <div class="pager">
              <div class="swiper-button-prev">
                <img src="/assets/img/arrow-left.svg" alt="">
              </div>
              <div class="swiper-button-next">
                <img src="/assets/img/arrow-right.svg" alt="">
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section-content recentry-checked">
        <div class="inner">
          <div class="head">最近みた旅コンテンツ</div>
          <div class="swiper-container-wrapper swiper-container-recentry-checked-wrapper">
            <div class="swiper-container swiper-container-recentry-checked">
              <div class="swiper-wrapper">
              <?php for($i=0;$i<4;$i++) { ?>
                <div class="swiper-slide">
                  <a href="">
                    <div class="img">
                      <img src="/assets/img/thumb.jpg" alt="">
                    </div>
                    <div class="num"><i class="far fa-eye"></i> 00000</div>
                    <div class="country-name">国名が入る、国名が入る</div>
                    <div class="title"> タイトルが入る。タイトルが入る。タイトルが入る。タイトルが入る。タイトルが入る。タイトルが入る。</div>
                  </a>
                </div>
              <?php } ?>
              </div>              
              <a href="" class="button">もっと見る</a>
            </div>
          </div>
        </div>
      </section>
    </main>
    <?php include 'components/aside-travel-content.php';?>
  </div>
</div>

<?php include 'footer.php';?>