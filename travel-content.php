<?php include 'header.php';?>
<?php include 'breadcrumb.php';?>
<?php include 'components/travel-content-kv.php';?>
<div class="contents-wrap">
  <div class="main-aside-wrap">
    <main class="main travel-content">
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
      <section class="section-content themes">
        <div class="inner">
          <div class="head">テーマ別人気の旅コンテンツ</div>
          <div class="sub-head">持続可能な社会を創る旅</div>
          <div class="swiper-container-wrapper swiper-container-travel-content-themes01-wrapper">
            <nav class="swiper-container swiper-container-travel-content-themes01">
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

          <div class="sub-head">観光・送迎</div>
          <div class="swiper-container-wrapper swiper-container-travel-content-themes02-wrapper">
            <nav class="swiper-container swiper-container-travel-content-themes02">
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

          <div class="sub-head">視察・見学</div>
          <div class="swiper-container-wrapper swiper-container-travel-content-themes03-wrapper">
            <nav class="swiper-container swiper-container-travel-content-themes03">
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

          <div class="sub-head">教育・研修</div>
          <div class="swiper-container-wrapper swiper-container-travel-content-themes04-wrapper">
            <nav class="swiper-container swiper-container-travel-content-themes04">
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

          <div class="sub-head">趣味・教養</div>
          <div class="swiper-container-wrapper swiper-container-travel-content-themes05-wrapper">
            <nav class="swiper-container swiper-container-travel-content-themes05">
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

          <div class="sub-head">ホテル</div>
          <div class="swiper-container-wrapper swiper-container-travel-content-themes06-wrapper">
            <nav class="swiper-container swiper-container-travel-content-themes06">
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

          <div class="sub-head">レストラン・バー</div>
          <div class="swiper-container-wrapper swiper-container-travel-content-themes07-wrapper">
            <nav class="swiper-container swiper-container-travel-content-themes07">
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

          <div class="sub-head">交通・乗物</div>
          <div class="swiper-container-wrapper swiper-container-travel-content-themes08-wrapper">
            <nav class="swiper-container swiper-container-travel-content-themes08">
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

          <div class="sub-head">グローバルパートナー</div>
          <div class="swiper-container-wrapper swiper-container-travel-content-themes09-wrapper">
            <nav class="swiper-container swiper-container-travel-content-themes09">
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

          <div class="sub-head">あなたにおすすめの旅コンテンツ</div>
          <div class="swiper-container-wrapper swiper-container-travel-content-themes10-wrapper">
            <nav class="swiper-container swiper-container-travel-content-themes10">
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

          <div class="sub-head">あなたが最近みた旅コンテンツ</div>
          <div class="swiper-container-wrapper swiper-container-travel-content-themes11-wrapper">
            <nav class="swiper-container swiper-container-travel-content-themes11">
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
    </main>
    <?php include 'components/aside-travel-content.php';?>
  </div>
</div>

<?php include 'footer.php';?>