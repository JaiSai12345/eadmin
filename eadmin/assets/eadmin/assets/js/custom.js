document.getElementById("table-search-count").innerHTML='<div class="d-flex justify-content-between align-items-center mb-3"><div><select id="entries" class="form-select w-auto"><option value="10">10</option><option value="50" selected>50</option><option value="100">100</option><option value="200">200</option></select></div><div><input type="text" id="search" class="form-control" placeholder="Search..."></div></div>';
let table = document.getElementById("tableBody");
let rows = Array.from(table.rows);
let searchInput = document.getElementById("search");
let entriesSelect = document.getElementById("entries");
let tableInfo = document.getElementById("tableInfo");
let pagination = document.getElementById("pagination");

let currentPage = 1;
let rowsPerPage = parseInt(entriesSelect.value);

function displayTable() {
    let searchValue = searchInput.value.toLowerCase();
    let filteredRows = rows.filter(row =>
        row.innerText.toLowerCase().includes(searchValue)
    );

    let totalRows = filteredRows.length;
    let totalPages = Math.ceil(totalRows / rowsPerPage);

    if(currentPage > totalPages) currentPage = 1;

    let start = (currentPage - 1) * rowsPerPage;
    let end = start + rowsPerPage;

    table.innerHTML = "";
    filteredRows.slice(start, end).forEach(row => {
        table.appendChild(row);
    });

    tableInfo.innerText = `Showing ${start + 1} to ${Math.min(end, totalRows)} of ${totalRows} entries`;

    createPagination(totalPages);
}

function createPagination(totalPages) {
    pagination.innerHTML = "";
    for(let i=1; i<=totalPages; i++){
        let li = document.createElement("li");
        li.className = "page-item " + (i === currentPage ? "active" : "");
        li.innerHTML = `<a class="page-link" href="#">${i}</a>`;
        li.onclick = function(){
            currentPage = i;
            displayTable();
        }
        pagination.appendChild(li);
    }
}

searchInput.addEventListener("keyup", function(){
    currentPage = 1;
    displayTable();
});

entriesSelect.addEventListener("change", function(){
    rowsPerPage = parseInt(this.value);
    currentPage = 1;
    displayTable();
});

displayTable();
