<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Support\Str;
use App\Models\PointStudent;
use Illuminate\Http\Request;
use App\Models\ProfileStudent;
use App\Models\ViolationReport;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Storage;

class StudentController extends Controller
{
    public function studentIndex()
    {
        // Mendapatkan ID User yang sedang login
        $idUser = auth()->user()->id;

        // Mengambil profil siswa berdasarkan ID User
        $profile = ProfileStudent::where('id_user', $idUser)->first();

        if ($profile && $profile->status_profile === 'complete') {
            // Jika profil ditemukan dan status sudah 'complete'
            // Lakukan tindakan jika profil sudah lengkap
            $user = Auth::user();
            $poinUser = PointStudent::where('id_user', $idUser)->first();
            $dataPoin = PointStudent::all();
            $profile = ProfileStudent::where('id_user', $idUser)->first();


            $violationHistory = ViolationReport::where('student_id', $idUser)->get();
            $violationHistoryCount = ViolationReport::where('student_id', $idUser)->count();
            return view('student.dashboard', compact('poinUser', 'dataPoin', 'profile', 'violationHistory', 'user', 'violationHistoryCount'));
        } elseif ($profile && $profile->status_profile === 'Not Complete') {
            // Jika profil ditemukan namun status belum 'complete'
            // Lakukan tindakan jika profil belum lengkap
            return redirect()->route('formRegistration')->with('error', 'Profil belum lengkap');
        } else {
            // Jika profil tidak ditemukan
            return redirect()->route('formRegistration')->with('error', 'Silahkan');
        }
    }

    public function formRegistration()
    {
        $profile = ProfileStudent::where('id_user', Auth::user()->id)->first();
        return view('student.form-registration', compact('profile'));
    }

