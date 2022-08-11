<?php
include 'header.php';
include 'admin/conn.php';
$resultt = mysqli_query($con,"SELECT * FROM home where id='1'");
    $roww = mysqli_fetch_array($resultt);
$resultt2 = mysqli_query($con,"SELECT * FROM settings where id='1'");
    $roww2 = mysqli_fetch_array($resultt2);
?>

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
   <link rel="stylesheet" type="text/css" href="css/Index.css" />

    <script type="text/javascript" src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script type="text/javascript" src="https://unpkg.com/headroom.js@0.12.0/dist/headroom.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/px2code/posize/build/v1.00.6.js"></script>
   <main class="index index-main layout">
      <!-- ======= section1 ======= --> 
      <section class="index-section1__section1 layout">
        <div class="index-section1__flex layout1">
          <div class="index-section1__flex layout">
            <h1 class="index-section1__hero-title-box layout">
              <pre class="index-section1__hero-title">
<?=$roww['first']?></pre
              >
            </h1>
            <h1 class="index-section1__hero-title1 layout"><?=$roww['second']?></h1>
          </div>
          <div class="index-section1__flex1 layout">
            <div class="index-section1__flex-item">
              <div class="index-section1__block1 layout">
                <div class="index-section1__group layout">
                  <div class="index-section1__box1 layout"></div>
                  <h3 class="index-section1__subtitle layout">Join Our Community</h3>
                </div>
              </div>
            </div>
            <div class="index-section1__flex-spacer"></div>
            <div class="index-section1__flex-item1">
              <div class="index-section1__block2 layout">
                <h3 class="index-section1__subtitle1 layout">LaSeRR Challenge</h3>
              </div>
            </div>
          </div>
        </div>
        <div
          style="--src:url(../assets/50eb205f0785039a5e56ac137c44ae89.png)"
          class="index-section1__block3 layout"
        ></div>
      </section>
      <comment content="======= End section1 =======" break="true"></comment
      ><!-- ======= section2 ======= --> 
      <section class="index-section2__section2 layout">
        <div class="index-section2__group layout">
          <div class="index-section2__box20 layout"></div>
          <div class="index-section2__flex layout2">
            <div class="index-section2__flex1 layout">
              <div class="index-section2__flex-item">
                <div
                  style="--src:url(../assets/e3a0d49a0924f903f227bd73bf1df006.png)"
                  class="index-section2__image10 layout"
                ></div>
              </div>
              <div class="index-section2__flex-spacer"></div>
              <div class="index-section2__flex-item1">
                <div class="index-section2__flex layout">
                  <h1 class="index-section2__hero-title8-box layout">
                    <pre class="index-section2__hero-title8">
<?=$roww['third']?></pre
                    >
                  </h1>
                  <h1 class="index-section2__big-title5 layout">THE NEXT CHAPTER IN HEALTH:</h1>
                  <h1 class="index-section2__big-title1-box layout">
                    <pre class="index-section2__big-title1" style="background:none;border-style:none">
