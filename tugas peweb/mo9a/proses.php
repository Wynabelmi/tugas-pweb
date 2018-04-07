
<?php
//TODO 5: Tentukan status mahasiswa berdasarkan input yang diberikan

// //TODO 6: Tampilkan pesan status DO mahasiswa. Jika hasilnya DO, 
// //        tampilkan dengan kalimat dengan latar belakang merah

if($_POST)
	{
		$semester = $_POST['semester'] ;
		$IPK = $_POST['IPK'];
		
			if ($IPK <= '2.00' &&  $semester >='semester 4')
 			{
   				echo "<font color='red'> maaf, anda harus DO! </font>";
 			}
 			else if ($IPK <='2.00' && $semester <'semester 4')
 			{ 
   				echo "tingkatkan prestasimu!";
 			}
 			else if ($IPK >'2.00' && $semester >= 'semester 1')
 			{
 				echo "semangat!";
 			}
 		
 			
	}	
?>
