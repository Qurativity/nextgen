

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
    <link rel="stylesheet" type="text/css" href="css/About.css" />

    <script type="text/javascript" src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script type="text/javascript" src="https://unpkg.com/headroom.js@0.12.0/dist/headroom.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/px2code/posize/build/v1.00.6.js"></script>

  <style>
      .about-section11__block14.layout{
          height:auto !important;
      }
       .about-section11__flex.layout2{
          margin:0px !important;
      }
       @media (max-width: 1200px)
      {
.about-section11__group.layout {
    margin: 75px 16px 61px 17px;
    height:190vh !important;
}

      }
      @media (max-width: 575px)
{
:host {
    grid: 22px 291px 0px / 0px minmax(387px,425px) 0px !important;
    display: grid;
}

}
</style>
<?php
include 'header.php';
include 'admin/conn.php';
$resultt = mysqli_query($con,"SELECT * FROM about where id='1'");
    $roww = mysqli_fetch_array($resultt);
$resultt2 = mysqli_query($con,"SELECT * FROM settings where id='1'");
    $roww2 = mysqli_fetch_array($resultt2);
?>
  <body style="display: flex; flex-direction: column">
  <section class="about-section1__section1 layout">
        <div class="about-section1__group layout">
          <div
            style="--src:url(../assets/93b2d11fd32a0f9ebaabebc1c8bcfa01.png)"
            class="about-section1__image layout"
          ></div>
          <div
            style="--src:url(../assets/2ae88868c5e7170594d1808b62297222.png)"
            class="about-section1__cover layout"
          ></div>
          <div
            style="--src:url(../assets/79c19217a412aa2ffd71df4f0c54d024.png)"
            class="about-section1__cover layout"
          ></div>
          <h1 class="about-section1__hero-title layout">About Us</h1>
        </div>
      </section>
      <comment content="======= End section1 =======" break="true"></comment
      ><!-- ======= section2 ======= --> 
      <section class="about-section2__section2 layout">
        <h1 class="about-section2__big-title-box layout">
          <pre class="about-section2__big-title"><?=$roww['first']?>
</pre
          >
        </h1>
      </section>
      <comment content="======= End section2 =======" break="true"></comment
      ><!-- ======= section3 ======= --> 
      <section class="about-section3__section3 layout">
        <div
          style="--src:url(../assets/7ae8e6ad4e0892cf566043f18c3d0d54.png)"
          class="about-section3__decorator layout"
        ></div>
        <div class="about-section3__flex layout">
          <div class="about-section3__flex-item">
            <h1 class="about-section3__big-title-box layout">
              <pre class="about-section3__big-title"><?=$roww['second']?>
</pre
              >
            </h1>
          </div>
          <div class="about-section3__flex-spacer"></div>
          <div class="about-section3__flex-item1">
            <div
              style="--src:url(../assets/590912e202f57c21b3a862d5f668aaa0.png)"
              class="about-section3__image6 layout"
            ></div>
          </div>
        </div>
      </section>
      <comment content="======= End section3 =======" break="true"></comment
      ><!-- ======= section4 ======= --> 
      <section class="about-section4__section4 layout">
        <div class="about-section4__flex layout">
          <div class="about-section4__flex-item">
            <px-posize
              track-style='{"flexGrow":1}'
              x="0px 425fr 0px"
              y="0px 425px 0px"
            
              md-display="show"
              sm-x="50px minmax(auto,425px) 0px"
              sm-y="22px 425px 0px"
              sm-display="show"
              xs-x="0px minmax(auto,425px) 0px"
              xs-y="22px 425px 0px"
              xs-display="show"
              ><div class="about-section4__image6" style="--src:url(../assets/f76eb3ea737484987a2147410cbf6f91.png)"></div
            ></px-posize>
          </div>
          <div class="about-section4__flex-spacer"></div>
          <div class="about-section4__flex-item1">
            <h1 class="about-section4__big-title-box layout">
              <pre class="about-section4__big-title">
<?=$roww['third']?>  

