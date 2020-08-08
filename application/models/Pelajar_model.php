<?php

class Pelajar_model extends CI_Model
{

    public function input_amalanPekanan($email)
    {
        function tanggal_indo($tanggal, $cetak_hari = false)
        {
            $hari = array(1 => 'Senin',
                'Selasa',
                'Rabu',
                'Kamis',
                'Jumat',
                'Sabtu',
                'Minggu',
            );

            $bulan = array(1 => 'Januari',
                'Februari',
                'Maret',
                'April',
                'Mei',
                'Juni',
                'Juli',
                'Agustus',
                'September',
                'Oktober',
                'November',
                'Desember',
            );
            $split = explode('-', $tanggal);
            $tgl_indo = $split[2] . ' ' . $bulan[(int) $split[1]] . ' ' . $split[0];

            if ($cetak_hari) {
                $num = date('N', strtotime($tanggal));
                return $hari[$num] . ', ' . $tgl_indo;
            }
            return $tgl_indo;
        }
        $tanggal = date('Y-m-d');
        $tanggal_sekarang = tanggal_indo($tanggal, true);

        $data = [
            'email' => htmlspecialchars($email),
            'puasa_sunnah' => htmlspecialchars($this->input->post('shaumSunnah', true)),
            'ket_puasa_sunnah' => htmlspecialchars($this->input->post('ket_shaumSunnah', true)),
            'date' => htmlspecialchars($tanggal_sekarang),
        ];

        $this->db->insert('amalan_yaumiyah', $data);
    }

    public function daftarKelas($email)
    {
        $pelajar = 'Pelajar';
        $data = [
            'email' => htmlspecialchars($email),
            'kode_kelas' => htmlspecialchars($this->input->post('kode_kelas', true)),
            'role_nama' => htmlspecialchars($pelajar),
        ];

        $this->db->insert('anggota_kelas', $data);
    }
}
