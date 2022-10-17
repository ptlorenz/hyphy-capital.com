
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <script id="Cookiebot" src="https://consent.cookiebot.com/uc.js" data-cbid="7140e152-b8b9-4e29-a7d3-95994d1954d9" data-blockingmode="auto" type="text/javascript"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.8">
    <link rel="icon" type="image/png" href="images/favicon_new.png"/>
    <title>Funds</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="index81.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.2.1/dist/chart.min.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-0PZH8E61PS"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-0PZH8E61PS');
    </script>
  </head>
  <body style="background-color:#09232eff;background-image: linear-gradient(to right, rgb(14, 47, 61),rgb(23, 130, 125))">
  <div id="PopUpMain">
      <div id="PopUp">
        <h3 id="Heading">This website is an Alpha Build / Mock-Up</h3>
        <p> Do not interact with the Smart contract. All money sent via this website may be lost forever </p>
        <button class="button-popup">OK!</button>

      </div>

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript">
    $('.button-popup').click(function(){
        $('#PopUpMain').css('display','none');
      });

    </script>
    <div class="banner"></div>
      <div class="container">
        <div class="nav-wrapper">
          <div class="left-side">
            <div class="nav-link-wrapper active-nav-link">

              <a href="index"><p class="text-highlight">FUNDS</p></a>
            </div>
            <div class="nav-link-wrapper">
              <a href="about"><p class="text-highlight2">ABOUT</p></a>
            </div>
            <div class="nav-link-wrapper">
              <a href="about"><p class="text-highlight3">CONTACT</p></a>
            </div>
          </div>
          <div class="middle-side">
            <a href="about"><img src="images/Hyphy_Finance_Logo.png" style="width:280px;height:82px;"></img></a>
          </div>
          <div class="right-side">
            <div class="login nav-link-wrapper">
              <!-- Trigger/Open The Modal -->
              <a href="account_login"><button id="myBtn" class='login-button'>Login / Signup</button></a>

              <!-- The Modal -->
            </div>
            <div class="brand">
              <p><a href="index.html" class="button-wallet" target="_blank"> Connect Metamask</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="body-content" style="position:absolute;top:7%;left:0;right:0;margin-left:auto;margin-right:auto; width: 1300px; text-align: center;">
        <div class="aum-wrapper">
          <div class="aum-text"><h2 style='font-family: "Montserrat", sans-serif;'>Total TVL</h2></div>
          <div class="aum-figure" style='color:white;text-shadow: 0 1px 10px lightseagreen,0 -1px 10px lightseagreen '><h2> $57,845.66</h2></div>
        </div>
        <div class="description-wrapper">
          <div class="description-header"><h3 style='font-family: "Montserrat", sans-serif;'>You Decide Your Own Yield!</h3>
          <div class="description-text-pitchapp">
            <div class="description-text-pitchapp-left">
              <h2 style='text-shadow: 0 2px 10px rgb(208, 148, 249),0 -2px 10px rgb(208, 148, 249) ;'>It's simple - Your Crypto, Your Yield</h2>
              <div class='small-text'>
                <h3 class="text-highlight">You decide your level of risk, and receive the return you want* </h3></div>
              <p style='margin: 0; padding: 1px;'>A thinner distribution represents more <span style="color:#6E50DC;text-decoration: underline;font-weight: 900;">stable (but lower) </span> returns!</p>
              <p style='margin: 0; padding: 1px;'> A wider distribution usually goes for <span style="color:#0db1b4ff;text-decoration: underline;">higher (but more volatile)</span> returns!</p>
              <p style='margin: 0; padding: 1px;'> And the optimal portfolio is <span style="color:#3282CB;text-decoration: underline;">optimizing </span> for Stability (Risk) and Return!</p>
              <p style='margin: 0; padding-top: 20px;'> You control how much of your funds are allocated to what risk exposure!</p>
              <div class="generate-contract1">
                <a href="retail.html" class="sc-button1"> LET'S GO!</a>
              </div>
              <div class="arrow"><img src="images/arrow1.png" width="160px" height="70%"></div>
            </div>
            <div class="description-text-pitchapp-right">
              <div class="description-distribution1"><canvas id="chart_distribution_test" width="200px" height="180px"></canvas>
              <script type="text/javascript">
                const xdata1 = [];
                const ydata1 = [];
                const ydata_bm1 = [];
                const ydata_bm2 = [];

                chartIt_distribution_test();
                getData_distribution_test();

                async function chartIt_distribution_test() {
                  await getData_distribution_test();
                  const ctx = document.getElementById('chart_distribution_test').getContext('2d');
                  const myChart3 = new Chart(ctx, {
                      type: 'line',
                      data: {
                          labels: xdata1,
                          datasets: [
                            {
                              label:'Optimal Fund - Mean Return: 14% APY / Sharpe: 6.6',
                              data: ydata_bm2,
                              backgroundColor: [
                                '#3282CB'
                              ],
                              borderColor: [
                                '#3282CB'
                              ],
                              borderWidth: 3
                          },
                          {
                              label:'Retail Fund    - Mean Return: 19% APY / Sharpe: 1.4',
                              data: ydata_bm1,
                              backgroundColor: [
                                '#0db1b4ff'
                              ],
                              borderColor: [
                                '#0db1b4ff'
                              ],
                              borderWidth: 3
                          },
                          {
                              label: 'Quant Fund    - Mean Return: 9% APY / Sharpe: 2.2',
                              data: ydata1,
                              backgroundColor: [
                                  '#6E50DC',
                              ],
                              borderColor: [
                                  '#6E50DC',
                              ],
                              borderWidth: 5
                            }
                            ]
                      },
                      options: {
                        plugins: {
                          
                          legend: {
                            position: "bottom",
                            labels:{
                              color: '#FFFFFF',
                              font: {
                                size:14
                              }
                            }
                          }
                        },
                        scales: {
                          x: {
                            ticks: {
                              color: '#FFFFFF',
                              font: {
                                size:15
                              }
                            },
                            grid: {
                              color: "#282c3c",
                              lineWidth: 3,
                              borderWidth: 3,
                              borderColor: "#282c3c"
                            }
                          },
                          y: {
                            ticks: {
                              color: '#FFFFFF',
                              font: {
                                size:15
                              }
                            },
                            grid: {
                              color: "#282c3c",
                              lineWidth: 3,
                              borderWidth: 3,
                              borderColor: "#282c3c"
                            }
                          },
                        }
                      }

                  });
                }

                async function getData_distribution_test() {
                  const response = await fetch('All_Distributions_IndexWebsite1.csv');
                  const data = await response.text();

                  const rows = data.split("\n").slice(1);
                  rows.forEach(elt => {
                    const row = elt.split(',');
                    const x_quant1 = row[0];
                    xdata1.push(x_quant1);
                    const y_quant1 = row[1];
                    ydata1.push(y_quant1);
                    const y_bm1 = row[2];
                    ydata_bm1.push(y_bm1);
                    const y_bm2 = row[3];
                    ydata_bm2.push(y_bm2);

                  });

                }
                </script>
              </div>
            </div>
          </div>
        </div>
        <div class="highlights">
          <div class="trades"> <h3>2,786</h3></div>
          <div class="trades"> <h3>9 - 19% </h3></div>
          <div class="trades"> <h3>6.6 </h3></div>
          <div class="trades"> <h3>5 </h3></div>
          <div class="trades-low"> <h3> Executed Trades</h3></div>
          <div class="trades-low"> <h3> APY</h3></div>
          <div class="trades-low"> <h3> Optimal Sharpe</h3></div>
          <div class="trades-low"> <h3> Users</h3></div>
        </div>
        <div class="description-wrapper">
        <div class="description-header"><h3 style='font-family: "Montserrat", sans-serif;'>Where The Yields Come From:</h3>
          <div class="description-text-pitchapp">
            <div class="description-text-pitchapp-left">
            <h2 style='text-shadow: 0 2px 10px lightseagreen,0 -2px 10px lightseagreen '>TradFi Type Farming, with DeFi Type Yields</h2>
              <div class='small-text'>
                <h3 class="text-highlight2">Hyphy Finance uses algorithmic and valuation based trading models</h3></div>
                  <p style='margin: 0; padding: 1px;'>But You decide how much of your portfolio is allocated to each fund</p>
                  <p style='margin: 0; padding: 1px;'> Most of our trading is open sourced. Check the slides to right for a <span style="color:lightseagreen;text-decoration: underline;">structural overview</span>.</p>
                  <p style='margin: 0; padding: 1px;'> All your returns are consistently updated and either cumulated or paid out <span style="color:lightseagreen;text-decoration: underline;">weekly </span>!</p>
              <div class="contract-generator">    
                <div class="generate-contract1">
                  <a href="quant" class="sc-button1"> Quant Fund</a>
                </div>
                <div class="generate-contract1">
                  <a href="retail" class="sc-button1"> Retail Fund</a>
                </div>
              </div>
            </div>
            <div class="description-text-pitchapp-right">
              <iframe src="https://pitch.com/embed/d4116bac-54a6-44ca-a33e-fd8a8e272f26" allow="fullscreen" width="100%" height="370" style="border:0"></iframe>
            </div>
          </div>
        </div>
        <div class="usp-wrapper">
          <div class="No-Lock">
            <img src="images/nofee.png" style="width:24px;height:24px;"><p>No Lock Up or Minimums</p>
          </div>
          <div class="No-Asset">
          <img src="images/minus.png" style="width:24px;height:24px;"><p>No Asset Management Fee</p>
          </div>
          <div class="Performance-Fee">
          <img src="images/percentage_sign.png" style="width:21px;height:21px;"></a><p>10% Performance Fee included</p>
          </div>
        </div>
        <div class="attention-wrapper">
          <div class="attention-box">
            <img src="images/attention.png" style="width:50px;height:50px;"><p>Please be Aware when comparing Funds: both funds are benchmarked against the S&P500 Index, but on different times scales. The Retail fund is updated weekly, on weekly intervals; The Quant Fund is updated weekly, on monthly intervals,
              hence, the most up-to-date Quant Fund Statistics are always delayed by month compared to the current time.</p>
          </div>
        </div>
        <div class="content-wrapper">
          <div class="portfolio-items-wrapper">
            <! CARD 1>
            <div class="card-wrapper-left">
              <div class="card-left">
                <div class="card-content">

                  <h2 class="card-title-left">RETAIL FUND - for the left side of the curve</h2>
                  <p class="card-body">Valuation Model based long term, retail, net long, stock and crypto Fund</p>
                  <a href="retail" class="button"> Learn More</a>
                </div>
              </div>

          </div>
            <! CARD 2>
            <div class="card-wrapper-right">
              <div class="card-right">
                <div class="card-content">

                  <h2 class="card-title-right">QUANT FUND - for the right side of the curve</h2>
                  <p class="card-body">ML Model based statistical, market neutral, stock Fund</p>
                  <a href="quant" class="button"> Learn More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="investor-card">
          <div class="description-header"><h3 style='font-family: "Montserrat", sans-serif;'>What Returns Can You Expect </h3>
          <div class="description-card-text"> <p>Determine your individual and personalized portfolio exposure via the slider below</p>
            <div class="form-group">
              <label class='form-invest' for="price">Initial Investemnt</label>
              <input type="text" name="price" value="1000" class="form-control">
            </div>
            <div class="range">
              <div class="sliderValue">
                <label for="quantity"><span name='slider_span'>0</span></label>
              </div>
                <div class="field">
                  <div class="value left"> RETAIL ONLY</div>
                  <input name="slider_input" type="range" min="-100" max="100" value="0" steps="1">
                  <div class="value right">QUANT ONLY</div>
                </div>
              </div>
              <div class="individ-apy-wrapper">
                <div class="drawdown-investor">
                  <div class="apy-investor-text">CALCULATED APY</div>
                  <span name='total2'>0</span>
                </div>
                <div class="apy-investor">
                  <div class="drawdown-investor-text">MAX DRAWDOWN</div>
                  <span name='total'>0</span>
                </div>
              </div>
              <script>
                const slideValue = document.querySelector("[name=slider_span]");
                const inputSlider = document.querySelector("[name=slider_input]");
                inputSlider.oninput = (()=>{
                  let value = inputSlider.value;
                  slideValue.textContent = value;
                  slideValue.style.left = (value/2) + "%";
                  slideValue.classList.add("show");
                });

              </script>
              <script type="text/javascript">
              // Grab the things I need in the DOM

              const priceInput = document.querySelector("[name=price]");
              const quantityInput = document.querySelector("[name=slider_input]");
              const total = document.querySelector("[name=total]");
              const total2 = document.querySelector("[name=total2]");
              const quantityLabel = document.querySelector("[name=slider_span]");

              // Write the function here
              function calculateDrawdownCost() {
                const price = priceInput.value;
                const quantity = quantityInput.value;
                const cost = price * quantity * 2;
                console.log(cost);
                total.innerText = cost.toFixed(1) + "%";
              }
              function calculateApyCost() {
                const price = priceInput.value;
                const quantity = quantityInput.value;
                const cost = ((100+(quantity/10))/200) * 10;
                console.log(cost);
                total2.innerText = cost.toFixed(1) + "%";
              }

              //on first run
              calculateDrawdownCost();
              calculateApyCost();

              // Add Events Listeners
              priceInput.addEventListener("[name=price]", calculateDrawdownCost);
              quantityInput.addEventListener("input", calculateDrawdownCost);
              quantityInput.addEventListener("input", calculateApyCost);
              quantityInput.addEventListener("[name=slider_input]", updateQuantityLabel);

              </script>
              <div class="generate-contract">
                <a href="index.html" class="sc-button"> Generate Smart Contract</a>
              </div>
              
            </div>
        </div>
        <div class="description-2-wrapper">
          <div class="description-header"><h3 style='font-family: "Montserrat", sans-serif;'>Other Information </h3>
          <div class="Other-columns">
            <div class="NFT-slider"><div class="shifter"><h3>Hyphy Capital's NFT Collection</h3></div>
                <div class="filterDivindex 001 show">
                  <div class="card">
                    <div class="slider">
                      <div class="slides">
                        <input type="radio" name="radio-btn" id="radio1">
                        <input type="radio" name="radio-btn" id="radio2">
                        <input type="radio" name="radio-btn" id="radio3">
                        <input type="radio" name="radio-btn" id="radio4">

                        <div title='KrazyKoala NFT' class="slide first">
                          <a href="https://opensea.io/assets/0x8056ad118916db0feef1c8b82744fa37e5d57cc0/7909">
                          <img src="hc_nft_1.jpeg" alt=""></a>
                        </div>
                        <div class="slide">
                          <a href="https://opensea.io/assets/0xda22422592ee3623c8d3c40fe0059cdecf30ca79/24065">
                          <img src="nft2.png" alt=""></a>
                        </div>
                        <div class="slide">
                          <a href="https://opensea.io/assets/0x78c7549716a6290bd92005eb2a4da9701599428a/3004">
                          <img src="nft3.jpeg" alt=""></a>
                        </div>
                        <div class="slide ">
                          <a href="https://opensea.io/assets/0x78c7549716a6290bd92005eb2a4da9701599428a/5715">
                          <img src="nft4.jpeg" alt=""></a>
                        </div>
                        <div class="navigation-auto">
                          <div class="auto-btn1"></div>
                          <div class="auto-btn2"></div>
                          <div class="auto-btn3"></div>
                          <div class="auto-btn4"></div>

                        </div>
                      </div>
                        <div class="navigation-manual">
                        <label for="radio1" class="manual-btn"></label>
                        <label for="radio2" class="manual-btn"></label>
                        <label for="radio3" class="manual-btn"></label>
                        <label for="radio4" class="manual-btn"></label>

                        </div>
                      </div>
                </div>
              </div>
            </div>
            <div class="Contact"> <h3>Get in Touch</h3><p>If you have any feedback, questions, or inquires you can reach us at</p><p><a>free.money@hyphy-capital.com</a></p></div>
            <div class="Newsletter-main"><h3>Newsletter</h3> <p>For weekly model & fund updates subscribe to our Newsletter here</p>
              <link href="//cdn-images.mailchimp.com/embedcode/horizontal-slim-10_7.css" rel="stylesheet" type="text/css">
              <style type="text/css">
                #mc_embed_signup
                /* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
                  We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
              </style>
              <div id="mc_embed_signup">
              <form action="https://hyphy-capital.us5.list-manage.com/subscribe/post?u=2433caf9b27ea63d16f3f8ee9&amp;id=472504d957" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                  <div id="mc_embed_signup_scroll">
                <div class="newsletter-wrapper">
                <h1><label for="mce-EMAIL"></label></h1></div>
                <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Enter your email address" required style="position: relative;left: 2%;top: 1%; width:80%;">
                  <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                  <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_2433caf9b27ea63d16f3f8ee9_472504d957" tabindex="-1" value=""></div>
                  <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="newsletter-button" style="position: relative;left: 10%;margin-top:15%;"></div>
                  </div>
              </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
      </div>
    </div>
    </div>
  <div class="Footer" style="background-image: linear-gradient(to right, #17181f , #282c3c, #17181f );">
    <div class="Links">
      <div class="twitter">
        <a href="https://twitter.com"><img src="images/twitter_icon_lsg.png" style="color:red;width:18px;height:18px;"></a>
      </div>
      <div class="tele">
      <a href="https://telegram.com"><img src="images/tele_icon_lsg.png" style="width:21px;height:21px;"></a>
      </div>
      <div class="reddit">
      <a href="https://reddit.com"><img src="images/reddit_icon_lsg.png" style="width:19px;height:19px;"></a>
      </div>
    </div>
    <div class="email">free_money@hyphy-capital.com</div>
    <div class="Info">HYPHY Capital Global GmbH</div>

  </div>
  <script  src="./script_background.js"></script>


</body>

</html>
