<?php

/**
 * 考勤组
 * @author auto create
 */
class Group
{
	
	/** 
	 * 扩展字段，JSON格式
	 **/
	public $ext;
	
	/** 
	 * 考勤组id
	 **/
	public $group_key;
	
	/** 
	 * 打卡范围，单位：米
	 **/
	public $location_offset;
	
	/** 
	 * 考勤组名称
	 **/
	public $name;	
}
?>