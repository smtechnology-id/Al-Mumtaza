<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\PointStudent;
use Illuminate\Http\Request;
use App\Models\ProfileStudent;
use App\Models\ProfileTeacher;
use App\Models\ViolationReport;
use App\Models\ViolationCategory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class TeacherController extends Controller
{
    public function teacherIndex()
    {

        // Mendapatkan ID User yang sedang login
        $idUser = auth()->user()->id;

        // Mengambil profil siswa berdasarkan ID User
        $profile = ProfileTeacher::where('id_user', $idUser)->first();
        // dd($profile->status_profile);

        if ($profile && $profile->status_profile == 'complete') {
            $dataPoin = PointStudent::all();
            return view('teacher.dashboard', compact('dataPoin', 'profile'));
        } elseif ($profile && $profile->status_profile == 'Not Completed') {
            return redirect()->route('formRegistrationTeacher')->with('error', 'Profil belum lengkap');
        }
    }

    public function formRegistration()
    {
        $profile = ProfileTeacher::where('id_user', Auth::user()->id)->first();
        return view('teacher.form-registration', compact('profile'));
    }

    public function registrationPost(Request $request)
    {

        // Validasi data dari form
        $validatedData = $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'jenis_kelamin' => 'required',
            'nik' => 'required|numeric|unique:profile_teachers,nik',
            'no_kk' => 'required|numeric|unique:profile_teachers,no_kk',
            'npwp' => 'required|numeric|unique:profile_teachers,npwp',
            'tempat_lahir' => 'required|string',
            'tanggal_lahir' => 'required|date',
            'alamat_lengkap' => 'required|string',
            'desa' => 'required|string',
            'rt' => 'required|numeric',
            'rw' => 'required|numeric',
            'kecamatan' => 'required|string',
            'kota_kabupaten' => 'required|string',
            'kode_pos' => 'required|numeric',
            'no_hp' => 'required|numeric',
            'lulusan_terakhir' => 'required|string',
            'jurusan' => 'required|string',
            'tahun_lulus' => 'required|numeric',
            'universitas' => 'required|string',
            'mulai_mengajar' => 'required|date',
        ]);
        $id_user = Auth::user()->id;
        $email = Auth::user()->email;

        $profile = ProfileTeacher::where('id_user', $id_user)->first();
        if ($profile) {
            // Perbarui data profil siswa jika ditemukan
            $profile->update([
                'jenis_kelamin' => $validatedData['jenis_kelamin'],
                'nik' => $validatedData['nik'],
                'no_kk' => $validatedData['no_kk'],
                'npwp' => $validatedData['npwp'],
                'tempat_lahir' => $validatedData['tempat_lahir'],
                'tanggal_lahir' => $validatedData['tanggal_lahir'],
                'alamat_lengkap' => $validatedData['alamat_lengkap'],
                'desa' => $validatedData['desa'],
                'rt' => $validatedData['rt'],
                'rw' => $validatedData['rw'],
                'kecamatan' => $validatedData['kecamatan'],
                'email_aktif' => $email,
                'kota_kabupaten' => $validatedData['kota_kabupaten'],
                'kode_pos' => $validatedData['kode_pos'],
                'no_hp' => $validatedData['no_hp'],
                'lulusan_terakhir' => $validatedData['lulusan_terakhir'],
                'jurusan' => $validatedData['jurusan'],
                'tahun_lulus' => $validatedData['tahun_lulus'],
                'universitas' => $validatedData['universitas'],
                'mulai_mengajar' => $validatedData['mulai_mengajar']
                // Tambahkan field lain yang perlu diperbarui di sini
            ]);
        }

        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $photoName = Str::random(40) . '.' . $photo->getClientOriginalExtension();
            $photoPath = $photo->storeAs('images/teachers-images', $photoName, 'public');

            // Hapus foto lama jika ada
            if ($profile->photo) {
                Storage::disk('public')->delete('images/teachers-images/' . $profile->photo);
            }

            // Simpan nama file foto ke database
            $profile->update(['photo' => $photoName]);
        }
        $profile->update(['status_profile' => "complete"]);
        return redirect()->route('teacherIndex')->with('success', 'Profil berhasil diperbarui');
    }

    public function teacherProfile()
    {
        if (Auth::check() && Auth::user()->level == 'guru') {
            // Ambil data dari tabel users, profile, dan student_points
            $user = Auth::user();
            $profile = ProfileTeacher::where('id_user', $user->id)->first();
            // Tampilkan data ke view
            return view('teacher.profile', compact('user', 'profile'));
        }

        // Jika bukan siswa, arahkan ke halaman login dengan pesan kesalahan
        return redirect()->route('login-index')->with('error', 'Anda tidak memiliki akses sebagai siswa.');
    }

    public function dataSantri()
    {
        if (Auth::check() && Auth::user()->level == 'guru') {
            // Ambil data dari tabel users, profile, dan student_points
            $user = Auth::user();
            $profile = ProfileTeacher::where('id_user', $user->id)->first();
            // Tampilkan data ke view

            $data = ProfileStudent::select('profile_students.*', 'point_students.total_poin')
                ->leftJoin('point_students', 'profile_students.id_user', '=', 'point_students.id_user')
                ->get();
            return view('teacher.data-santri', compact('user', 'profile', 'data'));
        }
    }

    public function buatLaporan($id)
    {
        if (Auth::check() && Auth::user()->level == 'guru') {
            // Ambil data dari tabel users, profile, dan student_points
            $user = Auth::user();
            $profile = ProfileTeacher::where('id_user', $user->id)->first();
            $category = ViolationCategory::all();
            $student = ProfileStudent::where('id_user', $id)->first();
            // Tampilkan data ke view
            return view('teacher.buat-laporan', compact('user', 'profile', 'student', 'category'));
        }
    }
    public function storeViolationReport(Request $request)
    {
        $validatedData = $request->validate([
            'category_id' => 'required',
            'deskripsi' => 'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Sesuaikan dengan kebutuhan
        ]);

        $id_cat = $request->category_id;
        $category = ViolationCategory::where('id', $id_cat)->first(); // Menggunakan first() untuk mendapatkan hasil pertama dari query

        $bobot_point = $category->bobot_point;
        $id_student = $request['student_id'];

        $violationReport = new ViolationReport();
        $violationReport->category_id = $validatedData['category_id'];
        $violationReport->description = $validatedData['deskripsi'];
        $violationReport->point_deduction = $bobot_point;
        $violationReport->student_id = $request['student_id'];
        $violationReport->teacher_id = Auth::user()->id;

        // Handle file upload
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $photoName = uniqid() . '.' . $photo->getClientOriginalExtension();
            $photoPath = $photo->storeAs('images/violations-images', $photoName, 'public');
            $violationReport->photo = $photoName;
        }

        // Simpan data ke dalam database
        $violationReport->save();
        return redirect()->route('laporanSantri', ['id' => $id_student])->with('success', 'Laporan Pelanggaran berhasil disimpan');
    }

    public function laporanSantri()
    {
        if (Auth::check() && Auth::user()->level == 'guru') {
            // Ambil data dari tabel users, profile, dan student_points
            $user = Auth::user();
            $profile = ProfileTeacher::where('id_user', $user->id)->first();
            $laporan = ViolationReport::where('teacher_id', $user->id)
                ->orderBy('created_at', 'desc')
                ->get();
            // Tampilkan data ke view
            return view('teacher.laporan-santri', compact('user', 'profile', 'laporan'));
        }
    }

    public function deleteLaporan($id)
    {
        $violationReport = ViolationReport::find($id);
        if ($violationReport) {
            $violationReport->delete();
            return redirect()->back()->with('success', 'Laporan berhasil dihapus');
        } else {
            return redirect()->back()->with('error', 'Laporan tidak ditemukan');
        }
    }

    public function verifikasiLaporan()
    {
        if (Auth::check() && Auth::user()->level == 'guru') {
            // Ambil data dari tabel users, profile, dan student_points
            $user = Auth::user();
            $profile = ProfileTeacher::where('id_user', $user->id)->first();
            $laporan = ViolationReport::where('teacher_id', $user->id)
                ->orderBy('created_at', 'desc')
                ->get();
            // Tampilkan data ke view

            $data = ViolationReport::where('status_report', 'pending')->get();
            return view('teacher.verifikasiLaporan', compact('user', 'profile', 'laporan', 'data'));
        }
    }

    public function detailLaporan($id)
    {
        if (Auth::check() && Auth::user()->level == 'guru') {
            // Ambil data dari tabel users, profile, dan student_points
            $user = Auth::user();
            $profile = ProfileTeacher::where('id_user', $user->id)->first();
            $detail = ViolationReport::where('id', $id)->first();
            if ($detail) {
                $student_id = $detail->student_id;
                $laporan = ViolationReport::where('student_id', $student_id)
                    ->orderBy('created_at', 'desc')
                    ->get();

                return view('teacher.detailLaporan', compact('detail', 'laporan', 'user', 'profile'));
            } else {
                // Handle ketika detail tidak ditemukan
            }
        }
    }

    public function changeStatus($id, $status)
    {
        $violationReport = ViolationReport::findOrFail($id);
        if ($status === 'approved') {
            $violationData = ViolationReport::where('id', $id)->first();
            $student_id = $violationData->student_id;
            $point_deduction = $violationData->point_deduction;

            $pointData = PointStudent::where('id_user', $student_id)->first();
            $currentPoint = $pointData->total_poin;
            $pointData->total_poin = $currentPoint - $point_deduction;
            $pointData->update();
            $violationReport->status_report = 'approved';
        } elseif ($status === 'rejected') {
            $violationReport->status_report = 'rejected';
        } elseif ($status === 'pending') {
            $violationReport->status_report = 'pending';
        }

        // Simpan perubahan status
        $violationReport->save();

        // Redirect atau tampilkan pesan sukses
        return redirect()->back()->with('success', 'Laporan telah Diproses, Point Siswa Telah Dikurangi.');
    }
}
