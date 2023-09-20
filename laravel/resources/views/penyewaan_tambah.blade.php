<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>PENYEWAAN</title>
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
	</div>
    <div class="mt-3"></div>
    <div class = "mt-5 col-8 m-auto">
      <h2>FORMULIR PENYEWAAN</h2>
        <form action="/penyewaan_tambah" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nama_penyewa">Nama Penyewa</label>
                <input type="text" class = "form-control" name = "nama_penyewa" id = "nama_penyewa" required>
            </div>
            <div class="mb-3">
                <label for="no_penyewa">No. KTP/KTM</label>
                <input type="text" class = "form-control" name = "no_penyewa" id = "no_penyewa" required>
            </div>
            <div class="mb-3">
                <label for="alamat">Alamat</label>
                <input type="text" class = "form-control" name = "alamat" id = "alamat" required>
            </div>
            <div class="mb-3">
                <label for="tanggal_penyewa">Tanggal Penyewaan</label>
                <input type="date" class = "form-control" name = "tanggal_penyewa" id = "tanggal_penyewa" required>
            </div>
            <div class="mb-3">
                <label for="tanggal_pengembalian">Tanggal Pengembalian</label>
                <input type="date" class = "form-control" name = "tanggal_pengembalian" id = "tanggal_pengembalian" required>
            </div>
            <div class="mb-3">
                <button class="btn btn-success" type = "submit" class = "form-control">Tambah</button>
                <a href="/index" class="btn btn-primary">Cancel</a>
            </div>

        </form>
    </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>

