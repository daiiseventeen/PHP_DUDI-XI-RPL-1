<?php

// data json
// $dataJSON = '
//     [
// {
//     "NoSeri" : "1001",
//     "Judul" : "Dilan 1991",
//     "Genre" : "Romance",
//     "Penulis" : "Pidi Baiq",
//     "Penerbit" : "Airlangga",
//     "TahunRilis" : "2014"
// },
// {
//     "NoSeri" : "1002",
//     "Judul" : "Laskar Pelangi",
//     "Genre" : "Drama",
//     "Penulis" : "Andrea Hirata",
//     "Penerbit" : "Bentang Pustaka",
//     "TahunRilis" : "2005"
// },
// {
//     "NoSeri" : "1003",
//     "Judul" : "Bumi Manusia",
//     "Genre" : "Historical",
//     "Penulis" : "Pramoedya Ananta Toer",
//     "Penerbit" : "Lentera Dipantara",
//     "TahunRilis" : "1980"
// },
// {
//     "NoSeri" : "1004",
//     "Judul" : "Perahu Kertas",
//     "Genre" : "Romance",
//     "Penulis" : "Dee Lestari",
//     "Penerbit" : "Bentang Pustaka",
//     "TahunRilis" : "2009"
// },
// {
//     "NoSeri" : "1005",
//     "Judul" : "Ayat-Ayat Cinta",
//     "Genre" : "Romance",
//     "Penulis" : "Habiburrahman El Shirazy",
//     "Penerbit" : "Republika",
//     "TahunRilis" : "2004"
// },
// {
//     "NoSeri" : "1006",
//     "Judul" : "Negeri 5 Menara",
//     "Genre" : "Inspirational",
//     "Penulis" : "Ahmad Fuadi",
//     "Penerbit" : "Gramedia",
//     "TahunRilis" : "2009"
// },
// {
//     "NoSeri" : "1007",
//     "Judul" : "Supernova: Ksatria, Putri, dan Bintang Jatuh",
//     "Genre" : "Sci-Fi",
//     "Penulis" : "Dee Lestari",
//     "Penerbit" : "Truedee Books",
//     "TahunRilis" : "2001"
// },
// {
//     "NoSeri" : "1008",
//     "Judul" : "Filosofi Kopi",
//     "Genre" : "Drama",
//     "Penulis" : "Dee Lestari",
//     "Penerbit" : "Bentang Pustaka",
//     "TahunRilis" : "2006"
// },
// {
//     "NoSeri" : "1009",
//     "Judul" : "Hujan",
//     "Genre" : "Sci-Fi",
//     "Penulis" : "Tere Liye",
//     "Penerbit" : "Gramedia",
//     "TahunRilis" : "2016"
// },
// {
//     "NoSeri" : "1010",
//     "Judul" : "Rindu",
//     "Genre" : "Drama",
//     "Penulis" : "Tere Liye",
//     "Penerbit" : "Republika",
//     "TahunRilis" : "2014"
// },
// {
//     "NoSeri" : "1011",
//     "Judul" : "Pulang",
//     "Genre" : "Thriller",
//     "Penulis" : "Leila S. Chudori",
//     "Penerbit" : "KPG",
//     "TahunRilis" : "2012"
// },
// {
//     "NoSeri" : "1012",
//     "Judul" : "Rectoverso",
//     "Genre" : "Romance",
//     "Penulis" : "Dee Lestari",
//     "Penerbit" : "Goodreads Indonesia",
//     "TahunRilis" : "2008"
// },
// {
//     "NoSeri" : "1013",
//     "Judul" : "Sang Pemimpi",
//     "Genre" : "Drama",
//     "Penulis" : "Andrea Hirata",
//     "Penerbit" : "Bentang Pustaka",
//     "TahunRilis" : "2006"
// },
// {
//     "NoSeri" : "1014",
//     "Judul" : "Madre",
//     "Genre" : "Drama",
//     "Penulis" : "Dee Lestari",
//     "Penerbit" : "Bentang Pustaka",
//     "TahunRilis" : "2011"
// },
// {
//     "NoSeri" : "1015",
//     "Judul" : "Gajah Mada",
//     "Genre" : "Historical",
//     "Penulis" : "Langit Kresna Hariadi",
//     "Penerbit" : "Tiga Serangkai",
//     "TahunRilis" : "2011"
// },
// {
//     "NoSeri" : "1016",
//     "Judul" : "Sherlock Holmes",
//     "Genre" : "Mystery",
//     "Penulis" : "Arthur Conan Doyle",
//     "Penerbit" : "Gramedia",
//     "TahunRilis" : "2010"
// },
// {
//     "NoSeri" : "1017",
//     "Judul" : "Laut Bercerita",
//     "Genre" : "Drama",
//     "Penulis" : "Leila S. Chudori",
//     "Penerbit" : "KPG",
//     "TahunRilis" : "2017"
// },
// {
//     "NoSeri" : "1018",
//     "Judul" : "The Naked Traveler",
//     "Genre" : "Non-fiction",
//     "Penulis" : "Trinity",
//     "Penerbit" : "B-first",
//     "TahunRilis" : "2007"
// },
// {
//     "NoSeri" : "1019",
//     "Judul" : "Marmut Merah Jambu",
//     "Genre" : "Romance",
//     "Penulis" : "Raditya Dika",
//     "Penerbit" : "Bukune",
//     "TahunRilis" : "2010"
// },
// {
//     "NoSeri" : "1020",
//     "Judul" : "5 CM",
//     "Genre" : "Adventure",
//     "Penulis" : "Donny Dhirgantoro",
//     "Penerbit" : "Grasindo",
//     "TahunRilis" : "2005"
// }
//     ]';

