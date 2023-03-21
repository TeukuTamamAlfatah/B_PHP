<form method="post" action="bayar.php">
    <label for="nama">Nama:</label>
    <input type="text" name="nama" id="nama" required>
    <br>
    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required>
    <br>
    <label for="jumlah">Jumlah Bayar:</label>
    <input type="number" name="jumlah" id="jumlah" min="1" required>
    <br>
    <label for="bank">Pilih Bank:</label>
    <select name="bank" id="bank" required>
        <option value="">--Pilih Bank--</option>
        <option value="BCA">BCA</option>
        <option value="BNI">BNI</option>
        <option value="BRI">BRI</option>
        <option value="Mandiri">Mandiri</option>
    </select>
    <br>
    <input type="submit" value="Bayar Sekarang">
</form>