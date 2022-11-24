n = int(input('Ketik jumlah obyek : ')) # minta jumlah obyek
r = int(input('Ketik jumlah urutan : ')) # minta jumlah urutan
def hitungfaktorial(F): # awal fungsi hitungfaktorial
 faktorial=1 #beri nilai awal faktorial
for x in range (faktorial,F+1):  #mulai perulangan hitung faktorial
  faktorial=faktorial*x   #hitung faktorialnya
return faktorial
a=hitungfaktorial(n)  #simpan hasilnya di variabel a
b=n-r  # hitung selisih jumlah obyek dengan jumlah urutan simpan di variabel b
c=hitungfaktorial(b) #simpan hasilnya di variabel c
permutasi=a/c #hitung permutasi adalah nilai a/c
print('Permutasi dari sejumlah ',n,' obyek dengan urutan sebanyak ',r,' adalah :',permutasi)