<?=$roww['fourth']?>
</pre
                    >
                  </h1>
                </div>
              </div>
            </div>
            <div class="index-section2__flex layout1">
              <h1 class="index-section2__big-title11 layout">
                <?=$roww['fifth']?>
              </h1>
              <div class="index-section2__block8 layout" style="background:none">
                <button class="index-section2__hero-title9 layout" style="background:white;border-style:none;padding:20px;border-radius:20px">Learn more</button>
              </div>
            </div>
          </div>
        </div>
      </section>
      <comment content="======= End section2 =======" break="true"></comment
      ><!-- ======= section3 ======= --> 
      <section class="index-section3__section3 layout">
        <div class="index-section3__flex layout">
          <div class="index-section3__flex1 layout">
            <div class="index-section3__flex-item">
              <div class="index-section3__group layout">
                <div
                  style="--src:url(../assets/7850103f63aee9b62c85d0f839e2a1c8.png)"
                  class="index-section3__cover layout"
                ></div>
                <div
                  style="--src:url(../assets/5639149cdbeca0efc9d056f323045e85.png)"
                  class="index-section3__cover layout"
                ></div>
                <h1 class="index-section3__big-title2-box layout">
                  <pre class="index-section3__big-title2"><?=$roww['six']?> </pre>
                </h1>
                <div
                  style="--src:url(../assets/5719cad0a6244a67d96faf7fac795d86.png)"
                  class="index-section3__icon2 layout"
                ></div>
              </div>
            </div>
            <div class="index-section3__flex-spacer"></div>
            <div class="index-section3__flex-item1">
              <div class="index-section3__group layout">
                <div
                  style="--src:url(../assets/f25c175dfc310af8f01dbbc5ff3e3a98.png)"
                  class="index-section3__cover layout1"
                ></div>
                <div
                  style="--src:url(../assets/5639149cdbeca0efc9d056f323045e85.png)"
                  class="index-section3__cover layout2"
                ></div>
                <h1 class="index-section3__big-title2-box layout1">
                  <pre class="index-section3__big-title2"><?=$roww['seven']?> </pre>
                </h1>
                <div
                  style="--src:url(../assets/5719cad0a6244a67d96faf7fac795d86.png)"
                  class="index-section3__icon2 layout"
                ></div>
              </div>
            </div>
            <div class="index-section3__flex-spacer1"></div>
            <div class="index-section3__flex-item2">
              <div class="index-section3__group layout">
                <div
                  style="--src:url(../assets/9170f1da65a37d21c40474cfbf5abc83.png)"
                  class="index-section3__cover layout3"
                ></div>
                <div
                  style="--src:url(../assets/5639149cdbeca0efc9d056f323045e85.png)"
                  class="index-section3__cover layout4"
                ></div>
                <h1 class="index-section3__big-title2-box layout2">
                  <pre class="index-section3__big-title2"><?=$roww['eight']?> </pre>
                </h1>
                <div
                  style="--src:url(../assets/5719cad0a6244a67d96faf7fac795d86.png)"
                  class="index-section3__icon2 layout"
                ></div>
              </div>
            </div>
          </div>
          <div class="index-section3__group layout1">
            <h1 class="index-section3__big-title layout">
             <?=$roww['nine']?>
            </h1>
          </div>
        </div>
      </section>
      <comment content="======= End section3 =======" break="true"></comment
      ><!-- ======= section4 ======= --> 
      <section class="index-section4__section4 layout">
        <div class="index-section4__flex layout">
          <div class="index-section4__flex1 layout">
            <div class="index-section4__flex-item">
              <div class="index-section4__group layout">
                <div class="index-section4__box3 layout"></div>
                <div class="index-section4__box6 layout"></div>
                <h1 class="index-section4__hero-title2 layout">Corporate</h1>
                <div
                  style="--src:url(../assets/2ed4c12cf02f728af483c58e7d6d429b.png)"
                  class="index-section4__image9 layout"
                ></div>
              </div>
            </div>
            <div class="index-section4__flex-spacer"></div>
            <div class="index-section4__flex-item1">
              <div class="index-section4__group layout1">
                <div class="index-section4__box4 layout"></div>
                <div class="index-section4__box6 layout1"></div>
                <h1 class="index-section4__hero-title2 layout1">Healthcare</h1>
                <div
                  style="--src:url(../assets/f5f62b15473aac23f61b68140cca40e6.png)"
                  class="index-section4__image1 layout"
                ></div>
              </div>
            </div>
            <div class="index-section4__flex-spacer1"></div>
            <div class="index-section4__flex-item2">
              <div class="index-section4__group layout2">
                <div class="index-section4__box5 layout"></div>
                <div class="index-section4__box7 layout"></div>
                <h1 class="index-section4__hero-title2 layout2">General public</h1>
                <div
                  style="--src:url(../assets/00af1e1ff308da767c342fbcf9c5c401.png)"
                  class="index-section4__block7 layout"
                ></div>
              </div>
            </div>
          </div>
          <div class="index-section4__cover-block layout">
            <div class="index-section4__group layout3">
              <div class="index-section4__box layout"></div>
              <h1 class="index-section4__big-title-box layout">
                <pre class="index-section4__big-title">
<?=$roww['ten']?></pre
                >
              </h1>
            </div>
          </div>
        </div>
      </section>
      <comment content="======= End section4 =======" break="true"></comment
      ><!-- ======= section5 ======= --> 
      <section class="index-section5__section5 layout">
        <div class="index-section5__flex layout">
          <div class="index-section5__flex1 layout">
            <div class="index-section5__flex-item">
              <h1 class="index-section5__hero-title3 layout">How we Give Back</h1>
            </div>
            <div class="index-section5__flex-spacer"></div>
            <div class="index-section5__flex-item1">
              <div
                style="--src:url(../assets/a9e970ca3122e0c2654a30caa3d356ef.png)"
                class="index-section5__block5 layout"
              ></div>
            </div>
          </div>
          <div class="index-section5__group layout">
            <h1 class="index-section5__big-title-box layout">
              <pre class="index-section5__big-title">
