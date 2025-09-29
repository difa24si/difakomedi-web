<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DateTime;

class PegawaiController extends Controller{

        public function index()
    {
        $name = "Difa Mardiani";
        $tgl_lahir = "17-12-2005";
        $today = new DateTime(); // otomatis hari ini
        $birthDate = new DateTime($tgl_lahir);
        $my_age = $today->diff($birthDate)->y; // hitung umur

       $hobbies = ["Membaca", "Olahraga", "Makan", "Musik", "Traveling"];

        $tgl_harus_wisuda =("2028-10-04");
        $wisudaDate = new DateTime("2028-10-04");
        $time_to_study_left = $today->diff($wisudaDate)->days;

        $current_semester = 4;
        if ($current_semester < 3) {
            $info = "Masih Awal, Kejar TAK";
        } else {
            $info = "Jangan main-main, kurang-kurangi main game!";
        }
             $future_goal = "Menjadi Software Engineer";

          return view('pegawai', [
    'name' => $name,
    'my_age' => $my_age,
    'hobbies' => $hobbies,
    'tgl_harus_wisuda' => $tgl_harus_wisuda,
    'time_to_study_left' => $time_to_study_left,
    'current_semester' => $current_semester,
    'info' => $info,
    'future_goal' => $future_goal,

        ]);


}
}
