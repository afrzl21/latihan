<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>PLAYSTATION</title>
  </head>

<style>
.wrap{
	width: 100%;
}

img{
		position: relative;
		z-index: 1;
		top: 0px;
	}
	.header p{
		position: absolute;
    font-family:cursive;
		top: 80px;
    left: 23%;
		z-index: 1;
		color: #fff;
	}

/*bagian header*/
.wrap .header{
	padding: 0px;
}
/*akhir header*/
 

 
.clear{
	clear: both;
}
 
.badan{
	width: 100%;
}
 
.wrap .badan .content{
  margin: 10px 0px 0px 0px;
  background-color: #175873;
	float: left;
	height: 100%;
	width: 100%;	
}
 
.footer p{
	width: 100%;
	padding: 10px;
  background-color: #175873;
  color: #fff;
  font-family:cursive;
	justify-content: center;
  text-align: center;
  font-size: 1.5rem;
}


a{
      color: #262626;
      font-size: 14px;
      font-weight: bold;
      text-decoration: none;
      text-align: center;
      display: block
    }

a:hover{
      color: #00ffff
    }

/* menu */
menu {
    margin-top: 100px;
    margin-left: 150px;
    margin-right: 150px;
    padding-top: 0;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: black;
    background-image: linear-gradient(to right, #ffaebc, #6af2f0);
    -webkit-text-size-adjust: 100%;

}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #175873;
}

li {
    float: left;
}

li a,
.dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover,
.dropdown:hover .dropbtn {
    background-color: #c85250;
    transition: all 0.5s ease;
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 10px 10px;
    text-decoration: none;
    display: block;
    text-align: left;
}


.dropdown-content a:hover {
    background-color: #f85f5f;
}

.dropdown:hover .dropdown-content {
    display: block;
}

h3 {
    font-size: 30px;
}



</style>

