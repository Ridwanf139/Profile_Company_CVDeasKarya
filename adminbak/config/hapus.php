<?php
	error_reporting(E_ALL ^ (E_ALL));
	include "koneksi.php";
	$id_jasa    	= $_GET['id_jasa'];
	$id_katalog    	= $_GET['id_katalog'];
	$id_testi    	= $_GET['id_testi'];
	$id_admin    	= $_GET['id_admin'];
	$id_volunteer	= $_GET['id_volunteer'];

	if (!empty($id_jasa)){
		//
		$query	= "SELECT * FROM tbl_jasa WHERE id_jasa='".$id_jasa."'"; 
        $sql	= mysqli_query($connection, $query); 
        $data   = mysqli_fetch_array($sql);
		//
		if (is_file("../../img/jasa/".$data['thumbnail'])) 
  		    unlink("../../img/jasa/".$data['thumbnail']); 
		//
		$query 	= "DELETE FROM tbl_jasa WHERE id_jasa='".$id_jasa."'";
		$sql 	= mysqli_query($connection, $query); }

	if (!empty($id_admin)){
		//
		$query 	= "DELETE FROM tbl_admin WHERE id_admin='".$id_admin."'";
		$sql 	= mysqli_query($connection, $query); }

	if (!empty($id_volunteer)){
		//
		$query 	= "DELETE FROM tbl_volunteer WHERE id_volunteer='".$id_volunteer."'";
		$sql 	= mysqli_query($connection, $query); }

	if (!empty($id_katalog)){
		//
		$query	= "SELECT * FROM tbl_katalog WHERE id_katalog='".$id_katalog."'"; 
        $sql	= mysqli_query($connection, $query); 
        $data   = mysqli_fetch_array($sql);
		//
		if (is_file("../../img/katalog/".$data['thumbnail'])) 
  		    unlink("../../img/katalog/".$data['thumbnail']); 
		//
		$query 	= "DELETE FROM tbl_katalog WHERE id_katalog='".$id_katalog."'";
		$sql 	= mysqli_query($connection, $query); }

	if (!empty($id_testi)){
		//
		$query 	= "DELETE FROM tbl_testimoni WHERE id_testi='".$id_testi."'";
		$sql 	= mysqli_query($connection, $query); }

	if($sql){ 
		  	echo "<script>window.history.back();</script>"; 
	}
	else {
		  	echo "<script>alert('Gagal Menghapus Data');
		  	      window.history.back();</script>";
	}
?>
