
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>State</title>

<!-- Bootstrap 5 CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body style="background: #f8f9fa;">

<div class="container mt-4">

    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div class="page-title" style=" font-size:28px; font-weight:600;">State</div>
        <button class="btn btn-primary">
            <i class="fa fa-plus me-1"></i> Create
        </button>
    </div>

    <!-- Card -->
    <div class="card shadow-sm">
        <div class="card-header" style=" background:#f1f3f5; font-weight:500;">
            View Details
        </div>

        <div class="card-body">

            <!-- Top Controls -->
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div>
                    <select id="entries" class="form-select w-auto">
                        <option value="5">5</option>
                        <option value="10">10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                    </select>
                </div>

                <div>
                    <input type="text" id="search" class="form-control" placeholder="Search...">
                </div>
            </div>

            <!-- Table -->
            <div class="table-responsive">
                <table class="table table-bordered align-middle">
                    <thead class="table-light" style=" font-weight:600;">
                        <tr>
                            <th>S.No.</th>
                            <th>State Name</th>
                            <th>Default</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="tableBody">
                        <tr>
                            <td>1</td>
                            <td>Kerala</td>
                            <td>No</td>
                            <td><span class="badge bg-danger">In-Active</span></td>
                            <td><i class="fa fa-pen-to-square text-primary"></i></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Karnataka</td>
                            <td class="text-primary">Yes</td>
                            <td><span class="badge bg-success">Active</span></td>
                            <td><i class="fa fa-pen-to-square text-primary"></i></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Maharashtra</td>
                            <td>No</td>
                            <td><span class="badge bg-success">Active</span></td>
                            <td><i class="fa fa-pen-to-square text-primary"></i></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Tamilnadu</td>
                            <td>No</td>
                            <td><span class="badge bg-success">Active</span></td>
                            <td><i class="fa fa-pen-to-square text-primary"></i></td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Delhi</td>
                            <td>No</td>
                            <td><span class="badge bg-success">Active</span></td>
                            <td><i class="fa fa-pen-to-square text-primary"></i></td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Andhra Pradesh</td>
                            <td>No</td>
                            <td><span class="badge bg-danger">In-Active</span></td>
                            <td><i class="fa fa-pen-to-square text-primary"></i></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Footer -->
            <div class="d-flex justify-content-between align-items-center mt-2">
                <small id="tableInfo"></small>

                <nav>
                    <ul class="pagination pagination-sm mb-0" id="pagination"></ul>
                </nav>
            </div>

        </div>
    </div>

</div>

<script>
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
</script>

</body>
</html>