<body>
	<div class="wrap">
		<div class="header">
      <img src="bgx.jpg" style="width: 100%; height:400px;" alt="">
      <div class="d-flex">
      <p style="font-size: 700%;">MARKAS GAME</p>
		  </div>
    </div>
		<div class="menu">
      <ul>
        <li><a href="/index">BERANDA</a></li>
        <li><a href="/playstation">PLAYSTATION</a></li>
        <li><a href="/tentangkami">TENTANG KAMI</a></li>
        <li><a href="/penyewaan">PENYEWAAN</a></li>
        <li style="float: right;"><a href="logout">LOG OUT</a></li>
      </ul>
      <div class="mt-4">
      <center>
        <h1><b> PLAYSTATION </b></h1>
      </center>
      </div>
    <div class="row">
        <div class="card m-3 text-dark bg-light mb-3" style="width: 750px;">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="game1.jpg" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">PLAYSTATION 4</h5>
                <p class="card-text">
                  ID&emsp;&ensp;&ensp;&ensp;&ensp;&ensp;: P123 <br>
                  Pemilik&ensp;&ensp; : Markas Game <br>
                  Keluaran&ensp;: 2021 <br>
                  GAMES&ensp;&ensp; : GTA, PES 2021, Naruto Shippuden
                </p>
                <form id="frm1">
                  <br>
                  <input type="text" id = "ps1-hr" value="" placeholder="Enter data" requires>&ensp;Jam<br><br>
                  <input type="text" id = "ps1-min" value="" placeholder="Enter data" required>&ensp;Menit<br><br>
                </form> 
              
                <button onclick="startTimer(1)">Start Timer</button>
              
                <div id="progress-bar">
                  <div id="progress-bar-ps1" class="progress-bar-inner"></div>
                </div>
                   
                      <!--button onclick="timer()">START</button-->
                <h2 id="demo-ps1"></h2>
              </div>
            </div>
          </div>
          </div>
        <div class="card m-3 text-dark bg-light mb-3" style="width: 750px;">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="game1.jpg" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">PLAYSTATION 4</h5>
                <p class="card-text">
                  ID&emsp;&ensp;&ensp;&ensp;&ensp;&ensp;: P124 <br>
                  Pemilik&ensp;&ensp; : Markas Game <br>
                  Keluaran&ensp;: 2021 <br>
                  GAMES&ensp;&ensp; : GTA, PES 2021, Naruto Shippuden
                </p>
                <form id="frm2">
                  <br>
                  <input type="text" id = "ps2-hr" value="" placeholder="Enter data" requires>&ensp;Jam<br><br>
                  <input type="text" id = "ps2-min" value="" placeholder="Enter data" required>&ensp;Menit<br><br>
                </form> 
              
                <button onclick="startTimer(2)">Start Timer</button>
              
                <div id="progress-bar">
                  <div id="progress-bar-ps2" class="progress-bar-inner"></div>
                </div>
                   
                      <!--button onclick="timer()">START</button-->
                <h2 id="demo-ps2"></h2>
              </div>
            </div>
          </div>
          </div>
        <div class="card m-3 text-dark bg-light mb-3" style="width: 750px;">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="game1.jpg" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">PLAYSTATION 4</h5>
                <p class="card-text">
                  ID&emsp;&ensp;&ensp;&ensp;&ensp;&ensp;: P125 <br>
                  Pemilik&ensp;&ensp; : Markas Game <br>
                  Keluaran&ensp;: 2022 <br>
                  GAMES&ensp;&ensp; : GTA, PES 2021, Naruto Shippuden
                </p>
                <form id="frm3">
                  <br>
                  <input type="text" id = "ps3-hr" value="" placeholder="Enter data" requires>&ensp;Jam<br><br>
                  <input type="text" id = "ps3-min" value="" placeholder="Enter data" required>&ensp;Menit<br><br>
                </form> 
              
                <button onclick="startTimer(3)">Start Timer</button>
              
                <div id="progress-bar">
                  <div id="progress-bar-ps3" class="progress-bar-inner"></div>
                </div>
                   
                      <!--button onclick="timer()">START</button-->
                <h2 id="demo-ps3"></h2>
              </div>
            </div>
          </div>
          </div>
        <div class="card m-3 text-dark bg-light mb-3" style="width: 750px;">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="game1.jpg" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">PLAYSTATION 4</h5>
                <p class="card-text">
                  ID&emsp;&ensp;&ensp;&ensp;&ensp;&ensp;: P126 <br>
                  Pemilik&ensp;&ensp; : Markas Game <br>
                  Keluaran&ensp;: 2023 <br>
                  GAMES&ensp;&ensp; : GTA, PES 2021, Naruto Shippuden
                </p>
                <form id="frm4">
                  <br>
                  <input type="text" id = "ps4-hr" value="" placeholder="Enter data" requires>&ensp;Jam<br><br>
                  <input type="text" id = "ps4-min" value="" placeholder="Enter data" required>&ensp;Menit<br><br>
                </form> 
              
                <button onclick="startTimer(4)">Start Timer</button>
              
                <div id="progress-bar">
                  <div id="progress-bar-ps4" class="progress-bar-inner"></div>
                </div>
                   
                      <!--button onclick="timer()">START</button-->
                <h2 id="demo-ps4"></h2>
              </div>
            </div>
          </div>
          </div>
        </div>
    </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script>
    var timeouts = []; // Untuk menyimpan semua timeout yang aktif
    
    function startTimer(psId) {
      var x = document.getElementById("frm" + psId);
      var hr = x.elements["ps" + psId + "-hr"].value;
      var min = x.elements["ps" + psId + "-min"].value;
    
      var t = hr * 3600 + min * 60;
      var per = t;
    
      // Hapus timeout sebelumnya jika ada
      if (timeouts[psId]) {
        clearTimeout(timeouts[psId]);
      }
    
      timer(t, per, psId);
    }
    
    function timer(t, per, psId) {
      var temp = t;
      t = t - 1;
      var h = Math.floor(temp / 3600);
      var m = Math.floor((temp % 3600) / 60);
      var s = Math.floor(temp - h * 3600 - m * 60);
      m = checkTime(m);
      s = checkTime(s);
      document.getElementById("demo-ps" + psId).innerHTML = h + "hr:" + m + "min:" + s + "sec";
      document.getElementById("progress-bar-ps" + psId).style.width = (temp * 100) / per + "%";
    
      // Tunggu 1 detik
      timeouts[psId] = setTimeout(function() {
        if (temp > 0) {
          timer(t, per, psId);
        } else {
          document.getElementById("demo-ps" + psId).innerHTML = "Time's up!";
          document.getElementById("progress-bar-ps" + psId).style.width = "0%";
        }
      }, 1000);
    }
    
    function checkTime(i) {
      if (i < 10) {
        i = "0" + i;
      }
      return i;
    }
    </script>
</body>
</html>