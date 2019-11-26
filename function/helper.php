<?php
	// membuat base url menerapkan design pattern singleton
	define("BASE_URL", "http://localhost/notonlycode/");

	// fungsi convert ke rupiah
	function rupiah($nilai = 0) {
		$string = "Rp," . number_format($nilai);
		return $string;
	}