</pre
              >
            </h1>
          </div>
        </div>
      </section>
      <comment content="======= End section4 =======" break="true"></comment
      ><!-- ======= section5 ======= --> 
      <section class="about-section5__section5 layout">
        <div class="about-section5__flex layout">
          <div class="about-section5__flex-item">
            <div class="about-section5__group layout">
              <div class="about-section5__box9 layout"></div>
              <h3 class="about-section5__subtitle1-box layout">
                <pre class="about-section5__subtitle1" style="background:none;border-style:none">
<?=$roww['fourth']?>
</pre
                >
              </h3>
              <div
                style="--src:url(../assets/9942ae88945965be55e96ee0160aec4a.png)"
                class="about-section5__block5 layout"
              >
                <div
                  style="--src:url(../assets/19693e6dc3b64ae7da5cc2cbc5c10d50.png)"
                  class="about-section5__block6 layout"
                ></div>
              </div>
            </div>
          </div>
          <div class="about-section5__flex-spacer"></div>
          <div class="about-section5__flex-item">
            <div class="about-section5__group layout">
              <div class="about-section5__box9 layout"></div>
              <h2 class="about-section5__medium-title1 layout"><?=$roww['fifth']?></h2>
              <div
                style="--src:url(../assets/7314aeefc322e9433c6a53989aee883c.png)"
                class="about-section5__block7 layout"
              >
                <div
                  style="--src:url(../assets/c9249e92e7279cdb7896e832a4764cd5.png)"
                  class="about-section5__block8 layout"
                ></div>
              </div>
            </div>
          </div>
          <div class="about-section5__flex-spacer1"></div>
          <div class="about-section5__flex-item1">
            <div class="about-section5__group layout">
              <div class="about-section5__box10 layout"></div>
              <h2 class="about-section5__medium-title11-box layout">
                <pre class="about-section5__medium-title11"style="background:none;border-style:none">
<?=$roww['six']?>
</pre
                >
              </h2>
              <div
                style="--src:url(../assets/7314aeefc322e9433c6a53989aee883c.png)"
                class="about-section5__block9 layout"
              >
                <div
                  style="--src:url(../assets/f2e5b527e7bc8e2f60c607c686adf9b2.png)"
                  class="about-section5__block10 layout"
                ></div>
              </div>
            </div>
          </div>
          <div class="about-section5__flex-spacer2"></div>
          <div class="about-section5__flex-item">
            <div class="about-section5__group layout">
              <div class="about-section5__box9 layout"></div>
              <h2 class="about-section5__medium-title12-box layout">
                <pre class="about-section5__medium-title12"style="background:none;border-style:none">
