<?php include 'header.php'; ?>
<section id="banner">

	<!-- Slider -->
	<div id="main-slider" class="flexslider">
		<ul class="slides">
			<li>
				<img src="assets2/img/slides/1.jpg" alt="" />
				<div class="flex-caption">
					<h3>Rumah Sakit Mitra Manakarra</h3> 
					<p>Anda bisa mempercayai kami.</p> 

				</div>
			</li>
			<li>
				<img src="assets2/img/slides/2.jpg" alt="" />
				<div class="flex-caption">
					<h3>Sistem Pengaduan dan Saran</h3> 
					<p>Segala yang terbaik untuk anda.</p> 

				</div>
			</li>
		</ul>
	</div>
	<!-- end slider --> 
</section>  
<!-- <section id="content"> 
	<div class="container">

		<section class="services">
			<div class="row">
				<div class="col-md-12">
					<div class="aligncenter"><h2 class="aligncenter">SPESIALIS KAMI</h2></div>
					<br/>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-4 info-blocks"> 
					<i class="icon-info-blocks material-icons">track_changes</i>
					<div class="info-blocks-in">
						<h3>Bedah</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt</p>
					</div>
				</div>
				<div class="col-sm-4 info-blocks">
					<i class="icon-info-blocks material-icons">settings_input_svideo</i>
					<div class="info-blocks-in">
						<h3>Umum</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt</p>
					</div>
				</div>
				<div class="col-sm-4 info-blocks">
					<i class="icon-info-blocks material-icons">queue_music</i>
					<div class="info-blocks-in">
						<h3>Jantung</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-4 info-blocks">
					<i class="icon-info-blocks material-icons">my_location</i>
					<div class="info-blocks-in">
						<h3>Dermatology</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt</p>
					</div>
				</div>
				<div class="col-sm-4 info-blocks">
					<i class="icon-info-blocks material-icons">shuffle</i>
					<div class="info-blocks-in">
						<h3>Kandungan</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt</p>
					</div>
				</div>
				<div class="col-sm-4 info-blocks">
					<i class="icon-info-blocks material-icons">tab_unselected</i>
					<div class="info-blocks-in">
						<h3>Anak</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt</p>
					</div>
				</div>
			</div>
		</section>
	</div>
</section> -->

<section class="dishes">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="aligncenter"><h2 class="aligncenter">ARTIKEL</h2></div>
				<br/>
			</div>
		</div>

		<div class="row service-v1 margin-bottom-40">

			<?php 
			$artikel = mysqli_query($koneksi,"select * from posting order by posting_id desc limit 3");
			while($a = mysqli_fetch_array($artikel)){
				?>
				<div class="col-md-4 md-margin-bottom-40">
					<div class="card small">
						<div class="card-image">
							<img class="img-responsive" src="images/posting/<?php echo $a['posting_sampul']; ?>" alt="">  
							<span class="card-title"><a href="single.php?id=<?php echo $a['posting_id']; ?>"><?php echo $a['posting_judul']; ?></a></span>
						</div>
						<div class="card-content">
							<p>
								<?php echo substr($a['posting_konten'], 0,200) ?>	
							</p>
						</div>
					</div>        
				</div>
				<?php 
			}
			?>
		</div>
	</div>
</section>
<!-- <section class="section-padding gray-bg">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section-title text-center">
					<h2>Tentang Kami</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 col-sm-6">
				<div class="about-text">
					<p>Kami adalah rumah sakit terbaik. dengan pelayanan dan tenaga medis paling lengkap. dan kami siap melayani sepenuh hati.</p>
					<p>Grids is a responsive Multipurpose Template. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur aliquet quam id dui posuere blandit. Donec sollicitudin molestie malesuada. Pellentesque in ipsum id orci porta dapibus. Vivamus suscipit tortor eget felis porttitor volutpat.</p>

					<ul class="withArrow">
						<li><span class="fa fa-angle-right"></span> Lorem ipsum dolor sit amet</li>
						<li><span class="fa fa-angle-right"></span> consectetur adipiscing elit</li>
						<li><span class="fa fa-angle-right"></span> Curabitur aliquet quam id dui</li>
						<li><span class="fa fa-angle-right"></span> Donec sollicitudin molestie malesuada.</li>
					</ul>
					<a href="tentang.php" class="btn btn-primary waves-effect waves-dark">Learn More</a>
				</div>
			</div>
			<div class="col-md-6 col-sm-6">
				<div class="about-image">
					<img src="assets2/img/about.jpg" alt="About Images">
				</div>
			</div>
		</div>
	</div>
</section>	 -->  

<?php include 'footer.php'; ?>