<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tugas M09</title>
</head>
<body>
    <h1>Drop Out Checker</h1>
    <!-- TODO 1: Lengkapi tag `form` berikut ini dengan atribut dimana form ini mengirim data dengan method POST ke file ini lagi. -->    
	<form method = 'POST' action='index.php' id="form">
		
		<!-- TODO 2. Buat input bertipe teks untuk IPK  -->
        IPK : <input type="text" name="IPK" value="<?=isset($_POST['IPK']) ? $_POST['IPK'] : ''?>" /> <br> <br>
       
        <!-- TODO : 3. Buat combo box untuk memilih semester. -->
        Semester : <select name="semester"> 
			<?php $option = array('semester 1', 'semester 2', 'semester 3','semester 4', 'semester 5', 'semester 6', 'semester 7', 'semester 8', 	'semester 9', 'semester 10', 'semester 11', 'semester 12', 'semester 13', 'semester 14');
			foreach ($option as $semester ) {
			$select = @$_POST['semester'] == $semester ? 'select="select"' : '';
			echo '<option value="'.$semester. '"' . $select . '>' .$semester. '</option>';
			}?>
		</select>

        <button type="submit" name="submit" value="check">Check</button>

    </form>
	
    <!-- TODO 4 : Lakukan pengecekan dan tampilkan pesan dengan meng-includekan file proses.php -->
  
    <?php
    	
    	echo "<h4> Status Mahasiswa: ";    	
    	include 'proses.php';
    ?>
    
  
</body>
</html> 