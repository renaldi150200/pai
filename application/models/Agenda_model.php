<?php

class Agenda_model extends CI_Model
{

    public function getAgenda()
    {
        return $this->db->get('agenda')->result_array();
    }
    public function getAgendaBantu()
    {
        return $this->db->get('agenda_bantu')->result_array();
    }

    public function inputAgenda()
    {
        $data = [
            'kd_agenda'  => htmlspecialchars($this->input->post('kd_agenda', true)),
            'nama_agenda'  => htmlspecialchars($this->input->post('nama', true)),
            'tema' => htmlspecialchars($this->input->post('tema', true)),
            'tanggal_agenda' => htmlspecialchars($this->input->post('tanggal', true))
        ];

        $this->db->insert('agenda', $data);
    }
    public function inputAgendaBantu()
    {
        $data = [
            'id'  => htmlspecialchars($this->input->post('id', true)),
            'kd_agenda'  => htmlspecialchars($this->input->post('id', true)),
            'nama_agenda'  => htmlspecialchars($this->input->post('nama', true)),
            'tema' => htmlspecialchars($this->input->post('tema', true)),
            'tanggal_agenda' => htmlspecialchars($this->input->post('tanggal', true))
        ];
        $this->db->insert('agenda_bantu', $data);
    }
    public function hapusAgenda($id)
    {
        $this->db->delete('agenda', ['id' => $id]);
    }
    public function AgendaSelesai($id)
    {
        $ikhwan = 'i';
        $akhwat = 'a';
        $jumlah_ikhwan = $this->db->get_where('absen', ['kd_agenda' => $id, 'jenkel' => $ikhwan])->num_rows();
        $jumlah_akhwat = $this->db->get_where('absen', ['kd_agenda' => $id, 'jenkel' => $akhwat])->num_rows();

        $data = array(
            'jumlah_peserta' => $jumlah_ikhwan,
            'peserta_akhwat' => $jumlah_akhwat
        );
        $this->db->where('id', $id);
        $this->db->update('agenda', $data);
        $this->db->delete('agenda_bantu', ['id' => $id]);
    }
    public function inputAbsen()
    {
        $data = [
            'kd_agenda' => htmlspecialchars($this->input->post('kd_agenda', true)),
            'nim' => htmlspecialchars($this->input->post('nim', true)),
            'jenkel' => htmlspecialchars($this->input->post('jenkel', true))
        ];

        $this->db->insert('absen', $data);

        $data1 = [
            'koin_aljazari' => htmlspecialchars($this->input->post('koin_aljazari', true))
        ];
        $this->db->where('nim', $this->input->post('nim'));
        $this->db->update('anggota', $data1);
    }
}
