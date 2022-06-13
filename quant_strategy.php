<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="images/favicon.png"/>
    <title>Quant Details</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="quant_strategy33.css">
  </head>
  <body style="background-color:#09232eff;">
    <div class="banner"></div>
    <div class="container">
      <div class="nav-wrapper">
        <div class="left-side">
          <div class="nav-link-wrapper active-nav-link">

            <a href="index"><p>FUNDS</p></a>
          </div>
          <div class="nav-link-wrapper">
            <a href="about"><p>ABOUT</p></a>
          </div>
        </div>
        <div class="middle-side">
          <img src="images/Hyphy_Logo.png" style="width:120px;height:65px;"></a>
        </div>
        <div class="right-side">
          <div class="brand">
            <p><a href="https://metamask.io/" class="button-wallet" target="_blank"> Connect Metamask</a></p>
          </div>
        </div>
      </div>
    </div>

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
        <div class="quant-aum-figure"> $3,147.29</div>
      </div>
      <div class="quant-apy">
        <div class="quant-apy-text">Current APY</div>
        <div class="quant-apy-figure"> 45.5%</div>
      </div>
      <div class="quant-corr">
        <div class="quant-corr-text">Current SPY Corr</div>
        <div class="quant-corr-figure"> 0.11</div>
      </div>
    </div>

      <div class="description-wrapper">
        <div class="description-header">Fund Setup</div>
        <div class="description-text-wrapper">
        <div class="description-text"> <p>Hyphy Capital's Quantitative Fund is a mathematical Fund based on a combination of Google's Open-Source Keras Deep Learning Library, PyTorch, and ExtraGradientBoost that aims to completely eliminate human decision making and is solely based on historic and live financial data. The fund's models are
          deployed via the <a href="https://numer.ai/" target="_blank">Numerai Hedge Fund</a>. Numerai is a San-Francisco based Hedge Fund using crowd-sourced trading signals. The crowd (Data Scientists or any particpant) is incentivized through a payout mechanism that rewards accurate signals
          (stock price predictions) and punishes inaccurate signals. Numerai has defined the prediction timeframe to 20 Days, this means every round only resolves after 4 Weeks (taken into account the 2 Day lag at the beginning and end of each epoch). Submissions are still accepted on a weekly basis, thus Hyphy Capital and its Quant Fund are also rewarded on a weekly basis.</p>
          <p>Numerai does this by accepting <a href="https://www.kraken.com/en-us/learn/what-is-numeraire-l" target="_blank">Numeraire</a>, their in-house ERC-20 token built on the Ethereum Blockchain. Particpants can use l to 'stake'
          on their own models. Numerai then pays out l to each model, depending on its accuracy. Hyphy Capital's Quant Fund submits 4-6 models (depending on data and compute availability), which are used to submit signals on Numerai. Thus, the Fund's Current AUM is, in reality, denominated in l. Though the Fund keeps a liquid l
          cushion (5-10% of the total AUM) that is not 'staked' towards the deployed models. This is to remain adaptable to market conditions if necessary ('unstaking' l from Numerai may take about 28 days). </p>
          <p>The staking/unstaking and payout mechanism happens decentralized via smart contracts on the Ethereum Blockchain and can all be verified either via the <a href="https://etherscan.io/address/0x0000000000000000000000000000000000021aed#tokentxns" target="_blank">Etherscan</a> or the
          <a href="https://etherscan.io/address/0x0000000000000000000000000000000000021aed#tokentxns" target="_blank">Numerai Signals Leaderboard</a>.</p>
        </div>
          <div class="description-video"><iframe width="660" height="375" src="https://www.youtube.com/embed/dhJnt0N497c" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
          </iframe>
          </div>
        </div>

        <div class="description-header">Inputs </div>
        <div class="description-text"><p> The Quant Fund uploads stock price predictions (signals) from four separate models. These are fundamentally built on different inputs and thus are largely independent from one another. This has a positive effect on the Reward Mechanism with Numerai. Numerai rewards two different mechanisms, the accuracy of a stock price prediction to
          the actual stock price in 20 Days (CORR20) and the originality of the prediction, whether the prediction is similar to another submission to Numerai (MMC, Meta Model Contribution) - as the submission of the same model only contributes the Numerai in the first or maybe second occurence. After that an unoriginal model loses its value. Submitted are stock price predictions
          in a quasi-binary format via csv-file, which can be uploaded manually or automatically via the numerapi. This ensures that Numerai does not get access
          to the actual code of the model. Thus, all IP stays with the participant, or in this case with Hyphy Capital. </p>
          <p>All Models by Hyphy Capital can be categorized by three variables, the target type, the timeframe, and the ML Model type. Target type and timeframe have to be set find the appropriate ML Model. Target type is either the expected percent change or the absolute stock price, then extrapolated to expected percent change.</p>
          <p>The models can be searched by their ID (top row of table below) on the <a href="https://etherscan.io/address/0x0000000000000000000000000000000000021aed#tokentxns" target="_blank">Numerai Signals Leaderboard</a> for more information (weekly performance, leaderboard position, etc.). Below are some key stats for comparison.</p></div>
        <div class="description-header">Models - Information on <a href="https://numer.ai/" target="_blank">Numerai</a> & Buy on <a href="https://numerbay.ai/" target="_blank">Numerbay</a></div>
        <div class="content-wrapper">
          <div class="portfolio-items-wrapper">
            <! CARD 1>
            <div class="card-model-wrapper">
              <div class="card-patrickl">
                <div class="card-content">

                  <h2 class="card-title-left">PATRICKL - Derivative Model</h2>
                  <a href="https://signals.numer.ai/patrickl" class="button"  target="_blank"> Learn More</a>
                  <a href="https://numerbay.ai/p/147/signals-predictions-patrickl" class="button"> Buy the Model</a>
                </div>
              </div>

            </div>
            <! CARD 1>
            <div class="card-model-wrapper">
              <div class="card-patrickl2">
                <div class="card-content">

                  <h2 class="card-title-left">PATRICKL2 - Smart Money Model</h2>
                  <a href="https://signals.numer.ai/patrickl2" class="button" target="_blank"> Learn More</a>
                  <a href="https://numerbay.ai/p/148/signals-predictions-patrickl2" class="button"> Buy the Model</a>
                </div>
              </div>

          </div>
          <! CARD 1>
          <div class="card-model-wrapper">
            <div class="card-left">
              <div class="card-content">

                <h2 class="card-title-left">PATRICKL3 - Technical Model</h2>
                <a href="https://signals.numer.ai/patrickl3" class="button" target="_blank"> Learn More</a>
                <a href="https://numerbay.ai/p/149/signals-predictions-patrickl3" class="button"> Buy the Model</a>
              </div>
            </div>
          </div>
        </div>
        </div>
        <div class="description-header">Models - Direct Comparison </div>
        <div class="model-table-wrapper">
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
                <td id="l_header_web"></td>
                <td id="l_cumret_web"></td>
                <td id="l_lwret_web"></td>
                <td id="l_avgret_web"></td>
                <td id="l_var_web"></td>
                <td id="l_sharpe_web"></td>
              </tr>
              <tr>
                <td id="l2_header_web"></td>
                <td id="l2_cumret_web"></td>
                <td id="l2_lwret_web"></td>
                <td id="l2_avgret_web"></td>
                <td id="l2_var_web"></td>
                <td id="l2_sharpe_web"></td>
              </tr>
              <tr>
                <td id="l3_header_web"></td>
                <td id="l3_cumret_web"></td>
                <td id="l3_lwret_web"></td>
                <td id="l3_avgret_web"></td>
                <td id="l3_var_web"></td>
                <td id="l3_sharpe_web"></td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="description-header">Outputs </div>
        <div class="description-text"> Lore ipsum</div>

        <div class="description-header">Return </div>
        <div class="description-text"> Lore ipsum</div>

      </div>
      <div class="Footer">
        <div class="Links">
          <div class="twitter">
            <a href="https://twitter.com"><img src="images/twitter_icon_lsg.png" style="color:red;width:18px;height:18px;"></a>
          </div>
          <div class="tele">
          <a href="https://telegram.com"><img src="images/tele_icon_lsg.png" style="width:20px;height:20px;"></a>
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

    const header_cols = [];
    const l_data = [];
    const l2_data = [];
    const l3_data = [];

    getTable();

    async function getTable() {
      const response = await fetch('Individ_Model_Summary_2022_04_16.csv');
      const summ_data = await response.text();

      const summ_rows = summ_data.split("\n").slice(0);
      summ_rows.forEach(elt => {
        const row = elt.split(',');
        const headers = row[0];
        header_cols.push(headers);
        //console.log(header_cols)
        //console.log(nocommas)
        //document.getElementById("header_cols_web").innerHTML = nocommas;
        const l_summary = row[1];
        l_data.push(l_summary);
        //document.getElementById("l_data_web").innerHTML = l_data;
        const l2_summary = row[2];
        l2_data.push(l2_summary);
        //document.getElementById("l2_data_web").innerHTML = l2_data;
        const l3_summary = row[3];
        l3_data.push(l3_summary);
        //document.getElementById("l3_data_web").innerHTML = l3_data;
        //const fundreturn = row[3];
        //yreturns.push(fundreturn);
        //const l3return = row[4];
        //yyreturns.push(l3return);

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

      var l_header = l_data.slice(0)[0];
      document.getElementById("l_header_web").innerHTML = l_header;
      var l_cum_return = l_data.slice(1)[0];
      document.getElementById("l_cumret_web").innerHTML = l_cum_return;
      var l_lw_return = l_data.slice(2)[0];
      document.getElementById("l_lwret_web").innerHTML = l_lw_return;
      var l_avg_return = l_data.slice(3)[0];
      document.getElementById("l_avgret_web").innerHTML = l_avg_return;
      var l_var = l_data.slice(4)[0];
      document.getElementById("l_var_web").innerHTML = l_var;
      var l_sharpe = l_data.slice(5)[0];
      document.getElementById("l_sharpe_web").innerHTML = l_sharpe;

      var l2_header = l2_data.slice(0)[0];
      document.getElementById("l2_header_web").innerHTML = l2_header;
      var l2_cum_return = l2_data.slice(1)[0];
      document.getElementById("l2_cumret_web").innerHTML = l2_cum_return;
      var l2_lw_return = l2_data.slice(2)[0];
      document.getElementById("l2_lwret_web").innerHTML = l2_lw_return;
      var l2_avg_return = l2_data.slice(3)[0];
      document.getElementById("l2_avgret_web").innerHTML = l2_avg_return;
      var l2_var = l2_data.slice(4)[0];
      document.getElementById("l2_var_web").innerHTML = l2_var;
      var l2_sharpe = l2_data.slice(5)[0];
      document.getElementById("l2_sharpe_web").innerHTML = l2_sharpe;

      var l3_header = l3_data.slice(0)[0];
      document.getElementById("l3_header_web").innerHTML = l3_header;
      var l3_cum_return = l3_data.slice(1)[0];
      document.getElementById("l3_cumret_web").innerHTML = l3_cum_return;
      var l3_lw_return = l3_data.slice(2)[0];
      document.getElementById("l3_lwret_web").innerHTML = l3_lw_return;
      var l3_avg_return = l3_data.slice(3)[0];
      document.getElementById("l3_avgret_web").innerHTML = l3_avg_return;
      var l3_var = l3_data.slice(4)[0];
      document.getElementById("l3_var_web").innerHTML = l3_var;
      var l3_sharpe = l3_data.slice(5)[0];
      document.getElementById("l3_sharpe_web").innerHTML = l3_sharpe;

    }

    </script>
