# Codeigniter
projek dan tutorial codeigniter pemula


##Login
->untuk membuat login konfigurasi yg harus dilakukan adalah database,helper('url'),libraris('database',session)

->halaman yang diperlukan Controller Login.php dan Admin.php,view v_login dan v_admin,model M_login.php

->controler Login.php -- func _construct akan me load model m_login,fungsi dari m_login adalah mengecek pada database apakah data login tersebut cocok atau tidak.


=================///////////////////////===================//////////////////////==========================
->default_controller('login')  ->  controller Login.php  ->  Login.php me load model m_login dan funct index akan me load v_login
->memasukan data di v_login dan di kirim ke controler login func aksi_login  ->  data di ambil dengan _post dan dimasukan ke array
->data dikirim ke m_login untuk di cek  ->  m_login mengembalikan hasil pemeriksaan  ->  jika data yg di maksud tersedia dalam database maka login berhasi,namun jika tidak ada login gagal.


--------------------------------?????????????????????------------------------??????????????---------------------
->Login berhasil:memasukan data username dan status kedalam array untuk dimasukan ke session  ->  redirect ke v_admin.
->login gagal:echo password/user salan
--------------------------------????????????????????--------------------------????????????????-----------------

->v_admin:apakah status sudah login? (Y) menampilkan halaman index (N) redirect ke login,tujuanya untuk menolak akses tanpa login