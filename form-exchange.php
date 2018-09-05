<div class="container-fluid bgc">
  <div class="container">
    <div class="row">
      <div class="new-form-exchange-1">
        <div id="text-2" class="widget-container widget_text">
          <div class="new-form-exchange col-lg-6 col-md-6 nopd">
            <div>
              <form action="exchange.php" method="post" novalidate="novalidate">
                <div class="alert alert-danger fade in col-xs-12">
                  <a href="#" class="close" data-dismiss="alert">&times;
                  </a>
                  <strong>Error!
                  </strong> A problem has been occurred while submitting your data. A problem has been occurred while submitting your data. A problem has been occurred while submitting your data.
                </div>
                <p>PIN Moneygramik 
                  <span class="lower">(We accept all countries)
                  </span>:
                </p>
                <div class="new-form-voucher col-sm-12 col-md-6 small_padding">
                  <div class="pin-moneygramik-2015">
                    <input name="pin" required type="text" maxlength="19" placeholder="Your PIN Moneygramik" value="" />
                  </div> 
                </div>
                <div class="new-form-credit col-xs-6 col-md-3 small_padding">
                  <input name="value" value="" maxlength="7"  placeholder="10" type="text" />
                </div>
                <div class="new-form-credit col-xs-6 col-md-3 small_padding">
                  <select>
                    <option value="EUR">EUR
                    </option>
                    <option value="CHF">CHF
                    </option>
                    <option value="GBP">GBP
                    </option>
                    <option value="CAD">CAD
                    </option>
                    <option value="USD">USD
                    </option>
                    <option value="RON">RON
                    </option>
                    <option value="NOK">NOK
                    </option>
                    <option value="MXN">MXN
                    </option>
                    <option value="HRK">HRK
                    </option>
                    <option value="PLN">PLN
                    </option>
                    <option value="PLN">CZK
                    </option>
                    <option value="PLN">DKK
                    </option>
                    <option value="PLN">SEK
                    </option>
                    <option value="PLN">AUD
                    </option>
                    <option value="PLN">HUF
                    </option>
                    <option value="PLN">KWD
                    </option>
                  </select>
                </div>
                <p>Payment method:
                </p>
                <div class="new-form-moneytransfer  col-xs-9 small_padding">
                  <select name="purse_type">
                    <option value="PayPal">PayPal
                    </option>
                    <option value="Bitcoin">Bitcoin
                    </option>
                    <option value="Litecoin">Litecoin
                    </option>
                    <option value="Webmoney">Webmoney
                    </option>
                    <option value="Skrill">Skrill
                    </option>
                    <option value="Neteller">Neteller
                    </option>
                    <option value="Payeer">Payeer
                    </option>
                    <option value="AdvancedCash">Advanced Cash
                    </option>
                    <option value="Ethereum">Ethereum
                    </option>
                    <option value="Moneypolo">Moneypolo
                    </option>
                    <option value="PerfectMoney">Perfect Money
                    </option>
                    <option value="VisaMasterCard">Visa/MasterCard
                    </option>
                    <option value="AmazonGiftCard">Amazon Gift Card
                    </option>
                  </select>
                </div>
                <div class="new-form-moneytransfer  col-xs-3 small_padding">
                  <select  name="purse_currency">
                    <option value="USD">USD
                    </option>
                    <option value="EUR">EUR
                    </option>
                  </select>
                </div>
                <div class="new-form-clear">
                </div>
                <p>Recipient's payment details:
                </p>
                <div class="new-form-purse col-sm-12 small_padding">
                  <input name="purse" type="text" maxlength="40" value="" placeholder="Your wallet\account payment method" />
                </div>
                <div class="new-form-clear">
                </div>
                <p>E-Mail:
                </p>
                <div class="new-form-email  col-sm-12 small_padding">
                  <input name="email" type="text" maxlength="40" value="" placeholder="Your E-mail address" /> 
                </div>
                <div class="col-sm-12 small_padding margin_top">
                  <p class="get_money">YOU ARE GETTING: 25 USD 
                    <span>Paypal
                    </span>
                  </p>
                </div>
                <div class="new-form-clear col-md-12 col-sm-12">
                <div class="new-form-button-2 col-md-6 col-sm-6">
                  <input type="hidden" value="7eec6ff206eb74cee762a57e80e3d5f2" name="nameform">
                  <input value="exchange now" type="submit">
                  </div>
                  <span class="need-help col-md-6 col-sm-12">
                    <a href="../exchange-help">Need help with exchange?
                    </a>
                  </span>
                </div>
                <div class="alert alert-dark fade in col-xs-12">
                  <strong>Error!
                  </strong> A problem has been occurred while submitting your data. A problem has been occurred while submitting your data. A problem has been occurred while submitting your data.
                </div>
              </form>
            </div>
          </div>
          <?php
