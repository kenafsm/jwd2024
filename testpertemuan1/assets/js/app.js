function cekPengarang() {
    let x = document.forms["formBuku"]["pengarang"].value;
    if (x == "") {
      alert("Nama Pengarang Harus Diisi");
      return false;
    }
  }

  function updateBuku() {
    harga = document.getElementById("hargaBuku").value;
    jumlah = document.getElementById("jumlahBuku").value;
    total = harga*jumlah;
    document.getElementById("totalBuku").value = total;
  }

  // function kirim() {
  //   alert("Apakah Data Sudah Benar?");
  // }