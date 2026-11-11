<!DOCTYPE html>
<html>
<head>
<title>Kopi Ikhwan - Ngopi Berkah</title>
<style>
body{font-family:Arial;background:#FFF8E7;margin:0;text-align:center}
.header{background:#4B2E1E;color:white;padding:40px 20px}
.header h1{font-size:50px;margin:0}
.menu{display:flex;justify-content:center;gap:20px;flex-wrap:wrap;padding:30px}
.card{background:white;border-radius:15px;padding:20px;width:220px;box-shadow:0 4px 10px rgba(0,0,0,0.1)}
.card h3{margin:10px 0 5px}
.price{color:#C07A2C;font-weight:bold;font-size:20px}
.btn{background:#25D366;color:white;padding:15px 30px;border-radius:30px;text-decoration:none;display:inline-block;margin:20px;font-weight:bold}
</style>
</head>
<body>
<div class="header">
<h1>☕ KOPI IKHWAN</h1>
<p>Ngopi Enak, Hati Tenang, Harga Bersahabat</p>
<p>kp.PINTU KAPUK,DESA,BOJONGRENGED,Lebak, Banten | Buka 08.00 - 22.00</p>
</div>
<h2>Menu Best Seller</h2>
<div class="menu">
<div class="card"><h3>Kopi Susu Gula Aren</h3><p>Manis, creamy, bikin nagih</p><div class="price"id="harga1">Rp 15.000</div>
<div class="card"><h3>Espresso</h3><p>Pahitnya nampol, buat yang kuat</p><div class="price"id="harga2">Rp 16.000</div>
<div class="card"><h3>Americano</h3><p>Ringan, segar, buat nugas</p><div class="price"id="harga3">Rp 13.000</div>
<div class="card"><h3>Kopi Hitam Ikhwan</h3><p>Original, tanpa gula</p><div class="price"id="harga4">Rp 15.000</div>
</div>
<a class="btn" href="https://wa.me/6283125581380?text=Halo, mau pesan kopi dong!">PESAN VIA WHATSAPP</a>


<p>© 2026 Kopi Ikhwan - Dibuat dengan ❤️</p>
<script>
let h = JSON.parse(localStorage.getItem('hargaKopi') || '{}');
if(h.p1) document.getElementById('harga1').innerText = 'Rp ' + Number(h.p1).toLocaleString('id-ID');
if(h.p2) document.getElementById('harga2').innerText = 'Rp ' + Number(h.p2).toLocaleString('id-ID');
if(h.p3) document.getElementById('harga3').innerText = 'Rp ' + Number(h.p3).toLocaleString('id-ID');
if(h.p4) document.getElementById('harga4').innerText = 'Rp ' + Number(h.p4).toLocaleString('id-ID');
</script>
</body>
</html>