// dikonversikan ke JSON
// $list = json_decode($dataJSON);

// tampilkan data JSON
// foreach ($list as $NOVEL) {
//     echo "No: {$NOVEL->NoSeri} <br>";
//     echo "Judul: {$NOVEL->Judul} <br>";
//     echo "Genre: {$NOVEL->Genre} <br>";
//     echo "Penulis: {$NOVEL->Penulis} <br>";
//     echo "Penerbit: {$NOVEL->Penerbit} <br>";
//     echo "Tahun Rilis: {$NOVEL->TahunRilis} <br>";
//     echo "<hr>";
// }


// data json
$dataJSON = '
    [
{
    "No" : "1001",
    "Judul" : "Dilan 1991",
    "Genre" : "Romance",
    "Penulis" : "Pidi Baiq",
    "Penerbit" : "Airlangga",
    "TahunRilis" : "2014"
},
{
    "No" : "1002",
    "Judul" : "Laskar Pelangi",
    "Genre" : "Drama",
    "Penulis" : "Andrea Hirata",
    "Penerbit" : "Bentang Pustaka",
    "TahunRilis" : "2005"
},
{
    "No" : "1003",
    "Judul" : "Bumi Manusia",
    "Genre" : "Historical",
    "Penulis" : "Pramoedya Ananta Toer",
    "Penerbit" : "Lentera Dipantara",
    "TahunRilis" : "1980"
},
{
    "No" : "1004",
    "Judul" : "Perahu Kertas",
    "Genre" : "Romance",
    "Penulis" : "Dee Lestari",
    "Penerbit" : "Bentang Pustaka",
    "TahunRilis" : "2009"
},
{
    "No" : "1005",
    "Judul" : "Ayat-Ayat Cinta",
    "Genre" : "Romance",
    "Penulis" : "Habiburrahman El Shirazy",
    "Penerbit" : "Republika",
    "TahunRilis" : "2004"
},
{
    "No" : "1006",
    "Judul" : "Negeri 5 Menara",
    "Genre" : "Inspirational",
    "Penulis" : "Ahmad Fuadi",
    "Penerbit" : "Gramedia",
    "TahunRilis" : "2009"
},
{
    "No" : "1007",
    "Judul" : "Supernova: Ksatria, Putri, dan Bintang Jatuh",
    "Genre" : "Sci-Fi",
    "Penulis" : "Dee Lestari",
    "Penerbit" : "Truedee Books",
    "TahunRilis" : "2001"
},
{
    "No" : "1008",
    "Judul" : "Filosofi Kopi",
    "Genre" : "Drama",
    "Penulis" : "Dee Lestari",
    "Penerbit" : "Bentang Pustaka",
    "TahunRilis" : "2006"
},
{
    "No" : "1009",
    "Judul" : "Hujan",
    "Genre" : "Sci-Fi",
    "Penulis" : "Tere Liye",
    "Penerbit" : "Gramedia",
    "TahunRilis" : "2016"
},
{
    "No" : "1010",
    "Judul" : "Rindu",
    "Genre" : "Drama",
    "Penulis" : "Tere Liye",
    "Penerbit" : "Republika",
    "TahunRilis" : "2014"
},
{
    "No" : "1011",
    "Judul" : "Pulang",
    "Genre" : "Thriller",
    "Penulis" : "Leila S. Chudori",
    "Penerbit" : "KPG",
    "TahunRilis" : "2012"
},
{
    "No" : "1012",
    "Judul" : "Rectoverso",
    "Genre" : "Romance",
    "Penulis" : "Dee Lestari",
    "Penerbit" : "Goodreads Indonesia",
    "TahunRilis" : "2008"
},
{
    "No" : "1013",
    "Judul" : "Sang Pemimpi",
    "Genre" : "Drama",
    "Penulis" : "Andrea Hirata",
    "Penerbit" : "Bentang Pustaka",
    "TahunRilis" : "2006"
},
{
    "No" : "1014",
    "Judul" : "Madre",
    "Genre" : "Drama",
    "Penulis" : "Dee Lestari",
    "Penerbit" : "Bentang Pustaka",
    "TahunRilis" : "2011"
},
{
    "No" : "1015",
    "Judul" : "Gajah Mada",
    "Genre" : "Historical",
    "Penulis" : "Langit Kresna Hariadi",
    "Penerbit" : "Tiga Serangkai",
    "TahunRilis" : "2011"
},
{
    "No" : "1016",
    "Judul" : "Sherlock Holmes",
    "Genre" : "Mystery",
    "Penulis" : "Arthur Conan Doyle",
    "Penerbit" : "Gramedia",
    "TahunRilis" : "2010"
},
{
    "No" : "1017",
    "Judul" : "Laut Bercerita",
    "Genre" : "Drama",
    "Penulis" : "Leila S. Chudori",
    "Penerbit" : "KPG",
    "TahunRilis" : "2017"
},
{
    "No" : "1018",
    "Judul" : "The Naked Traveler",
    "Genre" : "Non-fiction",
    "Penulis" : "Trinity",
    "Penerbit" : "B-first",
    "TahunRilis" : "2007"
},
{
    "No" : "1019",
    "Judul" : "Marmut Merah Jambu",
    "Genre" : "Romance",
    "Penulis" : "Raditya Dika",
    "Penerbit" : "Bukune",
    "TahunRilis" : "2010"
},
{
    "No" : "1020",
    "Judul" : "5 CM",
    "Genre" : "Adventure",
    "Penulis" : "Donny Dhirgantoro",
    "Penerbit" : "Grasindo",
    "TahunRilis" : "2005"
}
    ]';

// dikonversikan ke JSON
$list = json_decode($dataJSON);


echo '<center>';
echo '<h2 style=width:200px;>Kumpulan Novel Terbaru</h2>';
echo '<table border="1" cellpadding="15" cellspacing="0" width="80%">';
echo '<thead style=background-color:darkgreen;>
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Genre</th>
            <th>Penulis</th>
            <th>Penerbit</th>
            <th>Tahun Rilis</th>
        </tr>
      </thead>';
echo '<tbody>';

// tampilkan data JSON
foreach ($list as $NOVEL) {
    echo "<tr>";
    echo "<td>{$NOVEL->No}</td>";
    echo "<td>{$NOVEL->Judul}</td>";
    echo "<td>{$NOVEL->Genre}</td>";
    echo "<td>{$NOVEL->Penulis}</td>";
    echo "<td>{$NOVEL->Penerbit}</td>";
    echo "<td>{$NOVEL->TahunRilis}</td>";
    echo "</tr>";
}

echo '</tbody>';
echo '</table>';
echo '</center>';
?>

