

<?php
	include_once("function/koneksi.php");
	include_once("function/helper.php");
?>
<div id="bg-page-profile">
	<div id="menu-profile">
		<ul>
			<li><a href="<?php echo BASE_URL."index-materialize.php?page=my_profile&module=kategori&action=list";?>">Kategori</a></li>
			<li><a href="<?php echo BASE_URL."index-materialize.php?page=my_profile&module=barang&action=list";?>">Barang</a></li>
			<li><a href="<?php echo BASE_URL."index-materialize.php?page=my_profile&module=kota&action=list";?>">Kota</a></li>
			<li><a href="<?php echo BASE_URL."index-materialize.php?page=my_profile&module=user&action=list";?>">User</a></li>
			<li><a href="<?php echo BASE_URL."index-materialize.php?page=my_profile&module=banner&action=list";?>">Banner</a></li>
			<li><a href="<?php echo BASE_URL."index-materialize.php?page=my_profile&module=pesanan&action=list";?>">Pesanan</a></li>
		</ul>
	</div>
	
</div>
<div id="profile-content">
	<p>Belum ada data</p>
</div>

