<!DOCTYPE html>
<html>
<head>
    <title>Medical Receptionist</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer">   
</head>

<body>
	<header class="navbar-container">
		<nav class="nav-list">
			<ul>
				<li> <a href="index.php" class="aktif">Beranda</a></li>
				<li> <a href="pasien.php">Data Pasien</a></li>
				<li> <a href="tambah_pasien.php">Register Pasien</a> </li>
			</ul>
		</nav>
	</header>
	<!-- End of Navigation Bar -->

	<div id="kiri">
		<center><h3>
			<script type='text/javascript'>
					
				var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
    			var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];
    			var date = new Date();
    			var day = date.getDate();
    			var month = date.getMonth();
				var thisDay = date.getDay(),
        			thisDay = myDays[thisDay];
    			var yy = date.getYear();
    			var year = (yy < 1000) ? yy + 1900 : yy;
				document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);
    			
    			</script></h3>
				<h1>
				<div id="clock"></div>
				<script type="text/javascript">
					
			function showTime() {
    			var a_p = "";
    			var today = new Date();
				var curr_hour = today.getHours();
    			var curr_minute = today.getMinutes();
    			var curr_second = today.getSeconds();
    				if (curr_hour < 12) {
    				    a_p = "AM";
    				} else {
    				    a_p = "PM";
    				}
    				if (curr_hour == 0) {
    				    curr_hour = 12;
    				}
    				if (curr_hour > 12) {
    				    curr_hour = curr_hour - 12;
    				}
    				curr_hour = checkTime(curr_hour);
    				curr_minute = checkTime(curr_minute);
    				curr_second = checkTime(curr_second);
 				document.getElementById('clock').innerHTML=curr_hour + ":" + curr_minute + ":" + curr_second + " " + a_p;
    				}
				function checkTime(i) {
   	 				if (i < 10) {
    				    i = "0" + i;
    				}
    				return i;
					}
				setInterval(showTime, 500);
				
				</script></h1>
					</center>
				</div>
    
           <section class="main">
            <h1><center>MEDICAL RECEPTIONIST </center></h1>
            <h3><center>Data pasien | Registrasi pasien | Edit data pasien | Hapus data pasien</center></h3>
            </section>
    </body>
</html>

