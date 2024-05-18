<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Table1</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 20px;
      font-size: 12px;
    }
 .logo {
  flex: 1;
  float: left;
  width: 200px;
}
.address {
  flex: 1;
  float: right;
  width: 500px;
}

.icon-feed {
  display: flex;
  width: 700px;
}
    .head {
      text-align: center;
    }

    table {
      width: 100%;
      border-collapse: collapse;
    }

    th,
    td {
      border: 1px solid #ddd;
      padding: 8px;
      text-align: left;
    }

    th {
      background-color: #f2f2f2;
    }

    .bordered-text {
      display: flex;
      justify-content: space-between;
      align-items: center;
      /* Center vertically */
      border: 1px solid #ddd;
      padding: 8px;
    }

    .bordered-text span {
      text-align: center;
      /* Center the text within the span */
    }

    .processed {
      display: flex;
      margin: 5px;
    }

    .feed-processed {
      margin: 38px;
    }
    .feed-processed {
  flex: 1;
  float: right;

}
  </style>
</head>

<body>

  <div class="icon-feed">
    <div class="logo">
      <img src="https://agrilinkbd.com/images/bus__52482019-07-21_1563737550.jpg" alt="Logo" width="180">
    </div>
    <div class="address">
      <h1>ICON FEED INDUSTROES LTD.</h1>
      <p>Head office :House-292,road-04 ,avinew-03 , DOSH , mirpur, Dhaka-1216</p>
      <p>Fectory: Lalpukurpar ,Abdar ,sreepur , Gazipur</p>
      <p>Email:iconfeedindustroesltd@gmail.com, Mobile:+8801713265340 , +8801713265342</p>
    </div>
  </div>

  <div style="padding-top: 200px;">
    <h2 class="head">Invoice</h2>
    
    <table>
      <tbody>
      <tr>
          <td>Party Name: </td>
          <td style="text-align: right;">Bill No : 0001</td>
        </tr>
        <tr>
          <td>Address: </td>
          <td style="text-align: right;">Date : 09.09.23</td>
        </tr>
        <tr>
          <td>Mobile Number: </td>
          <td style="text-align: right;">Customer Code:0001</td>
        </tr>
      </tbody>

    </table>

  </div>

  <div style="padding-top: 15px;">
    <table>
      <thead>
        <tr>
          <th>SI. NO </th>
          <th>Type off Feed</th>
          <th>Nature of fd.</th>
          <th>Code No</th>
          <th>Bag Size</th>
          <th>Qnt./bag</th>
          <th>Qnt./Kg</th>
          <th>Price</th>
          <th>Taka</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th> 1</th>
          <th>Layer Layer-1</th>
          <th>MASH</th>
          <th>203</th>
          <th>50</th>
          <th>100</th>
          <th>5000</th>
          <th>57.8</th>
          <th>289,000,00</th>
        </tr>
        <tr>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th>0</th>
          <th></th>
          <th>0</th>
        </tr>
        <tr>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th>0</th>
          <th></th>
          <th>0</th>
        </tr>
        <tr>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th>0</th>
          <th></th>
          <th>0</th>
        </tr>
        <tr>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th>0</th>
          <th></th>
          <th>0</th>
        </tr>
        <tr>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th>0</th>
          <th></th>
          <th>0</th>
        </tr>
        <tr>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th>0</th>
          <th></th>
          <th>0</th>
        </tr>
        <tr>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th>0</th>
          <th></th>
          <th>0</th>
        </tr>
        <tr>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th>0</th>
          <th></th>
          <th>0</th>
        </tr>
        <tr>
          <th colspan="5" style="text-align: center;"> Total</th>
          <th>100</th>
          <th>5000</th>
          <th></th>
          <th>189,999.00</th>

        </tr>

        <!-- Add more rows for additional items -->
      </tbody>
      <tfoot>
        <tr>
          <td colspan="8" style="text-align: right; border: none;">Speacial Prices/KG/TK</td>
          <td>5.00</td>
        </tr>
        <tr>
          <td colspan="8" style="text-align: right; border: none;">Total Diccount</td>
          <td>25,000.00</td>
        </tr>
        <tr>
          <td colspan="8" style="text-align: right; border: none;">Total TK</td>
          <td>264,000.00</td>
        </tr>
      </tfoot>
    </table>
    <h4>Total(in worlds):</h4>
    <div class="processed">
      <div class="feed-processed">
       <p> Received by</p>
      </div>
      <div class="feed-processed">
       <p> Prepared by</p>
      </div>
      <div class="feed-processed">
        <p>Checked by</p>
      </div>
      <div class="feed-processed">
        <p>Auth Signature</p>
      </div>
    </div>
  </div>
</body>

</html>