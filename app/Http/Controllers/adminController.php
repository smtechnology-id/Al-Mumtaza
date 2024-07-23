<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use App\Models\PointStudent;
use Illuminate\Http\Request;
use App\Models\ProfileStudent;
use App\Models\ProfileTeacher;
use App\Models\SetPoint;
use App\Models\ViolationReport;
use App\Models\ViolationCategory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class adminController extends Controller
{
    public function index()
    {
        $dataUser = User::where('level', 'siswa')->count();
        $dataTeacher = User::where('level', 'guru')->count();
        return view('admin.dashboard', compact('dataUser', 'dataTeacher'));
    }


    public function studentData()
    {
        $studentData = User::where('level', 'siswa')
            ->join('profile_students', 'users.id', '=', 'profile_students.id_user')
            ->get();

        return view('admin.studentData', compact('studentData'));
    }

    public function studentInput()
    {
        return view('admin.studentInput');
    }

    public function studentCreate(Request $request)
    {
        // Validasi data dari formulir
        $setPoint = SetPoint::first();



        $validatedData = $request->validate([
            'nama_lengkap' => 'required',
            'nomor_siswa' => 'required|unique:profile_students', // Pastikan nomor siswa unik di tabel profile_students
            'email' => 'required|email|unique:users,email', // Pastikan email unik di tabel users
            'password' => 'required|min:6|confirmed',
        ]);



        $point = $setPoint->set_point;

        // Buat pengguna baru
        $user = new User();
        $user->name = $validatedData['nama_lengkap'];
        $user->email = $validatedData['email'];
        $user->password = Hash::make($validatedData['password']);
        $user->level = 'siswa'; // Atur level pengguna sebagai 'siswa'
        $user->save();

        // Buat profil siswa terkait
        $profileStudent = new ProfileStudent();
        $profileStudent->id_user = $user->id;
        $profileStudent->nama_lengkap = $validatedData['nama_lengkap'];
        $profileStudent->nomor_siswa = $validatedData['nomor_siswa'];
        $profileStudent->first_password = $validatedData['password'];
        $profileStudent->status_profile = "Not Completed";
        $profileStudent->save();

        $point_student = new PointStudent();
        $point_student->id_user = $user->id;
        $point_student->total_poin = $point;
        $point_student->save();


        return redirect()->route('studentData')->with('success', 'Data siswa berhasil disimpan');
    }

    public function studentDelete($id)
    {
        // Cari siswa berdasarkan ID
        $student = User::find($id);

        if (!$student) {
            return redirect()->route('studentData')->with('error', 'Data siswa tidak ditemukan.');
        }

        // Hapus profil siswa jika ada
        $profile = ProfileStudent::where('id_user', $student->id)->first();
        $profile->delete();
        // Hapus siswa dari tabel users
        $student->delete();

        return redirect()->route('studentData')->with('success', 'Data siswa berhasil dihapus.');
    }



    // Teacher Method

    public function teacherData()
    {
        $dataTeacher = User::where('level', 'guru')
            ->join('profile_teachers', 'users.id', '=', 'profile_teachers.id_user')
            ->get();
        return view('admin.teacherData', compact('dataTeacher'));
    }
    public function teacherInput()
    {
        return view('admin.teacherInput');
    }

    public function teacherCreate(Request $request)
    {
        // Validate incoming data
        $validatedData = $request->validate([
            'email' => 'required|email|unique:users,email',
            'name' => 'required',
            'password' => 'required|min:6|confirmed',
        ], [
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Format email tidak valid',
            'email.unique' => 'Email sudah digunakan',
            'name.required' => 'Nama wajib diisi',
            'password.required' => 'Password wajib diisi',
            'password.min' => 'Password minimal 6 karakter',
            'password.confirmed' => 'Konfirmasi password tidak cocok',
        ]);

        // Create a new user
        $user = new User();
        $user->email = $validatedData['email'];
        $user->name = $validatedData['name'];
        $user->password = Hash::make($validatedData['password']);
        $user->level = 'guru'; // Adjust as needed
        $user->save();

        // Obtain the newly created user's ID
        $id_user = $user->id;

        // Create a profile for the teacher
        $teacher = new ProfileTeacher();
        $teacher->id_user = $id_user;
        $teacher->nama_lengkap = $validatedData['name'];
        $teacher->email_aktif = $validatedData['email'];
        $teacher->status_profile = "Not Completed";
        $teacher->first_password = $validatedData['password'];
        $teacher->save();

        return redirect()->route('teacherData')->with('success', 'Guru berhasil ditambahkan');
    }

    public function teacherDelete($id)
    {
        $teacher = ProfileTeacher::find($id);

        // Jika guru ditemukan
        if ($teacher) {
            // Hapus data guru
            $teacher->delete();

            // Hapus user terkait
            User::where('id', $teacher->id_user)->delete();

            return redirect()->route('teacherData')->with('success', 'Data guru berhasil dihapus');
        }

        return redirect()->route('teacherData')->with('error', 'Gagal menghapus data guru');
    }


    // CRUD LAPORAN
    public function laporanPelanggaran()
    {
        $data = ViolationReport::where('status_report', 'pending')->get();
        return view('admin.laporan-pelanggaran', compact('data'));
    }
    public function historyLaporan()
    {
        $data = ViolationReport::whereIn('status_report', ['rejected', 'approved'])->get();
        return view('admin.historyLaporan', compact('data'));
    }


    public function laporanInput()
    {
        $student = ProfileStudent::all();
        $category = ViolationCategory::all();
        $teacher = ProfileTeacher::all();
        return view('admin.laporan-input', compact('category', 'teacher', 'student'));
    }

    public function createlaporan(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'category_id' => 'required',
            'reported_student_id' => 'required',
            'description' => 'required',
            'evidence' => 'nullable|file|mimes:jpeg,png,pdf|max:2048', // Sesuaikan dengan jenis file yang diperbolehkan
            // Tambahkan validasi untuk input lainnya jika ada
        ]);

        try {
            // Simpan data ke dalam database
            $violationReport = new ViolationReport();
            $violationReport->category_id = $validatedData['category_id'];
            $violationReport->reported_by = 3;
            $violationReport->reported_student_id = $validatedData['reported_student_id'];
            $violationReport->description = $validatedData['description'];
            $violationReport->points_deducted = 10;

            // Handle file upload jika ada
            if ($request->hasFile('evidence')) {
                $evidence = $request->file('evidence');
                $evidenceName = Str::random(40) . '.' . $evidence->getClientOriginalExtension();
                $evidencePath = $evidence->storeAs('images/violations-images', $evidenceName, 'public');

                // Hapus file lama jika ada
                if ($violationReport->evidence) {
                    Storage::disk('public')->delete('images/violations-images/' . $violationReport->evidence);
                }

                // Simpan nama file ke database
                $violationReport->evidence = $evidenceName;
            }

            $violationReport->save();


            return redirect()->route('laporanPelanggaran')->with('success', 'Laporan pelanggaran berhasil disimpan');
        } catch (\Exception $e) {
            return redirect()->route('laporanPelanggaran')->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
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




    public function kategoriPelanggaran()
    {
        $data = ViolationCategory::all();
        return view('admin.kategori-pelanggaran', compact('data'));
    }
    public function kategoriInput()
    {
        return view('admin.kategori-input');
    }
    public function categoryPost(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'nama_kategori' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'bobot_point' => 'required|integer|min:1',
        ]);

        try {
            // Simpan data ke dalam database
            $categoryViolation = new ViolationCategory();
            $categoryViolation->nama_kategori = $validatedData['nama_kategori'];
            $categoryViolation->deskripsi = $validatedData['deskripsi'];
            $categoryViolation->bobot_point = $validatedData['bobot_point'];
            $categoryViolation->save();

            return redirect()->route('kategoriPelanggaran')->with('success', 'Data kategori pelanggaran berhasil disimpan');
        } catch (\Exception $e) {
            return redirect()->route('kategoriPelanggaran')->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
    public function deleteCategory($id)
    {
        $category = ViolationCategory::find($id);

        if (!$category) {
            return redirect()->route('kategoriPelanggaran')->with('error', 'Kategori pelanggaran tidak ditemukan');
        }

        $category->delete();

        return redirect()->route('kategoriPelanggaran')->with('success', 'Kategori pelanggaran berhasil dihapus');
    }

    public function setPoint()
    {
        $data = SetPoint::first();
        return view('admin.setPoint', compact('data'));
    }
    public function updateSetPoint(Request $request)
    {
        $validatedData = $request->validate([
            'set_point' => 'required|numeric'
        ]);

        $setPoint = SetPoint::first();
        $setPoint->update($validatedData);

        return redirect()->back()->with('success', 'Set Point updated successfully');
    }



    // Detail Laporan
    public function detailLaporan($id)
    {
        $detail = ViolationReport::where('id', $id)->first();
        if ($detail) {
            $student_id = $detail->student_id;
            $laporan = ViolationReport::where('student_id', $student_id)->get();
            return view('admin.detail-laporan', compact('detail', 'laporan'));
        } else {
            // Handle ketika detail tidak ditemukan
        }
    }
    public function changeStatus($id, $status)
    {
        $violationReport = ViolationReport::findOrFail($id);

        // Lakukan perubahan status berdasarkan parameter yang diberikan
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

    public function teacherAdmin()
    {
        $teacher = ProfileTeacher::all();
        return view('admin.teacherAdmin', compact('teacher'));
    }

    public function addAccessTeacherAdmin($id)
    {
        $idUser = $id;
        $profileteacher = ProfileTeacher::where('id_user', $idUser)->first();

        if ($profileteacher) {
            $profileteacher->teacher_admin = 'have access';
            $profileteacher->save();
        }
        return redirect()->back()->with('success', 'Berhasil Menambahkan Akses');
    }
    public function removeAccessTeacherAdmin($id)
    {
        $idUser = $id;
        $profileteacher = ProfileTeacher::where('id_user', $idUser)->first();

        if ($profileteacher) {
            $profileteacher->teacher_admin = null;
            $profileteacher->save();
        }
        return redirect()->back()->with('success', 'Berhasil Menghapus Akses');
    }
}
