<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Neokant-Moon-product</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
    
@import url('https://fonts.googleapis.com/css?family=Muli');

/*reset*/
* {
  margin: 0;
  padding: 0;
}

/*product info */



i.fa.fa-search {
  margin-left: 90px;
}

.product-name i {
  color: #ffffff;
  transition: 0.3s all ease;
  margin: 0px 12px;
}

.product-name i:hover {
  color: #ff6d39;
  cursor: pointer;
}

h3 {
  color: #ffffff;
  font-family: "muli";
  margin-top: 84px;
  font-size: 20px;
  font-weight: 500;
}

h2 {
  color: #ffffff;
  font-family: "muli";
  margin-top: 10px;
  font-weight: 800;
  font-size: 29px;
}

h4 {
  display: inline-block;
  color: #ffffff;
  font-family: "muli";
  margin-top: 10px;
  font-weight: bold;
  font-size: 20px;
}

h4.dis {
  display: inline-block;
  color: #ffffff;
  font-family: "muli";
  font-weight: 400;
  font-size: 17px;
  margin-left: 30px;
  text-decoration: line-through #ea3201;
}

h4.dis span {
  text-decoration: line-through #ea3201;
}

.discount {
  display: inline-block;
}

ul {
  list-style-type: none;
}

li {
  display: inline-block;
  margin-right: 25px;
}

ul li {
  color: #ffffff;
  font-family: "muli";
  margin-top: 20px;
  font-weight: 500;
  font-size: 11px;
}

.bg {
  width: 15px;
  height: 15px;
  text-align: center;
  padding: 2px;
  margin-right: 20px;
  transition: 0.3s all ease;
  border-radius: 50%;
}

.bg:hover {
  background-color: #ff6d39;
  border-radius: 50%;
  width: 15px;
  height: 15px;
  cursor: pointer;
}

.yellow {
  content: "";
  width: 13px;
  height: 13px;
  background-color: #fec60f;
  border-radius: 50%;
  border: 2px solid rgba(0, 0, 0, 0);
  transition: 0.3s all ease;
}

.black {
  content: "";
  width: 13px;
  height: 13px;
  background-color: teal;
  border-radius: 50%;
  border: 2px solid rgba(0, 0, 0, 0);
  transition: 0.3s all ease;
}

.blue {
  content: "";
  width: 13px;
  height: 13px;
  background-color: #02a2ca;
  border-radius: 50%;
  border: 2px solid rgba(0, 0, 0, 0);
  transition: 0.3s all ease;
}

.yellow:hover,
.black:hover,
.blue:hover {
  border: 2px solid #f76b39;
  width: 13px;
  height: 13px;
  border-radius: 50%;
  cursor: pointer;
}

.foot {
  color: #ffffff;
  font-family: "muli";
  margin-top: 20px;
  margin-right: 50px;
  font-weight: 500;
  font-size: 11px;
  float: left;
  transition: 0.3s all ease;
}

.foot i:nth-child(1) {
  margin-left: 0;
  margin-right: 15px;
}

.foot:hover {
  color: #f76b39;
  cursor: pointer;
}

/*shoe slider indicator*/

.left i {
  color: #ffd5c6;
  margin-top: 260px;
  transition: 0.3s all ease;
}

.fa-long-arrow-left {
  margin-left: -275px;
}

.fa-long-arrow-right {
  margin-left: 15px;
}

.left i:hover {
  cursor: pointer;
  color: #2a2f40;
}

/*main card*/

.card {
  display: flex;
  align-items: center;
  background: #252831 url(https://images.pexels.com/photos/300857/pexels-photo-300857.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=1000)
    no-repeat;
  height: 600px;
  width: 800px;
  margin: 0 auto;
  box-shadow: 0px 15px 50px 10px rgba(0, 0, 0, 0.4);
  margin-top: 2%;
}

.left {
  content: "";
  height: 395px;
  width: 330px;
  display: flex;
  align-items: center;
  background-color:  white;
  margin-left: 93px;
  border-radius: 0% 50% 50% 0%;
  position: absolute;
  z-index: 5;
}

.left img {
  margin-left: -88px;
  margin-top: 60px;
}

.right {
  content: "";
  height: 395px;
  width: 550px;
  background-color: #2a2f40;
  z-index: 3;
  margin-left: 200px;
}

.product-info {
  position: absolute;
  margin-left: 245px;
  height: 394px;
  width: 305px;
  z-index: 10;
}

    a{
    color: #000;
    text-decoration: none;
}
a:hover{
    color: darkblue;

}
body {
  height: 100vh;
  background: #eee;
  overflow: hidden;
}
    </style>
    <meta name="google-site-verification" content="__1l5ceJQHoVz_6wDXmoO8EuLWpMWOGKrTv0Zsh6FRU" />
  </head>
  <body>

    <div style="padding:20px">
    <h1>
                <a href="/">Neokantmoon</a>
            </h1>
      <p >紐康特之月- 雪藏月餅的精品</p>
    </div>


    
  <div class="card">
    <div class="left">
      <img src="https://images.pexels.com/photos/5754268/pexels-photo-5754268.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=300" alt="shoe" style="border-radius: 50%;">
      <i class="fa fa-long-arrow-left"></i>
      <i class="fa fa-long-arrow-right"></i>
    </div>
    <div class="right">
      <div class="product-info">
        <div class="product-name">
          <i class="fa fa-search"></i>
          <i class="fa fa-user"></i>
          <i class="fa fa-shopping-cart"></i>
        </div>
        <div class="details">
          <h3>Winter Collection</h3>
          <h2>Men Black Sneakers</h2>
          <h4><span class="fa fa-dollar"></span>150</h4>
        </div>
        <ul>
          <li>數量</li>
          <li class="bg">100</li>
          <li class="bg">200</li>
          <li class="bg">300</li>
          <li class="bg">400</li>
          <li class="bg">500</li>
        </ul>
        <ul>
          <li>規格</li>
          <li class="yellow"></li>
          <li class="black"></li>
          <li class="blue"></li>
        </ul>
        <button style="background-color:yellow;color:black;padding:10px 50px;margin-top:20px;">

          Buy Now
          <!-- <span class="foot"><i class="fa fa-shopping-cart"></i>Add TO Cart</span> -->

        </button>
      </div>
    </div>
  </div>




    <script>

    </script>
  </body>
</html>
