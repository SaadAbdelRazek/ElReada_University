const tableIds = ['datatablesSimple', 'datatablesSimple1', 'datatablesSimple2']; // ضع جميع معرفات الجداول هنا

tableIds.forEach(id => {
    const table = document.getElementById(id);
    if (table) {
        new simpleDatatables.DataTable(table);
    }
});
