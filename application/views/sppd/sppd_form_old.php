<div class='row'>
    <div class='col-md-12'>
        <div class='box-default'>
            <div class='panel-heading'><i class="fa fa-document"></i><?= ucfirst($judul) ?></div>
            <div class='panel-wrapper collapse in' aria-expanded='true'>
                <div class='panel-body'>
                    <form action="<?php echo $action; ?>" method="post" class='form-horizontal form-bordered'>
                        <div class='form-body'>
                            ** ) Harap Isikan data yang di butuhkan pada form.
                            <br /><br /><br /><br />
                            <div class="form-group">
                                <label for="varchar" class='control-label col-md-3'><b>Letter Code<?php echo form_error('letter_code') ?></b></label>
                                <div class='col-md-9'>
                                    <input type="text" class="form-control" name="letter_code" id="letter_code" placeholder="Letter Code" value="<?php echo $letter_code; ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="varchar" class='control-label col-md-3'><b>Letter Subject<?php echo form_error('letter_subject') ?></b></label>
                                <div class='col-md-9'>
                                    <input type="text" class="form-control" name="letter_subject" id="letter_subject" placeholder="Letter Subject" value="<?php echo $letter_subject; ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="varchar" class='control-label col-md-3'><b>Letter About<?php echo form_error('letter_about') ?></b></label>
                                <div class='col-md-9'>
                                    <input type="text" class="form-control" name="letter_about" id="letter_about" placeholder="Letter About" value="<?php echo $letter_about; ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="varchar" class='control-label col-md-3'><b>Letter From<?php echo form_error('letter_from') ?></b></label>
                                <div class='col-md-9'>
                                    <input type="text" class="form-control" name="letter_from" id="letter_from" placeholder="Letter From" value="<?php echo $letter_from; ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="letter_content" class='control-label col-md-3'><b>Letter Content<?php echo form_error('letter_content') ?></b></label>

                                <div class='col-md-9'>
                                    <textarea class="form-control" rows="3" name="letter_content" id="letter_content" placeholder="Letter Content"><?php echo $letter_content; ?></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="date" class='control-label col-md-3'><b>Letter Date<?php echo form_error('letter_date') ?></b></label>
                                <div class='col-md-9'>
                                    <input type="text" class="form-control" name="letter_date" id="letter_date" placeholder="Letter Date" value="<?php echo $letter_date; ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="varchar" class='control-label col-md-3'><b>Code<?php echo form_error('code') ?></b></label>
                                <div class='col-md-9'>
                                    <input type="text" class="form-control" name="code" id="code" placeholder="Code" value="<?php echo $code; ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="date" class='control-label col-md-3'><b>Date<?php echo form_error('date') ?></b></label>
                                <div class='col-md-9'>
                                    <input type="text" class="form-control" name="date" id="date" placeholder="Date" value="<?php echo $date; ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="varchar" class='control-label col-md-3'><b>Nip Pejabat<?php echo form_error('nip_pejabat') ?></b></label>
                                <div class='col-md-9'>
                                    <input type="text" class="form-control" name="nip_pejabat" id="nip_pejabat" placeholder="Nip Pejabat" value="<?php echo $nip_pejabat; ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="varchar" class='control-label col-md-3'><b>Nip Leader<?php echo form_error('nip_leader') ?></b></label>
                                <div class='col-md-9'>
                                    <input type="text" class="form-control" name="nip_leader" id="nip_leader" placeholder="Nip Leader" value="<?php echo $nip_leader; ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="varchar" class='control-label col-md-3'><b>Rate Travel<?php echo form_error('rate_travel') ?></b></label>
                                <div class='col-md-9'>
                                    <input type="text" class="form-control" name="rate_travel" id="rate_travel" placeholder="Rate Travel" value="<?php echo $rate_travel; ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="nip" class='control-label col-md-3'><b>Nip<?php echo form_error('nip') ?></b></label>

                                <div class='col-md-9'>
                                    <textarea class="form-control" rows="3" name="nip" id="nip" placeholder="Nip"><?php echo $nip; ?></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="purpose" class='control-label col-md-3'><b>Purpose<?php echo form_error('purpose') ?></b></label>

                                <div class='col-md-9'>
                                    <textarea class="form-control" rows="3" name="purpose" id="purpose" placeholder="Purpose"><?php echo $purpose; ?></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="varchar" class='control-label col-md-3'><b>Transport<?php echo form_error('transport') ?></b></label>
                                <div class='col-md-9'>
                                    <input type="text" class="form-control" name="transport" id="transport" placeholder="Transport" value="<?php echo $transport; ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="varchar" class='control-label col-md-3'><b>Place From<?php echo form_error('place_from') ?></b></label>
                                <div class='col-md-9'>
                                    <input type="text" class="form-control" name="place_from" id="place_from" placeholder="Place From" value="<?php echo $place_from; ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="varchar" class='control-label col-md-3'><b>Place To<?php echo form_error('place_to') ?></b></label>
                                <div class='col-md-9'>
                                    <input type="text" class="form-control" name="place_to" id="place_to" placeholder="Place To" value="<?php echo $place_to; ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="int" class='control-label col-md-3'><b>Length Journey<?php echo form_error('length_journey') ?></b></label>
                                <div class='col-md-9'>
                                    <input type="text" class="form-control" name="length_journey" id="length_journey" placeholder="Length Journey" value="<?php echo $length_journey; ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="date" class='control-label col-md-3'><b>Date Go<?php echo form_error('date_go') ?></b></label>
                                <div class='col-md-9'>
                                    <input type="text" class="form-control" name="date_go" id="date_go" placeholder="Date Go" value="<?php echo $date_go; ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="date" class='control-label col-md-3'><b>Date Back<?php echo form_error('date_back') ?></b></label>
                                <div class='col-md-9'>
                                    <input type="text" class="form-control" name="date_back" id="date_back" placeholder="Date Back" value="<?php echo $date_back; ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="varchar" class='control-label col-md-3'><b>Government<?php echo form_error('government') ?></b></label>
                                <div class='col-md-9'>
                                    <input type="text" class="form-control" name="government" id="government" placeholder="Government" value="<?php echo $government; ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="double" class='control-label col-md-3'><b>Budget<?php echo form_error('budget') ?></b></label>
                                <div class='col-md-9'>
                                    <input type="text" class="form-control" name="budget" id="budget" placeholder="Budget" value="<?php echo $budget; ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="varchar" class='control-label col-md-3'><b>Budget From<?php echo form_error('budget_from') ?></b></label>
                                <div class='col-md-9'>
                                    <input type="text" class="form-control" name="budget_from" id="budget_from" placeholder="Budget From" value="<?php echo $budget_from; ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="description" class='control-label col-md-3'><b>Description<?php echo form_error('description') ?></b></label>

                                <div class='col-md-9'>
                                    <textarea class="form-control" rows="3" name="description" id="description" placeholder="Description"><?php echo $description; ?></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="date" class='control-label col-md-3'><b>Result Date<?php echo form_error('result_date') ?></b></label>
                                <div class='col-md-9'>
                                    <input type="text" class="form-control" name="result_date" id="result_date" placeholder="Result Date" value="<?php echo $result_date; ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="result" class='control-label col-md-3'><b>Result<?php echo form_error('result') ?></b></label>

                                <div class='col-md-9'>
                                    <textarea class="form-control" rows="3" name="result" id="result" placeholder="Result"><?php echo $result; ?></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="varchar" class='control-label col-md-3'><b>Result Username<?php echo form_error('result_username') ?></b></label>
                                <div class='col-md-9'>
                                    <input type="text" class="form-control" name="result_username" id="result_username" placeholder="Result Username" value="<?php echo $result_username; ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="varchar" class='control-label col-md-3'><b>Result Username Update<?php echo form_error('result_username_update') ?></b></label>
                                <div class='col-md-9'>
                                    <input type="text" class="form-control" name="result_username_update" id="result_username_update" placeholder="Result Username Update" value="<?php echo $result_username_update; ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="longtext" class='control-label col-md-3'><b>File<?php echo form_error('file') ?></b></label>
                                <div class='col-md-9'>
                                    <input type="text" class="form-control" name="file" id="file" placeholder="File" value="<?php echo $file; ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="longtext" class='control-label col-md-3'><b>File Update<?php echo form_error('file_update') ?></b></label>
                                <div class='col-md-9'>
                                    <input type="text" class="form-control" name="file_update" id="file_update" placeholder="File Update" value="<?php echo $file_update; ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="enum" class='control-label col-md-3'><b>Status<?php echo form_error('status') ?></b></label>
                                <div class='col-md-9'>
                                    <input type="text" class="form-control" name="status" id="status" placeholder="Status" value="<?php echo $status; ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="varchar" class='control-label col-md-3'><b>Username<?php echo form_error('username') ?></b></label>
                                <div class='col-md-9'>
                                    <input type="text" class="form-control" name="username" id="username" placeholder="Username" value="<?php echo $username; ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="varchar" class='control-label col-md-3'><b>Username Update<?php echo form_error('username_update') ?></b></label>
                                <div class='col-md-9'>
                                    <input type="text" class="form-control" name="username_update" id="username_update" placeholder="Username Update" value="<?php echo $username_update; ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="timestamp" class='control-label col-md-3'><b>Datetime Insert<?php echo form_error('datetime_insert') ?></b></label>
                                <div class='col-md-9'>
                                    <input type="text" class="form-control" name="datetime_insert" id="datetime_insert" placeholder="Datetime Insert" value="<?php echo $datetime_insert; ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="timestamp" class='control-label col-md-3'><b>Datetime Update<?php echo form_error('datetime_update') ?></b></label>
                                <div class='col-md-9'>
                                    <input type="text" class="form-control" name="datetime_update" id="datetime_update" placeholder="Datetime Update" value="<?php echo $datetime_update; ?>" />
                                </div>
                            </div>
                            <input type="hidden" name="id" value="<?php echo $id; ?>" />


                            <div class='form-actions'>
                                <div class='row'>
                                    <div class='col-md-12'>
                                        <div class='row'>
                                            <div class='col-md-offset-3 col-md-9'>
                                                <button type="submit" class="btn btn-info"><i class='fa fa-check'></i><?php echo $button ?></button>
                                                <a href="<?php echo site_url('sppd') ?>" class="btn btn-default"><i class='fa fa-share'></i>Cancel</a>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>