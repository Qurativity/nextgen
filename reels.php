 <link
      rel="stylesheet"
      type="text/css"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
      integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />
    <link rel="stylesheet" type="text/css" href="css/common.css" />
    <link rel="stylesheet" type="text/css" href="css/fonts.css" />
    <link rel="stylesheet" type="text/css" href="css/Reels.css" />

    <script type="text/javascript" src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script type="text/javascript" src="https://unpkg.com/headroom.js@0.12.0/dist/headroom.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/px2code/posize/build/v1.00.6.js"></script>
<?php
include 'header.php';
include 'admin/conn.php';
$resultt = mysqli_query($con,"SELECT * FROM reels where id='1'");
    $roww = mysqli_fetch_array($resultt);
$resultt2 = mysqli_query($con,"SELECT * FROM settings where id='1'");
    $roww2 = mysqli_fetch_array($resultt2);
?>

 
     <main class="reels reels-main layout">
      <!-- ======= section1 ======= --> 
      <section class="reels-section1__section1 layout">
        <div style="--src:url(../assets/93b2d11fd32a0f9ebaabebc1c8bcfa01.png)" class="reels-section1__image layout"></div>
        <div style="--src:url(../assets/40b3222aec331c0e131855ce03d0756e.png)" class="reels-section1__cover layout"></div>
        <div style="--src:url(../assets/79c19217a412aa2ffd71df4f0c54d024.png)" class="reels-section1__cover layout"></div>
        <h1 class="reels-section1__hero-title1 layout">Reels</h1>
        <h1 class="reels-section1__hero-title2 layout">Highlights from NexGenHealth presentations</h1>
      </section>
      <comment content="======= End section1 =======" break="true"></comment
      ><!-- ======= section2 ======= --> 
      <section class="reels-section2__section2 layout">
        <h1 class="reels-section2__big-title-box layout">
          <pre class="reels-section2__big-title"><?=$roww['first']?>
</pre
          >
        </h1>
      </section>
      <comment content="======= End section2 =======" break="true"></comment
      ><!-- ======= section3 ======= --> 
      <section class="reels-section3__section3 layout">
        <div class="reels-section3__flex layout">
          <div class="reels-section3__flex-item">
            <div class="reels-section3__flex1 layout">
              <h1 class="reels-section3__hero-title3 layout"><?=$roww['second']?></h1>
              <h1 class="reels-section3__big-title1-box layout">
                <pre class="reels-section3__big-title1"><?=$roww['third']?></pre>
              </h1>
              <h1 class="reels-section3__big-title1-box layout1">
                <pre class="reels-section3__big-title1">
<?=$roww['fourth']?> </pre
                >
              </h1>
            </div>
          </div>
          <div class="reels-section3__flex-spacer"></div>
          <div class="reels-section3__flex-item1">
            <div class="reels-section3__flex2 layout">
              <div
                style="--src:url(../assets/339kBSuChANiX4gjV6sF8srWV4ySuhRMYj.png)"
                class="reels-section3__icon layout"
              ></div>
              <div
                style="--src:url(../assets/2c75ed2e53be75f1fb087efa822b17b9.png)"
                class="reels-section3__image1 layout"
              ></div>
            </div>
          </div>
        </div>
      </section>
      <comment content="======= End section3 =======" break="true"></comment
      ><!-- ======= section4 ======= --> 
      <section class="reels-section4__section4 layout">
        <div class="reels-section4__flex layout">
          <div class="reels-section4__flex-item">
            <div class="reels-section4__flex1 layout">
              <div
                style="--src:url(../assets/339kBSuChANiX4gjV6sF8srWV4ySuhRMYj.png)"
                class="reels-section4__icon layout"
              ></div>
              <div
                style="--src:url(../assets/f469507bb6ad9d01e8fbdb8fbcf01afb.png)"
                class="reels-section4__image4 layout"
              ></div>
            </div>
          </div>
          <div class="reels-section4__flex-spacer"></div>
          <div class="reels-section4__flex-item1">
            <div class="reels-section4__flex2 layout">
              <h1 class="reels-section4__hero-title3 layout"><?=$roww['fifth']?></h1>
              <h1 class="reels-section4__big-title1-box layout">
                <pre class="reels-section4__big-title1"><?=$roww['six']?></pre>
              </h1>
              <h1 class="reels-section4__big-title1-box layout1">
                <pre class="reels-section4__big-title1">
