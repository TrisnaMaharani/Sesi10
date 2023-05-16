<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Latihan form 01</title>
</head>
<body>

    <form name="latihan01" method="POST" onsubmit="return checkform(this)">
        <div>
            NIM
            <input type="text" name="txNIM">
        </div>
        <div>
            NAMA
            <input type="text" name="txNAMA">
        </div>
        <div>
            JENIS KELAMIN
            <input type="radio" name="txJK" value="L">Laki-Laki
            <input type="radio" name="txJK" value="P">Perempuan
        </div>
        <div>
            JURUSAN
            <select name="txJURUSAN">
                <option value="KAB">KAB</option>
                <option value="MTI">MTI</option>
                <option value="DKV">DKV</option>
                <option value="DGM">DGM</option>
                <option value="TIPAR">TIPAR</option>
                <option value="SK">SK</option>
            </select>
        </div>
        <div>
            HOBI
            <input type="checkbox" name="MUSIK">MUSIK
            <input type="checkbox" name="TARI">TARI
            <input type="checkbox" name="MEMBACA">MEMBACA
            <input type="checkbox" name="TIDUR">TIDUR
            <input type="checkbox" name="MENGGAMBAR">MENGGAMBAR
        </div>
        <div>
            <button type="submit"> Kirim Data </button>
        </div>
    </form>
    
    <script>
        function checkform(frm){
            let f= frm.elements;
            let nim = f.namedItem("txNIM").value;
            let nama = f.namedItem("txNAMA").value;
            let jeniskelamin = f.namedItem("txJK").value;
            let jurusan =f.namedItem("txJURUSAN").value;
            let hobi_musik =f.namedItem("MUSIK").checked;
            let hobi_tari =f.namedItem("TARI").checked;
            let hobi_membaca =f.namedItem("MEMBACA").checked;
            let hobi_tidur =f.namedItem("TIDUR").checked;
            let hobi_menggambar =f.namedItem("MENGGAMBAR").checked;
            console.log("NIM: "+nim);
            console.log("NAMA: "+nama);
            console.log("JENIS KELAMIN: "+jeniskelamin);
            console.log("JURUSAN: "+jurusan);
            console.log("MUSIK: "+hobi_musik);
            console.log("TARI: "+hobi_tari);
            console.log("MEMBACA: "+hobi_membaca);
            console.log("TIDUR: "+hobi_tidur);
            console.log("MENGGAMBAR: "+hobi_menggambar);

            return false;
        }
    </script>

</body>
</html>