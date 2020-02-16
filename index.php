<!DOCTYPE html>
<html lang="en">
<head>
  <title>Firhan Profile</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  
  <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Pacifico:300,400,600,700&lang=en" />
  <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&lang=en" />
  <link rel="stylesheet" type="text/css" href="assets/css/main.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</head>

<body>
	<div class="container">

		<h2 class="text-center pb-5"> My Portofolio</h2>
		<div class="row pb-3">
			<div class="col text-center">
				<img src="assets/img/foto.png" class="rounded-circle" alt="Cinque Terre" width="200" height="150">
			</div>
		</div>
		<div class="row">
			<div class="col text-center">
				<?php 
				function hitung_umur($tanggal_lahir) {
				    list($year,$month,$day) = explode("-",$tanggal_lahir);
				    $year_diff  = date("Y") - $year;
				    $month_diff = date("m") - $month;
				    $day_diff   = date("d") - $day;
				    if ($month_diff < 0) $year_diff--;
				        elseif (($month_diff==0) && ($day_diff < 0)) $year_diff--;
				    return $year_diff;
				}
				?>
				<h4>Firhan Abigael, <?php echo hitung_umur("1997-03-01"); ?> Tahun</h4>
				<h6>Junior Programmer - Warehouse Operation</h6>
				<p>Indonesian, Jakarta barrat</p>
			</div>
		</div>
		<hr class="mr-4">
		<div class="row">
		<h4 class="mb-0">About Me</h4>
			<div class="text-left">
				<p>perkenalkan nama panggilan saya adalah firhan, saya mulai menyukai bahasa pemrograman waktu ketika saya duduk dibangku sekolah(SMK) dan saya mulai menyukai Warehouse(Pergudangan) ketika saya mendapatkan pengalaman bekerja disalah satu E-Commerce indonesia yaitu blibli.com</p>
			</div>
		</div>
		<hr class="mr-4">
		<div class="row">
        <h4 class="mb-0">Experience</h4>
        <section class="resume-section d-flex justify-content-center">
        <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
          <div class="resume-content">
            <h3 class="mb-0">Warehouse Operation</h3>
            <div class="subheading mb-2">Fulfillment Coordinator</div>
            <p>Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution. User generated content in real-time will have multiple touchpoints for offshoring.</p>
          </div>

          <div class="resume-date text-md-right">
            <span class="text-primary">Nov 2015 - Present</span>
          </div>
      </div>
          </section>
        </div>

        <hr class="mr-4">
        <div class="row">
        <h4 class="mb-0">Education</h4>
        <section class="resume-section d-flex align-items-center">
      	<div class="w-100">
        

        <div class="resume-item d-flex flex-column flex-md-row justify-content-between">
          <div class="resume-content">
            <h5 class="mb-0">Universital Pamulang</h5>
            <div class="subheading mb-3">Teknik Informatika</div>
          </div>
          <div class="resume-date text-md-right">
            <span class="text-primary">2016 - Present</span>
          </div>
        </div>

        <div class="resume-item d-flex flex-column flex-md-row justify-content-between">
          <div class="resume-content">
            <h5 class="mb-0">SMK Bangun Nusantara</h5>
            <div class="subheading mb-3">Teknik Komputer Jaringan</div>
          </div>
          <div class="resume-date text-md-right">
            <span class="text-primary">2012 - 2015</span>
          </div>
        </div>

      </div>
    </section>
        </div>


	</div>
</body>

</html>
