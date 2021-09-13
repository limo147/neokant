<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Neokant-Moon</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
 * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

*:before, *:after {
  content: '';
  display: block;
  position: absolute;
}

body {
  height: 100vh;
  background: #eee;
  overflow: hidden;
}

.landscape {
  position: relative;
  height: 650px;
  background: #234;
  overflow: hidden;
}

.moon {
  position: absolute;
  left: 55%;
  bottom: 100px;
  width: 350px;
  height: 350px;
  margin: 0 0 0 -50px;
  border-radius: 50%;
  background: #ccc;
}

/* .moon:after {
  top: 100px;
  left: 100px;
  width: 50px;
  height: 50px;
  border-radius: 50%;
  background: rgba(0, 0, 0, 0.1);
  box-shadow: 120px 80px 0 rgba(0, 0, 0, 0.1), 100px -60px 0 -20px rgba(0, 0, 0, 0.1), -70px 40px 0 -20px rgba(0, 0, 0, 0.1), -20px -50px 0 -15px rgba(0, 0, 0, 0.1), -20px 120px 0 -15px rgba(0, 0, 0, 0.1), 50px 50px 0 -15px rgba(0, 0, 0, 0.1);
} */

/* .tree {
  position: absolute;
  left: 50%;
  bottom: 0;
  margin: 0 0 0 -320px;
} */

/* .tree div {
  position: relative;
  float: left;
  display: block;
  width: 6px;
  height: 8px;
  margin: 0 30px -5px 0;
  background: #eee;
} */
/* 
.tree div:before {
  bottom: 8px;
  border: solid transparent;
  content: " ";
  height: 0;
  width: 0;
  position: absolute;
  border-bottom-color: #eee;
  border-width: 12px;
  left: 50%;
  margin-left: -12px;
}

.tree div:after {
  bottom: 15px;
  border: solid transparent;
  content: " ";
  height: 0;
  width: 0;
  position: absolute;
  border-bottom-color: #eee;
  border-width: 10px;
  left: 50%;
  margin-left: -10px;
}

.tree div span:before {
  bottom: 22px;
  border: solid transparent;
  content: " ";
  height: 0;
  width: 0;
  position: absolute;
  border-bottom-color: #eee;
  border-width: 8px;
  left: 50%;
  margin-left: -8px;
}

.tree div span:after {
  bottom: 28px;
  border: solid transparent;
  content: " ";
  height: 0;
  width: 0;
  position: absolute;
  border-bottom-color: #eee;
  border-width: 6px;
  left: 50%;
  margin-left: -6px;
} */

.hills {
  position: absolute;
  left: 50%;
  bottom: 0;
}

.hills div {
  overflow: hidden;
  border-radius: 8%;
  transform: rotate(45deg);
}

.hills div:nth-child(1),
.hills div:nth-child(2),
.hills div:nth-child(3) {
  position: absolute;
  bottom: -350px;
  width: 500px;
  height: 500px;
  background: #293d52;
}

.hills div:nth-child(1) {
  left: -750px;
}

.hills div:nth-child(2) {
  left: -250px;
}

.hills div:nth-child(3) {
  left: 250px;
}

.hills div:nth-child(4),
.hills div:nth-child(5) {
  position: absolute;
  bottom: -400px;
  left: -600px;
  width: 500px;
  height: 500px;
  background: #30475f;
}

.hills div:nth-child(4) {
  left: -500px;
}

.hills div:nth-child(5) {
  left: 0;
}

canvas {
  position: absolute;
  top: 100px;
  left: 0;
  z-index: 1;
}
a{
    color: #000;
    text-decoration: none;
}
a:hover{
    color: darkblue;

}

/* Codepen Preview Mode */
@media only screen and (max-height: 450px) {
  .landscape {
    margin-top: -270px;
  }
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
    <div class='landscape'>
    <div class='moon'></div>
    <div class='hills'>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
    </div>
    <div class='tree'>
      <div>
        <span></span>
      </div>
      <div>
        <span></span>
      </div>
      <div>
        <span></span>
      </div>
      <div>
        <span></span>
      </div>
      <div>
        <span></span>
      </div>
      <div>
        <span></span>
      </div>
      <div>
        <span></span>
      </div>
      <div>
        <span></span>
      </div>
      <div>
        <span></span>
      </div>
      <div>
        <span></span>
      </div>
      <div>
        <span></span>
      </div>
      <div>
        <span></span>
      </div>
      <div>
        <span></span>
      </div>
      <div>
        <span></span>
      </div>
      <div>
        <span></span>
      </div>
      <div>
        <span></span>
      </div>
      <div>
        <span></span>
      </div>
      <div>
        <span></span>
      </div>
    </div>
  </div>
  <canvas id='snow'></canvas>
  <div style="padding-top:20px;display:flex;flex-direction:column;align-items:center;">
    <h2>
        <a href="/product">
            
            WELCOME HOME!
        </a>
    </h2>
    <p  style="padding-top:20px;">CHILLY COZY</p>
  </div>
  <div style="display:flex;flex-direction:column;align-items:center;">
    <p style="padding-top:20px;" >以零下-120度凍凝極致的月餅</p>
    <p style="padding-top:20px;" >每一口的品啜，都是雪藏的美</p>

  </div>



  <script>
      var w = window.innerWidth,
    h = window.innerHeight,
    canvas = document.getElementById('snow'),
    ctx = canvas.getContext('2d'),
    rate = 50,
    arc = 500,
    time,
    count,
    size = 2,
    speed = 10,
    lights = new Array,
    colors = ['#eee'];
canvas.setAttribute('width',w);
canvas.setAttribute('height',h/1.5);
function init() {
  time = 0;
  count = 0;
  for(var i = 0; i < arc; i++) {
    lights[i] = {
      x: Math.ceil(Math.random() * w),
      y: Math.ceil(Math.random() * h),
      toX: Math.random() * 5 + 1,
      toY: Math.random() * 5 + 1,
      c: colors[Math.floor(Math.random()*colors.length)],
      size: Math.random() * size
    }
  }
}
function bubble() {
  ctx.clearRect(0,0,w,h);
  for(var i = 0; i < arc; i++) {
    var li = lights[i];
    ctx.beginPath();
    ctx.arc(li.x,li.y,li.size,0,Math.PI*2,false);
    ctx.fillStyle = li.c;
    ctx.fill();
    li.x = li.x + li.toX * (time * 0.05);
    li.y = li.y + li.toY * (time * 0.05);
    if(li.x > w) { li.x = 0; }
    if(li.y > h) { li.y = 0; }
    if(li.x < 0) { li.x = w; }
    if(li.y < 0) { li.y = h; }
  }
  if(time < speed) {
    time++;
  }
  timerID = setTimeout(bubble,1000/rate);
}
init();
bubble();
  </script>
    </body>
</html>
