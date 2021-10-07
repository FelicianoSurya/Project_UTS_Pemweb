<footer class="text-white">
      <div class="atasfooter">
        <div class="logofooter">
          <img src="Assets\images\home\logo.png" alt="" />
          <p>Bijak Melihat Dunia</p>
        </div>
        <div class="navfooter">
          | <a href="index.php">Home</a> | <a href="AboutUs.php">About Us</a> |
        </div>
      </div>

      <div class="katafooter text-center">
        Ujian Tengah Semester - Pemograman Web <br />
        <?php foreach($kategories as $kategori){ ?> 
        <a onclick="redirectKategori(<?php echo $kategori->id ?>)"><?php echo $kategori->name ?> </a> |  <?php } ?> <br />
        <p>
          @Newspaper | +62-9847458399 | 021-23647364 | Jl. Kebangsaan II, Gedung
          News Paper
        </p>
      </div>
</footer>