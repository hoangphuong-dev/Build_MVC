<?php 
class App {
	// Xử lý thanh địa chỉ
	// http://localhost/web-MVC/News/post/4
	protected $controller="Home"; 
	protected $action="Sayhi";
	protected $param=[];


	function __construct(){
		$arr = $this->UrlProcess();
		// print_r($arr);
		


		// Xử lý controller 
		if(file_exists("./mvc/controllers/".$arr[0].".php")){
			// kiểm tra trong thư mục controller xem có file đó trong controller không 
			$this->controller = $arr[0];
			unset($arr[0]);
		}
			require_once "./mvc/controllers/".$this->controller.".php"; // nếu không thay đổi giá trị (mặc định gọi về home)

			// xử lí action 
			if(isset($arr[1])) {
				if(method_exists($this->controller, $arr[1])) {
					$this->action = $arr[1];
				}
				unset($arr[1]);
				
			}

			// Xử lý prama 
			$this->param = $arr?array_values($arr):[];

			// echo $this->controller ."<br>";
			// echo $this->action ."<br>";
			// print_r($this->param);
			call_user_func_array([$this->controller, $this->action], $this->param);
		}

		function UrlProcess() {
		// Home/delete/7 => Array ( [0] => Home [1] => delete [2] => 7 )
			if(isset($_GET["url"])) {
				return explode("/", filter_var(trim($_GET["url"], "")));
			}
		}
	}