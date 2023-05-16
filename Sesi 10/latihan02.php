<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Latihan form 01</title>
</head>
<body>

    <form name="latihan02" id="latihan02" method="POST" onsubmit="return checkform()">
        <div>
            NIM
            <input type="text" id="nim" name="txNIM">
        </div>
        <div>
            NAMA
            <input type="text" id="nama" name="txNAMA">
        </div>
        <div>
            JENIS KELAMIN
            <input type="radio" id="jk" name="txJK" value="L">Laki-Laki
            <input type="radio" id="jk" name="txJK" value="P">Perempuan
        </div>
        <div>
            JURUSAN
            <select id="jurusan" name="txJURUSAN">
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
            <input type="checkbox" id="txhobi" name="MUSIK">MUSIK
            <input type="checkbox" id="txhobi" name="TARI">TARI
            <input type="checkbox" id="txhobi" name="MEMBACA">MEMBACA
            <input type="checkbox" id="txhobi" name="TIDUR">TIDUR
            <input type="checkbox" id="txhobi" name="MENGGAMBAR">MENGGAMBAR
        </div>
        <div>
            <button type="submit"> Kirim Data </button>
        </div>
    </form>
    
    <script>
        function checkform(){
            let f= document.getElementById("latihan02").elements;
            let nim = f.nim.value;
            let nama = f.nama.value;
            let jeniskelamin = f.jk.value;
            let jurusan =f.jurusan.value;
            let hobi_musik =f.txhobi[0].checked;
            let hobi_tari =f.txhobi[1].checked;
            let hobi_membaca =f.txhobi[2].checked;
            let hobi_tidur =f.txhobi[3].checked;
            let hobi_menggambar =f.txhobi[4].checked;
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