<?=$roww['eleven']?>
</pre
              >
            </h1>
            <div class="index-section5__box12 layout"></div>
            <div class="index-section5__box13 layout"></div>
            <h1 class="index-section5__hero-title6 layout">RADDical A.R.T</h1>
            <div
              style="--src:url(../assets/af9a031c68161a01f9fc37625d6468af.png)"
              class="index-section5__image6 layout"
            ></div>
          </div>
        </div>
      </section>
      <comment content="======= End section5 =======" break="true"></comment
      ><!-- ======= section6 ======= --> 
      <section class="index-section6__section6 layout">
        <div class="index-section6__group layout1">
          <div class="index-section6__cover-block1 layout">
            <div class="index-section6__flex layout">
              <div class="index-section6__flex-item"><hr class="index-section6__line layout" /></div>
              <div class="index-section6__flex-spacer"></div>
              <div class="index-section6__flex-item1">
                <div
                  style="--src:url(../assets/9d69663a4ef90e713ba05f34187f1ee2.png)"
                  class="index-section6__image3 layout"
                ></div>
              </div>
            </div>
          </div>
          <div class="index-section6__group layout">
            <h1 class="index-section6__big-title1 layout">
              <?=$roww['twelve']?>
            </h1>
            <h1 class="index-section6__big-title2 layout">~RLR &amp; Associates Inc., Toronto, Canada</h1>
            <div
              style="--src:url(../assets/045e557a1fef00a4cdace3da8a57aff0.png)"
              class="index-section6__image2 layout"
            ></div>
            <h1 class="index-section6__big-title1 layout1">See what our clients are saying</h1>
          </div>
        </div>
      </section>
      <comment content="======= End section6 =======" break="true"></comment
      ><!-- ======= section7 ======= --> 
      <section class="index-section7__section7 layout">
        <div class="index-section7__group layout1">
          <div class="index-section7__box8 layout"></div>
          <div class="index-section7__block4 layout">
            <div
              style="--src:url(../assets/de36efff4f2c975281decfbd846b0e7c.png)"
              class="index-section7__decorator layout"
            ></div>
            <div class="index-section7__cover-block2 layout">
              <div class="index-section7__group layout">
                <div class="index-section7__box11 layout"></div>
                <h1 class="index-section7__hero-title5 layout">RADDical A.R.T. Gallery</h1>
              </div>
            </div>
          </div>
        </div>
      </section>
      <comment content="======= End section7 =======" break="true"></comment
      ><!-- ======= section8 ======= --> 
      <section class="index-section8__section8 layout">
        <div class="index-section8__flex layout">
          <div
            style="--src:url(../assets/bf4988c76f953e443f71336c10dab1c4.png)"
            class="index-section8__image4 layout"
          ></div>
          <h1 class="index-section8__hero-title4 layout">
            <?=$roww['thirteen']?>
          </h1>
          <h1 class="index-section8__big-title1 layout">~ Leonardo Davinci</h1>
        </div>
      </section>
      <comment content="======= End section8 =======" break="true"></comment
      ><!-- ======= section9 ======= --> 
      <section class="index-section9__section9 layout">
        <div class="index-section9__group layout">
          <div class="index-section9__box22 layout"></div>
          <div class="index-section9__flex layout">
            <h1 class="index-section9__hero-title10 layout">Stay Connected</h1>
            <h2 class="index-section9__medium-title layout">We respect your inbox like we do our own</h2>
          </div>
          <div class="index-section9__cover-block4 layout">
            <div class="index-section9__flex layout3">
              <div class="index-section9__flex layout1">
                <h1 class="index-section9__hero-title7 layout">Name</h1>
                <div class="index-section9__box24 layout"></div>
              </div>
              <div class="index-section9__flex layout2">
                <h1 class="index-section9__hero-title7 layout">Email</h1>
                <div class="index-section9__box24 layout"></div>
                <h1 class="index-section9__hero-title7 layout1">Affilliation</h1>
                <div class="index-section9__box24 layout"></div>
              </div>
              <div class="index-section9__cover-block3 layout">
                <h1 class="index-section9__hero-title7 layout2">Submit</h1>
              </div>
            </div>
          </div>
        </div>
      </section>
      <comment content="======= End section9 =======" break="true"></comment
      ><!-- ======= section10 ======= --> 
      <section class="index-section10__section10 layout">
        <div class="index-section10__block6 layout">
          <div class="index-section10__flex layout5">
            <div class="index-section10__flex1 layout">
              <div class="index-section10__flex-item">
                <div class="index-section10__flex layout1">
                  <div class="index-section10__flex layout">
                    <h1 class="index-section10__hero-title7 layout">Contact us</h1>
                    <hr class="index-section10__line1 layout" />
                  </div>
                  <div class="index-section10__flex2 layout">
                    <div class="index-section10__flex-item1">
                      <div
                        style="--src:url(../assets/62f1e8304d3a400a710e2aaf77d06350.png)"
                        class="index-section10__image7 layout"
                      ></div>
                    </div>
                    <div class="index-section10__flex-spacer"></div>
                    <h3 class="index-section10__subtitle1 layout"><?=$roww2['email']?></h3>
                  </div>
                  <div class="index-section10__flex3 layout">
                    <div class="index-section10__flex-item2">
                      <div
                        style="--src:url(../assets/b675aa4bb9b0550187d7d24f7bcca1ec.png)"
                        class="index-section10__icon layout"
                      ></div>
                    </div>
                    <div class="index-section10__flex-spacer1"></div>
                    <h3 class="index-section10__subtitle1 layout1"><?=$roww2['phone']?></h3>
                  </div>
                  <div class="index-section10__flex4 layout">
                    <div class="index-section10__flex-item3">
                      <div
                        style="--src:url(../assets/f941c076dda4175c07030e2c7dc58d33.png)"
                        class="index-section10__icon1 layout"
                      ></div>
                    </div>
                    <div class="index-section10__flex-spacer2"></div>
                    <h3 class="index-section10__subtitle1 layout2"><?=$roww2['address']?></h3>
                  </div>
                  <h1 class="index-section10__hero-title7 layout1">We’d Love To Hear From You !</h1>
                </div>
              </div>
              <div class="index-section10__flex-spacer3"></div>
              <div class="index-section10__flex-item4">
                <div class="index-section10__flex layout2">
                  <h1 class="index-section10__hero-title7 layout">Quick Links</h1>
                  <hr class="index-section10__line2 layout" />
                  <h3 class="index-section10__subtitle11-box layout">
                    <pre class="index-section10__subtitle11" style="background:none;border-style:none">
