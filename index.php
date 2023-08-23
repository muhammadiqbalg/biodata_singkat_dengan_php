<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Profil Biodata</title>
</head>
<body>
    <style>
        .biodata {
            padding: 50px;
            position: absolute;
            left: 50%;
            top: 10%;
            background-color: #352F44;
        }

        .biodata h1 {
            padding: 15px;
            color: #FAF0E6;
        }
        
        .biodata table {
            background-color: #FAF0E6 ;
        }

        .biodata table td {
            padding: 10px;
        }

        @media (max-width: 768px) {
            .biodata {
                left: 18%;
            }
        }
    </style>
    <div class="biodata">
        <h1>Biodata Singkat</h1>

        <?php 
            $foto_profil = "media/Foto-profil-new.png/";

            echo '<img src="'. $foto_profil .'">';
        ?>
        

        <table>
        
        <?php 
            $nama = "Muhammad Iqbal Gobel";
            $asal_kampus = "Universitas Gunadarma";
            $jurusan = "Informatika";
            $program_mbkm = "Studi Independen";
            $mitra_mbkm = "GITS";
            $program_studi = "Fullstack Web Developer";

            echo "<tr>";
            echo "<td> Nama  </td>";
            echo "<td> : </td>";
            echo "<td>". $nama ."</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td> Asal Kampus  </td>";
            echo "<td> : </td>";
            echo "<td>". $asal_kampus ."</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td> Jurusan  </td>";
            echo "<td> : </td>";
            echo "<td>". $jurusan ."</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td> Program mbkm  </td>";
            echo "<td> : </td>";
            echo "<td>". $program_mbkm ."</td>";
            echo "</tr>"; 
            echo "<tr>";
            echo "<td> Mitra mbkm  </td>";
            echo "<td> : </td>";
            echo "<td>". $mitra_mbkm ."</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td> Program Studi  </td>";
            echo "<td> : </td>";
            echo "<td>". $program_studi ."</td>";
            echo "</tr>";
        ?>

        </table>  
    </div>
    
</body>
</html>