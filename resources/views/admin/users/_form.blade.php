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
                                <label class="form-label" for="add-name">Name</label>
                                <div class="form-control-wrap">
                                    <input type="text" id="name" name="name" class="form-control" placeholder="">
                                    <div id="showName"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label" for="add-email">Email</label>
                                <div class="form-control-wrap">
                                    <input type="email" id="email" name="email" class="form-control" placeholder="">
                                    <div id="showEmail"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label" for="add-phone">Phone</label>
                                <div class="form-control-wrap">
                                    <input type="text" id="phone" name="phone" class="form-control" placeholder="">
                                    <div id="showPhone"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12" id="pass">
                            <div class="form-group">
                                <label class="form-label" for="add-phone">Password</label>
                                <div class="form-control-wrap">
                                    <input type="password" class="form-control" id="password" name="password">
                                    <div id="showPassword"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label" for="add-display-name">Role</label>
                                <div class="form-control-wrap">
                                    <select name="role" class="form-select js-select2" id="role">
                                        <option value="admin">Admin</option>
                                        <option value="user">User</option>
                                    </select>
                                    <div id="showRole"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <button value="create" type="submit" id="saveBtn" class="btn btn-primary">Add User</button>
                                <button value="update" type="submit" id="updateBtn" class="btn btn-primary">Update User</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div><!-- .Add Modal-Content -->

@push('jsScriptAjax')
<script type="text/javascript">
    //Tampilkan form input
    function createForm() {
        $('#showName').empty();
        $('#showEmail').empty();
        $('#showRole').empty();
        $('#showPassword').empty();
        $('#showPhone').empty();
        $('#formInput').trigger("reset");
        $("#headForm").empty();
        $("#headForm").append("Add User");
        $('#saveBtn').show();
        $('#updateBtn').hide();
        $('#formId').show().val('');
        $('#pass').show();
        $('#name').show();
        $('#email').show();
        $('#phone').show();
        $('#ajaxModel').modal('show');
    }

    //Tampilkan form edit
    function editForm(id) {
        let urlx = "admin/{{ $title }}"
        $.ajax({
            url: urlx + '/' + id + '/edit',
            type: "GET",
            dataType: "JSON",
            success: function(data) {
                $('#showName').empty();
                $('#showEmail').empty();
                $('#showRole').empty();
                $('#showPassword').empty();
                $('#showPhone').empty();
                $("#headForm").empty();
                $("#headForm").append("Edit User");
                $('#formInput').trigger("reset");
                $('#ajaxModel').modal('show');
                $('#saveBtn').hide();
                $('#pass').hide();
                $('#updateBtn').show();
                $('#formId').show().val(data.id);
                $('#name').show().val(data.name);
                $('#email').show().val(data.email);
                $('#phone').show().val(data.phone);
                $('#role').val(data.role).trigger('change');
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
                $('#formId').hide().val('');
                $('#name').hide().val('');
                $('#email').hide().val('');
                $('#phone').hide().val('');
                $('#role').val(data.role).trigger('change');
                $('#showName').html(data.name);
                $('#showEmail').html(data.email);
                $('#showPassword').html(data.password);
                $('#showPhone').html(data.phone);
                $("#headForm").empty();
                $("#headForm").append("Show User");
                $('#formInput').trigger("reset");
                $('#ajaxModel').modal('show');
                $('#saveBtn').hide();
                $('#pass').hide();
                $('#updateBtn').hide();

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
</script>
@endpush
