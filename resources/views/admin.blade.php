<!DOCTYPE html>
<html>
<head>
<title>Admin - Kopi Ikhwan</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body{font-family:Arial;background:#f5f5f5;margin:0;padding:20px}
.box{background:white;max-width:600px;margin:auto;padding:25px;border-radius:15px;box-shadow:0 4px 15px rgba(0,0,0,0.1)}
h1{text-align:center}
label{font-weight:bold;display:block;margin-top:15px}
input{width:100%;padding:12px;margin-top:5px;border:1px solid #ddd;border-radius:8px;box-sizing:border-box;font-size:16px}
button{background:#4B2E1E;color:white;padding:15px;width:100%;border:none;border-radius:10px;font-size:18px;margin-top:20px;cursor:pointer}
a{display:block;text-align:center;margin-top:15px;color:#4B2E1E}
.success{background:#d4edda;padding:12px;border-radius:8px;text-align:center;display:none;margin-top:15px}
</style>
</head>
<body>
<div class="box">
<h1>☕ ADMIN KOPI IKHWAN</h1>
<p style="text-align:center;color:#888">Ganti harga disini, langsung keganti di website!</p>
<label>Kopi Susu Gula Aren (Rp)</label>
<input id="p1" type="number" value="18000">
<label>Espresso (Rp)</label>
<input id="p2" type="number" value="15000">
<label>Americano (Rp)</label>
<input id="p3" type="number" value="15000">
<label>Kopi Hitam Ikhwan (Rp)</label>
<input id="p4" type="number" value="12000">
<div class="success" id="ok">✅ Berhasil Disimpan! Cek halaman utama!</div>
<button onclick="simpan()">SIMPAN HARGA BARU</button>
<a href="/">← Lihat Website Utama</a>
</div>
<script>
let saved = JSON.parse(localStorage.getItem('hargaKopi') || '{}');
if(saved.p1) document.getElementById('p1').value = saved.p1;
if(saved.p2) document.getElementById('p2').value = saved.p2;
if(saved.p3) document.getElementById('p3').value = saved.p3;
if(saved.p4) document.getElementById('p4').value = saved.p4;
function simpan(){
  let data = {p1: document.getElementById('p1').value, p2: document.getElementById('p2').value, p3: document.getElementById('p3').value, p4: document.getElementById('p4').value};
  localStorage.setItem('hargaKopi', JSON.stringify(data));
  document.getElementById('ok').style.display = 'block';
}
</script>
</body>
</html>