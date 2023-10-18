import tkinter as tk

# Class Induk: Pegawai
class Pegawai:
    def __init__(self, nama, gaji):
        self.nama = nama
        self.gaji = gaji

    def absen(self):
        print(f"{self.nama} absen hari ini.")

    def calculateSalary(self):
        pass

# Class Anak: PegawaiTetap
class PegawaiTetap(Pegawai):
    def __init__(self, nama, gaji, tunjangan):
        super().__init__(nama, gaji)
        self.tunjangan = tunjangan

    def calculateSalary(self):
        return self.gaji + self.tunjangan

# Class Anak: PegawaiHarian
class PegawaiHarian(Pegawai):
    def __init__(self, nama, gaji, tarifPerJam):
        super().__init__(nama, gaji)
        self.tarifPerJam = tarifPerJam

    def calculateSalary(self, totalJam):
        return self.gaji + self.tarifPerJam * totalJam

# Class Anak: PegawaiKontrak
class PegawaiKontrak(Pegawai):
    def __init__(self, nama, gaji, tarifProyek):
        super().__init__(nama, gaji)
        self.tarifProyek = tarifProyek

    def calculateSalary(self, jumlahProyek):
        return self.gaji + self.tarifProyek * jumlahProyek

# Implementasi GUI
root = tk.Tk()
root.title("Data Pegawai")

# Membuat label
label = tk.Label(root, text="Selamat datang di Data Pegawai", font=("Helvetica", 16))
label.pack(pady=10)

# Membuat instance Pegawai
pegawai_tetap = PegawaiTetap("Budi", 5000000, 1000000)
pegawai_harian = PegawaiHarian("Susi", 3000000, 50000)
pegawai_kontrak = PegawaiKontrak("Joko", 4000000, 2000000)

# Mencetak hasil perhitungan gaji
print(pegawai_tetap.calculateSalary())
print(pegawai_harian.calculateSalary(40))
print(pegawai_kontrak.calculateSalary(5))

root.mainloop()
