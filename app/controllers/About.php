<?php
class About extends Controller
{
    public function index($nama = 'Bastian', $pekerjaan = 'Programmer')
    {
        $data['judul'] = 'Halaman About';
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }
}
