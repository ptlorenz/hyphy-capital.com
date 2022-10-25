<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="images/favicon.png"/>
    <title>Quant</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/release/v5.7.1/css/all.css">
    <link href="./index87.css" rel="stylesheet" type="text/css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.2.1/dist/chart.min.js"></script>
  </head>
  <body style="background-color:#09232eff;background-image: linear-gradient(to right, rgb(14, 47, 61),rgb(23, 130, 125))">
    <div class="banner"></div>
    <div class="container">
      <div class="nav-wrapper" >
        <div class="left-side">
          <div class="nav-link-wrapper active-nav-link">

            <a href="index"><p>FUNDS</p></a>
          </div>
          <div class="nav-link-wrapper">
            <a href="about"><p>ABOUT</p></a>
          </div>
          <div class="nav-link-wrapper">
              <a href="about"><p>CONTACT</p></a>
            </div>
        </div>
        <div class="middle-side">
          <img src="images/Hyphy_Finance_Logo.png" style="width:280px;height:82px;"></a>
        </div>
        <div class="right-side">
          <div class="login nav-link-wrapper">
              <!-- Trigger/Open The Modal -->
              <a href="account_login"><button id="myBtn" class='login-button'>Login / Signup</button></a>

              <!-- The Modal -->
            </div>
          <div class="brand">
            <p><a href="https://metamask.io/" class="button-wallet" target="_blank"> Connect Metamask</a></p>
          </div>
        </div>
      </div>
    </div>
    <div class="body-content">
      <div class="quant-wrapper">
        <div class="quant-left">
          <div class="fund-title"><h2>Quant Fund</h2></div>
        </div>
        <div class="container-info">
          <div class="nav-wrapper-quant">
            <div class="left-side">
              <div class="stat-brand">
                <p><a href="quant" class="button-quant">Statistics</a></p>
              </div>
              <div class="strat-brand">
                <p><a href="quant_strategy" class="button-quant-strategy">Strategy</a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="quant-aum">
          <div class="quant-aum-text">Current AUM</div>
          <div class="quant-aum-figure"> $3,747.29</div>
        </div>
        <div class="quant-apy">
          <div class="quant-apy-text">Current APY</div>
          <div class="quant-apy-figure"> 15.5%</div>
        </div>
        <div class="quant-corr">
          <div class="quant-corr-text">Current SPY Corr</div>
          <div class="quant-corr-figure"> -0.06</div>
          </div>
        <div class="quant-corr-text-line"></div>

      </div>

      <div class="performance-slider"><h3>Fund Performance</h3>
        <div class="filterDivs 001 show">
          <div class="cards">
            <div class="slider">
              <div class="navigation-manuals">
                <label for="radio1" class="manual-btns"> 3-Month</label>
                <label for="radio2" class="manual-btn"> Year-to-Date</label>
                <label for="radio3" class="manual-btn"> 1-Year </label>
                <label for="radio4" class="manual-btn"> All Time</label>

                </div>
              <div class="slides">
                <input type="radio" name="radio-btn" id="radio1">
                <input type="radio" name="radio-btn" id="radio2">
                <input type="radio" name="radio-btn" id="radio3">
                <input type="radio" name="radio-btn" id="radio4">

                <div class="slide first">
                  <div class="canvas-wrapper">
                    <canvas id="chart_weekly_3m" width="500px" height="190px" style="padding-top: 20px; padding-bottom: 20px; max-width:100%;"></canvas>
                    <canvas id="chart_cumulative_3m" width="500px" height="190px" style="padding-top: 20px; padding-bottom: 20px; max-width:100%;"></canvas>
                  </div>
                </div>
                <div class="slide">
                  <div class="canvas-wrapper">
                    <canvas id="chart_weekly_ytd" width="500px" height="190px" style="padding-top: 20px; padding-bottom: 20px; max-width:100%;"></canvas>
                    <canvas id="chart_cumulative_ytd" width="500px" height="190px" style="padding-top: 20px; padding-bottom: 20px; max-width:100%;"></canvas>
                  </div>
                </div>
                <div class="slide">
                  <div class="canvas-wrapper">
                    <canvas id="chart_weekly_1y" width="500px" height="190px" style="padding-top: 20px; padding-bottom: 20px; max-width:100%;"></canvas>
                    <canvas id="chart_cumulative_1y" width="500px" height="190px" style="padding-top: 20px; padding-bottom: 20px; max-width:100%;"></canvas>
                  </div>
                </div>
                <div class="slide ">
                  <div class="canvas-wrapper">
                    <canvas id="chart_weekly_at" width="500px" height="190px" style="padding-top: 20px; padding-bottom: 20px; max-width:100%;"></canvas>
                    <canvas id="chart_cumulative_at" width="500px" height="190px" style="padding-top: 20px; padding-bottom: 20px; max-width:100%;"></canvas>
                  </div>
                </div>
                <div class="navigation-auto">
                  <div class="auto-btn1"></div>
                  <div class="auto-btn2"></div>
                  <div class="auto-btn3"></div>
                  <div class="auto-btn4"></div>

                </div>
              </div>
              </div>
          </div>
        </div>
      </div>
    
      <div class="attention-wrapper">
        <div class="attention-box">
          <img src="images/attention.png" style="width:50px;height:50px;"><p>If you are interested in investing / buying / renting individual models of the Quant Fund please check the <a href="quant_strategy.html" target="_blank">Strategy-Page</a> for more Information. Currently, this is only possible if you have an Ethereum Wallet (e.g. Metamask),
            and NMR <a href="https://www.kraken.com/en-us/learn/what-is-numeraire-l">(what is NMR?)</a> as currency to pay for or invest in our models.</p>
        </div>
      </div>
      <div class="table-wrapper">
        <table class="styled-table">
          <thead>
            <tr >
              <th id="header_header_web"></th>
              <th id="header_cumret_web"></th>
              <th id="header_lwret_web"></th>
              <th id="header_avgret_web"></th>
              <th id="header_var_web"></th>
              <th id="header_sharpe_web"></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td id="nmr_header_web"></td>
              <td id="nmr_cumret_web"></td>
              <td id="nmr_lwret_web"></td>
              <td id="nmr_avgret_web"></td>
              <td id="nmr_var_web"></td>
              <td id="nmr_sharpe_web"></td>
            </tr>
            <tr>
              <td id="usd_header_web"></td>
              <td id="usd_cumret_web"></td>
              <td id="usd_lwret_web"></td>
              <td id="usd_avgret_web"></td>
              <td id="usd_var_web"></td>
              <td id="usd_sharpe_web"></td>
            </tr>
            <tr>
              <td id="snp_header_web"></td>
              <td id="snp_cumret_web"></td>
              <td id="snp_lwret_web"></td>
              <td id="snp_avgret_web"></td>
              <td id="snp_var_web"></td>
              <td id="snp_sharpe_web"></td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="table-asterisks-wrapper">
        <div class="asterisk-one">*)   The Quant Fund carries currency risk, given the inherent structure with the Numerai Hedge Fund. Though the currency risk can be decreased or elminated through shorting NMR exposure against the long NMR position with Numerai</div>
        <div class="asterisk-two">**)   VaR is defined as the 2 sigma (95%) Value at Risk of weekly returns (lower is better). In simpler language, out of 100 weeks, one's weekly loss will only exceed the VaR 5 times, the other 95 times it will remain lower</div>
        <div class="asterisk-three">***) Sharpe ratio is the risk adjusted return (higher is better). It divides the fund return minus the risk free return (1-yr Treasury Bond), hence the excess return, divided by the risk (1 sigma of weekly returns). It finds the amount of return per unit of risk.</div>
      </div>
      <div class="description-text-wrapper">
      <div class="description-card-text"> <p>The Return distribution of Hyphy Capital's Quantitative Fund compared to the S&P 500 Benchmark, shows that the Quant Fund does exactly what it is intended to do, and event exceeds its goals.</p>
        <p>The Quant Fund has a narrower distribution, flatter tails to the left and right and a higher "bell". Hence returns are more concentrated towards the middle of the curve - the bell area. Statistically this means the Quant Fund
        exerts less risk, and the returns tend occur in a narrower range.</p>
        <p>Furthermore, the center of the curve (the mean xi) is also further to the right than the benchmark, indicating that not only is the risk (standard deviation) smaller but also the return higher.</p>
        <p>This is the holy grail of a Quant Fund.</p>
        <br>
        <br>
        <br>
        <br>
        <a href="retail.html" class="sc-button">Learn More about the Strategy</a>
      </div>
        <div class="description-distribution"><canvas id="chart_distribution" width="100px" height="100px"></canvas>
        </div>
      </div>
      <div class="blocker-wrapper"></div>
      <div class="wallet-wrapper">
        <div class="active-wrapper">
          <h1>Active (Fund) Wallet</h1>
          <div class="active-address">
            <p>0x0000000000000000000000000000000000021aed</p>
            <div class="etherscan-link">
              <a href="https://etherscan.io/address/0x0000000000000000000000000000000000021aed#tokentxns" target="_blank">Etherscan Link</a>
            </div>
          </div>
        </div>
        <div class="passive-wrapper">
          <h1>Passive (Coinbase) Wallet</h1>
          <div class="passive-address">
            <p>0x0Dfe973c282437eF36C3C6E0630E52f084939975</p>
            <div class="etherscan-link">
              <a href="https://etherscan.io/address/0x0Dfe973c282437eF36C3C6E0630E52f084939975" target="_blank">Etherscan Link</a>
            </div>
          </div>
        </div>
      </div>
      <div class="body-padding">
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
          <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Enter your email address" required style="position: relative;left: 8%;top: 1%; width:40%;">
            <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
            <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_2433caf9b27ea63d16f3f8ee9_472504d957" tabindex="-1" value=""></div>
            <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="newsletter-button" style="position: relative;left: -150%;margin-top:40%;"></div>
            </div>
        </form>
        </div>
      </div>

        <!--End mc_embed_signup-->
      <div class="blocker-wrapper"></div>
    </div>
  </div>
  <div class="Footer" style="background-image: linear-gradient(to right, #17181f , #282c3c, #17181f )">
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
  </body>
  <script>
  const xlabels = [];
  const xlabels_ytd = [];
  const xlabels_1y = [];
  const xlabels_at = [];
  const xlabels_cumulative = [];
  const xlabels_cumulative_ytd = [];
  const xlabels_cumulative_1y = [];
  const xlabels_cumulative_at = [];
  const yreturns = [];
  const yyreturns = [];
  const yreturns_ytd = [];
  const yyreturns_ytd = [];
  const yreturns_1y = [];
  const yyreturns_1y = [];
  const yreturns_at = [];
  const yyreturns_at = [];
  const y_cumulative_returns = [];
  const yy_cumulative_returns = [];
  const y_cumulative_returns_ytd = [];
  const yy_cumulative_returns_ytd = [];
  const y_cumulative_returns_1y = [];
  const yy_cumulative_returns_1y = [];
  const y_cumulative_returns_at = [];
  const yy_cumulative_returns_at = [];
  const xdata = [];
  const ydata = [];
  const ydata_bm = [];

  const header_cols = [];
  const nmr_data = [];
  const usd_data = [];
  const snp_data = [];

  chartIt_weekly();
  getData_weekly();
  chartIt_cumulative();
  getData_cumulative();
  chartIt_weekly_ytd();
  getData_weekly_ytd();
  chartIt_weekly_1y();
  getData_weekly_1y();
  chartIt_weekly_at();
  getData_weekly_at();
  chartIt_cumulative_ytd();
  getData_cumulative_ytd();
  chartIt_cumulative_1y();
  getData_cumulative_1y();
  chartIt_cumulative_at();
  getData_cumulative_at();
  chartIt_distribution();
  getData_distribution();
  getTable();

  async function chartIt_weekly() {
    await getData_weekly();
    const ctx = document.getElementById('chart_weekly_3m').getContext('2d');
    const myChart1 = new Chart(ctx, {
        type: 'line',
        data: {
            labels: xlabels,
            datasets: [{
                label: 'Weekly Fund Return',
                data: yreturns,
                backgroundColor: [
                    '#0db1b4ff',
                ],
                borderColor: [
                    '#0db1b4ff',
                ],
                borderWidth: 5
            },
            {
              label:'Weekly Benchmark (SPY) Return',
              data: yyreturns,
              backgroundColor: [
                '#E06666'
              ],
              borderColor: [
                '#E06666'
              ],
              borderWidth: 3
            }]
        },
        options: {
          plugins: {
            title: {
              family: "sans-serif",
              align: 'start',
              color: '#FFFFFF',
              font: {
                size:20,
              },
              padding: {
                bottom: 40
              },
              display: true,
              text: 'Weekly Quant Fund Return (Last 3 Months)',
            },
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

  async function getData_weekly() {
    const response = await fetch('Newest_Plot_Fund_Analysis.csv');
    const data = await response.text();

    const rows = data.split("\n").slice(1);
    rows.forEach(elt => {
      const row = elt.split(',');
      const week = row[0];
      xlabels.push(week);
      const fundreturn = row[3];
      yreturns.push(fundreturn);
      const snpreturn = row[4];
      yyreturns.push(snpreturn);

    });

  }

  async function chartIt_cumulative() {
    await getData_cumulative();
    const ctx = document.getElementById('chart_cumulative_3m').getContext('2d');
    const myChart2 = new Chart(ctx, {
        type: 'line',
        data: {
            labels: xlabels_cumulative,
            datasets: [{
                label: 'Cumulative Fund Return',
                data: y_cumulative_returns,
                backgroundColor: [
                    '#0db1b4ff',
                ],
                borderColor: [
                    '#0db1b4ff',
                ],
                borderWidth: 5
            },
            {
              label:'Cumulative Benchmark (SPY) Return',
              data: yy_cumulative_returns,
              backgroundColor: [
                '#E06666'
              ],
              borderColor: [
                '#E06666'
              ],
              borderWidth: 3
            }]
        },
        options: {
          plugins: {
            title: {
              family: "sans-serif",
              align: 'start',
              color: '#FFFFFF',
              font: {
                size:20,
              },
              padding: {
                bottom: 40
              },
              display: true,
              text: 'Cumulative Quant Fund Return (Last 3 Months)',
            },
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

  async function getData_cumulative() {
    const response = await fetch('Newest_Plot_Fund_Analysis.csv');
    const data = await response.text();

    const rows = data.split("\n").slice(1);
    rows.forEach(elt => {
      const row = elt.split(',');
      const weeks = row[0];
      xlabels_cumulative.push(weeks);
      const fund_cumulative_return = row[9];
      y_cumulative_returns.push(fund_cumulative_return);
      const snp_cumulative_return = row[10];
      yy_cumulative_returns.push(snp_cumulative_return);

    });

  }

  async function chartIt_weekly_ytd() {
    await getData_weekly_ytd();
    const ctx = document.getElementById('chart_weekly_ytd').getContext('2d');
    const myChart1 = new Chart(ctx, {
        type: 'line',
        data: {
            labels: xlabels_ytd,
            datasets: [{
                label: 'Weekly Fund Return',
                data: yreturns_ytd,
                backgroundColor: [
                    '#0db1b4ff',
                ],
                borderColor: [
                    '#0db1b4ff',
                ],
                borderWidth: 5
            },
            {
              label:'Weekly Benchmark (SPY) Return',
              data: yyreturns_ytd,
              backgroundColor: [
                '#E06666'
              ],
              borderColor: [
                '#E06666'
              ],
              borderWidth: 3
            }]
        },
        options: {
          plugins: {
            title: {
              family: "sans-serif",
              align: 'start',
              color: '#FFFFFF',
              font: {
                size:20,
              },
              padding: {
                bottom: 40
              },
              display: true,
              text: 'Weekly Quant Fund Return (Year to Date)',
            },
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

  async function getData_weekly_ytd() {
    const response = await fetch('Newest_YTD_Plot_Fund_Analysis.csv');
    const data = await response.text();

    const rows = data.split("\n").slice(1);
    rows.forEach(elt => {
      const row = elt.split(',');
      const week = row[0];
      xlabels_ytd.push(week);
      const fundreturn = row[3];
      yreturns_ytd.push(fundreturn);
      const snpreturn = row[4];
      yyreturns_ytd.push(snpreturn);

    });

  }

  async function chartIt_cumulative_ytd() {
    await getData_cumulative_ytd();
    const ctx = document.getElementById('chart_cumulative_ytd').getContext('2d');
    const myChart4 = new Chart(ctx, {
        type: 'line',
        data: {
            labels: xlabels_cumulative_ytd,
            datasets: [{
                label: 'Cumulative Fund Return',
                data: y_cumulative_returns_ytd,
                backgroundColor: [
                    '#0db1b4ff',
                ],
                borderColor: [
                    '#0db1b4ff',
                ],
                borderWidth: 5
            },
            {
              label:'Cumulative Benchmark (SPY) Return',
              data: yy_cumulative_returns_ytd,
              backgroundColor: [
                '#E06666'
              ],
              borderColor: [
                '#E06666'
              ],
              borderWidth: 3
            }]
        },
        options: {
          plugins: {
            title: {
              family: "sans-serif",
              align: 'start',
              color: '#FFFFFF',
              font: {
                size:20,
              },
              padding: {
                bottom: 40
              },
              display: true,
              text: 'Cumulative Quant Fund Return (Year to Date)',
            },
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

  async function getData_cumulative_ytd() {
    const response = await fetch('Newest_YTD_Plot_Fund_Analysis.csv');
    const data = await response.text();

    const rows = data.split("\n").slice(1);
    rows.forEach(elt => {
      const row = elt.split(',');
      const weeks = row[0];
      xlabels_cumulative_ytd.push(weeks);
      const fund_cumulative_return = row[9];
      y_cumulative_returns_ytd.push(fund_cumulative_return);
      const snp_cumulative_return = row[10];
      yy_cumulative_returns_ytd.push(snp_cumulative_return);

    });

  }

  async function chartIt_weekly_1y() {
    await getData_weekly_1y();
    const ctx = document.getElementById('chart_weekly_1y').getContext('2d');
    const myChart1 = new Chart(ctx, {
        type: 'line',
        data: {
            labels: xlabels_1y,
            datasets: [{
                label: 'Weekly Fund Return',
                data: yreturns_1y,
                backgroundColor: [
                    '#0db1b4ff',
                ],
                borderColor: [
                    '#0db1b4ff',
                ],
                borderWidth: 5
            },
            {
              label:'Weekly Benchmark (SPY) Return',
              data: yyreturns_1y,
              backgroundColor: [
                '#E06666'
              ],
              borderColor: [
                '#E06666'
              ],
              borderWidth: 3
            }]
        },
        options: {
          plugins: {
            title: {
              family: "sans-serif",
              align: 'start',
              color: '#FFFFFF',
              font: {
                size:20,
              },
              padding: {
                bottom: 40
              },
              display: true,
              text: 'Weekly Quant Fund Return (Last 12 Months)',
            },
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

  async function getData_weekly_1y() {
    const response = await fetch('Newest_1Y_Plot_Fund_Analysis.csv');
    const data = await response.text();

    const rows = data.split("\n").slice(1);
    rows.forEach(elt => {
      const row = elt.split(',');
      const week = row[0];
      xlabels_1y.push(week);
      const fundreturn = row[3];
      yreturns_1y.push(fundreturn);
      const snpreturn = row[4];
      yyreturns_1y.push(snpreturn);

    });

  }

  async function chartIt_cumulative_1y() {
    await getData_cumulative_1y();
    const ctx = document.getElementById('chart_cumulative_1y').getContext('2d');
    const myChart4 = new Chart(ctx, {
        type: 'line',
        data: {
            labels: xlabels_cumulative_1y,
            datasets: [{
                label: 'Cumulative Fund Return',
                data: y_cumulative_returns_1y,
                backgroundColor: [
                    '#0db1b4ff',
                ],
                borderColor: [
                    '#0db1b4ff',
                ],
                borderWidth: 5
            },
            {
              label:'Cumulative Benchmark (SPY) Return',
              data: yy_cumulative_returns_1y,
              backgroundColor: [
                '#E06666'
              ],
              borderColor: [
                '#E06666'
              ],
              borderWidth: 3
            }]
        },
        options: {
          plugins: {
            title: {
              family: "sans-serif",
              align: 'start',
              color: '#FFFFFF',
              font: {
                size:20,
              },
              padding: {
                bottom: 40
              },
              display: true,
              text: 'Cumulative Quant Fund Return (Last 12 Months)',
            },
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

  async function getData_cumulative_1y() {
    const response = await fetch('Newest_1Y_Plot_Fund_Analysis.csv');
    const data = await response.text();

    const rows = data.split("\n").slice(1);
    rows.forEach(elt => {
      const row = elt.split(',');
      const weeks = row[0];
      xlabels_cumulative_1y.push(weeks);
      const fund_cumulative_return = row[9];
      y_cumulative_returns_1y.push(fund_cumulative_return);
      const snp_cumulative_return = row[10];
      yy_cumulative_returns_1y.push(snp_cumulative_return);

    });

  }

  async function chartIt_weekly_at() {
    await getData_weekly_at();
    const ctx = document.getElementById('chart_weekly_at').getContext('2d');
    const myChart1 = new Chart(ctx, {
        type: 'line',
        data: {
            labels: xlabels_at,
            datasets: [{
                label: 'Weekly Fund Return',
                data: yreturns_at,
                backgroundColor: [
                    '#0db1b4ff',
                ],
                borderColor: [
                    '#0db1b4ff',
                ],
                borderWidth: 5
            },
            {
              label:'Weekly Benchmark (SPY) Return',
              data: yyreturns_at,
              backgroundColor: [
                '#E06666'
              ],
              borderColor: [
                '#E06666'
              ],
              borderWidth: 3
            }]
        },
        options: {
          plugins: {
            title: {
              family: "sans-serif",
              align: 'start',
              color: '#FFFFFF',
              font: {
                size:20,
              },
              padding: {
                bottom: 40
              },
              display: true,
              text: 'Weekly Quant Fund Return (Since Inception)',
            },
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

  async function getData_weekly_at() {
    const response = await fetch('Newest_Alltime_Plot_Fund_Analysis.csv');
    const data = await response.text();

    const rows = data.split("\n").slice(1);
    rows.forEach(elt => {
      const row = elt.split(',');
      const week = row[0];
      xlabels_at.push(week);
      const fundreturn = row[3];
      yreturns_at.push(fundreturn);
      const snpreturn = row[4];
      yyreturns_at.push(snpreturn);

    });

  }

  async function chartIt_cumulative_at() {
    await getData_cumulative_at();
    const ctx = document.getElementById('chart_cumulative_at').getContext('2d');
    const myChart4 = new Chart(ctx, {
        type: 'line',
        data: {
            labels: xlabels_cumulative_at,
            datasets: [{
                label: 'Cumulative Fund Return',
                data: y_cumulative_returns_at,
                backgroundColor: [
                    '#0db1b4ff',
                ],
                borderColor: [
                    '#0db1b4ff',
                ],
                borderWidth: 5
            },
            {
              label:'Cumulative Benchmark (SPY) Return',
              data: yy_cumulative_returns_at,
              backgroundColor: [
                '#E06666'
              ],
              borderColor: [
                '#E06666'
              ],
              borderWidth: 3
            }]
        },
        options: {
          plugins: {
            title: {
              family: "sans-serif",
              align: 'start',
              color: '#FFFFFF',
              font: {
                size:20,
              },
              padding: {
                bottom: 40
              },
              display: true,
              text: 'Cumulative Quant Fund Return (Since Inception)',
            },
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

  async function getData_cumulative_at() {
    const response = await fetch('Newest_Alltime_Plot_Fund_Analysis.csv');
    const data = await response.text();

    const rows = data.split("\n").slice(1);
    rows.forEach(elt => {
      const row = elt.split(',');
      const weeks = row[0];
      xlabels_cumulative_at.push(weeks);
      const fund_cumulative_return = row[9];
      y_cumulative_returns_at.push(fund_cumulative_return);
      const snp_cumulative_return = row[10];
      yy_cumulative_returns_at.push(snp_cumulative_return);

    });

  }

  async function getTable() {
    const response = await fetch('Newest_Fund_Summary.csv');
    const summ_data = await response.text();

    const summ_rows = summ_data.split("\n").slice(0);
    summ_rows.forEach(elt => {
      const row = elt.split(',');
      const headers = row[0];
      header_cols.push(headers);
      //console.log(header_cols)
      //console.log(nocommas)
      //document.getElementById("header_cols_web").innerHTML = nocommas;
      const nmr_summary = row[1];
      nmr_data.push(nmr_summary);
      //document.getElementById("nmr_data_web").innerHTML = nmr_data;
      const usd_summary = row[2];
      usd_data.push(usd_summary);
      //document.getElementById("usd_data_web").innerHTML = usd_data;
      const snp_summary = row[3];
      snp_data.push(snp_summary);
      //document.getElementById("snp_data_web").innerHTML = snp_data;
      //const fundreturn = row[3];
      //yreturns.push(fundreturn);
      //const snpreturn = row[4];
      //yyreturns.push(snpreturn);

    });
    var header_header = header_cols.slice(0)[0];
    document.getElementById("header_header_web").innerHTML = header_header;
    var header_cum_return = header_cols.slice(1)[0];
    document.getElementById("header_cumret_web").innerHTML = header_cum_return;
    var header_lw_return = header_cols.slice(2)[0];
    document.getElementById("header_lwret_web").innerHTML = header_lw_return;
    var header_avg_return = header_cols.slice(3)[0];
    document.getElementById("header_avgret_web").innerHTML = header_avg_return;
    var header_var = header_cols.slice(4)[0];
    document.getElementById("header_var_web").innerHTML = header_var;
    var header_sharpe = header_cols.slice(5)[0];
    document.getElementById("header_sharpe_web").innerHTML = header_sharpe;

    var nmr_header = nmr_data.slice(0)[0];
    document.getElementById("nmr_header_web").innerHTML = nmr_header;
    var nmr_cum_return = nmr_data.slice(1)[0];
    document.getElementById("nmr_cumret_web").innerHTML = nmr_cum_return;
    var nmr_lw_return = nmr_data.slice(2)[0];
    document.getElementById("nmr_lwret_web").innerHTML = nmr_lw_return;
    var nmr_avg_return = nmr_data.slice(3)[0];
    document.getElementById("nmr_avgret_web").innerHTML = nmr_avg_return;
    var nmr_var = nmr_data.slice(4)[0];
    document.getElementById("nmr_var_web").innerHTML = nmr_var;
    var nmr_sharpe = nmr_data.slice(5)[0];
    document.getElementById("nmr_sharpe_web").innerHTML = nmr_sharpe;

    var usd_header = usd_data.slice(0)[0];
    document.getElementById("usd_header_web").innerHTML = usd_header;
    var usd_cum_return = usd_data.slice(1)[0];
    document.getElementById("usd_cumret_web").innerHTML = usd_cum_return;
    var usd_lw_return = usd_data.slice(2)[0];
    document.getElementById("usd_lwret_web").innerHTML = usd_lw_return;
    var usd_avg_return = usd_data.slice(3)[0];
    document.getElementById("usd_avgret_web").innerHTML = usd_avg_return;
    var usd_var = usd_data.slice(4)[0];
    document.getElementById("usd_var_web").innerHTML = usd_var;
    var usd_sharpe = usd_data.slice(5)[0];
    document.getElementById("usd_sharpe_web").innerHTML = usd_sharpe;

    var snp_header = snp_data.slice(0)[0];
    document.getElementById("snp_header_web").innerHTML = snp_header;
    var snp_cum_return = snp_data.slice(1)[0];
    document.getElementById("snp_cumret_web").innerHTML = snp_cum_return;
    var snp_lw_return = snp_data.slice(2)[0];
    document.getElementById("snp_lwret_web").innerHTML = snp_lw_return;
    var snp_avg_return = snp_data.slice(3)[0];
    document.getElementById("snp_avgret_web").innerHTML = snp_avg_return;
    var snp_var = snp_data.slice(4)[0];
    document.getElementById("snp_var_web").innerHTML = snp_var;
    var snp_sharpe = snp_data.slice(5)[0];
    document.getElementById("snp_sharpe_web").innerHTML = snp_sharpe;

  }

  async function chartIt_distribution() {
    await getData_distribution();
    const ctx = document.getElementById('chart_distribution').getContext('2d');
    const myChart3 = new Chart(ctx, {
        type: 'line',
        data: {
            labels: xdata,
            datasets: [{
                label: 'Fund Round Return Distribution',
                data: ydata,
                backgroundColor: [
                    '#0db1b4ff',
                ],
                borderColor: [
                    '#0db1b4ff',
                ],
                borderWidth: 5
              },
              {
                label:'SPY Monthly Return Distribution',
                data: ydata_bm,
                backgroundColor: [
                  '#E06666'
                ],
                borderColor: [
                  '#E06666'
                ],
                borderWidth: 3
            }]
        },
        options: {
          plugins: {
            title: {
              family: "sans-serif",
              align: 'start',
              color: '#FFFFFF',
              font: {
                size:20,
              },
              padding: {
                bottom: 40
              },
              display: true,
              text: 'Monthly Distribution of Returns (All Time)',
            },
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

  async function getData_distribution() {
    const response = await fetch('Newest_Quant_Distribution.csv');
    const data = await response.text();

    const rows = data.split("\n").slice(1);
    rows.forEach(elt => {
      const row = elt.split(',');
      const x_quant = row[0];
      xdata.push(x_quant);
      const y_quant = row[1];
      ydata.push(y_quant);
      const y_bm = row[2];
      ydata_bm.push(y_bm);

    });

  }


  </script>
</html>
