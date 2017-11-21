<?php  if ( ! defined("BASEPATH")) exit("No direct script access allowed");
	function generate_sidemenu()
	{
		return '<li>
		<a href="'.site_url('home').'"><i class="fa fa-dashboard"></i> Dashboard</a>
	</li>	
	<li>
			<a href="#"><i class="fa fa-table fa-fw"></i>Table<span class="fa arrow"></span></a>
			<ul class="nav nav-second-level">
				<li>
					<a href="'.site_url('member/data_member').'">Member</a>
				</li>
				<li>
					<a href="'.site_url('prawedding/index').'">Prawedding</a>
				</li>
				<li>
					<a href="'.site_url('group/index').'">Group</a>
				</li>
				<li>
					<a href="'.site_url('wedding/index').'">Wedding</a>
				</li>
				<li>
					<a href="'.site_url('pesan').'">Pesan Prawedding</a>
				</li>
				<li>
					<a href="'.site_url('pesanwedding').'">Pesan Wedding</a>
				</li>
				<li>
					<a href="'.site_url('pesangroup').'">Pesan Group</a>
				</li>
				<li>
					<a href="'.site_url('konfirmasi').'">Konfirmasi</a>
				</li>
			</ul>
		</li>';
	}

