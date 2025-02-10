<?php

namespace App\Http\Controllers;

use App\Http\Requests\Register;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Hash;


use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{

    public function index()
    {
        $users = User::paginate(30); // Pastikan variabel ini ada jika digunakan di view
        $totalUsers = User::count(); // Hitung total user
        // dd($totalUsers);
        $person = Auth::user();

        return view('admin', compact('users', 'person', 'totalUsers'));
    }

    public function search(Request $request)
    {
        // Ambil query pencarian dari input
        $query = $request->input('search');

        $person = Auth::user();

        // Cari data user berdasarkan username, email, nohp, atau jurusan
        $users = User::where('username', 'LIKE', '%' . $query . '%')
            ->orWhere('email', 'LIKE', '%' . $query . '%')
            ->orWhere('address', 'LIKE', '%' . $query . '%')
            ->orWhere('role_name', 'LIKE', '%' . $query . '%')

            ->orWhere('nohp', 'LIKE', '%' . $query . '%')
            ->orWhere('jurusan', 'LIKE', '%' . $query . '%')
            ->get();

        // Kembalikan data ke view dengan hasil pencarian
        return view('tables', compact('users', 'person'));
    }

    public function filter(Request $request)
    {
        $person = Auth::user();

        $jurusan = $request->input('jurusan');

        // Filter users by jurusan
        $users = User::where('jurusan', $jurusan)->get();

        return view('tables', compact('users', 'person'));
    }


    public function indek()
    {
        return view('userdashboard'); // Ganti dengan tampilan dashboard user
    }


    public function edit($id)
    {
        // Mengambil data user berdasarkan ID
        $user = User::findOrFail($id);

        // Mengirim data user ke view (jika ingin menggunakan halaman berbeda)
        Alert::toast('Berhasil', 'success');

        return view('users.edit', compact('user'));
    }
    // FUNGSI UPDATE BENAR
    // public function update(Request $request, $id)
    // {
    //     // Validasi input
    //     $request->validate([
    //         'username' => 'required|string|max:255',
    //         'email' => 'required|email|max:255',
    //         'nohp' => 'required|string|max:15',
    //         'address' => 'required|string|max:255',
    //         'jurusan' => 'required|string|max:255',
    //         'status' => 'required|in:0,1',
    //     ]);

    //     try {
    //         // Cari user berdasarkan ID
    //         $user = User::findOrFail($id);

    //         // Update data user
    //         $user->update([
    //             'username' => $request->input('username'),
    //             'email' => $request->input('email'),
    //             'nohp' => $request->input('nohp'),
    //             'address' => $request->input('address'),
    //             'jurusan' => $request->input('jurusan'),
    //             'status' => $request->input('status'),
    //         ]);

    //         // Redirect dengan pesan sukses
    //         Alert::success('Berhasil Mengubah data', 'Success Message');

    //         return redirect()->back()->with('success', 'User updated successfully.');
    //     } catch (\Exception $e) {
    //         return redirect()->back()->withErrors(['error' => $e->getMessage()])->withInput();
    //     }
    // }


    public function update(Request $request, $id): JsonResponse
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'username' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'nohp' => 'required|string|max:15',
            'address' => 'required|string|max:255',
            'jurusan' => 'required|string|max:255',
            'status' => 'required|in:0,1',
        ]);

        // Jika validasi gagal
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors(),
            ], 422);
        }

        try {
            // Cari user berdasarkan ID
            $user = User::findOrFail($id);

            // Update data user
            $user->update($request->only(['username', 'email', 'nohp', 'address', 'jurusan', 'status']));

            return response()->json([
                'success' => true,
                'message' => 'User updated successfully!',
                'user' => $user
            ], 200);
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'An error occurred: ' . $e->getMessage()
            ], 500);
        }
    }


    //  True fungsi
    //     public function update(Request $request, $id)
    // {
    //     // Validasi input
    //     $request->validate([
    //         'username' => 'required|string|max:255',
    //         'email' => 'required|email|max:255',
    //         'nohp' => 'required|string|max:15',
    //         'address' => 'required|string|max:255',
    //         'jurusan' => 'required|string|max:255',
    //         'status' => 'required|in:0,1',
    //     ]);


    //     try {
    //         // Cari user berdasarkan ID
    //         $user = User::findOrFail($id);

    //         // Update data user
    //         $user->update([
    //             'username' => $request->input('username'),
    //             'email' => $request->input('email'),
    //             'nohp' => $request->input('nohp'),
    //             'address' => $request->input('address'),
    //             'jurusan' => $request->input('jurusan'),
    //             'status' => $request->input('status'),
    //         ]);

    //         // Redirect dengan pesan sukses
    //         Alert::success('Berhasil Mengubah data', 'Success Message');


    //         return redirect()->back()->with('success', 'User updated successfully.');
    //     } catch (\Exception $e) {
    //         return redirect()->back()->withErrors(['error' => $e->getMessage()]);
    //     }
    // }



    public function destroy($id)
    {
        try {
            // Mencari user berdasarkan ID
            $user = User::findOrFail($id);

            // Menghapus user
            $user->delete();

            // Menampilkan notifikasi sukses
            alert()->success('Deleted', 'User data deleted successfully!');

            // Redirect ke halaman dashboard (atau halaman lain yang sesuai)
            return redirect()->route('tables')->with('success', 'User deleted successfully.');
        } catch (\Exception $e) {
            // Menampilkan notifikasi error jika ada masalah
            alert()->error('Error', 'Failed to delete user. Please try again.');


            return redirect()->route('dashboard')->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function showLoginForm()
    {
        return view('sign-in');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // Redirect based on role
            if (Auth::user()->role_name === 'admin') {
                Alert::toast('Berhasil login', 'success');
                return redirect('/admin')->with('success', 'Welcome Admin!');
            } elseif (Auth::user()->role_name === 'user') {
                toast('Berhasil Login User', 'success');
                return redirect('/user')->with('success', 'Welcome User!');
            }
        }

        // Error Alert
        Alert::error('Invalid email or password', 'Error Message');

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->withInput();
    }


    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Simpan pesan toast di session
        session()->flash('toast', [
            'message' => 'You have been logged out successfully!',
            'type' => 'success'
        ]);

        return redirect('/sign-in');
    }
    public function tables()
    {
        $person = Auth::user();
        // $totalUsers = User::count();
        $users = User::all(); // Ambil semua data user
        return view('tables', compact('users', 'person')); // Kirim data ke view
    }

    public function register()
    {
        return view('sign-up');
    }

    public function signup(Request $request)
    {
        // Validasi input
        $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email|max:255',
            'nohp' => 'required|digits_between:10,13',
            'address' => 'required|string|max:500',
            'jurusan' => 'required|string',
            'password' => 'required|string|min:8|confirmed',
        ], [
            'username.required' => 'Nama wajib diisi.',
            'email.required' => 'Email wajib diisi.',
            'email.email' => 'Format email tidak valid.',
            'email.unique' => 'Email sudah terdaftar.',
            'nohp.required' => 'Nomor handphone wajib diisi.',
            'nohp.digits_between' => 'Nomor handphone harus antara 10-13 digit.',
            'address.required' => 'Alamat wajib diisi.',
            'jurusan.required' => 'Jurusan wajib dipilih.',
            'password.required' => 'Password wajib diisi.',
            'password.min' => 'Password harus minimal 8 karakter.',
            'password.confirmed' => 'Konfirmasi password tidak cocok.',
        ]);

        // Simpan data jika validasi berhasil
        $user = User::create([
            'username' => $request->username,
            'email' => $request->email,
            'nohp' => $request->nohp,
            'address' => $request->address,
            'jurusan' => $request->jurusan,
            'status' => 1,
            'role_name' => 'user',
            'password' => bcrypt($request->password),
        ]);

        // Menampilkan notifikasi sukses
        Alert::success('Success ', 'Berhasil membuat akun');

        return redirect('/')->with('success', 'Registrasi berhasil!');
    }

    public function store(Register $request): JsonResponse
    {
        try {
            // Buat user dengan metode fill() untuk keamanan mass assignment
            $user = new User();
            $user->fill([
                'username' => $request->username,
                'email' => $request->email,
                'nohp' => $request->nohp,
                'address' => $request->address,
                'jurusan' => $request->jurusan,
                'status' => $request->status,
                'role_name' => $request->role_name,
                'password' => Hash::make($request->password), // Lebih aman daripada bcrypt()
            ]);
            $user->save(); // Simpan user

            return response()->json([
                'success' => true,
                'message' => 'User created successfully!',
                'user' => $user
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'An error occurred: ' . $e->getMessage()
            ], 500);
        }
    }



    // TrueCreate

    //     public function store(Request $request)
    // {
    //     $request->validate([
    //         'username' => 'required|string|max:255',
    //         'email' => 'required|email|unique:users',
    //         'nohp' => 'required|numeric',
    //         'address' => 'nullable|string',
    //         'jurusan' => 'required|string',
    //         'status' => 'required|boolean',
    //         'role_name' => 'required|in:admin,user',
    //     ]);

    //     User::create([
    //         'username' => $request->username,
    //         'email' => $request->email,
    //         'nohp' => $request->nohp,
    //         'address' => $request->address,
    //         'jurusan' => $request->jurusan,
    //         'status' => $request->status,
    //         'role_name' => $request->role_name,
    //         'password' => bcrypt('password123'), // Default password (bisa diubah)
    //     ]);


    //     return redirect()->back()->with('success', 'User berhasil ditambahkan.');
    // }
    // public function destroy($id)
    // {
    //     $user = User::find($id);

    //     if (!$user) {
    //         return redirect()->back()->with('error', 'User not found.');
    //     }

    //     $user->delete();
    //     return redirect()->back()->with('success', 'User deleted successfully.');
    // }








}


