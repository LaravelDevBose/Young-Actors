
<div class="modal fade deleteModal" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="absentCleaner" aria-hidden="true">
    <div class="modal-dialog model-sm modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
                <div class="block-header bg-danger">
                    <h3 class="block-title">Delete</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-fw fa-times"></i>
                        </button>
                    </div>
                </div>
                <form action="" method="POST" class="absent-form GlobalFormValidation">
                    @method('DELETE')
                    @csrf
                    <div class="block-content">
                        <p>Are You Sure Want to Delete This?</p>
                        <div class="col-sm-12" style="margin-top: 15px;">
                            @include('layouts.admin.include.alert_process')
                        </div>
                    </div>
                    <div class="block-content block-content-full text-right">
                        <button type="button" class="btn btn-sm btn-primary mr-2" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-sm btn-danger"> Delete</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<!-- END New Message Modal -->
