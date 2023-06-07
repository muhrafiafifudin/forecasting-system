// $("#department_table").DataTable()

$(document).ready(function () {
    $("#department_table").DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: "http://127.0.0.1:8005/api/departments",
            type: "GET",
        },
        columns: [{ data: "id" }, { data: "department" }],
    });
});
