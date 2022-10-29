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
                                <label class="form-label" for="add-display-name">Tanggal Permintaan</label>
                                <div class="form-control-wrap">
                                    <div id="showTanggal"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label" for="add-name">Code Darah</label>
                                <div class="form-control-wrap">
                                    <div id="showCode"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label" for="add-name">Nama Pendonor</label>
                                <div class="form-control-wrap">
                                    <div id="showName"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label" for="add-email">Golongan Darah</label>
                                <div class="form-control-wrap">
                                    <div id="showGol"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label" for="add-email">Nama Kantong</label>
                                <div class="form-control-wrap">
                                    <div id="showKantong"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label" for="add-email">Nama Pasien</label>
                                <div class="form-control-wrap">
                                    <div id="showPasien"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12" id="pass">
                            <div class="form-group">
                                <label class="form-label" for="add-phone">Total</label>
                                <div class="form-control-wrap">
                                    <div id="showTotal"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12" id="pass">
                            <div class="form-group">
                                <label class="form-label" for="add-phone">Status</label>
                                <div class="form-control-wrap">
                                    <div id="showStatus"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12" id="pass">
                            <div class="form-group">
                                <label class="form-label" for="add-phone">Petugas</label>
                                <div class="form-control-wrap">
                                    <div id="showPetugas"></div>
                                </div>
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
    function showForm(id, name, donor, blood, number, petugas, code) {
        let urlx = "admin/{{ $title }}"
        $.ajax({
            url: urlx + '/' + id + '/edit',
            type: "GET",
            dataType: "JSON",
            success: function(data) {
                $('#showPasien').html(name);
                $('#showCode').html(code);
                $('#showName').html(donor);
                $('#showGol').html(data.blood);
                $('#showTotal').html(data.total);
                $('#showTanggal').html(data.request_date);
                $('#showPetugas').html(petugas);
                $('#showStatus').html(data.status);
                $('#showKantong').html(number);
                $("#headForm").empty();
                $("#headForm").append("Show Permintaan");
                $('#formInput').trigger("reset");
                $('#ajaxModel').modal('show');

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