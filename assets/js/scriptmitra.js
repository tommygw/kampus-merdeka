function editBtn() {
    var buttons = document.getElementsByClassName("action-buttons");
    for (var i = 0; i < buttons.length; i++) {
        buttons[i].style.display = "inline";
    }
    document.getElementById("edit-button").style.display = "none";
    document.getElementById("cancel-button").style.display = "inline";
}

function cancelBtn() {
    var buttons = document.getElementsByClassName("action-buttons");
    for (var i = 0; i < buttons.length; i++) {
        buttons[i].style.display = "none";
    }
    document.getElementById("edit-button").style.display = "inline";
    document.getElementById("cancel-button").style.display = "none";
}

function saveAndNext() {
    // Save Form 1 data to localStorage
    localStorage.setItem("namakegiatan", document.getElementById("namakegiatan").value);
    localStorage.setItem("jeniskegiatan", document.getElementById("jeniskegiatan").value);
    localStorage.setItem("metodekegiatan", document.getElementById("metodekegiatan").value);
    localStorage.setItem("start_date", document.getElementById("start_date").value);
    localStorage.setItem("end_date", document.getElementById("end_date").value);
    // Show Page 2
    document.getElementById("page1").classList.remove("active");
    document.getElementById("page2").classList.add("active");

    updateStepIndicator();
}

function saveAndBack() {
    // Save Form 2 data to localStorage
    localStorage.setItem("desckegiatan", document.getElementById("desckegiatan").value);
    localStorage.setItem("syaratkegiatan", document.getElementById("syaratkegiatan").value);
    localStorage.setItem("sertikegiatan", document.getElementById("sertikegiatan").value);
    // Show Page 1
    document.getElementById("page2").classList.remove("active");
    document.getElementById("page1").classList.add("active");

    updateStepIndicator();
}

function submitClearData() {
  localStorage.removeItem("namakegiatan");
  localStorage.removeItem("jeniskegiatan");
  localStorage.removeItem("metodekegiatan");
  localStorage.removeItem("start_date");
  localStorage.removeItem("end_date");
  localStorage.removeItem("desckegiatan");
  localStorage.removeItem("syaratkegiatan");
  localStorage.removeItem("sertikegiatan");
}

function updateStepIndicator() {
    var page1 = document.getElementById("page1");
    var step1 = document.getElementById("step1");
    var step2 = document.getElementById("step2");

    if (page1.classList.contains("active")) {
        step1.classList.add("active");
        step2.classList.remove("active");
    } else {
        step1.classList.remove("active");
        step2.classList.add("active");
    }
}

function addNewmodul() {
    const modulKegiatan = document.getElementById('modulkegiatan');
    const newFormSection = document.createElement('div');
    newFormSection.classList.add('modulkegiatan');
    newFormSection.innerHTML = `
      <div>
        <label for="judulmodul" class="mb-2 mt-2 form-label form-label-bold">Judul Modul</label>
        <input type="text" name="judulmodul[]" class="form-control" id="judulmodul" placeholder="Judul Modul">
      </div>
      <div>
        <label for="descmodul" class="mb-2 mt-2 form-label form-label-bold">Isi Modul</label>
        <textarea class="form-control" name="descmodul[]" id="descmodul" aria-label="With textarea" rows="10" cols="50"></textarea>
      </div>
      <button type="button" class="mb-2 mt-2 btn btn-danger" onclick="removeField(this)">Remove</button>
    `;
    modulkegiatan.appendChild(newFormSection);
}

function removeField(button) {
button.parentElement.remove();
}