    public function registrationPost(Request $request)
    {
        $validatedData = $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'jenis_kelamin' => 'required|in:Laki-Laki,Perempuan',
            'nisn' => 'required|numeric|unique:profile_students,nisn',
            'nik' => 'required|numeric|unique:profile_students,nik',
            'no_kk' => 'required|numeric|unique:profile_students,no_kk',
            'tempat_lahir' => 'required|string',
            'tanggal_lahir' => 'required|date',
            'alamat_lengkap' => 'required|string',
        ]);
        $id_user = Auth::user()->id;

        $profile = ProfileStudent::where('id_user', $id_user)->first();
        if ($profile) {
            // Perbarui data profil siswa jika ditemukan
            $profile->update([
                'jenis_kelamin' => $validatedData['jenis_kelamin'],
                'nisn' => $validatedData['nisn'],
                'nik' => $validatedData['nik'],
                'no_kk' => $validatedData['no_kk'],
                'tempat_lahir' => $validatedData['tempat_lahir'],
                'alamat_lengkap' => $validatedData['alamat_lengkap'],
            ]);

            if ($request->hasFile('photo')) {
                $photo = $request->file('photo');
                $photoName = Str::random(40) . '.' . $photo->getClientOriginalExtension();
                $photoPath = $photo->storeAs('images/students-images', $photoName, 'public');

                // Hapus foto lama jika ada
                if ($profile->photo) {
                    Storage::disk('public')->delete('images/students-images/' . $profile->photo);
                }

                // Simpan nama file foto ke database
                $profile->update(['photo' => $photoName]);
            }
            $profile->update(['status_profile' => "complete"]);
            return redirect()->route('studentIndex')->with('success', 'Profil berhasil diperbarui');
        }
        return redirect()->route('formRegistration')->with('error', 'Profil tidak ditemukan');
    }
    public function studentProfile()
    {
        // Pastikan pengguna yang mengakses adalah siswa
        if (Auth::check() && Auth::user()->level == 'siswa') {
            // Ambil data dari tabel users, profile, dan student_points
            $user = Auth::user();
            $profile = ProfileStudent::where('id_user', $user->id)->first();
            $studentPoints = PointStudent::where('id_user', $user->id)->first();

            // Tampilkan data ke view
            return view('student.profile', compact('user', 'profile', 'studentPoints'));
        }

        // Jika bukan siswa, arahkan ke halaman login dengan pesan kesalahan
        return redirect()->route('login-index')->with('error', 'Anda tidak memiliki akses sebagai siswa.');
    }
    public function SantriData()
    {
        if (Auth::check() && Auth::user()->level == 'siswa') {
            // Ambil data dari tabel users, profile, dan student_points
            $user = Auth::user();
            $profile = ProfileStudent::where('id_user', $user->id)->first();
            $studentPoints = PointStudent::where('id_user', $user->id)->first();

            $data = ProfileStudent::select('profile_students.*', 'point_students.total_poin')
                ->leftJoin('point_students', 'profile_students.id_user', '=', 'point_students.id_user')
                ->get();
            return view('student.santriData', compact('data', 'profile', 'user'));
        }
    }

    public function SantriDataDetail($id)
    {
        if (Auth::check() && Auth::user()->level == 'siswa') {
            // Ambil data dari tabel users, profile, dan student_points
            $user = Auth::user();
            $profile = ProfileStudent::where('id_user', $user->id)->first();
            $studentDetail = ProfileStudent::where('id_user', $id)->first();
            $data = ProfileStudent::where('id_user', $id)->get();
            $violationHistory = ViolationReport::where('student_id', $id)->get();
            return view('student.santriDataDetail', compact('data', 'profile', 'user', 'studentDetail', 'violationHistory'));
        }
    }

    public function editProfile()
    {
        if (Auth::check() && Auth::user()->level == 'siswa') {
            // Ambil data dari tabel users, profile, dan student_points
            $user = Auth::user();
            $profile = ProfileStudent::where('id_user', $user->id)->first();

            return view('student.editProfile', compact('profile', 'user'));
        }
    }
    public function editProfilePost(Request $request)
    {
        if (Auth::check() && Auth::user()->level == 'siswa') {
            // Ambil data dari tabel users, profile, dan student_points
            $user = Auth::user();
            $profile = ProfileStudent::where('id_user', $user->id)->first();

            $validatedData = $request->validate([
                'photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
                'nama_lengkap' => 'required|string',
                'jenis_kelamin' => 'required|in:Laki-Laki,Perempuan',
                'nisn' => 'required|numeric|unique:profile_students,nisn,' . $profile->id . ',id',
                'nik' => 'required|numeric|unique:profile_students,nik,' . $profile->id . ',id',
                'no_kk' => 'required|numeric|unique:profile_students,no_kk,' . $profile->id . ',id',
                'tempat_lahir' => 'required|string',
                'tanggal_lahir' => 'required|date',
                'alamat_lengkap' => 'required|string',
            ]);

            if ($request->hasFile('photo')) {
                $photo = $request->file('photo');
                $photoName = Str::random(40) . '.' . $photo->getClientOriginalExtension();
                $photoPath = $photo->storeAs('images/students-images', $photoName, 'public');

                // Hapus foto lama jika ada
                if ($profile->photo) {
                    Storage::disk('public')->delete('images/students-images/' . $profile->photo);
                }

                // Simpan nama file foto ke database
                $profile->update(['photo' => $photoName]);
            }
            $profile->update([
                'nama_lengkap' => $validatedData['nama_lengkap'],
                'jenis_kelamin' => $validatedData['jenis_kelamin'],
                'nisn' => $validatedData['nisn'],
                'nik' => $validatedData['nik'],
                'no_kk' => $validatedData['no_kk'],
                'tempat_lahir' => $validatedData['tempat_lahir'],
                'tanggal_lahir' => $validatedData['tanggal_lahir'],
                'alamat_lengkap' => $validatedData['alamat_lengkap'],
            ]);


            return redirect()->route('studentIndex')->with('success', 'Profile Berhasil Di Update');
        }
    }
}