<?=$roww['seven']?>
</pre
                >
              </h2>
              <div
                style="--src:url(../assets/7314aeefc322e9433c6a53989aee883c.png)"
                class="about-section5__block11 layout"
              >
                <div
                  style="--src:url(../assets/194818ccafc94520627c223217f72e4e.png)"
                  class="about-section5__block12 layout"
                ></div>
              </div>
            </div>
          </div>
          <div class="about-section5__flex-spacer3"></div>
          <div class="about-section5__flex-item">
            <div class="about-section5__group layout1">
              <div class="about-section5__box9 layout1"></div>
              <h3 class="about-section5__subtitle layout"><?=$roww['eight']?></h3>
              <div
                style="--src:url(../assets/7314aeefc322e9433c6a53989aee883c.png)"
                class="about-section5__block13 layout"
              >
                <div
                  style="--src:url(../assets/9a39be62da9f832a26d57e5d31088541.png)"
                  class="about-section5__block8 layout1"
                ></div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <comment content="======= End section5 =======" break="true"></comment
      ><!-- ======= section6 ======= --> 
      <section class="about-section6__section6 layout">
        <div class="about-section6__flex layout">
          <h1 class="about-section6__hero-title2 layout">ABOUT dr. mitch abrams</h1>
          <div
            style="--src:url(../assets/f4508e4389526edbf846f1fe43f14c3e.png)"
            class="about-section6__image1 layout"
          ></div>
        </div>
      </section>
      <comment content="======= End section6 =======" break="true"></comment
      ><!-- ======= section7 ======= --> 
      <section class="about-section7__section7 layout">
        <h1 class="about-section7__big-title-box layout">
          <pre class="about-section7__big-title" style="text-align:justify"><span class="about-section7__big-title-span0"><?=$roww['nine']?></span></pre>
        </h1>
      </section>
      <comment content="======= End section7 =======" break="true"></comment
      ><!-- ======= section8 ======= --> 
      <section class="about-section8__section8 layout">
        <div class="about-section8__flex layout">
          <div class="about-section8__flex-item">
            <div class="about-section8__group layout">
              <div class="about-section8__box11 layout"></div>
              <div
                style="--src:url(../assets/3979bc6fbb6365a0d17c4d415c42df0c.png)"
                class="about-section8__image10 layout"
              ></div>
              <h1 class="about-section8__big-title4 layout"><?=$roww['ten']?></h1>
            </div>
          </div>
          <div class="about-section8__flex-spacer"></div>
          <div class="about-section8__flex-item">
            <div class="about-section8__group layout">
              <div class="about-section8__box11 layout"></div>
              <div
                style="--src:url(../assets/3979bc6fbb6365a0d17c4d415c42df0c.png)"
                class="about-section8__image10 layout"
              ></div>
              <h1 class="about-section8__big-title4 layout1"><?=$roww['eleven']?></h1>
            </div>
          </div>
          <div class="about-section8__flex-spacer"></div>
          <div class="about-section8__flex-item">
            <div class="about-section8__group layout">
              <div class="about-section8__box11 layout"></div>
              <div
                style="--src:url(../assets/3979bc6fbb6365a0d17c4d415c42df0c.png)"
                class="about-section8__image10 layout"
              ></div>
              <h1 class="about-section8__big-title4 layout2"><?=$roww['twelve']?></h1>
            </div>
          </div>
        </div>
      </section>
      <!-- ======= section7 ======= --> 
        <section class="about-section9__section9 layout">
        <div class="about-section9__flex layout" style="margin: 63px 8.96% 40px 5.57%;">
          <div class="about-section9__group layout">
            <h1 class="about-section9__hero-title1-box layout">
              <pre class="about-section9__hero-title1">Biographies: </pre>
            </h1>
          </div>
          <div class="about-section9__flex1 layout">
            <div class="about-section9__flex-item" style="height:100px">
              <h1 class="about-section9__hero-title11 layout" style="margin:0px">Meet The Team</h1>
            </div>
            <div class="about-section9__flex-spacer"></div>
            <div class="about-section9__flex-item1">
              <div class="about-section9__group layout1">
                <div class="about-section9__box layout"></div>
                <div
                  style="--src:url(../assets/2bd17586df8d1b1b695fa72b156caac1.png)"
                  class="about-section9__image2 layout"
                ></div>
                <h1 class="about-section9__big-title layout">Dr. Mitchell Abrams</h1>
               <button class="about-section9__big-title layout1" style="background:none;border-style:none" data-toggle="modal" data-target="#myModal">View Profile</button>
              </div>
            </div>
            <div class="about-section9__flex-spacer1"></div>
            <div class="about-section9__flex-item2">
              <div class="about-section9__group layout2">
                <div class="about-section9__box layout1"></div>
                <div
                  style="--src:url(../assets/10fe01994a496835ef041f7f67032a53.png)"
                  class="about-section9__image3 layout"
                ></div>
                <h1 class="about-section9__big-title layout2">Jody Bresgi</h1>
                <button class="about-section9__big-title layout3" style="background:none;border-style:none" data-toggle="modal" data-target="#myModal2">View Profile</button>
              </div>
            </div>
          </div>
        </div>
      </section>
      <comment content="======= End section7 =======" break="true"></comment
      ><!-- ======= section8 ======= --> 
         <div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog modal-lg" role="document" style="width:100%;padding:0px">
    <div class="modal-content"  style="padding:0px">
      
      <div class="modal-body" style="padding:0px">
     <section class="about-section10__section10 layout">
        <div class="about-section10__block1 layout">
          <div class="about-section10__flex layout">
              <a class="close" data-dismiss="modal" aria-label="Close" style="background:none">
            <div style="--src:url(../assets/c79389b66900552eb13380c148a0debb.png)" class="about-section10__block3 layout">
              <div
                style="--src:url(../assets/fd764778e6e8d017544f41515973d9cc.png)"
                class="about-section10__icon1 layout"
              ></div>
            </div>
              </a>
            <div class="about-section10__flex layout2">
              <div class="about-section10__flex layout1">
                <div class="about-section10__flex1 layout">
                  <div class="about-section10__flex-item">
                    <div class="about-section10__flex layout">
                      <div
                        style="--src:url(../assets/33b0ccf0c912adb2a2cacfdf06c7da9d.png)"
                        class="about-section10__image4 layout"
                      ></div>
                      <div class="about-section10__block2 layout">
                        <h1 class="about-section10__big-title-box layout">
                          <pre
                            class="about-section10__big-title"
                          ><span class="about-section10__big-title-span0">Dr. Mitchell Abrams B.Sc., MD, FRCPC, 
