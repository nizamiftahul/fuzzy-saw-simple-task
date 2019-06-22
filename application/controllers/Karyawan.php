<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Karyawan extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
	{
		parent::__construct();
		$this->load->model('MKaryawan', 'm_karyawan');
		$this->load->model('MKriteria', 'm_kriteria');
	}

	public function index()
	{
		$data = $this->m_karyawan->get_entries();
		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('karyawan/index', ['data' => $data]);
		$this->load->view('layout/footer', ['js' => 'karyawan/indexjs']);
	}

	public function create()
	{
		if (!empty($_POST)) {
			$this->m_karyawan->insert_entry();
			redirect('karyawan');
		}

		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('karyawan/create');
		$this->load->view('layout/footer', ['js' => 'karyawan/createjs']);
	}

	public function update($id)
	{
		if (!empty($_POST)) {
			$this->m_karyawan->update_entry();
			redirect('karyawan');
		}

		$data = $this->m_karyawan->get_entries_by_id($id);
		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('karyawan/update', ['data' => $data]);
		$this->load->view('layout/footer', ['js' => 'karyawan/updatejs']);
	}

	public function delete($id)
	{
		$this->m_karyawan->delete_entry($id);
		redirect('karyawan');
	}

	public function view_saw()
	{
		$data = $this->m_karyawan->get_entries();
		$kriteria = $this->m_kriteria->get_entries();

		$c = [];
		$perhitungan_normalisasi = [];
		$perhitungan_bobot = [];
		$nilai_saw = [];

		foreach ($data as $d) {
			foreach ($kriteria as $idx_k => $k) {
				// $jenis = 'c' . ($idx_k + 1);
				$jenis = strtolower($k->kriteria);
				${$jenis}[] = $d->{$jenis};
			}
		}

		foreach ($kriteria as $idx_k => $k) {
			$jenis = strtolower($k->kriteria);
			if ($k->tipe == 'benefit') {
				$c[$idx_k] = max(${$jenis});
			} else {
				$c[$idx_k] = min(${$jenis});
			}
		}

		foreach ($data as $idx_d => $d) {
			$perhitungan_normalisasi[$idx_d]['nama'] = $d->nama;
			foreach ($kriteria as $idx_k => $k) {
				$jenis = strtolower($k->kriteria);
				${$jenis}[] = $d->{$jenis};

				if ($k->tipe == 'benefit') {
					$perhitungan_normalisasi[$idx_d][$jenis] = round($d->{$jenis} / $c[$idx_k], 2);
				} else {
					$perhitungan_normalisasi[$idx_d][$jenis] = round($c[$idx_k] / $d->{$jenis}, 2);
				}
			}
		}

		foreach ($perhitungan_normalisasi as $idx_d => $d) {
			$perhitungan_bobot[$idx_d]['nama'] = $d['nama'];
			$total = 0;
			foreach ($kriteria as $idx_k => $k) {
				$jenis = strtolower($k->kriteria);
				$hasil = round($d[$jenis] * $k->bobot, 2);
				$perhitungan_bobot[$idx_d][$jenis] = $hasil;
				$total += $hasil;
			}
			$perhitungan_bobot[$idx_d]['total'] = $total;
			$nilai_saw[] = $total;
		}

		$i = 0;
		foreach ($nilai_saw as $d) {
			$max = max($nilai_saw);
			$keys = array_search($max, $nilai_saw);
			unset($nilai_saw[$keys]);
			$i++;
			$perhitungan_bobot[$keys]['rank'] = $i;
		}

		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('karyawan/view_saw', ['perhitungan_normalisasi' => $perhitungan_normalisasi, 'perhitungan_bobot' => $perhitungan_bobot]);
		$this->load->view('layout/footer', ['js' => 'karyawan/view_sawjs']);
	}
}
