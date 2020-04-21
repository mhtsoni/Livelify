<?php
include 'header.php';
?>
<style>
body {
  background: #F8F8F8;
}

a {
  text-decoration: none;
}

h1 {
  text-align: center;
  font-family: 'Lato', sans-serif;
  font-size: 25px;
  line-height: 32px;
  padding-top: 70px;
}
h1 a {
  color: #66CCCC;
}

.price-table-wrapper {
  font-family: 'Lato', sans-serif;
  text-align: center;
  margin-top: 30px;
}
.price-table-wrapper .featured-table {
  box-shadow: 0px 0px 19px -3px rgba(0, 0, 0, 0.36);
}
.price-table-wrapper .pricing-table {
  display: inline-block;
  border: 1px solid #C8C8C8;
  border-radius: 10px;
  background: white;
  margin: 20px;
  transition: all 0.3s ease-in-out;
}
.price-table-wrapper .pricing-table__header {
  padding: 20px;
  font-size: 20px;
  color: #909090;
  background: #E0E0E0;
}
.price-table-wrapper .pricing-table__price {
  color: #66CCCC;
  padding: 20px;
  margin: auto;
  font-size: 40px;
  font-weight: 500;
}
.price-table-wrapper .pricing-table__button {
  display: block;
  background: #66CCCC;
  text-decoration: none;
  padding: 20px;
  color: white;
  position: relative;
  overflow: hidden;
  transition: all 0.3s ease-in-out;
}
.price-table-wrapper .pricing-table__button:before {
  position: absolute;
  left: -20%;
  top: -10%;
  content: '';
  width: 60%;
  height: 220%;
  -webkit-transform: rotate(-30deg);
          transform: rotate(-30deg);
  background: white;
  opacity: .3;
  transition: all 0.3s ease-in-out;
}
.price-table-wrapper .pricing-table__button:after {
  position: absolute;
  content: '>';
  top: 0;
  right: 0;
  font-size: 25px;
  padding: 15px;
  padding-right: 40px;
  color: white;
  opacity: 0;
  transition: all 0.3s ease-in-out;
}
.price-table-wrapper .pricing-table__button:hover {
  background: black;
}
.price-table-wrapper .pricing-table__list {
  padding: 20px;
  color: #A0A0A0;
}
.price-table-wrapper .pricing-table__list li {
  padding: 15px;
  border-bottom: 1px solid #C8C8C8;
}
.price-table-wrapper .pricing-table__list li:last-child {
  border: none;
}
.price-table-wrapper .pricing-table:hover {
  box-shadow: 0px 0px 19px -3px rgba(0, 0, 0, 0.36);
}
.price-table-wrapper .pricing-table:hover .pricing-table__button {
  padding-left: 0;
  padding-right: 35px;
}
.price-table-wrapper .pricing-table:hover .pricing-table__button:before {
  top: -80%;
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
  width: 100%;
}
.price-table-wrapper .pricing-table:hover .pricing-table__button:after {
  opacity: 1;
  padding-right: 15px;
}

</style>
<link href='https://fonts.googleapis.com/css?family=Lato:400,300,700,100' rel='stylesheet' type='text/css'>

<h1>CHOOSE ANY PLAN THAT SUITS YOUR NEEDS</h1>

<div class="price-table-wrapper">
  <div class="pricing-table">
    <h2 class="pricing-table__header">1 MONTH CLASSES</h2>
    <h3 class="pricing-table__price">49.99$</h3>
    <a target="_blank" class="pricing-table__button" href="TxnTest.php">
      Join Now!
    </a>
    <ul class="pricing-table__list">
      <li>30 day access to all classes</li>
      <li>Live Doubts Solving</li>
      <li>24 hour support</li>
    </ul>
  </div>
  <div class="pricing-table featured-table">
    <h2 class="pricing-table__header">6 MONTH CLASSES</h2>
    <h3 class="pricing-table__price">249.99$</h3>
    <a target="_blank" class="pricing-table__button" href="TxnTest.php.php">
      Join Now!
    </a>
    <ul class="pricing-table__list">
      <li>180 day access to all classes</li>
      <li>Live Doubts Solving</li>
      <li>24 hour support</li>
    </ul>
  </div>
  <div class="pricing-table">
    <h2 class="pricing-table__header">1 YEAR CLASSES</h2>
    <h3 class="pricing-table__price">399.99$</h3>
    <a target="_blank" class="pricing-table__button" href="TxnTest.php">
      Join Now!
    </a>
    <ul class="pricing-table__list">
      <li>365 day access to all classes</li>
      <li>Live Doubts Solving</li>
      <li>24 hour support</li>
    </ul>
  </div>
</div>
<?php
include 'footer.php';
?>