<?php
  class bus{
	  public $link=' ';
	  function __construct($lat,$lon){
		  $this->connect();
		  $this->storeInDB($lat,$lon);
	  }
	  function connect(){
		  $this->link=mysqli_connect('sql112.epizy.com','epiz_28627986','applepro123') or die('cannot connect to the DB');
		  mysqli_select_db($this->link,'epiz_28627986_Vehicle') or die('Cannot select DB');
	  }
	  function storeInDB($lat,$lon)
	  {
		  $query="update busone set lat='".$lat."',lon='".$lon."' where id='1'";
		  $result=mysqli_query($this->link,$query) or die('errant query: '.$query);
  }
  }
  if($_GET['lat']!='' and $_GET['lon'] !=''){
	  $bus=new bus($_GET['lat'],$_GET['lon']);
  }
 ?>
  