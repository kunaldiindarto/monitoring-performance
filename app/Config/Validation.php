<?php

namespace Config;

use CodeIgniter\Validation\CreditCardRules;
use CodeIgniter\Validation\FileRules;
use CodeIgniter\Validation\FormatRules;
use CodeIgniter\Validation\Rules;
use App\Validation\CustomRules;

class Validation
{
	//--------------------------------------------------------------------
	// Setup
	//--------------------------------------------------------------------

	/**
	 * Stores the classes that contain the
	 * rules that are available.
	 *
	 * @var string[]
	 */
	public $ruleSets = [
		Rules::class,
		FormatRules::class,
		FileRules::class,
		CreditCardRules::class,
		\Myth\Auth\Authentication\Passwords\ValidationRules::class,
		CustomRules::class,
	];

	/**
	 * Specifies the views that are used to display the
	 * errors.
	 *
	 * @var array<string, string>
	 */
	public $templates = [
		'list'   => 'CodeIgniter\Validation\Views\list',
		'single' => 'CodeIgniter\Validation\Views\single',
	];

	//--------------------------------------------------------------------
	// Rules

	public $cek = [
		'jam'		=> 'required',
		'menit'		=> 'required',
		'detik'		=> 'required',
		'deskripsi'		=> 'required',
	];

	public $cekLifetime = [
		'hari'		=> 'required',
		'jam'		=> 'required',
		'menit'		=> 'required',
		'detik'		=> 'required',
	];

	public $cekStatus = [
		'status'	=> 'required|status1'
	];

	public $cekStatus_errors = [
		'status'	=> [
			'required' 	=> 'status mesin 1 wajib diisi.',
			'status1'	=> 'status mesin 1 yang di input salah'
		],
	];

	public $cekStatus2 = [
		'status'	=> 'required|status2'
	];

	public $cekStatus2_errors = [
		'status'	=> [
			'required' 	=> 'status mesin 2 wajib diisi.',
			'status2'	=> 'status mesin 2 yang di input salah'
		],
	];
	public $cekStatus3 = [
		'status'	=> 'required|status3'
	];

	public $cekStatus3_errors = [
		'status'	=> [
			'required' 	=> 'status mesin 3 wajib diisi.',
			'status3'	=> 'status mesin 3 yang di input salah'
		],
	];
	public $cekStatus4 = [
		'status'	=> 'required|status4'
	];

	public $cekStatus4_errors = [
		'status'	=> [
			'required' 	=> 'status mesin 4 wajib diisi.',
			'status4'	=> 'status mesin 4 yang di input salah'
		],
	];

	public $cek_errors = [
		'jam'		=> [
			'required' 	=> 'jam wajib diisi.'
		],
		'menit'	=> [
			'required'	=> 'menit wajib diisi.'
		],
		'detik'	=> [
			'required'	=> 'detik wajib diisi.'
		],
	];
	public $cek_lifetimeError = [
		'hari'		=> [
			'required'	=> 'hari wajib diisi'
		],
		'jam'		=> [
			'required' 	=> 'jam wajib diisi.'
		],
		'menit'	=> [
			'required'	=> 'menit wajib diisi.'
		],
		'detik'	=> [
			'required'	=> 'detik wajib diisi.'
		],
	];

	//--------------------------------------------------------------------
}
