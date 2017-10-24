<?php
	class data{
	public $type;
	public $kamar;
	public $dp;
	public $cicilan;
	public $lokasi;

		public function __construct($type,$kamar,$dp,$cicilan,$lokasi)
	{
	$this -> type = $type;
	$this -> kamar = $kamar;
	$this -> dp = $dp;
	$this -> cicilan = $cicilan;
	$this -> lokasi = $lokasi;	
	}
	public function get_type()
	{
		return $this -> type;
	}
	public function get_kamar()
	{
		return $this -> kamar;
	}
	public function get_dp()
	{
		return $this -> dp;
	}
	public function get_cicilan()
	{
		return $this -> cicilan;
	}
	public function get_lokasi()
	{
		return $this -> lokasi;
	}
	}
?>