<?php

class ppdb{

public function biodata_diri($nama, $jurusan, $jk, $tempat_lahir, $tanggal_lahir, $no_hp){
    
    echo "<b> Data Diri Calon Pendaftar (Form yang bertanda * wajib di isi) </b>";
    echo "<br>";
    echo "<br>";
    echo "Nama lengkap : $nama";
    echo "<br>";
    echo "Jurusan : $jurusan";
    echo "<br>";
    echo "Jenis kelamin : $jk";
    echo "<br>";
    echo "Tempat lahir : $tempat_lahir";
    echo "<br>";
    echo "Tanggal lahir : $tanggal_lahir";
    echo "<br>";
    echo "Nomor HP siswa yang bisa dihubungi : $no_hp";
    echo "<br>";

}

public function alamat_calon_pendaftar($provinsi, $kota, $kecamatan, $desa, $alamat, $kodepos){
    
    echo "<b> Alamat Calon Pendaftar </b>";
    echo "<br>";
    echo "<br>";
    echo"Provinsi : $provinsi";
    echo "<br>";
    echo "Kab / Kota : $kota";
    echo "<br>";
    echo "Kecamatan : $kecamatan";
    echo "<br>";
    echo "Desa : $desa";
    echo "<br>";
    echo "Alamat : $alamat";
    echo "<br>";
    echo "Kode pos : $kodepos";
    echo "<br>";
}

public function asal_sekolah($asal_sekolah, $alamat_sekolah){
    
    echo "<b>Data Asal Sekolah</b>";
    echo "<br>";
    echo "<br>";
    echo "Nama asal sekolah : $asal_sekolah";
    echo "<br>";
    echo "Alamat sekolah : $alamat_sekolah";
    echo "<br>";

}

public function data_ortu($namalengkap_ortu, $pekerjaan_ortu, $no_ortu, $alamat_ortu) {
    
    echo "<b> Data Orang Tua </b>";
    echo "<br>";
    echo "<br>";
    echo "Nama Lengkap Ayah / Ibu / Wali : $namalengkap_ortu";
    echo "<br>";
    echo "Pekerjaan Ayah / Ibu / Wali : $pekerjaan_ortu";
    echo "<br>";
    echo "No hp orang tua : $no_ortu";
    echo "<br>";
    echo "Alamt lengkap orang tua : $alamat_ortu";
}
}

// objek
$cetak = new ppdb();

echo $cetak->biodata_diri("Dudi durahman","Rpl", "Laki-Laki", "Tasikmalaya", "17-07-2007", "089756890765");
echo "<br>";
echo $cetak->alamat_calon_pendaftar("jawa barat", "bandung", "babakan ciparay", "margahayu utara", "Jl.cibolerang no 506","402213");
echo "<br>";
echo $cetak->asal_sekolah("SMP IT AL-IKHLAS","banjarwangi garut");
echo "<br>";
echo $cetak->data_ortu("ada weh","siapa kamu so tau", "ga tau lupa", "Jl.cibolerang no 506");
?>