</span><span class="about-section10__big-title-span1">Founder, CEO</span><span class="about-section10__big-title-span2">
</span></pre>
                        </h1>
                      </div>
                    </div>
                  </div>
                  <div class="about-section10__flex-spacer"></div>
                  <div class="about-section10__flex-item1">
                    <h2 class="about-section10__medium-title-box layout">
                      <pre class="about-section10__medium-title">
<?=$roww['thirteen']?>
</pre
                      >
                    </h2>
                  </div>
                </div>
                <h2 class="about-section10__medium-title-box layout1">
                  <pre class="about-section10__medium-title">
 
<?=$roww['fourteen']?> </pre
                  >
                </h2>
              </div>
              <div class="about-section10__cover-block layout">
                <h1 class="about-section10__big-title1-box layout">
                  <pre class="about-section10__big-title1" style="background:none;border-style:none">
<?=$roww['fifteen']?>
</pre
                  >
                </h1>
              </div>
            </div>
          </div>
        </div>
      </section>
        </div>
      </div>
            </div>
        </div>
      <comment content="======= End section8 =======" break="true"></comment
      ><!-- ======= section9 ======= --> 
         <div class="modal fade" id="myModal2" role="dialog">
  <div class="modal-dialog modal-lg" role="document" style="width:100%;padding:0px">
    <div class="modal-content"  style="padding:0px">
      
      <div class="modal-body" style="padding:0px">
       <section class="about-section11__section11 layout">
        <div class="about-section11__group layout">
          <div class="about-section11__block14 layout"></div>
          <div class="about-section11__flex layout2">
                <a class="close" data-dismiss="modal" aria-label="Close" style="background:none">
            <div style="--src:url(../assets/c79389b66900552eb13380c148a0debb.png)" class="about-section11__block3 layout">
              <div
                style="--src:url(../assets/fd764778e6e8d017544f41515973d9cc.png)"
                class="about-section11__icon1 layout"
              ></div>
            </div>
              </a>
            <div class="about-section11__flex1 layout">
              <div class="about-section11__flex-item">
                <div class="about-section11__flex layout">
                  <div
                    style="--src:url(../assets/2edf2e14ea8605f6c1fc78d04ba88a9b.png)"
                    class="about-section11__image11 layout"
                  ></div>
                  <h1 class="about-section11__big-title-box layout">
                    <pre class="about-section11__big-title"><span class="about-section11__big-title-span0">Jody Bresgi, 
 BA (Hons), MBA, CNP 
</span><span class="about-section11__big-title-span1">COO
</span></pre>
                  </h1>
                </div>
              </div>
              <div class="about-section11__flex-spacer"></div>
              <div class="about-section11__flex-item1">
                <div class="about-section11__flex layout1">
                  <h2 class="about-section11__medium-title-box layout">
                    <pre class="about-section11__medium-title">
<?=$roww['sixteen']?> </pre
                    >
                  </h2>
                  <h2 class="about-section11__medium-title-box layout1">
                    <pre class="about-section11__medium-title">
