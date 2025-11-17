<?php

namespace App\Http\Controllers;

use App\Models\RekamMedis;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Barryvdh\DomPDF\Facade\pdf as PDF;
use Illuminate\Support\Facades\Validator;
use Mpdf\Mpdf;

class DashboardRekamMedisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('dashboard.rekam-medis.index', [
            'rekamMedises'  => RekamMedis::orderBy('id', 'DESC')->get(),
            'request' => $request
        ]);
    }

    public function getData(Request $request)
    {
        $tanggalMulai   = $request->input('tanggal_mulai');
        $tanggalSelesai = $request->input('tanggal_selesai');

        $pembayaran = RekamMedis::query();

        if ($tanggalMulai && $tanggalSelesai) {
            $pembayaran->whereBetween('tanggal', [$tanggalMulai, $tanggalSelesai])
                ->orderBy('id', 'DESC');
        }

        $data = $pembayaran->get();

        if (empty($tanggalMulai) && empty($tanggalSelesai)) {
            $data = RekamMedis::orderBy('id', 'DESC')
                ->get();
        }

        return view('dashboard.rekam-medis.index', [
            'rekamMedises'  => $data,
            'request' => $request
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.rekam-medis.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validasi data yang diterima dari formulir
        $validatedData = $request->validate([
            'nama' => 'required|string',
            'no_rm' => 'required|string|unique:rekam_medis,no_rm',
            'jenis_kelamin' => 'required|in:laki-laki,perempuan',
            'no_ktp' => 'required|string|unique:rekam_medis,no_ktp',
            'no_bpjs' => 'nullable|string|unique:rekam_medis,no_bpjs',
            'dokter' => 'required|string',
            'keluhan' => 'required|string',
            'diagnosa' => 'required|string',
            'obat' => 'required|string',
            'tanggal' => 'required|date',
            'poli' => 'required|string',
        ]);

        // Simpan data ke dalam database
        $rekamMedis = new RekamMedis();
        $rekamMedis->nama = $validatedData['nama'];
        $rekamMedis->no_rm = $validatedData['no_rm'];
        $rekamMedis->jenis_kelamin = $validatedData['jenis_kelamin'];
        $rekamMedis->no_ktp = $validatedData['no_ktp'];
        $rekamMedis->no_bpjs = $validatedData['no_bpjs'];
        $rekamMedis->dokter = $validatedData['dokter'];
        $rekamMedis->keluhan = $validatedData['keluhan'];
        $rekamMedis->diagnosa = $validatedData['diagnosa'];
        $rekamMedis->obat = $validatedData['obat'];
        $rekamMedis->tanggal = $validatedData['tanggal'];
        $rekamMedis->poli = $validatedData['poli'];
        $rekamMedis->save();

        // Redirect ke halaman yang sesuai atau tampilkan pesan sukses
        return redirect('/dashboard/rekam-medis')->with('success', 'Data Rekam medis berhasil disimpan.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rekamMedis = RekamMedis::find($id);
        return view('dashboard.rekam-medis.edit', [
            'rm'    => $rekamMedis
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rekamMedis = RekamMedis::find($id);
        $validator = Validator::make($request->all(), [
            'nama'          => 'required',
            'no_rm'         => 'required',
            'jenis_kelamin' => 'required',
            'no_bpjs'       => 'required',
            'no_ktp'        => 'required',
            'dokter'        => 'required',
            'keluhan'       => 'required',
            'diagnosa'      => 'required',
            'obat'          => 'required',
            'tanggal'       => 'required',
            'poli'          => 'required',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $rekamMedis->update([
            'nama'          => $request->nama,
            'no_rm'         => $request->no_rm,
            'jenis_kelamin' => $request->jenis_kelamin,
            'no_bpjs'       => $request->no_bpjs,
            'no_ktp'        => $request->no_ktp,
            'dokter'        => $request->dokter,
            'keluhan'       => $request->keluhan,
            'diagnosa'      => $request->diagnosa,
            'obat'          => $request->obat,
            'tanggal'       => $request->tanggal,
            'poli'          => $request->poli,
        ]);

        // Redirect ke halaman yang sesuai atau tampilkan pesan sukses
        return redirect('/dashboard/rekam-medis')->with('success', 'Data Rekam medis berhasil diperbarui.');
    }

    public function printData(Request $request)
    {
        $tanggalMulai   = $request->input('tanggal_mulai');
        $tanggalSelesai = $request->input('tanggal_selesai');

        $pembayaran = RekamMedis::query();

        if ($tanggalMulai && $tanggalSelesai) {
            $pembayaran->whereBetween('tanggal', [$tanggalMulai, $tanggalSelesai])
                ->orderBy('id', 'DESC');
        }

        $data = $pembayaran->get();

        if (empty($tanggalMulai) && empty($tanggalSelesai)) {
            $data = RekamMedis::orderBy('id', 'DESC')
                ->get();
        }

        $logoPath   = storage_path('app/public/logo/logo.jpeg');
        $logo       = base64_encode(file_get_contents($logoPath));

        

        // $html = view('dashboard.rekam-medis.print', [
        //     'data'              => $data,
        //     'tanggalMulai'      => $request->tanggal_mulai,
        //     'tanggalSelesai'    => $request->tanggal_selesai,
        //     'logo'              => $logo
        // ])->render();

        // $mpdf = new Mpdf([
        //     'format' => 'A4-L' // L = landscape
        // ]);

        // $mpdf->WriteHTML($html);

        $pdf = PDF::loadView('dashboard.rekam-medis.print', [
            'data'              => $data,
            'tanggalMulai'      => $request->tanggal_mulai,
            'tanggalSelesai'    => $request->tanggal_selesai,
            'logo'              => $logo
        ])->setPaper('a4', 'landscape');

        return $pdf->download('laporan_rekam_medis.pdf');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}