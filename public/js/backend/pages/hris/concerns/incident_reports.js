$(function() {
    modal_content = 'incident_reports';
    module_url = '/hris/incident_reports';
    module_type = 'custom';
    page_title = 'Incident Reports';

    scion.centralized_button(false, true, true, true);
    
    scion.create.table(
        'incident_reports_table',  
        module_url + '/get', 
        [
            { data: "id", title:"<input type='checkbox' class='multi-checkbox' onclick='scion.table.checkAll()'/>", render: function(data, type, row, meta) {
                var html = "";
                html += '<input type="checkbox" class="single-checkbox" value="'+row.id+'" onclick="scion.table.checkOne()"/>';
                html += '<a href="#" class="align-middle edit" onclick="scion.record.edit('+"'/hris/incident_reports/edit/', "+ row.id + ' )"><i class="fas fa-pen"></i></a>';
                return html;
            }},
            { data: "DT_RowIndex", title:"#" },
            { data: "date_filed", title: "Date Filed" },
            { data: "incident_report", title: "Incident Report" },
            { data: "submitted_by", title: "Submitted By" }

        ], 'Bfrtip', []
    );

});

function success() {
    switch(actions) {
        case 'save':
            break;
        case 'update':
            break;
    }
    $('#incident_reports_table').DataTable().draw();
    scion.create.sc_modal('incident_reports_form').hide('all', modalHideFunction);
}

function error() {}

function delete_success() {
    $('#incident_reports_table').DataTable().draw();
}

function delete_error() {}

function generateData() {
    form_data = {
        _token: _token,
        date_filed: $('#date_filed').val(),
        incident_reports: $('#incident_reports').val(),
        submitted_by: $('#submitted_by').val()

    };

    return form_data;
}

function generateDeleteItems(){}

function modalShowFunction() {
    scion.centralized_button(true, false, true, true);
}

function modalHideFunction() {
    scion.centralized_button(false, true, true, true);
}