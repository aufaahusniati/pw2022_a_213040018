<?php 
// Studi kasus - LURING

$mahasiswa = [
    ["Aufaa", "213040018", "Aufaa@gmail.com", "Teknik Informatika"],
    ["Risma", "213040010", "Risma@gmail.com", "Teknik Infomatika"],
    ["Widya", "213040000", "Widya@gmail.com", "Teknik Informatika"]
];
?>

<?php foreach($mahasiswa as $mhs) { ?>
    <ul>
        <li>Nama : <?php echo $mhs [0] ?> </li> 
        <li>NPM : <?php echo $mhs [1] ?> </li>
        <li>Email : <?php echo $mhs [2] ?> </li>
        <li>Jurusan : <?php echo $mhs [3] ?> </li>
    </ul> 
<?php }
?>

