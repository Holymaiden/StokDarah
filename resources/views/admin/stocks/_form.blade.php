<!-- .modal -->
<div class="modal fade" id="ajaxModel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
                <em class="icon ni ni-cross-sm"></em>
            </a>
            <div class="modal-body modal-body-md">
                <h5 class="modal-title"><label id="headForm"></label></h5><br>
                <form id="formInput" name="formInput" action="">
                    @csrf
                    <input type="hidden" name="id" id="formId">
                    <div class="row g-gs">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label" for="add-tanggal">Tanggal Masuk</label>
                                <div class="form-control-wrap">
                                    <input type="date" id="tanggal" name="tanggal" class="form-control" placeholder="">
                                    <div id="showTanggal"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group row">
                                <button type="button" class="btn btn-success" id="t_tambah"><i class="icon ni ni-plus"></i>Add</button>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th id="codeTr" width="150px">Code</th>
                                            <th width="100px">Darah</th>
                                            <th>Nomor</th>
                                            <th>Nama Donor</th>
                                            <th>Jumlah</th>
                                            <th width="100px" id="trDelete">Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody id="isi_table">
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <button value="create" type="submit" id="saveBtn" class="btn btn-primary">Add User</button>
                                <button value="update" type="submit" id="updateBtn" class="btn btn-primary">Update User</button>
                            </div>
                        </div>
                </form>
            </div>
            </table>
        </div>
    </div>
</div>
</div><!-- .Add Modal-Content -->

@push('jsScriptAjax')
<script type="text/javascript">
    //Tampilkan form input
    function createForm() {
        $('#tanggal').empty();
        $('#formInput').trigger("reset");
        $("#headForm").empty();
        $("#headForm").append("Add Stock Darah");
        $("#t_tambah").show();
        $('#saveBtn').show();
        $('#updateBtn').hide();
        $('#formId').show().val('');
        $('#ajaxModel').modal('show');
        $('#isi_table').empty();
        $('#tanggal').show();
        $('#showTanggal').hide();
        $('#codeTr').hide();
    }

    //Tampilkan form edit
    function editForm(id) {
        $("#t_tambah").hide();
        let urlx = "admin/{{ $title }}"
        $.ajax({
            url: urlx + '/' + id + '/edit',
            type: "GET",
            dataType: "JSON",
            success: function(data) {
                $('#formInput').trigger("reset");
                $('#ajaxModel').modal('show');
                $('#formId').show().val(id);
                $('#saveBtn').hide();
                $('#updateBtn').show();
                $("#headForm").empty();
                $('#tanggal').show();
                $('#showTanggal').hide();
                $('#tanggal').empty();
                $('#codeTr').hide();
                $("#headForm").append("Edit Stock Darah");
                $('#tanggal').val(data[0].date_of_entry);
                $('#isi_table').empty();
                data.map(v => {
                    $("#isi_table").append(
                        '<tr>' +
                        '<td>' +
                        '<input name="id[]" id="id" value="' + v.id + '" type="hidden">' +
                        '<select name="blood[]" id="blood" class="form-control">' +
                        '<option value="A" ' + (v.blood == "A" ? "selected" : "") + '>A</option>' +
                        '<option value="B" ' + (v.blood == "B" ? "selected" : "") + '>B</option>' +
                        '<option value="AB" ' + (v.blood == "AB" ? "selected" : "") + '>AB</option>' +
                        '<option value="O" ' + (v.blood == "O" ? "selected" : "") + '>O</option>' +
                        '</select>' +
                        '</td>' +
                        '<td>' +
                        '<input type="text" name="pouch_number[]" value="' + v.pouch_number + '" id="pouch_number" class="form-control" placeholder="">' +
                        '</td>' +
                        '<td>' +
                        '<input type="text" name="donor[]" id="donor" value="' + v.donor + '" class="form-control" placeholder="">' +
                        '</td>' +
                        '<td>' +
                        '<input type="text" name="total[]" id="total" value="' + v.total + '" class="form-control" placeholder="">' +
                        '</td>' +
                        '<td>' +
                        '<button type="button" class="btn btn-danger" id="t_hapus" onClick="hapusBaris(this)">Delete</button>' +
                        '</td>' +
                        '</tr>'
                    );
                });
            },
            error: function() {
                iziToast.error({
                    title: 'Failed,',
                    message: 'Unable to display data!',
                    position: 'topRight'
                });
            }
        });
    }

    function showForm(id) {
        let urlx = "admin/{{ $title }}"
        $.ajax({
            url: urlx + '/' + id + '/edit',
            type: "GET",
            dataType: "JSON",
            success: function(data) {
                $('#formInput').trigger("reset");
                $('#ajaxModel').modal('show');
                $('#formId').show().val(id);
                $('#saveBtn').hide();
                $('#updateBtn').hide();
                $("#t_tambah").hide();
                $("#headForm").empty();
                $('#tanggal').hide();
                $('#golA').hide();
                $('#golB').hide();
                $('#golAB').hide();
                $('#golO').hide();
                $('#codeTr').show();
                $("#headForm").append("Show Stock Darah");
                $('#showTanggal').html(data[0].date_of_entry);
                $('#isi_table').empty();
                $('#trDelete').hide();
                data.map(v => {
                    $("#isi_table").append(
                        '<tr>' +
                        '<td><input type="text" name="code[]" value="' + v.code + '" id="code" class="form-control" readonly="true"></td>' +
                        '<td>' +
                        '<input name="id[]" id="id" value="' + v.id + '" type="hidden" >' +
                        '<input type="text" name="blood[]" value="' + v.blood + '" id="blood" class="form-control" readonly="true">' +
                        '</td>' +
                        '<td>' +
                        '<input type="text" name="pouch_number[]" value="' + v.pouch_number + '" id="pouch_number" class="form-control" readonly="true">' +
                        '</td>' +
                        '<td>' +
                        '<input type="text" name="donor[]" id="donor" value="' + v.donor + '" class="form-control" readonly="true">' +
                        '</td>' +
                        '<td>' +
                        '<input type="text" name="total[]" id="total" value="' + v.total + '" class="form-control" readonly="true">' +
                        '</td>' +
                        '</tr>'
                    );
                });

            },
            error: function() {
                iziToast.error({
                    title: 'Failed,',
                    message: 'Unable to display data!',
                    position: 'topRight'
                });
            }
        });
    }

    $('#t_tambah').click(function() {
        $("#isi_table").append(
            '<tr>' +
            '<td>' +
            '<input name="id[]" id="id" type="hidden">' +
            '<select name="blood[]" id="blood" class="form-control">' +
            '<option value="A">A</option>' +
            '<option value="B">B</option>' +
            '<option value="AB">AB</option>' +
            '<option value="O">O</option>' +
            '</select>' +
            '</td>' +
            '<td>' +
            '<input type="text" name="pouch_number[]" id="pouch_number" class="form-control" placeholder="">' +
            '</td>' +
            '<td>' +
            '<input type="text" name="donor[]" id="donor" class="form-control" placeholder="">' +
            '</td>' +
            '<td>' +
            '<input type="text" name="total[]" id="total" class="form-control" placeholder="">' +
            '</td>' +
            '<td>' +
            '<button type="button" class="btn btn-danger" id="t_hapus" onClick="hapusBaris(this)">Delete</button>' +
            '</td>' +
            '</tr>'
        );
    });

    function hapusBaris(v) {
        $(v).closest("tr").remove();
    };
</script>
@endpush