<?=$roww['seven']?></pre
                >
              </h1>
            </div>
          </div>
        </div>
      </section>
      <comment content="======= End section4 =======" break="true"></comment
      ><!-- ======= section5 ======= --> 
      <section class="reels-section5__section5 layout">
        <div class="reels-section5__flex layout">
          <div class="reels-section5__flex-item">
            <div class="reels-section5__flex1 layout">
              <h1 class="reels-section5__hero-title3 layout">
                <?=$roww['eight']?>
              </h1>
              <h1 class="reels-section5__big-title1-box layout">
                <pre class="reels-section5__big-title1"><?=$roww['nine']?> </pre>
              </h1>
              <h1 class="reels-section5__big-title1-box layout1">
                <pre class="reels-section5__big-title1">
<?=$roww['ten']?></pre
                >
              </h1>
            </div>
          </div>
          <div class="reels-section5__flex-spacer"></div>
          <div class="reels-section5__flex-item1">
            <div class="reels-section5__group layout">
              <div
                style="--src:url(../assets/9c3fcc4e6f6d6b4e0bd3cb5c231679ec.png)"
                class="reels-section5__image2 layout"
              ></div>
              <div
                style="--src:url(../assets/339kBSuChANiX4gjV6sF8srWV4ySuhRMYj.png)"
                class="reels-section5__icon layout"
              ></div>
            </div>
          </div>
        </div>
      </section>
      <comment content="======= End section5 =======" break="true"></comment
      ><!-- ======= section6 ======= --> 
      <section class="reels-section6__section6 layout">
        <div class="reels-section6__flex layout">
          <div class="reels-section6__flex-item">
            <div class="reels-section6__flex1 layout">
              <div
                style="--src:url(../assets/339kBSuChANiX4gjV6sF8srWV4ySuhRMYj.png)"
                class="reels-section6__icon layout"
              ></div>
              <div
                style="--src:url(../assets/e055a28f27d24211ff4edd15975e7acf.png)"
                class="reels-section6__image5 layout"
              ></div>
            </div>
          </div>
          <div class="reels-section6__flex-spacer"></div>
          <div class="reels-section6__flex-item1">
            <div class="reels-section6__flex2 layout">
              <h1 class="reels-section6__hero-title3 layout"><?=$roww['eleven']?></h1>
              <h1 class="reels-section6__big-title1-box layout">
                <pre class="reels-section6__big-title1"><?=$roww['twelve']?></pre>
              </h1>
              <h1 class="reels-section6__big-title1-box layout1">
                <pre class="reels-section6__big-title1">
<?=$roww['thirteen']?> </pre
                >
              </h1>
            </div>
          </div>
        </div>
      </section>
      <comment content="======= End section6 =======" break="true"></comment
      ><!-- ======= section7 ======= --> 
      <section class="reels-section7__section7 layout">
        <div class="reels-section7__flex layout">
          <div class="reels-section7__flex-item">
            <div class="reels-section7__flex1 layout">
              <h1 class="reels-section7__hero-title3 layout">
                <?=$roww['fourteen']?>
              </h1>
              <h1 class="reels-section7__big-title1-box layout">
                <pre class="reels-section7__big-title1"><?=$roww['fifteen']?></pre>
              </h1>
              <h1 class="reels-section7__big-title1-box layout1">
                <pre class="reels-section7__big-title1">
