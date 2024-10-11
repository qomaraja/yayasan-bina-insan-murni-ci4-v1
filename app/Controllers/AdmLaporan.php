<?php

namespace App\Controllers;

use App\Models\MdlDonasi;
use App\Models\MdlPengeluaran;
use App\Models\MdlTransaksi;
use Dompdf\Dompdf;
use Dompdf\Options;

class AdmLaporan extends BaseController
{
    protected $MdlDonasi;
    protected $MdlPengeluaran;
    protected $MdlTransaksi;

    public function __construct()
    {
        $this->MdlDonasi = new MdlDonasi();
        $this->MdlPengeluaran = new MdlPengeluaran();
        $this->MdlTransaksi = new MdlTransaksi();
    }

    public function index()
    {
        $dataDonasi = $this->MdlDonasi->findAll();
        $dataPengeluaran = $this->MdlPengeluaran->findAll();
        $dataTransaksi = $this->MdlTransaksi->findAll();

        $data = [
            'title' => 'Laporan',
            'activeMenu' => 'laporan',
            'donasi' => $dataDonasi,
            'pengeluaran' => $dataPengeluaran,
            'transaksi' => $dataTransaksi
        ];

        return view('admlaporan', $data);
    }

    public function laporanTransaksi($type)
    {
        $tglTransaksi = $this->request->getVar('transaksi');
        // Pisahkan tanggal mulai dan akhir
        list($start_date, $end_date) = explode(' - ', $tglTransaksi);

        $dataTransaksi = $this->MdlTransaksi->getTransaksiWithDonasi();

        // Ambil data donasi dari model, filter berdasarkan tanggal
        $dataTransaksi = $this->MdlTransaksi->getTransaksiByDateRange($start_date, $end_date);

        $data = [
            'title' => 'Laporan Transaksi',
            'transaksi' => $dataTransaksi,
            'start_date' => $start_date,
            'end_date' => $end_date
        ];

        $html = view('laporantransaksi_pdf', $data);

        $options = new Options();
        $options->set('isRemoteEnabled', true);

        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();
        $dompdf->stream("laporan_{$type}.pdf", array("Attachment" => 1));
    }

    public function laporanDonasi($type)
    {
        // Ambil tanggal dari request
        $tglDonasi = $this->request->getVar('donasi');
        // Pisahkan tanggal mulai dan akhir
        list($start_date, $end_date) = explode(' - ', $tglDonasi);

        $dataDonasi = $this->MdlDonasi->findAll();

        // Ambil data donasi dari model, filter berdasarkan tanggal
        $dataDonasi = $this->MdlDonasi->getDonasiByDateRange($start_date, $end_date);

        $data = [
            'title' => 'Laporan Donasi',
            'donasi' => $dataDonasi,
            'start_date' => $start_date,
            'end_date' => $end_date
        ];

        $html = view('laporandonasi_pdf', $data);

        $options = new Options();
        $options->set('isRemoteEnabled', true);

        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();
        $dompdf->stream("laporan_{$type}.pdf", array("Attachment" => 1));
    }

    public function laporanPengeluaran($type)
    {
        // Ambil tanggal dari request
        $tglPengeluaran = $this->request->getVar('pengeluaran');
        // Pisahkan tanggal mulai dan akhir
        list($start_date, $end_date) = explode(' - ', $tglPengeluaran);

        $dataPengeluaran = $this->MdlPengeluaran->getPengeluaranWithDonasi();
        $dataPengeluaran = $this->MdlPengeluaran->getPengeluaranByDateRange($start_date, $end_date);

        $data = [
            'title' => 'Laporan pengeluaran',
            'pengeluaran' => $dataPengeluaran,
            'start_date' => $start_date,
            'end_date' => $end_date
        ];

        $html = view('laporanpengeluaran_pdf', $data);

        $options = new Options();
        $options->set('isRemoteEnabled', true);

        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();
        $dompdf->stream("laporan_{$type}.pdf", array("Attachment" => 1));
    }

    public function laporanDonatur($type)
    {
        $tglDonatur = $this->request->getVar('donatur');
        // Pisahkan tanggal mulai dan akhir
        list($start_date, $end_date) = explode(' - ', $tglDonatur);

        $dataTransaksi = $this->MdlTransaksi->findAll();

        // Ambil data donasi dari model, filter berdasarkan tanggal
        $dataTransaksi = $this->MdlTransaksi->getTransaksiByDateRange($start_date, $end_date);

        $data = [
            'title' => 'Laporan Transaksi',
            'transaksi' => $dataTransaksi,
            'start_date' => $start_date,
            'end_date' => $end_date
        ];

        $html = view('laporandonatur_pdf', $data);

        $options = new Options();
        $options->set('isRemoteEnabled', true);

        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();
        $dompdf->stream("laporan_{$type}.pdf", array("Attachment" => 1));
    }

    public function laporanFull($type)
    {
        $tglFull = $this->request->getVar('full');
        // Pisahkan tanggal mulai dan akhir
        list($start_date, $end_date) = explode(' - ', $tglFull);

        $dataDonasi = $this->MdlDonasi->findAll();
        $dataPengeluaran = $this->MdlPengeluaran->getPengeluaranWithDonasi();
        $dataTransaksi = $this->MdlTransaksi->getTransaksiWithDonasi();

        $dataDonasi = $this->MdlDonasi->getDonasiByDateRange($start_date, $end_date);
        $dataPengeluaran = $this->MdlPengeluaran->getPengeluaranByDateRange($start_date, $end_date);
        $dataTransaksi = $this->MdlTransaksi->getTransaksiByDateRange($start_date, $end_date);

        $data = [
            'title' => 'Laporan Full',
            'donasi' => $dataDonasi,
            'pengeluaran' => $dataPengeluaran,
            'transaksi' => $dataTransaksi,
            'start_date' => $start_date,
            'end_date' => $end_date
        ];

        $html = view('laporanfull_pdf', $data);

        $options = new Options();
        $options->set('isRemoteEnabled', true);

        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();
        $dompdf->stream("laporan_{$type}.pdf", array("Attachment" => 1));
    }
}
