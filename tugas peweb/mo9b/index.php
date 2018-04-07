<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tugas M09b</title>
</head>
<body>
    <h2>Mesin Pencari Faktor Bilangan</h2>

    <!-- TODO 1: Tambahkan atribut form ini sehingga data dikirim ke file ini dengan method POST -->

    <form method ="POST">
        Bilangan : <input type="text" name="bilangan">
        <!-- TODO 2: Tambahkan input berupa text bernama `bilangan` -->

        <button type="submit">Kirim</button>
    </form>

    <?php
        //TODO 3 : Lakukang pencarian faktor bilangan disini dan tampilkan 

    if($_POST)
    {
        $bilangan = $_POST['bilangan'];
         $i = isset($_POST['i']) ? $_POST['i']:'1';
        $j = isset($_POST['j']) ? $_POST['j']:'100';
        echo " <h4> Faktor Bilangan dari $bilangan: ";
        for ($i = '1'; $i<$bilangan; $i++){
            if($bilangan%$i=='0' ){
            $j=$bilangan/$i; 
            echo "($i)" ;

            }
        }
            
        //for($i>0){
            if($bilangan%$i=='0'){
            $j=$bilangan/$i;
                if($i!=$j){
                    echo "($bilangan)";
                }
                $i--;

            }
        }


    ?>
</body>
</html>