<?php

/*
	* Lớp database
	* CreatedBy: dbhuan 28/08/2021
*/
class DB
{
	// các biến thông tin kết nối
	private $__hostname = "localhost",
		$__username = "root",
		$__password = "admin",
		$__dbname = "newspage";

	// biến lưu kết nối
	public $conn = null;

	// Hàm kết nối
	public function connect()
	{
		if (!$this->conn) {
			$this->conn = mysqli_connect(
				$this->__hostname,
				$this->__username,
				$this->__password,
				$this->__dbname
			);
		}
	}

	/**
	 * Hàm ngắt kết nối
	 * @author CreatedBy: dbhuan (28/08/2021)
	 */
	public function close()
	{
		if ($this->conn) {
			mysqli_close($this->conn);
		}
	}

	/**
	 * Hàm truy vấn
	 * @author CreatedBy: dbhuan (28/08/2021)
	 */
	public function query($sql = null)
	{
		if ($this->conn) {
			mysqli_query($this->conn, $sql);
		}
	}

	/**
	 * Hàm đếm số hàng
	 * @author CreatedBy: dbhuan (28/08/2021)
	 */
	public function num_rows($sql = null)
	{
		if ($this->conn) {

			$query = mysqli_query($this->conn, $sql);
			if ($query) {
				$rows = mysqli_num_rows($query);
				return $rows;
			}
		}
	}

	/**
	 * Hàm lấy dữ liệu
	 * @author CreatedBy: dbhuan (28/08/2021)
	 */
	public function fetch_assoc($sql = null, $type)
	{
		if ($this->conn) {
			$query = mysqli_query($this->conn, $sql);
			if ($query) {
				if ($type == 0) {
					// lấy nhiều dữ liệu gắn vào mảng
					while ($row = mysqli_fetch_assoc($query)) {
						$data[] = $row;
					}
					return $data;
				} else if ($type == 1) {
					// lấy một hàng dữ liệu gắn vào biến
					$data = mysqli_fetch_array($query);
					return $data;
				}
			}
		}
	}

	/**
	 * Hàm lấy id cao nhất
	 * @author CreatedBy: dbhuan (28/08/2021)
	 */
	public function insert_id()
	{
		if ($this->conn) {
			$count = mysqli_insert_id($this->conn);
			if ($count == "0") {
				$count = "1";
			}
			return $count;
		}
	}

	/**
	 * Hàm set charset cho db
	 * @author CreatedBy: dbhuan (28/08/2021)
	 */
	public function set_char($uni)
	{
		if ($this->conn) {
			mysqli_set_charset($this->conn, $uni);
		}
	}
}