// fungsi register
// try {
//     // Validasi input
//     $request->validate([
//         'username' => 'required|string|max:255',
//         'email' => 'required|email|unique:users,email',
//         'nohp' => 'required|string|max:15',
//         'address' => 'required|string|max:255',
//         'jurusan' => 'required|string|max:255',
//         'password' => 'required|string|min:8',
//     ]);

//     // Buat data pengguna baru
//     $user = new User();
//     $user->username = $request->input('username');
//     $user->email = $request->input('email');
//     $user->nohp = $request->input('nohp');
//     $user->address = $request->input('address');
//     $user->jurusan = $request->input('jurusan');
//     $user->status = 1; // Default aktif
//     $user->role_name = 'user'; // Default role
//     $user->password = bcrypt($request->input('password')); // Hash password

//     // Simpan pengguna ke database
//     $user->save();

//     // Beri respon sukses
//     return redirect('/sign-in')->with('success', 'Registration successful!');
// } catch (\Exception $e) {
//     // Tangkap error dan beri respon
//     return redirect()->back()->withErrors(['error' => $e->getMessage()]);
// } finally {
    //     // Log informasi atau tindakan lain yang perlu dilakukan setelah proses selesai
    //     \Log::info('Signup process completed for email: ' . $request->input('email'));

    // }

    // Login
    //     public function login(Request $request)
    // {
    //     $credentials = $request->validate([
    //         'email' => 'required|email',
    //         'password' => 'required',
    //     ]);

    //     if (Auth::attempt($credentials)) {
    //         $request->session()->regenerate();
    //         if (Auth::user()->role_name === 'admin') {
    //             Alert::toast('Welcome ' . Auth::user()->username, 'success');
    //             return redirect('/');
    //         }

    //     }
    //     else
    //     {
    //         alert()->error('Title','Lorem Lorem Lorem');
    //         return redirect()->back();
    //     }

    //     // Tambahkan SweetAlert di sini untuk menangani login gagal

    //     return back()->withErrors([
    //         'email' => 'The provided credentials do not match our records.',
    //     ]);
    // }


    //  logout
    // public function logout(Request $request)
    // {
    //     Auth::logout();
    //     $request->session()->invalidate();
    //     $request->session()->regenerateToken();

    //     alert()->success('Logged Out', 'You have been successfully logged out.');
    //     return redirect('/sign');
    // }
