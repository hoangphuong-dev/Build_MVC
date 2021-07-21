<?php 
class Home {
	use Controller;
	
	function Sayhi() {
		$teo = $this->model("SinhVienModel");
		echo $teo->getSV();
	}

	function Show($a, $b) {
		$teo = $this->model("SinhVienModel");
		$tong =  $teo->Tong($a, $b);
		$this->view("aodep", [
			"Page"=>"news",
			"Number"=>$tong,
			"mau"=>"red",
			"SoThich"=>["A", "B", "C"],
			"SV"=> $teo->SinhVien()

	]);
	}
}