<?=$roww['sixteen']?> </pre
                >
              </h1>
            </div>
          </div>
          <div class="reels-section7__flex-spacer"></div>
          <div class="reels-section7__flex-item1">
            <div class="reels-section7__group layout">
              <div
                style="--src:url(../assets/bd2cb4f374b3f38c3bff30ad19062298.png)"
                class="reels-section7__image3 layout"
              ></div>
              <div
                style="--src:url(../assets/339kBSuChANiX4gjV6sF8srWV4ySuhRMYj.png)"
                class="reels-section7__icon layout"
              ></div>
            </div>
          </div>
        </div>
      </section>
      <comment content="======= End section7 =======" break="true"></comment
      ><!-- ======= section8 ======= --> 
      <section class="reels-section8__section8 layout">
        <div class="reels-section8__block1 layout">
          <div class="reels-section8__flex layout5">
            <div class="reels-section8__flex1 layout">
              <div class="reels-section8__flex-item">
                <div class="reels-section8__flex layout1">
                  <div class="reels-section8__flex layout">
                    <div class="reels-section8__group layout">
                      <h1 class="reels-section8__hero-title4 layout">Contact us</h1>
                      <hr class="reels-section8__line layout" />
                    </div>
                    <div class="reels-section8__group layout1">
                      <div
                        style="--src:url(../assets/b04dbd3752aca2259bb2f8a2b8595d66.png)"
                        class="reels-section8__image6 layout"
                      ></div>
                      <h3 class="reels-section8__subtitle layout">info@NexGenHealth.solutions</h3>
                    </div>
                    <div class="reels-section8__group layout2">
                      <div
                        style="--src:url(../assets/ce455852fd2af7555bd6eeb2bffdf54b.png)"
                        class="reels-section8__icon1 layout"
                      ></div>
                      <h3 class="reels-section8__subtitle layout1">+1 (289) 301-5551</h3>
                    </div>
                    <div class="reels-section8__group layout3">
                      <div
                        style="--src:url(../assets/98245247e5f752f6e57d7159c6788d8d.png)"
                        class="reels-section8__icon2 layout"
                      ></div>
                      <h3 class="reels-section8__subtitle layout2">Toronto, canada</h3>
                    </div>
                  </div>
                  <h1 class="reels-section8__hero-title4 layout1">We’d Love To Hear From You !</h1>
                </div>
              </div>
              <div class="reels-section8__flex-spacer"></div>
              <div class="reels-section8__flex-item1">
                <div class="reels-section8__flex layout2">
                  <h1 class="reels-section8__hero-title4 layout2">Quick Links</h1>
                  <hr class="reels-section8__line1 layout" />
                  <h3 class="reels-section8__subtitle1-box layout">
                    <pre class="reels-section8__subtitle1">
About us
Fundraising
Donate
Faq
Contact us</pre
                    >
                  </h3>
                </div>
              </div>
              <div class="reels-section8__flex-spacer1"></div>
              <div class="reels-section8__flex-item2">
                <div class="reels-section8__flex layout3">
                  <h1 class="reels-section8__hero-title4 layout3">Our Services</h1>
                  <hr class="reels-section8__line2 layout" />
                  <h3 class="reels-section8__subtitle2-box layout">
                    <pre class="reels-section8__subtitle2">
Programs
Reels
Research
Fundraising
</pre
                    >
                  </h3>
                </div>
              </div>
            </div>
            <div class="reels-section8__flex2 layout">
              <div class="reels-section8__flex-item3">
                <div class="reels-section8__cover-block layout">
                  <h1 class="reels-section8__big-title2 layout">Name</h1>
                </div>
              </div>
              <div class="reels-section8__flex-spacer2"></div>
              <div class="reels-section8__flex-item4">
                <div class="reels-section8__cover-block1 layout">
                  <h1 class="reels-section8__big-title2 layout1">Phone</h1>
                </div>
              </div>
              <div class="reels-section8__flex-spacer3"></div>
              <div class="reels-section8__flex-item5">
                <div class="reels-section8__cover-block2 layout">
                  <h1 class="reels-section8__big-title2 layout2">Message</h1>
                </div>
              </div>
              <div class="reels-section8__flex-spacer4"></div>
              <div class="reels-section8__flex-item6">
                <div class="reels-section8__cover-block3 layout">
                  <h1 class="reels-section8__big-title3 layout">Submit</h1>
                </div>
              </div>
            </div>
            <div class="reels-section8__flex layout4">
              <div class="reels-section8__box5 layout"></div>
              <h3 class="reels-section8__subtitle3 layout">copyright © 2022 NexGenHealth Ltd.</h3>
            </div>
          </div>
        </div>
      </section>
      <!-- ======= End section8 ======= --> 

    </main>
    <script type="text/javascript">
      AOS.init();
    </script>
  </body>
</html>

   
