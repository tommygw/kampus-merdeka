function exportToPDF() {
  const { jsPDF } = window.jspdf;
  const doc = new jsPDF();

  // Adding the title
  doc.text("Data Mahasiswa", 10, 10);

  // Add table
  const elem = document.getElementById("mahasiswaTable");
  const data = doc.autoTableHtmlToJson(elem);
  doc.autoTable(data.columns, data.data, { startY: 20 });

  // Save the PDF
  doc.save("data_mahasiswa.pdf");
}

function exportToExcel() {
  const wb = XLSX.utils.table_to_book(
    document.getElementById("mahasiswaTable"),
    { sheet: "Sheet JS" }
  );
  XLSX.writeFile(wb, "data_mahasiswa.xlsx");
}
