<?php
/**
 * Created by John Richard Quitaneg.
 * User: JOQUITAN
 * Email: johnrichardq@gmail.com
 * Date: 12/02/2018
 * Time: 8:21 PM
 */
?>

<!-- Bootstrap modal -->
<div class="modal fade" id="sku_modal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="#" id="sku_form" class="form-horizontal">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 class="modal-title">New Customer</h3>
                </div>
                <div class="modal-body form">
                    <input type="hidden" value="1" id="rowcount" name="rowcount"/>
                    <div class="form-body">
                        <div class="hideshowdiv">
                            <div class="form-group" name="id">
                                <label class="control-label col-md-3" name="emp_label">Customer Key</label>
                                <div class="col-md-9">
                                    <input name="customerkey" id="customerkey" class="form-control input-sm" type="text">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">SKU</label>
                            <div class="col-md-9">
                                <input type="text" name="sku" id="sku" class="form-control input-sm" placeholder="SKU" minlength="8" required>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Description</label>
                            <div class="col-md-9">
                                <input type="text" name="description" id="description" class="form-control input-sm" placeholder="Description">
                                <span class="help-block"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" id="save_sku" class="btn btn-primary btn-sm" style="margin-left: 10px;">&nbsp;<i class="fa fa-save"></i>&nbsp; Save &nbsp;</button>
                    <button type="submit" class="btn btn-danger  btn-sm" data-dismiss="modal">&nbsp;<i class="fa fa-close"></i>&nbsp; Cancel &nbsp; </button>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Bootstrap modal -->