About us
Fundraising
Donate
Faq
Contact us</pre
                    >
                  </h3>
                </div>
              </div>
              <div class="index-section10__flex-spacer4"></div>
              <div class="index-section10__flex-item5">
                <div class="index-section10__flex layout3">
                  <h1 class="index-section10__hero-title7 layout">Our Services</h1>
                  <hr class="index-section10__line3 layout" />
                  <h3 class="index-section10__subtitle12-box layout">
                    <pre class="index-section10__subtitle12"style="background:none;border-style:none">
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
            <div class="index-section10__flex5 layout">
              <div class="index-section10__flex-item6">
                <div class="index-section10__cover-block5 layout">
                  <input type="text" class="index-section10__big-title3 layout" placeholder="Name" style="width:90%;border-style:none">
                </div>
              </div>
              <div class="index-section10__flex-spacer5"></div>
              <div class="index-section10__flex-item7">
                <div class="index-section10__cover-block6 layout">
                  <input type="text" class="index-section10__big-title3 layout1" placeholder="Phone" style="width:90%;border-style:none">
                </div>
              </div>
              <div class="index-section10__flex-spacer6"></div>
              <div class="index-section10__flex-item8">
                <div class="index-section10__cover-block7 layout">
                  <input type="text"  class="index-section10__big-title3 layout2"placeholder="Message" style="width:90%;border-style:none">
                </div>
              </div>
              <div class="index-section10__flex-spacer7"></div>
              <div class="index-section10__flex-item9">
                <div class="index-section10__cover-block8 layout">
                  <input type="submit"   class="index-section10__big-title4 layout" value="Submit" style="background:none;width:90%;border-style:none !important"> 
                </div>
              </div>
            </div>
            <div class="index-section10__flex layout4">
              <div class="index-section10__box19 layout"></div>
              <h3 class="index-section10__subtitle13 layout">copyright © 2022 NexGenHealth Ltd.</h3>
            </div>
          </div>
        </div>
      </section>
      <!-- ======= End section10 ======= --> 

    </main>
    <script type="text/javascript">
      AOS.init();
    </script>
  </body>
</html>
