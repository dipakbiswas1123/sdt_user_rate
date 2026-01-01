<!DOCTYPE html>
<html>
<head>
  <title>Internet Package Calculator</title>
  <style>
    body {
      font-family: Arial;
      background: #f2f2f2;
      padding: 20px;
    }
    table {
      width: 600px;
      background: #fff;
      border-collapse: collapse;
      margin-bottom: 40px;
    }
    th, td {
      border: 1px solid #ccc;
      padding: 10px;
      text-align: center;
    }
    th {
      background: #333;
      color: white;
    }
    input {
      width: 80px;
      padding: 5px;
      text-align: center;
    }
  </style>
</head>

<body>

<h2>Package Price Discount Calculator</h2>

<table>
  <tr>
    <th>Package</th>
    <th>Original Price (৳)</th>
    <th>Discount %</th>
    <th>Final Price (৳)</th>
  </tr>

  <tr>
    <td>20 Mbps</td>
    <td><input type="number" value="220" onkeyup="discountCalc(this)"></td>
    <td><input type="number" value="0" onkeyup="discountCalc(this)"></td>
    <td class="dFinal">220</td>
  </tr>

  <tr>
    <td>40 Mbps</td>
    <td><input type="number" value="330" onkeyup="discountCalc(this)"></td>
    <td><input type="number" value="0" onkeyup="discountCalc(this)"></td>
    <td class="dFinal">330</td>
  </tr>

  <tr>
    <td>50 Mbps</td>
    <td><input type="number" value="430" onkeyup="discountCalc(this)"></td>
    <td><input type="number" value="0" onkeyup="discountCalc(this)"></td>
    <td class="dFinal">430</td>
  </tr>

  <tr>
    <td>70 Mbps</td>
    <td><input type="number" value="640" onkeyup="discountCalc(this)"></td>
    <td><input type="number" value="0" onkeyup="discountCalc(this)"></td>
    <td class="dFinal">640</td>
  </tr>

  <tr>
    <td>100 Mbps</td>
    <td><input type="number" value="990" onkeyup="discountCalc(this)"></td>
    <td><input type="number" value="0" onkeyup="discountCalc(this)"></td>
    <td class="dFinal">990</td>
  </tr>
</table>

<h2>Package Rate Increase Calculator</h2>

<table>
  <tr>
    <th>Package</th>
    <th>Original Price (৳)</th>
    <th>Increase %</th>
    <th>New Price (৳)</th>
  </tr>

  <tr>
    <td>20 Mbps</td>
    <td><input type="number" value="220" onkeyup="increaseCalc(this)"></td>
    <td><input type="number" value="0" onkeyup="increaseCalc(this)"></td>
    <td class="iFinal">220</td>
  </tr>

  <tr>
    <td>40 Mbps</td>
    <td><input type="number" value="330" onkeyup="increaseCalc(this)"></td>
    <td><input type="number" value="0" onkeyup="increaseCalc(this)"></td>
    <td class="iFinal">330</td>
  </tr>

  <tr>
    <td>50 Mbps</td>
    <td><input type="number" value="430" onkeyup="increaseCalc(this)"></td>
    <td><input type="number" value="0" onkeyup="increaseCalc(this)"></td>
    <td class="iFinal">430</td>
  </tr>

  <tr>
    <td>70 Mbps</td>
    <td><input type="number" value="640" onkeyup="increaseCalc(this)"></td>
    <td><input type="number" value="0" onkeyup="increaseCalc(this)"></td>
    <td class="iFinal">640</td>
  </tr>

  <tr>
    <td>100 Mbps</td>
    <td><input type="number" value="990" onkeyup="increaseCalc(this)"></td>
    <td><input type="number" value="0" onkeyup="increaseCalc(this)"></td>
    <td class="iFinal">990</td>
  </tr>
</table>

<script>
function discountCalc(el) {
  let row = el.parentElement.parentElement;

  let original = parseFloat(row.children[1].children[0].value) || 0;
  let discount = parseFloat(row.children[2].children[0].value) || 0;

  let finalPrice = original - (original * discount / 100);
  row.querySelector(".dFinal").innerHTML = Math.round(finalPrice);
}

function increaseCalc(el) {
  let row = el.parentElement.parentElement;

  let original = parseFloat(row.children[1].children[0].value) || 0;
  let increase = parseFloat(row.children[2].children[0].value) || 0;

  let newPrice = original + (original * increase / 100);
  row.querySelector(".iFinal").innerHTML = Math.round(newPrice);
}
</script>

</body>
</html>