include "rate-exchange.php";
?>	
        </div>
      </div>
    </div>
  </div>
  <div class="new-block-1-edit2015 container">
    <div class="available-payment-systems hidden-xs">
      <table>
        <tr>
          <td>
            <img src="images/payment/visa-mastercard.png" title="Visa/MasterCard" alt="Moneygramik to Visa/MasterCard">
          </td>
          <td>
            <img src="images/payment/bitcoin.png" title="Bitcoin" alt="Moneygramik to Bitcoin">
          </td>
          <td>
            <img src="images/payment/okpay.png" title="OKPAY" alt="Moneygramik to OKPAY">
          </td>
          <td>
            <img src="images/payment/payza.png" title="Payza" alt="Moneygramik to Payza">
          </td>
          <td>
            <img src="images/payment/amazon.png" title="Amazon" alt="Moneygramik to Amazon">
          </td>
          <td>
            <img src="images/payment/skrill.png" title="Skrill" alt="Moneygramik to Skrill">
          </td>
        </tr>
        <tr>
          <td>
            <img src="images/payment/payeer.png" title="Payeer" alt="Moneygramik to Payeer">
          </td>
          <td>
            <img src="images/payment/perfectmoney.png" title="PerfectMoney" alt="Moneygramik to PerfectMoney">
          </td>
          <td>
            <img src="images/payment/advcash.png" title="AdvancedCash" alt="Moneygramik to AdvancedCash">
          </td>
          <td>
            <img src="images/payment/webmoney.png" title="WebMoney" alt="Moneygramik to WebMoney">
          </td>
          <td>
            <img src="images/payment/sepa.png" title="SEPA" alt="Moneygramik to SEPA">
          </td>
          <td>
            <img src="images/payment/litecoin.png" title="Litecoin" alt="Moneygramik to Litecoin">
          </td>
        </tr>
      </table>
    </div>
    <div class="available-payment-systems visible-xs">
      <table>
        <tr>
          <td>
            <img src="images/payment/visa-mastercard.png" title="Visa/MasterCard" alt="Moneygramik to Visa/MasterCard">
          </td>
          <td>
            <img src="images/payment/bitcoin.png" title="Bitcoin" alt="Moneygramik to Bitcoin">
          </td>
          <td>
            <img src="images/payment/okpay.png" title="OKPAY" alt="Moneygramik to OKPAY">
          </td>
        </tr>
        <tr>
          <td>
            <img src="images/payment/payza.png" title="Payza" alt="Moneygramik to Payza">
          </td>
          <td>
            <img src="images/payment/amazon.png" title="Amazon" alt="Moneygramik to Amazon">
          </td>
          <td>
            <img src="images/payment/skrill.png" title="Skrill" alt="Moneygramik to Skrill">
          </td>
        </tr>
        <tr>
          <td>
            <img src="images/payment/payeer.png" title="Payeer" alt="Moneygramik to Payeer">
          </td>
          <td>
            <img src="images/payment/perfectmoney.png" title="PerfectMoney" alt="Moneygramik to PerfectMoney">
          </td>
          <td>
            <img src="images/payment/advcash.png" title="AdvancedCash" alt="Moneygramik to AdvancedCash">
          </td>
        </tr>
        <tr>
          <td>
            <img src="images/payment/webmoney.png" title="WebMoney" alt="Moneygramik to WebMoney">
          </td>
          <td>
            <img src="images/payment/sepa.png" title="SEPA" alt="Moneygramik to SEPA">
          </td>
          <td>
            <img src="images/payment/litecoin.png" title="Litecoin" alt="Moneygramik to Litecoin">
          </td>
        </tr>
      </table>
    </div>
  </div>
