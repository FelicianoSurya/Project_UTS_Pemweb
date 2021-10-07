<footer class="text-white">
      <div class="atasfooter">
        <div class="logofooter">
          <img src="Assets\images\home\logo.png" alt="" />
          <p>Bijak Melihat Dunia</p>
        </div>
        <div class="navfooter">
          <p>| <a href="index.php">HOME</a> | <a href="AboutUs.php">ABOUT US</a> |</p>
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
</footer>