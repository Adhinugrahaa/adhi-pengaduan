window.addEventListener('DOMContentLoaded', event => {
    // Simple-DataTables
    // https://github.com/fiduswriter/Simple-DataTables/wiki

    const datatablesSimple = document.getElementById('datatablesSimple');
    if (datatablesSimple) {
        new simpleDatatables.DataTable(datatablesSimple);
    }
    
    const tabelPetugas = document.getElementById('tabelPetugas');
    if (tabelPetugas) {
        new simpleDatatables.DataTable(tabelPetugas);
    }

    const subKategori = document.getElementById('subKategori');
    if (subKategori) {
        new simpleDatatables.DataTable(subKategori);
    }





});