<?=$roww['seventeen']?>
</pre
                    >
                  </h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
        </div>
      </div>
             </div>
        </div>
      <comment content="======= End section9 =======" break="true"></comment
      ><!-- ======= section10 ======= --> 
      <section class="about-section12__section12 layout">
        <div class="about-section12__block4 layout" style="margin:0px">
          <div class="about-section12__flex layout7">
            <div class="about-section12__flex1 layout">
              <div class="about-section12__flex-item">
                <div class="about-section12__flex layout1">
                  <div class="about-section12__flex layout">
                    <h1 class="about-section12__hero-title3 layout">Contact us</h1>
                    <hr class="about-section12__line layout" />
                  </div>
                  <div class="about-section12__flex2 layout">
                    <div class="about-section12__flex-item1">
                      <div
                        style="--src:url(../assets/b04dbd3752aca2259bb2f8a2b8595d66.png)"
                        class="about-section12__image5 layout"
                      ></div>
                    </div>
                    <div class="about-section12__flex-spacer"></div>
                    <h3 class="about-section12__subtitle layout"><?=$roww2['email']?></h3>
                  </div>
                  <div class="about-section12__flex3 layout">
                    <div class="about-section12__flex-item2">
                      <div
                        style="--src:url(../assets/ce455852fd2af7555bd6eeb2bffdf54b.png)"
                        class="about-section12__icon2 layout"
                      ></div>
                    </div>
                    <div class="about-section12__flex-spacer1"></div>
                    <h3 class="about-section12__subtitle layout1"><?=$roww2['phone']?></h3>
                  </div>
                  <div class="about-section12__flex4 layout">
                    <div class="about-section12__flex-item3">
                      <div
                        style="--src:url(../assets/98245247e5f752f6e57d7159c6788d8d.png)"
                        class="about-section12__icon3 layout"
                      ></div>
                    </div>
                    <div class="about-section12__flex-spacer2"></div>
                    <h3 class="about-section12__subtitle layout2"><?=$roww2['address']?></h3>
                  </div>
                  <h1 class="about-section12__hero-title31 layout">We’d Love To Hear From You !</h1>
                </div>
              </div>
              <div class="about-section12__flex-spacer3"></div>
              <div class="about-section12__flex-item4">
                <div class="about-section12__flex layout3">
                  <div class="about-section12__flex layout2">
                    <h1 class="about-section12__hero-title3 layout">Quick Links</h1>
                    <hr class="about-section12__line1 layout" />
                  </div>
                  <h3 class="about-section12__subtitle1-box layout">
                    <pre class="about-section12__subtitle1"style="background:none;border-style:none">
About us
Fundraising
Donate
Faq
Contact us</pre
                    >
                  </h3>
                </div>
              </div>
              <div class="about-section12__flex-spacer4"></div>
              <div class="about-section12__flex-item5">
                <div class="about-section12__flex layout4">
                  <h1 class="about-section12__hero-title3 layout">Our Services</h1>
                  <hr class="about-section12__line2 layout" />
                  <h3 class="about-section12__subtitle2-box layout">
                    <pre class="about-section12__subtitle2" style="background:none;border-style:none">
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
            <div class="about-section12__flex layout6">
              <div class="about-section12__flex5 layout">
                <div class="about-section12__flex-item6">
                  <div class="about-section12__cover-block1 layout">
                    <h1 class="about-section12__big-title2 layout">Name</h1>
                  </div>
                </div>
                <div class="about-section12__flex-spacer5"></div>
                <div class="about-section12__flex-item7">
                  <div class="about-section12__cover-block2 layout">
                    <h1 class="about-section12__big-title2 layout1">Phone</h1>
                  </div>
                </div>
                <div class="about-section12__flex-spacer6"></div>
                <div class="about-section12__flex-item8">
                  <div class="about-section12__cover-block3 layout">
                    <h1 class="about-section12__big-title2 layout2">Message</h1>
                  </div>
                </div>
                <div class="about-section12__flex-spacer7"></div>
                <div class="about-section12__flex-item9">
                  <div class="about-section12__cover-block4 layout">
                    <h1 class="about-section12__big-title3 layout">Submit</h1>
                  </div>
                </div>
              </div>
              <div class="about-section12__flex layout5">
                <div class="about-section12__box8 layout"></div>
                <h3 class="about-section12__subtitle3 layout">copyright © 2022 NexGenHealth Ltd.</h3>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- ======= End section12 ======= --> 

    </main>
    <script type="text/javascript">
      AOS.init();
    </script>
  </body>
</html>
