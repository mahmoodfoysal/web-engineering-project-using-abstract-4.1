<?php

class User extends DbhConn
{
	
	protected function getAllUser(){
		$sql = " SELECT * FROM sub4 where offer_type = 'Advertising of Plot'";
		$result = $this->connect()->query($sql);
		$numRows = $result->num_rows;
		if($numRows > 0){
			while ($row = $result->fetch_assoc()) {
				$data[] = $row;
			}
			return $data;
		}
	}
}