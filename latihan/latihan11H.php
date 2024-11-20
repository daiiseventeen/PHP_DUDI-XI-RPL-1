<?php
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];
    $mtkharian = $_POST['mtkharian'];
    $mtktugas = $_POST['mtktugas'];
    $mtkuts = $_POST['mtkuts'];
    $mtkuas = $_POST['mtkuas'];
    $indoharian = $_POST['indoharian'];
    $indotugas = $_POST['indotugas'];
    $indouts = $_POST['indouts'];
    $indouas = $_POST['indouas'];
    $ingharian = $_POST['ingharian'];
    $ingtugas = $_POST['ingtugas'];
    $inguts = $_POST['inguts'];
    $inguas = $_POST['inguas'];
    $pdkharian = $_POST['pdkharian'];
    $pdktugas = $_POST['pdktugas'];
    $pdkuts = $_POST['pdkuts'];
    $pdkuas = $_POST['pdkuas'];


    class rapot_siswa{
        public $grade;
        public $rata2;

        public function mtk($hr, $tgs, $uts, $uas){
            $this->rata2 = ($hr + $tgs + $uts + $uas) / 4;

            echo "<td> $hr </hr>";
            echo "<td> $tgs </hr>";
            echo "<td> $uts </hr>";
            echo "<td> $uas </hr>";
            echo "<td> .$this->rata2. </hr>";

            if ($this->rata2 >= 75) {
                echo "<td>tuntas</td>";
            }else {
                echo "<td>tidak tuntas</td>";
            }
        }

        public function indo($hr, $tgs, $uts, $uas){
            $this->rata2 = ($hr + $tgs + $uts + $uas) / 4;

            echo "<td> $hr </hr>";
            echo "<td> $tgs </hr>";
            echo "<td> $uts </hr>";
            echo "<td> $uas </hr>";
            echo "<td> .$this->rata2. </hr>";

            if ($this->rata2 >= 75) {
                echo "<td>tuntas</td>";
            }else {
                echo "<td>tidak tuntas</td>";
            }
        }

        public function inggris($hr, $tgs, $uts, $uas){
            $this->rata2 = ($hr + $tgs + $uts + $uas) / 4;

            echo "<td> $hr </hr>";
            echo "<td> $tgs </hr>";
            echo "<td> $uts </hr>";
            echo "<td> $uas </hr>";
            echo "<td> .$this->rata2. </hr>";

            if ($this->rata2 >= 75) {
                echo "<td>tuntas</td>";
            }else {
                echo "<td>tidak tuntas</td>";
            }
        }

        public function produktif($hr, $tgs, $uts, $uas){
            $this->rata2 = ($hr + $tgs + $uts + $uas) / 4;

            echo "<td> $hr </hr>";
            echo "<td> $tgs </hr>";
            echo "<td> $uts </hr>";
            echo "<td> $uas </hr>";
            echo "<td> .$this->rata2. </hr>";

            if ($this->rata2 >= 75) {
                echo "<td>tuntas</td>";
            }else {
                echo "<td>tidak tuntas</td>";
            }
        }
    }


$print = new rapot_siswa();  
?>


<center>
    <table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><?php echo $nama?></td>
        </tr>
        <tr>
            <td>Kelas</td>
            <td>:</td>
            <td><?php echo $kelas?></td>
        </tr>
        <tr>
            <td>Jurusan</td>
            <td>:</td>
            <td><?php echo $jurusan?></td>
        </tr>
    </table>

    <table border="1">
        <tr>
            <th>Mapel</th>
            <th>Harian</th>
            <th>Tugas</th>
            <th>UTS</th>
            <th>UAS</th>
            <th>Rata - Rata</th>
            <th>Grade</th>
        </tr>
        <tr align=center>
            <td>Matematika</td>
            <?php echo $print->mtk($mtkharian, $mtktugas, $mtkuts, $mtkuas);?>
        </tr>
        <tr align=center>
            <td>Indonesia</td>
            <?php echo $print->mtk($indoharian, $indotugas, $indouts, $indouas);?>
        </tr>
        <tr align=center>
            <td>Inggris</td>
            <?php echo $print->mtk($ingharian, $ingtugas, $inguts, $inguas);?>
        </tr>
        <tr align=center>
            <td>Produktif</td>
            <?php echo $print->mtk($pdkharian, $pdktugas, $pdkuts, $pdkuas);?>
        </tr>
    </table>
</center>

<?php
}