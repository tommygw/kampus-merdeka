const awal = document.getElementById("awal");
const buttonMahasiswa = document.getElementById("button-mahasiswa");
const buttonDosen = document.getElementById("button-dosen");
const buttonMitra = document.getElementById("button-mitra");
const formMahasiswa = document.getElementById("form-mahasiswa");
const formDosen = document.getElementById("form-dosen");
const formMitra = document.getElementById("form-mitra");

buttonMahasiswa.addEventListener("click", function () {
    event.preventDefault();
    awal.style.display = "none";
    formMahasiswa.style.display = "block";
});

buttonDosen.addEventListener("click", function () {
    event.preventDefault();
    awal.style.display = "none";
    formDosen.style.display = "block";
});

buttonMitra.addEventListener("click", function () {
    event.preventDefault();
    awal.style.display = "none";
    formMitra.style.display = "block";
});

