<footer class="text-white">
  <div class="container pt-4">
    <div class="row justify-content-between">
      <div class="col-lg-4 col-12 text-center">
        <img src="Assets\images\home\logo.png" alt="" width="70%"/>
        <p>Bijak Melihat Dunia</p>
      </div>
      <div class="footer-text-nav col-lg-4 col-12 d-flex justify-content-center align-items-center ">
        <p>| <a class="text-decoration-none"href="index.php">HOME</a> | <a class="text-decoration-none" href="AboutUs.php">ABOUT US</a> |</p>
      </div>
    </div>

    <div class="katafooter text-center">
      <h6>Ujian Tengah Semester - Pemograman Web</h6>
      <?php foreach($kategories as $kategori){ ?> 
      <a onclick="redirectKategori(<?php echo $kategori->id ?>)"><?php echo $kategori->name ?> </a> |  <?php } ?> <br />
      <p>
        @Newspaper  |  +62-9847458399  |  021-23647364  |  Jl. Kebangsaan II, Gedung News Paper
      </p>
    </div>
  </div>
</footer>